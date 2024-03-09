<?php
require_once('config.php'); 

$id = $_GET['id'];
$sql = "UPDATE placedata SET Verified = 1 WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Entry verified successfully successfully";
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $_SESSION['toast_message'] = 'Entry verified successfully';
    redirect('crud');
    exit();
} else {
    echo "Error deleting animal: " . $conn->error;
}

$conn->close();