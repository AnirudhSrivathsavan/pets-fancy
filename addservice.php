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
    <style>
        body{
          padding-top: 15vh;
        }
    </style>
    <title>Stefanie's Wish</title>
  </head>
  <body>
    <div class="main-container yoga-template">
      <!--Banner section-->
      <?php
        include_once('header.php');
      ?>
      
      
      
      <div class="inside-container contact-section">
        
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="appointment">
            <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title">ADD SERVICE</h2>
            <p class="section-title-desc">Are you a vet, breeder, or pet supplier and want to add your service to our database?</p>
          </div>
        </div>
               <form class="appointment-form" ction="addservice.php" id="myform" method="post" enctype="multipart/form-data" autocomplete="off">
                  <div class="row">

                  <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">                              
                      <input type="text" id="name" name="name" class="form-control " placeholder="Place Name" required="">
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>


                  <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">                              
                      <textarea  id="address" name="address" class="form-control" placeholder="Address" rows="4" required></textarea>
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 box-select appointment-form-col-left">
                      <select name="state" id="state" required class="form-control " >
                      <option value="" disabled selected>Select a state</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota</option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="New Hampshire">New Hampshire</option>
                                <option value="New Jersey">New Jersey</option>
                                <option value="New Mexico">New Mexico</option>
                                <option value="New York">New York</option>
                                <option value="North Carolina">North Carolina</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oklahoma">Oklahoma</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                                <option value="Rhode Island">Rhode Island</option>
                                <option value="South Carolina">South Carolina</option>
                                <option value="South Dakota">South Dakota</option>
                                <option value="Tennessee">Tennessee</option>
                                <option value="Texas">Texas</option>
                                <option value="Utah">Utah</option>
                                <option value="Vermont">Vermont</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Washington">Washington</option>
                                <option value="West Virginia">West Virginia</option>
                                <option value="Wisconsin">Wisconsin</option>
                                <option value="Wyoming">Wyoming</option>
                      </select> 
                     </div>
                     <div class="col-lg-2" style="visibility : hidden;"></div>

                     <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">                              
                      <input type="text" id="zipcode" name="zipcode" class="form-control " placeholder="Zipcode" required="" required pattern="\d{5}"  oninvalid="this.setCustomValidity('Invalid format [XXXXX]')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>

                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">                              
                      <input type="text" id="byline" name="byline" class="form-control " placeholder="Slogan/Quote" required="">
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>


                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">                              
                      <input type="tel" id="phone" name="phone" class="form-control " placeholder="Phone number" required="">
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>


                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8">                              
                    <div class="mb-3">
                    <label for="image" class="form-label">Select an image of your business, logo, etc.</label>
                      <input type="file" id="image" name="image" accept="image/*" class="form-control" required="">
                    </div>
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>

                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 ">                              
                      <textarea  id="avail" name="avail" class="form-control " placeholder="Availability" rows="7" required></textarea>
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>


                    <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 box-select appointment-form-col-left">
                      <select name="service" required id="service" class="form-control " >
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
                     <div class="col-lg-2" style="visibility : hidden;"></div>

                     <div class="col-lg-2" style="visibility : hidden;"></div>
                     <div class="col-lg-8 box-select appointment-form-col-left">
                      <select id="animal" required name="animal" class="form-control" >
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
                     <div class="col-lg-2" style="visibility : hidden;"></div>

                     <div class="col-lg-2" style="visibility : hidden;"></div>
                    <div class="col-lg-8 appointment-form-col-left">
                      <button type="submit" value="Submit" id="submit-button" class="appointment-form-btn" >Search </button>                              
                    </div>
                    <div class="col-lg-2" style="visibility : hidden;"></div>
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


<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            addservices(); // Call the function if the form is submitted
        }
        function addservices(){
            require_once('code/config.php'); 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $address = $_POST["address"];
                $state = $_POST["state"];
                $zipcode = $_POST["zipcode"];
                $byline = $_POST["byline"];
                $phone = $_POST["phone"];
                if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) { 
                  $uniqueFilename = time() . '_' . mt_rand(1000, 9999) . '_' . $_FILES['image']['name'];
                  $destination = "images/" . $uniqueFilename;
                  move_uploaded_file($_FILES['image']['tmp_name'], $destination);
              }
                $avail = $_POST["avail"];
                $service = $_POST["service"];
                $animal = $_POST["animal"];
                $imgpath = "images/" . $uniqueFilename;
                $sql = "INSERT INTO placedata (Name, Address, State, `Zip code`, Byline, Phone, imgpath, Avail, Service, Animal, Verified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssissssii", $name, $address, $state, $zipcode, $byline, $phone, $imgpath, $avail, $service, $animal);
                if ($stmt->execute()) {
                    echo "<script>alert('Service has been edited and will be visible after verification')</script>";
                    redirect("");
                } else {
                    echo "<script>alert('Error! $sql . <br> . $conn->error.')</script>";
                }
                $stmt->close();
            }
        }
    ?>