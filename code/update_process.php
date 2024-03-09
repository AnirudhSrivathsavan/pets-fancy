<?php
require_once('config.php'); 

$id = $_POST['Id'];
$name = $_POST['Name'];
// Get values for other columns
$address = $_POST['Address'];
$state = $_POST['State'];
$zipcode = $_POST['Zip_code'];
$byline = $_POST['Byline'];
$phone = $_POST['Phone'];
$imgpath = $_POST['imgpath'];
$avail = $_POST['Avail'];
$service = $_POST['Service'];
$animal = $_POST['Animal'];
$verified = $_POST['Verified'];

$sql = "UPDATE `placedata` SET 
        Name='$name', 
        Address='$address', 
        State='$state', 
        `Zip code`='$zipcode', 
        Byline='$byline', 
        Phone='$phone', 
        imgpath='$imgpath', 
        Avail='$avail', 
        Service='$service', 
        Animal='$animal', 
        Verified='$verified' 
        WHERE Id=$id;";

if ($conn->query($sql) === TRUE) {
    echo "Animal updated successfully";
} else {
    echo "Error updating animal: " . $conn->error;
}

$conn->close();
