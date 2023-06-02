<?php
    include_once("config.php");
    include_once("session.php");
    // session_start();
    // if($_SESSION['adminID'] == ""){
    //     header("LOCATION: ../main/deniedpage.php");
    //     echo "<script> alert('Please Login');</script>";
    //     // header("location: ../main/adminloging.php");
    //     die();
        
    // }else{
    //     $adminID = $_SESSION['adminID'];
    //     $ufname = $_SESSION['fname'];
    //     $ulname = $_SESSION['lname'];
    //     $userName = $ufname . " " . $ulname;
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/manageBoat.css">
     <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- This are icon for dash board -->
    
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Boat Management</title>
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
                    <h6>Boat Management</h6>
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
                        <h6>All Boats</h6>
                         
                                                    
                </div>

                <div class="right_box">
                    <p>Add new boat</p>
                    
                            
                </div>
                
                                       
                 
            </div>
        </div>
        
    </div>

   
</body>
</html>