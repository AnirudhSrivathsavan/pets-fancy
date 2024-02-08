<?php
require_once('config.php'); 

$id = $_POST['id'];
$name = $_POST['name'];
// Get values for other columns

$sql = "UPDATE `placedata` SET Name='$name' WHERE Id=$id";
// Add similar code for other columns

if ($conn->query($sql) === TRUE) {
    echo "Animal updated successfully";
} else {
    echo "Error updating animal: " . $conn->error;
}

$conn->close();
?>
