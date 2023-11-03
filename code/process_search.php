<?php
require_once('config.php'); 
// $zipcode = $_POST['zipcode'];
// $service = $_POST['services'];
// $animalCategory = $_POST['animalCategory'];
// $query = "SELECT * FROM placedata WHERE `Zip code` = ? AND `Service` = ? AND `Animal` = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param("isi", $zipcode, $service, $animalCategory);
// $stmt->execute();

$zipcode = $_POST['zipcode'];
$service = $_POST['services'];
$animalCategory = $_POST['animalCategory'];
$query = "SELECT * FROM placedata WHERE `Zip code` = ?";
$types = "i";
$params = [&$zipcode];
if ($service != "9") {
    $query .= " AND `Service` = ?";
    $types .= "s";
    $params[] = &$service;  // Pass $service by reference
}
if ($animalCategory != "8") {
    $query .= " AND `Animal` = ?";
    $types .= "s";
    $params[] = &$animalCategory;  // Pass $animalCategory by reference
}
$stmt = $conn->prepare($query);
$bindTypes = str_repeat("s", count($params));
array_unshift($params, $bindTypes);
call_user_func_array([$stmt, 'bind_param'], $params);
$stmt->execute();



$searchResults = $stmt->get_result();
if($searchResults->num_rows==0)
    echo '<script>alert("No entries found")</script>';
else{
    echo '<h1 class="section-title" style="text-align:left;">RESULTS</h1>';
    echo '<hr><div class="row">
<div class="col-lg-10">
<h1>NOT FINDING YOUR SERVICE LISTED?</h1>
</div>
<div class="col-lg-10">Kindly use the Add services feature to add your service listing in our database free of cost.</div>
</div>';
while ($result = $searchResults->fetch_assoc()) {
echo '<hr><div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-7">
<div class="col-lg-7">
<h2 class="section-title" style="text-align:left; color:red">'.$result['Name'].'</h2>
</div>
<div class="col-lg-7"><em>'.$result['Byline'].'</em></div>
<div class="col-lg-7"><img src="assets\telephone.svg" height = "20"> <a href="tel:' . $result['Phone'] .'"> 1234567890</a></div>
<div class="col-lg-7"><img src="assets\geo-fill.svg" height = "20">' . nl2br($result['Address']) . '</div>
<div class="col-lg-7">' . $result['State'] . ', ' . $result['Zip code'] . '</div>
<div class="col-lg-1"></div><div class="col"><img src="assets\clock-fill.svg" height = "20">' . nl2br($result['Avail']) . '</div>
</div>
<div class="col-lg-2">
<img src="'.$result['imgpath'].'" alt="" width="250"style="aspect-ratio:1/1;" >
</div>
</div>';
}}
?>
