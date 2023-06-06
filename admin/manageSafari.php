<?php
   include_once("config.php");
   include_once("sessionAdmin.php");
//    session_start();
//    if($_SESSION['adminID'] == ""){
//         header("LOCATION: ../main/deniedpage.php");
//         echo "<script> alert('Please Login');</script>";
//        // header("location: ../main/adminloging.php");
//        die();
       
//    }else{
//        $adminID = $_SESSION['adminID'];
//        $ufname = $_SESSION['fname'];
//        $ulname = $_SESSION['lname'];
//        $userName = $ufname . " " . $ulname;
//    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/manageSafari.css">
     <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- This are icon for dash board -->
    
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Safari Management</title>
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
                        <h6>All Safaries</h6>
                        <?php
                            $sql = "SELECT * FROM msafari";
                            
                            $result = $conn->query($sql);
                
                
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc()){
                                    $ID = $row["Sid"];
                                    $Sname = $row["Sname"];
                                    $location = $row["Slocation"];
                                    $price = $row["Sprice"];
                                    $date = $row["Sdate"];
                                    $description  =$row["Sdescription"];
                                    
                                    echo '
                                            
                                    <tr>
                                        
                                        <td>' . $Sname. '</td>
                                        <td>' . $Slocation. '</td>
                                        <td>' . $Sprice. '</td>
                                        <td>' .$Sdate. '</td>
                                        <td>' .$Sdescription. '</td>
                                        <td> 
                                            <div class="opBtns">
                                                <button id="vwBtn"><a href="updateAdmin.php?updateid='.$aID.'">View</a></button>
                                                <button id="dlBtn"><a href="deleteAdmin.php?deleteid='.$aID.'">Delete</a></button>
                                            </div>
                                        </td>
                                    </tr>';
                                
                        }
                    }else{
                        echo "Empty rows!!";
                    }
                    ?>
                               
                </div>

                <div class="right_box">
                    <p>Add new Safari</p>
                    <form action="createSafari.php" method="post">
                        <label for="Sid">Safari ID:</label><br>
                        <input type="text" id="Sid" name="Sid"><br>
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

                        <input type="submit" value="Create" id="sbt" name="submit"><br>

                    </form>

                </div>
                
                                       
                 
            </div>
        
            
        </div>
        
    </div>


   
</body>
</html>