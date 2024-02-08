<?php
require_once('config.php'); 

$id = $_GET['id'];
$sql = "SELECT * FROM `placedata` WHERE Id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    echo '<h2>Update Animal</h2>
            <form action="update_process.php" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <label for="name">Name:</label>
                <input type="text" name="name" value="'.$row['Name'].'" required>
                <!-- Add similar fields for other columns -->

                <button type="submit">Update Animal</button>
            </form>';
} else {
    echo "Animal not found";
}

$conn->close();
?>
