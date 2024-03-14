<style>
    tr,td,th{
        padding: 10px;
    }
    #table{
        display: grid;
        place-items: center;
    }
</style>

<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        redirect('crud');
        exit;
    }
    if (!isset($_SESSION['user'])) {
        $_SESSION['toast_message'] = "Please login first to access CRUD";
        redirect('login');
        exit();
    }


$sql = "SELECT * FROM placedata";
$result = $db->conn->query($sql);
// Display records in a table
echo '<br><div  id="table""><table border="5" style="text-align: center;">';

if ($result->num_rows > 0) {
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Address</th>';
    echo '<th>City</th>';
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
        echo '<td>' . nl2br($row['Address']) . '</td>';
        echo '<td>' . $row['City'] . '</td>';
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
        echo '<td><a href="code/crud/update.php?id=' . $row['Id'] . '">Update</a><br><hr>';
        echo '<a href="code/crud/delete.php?id=' . $row['Id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a><br><hr>';
        echo '<a href="code/crud/verify.php?id=' . $row['Id'] . '"onclick="return confirm(\'Are you sure?\')">Verify</a> </td>';
        echo '</tr>';
    }

} else {
    echo "<th>No records found</th>";
}

echo "</div></table>";

// Close the database connection
$db->conn->close();
?>