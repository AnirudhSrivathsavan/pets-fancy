<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<style>
*{
    margin: 0;padding: 0;
}

.body {
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;    
  height: 100%;
  width: 100%;  
}

.crud-template {
  position: relative;
  z-index: 1;
  background: rgba(256,256,256,0.5);
  margin: 0 auto 100px;
  padding: 3rem;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
</head>
<body>
<?php  
        require_once "code\config.php"; 
        if (session_status() !== PHP_SESSION_ACTIVE) 
        session_start();
        if (!isset($_SESSION['user'])) {
            $_SESSION['toast_message'] = "Please login first to access CRUD";
            redirect('login');
            exit();
        }
        if (isset($_SESSION['toast_message'])) {
            $toastMessage = $_SESSION['toast_message'];
            echo "<script>toastr.info(`".$toastMessage."`);</script>";
            unset($_SESSION['toast_message']);
        }
?>
    <div class="body">  
    <div class="crud-template">
        
       <?php
       include 'code\includes\crudheader.php';
       include 'code\crud\display.php';
       ?>
    </div>
    </div>
</body>
</html>


