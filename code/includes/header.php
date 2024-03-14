<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: index");
    exit; 
}
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>

<style>
  html{
    animation: bodyanim 1s  forwards;
  }

  @keyframes bodyanim {
    0%{
        transform:  translateY(-3rem);
        filter: blur(1rem);
    }
    100%{
        transform: translateY(0);
    }
}
</style>


 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/normailze.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--Font-->
    <link rel="stylesheet" type="text/css" href="font/web-font.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">


    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/31b4dd131e.js" crossorigin="anonymous"></script>
    <script src="code\PlaceData\state_dropdown.js"></script>
    <script src="code\PlaceData\city_dropdown.js"></script>
<!--Font-->
<link rel="stylesheet" type="text/css" href="font/web-font.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">


<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script src="https://kit.fontawesome.com/31b4dd131e.js" crossorigin="anonymous"></script>




<div class="banner">
    <div class="fluid-container">

        <div class="row">
            <div class="col-md  d-none d-md-block">
                <img class="bannerimg" src="assets\logo-icon-removebg-preview.png">
                <img class="bannerimg" src="assets\logo-title-removebg-preview.png">
            </div>
        </div>
    
        <!-- Icon for mobile screens -->
        <div class="mobile text-center d-md-none">
            <img class="bannerimg-mobile" src="assets\logo-icon-removebg-preview.png">
            <img class="bannerimg-mobile" src="assets\logo-title-removebg-preview.png">
        </div>

    </div>
</div>

<style>
    .banner {
        padding: 0.5rem 1rem;
        background-image: url('assets/temp-background.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
    }

    .banner .bannerimg{
        height: 7rem;
        padding-right: 2rem;
    }

    
    .banner .bannerimg-mobile{
        max-width: 90%;
    }
</style>

