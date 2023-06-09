
<?php

      include_once("../admin/config.php");
      $fname=$_POST['fname']; 
      $lname=$_POST['lname']; 
      $email=$_POST['email'];
      $cnumber=$_POST['cnumber'];
      $Address=$_POST['Address'];
      $pwd=$_POST['pwd'];
      
      
      
      $sql = "INSERT INTO user(fname,lname,email,pwd,cnumber,Address)
              VALUES($fname,$lname,$email,$cnumber,$pwd,$Address)";
              if($conn->query($sql)){
                echo"Inserted successfully";
              }
              else{
               echo"Error:".$conn->error;
              }
     $conn->close();
      
      
?>