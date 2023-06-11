<?php
    include_once("../admin/config.php");

    session_start();
    if($_SESSION['userID'] == ""){
        header("LOCATION: ../main/deniedpage.php");
        echo "<script> alert('Please Login');</script>";
        // header("location: ../main/adminloging.php");
        die();
        
    }else{
        $userID = $_SESSION['userID'];
        $ufname = $_SESSION['fname'];
        $ulname = $_SESSION['lname'];
        $uemail = $_SESSION['email'];
        $ucnumber = $_SESSION['cnumber'];
        
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
                   $query= "select * from 'user'";
                   $result = mysqli_query($conn,$query);
                   while ($row = mysqli_fetch_assoc($result)){
                   
                    <label for ="fname"> First Name </label>
                    <input type="text" value="echo $row['fname'];"><br><br>

                    <label for="lname"> Last Name </label>
                    <input type="text" value="echo $row['lname'];"><br><br>

                    <label for="add">Address</label>
                    <input type="text" value="echo $row['Address'];"><br><br>

                    <label for="number"> Phone Number</label>
                    <input type="text" value="echo $row['cnumber'];"><br><br> 

                    <label for="email">Email</label>
                    <input type="text" value="echo $row['email'];"><br><br>

                     <label for="cpsw"> Current Password</label>
                    <input type="password" value=" echo $row['pwd'];"><br><br> 

                    <label for="npsw">Newpassword</label>
                    <input type="password" placeholder="Enter new password"><br><br>

                    <label for="conpsw"> Confirm Password<label>
                    <input type="password" placeholder="Confirm new password"><br><br>
                   }?>
                    </form>
                </div>
                <div class="buttons">
                <div class="updatebtn">
                    <button type="submit" value="submit"><a href="update.php">Update</a></button>
                </div>
                <div class="deletebtn">
                    <button type="submit" value="submit"><a href="delete.php">Delete Account</a></button>
                </div>
                </div>

        </div>
        <div class="Feedback">
            <h2> Give us your Feedback</h2>
            <input type="textarea" name="feedback">
            <button type="submit" value="submit"> Submit Feedback</button>
        </div>
    </div>
    
    
    
</body>
</html>

