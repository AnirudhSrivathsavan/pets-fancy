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




<script src="https://kit.fontawesome.com/31b4dd131e.js" crossorigin="anonymous"></script>
<style>
    .mob-button-group {
    padding-top: 3rem;
    display: flex;
    align-items: center;
}

.mob-button {
    flex: 1;
    text-align: center;
}

.mob-button a {
    display: block;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.mob-button a:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.button-group .button{
    padding: 0.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgba(50, 50, 50, 0.7); /* Translucent dark grey background */
    color: #fff;
    text-align: center;
    margin-bottom: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: rgba(255, 105, 180, 0.7); /* Darker translucent dark grey background on hover */
}


</style>



<div class="banner">
    <div class="fluid-container">
        <div class="row">
            <div class="col-md-10  d-none d-md-block">
                <img class="bannerimg" src="assets\logo-icon-removebg-preview.png">
                <img class="bannerimg" src="assets\logo-title-removebg-preview.png">
            </div>
            <div class="col-md-2 d-none d-md-block button-group">
                <div class="row button">Donate now</div>
                <div class="row button">Pets Insurance</div>
            </div>
            
        </div>
    
        <!-- Icon for mobile screens -->
        <div class="mobile text-center d-md-none">
            <img class="bannerimg-mobile" src="assets\logo-icon-removebg-preview.png">
            <img class="bannerimg-mobile" src="assets\logo-title-removebg-preview.png">
            <div class="row mob-button-group" style = "">
                <div class="col mob-button"><a href="">Donate now</a></div>
                <div class="col mob-button"><a href="">Pets Insurance</a></div>
            </div>
        </div>

    </div>
</div>

<style>
    .banner {
        padding: 2rem 2rem ;
        background-image: url('assets/temp-background.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
        background-blend-mode: lighten;
    }

    .banner .bannerimg{
        height: 7rem;
        padding-right: 2rem;
    }
    
    .banner .bannerimg-mobile{
        max-width: 90%;
    }
</style>

