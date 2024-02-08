<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
</head>
<body>
    <div class="main-container yoga-template">
      <!--Banner section-->
      <?php include_once('header.php'); ?>

       <?php  include 'code/display.php'; ?>
    </div>
    <h2>Add New Animal</h2>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <!-- Add similar fields for other columns -->

        <button type="submit">Add Animal</button>
    </form>
</body>
</html>
