<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      text-align: center;
    }
    .error-container {
      margin-top: 50px;
    }
    .error-icon {
      font-size: 100px;
      color: #ff6347; /* Red color */
    }
    .error-title {
      font-size: 24px;
      margin-top: 20px;
    }
    .error-message {
      font-size: 18px;
      margin-top: 10px;
    }
    .back-home-link {
      margin-top: 30px;
      display: inline-block;
      text-decoration: none;
      color: #007bff; /* Blue color */
      font-weight: bold;
    }
  </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-container yoga-template">
<?php
    include 'code/includes/header.php';
?>
<div class="container">
<div class="error-container">
    <div class="error-icon">
      <!-- Replace the icon with your desired icon -->
      <i class="fas fa-exclamation-triangle"></i>
    </div>
    <div class="error-title">
      Page Not Found!
    </div>
    <div class="error-message">
      The page you are looking for dows not exist. Please recheck your URL.
    </div>
    <a href="./.." class="back-home-link">Back to Homepage</a>
  </div>
</div></div>
</body>
</html>
