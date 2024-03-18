<?php
    session_start();

require_once('..\config.php'); 

$id = $_POST['id'];
$name = $_POST['Name'];
// Get values for other columns
$address = $_POST['Address'];
$zipcode = $_POST['zipcode'];
$byline = $_POST['byline'];
$phone = $_POST['phone'];
$avail = $_POST['avail'];


$sql = "UPDATE `placedata` SET 
        Name='$name', 
        Address='$address', 
        `Zip code`='$zipcode', 
        Byline='$byline', 
        Phone='$phone', 
        Avail='$avail'
        WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['toast_message'] ="Animal updated successfully";
} else {
    $_SESSION['toast_message'] ="Encoundered error : " . $conn->error;
}

$conn->close();
redirect('crud');
