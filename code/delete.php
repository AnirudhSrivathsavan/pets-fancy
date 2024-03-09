<?php
require_once('config.php'); 

$id = $_GET['id'];
$sql = "DELETE FROM `placedata` WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Animal deleted successfully";
} else {
    echo "Error deleting animal: " . $conn->error;
}

$conn->close();