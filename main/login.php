<?php
    include_once("../admin/database.php");
    include_once("../admin/config.php");
     
     session_start();

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pwd = $_POST['password'];
            
            $Sql = "SELECT * FROM user WHERE email = '$email' and pwd = '$pwd'"; 
            $result = $conn->query($Sql);
            $row = mysqli_fetch_assoc($result);
    
            if(mysqli_num_rows($result) > 0){
                
                echo "<script> alert('You have succesfully logged In');</script>";
                header("Refresh: 0; URL = ../main/index.php?userID=$row[userID]");
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];

            }else{
                
                echo "<script> alert('No such records');</script>";
                header("Refresh: 0; URL = adminloging.php");
            }
                    
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/loging.css">
    <title>User Loging</title>
</head>
<body>
    <?php include("header.php"); ?>



    <div class="container">
        <!-- <img src="images/boat1.jpg" alt=""> -->
        <div class="wrap">
            <div class="formwrap">
                <div class="imgwrap">
                </div>
                <form action="" method="post">
                    <div class="background">
                        <p>Log In</p>
                        <div class="inputs">
                            <label for="email">Username</label>
                            <input type="email" name="email" id="email" placeholder="Email" autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
                        </div>
        
                        <div class="inputs">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <!-- <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> -->
                        </div>
        
                        <div class="inputs">
                            <input type="submit" name="submit" value="Log In">
                            <a href="">Forget password?</a>
                        </div>
                    </div>
                    

                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>