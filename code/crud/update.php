<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<?php
require_once '../config.php'; 

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
        $_SESSION['toast_message'] = "Please login first to access CRUD";
        redirect('login');
        exit;
    }

if(!isset($_GET['id'])){
    unset($_SESSION['toast_message']);
    $_SESSION['toast_message'] = "A GET error occured, please try again";
    redirect('crud');
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM `placedata` WHERE Id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Animal not found";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        include '..\includes\crudheader.php';
    ?>

    <div class="container">
        
    </div>
</body>
</html>

