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

    

    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cnumber = $_POST['cNo'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        
        $id = $_GET['updateid'];
        $prefix = str_split($id);

        $update_image = $_FILES['profileImg']['name'];
        $update_image_size = $_FILES['profileImg']['size'];
        $update_image_tmp_name = $_FILES['profileImg']['tmp_name'];
        $update_image_folder = 'uploads/'.$update_image;



        


        if($pwd == $cpwd){
            if($prefix[0] == 'A'){
                $sql = "UPDATE admin SET adminID='$id', fname='$fname', lname='$lname', email='$email', pwd='$pwd', cnumber='$cnumber' WHERE adminID='$id'";
                $conn->query($sql);
                echo "<script> alert('Update Successfully');</script>";

                if(!empty($update_image)){
                    if($update_image_size > 5000000){
                        echo "<script> alert('Image size is too large');</script>";
                        header("Refresh: 0; URL = updateAdmin.php?updateid=$id");
                        die(mysqli_error($conn));
                    }else{
                        if(move_uploaded_file($update_image_tmp_name, $update_image_folder)){
                            
                            $update_img_query = "UPDATE admin SET img='$update_image' WHERE adminID='$id'";
                            $conn->query($update_img_query);
                            echo "<script> alert('Image Updated');</script>";
                            
                        }else{
                            echo "<script> alert('Image Update failed');</script>";
                            header("Refresh: 0; URL = updateAdmin.php?updateid=$id");
                            die(mysqli_error($conn));
                        }
                    }
                }

                
            }else if($prefix[0] == 'U'){
                $sql = "UPDATE user SET userID='$id', fname='$fname', lname='$lname', email='$email', pwd='$pwd', cnumber='$cnumber' WHERE userID='$id'";
                $conn->query($sql);
                echo "<script> alert('Update Successfully');</script>";
            }
            
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
                    
                        
                    <?php
                        $id = $_GET['updateid'];
                        $prefix = str_split($id);
                        

                        if($prefix[0] == 'A'){

                            $sql = "SELECT * FROM admin WHERE adminID = '$id'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();

                        }else if($prefix[0] == 'U'){

                            $sql = "SELECT * FROM user WHERE userID = '$id'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        }
                        
                        $Name = $row['fname'];
                        echo "<h6>".$Name."'s profile </h6>";
                    ?>

                    <div class="profile">

                        <div class="pImg">
                            <?php 

                                if($prefix[0] == 'A'){
                                    if($row['img'] == NULL){
                                        echo "<img src='uploads/profile logo.png' alt='profile'>";
                                    }else{
                                        echo "<img src='uploads/".$row['img']."' alt='profile'>";
                                    }
                                }else{
                                    echo "<img src='uploads/profile logo.png' alt='profile'>";
                                }
                                
                            ?>
                            <!-- <img src="uploads/profile logo.png" alt="profile"> -->
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
                
                    <p>Update <?php echo $Name."'s"; ?> Account</p>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="namewrap">
                            <div class="fwrap">
                                <label for="fname">First name</label><br>
                                <input type="text" name="fname" id="fname" value="<?php echo $row['fname']?>" >
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
                            <span id="err">Password does not matched</span>
                            <input type="checkbox" id="checkbox"><span class="pwdtxt">Show Password</span>
                            <label for="fileupload" id="upload">Upload a Image</label>
                            <input type="file" id="fileupload" name="profileImg" hidden>
                                
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