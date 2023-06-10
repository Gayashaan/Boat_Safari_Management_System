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
        $sql = "UPDATE admin SET status='$status' WHERE adminID='$id'";
        $conn->query($sql);
        echo "<script> alert('Status $status Successfully');</script>";
        header("Refresh: 0; URL = updateUsers.php?updateid=$id");
    }

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cnumber = $_POST['cNo'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        
        

        $image_name = $_FILES['profileImg']['name'];//return the name of the image or file
        $image_size = $_FILES['profileImg']['size'];//return the name of the image or file in bytes
        $image_tmp_name = $_FILES['profileImg']['tmp_name'];//return the temp name of the image or file
        $image_folder = '../uploads/adminImg/'.basename($image_name);//image destination
        $image_extension = strtolower(pathinfo($image_folder, PATHINFO_EXTENSION));//return the extension of the file or image strtolower
        //basename($_FILES['profileImg']['name'], suffix) or basename($image_name) return the name of the image or file with extention when the variable inside bracket have specified with the path
        //suffix can be used to remove the file extension of the file name when we know the file extension of that particular file
        // $h = "../uploads/adminImg/image1.jpg";
        //echo '<script> console.log("'.$image_extension.'");</script>';
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
                    <h6>Manage Users</h6>
                </div>

                <?php include_once("upperPanelRight.php"); ?>

            </div>
    

            <div class="middle_panel">
                <div class="left_box">
                    
                        
                    
                            
                            
                            
                        
                            

                </div>

                    
                   

                    
                     
            

                <div class="right_box">
                
                    
                        
                                  
                  
                            
                </div>
                
                                       
                 
            </div>
        </div>
        
    </div>
    

    
   <script src="adminindex.js"></script>
</body>
</html>