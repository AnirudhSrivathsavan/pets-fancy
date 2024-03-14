<?php


require_once('../config.php'); 
session_start();
$id = $_GET['id'];
$sql = "SELECT `imgpath` from `placedata` WHERE Id=$id"; 
$file=($conn->query($sql)->fetch_assoc())["imgpath"];
if (file_exists($file)) {
    unlink($file);
}

$sql = "DELETE FROM `placedata` WHERE Id=$id";
unset($_SESSION['toast_message']);

if ($conn->query($sql) === TRUE) {
    $_SESSION['toast_message'] = "Animal deleted successfully";
} else {
    $_SESSION['toast_message'] =  "Error deleting animal: " . $conn->error;
}

$conn->close();
redirect('crud');
 