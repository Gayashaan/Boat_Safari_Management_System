<?php
//Linking the configuration file
require 'config.php';

if(isset($_POST['submit']))
{
  $b_license_no = $_POST['b_license_no'];
  $b_name = $_POST['b_name'];
  $b_model = $_POST['b_model'];
  $b_capacity = $_POST['b_capacity'];
  $b_length = $_POST['b_length'];
  $b_weight = $_POST['b_weight'];

  $b_image = $_FILES['b_image']['name'];
  $b_image_tmp = $_FILES['b_image']['tmp_name'];
  $b_image_size = $_FILES['b_image']['size'];
  $_img_folder = "../Uploads/boats_img/".basename($b_image);
  $_img_extension = strtolower(pathinfo($_img_folder,PATHINFO_EXTENSION));

  $prefix = "B";//ADMIN USER ID PREFIX
  $last_db_id = "SELECT b_id FROM boat ORDER BY b_id DESC LIMIT 1";//check thee last id in the database
  $result3 = $conn->query($last_db_id);

  if($result3->num_rows > 0){
    $row = $result3->fetch_assoc();
    $lastID = $row['b_id'];//save last id in the database to a variable A001(EXAMPLE)
    $incNumber = intval(substr($lastID, 1));//First remove the A(prefix) from the last id and then convert it into a intereger 1 MEAN A001 WILL BECOME 001 IF WE USE 2 IT WILL BECOME 01
    $incNumber = $incNumber + 1;//inTval will convert string to int and substr will cut the string
  }
  else
  {
    $incNumber = 1;
  }

  $bID = $prefix . sprintf("%03d", $incNumber);

  $sql = "INSERT INTO boat(b_id, b_license_no,b_name,b_model,b_capacity,b_length,b_weight) 
          VALUES('$bID','$b_license_no','$b_name','$b_model','$b_capacity','$b_length','$b_weight')";

  if($conn->query($sql))
  {
    echo "<script>alert('Boat added successfully')</script>";
    header("Refresh: 0; URL = manageBoat.php");
  }
  else{
    echo "Error: ".$conn->error;
  }

  if(isset($_FILES['b_image']))
  {
    if($_img_extension == "jpg" || $_img_extension == "png" || $_img_extension == "jpeg")
    {
      if($b_image_size < 5000000)
      {
        if(move_uploaded_file($b_image_tmp, $_img_folder))
        {
          $sql = "UPDATE boat SET b_image = '$b_image' WHERE b_id = '$bID'";
          $result = $conn->query($sql);
          if($result)
          {
            echo "<script>alert('Image uploaded successfully')</script>";
          }
          else
          {
            echo "<script>alert('Image upload failed')</script>";
          }
        }
        else
        {
          echo "<script>alert('Image upload failed')</script>";
        }
      }
      else
      {
        echo "<script>alert('Image size must be less than 1MB')</script>";
      }
    }
    else
    {
      echo "<script>alert('Image format must be jpg, jpeg or png')</script>";
    }
  }
  else
  {
    echo "<script>alert('Please select an image')</script>";
  }

  
}

$conn->close();
?>
