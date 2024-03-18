<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="code\PlaceData\state_dropdown.js"></script>
<script src="code\PlaceData\city_dropdown.js"></script>

<?php
require_once 'code/config.php'; 

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
        $_SESSION['toast_message'] = "Please login first to access CRUD";
        redirect('login');
        exit;
    }

if(!isset($_GET['id'])){
    unset($_SESSION['toast_message']);
    $_SESSION['toast_message'] = "A GET error occured, please try again";
    redirect('crud');
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM `placedata` WHERE Id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Animal not found";
}

$conn->close();
?>

<script>
    function setSelectedOptionByName( optionValue) {
    var selectElement = document.querySelector('select[name="state"]');
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        if (option.value === optionValue) {
            option.selected = true;
            break;
        }
    }
}

setSelectedOptionByName('<?php echo $row['state'] ?>');

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        include 'code\includes\crudheader.php';
    ?>

    <div class="container updateform">
    <form action="code\crud\update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    
    <label for="name">Name:</label>
    <input type="text" name="Name" value="<?php echo $row['Name']; ?>" required><br><br>

    <label for="Address">Address:</label>
    <textarea name="Address" required><?php echo $row['Address']; ?></textarea><br><br>

    <!-- <label for="city">City:</label>
    <input type="text" name="city" value="<?php echo $row['City']; ?>" required><br><br>

    <label for="state">State:</label>
    <select id="state_dropdown" name="state" id="state" required class="form-control ">
                                
    </select> <br><br> -->


    <label for="zipcode">Zip Code:</label>
    <input type="number" name="zipcode" value="<?php echo $row['Zip code']; ?>"><br><br>

    <label for="byline">Byline:</label>
    <input type="text" name="byline" value="<?php echo $row['Byline']; ?>" required><br><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $row['Phone']; ?>"><br><br>

    <label for="avail">Availability:</label>
    <textarea name="avail" required><?php echo $row['Avail']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form> 
    </div>
</body>
</html>


<style>
     label{
        min-width: 9rem;
    }
    input,textarea,select{
        width: 15rem;
    }
    #imagePreview .preview-image {
    width: 200px;
    height: 200px;
  }
  .updateform {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.updateform input[type="text"],
.updateform input[type="password"],
.updateform textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.updateform label {
  font-weight: bold;
}

.updateform input[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.updateform input[type="submit"]:hover {
  background-color: #0056b3;
}

  
</style>

<!-- <script>
    var selectedCity = 'Arkansas';
    $("#state_dropdown option").each(function() {
        if ($(this).text() == selectedCity) {
            $(this).prop("selected", true);
            return false;
        }
    });

document.getElementById('image').addEventListener('change', function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();

  reader.onload = function(event) {
    var imgElement = document.createElement('img');
    imgElement.src = event.target.result;
    imgElement.classList.add('preview-image');
    document.getElementById('imagePreview').innerHTML = '';
    document.getElementById('imagePreview').appendChild(imgElement);
  };

  reader.readAsDataURL(file);
});

 <label for="imgpath">Image:</label>
    <input type="file" accept="image/*" name="imgpath"><br><br>
    <div id="imagePreview">
        <img src="<?php echo $row['imgpath']?>" class="preview-image">
    </div> 

    <label for="avail">Availability:</label>
    <textarea name="avail" required><?php echo $row['Avail']; ?></textarea><br><br>

    <label for="service">Service:</label>
    <input type="number" name="service" value="<?php echo $row['Service']; ?>" required><br><br>

    <label for="animal">Animal:</label>
    <input type="number" name="animal" value="<?php echo $row['Animal']; ?>" required><br><br>
    </script> -->