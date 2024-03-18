<?php 
require_once('code\config.php'); 
$folderPath = '.\images';

if (!is_dir($folderPath)) {
    mkdir($folderPath, 0777, true);
}

   ob_start();
   session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

    <script>
      $(document).ready(function() {
         $('#search').submit(function(e) {
        e.preventDefault();
        var state = $('#state_dropdown').val();
        var city = $('#city_dropdown').val();
        var services = $('#services').val();
        var animalCategory = $('#animal-category').val();
        $.ajax({
            type: 'POST',
            url: 'code/process_search.php',
            data: {
                state :state,
                city: city,
                services: services,
                animalCategory: animalCategory
            },
            success: function(response) {
                $('.result-entry').html(response);
            }
          });
        });
      });

      window.onload = function() {
        document.getElementById("search").reset();
      };
    </script>

    <title>Stefanie's Wish</title>
  </head>
  <body>
    <div class="main-container yoga-template">
      <?php
        include_once 'code/includes/header.php';
      ?>

      
      <div class="yogaPlace-section">      <hr style = "padding : 0; margin : 0;">

        <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title">Our Activities</h2>
            <p class="section-title-desc">Here at Stefanie's Wish, we do everything to help you care for your pets better</p>
          </div>
        </div>
        <div class="inside-container ">
          <div class="row yogaPlace-col">
            <div class="col-lg-3">
              <a href="addservice"><div class="yogaPlace-img">
                <img src="assets\addservice.bmp" class="yogaPlace-in-img" alt="">
              </div>              
              <h3 class="yogaPlace-title">Add Service</h3>
              <p class="yogaPlace-desc">Add your service to our listing database so that people can find your service.</p></a>
            </div>

            <div class="col-lg-3"><a href="https://docs.google.com/forms/d/e/1FAIpQLSd0Wd-yKK10h9VuIrYRdSAYNkFBOsTQpfSfMLkVnCs8hHGGYw/viewform?usp=sf_link">
              <div class="yogaPlace-img">
                <img src="assets\Helpinghands.png" class="yogaPlace-in-img" alt="">
              </div>
              <h3 class="yogaPlace-title">Sign up for Volunteering</h3>
              <p class="yogaPlace-desc">Sign up for volunteering and we will reach out when we need a hand</p></a>
            </div>

            <div class="col-lg-3"><a href="#">
              <div class="yogaPlace-img">
                <img src="assets\donate.bmp" class="yogaPlace-in-img" alt="">
              </div>
              <h3 class="yogaPlace-title">Donate</h3>
              <p class="yogaPlace-desc">Donate to our cause and enable us to maintain our operations.</p></a>
            </div>
            <div class="col-lg-3"><a href="./aboutus">
              <div class="yogaPlace-img">
                <img src="assets\aboutus.bmp" class="yogaPlace-in-img" alt="">
              </div>
              <h3 class="yogaPlace-title">About us</h3>
              <p class="yogaPlace-desc">Learn more about our organization, the people behind it and and our goals.</p></a>
            </div>
          </div>
        </div>
        <hr><br>
        <div class="inside-container" style="margin: 0 auto;">
    <div class="row sections-detail">
      <div class="col-md-1"></div>
        <div class="col-md-5" style="border-right: 10px solid; border-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)) 1;">
            <h2 class="section-title" style="text-align: justify;">Buy pets insurance</h2>
            <hr>
            <p class="section-title-desc" style="text-align: justify; line-height: 30px;">
                Pet insurance has become increasingly vital in today's world, where pets are cherished members of countless families. Much like humans, pets can encounter unexpected health issues, accidents, and illnesses. Veterinary care costs can escalate rapidly, placing a significant financial burden on pet owners. Pet insurance provides a safety net, ensuring that pet owners can afford necessary medical treatment without worrying about the cost.
                <br>
                At Stefanie's Wish, we recognize the profound bond between pets and their owners. Our mission is to ensure that every pet receives the best possible care, regardless of financial circumstances. We offer a range of comprehensive and affordable pet insurance plans tailored to meet the diverse needs of pet owners.
            </p>
            <hr>
            <a href="#" style="display: inline-block; padding: 12px 24px; background-color: #4CAF50; color: #fff; text-decoration: none; border: none; border-radius: 30px; font-size: 16px; font-weight: bold; letter-spacing: 1px; text-transform: uppercase; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">Click here to know more</a>
        </div>
        <div class="col-md-5">
            <img src="assets\insurance.png" alt="" srcset="" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-1"></div>

    </div>
    <hr>
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
                    <select id="state_dropdown" name="state" id="state" required class="form-control " >
                      <option value="" disabled selected>Select a state</option>
                                
                      </select> 
                    </div>
                    <div class="col-lg-3" style="visibility : hidden;"></div>

                    <div class="col-lg-3" style="visibility : hidden;"></div>
                    <div class="col-lg-6 appointment-form-col-left ">                              
                    <select id="city_dropdown" name="city" id="city" required class="form-control " >
                      <option value="" disabled selected>Select a City</option>
                                
                      </select> 
                    </div>
                    <div class="col-lg-3" style="visibility : hidden;"></div>


                    <div class="col-lg-3" style="visibility : hidden;"></div>
                    <div class="col-lg-6 appointment-form-col-left">
                      <select name="services" id="services" class="form-control " >
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
                     <div class="col-lg-6 appointment-form-col-left">
                      <select id="animal-category" name="animal-category" class="form-control " >
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
                    <div class="col-6 appointment-form-col-left" >
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
      include_once('code/includes/footer.php');
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>