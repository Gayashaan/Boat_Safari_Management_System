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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manageUsers.css">
    <link rel="stylesheet" href="css/common.css">
    
    
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
                        <h6>All Employees</h6>
                                    
                        <div class="grid">
                            <table>
                                <tr>
                                    <!-- <th>AdminID</th> -->
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact No</th>
                                    <th>Operation</th>
                                </tr>
                                <?php
                        
                                    $sql = "SELECT * FROM admin";
                            
                                    $result = $conn->query($sql);
                        
                        
                                    if($result->num_rows>0){
                                        while($row = $result->fetch_assoc()){
                                            $aID = $row["adminID"];
                                            $fname = $row["fname"];
                                            $lname = $row["lname"];
                                            $email = $row["email"];
                                            $cnumber = $row["cnumber"];
                                            
                                    
                                            echo '
                                            
                                                    <tr>
                                                        
                                                        <td>' . $fname. '</td>
                                                        <td>' . $lname. '</td>
                                                        <td>' . $cnumber. '</td>
                                                        <td> 
                                                            <div class="opBtns">
                                                                <button id="vwBtn"><a href="updateAdmin.php?updateid='.$aID.'">View</a></button>
                                                                <button id="dlBtn" onclick="return confirmDelete()"><a href="deleteAdmin.php?deleteid='.$aID.'">Delete</a></button>
                                                            </div>
                                                        </td>
                                                    </tr>';
                                                
                                        }
                                    }else{
                                        echo "Empty rows!!";
                                    }

                                ?>

                            </table>

                        </div>
                        
                       
                        
                                                    
                    </div>

                <div class="right_box">
                    <p>Create Admin Account</p>
                    <form method="POST" action="createAdmin.php">
                        <div class="namewrap">
                            <div class="fwrap">
                                <label for="fname">First name</label><br>
                                <input type="text" name="fname" id="fname" placeholder="First Name"><br>
                            </div>
                            <div class="lwrap">
                                <label for="lname">Last name</label><br>
                                <input type="text" name="lname" id="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="otherwrap">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email"><br>
                            <label for="cNo">Contact No</label><br>
                            <input type="number" name="cNo" id="cNo" placeholder="Contact Number"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" name="pwd" id="pwd" placeholder="Password"><br>
                            <label for="cpwd">Confirm Password</label><br>
                            <input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password"><br>
                                
                            <input type="submit" value="Create" id="sbt" name="submit"><br>

                        </div>
                                  
                    </form>
                            
                </div>
                
                                       
                 
            </div>
        </div>
        
    </div>

    
    <script src="adminindex.js"></script>
</body>
</html>