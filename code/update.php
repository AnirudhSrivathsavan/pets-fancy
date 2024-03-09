<div class="container">

<?php
require_once('config.php'); 

$id = $_GET['id'];
$sql = "SELECT * FROM `placedata` WHERE Id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    echo '<h2>Update Animal</h2>
            <form action="update_process.php" method="post">';
    foreach ($row as $key => $value) {
        if ($key !== 'Id' || $key !== 'Verified') {
            echo '<label for="'.$key.'">'.($key).':</label>
                  <input type="text" name="'.$key.'" value="'.$value.'" required><br>';
        }
    }
    echo '<button type="submit">Update Animal</button>
          </form>';
} else {
    echo "Animal not found";
}

$conn->close();
?>

</div>