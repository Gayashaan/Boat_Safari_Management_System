<?php

 include_once("../admin/config.php");

$ID=$_GET['updateid'] ;    
 if(isset($_POST['updateid'])){
     
  

  $fname=$_POST['fname']; 
  $lname=$_POST['lname']; 
  $email=$_POST['email'];
  $cnumber=$_POST['cnumber'];
  $Address=$_POST['Address'];
  $pwd=$_POST['pwd'];


       
   $sql="UPDATE user set fname='$fname',lname='$lname',email='$email',pwd='$pwd',cnumber='$cnumber',Address='$Address'
   WHERE userID ='$ID'";

  if($conn->query($sql)===TRUE){
      echo" Updated successfully";
  }
  else{
     echo"Error:".$conn->error;
  }
}
 
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/user_profile.css">
    
    <title>User Profile</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <div class="container">

        <div class="wrap">
            <div class="tourwrap">
                <h2>Account Details </h2>
                <div class="profilepic">
                    <img src="images\userprofilepic.jpg">
               </div>
                <div class="form">
                 <form  action="" method="post">
                 <?php
                   $query= "select * from user where userID =  '$ID'";
                   $result = mysqli_query($conn,$query);
                   $row = mysqli_fetch_assoc($result);
                   ?>
                    <label for ="fname"> First Name </label>
                    <input type="text" name="fname" value="<?php echo $row['fname'];?>"><br><br>

                    <label for="lname"> Last Name </label>
                    <input type="text" name="lname" value="<?php echo $row['lname'];?>"><br><br>

                    <label for="add">Address</label>
                    <input type="text" name="Address" value="<?php echo $row['Address'];?>"><br><br>

                    <label for="number"> Phone Number</label>
                    <input type="text" name="cnumber" value="<?php echo $row['cnumber'];?>"><br><br> 

                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>

                     <label for="cpsw"> Current Password</label>
                    <input type="password" name="pwd" value="<?php echo $row['pwd'];?>"><br><br> 

                   
                    </form>
                </div>
                <div class="buttons">
                <div class="updatebtn">
                    <button type="submit" value="submit" name="update"><a href='update.php?updateid=<?php echo "$userID"?>'>Update</a></button>
                </div>
                <div class="deletebtn">
                    <button type="submit" value="submit"><a href='delete.php?deleteid=<?php echo "$userID"?>' >Delete Account</a></button>
                </div>
               </div>

                <div class="Feedback">
                    <h2> Give us your Feedback</h2>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                    <input type="textarea"  name="feedback" placeholder="Give us your feedback"><br><br>
                    <input type ="number" name="rate" placeholder="rate"><br><br>
                    <input type="submit" value="submit Feedback" name="submitfeed">
                   </form>
                </div>
             </div>

        </div>
        
    </div>
    
    
    
</body>
</html>



     


     
    
    
