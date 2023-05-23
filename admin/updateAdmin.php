<?php

    include_once("config.php");
    session_start();
    if($_SESSION['adminID'] == ""){
        header("Refresh: 0;URL = ../main/adminloging.php");
        echo "<script> alert('Please Login');</script>";
        // header("location: ../main/adminloging.php");
        die();
        
    }else{
        $adminID = $_SESSION['adminID'];
        $ufname = $_SESSION['fname'];
        $ulname = $_SESSION['lname'];
        $userName = $ufname . " " . $ulname;
    }

    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cnumber = $_POST['cNo'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        
        $id = $_GET['updateid'];


        if($pwd == $cpwd){
            $sql = "UPDATE admin SET adminID='$id', fname='$fname', lname='$lname', email='$email', pwd='$pwd', cnumber='$cnumber' WHERE adminID=$id";
            $result = $conn->query($sql);
            echo "<script> alert('Update Successfully');</script>";
            
        }else{
            echo "<script> alert('Password Not Matched');</script>";
            header("Refresh: 0; URL = updateAdmin.php?updateid=$id");
            die(mysqli_error($conn));
            
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="manageUsers.css"> -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/updateAdmin.css">
    
    
    
     <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        
    </style>
    
    <!-- This are icon for dash board -->
    
    <!-- scroll reveal effect -->
    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
    <!-- scroll reveal effect -->
    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
    <title>User Management</title>
</head>
<body>
    <div class="container">

        <div class="left_panel">

            <div class="logo">
                <img src="../main/images/favpng_ferry-ship-boat-tour.png" alt="logo">
            </div>

            
            <ul>
                <li><a href="dashboard.php"> <i class="material-icons" style="font-size:25px; color:white">dashboard</i>Dash Board</a></li>
                <li><a href="manageUsers.php"> <i class="fa fa-user" style="font-size:25px; color:white"></i>Manage Users</a></li>
                <li><a href="manageBooking.php"> <i class="material-icons" style="font-size:25px;color:white">library_books</i>Manage Booking</a></li>
                <li><a href="manageEnquiry.php"> <i class="material-icons" style="font-size:25px;color:white">question_answer</i>Manage Enquiries</a></li>
                <li><a href="manageSafari.php"> <i class="fa fa-safari" style="font-size:25px;color:white"></i>Manage Safari</a></li>
                <li><a href="manageBoat.php"> <i class="material-icons" style="font-size:25px;color:white">directions_boat</i>Manage Boats</a></li>
                <li><a href="manageGallery.php"> <i class="material-icons" style="font-size:25px;color:white">directions_boat</i>Manage Gallery</a></li>
                <li id="logout"><a href="logout.php"> <i class="fa fa-sign-out" style="font-size:25px;color:white"></i>Log Out</a></li>
            </ul>
            
            
        </div>

        <div class="right_panel">

            <div class="upper_panel">

                <div class="upper_panel_left">
                    <h6>User Management</h6>
                </div>
    
                <div class="upper_panel_right">
                    <div class="user">
                        <img src="images/profile logo.png" alt="user">
                    </div>
                    <div class="user_name">
                    <p><?php echo $userName ?></p>
                    </div>
    
                </div>
                
            </div>

            <div class="middle_panel">
                <div class="left_box">
                    <?php
                        $id = $_GET['updateid'];
                        $sql = "SELECT * FROM admin WHERE adminID = '$id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $userName = $row['fname'];
                        echo "<h6>".$userName."'s profile </h6>";
                    ?>

                    <div class="profile">

                        <div class="pImg">
                            <img src="images/profile logo.png" alt="profile">
                        </div>

                        <div class="details">

                            <div class="fname" id="detBox">
                                <p>First Name:<?php echo " " .$row['fname'] ?></p>
                            </div>

                            <div class="lname" id="detBox">
                                <p>Last Name:<?php echo " " .$row['lname'] ?></p>
                            </div>

                            <div class="email" id="detBox">
                                <p>Email:<?php echo " " .$row['email'] ?></p>
                            </div>

                            <div class="cnumber" id="detBox">
                                <p>Contact Number:<?php echo " " .$row['cnumber'] ?></p>
                            </div>

                        </div>

                    </div>
                   

                    
                     
                </div>

                <div class="right_box">
                
                    <p>Update <?php echo $userName."'s"; ?> Account</p>
                    <form method="POST">
                        <div class="namewrap">
                            <div class="fwrap">
                                <label for="fname">First name</label><br>
                                <input type="text" name="fname" id="fname" value="<?php echo $row['fname']?>" ><br>
                            </div>
                            <div class="lwrap">
                                <label for="lname">Last name</label><br>
                                <input type="text" name="lname" id="lname" value="<?php echo $row['lname']?>">
                            </div>
                        </div>
                        <div class="otherwrap">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" value="<?php echo $row['email']?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
                            <label for="cNo">Contact No</label><br>
                            <input type="number" name="cNo" id="cNo" value="<?php echo $row['cnumber']?>"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" name="pwd" id="pwd" value="<?php echo $row['pwd']?>"><br>
                            <label for="cpwd">Confirm Password</label><br>
                            <input type="password" name="cpwd" id="cpwd" value="<?php echo $row['pwd']?>"><br>
                                
                            <input type="submit" value="Update" id="sbt" name="submit" onclick="return confirmUpdate('<?php echo $row['fname']?>')"><br>

                        </div>
                                  
                    </form>
                            
                </div>
                
                                       
                 
            </div>
        </div>
        
    </div>

    
   <script src="adminindex.js"></script>
</body>
</html>