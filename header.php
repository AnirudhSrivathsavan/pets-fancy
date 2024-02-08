

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

    <script>
$(document).ready(function () {
    var banner = $('.banner');
    var minOpacity = 0.1;
    $(window).scroll(function () {
        if (!banner.is(":hover")) {
            var opacity = 1 - $(window).scrollTop() / 500;
            banner.css("opacity", opacity < minOpacity ? minOpacity : opacity);
        }
    });
    banner.hover(
        function () {
            banner.css("opacity", 1);
        },
        function () {
            var opacity = 1 - $(window).scrollTop() / 250;
            banner.css("opacity", opacity < minOpacity ? minOpacity : opacity);
            banner.css("transition", "opacity 1s ease");
        }
    );
});

</script>

<banner class="banner">
        <div class="banner-overlay"></div>
        <div class="inside-container top-bar">
          <div class="row">
          <div class="col-md-1 col-sm-1 logo order-1 order-md-12">
              <img class="logo-img" src="assets\logo-icon-removebg-preview.png" alt="" >
            </div> 
            <div class="col-md-4 col-sm-0 top-bar-left order-2 order-md-12" style="visibility : hidden; ">
            </div>
            <div class="col-md-4 col-sm-3 top-bar-right order-3 order-md-12">
              <br>
              <span>
              <a href="" class="banner-btn-b">Buy pet insurance</a>
            </span>
            <span>
              <a href="" class="banner-btn-b">Donate</a></span>
            </div>     
            <div class="col-md-3-lg-12 top-bar-right order-5 order-md-12" style="padding:0px 0px 0px 1%; margin: -10px auto ">
            <br>
              <div class="row" >
              <i class="fas fa-phone-alt" style="margin: 0px 5px 0px 0px"></i> 
              <a href="tel:+1234567890">+1 234 567 890</a>
              </div>
              <div class="row">
              <i class="fas fa-envelope-open-text" style="margin: 0px 5px 0px 0px"></i> 
              <a href="mailto:example@stefanieswish.com">example@stefanieswish.com</a>
              </div>
            </div>       
          </div>      
        </div>
      </banner>
      <div style="height: 20vh;"></div>
