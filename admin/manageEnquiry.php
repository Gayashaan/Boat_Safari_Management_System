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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/manageEnquiry.css">
     <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- This are icon for dash board -->
    
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Enquiry Management</title>
</head>
<body>
    <div class="container">

        <?php include_once("leftPanel.php"); ?>

        <div class="right_panel">

            <div class="upper_panel">
                <div class="upper_panel_left">
                    <h6>Manage Enquiry</h6>
                </div>

                <?php include_once("upperPanelRight.php"); ?>

            </div>

            <div class="middle_panel">
                <div class="left_box">
                        <h6>Manage Inquries</h6>
                                    
                        <div class="grid">
                            <table>
                                <tr>
                                    <th>InquiryID</th>
                                    <th>Name</th>
                                    <th>Email </th>
                                    <th>Message</th>
                                    <th>Operation</th>
                                </tr>
                                <?php
                        
                                    $sql = "SELECT * FROM inquiry_tb";
                            
                                    $result = $conn->query($sql);
                        
                        
                                    if($result->num_rows>0){
                                        while($row = $result->fetch_assoc()){
                                            $inquiryId = $row["inquiryId"];
                                            $Name = $row["Name"];
                                            $Email = $row["Email"];
                                            $Msg = $row["Message"];
                                            
                                            
                                    
                                            echo '
                                            
                                                    <tr>
                                                        <td>' . $inquiryId. '</td>
                                                        <td>' . $Name. '</td>
                                                        <td>' . $Email. '</td>
                                                        <td>' . $Msg. '</td>
                                                        <td> 
                                                            <div class="opBtns">
                                                                <button id="vwBtn"><a href="updateUsers.php?updateid='.$inquiryId.'">View</a></button>
                                                                <button id="dlBtn" onclick="return confirmDelete()"><a href="deleteAdmin.php?deleteid='.$inquiryId.'">Delete</a></button>
                                                            </div>
                                                        </td>
                                                    </tr>';
                                                
                                        }
                                    }else{
                                        echo "<td>Empty rows!!</td>";
                                    }

                                    $sql2 = "SELECT * FROM inquiry_tb";
                            
                                    $result2 = $conn->query($sql2);
                        
                        
                                    if($result2->num_rows>0){
                                        while($row2 = $result2->fetch_assoc()){
                                            $inquiryId = $row2["inquiryID"];
                                            $Name = $row2["Name"];
                                            $Email = $row2["Email"];
                                            $Msg = $row2["Message"];
                                          
                                            
                                    
                                            echo '
                                            
                                                    <tr>
                                                        <td>' . $inquiryId. '</td>
                                                        <td>' .  $Name. '</td>
                                                        <td>' .  $Email. '</td>
                                                        <td>' . $Msg. '</td>
                                                        <td> 
                                                            <div class="opBtns">
                                                                <button id="vwBtn"><a href="updateUsers.php?updateid='.$inquiryId.'">View</a></button>
                                                                <button id="dlBtn" onclick="return confirmDelete()"><a href="deleteAdmin.php?deleteid='.$inquiryId.'">Delete</a></button>
                                                            </div>
                                                        </td>
                                                    </tr>';
                                                
                                        }
                                    }else{
                                        echo "<td>Empty rows!!</td>";
                                    }

                                ?>

                            </table>

                        </div>
                        
                       
                        
                                                    
                    </div>


   
</body>
</html>