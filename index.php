<?php 
require_once('code\config.php'); 
$folderPath = '.\images';

if (!is_dir($folderPath)) {
    mkdir($folderPath, 0777, true);
}

?>

<!doctype html>
<html lang="en">
  <head>
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
    <script>
      $(document).ready(function() {
         $('#search').submit(function(e) {
        e.preventDefault();

        var zipcode = $('#zipcode').val();
        var services = $('#services').val();
        var animalCategory = $('#animal-category').val();
        $.ajax({
            type: 'POST',
            url: 'code/process_search.php',
            data: {
                zipcode: zipcode,
                services: services,
                animalCategory: animalCategory
            },
            success: function(response) {
                $('.result-entry').html(response);
            }
          });
        });
      });
    </script>

    <title>Stefanie's Wish</title>
  </head>
  <body>
    <div class="main-container yoga-template">
      <!--Banner section-->
      <?php
        include_once('header.php');
      ?>
      <!--Class Yoga Center-->
      <div class="best-class-club">
        <div class="row best-class-sections-detail">
          <div class="col-lg-6 best-class-club-desc">
            <div class="row">
              <div class="col-lg-1">
                
              </div>
              <div class="col-lg-11 detail-col-club">
                <h2 class="club-section-title">Our Motto <hr>
                </h2>
                <em style="text-align: justify; text-justify: inter-word;" >"Our mission to improve and save animal lives by promoting quality care with
                compassion through adoption.”</em>
                <p style="text-align: justify; text-justify: inter-word; padding-right: 15px; font-size:large; line-height: 25px;"><br>&emsp;&emsp;As Stefanieswish.org, Our work of network of individuals and organizations, is to
                prevent cruelty, abuse, neglect and exploitation of these animals and to assure that their
                interests and well-being are fully, effectively, and humanely guaranteed by an aware of
                our caring society.
                We future plan to rescue, rehabilitate and rehome animals in crisis, ensure
                Stefanies wish to dedicated to ensuring healthy pets through education, advocacy and
                affordable services, and inspire a community where the animal-human bond is
                celebrated and nurtured. Also, as America's animal shelters through building community
                programs and partnerships all across the nation.
                We are here to improve and save lives through compassionate care, community
                engagement and advocacy for animals. We are humane rescuers for the oldest and
                largest nonprofit animal welfare organization in the state of Florida. Our vision is that
                the greatness of a nation can be judged by the way how animals are treated. If you think
                who we are will exclude any of God&#39;s creatures from the shelter of compassion and pity,
                you will have men who will deal likewise with their fellow men. The Mercy tradition is
                based on the values of compassion, respect, integrity, justice, hope and joy, as inspired
                to save lives of these animals.</p>  
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 best-class-club-img">

          </div>
        </div>
      </div>
      
      <!--Yoga Place-->
      <div class="yogaPlace-section">
        <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title">Our Activities</h2>
            <p class="section-title-desc">Here at Stefanie's Wish, we do everything to help you care for your pets better</p>
          </div>
        </div>
        <div class="inside-container ">
          <div class="row yogaPlace-col">
            <div class="col-lg-3">
              <div class="yogaPlace-img">
                <img src="assets\services.png" class="yogaPlace-in-img" alt="">
              </div>              
              <a href="#"><h3 class="yogaPlace-title">Add Service</h3></a>
              <p class="yogaPlace-desc">Add your service to our listing database so that people can find your service.</p>
            </div>
            <div class="col-lg-3">
              <div class="yogaPlace-img">
                <img src="assets\services.png" class="yogaPlace-in-img" alt="">
              </div>
              <a href="#"><h3 class="yogaPlace-title">Sign up for Volunteering</h3></a>
              <p class="yogaPlace-desc">Sign up for volunteering and we will reach out when we need a hand</p>
            </div>
            <div class="col-lg-3">
              <div class="yogaPlace-img">
                <img src="assets\services.png" class="yogaPlace-in-img" alt="">
              </div>
              <a href="#"><h3 class="yogaPlace-title">Donate</h3></a>
              <p class="yogaPlace-desc">Donate to our cause and enable us to maintain our operations.</p>
            </div>
            <div class="col-lg-3">
              <div class="yogaPlace-img">
                <img src="assets\services.png" class="yogaPlace-in-img" alt="">
              </div>
              <a href="#"><h3 class="yogaPlace-title">Activity 4</h3></a>
              <p class="yogaPlace-desc">Description 4</p>
            </div>
          </div>
        </div>
      </div>
      <!--Contact us-->
      <div class="inside-container contact-section">
        
        <div class="row">
          <div class="col-lg">
            <div class="appointment">
            <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title">SERVICE FINDER</h2>
            <p class="section-title-desc">Need to find a vet, shelter or anything else? Do use our handy and verified list of services</p>
          </div>
        </div>
               <form class="appointment-form" id="search">
                  <div class="row">
                  <div class="col-lg-3" style="visibility : hidden;"></div>
                    <div class="col-lg-6 appointment-form-col-left">                              
                      <input type="text" id="zipcode" name="zipcode" class="form-control appointment-form-input" placeholder="Zipcode" required="" required pattern="\d{5}"  oninvalid="this.setCustomValidity('Invalid format [XXXXX]')"
       oninput="this.setCustomValidity('')">
                    </div>
                    <div id="zipcode-error" class="col-lg-3" style="visibility : hidden;"></div>


                    <div class="col-lg-3" style="visibility : hidden;"></div>
                    <div class="col-lg-6 box-select appointment-form-col-left">
                      <select name="services" id="services" class="form-control appointment-form-input" >
                      <option value="" selected disabled>Choose a service</option>
                            <option value="1">Vet</option>
                            <option value="2">Breeder</option>
                            <option value="3">Rescue</option>
                            <option value="4">Adoption</option>
                            <option value="5">Groomer</option>
                            <option value="6">Foster</option>
                            <option value="7">Animal Control</option>
                            <option value="8">Product Suppliers</option>
                            <option value="9">All</option>
                      </select> 
                     </div>
                     <div class="col-lg-3" style="visibility : hidden;"></div>
                     <div class="col-lg-3" style="visibility : hidden;"></div>
                     <div class="col-lg-6 box-select appointment-form-col-left">
                      <select id="animal-category" name="animal-category" class="form-control appointment-form-input" >
                      <option value="" disabled selected>Select an animal category</option>
                          <option value="1">Large Animals</option>
                          <option value="2">Small Animals</option>
                          <option value="3">Dogs</option>
                          <option value="4">Cats</option>
                          <option value="5">Avions</option>
                          <option value="6">Reptiles</option>
                          <option value="7">Exotic/Speciality</option>
                          <option value="8">All</option>
                      </select>
                     </div>
                     <div class="col-lg-3" style="visibility : hidden;"></div>
                     <div class="col-lg-3" style="visibility : hidden;"></div>
                    <div class="col-6 appointment-form-col-left">
                      <button type="submit" value="Submit" id="submit-button" class="appointment-form-btn" >Search </button>                              
                    </div>
                    <div class="col-lg-3" style="visibility : hidden;"></div>
                  </div>
               </form>
               <hr style=" border-top: 5px solid #8c8b8b;">
               <div class="result-div">
            <div class="result-entry">
              
              </div>
            </div>
            </div> 
            </div> 
          </div>        
        </div>
        </div>
      

      <?php
      include_once('footer.php');
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>