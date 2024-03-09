<style>
    tr,td,th{
        padding: 10px;
    }
</style>

<?php
require_once('config.php'); 

$sql = "SELECT * FROM placedata";
$result = $db->conn->query($sql);
// Display records in a table
if ($result->num_rows > 0) {
    echo '<br><div style="width: 98%; /* Set the width of the div */
    margin: 0 auto;">
    <table border="5" style="text-align: center;">';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Address</th>';
    echo '<th>State</th>';
    echo '<th>Zip code</th>';
    echo '<th>Byline</th>';
    echo '<th>Phone</th>';
    echo '<th>Image</th>';
    echo '<th>Availability</th>';
    echo '<th>Service</th>';
    echo '<th>Animal</th>';
    echo '<th>Verified</th>';
    echo '<th>Action</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Name'] . '</td>';
        echo '<td>' . $row['Address'] . '</td>';
        echo '<td>' . $row['State'] . '</td>';
        echo '<td>' . $row['Zip code'] . '</td>';
        echo '<td>' . $row['Byline'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '<td style = " padding: 0px;"><img src="' . $row['imgpath'] . '" alt="Image" width="150" height="150"></td>';
        echo '<td>' . nl2br($row['Avail']) . '</td>';
        echo '<td>' . $row['Service'] . '</td>';
        echo '<td>' . $row['Animal'] . '</td>';
        echo '<td>' . $row['Verified'] . '</td>';
        
        // Add update and delete links
        echo '<td><a href="code/update.php?id=' . $row['Id'] . '">Update</a><br><hr>';
        echo '<a href="code/delete.php?id=' . $row['Id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a><br><hr>';
        echo '<a href="code/verify.php?id=' . $row['Id'] . '"onclick="return confirm(\'Are you sure?\')">Verify</a> </td>';
        echo '</tr>';
    }

    echo '</div></table>';
} else {
    echo "No records found";
}

// Close the database connection
$db->conn->close();
?>