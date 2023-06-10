<?php

    include_once("config.php");
    include_once("sessionAdmin.php");
    
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
    $id = $_GET['updateid'];
    $prefix = str_split($id);

    if(isset($_POST['status'])){
        $status = $_POST['status'];
        $sql = "UPDATE msafari SET status='$status' WHERE Sid='$ID'";
        $conn->query($sql);
        echo "<script> alert('Status $status Successfully');</script>";
        header("Refresh: 0; URL = updateSafari.php?updateid=$ID");
    }

    if(isset($_POST['submit'])){
        $Sname = $_POST['Sname'];
        $location = $_POST['Slocation'];
        $price = $_POST['Sprice'];
        $date = $_POST['Sdate'];
        $description= $_POST['Sdescription'];


        if($pwd == $cpwd){
            if($prefix[0] == 'A'){
                $sql = "UPDATE admin SET Sid='$ID', Sname='$Sname', Slocation='$location', Sprice='$price', Sdate='$date', Sdescription='$description' WHERE adminID='$ID'";
                $conn->query($sql);
                echo "<script> alert('Update Successfully');</script>";
                header("Refresh: 0; URL = updateSafari.php?updateid=$ID");
        
        
            
        

            }else if($prefix[0] == 'U'){
                $sql = "UPDATE user SET Sid='$ID', Sname='$Sname', Slocation='$location', Sprice='$price', Sdate='$date', Sdescription='$description' WHERE userID='$ID'";
                $conn->query($sql);
                echo "<script> alert('Update Successfully');</script>";
                
            }
        }else{
            echo "<script> alert('Password Not Matched');</script>";
            header("Refresh: 0; URL = updateUsers.php?updateid=$id");
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
    <link rel="stylesheet" href="css/updateSafari.css">
    
    
    
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

        <?php include_once("leftPanel.php"); ?>

        <div class="right_panel">

            <div class="upper_panel">
                <div class="upper_panel_left">
                    <h6>Manage Safari</h6>
                </div>

                <?php include_once("upperPanelRight.php"); ?>

            </div>
    

            <div class="middle_panel">
                <div class="left_box">
                <?php
                        

                        if($prefix[0] == 'A'){

                            $sql = "SELECT * FROM msafari WHERE Sid = '$ID'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();

                        }else if($prefix[0] == 'U'){

                            $sql = "SELECT * FROM msafari WHERE userID = '$ID'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        }
                        
                        $Name = $row['Sname'];
                        echo "<h6>".$name."'s profile </h6>";
                    ?>

                    <div class="profile">

                        

                        <div class="details">

                            <div class="detBox">
                                <p>Safari Name:<?php echo " " .$row['Sname'] ?></p>
                            </div>

                            <div class="detBox">
                                <p>Location:<?php echo " " .$row['Slocation'] ?></p>
                            </div>

                            <div class="detBox">
                                <p>Price:<?php echo " " .$row['Sprice'] ?></p>
                            </div>

                            <div class="detBox">
                                <p>Date:<?php echo " " .$row['Sdate'] ?></p>
                            </div>
                            <div class="detBox">
                                <p>Description:<?php echo " " .$row['Sdescription'] ?></p>
                            </div>

                            <?php
                                if($prefix[0] == 'U'){
                                    echo "<div class='detBox'>";
                                    echo "<p>Address:".$row['Address']."</p>";
                                    echo "</div>";
                                }
                            ?>

                            <?php
                                if($prefix[0] == 'A'){
                                    echo "<div class='detBox'>";
                                    echo "<p>Status:".$row['status']."</p>";
                                    echo "</div>";
                                }
                            ?>
                            

                        </div>

                    </div>
                        
                    
                            
                            
                            
                        
                            

                </div>

                    
                   

                    
                     
            

                <div class="right_box">
                
                    <p>Add new Safari</p>
                    <form action="createSafari.php" method="post">
                       
                        <label for="Sname">Safari Name:</label><br>
                        <input type="text" id="Sname" name="Sname"><br>
                        <label for="Slocation">Location:</label><br>
                        <input type="text" id="Slocation" name="Slocation"><br>
                        <label for="Sprice">Price LKR:</label><br>
                        <input type="text" id="Sprice" name="Sprice"><br>
                        <label for="Sdate">Date:</label><br>
                        <input type="text" id="Sdate" name="Sdate"><br>
                        <label for="Sdescription">Description::</label><br>
                        <input type="text" id="Sdescription" name="Sdescription"><br>

                        <input type="submit" value="SUbmit" id="sbt" name="submit"><br>

                    </form>

                </div>
                    
                        
                                  
                  
                            
                </div>
                
                                       
                 
            </div>
        </div>
        
    </div>
    

    
   <script src="adminindex.js"></script>
</body>
</html>