<?php
require_once('../config.php'); 
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$id = $_GET['id'];
$sql = "UPDATE placedata SET Verified = 1 WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['toast_message'] = 'Entry verified successfully';
    redirect('crud');
    exit();
}
$conn->close();