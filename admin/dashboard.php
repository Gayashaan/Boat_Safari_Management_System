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
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- This are icon for dash board -->

    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll reveal effect -->
    <title>Admin</title>
</head>
<body>
    <div class="container">

        <?php include_once("leftPanel.php"); ?>

        <div class="right_panel">

            
            <div class="upper_panel">
                <div class="upper_panel_left">
                    <h6>Dashboard</h6>
                </div>

            <?php include_once("upperPanelRight.php") ?>

            </div>
            
            <div class="greeting">
                <p class="head">Welcome <?php echo $userName ?></p>
            </div>
            
            <div class="middle_panel">
                <div class="upper_box">
                    <?php
                        $date = date("Y-m-d");

                        // $sqlUser = "SELECT sum(countUser) AS 'Total user Count'FROM(
                        //                                                     SELECT count(*) AS 'countUser' FROM admin
                        //                                                     UNION ALL
                        //                                                     SELECT count(*) AS 'countUser' FROM user
                        //                                                     )countUser";

                        function totalUser($connection){// i have pass the connection variable to the function else $conn cannot be used insed the function
                            $sqlUser = "SELECT count(*) AS 'Total user Count' FROM user";
                            $resultUser = $connection->query($sqlUser);
                            $rowUser = $resultUser->fetch_assoc();
                            $totalUser = $rowUser['Total user Count'];
                            return $totalUser;
                        }
                        function totalAdmin($connection){
                            $sqlAdmin = "SELECT count(*) AS 'Total admin Count' FROM admin";
                            $resultAdmin = $connection->query($sqlAdmin);
                            $rowAdmin = $resultAdmin->fetch_assoc();
                            $totalAdmin = $rowAdmin['Total admin Count'];
                            return $totalAdmin;
                        }
                        
                        $systemUsers = totalUser($conn) + totalAdmin($conn);

                        function totalBoat($connection){
                            $sqlBoat = "SELECT count(*) AS 'Total boat Count' FROM boat";
                            $resultBoat = $connection->query($sqlBoat);
                            $rowBoat = $resultBoat->fetch_assoc();
                            $totalBoat = $rowBoat['Total boat Count'];
                            return $totalBoat;
                        }

                        function totalSafari($connection){
                            $sqlSafari = "SELECT count(*) AS 'Total safari Count' FROM msafari";
                            $resultSafari = $connection->query($sqlSafari);
                            $rowSafari = $resultSafari->fetch_assoc();
                            $totalSafari = $rowSafari['Total safari Count'];
                            return $totalSafari;
                        }
                        
                        function totalreservations($connection){
                            $sqlreseravtion = "SELECT count(*) AS 'Total reservation Count' FROM booking";
                            $resultreseravtion = $connection->query($sqlreseravtion);
                            $rowreseravtion = $resultreseravtion->fetch_assoc();
                            $totalreseravtion = $rowreseravtion['Total reservation Count'];
                            return $totalreseravtion;
                        }
                        
                        

                    ?>

                    <div class="box">
                        <h6>Total Bookings</h6>
                        <p class="val"><?php echo totalreservations($conn)?></p>
                        <p class="date"><?php echo $date?></p>
                    </div>
                    <div class="box">
                        
                        <h6>Total Users</h6>
                        <p class="val"><?php echo $systemUsers?></p>
                        <p class="date"><?php echo $date?></p>
                    </div>
                    <div class="box">
                        <h6>Safari Availables</h6>
                        <p class="val"><?php echo totalSafari($conn)?></p>
                        <p class="date"><?php echo $date?></p>
                    </div>
                    <div class="box">
                        <h6>Total Boats</h6>
                        <p class="val"><?php echo totalBoat($conn)?></p>
                        <p class="date"><?php echo $date?></p>
                    </div>
                </div>

                <div class="lower_boxes">
                    
                    <div class="left_box">
                        
                        <h6>Recent Bookings</h6>

                        <div class="grid">

                        
                            <table>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Trip</th>

                                </tr>

                            
                                <?php

                                    $sql = "SELECT * FROM booking";
                                                                
                                    $result = $conn->query($sql);


                                    if($result->num_rows>0){
                                        while($row = $result->fetch_assoc()){
                                            $bID = $row["bookingID"];
                                            $date = $row["date"];
                                            $userID = $row["userID"];
                                            $Sid = $row["Sid"];

                                            $getUser = "SELECT fname FROM user WHERE userID = '$userID'";
                                            $resultUser = $conn->query($getUser);
                                            $rowUser = $resultUser->fetch_assoc();
                                            $userName = $rowUser["fname"];

                                            $getSafari = "SELECT Sname FROM msafari WHERE Sid = '$Sid'";
                                            $resultSafari = $conn->query($getSafari);
                                            $rowSafari = $resultSafari->fetch_assoc();
                                            $safariName = $rowSafari["Sname"];
                                            

                                            echo '
                                            
                                                    <tr>
                                                        <td>' . $bID. '</td>
                                                        <td>' . $date. '</td>
                                                        <td>' . $userName. '</td>
                                                        <td>' . $safariName. '</td>
                                                        
                                                    </tr>';
                                                
                                        }
                                    }else{
                                        echo "<td>Empty rows!!</td>";
                                    }


                                ?>

                            </table>
                        </div>

                        
                        
                                                
                    </div>

                    <div class="right_box">
                        
                        <h6>Customer Feedback</h6>  
                        
                         <div class="feedBox">
                            <?php
                                for($i=0;$i<10;$i++){
                                    echo "<div class='feed'>
                                            <p>Feedback 1</p>
                                        </div>";
                                }
                            
                            ?>
                            
                         </div>
                                       
                    </div>


                </div>
                
            </div>
        </div>
        
    </div>
   
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });

        ScrollReveal().reveal('.left_box', {delay: 200, origin: 'left'});
        ScrollReveal().reveal('.right_box', {delay: 200, origin: 'right'});
        ScrollReveal().reveal('.upper_box', {delay: 200, origin: 'top'});
        
    </script>
</body>
</html>