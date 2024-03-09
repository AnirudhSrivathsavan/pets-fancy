<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
        if (isset($_SESSION['toast_message'])) {
            $toastMessage = $_SESSION['toast_message'];
            echo '<script type="text/javascript">toastr.success('.$toastMessage.'); alert("here");</script>';
            unset($_SESSION['toast_message']);
        }
    }
?>



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

</body>
</html>


