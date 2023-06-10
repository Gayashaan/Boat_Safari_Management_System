<?php
    include_once("../admin/config.php");

    session_start();
    if($_SESSION['userID'] == ""){
        header("LOCATION: ../main/deniedpage.php");
        echo "<script> alert('Please Login');</script>";
        // header("location: ../main/adminloging.php");
        die();
        
    }else{
        $userID = $_SESSION['userID'];
        $ufname = $_SESSION['fname'];
        $ulname = $_SESSION['lname'];
        $uemail = $_SESSION['email'];
        $ucnumber = $_SESSION['cnumber'];
        
    }

    $sid = $_GET['id'];
    $sql = "SELECT * FROM msafari WHERE Sid = '$sid'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();

    if(isset($_POST['submit'])){
        $adults = $_POST['adults'];
        $childrens = $_POST['childrens'];
        $date = $_POST['checkIn'];
        $breakfast = $_POST['breakfast'];
        $lunch = $_POST['lunch'];
        $email = $_POST['email'];
        $cnumber = $_POST['cnumber'];


        $prefix = "BK";//ADMIN USER ID PREFIX
        $last_db_id = "SELECT bookingID FROM booking ORDER BY bookingID DESC LIMIT 1";//check thee last id in the database
        $result3 = $conn->query($last_db_id);

        if($result3->num_rows > 0){
            $row = $result3->fetch_assoc();
            $lastID = $row['bookingID'];//save last id in the database to a variable A001(EXAMPLE)
            $incNumber = intval(substr($lastID, 2));//First remove the A(prefix) from the last id and then convert it into a intereger 1 MEAN A001 WILL BECOME 001 IF WE USE 2 IT WILL BECOME 01
            $incNumber = $incNumber + 1;//inTval will convert string to int and substr will cut the string
        }else{
            $incNumber = 1;
        }

        $bookingID = $prefix . sprintf("%03d", $incNumber);
       
        

        $sql = "INSERT INTO booking (bookingID, userID, noOfAdults, noOfChild, date, breakfast, lunch, cnumber, Email, Sid) VALUES ('$bookingID','$userID','$adults', '$childrens', '$date', '$breakfast', '$lunch', '$email', '$cnumber','$sid')";
        $result = $conn->query($sql);

        if($result == TRUE){
            echo "<script> alert('Reservation Successfull');</script>";
            header("Refresh: 0; URL = ../main/reservation.php?id=$sid");
        }else{
            echo "<script> alert('Reservation Failed');</script>";
            header("Refresh: 0; URL = ../main/tours.php");
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reservation.css">
    
    <title>Tour Reservation</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <div class="container">

        <div class="wrap">

            <div class="imgBox">
                <div class="mainImg">
                    <img class="img1" id="mainImg" src="images/safari_img1.jpg" alt="">
                </div>
                <div class="subImgWrap">
                    <div class="subImg">
                        <img class="subImg1" id="img1" src="images/safari_img2.jpeg" alt="">
                    </div>
                    <div class="subImg">
                        <img class="subImg1"  id="img2" src="images/safari_img3.jpg" alt="">
                    </div>
                    <div class="subImg">
                        <img class="subImg1" id="img3" src="images/safari_img4.jpg" alt="">
                    </div>
                </div>
                
            </div>

            <div class="safDetails">
                <div class="heading">
                    <?php echo "<h1>".$row['Sname']."</h1>" ?>
                    <div class="sub">
                        <h2>Avialable</h2>
                        <?php echo "<h2>".$row['Sprice']."</h2>" ?>
                    </div>
                </div>
                <div class="para">
                    <?php echo "<p>".$row['Sdescription']."</p>" ?>
                    

                </div>
                
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                        <fieldset>
                            <!-- <legend>Form</legend> -->
                            <div class="horizontalWrap1" id="horizontalWrap">
                                <div class="section">
                                    <label for="adults">Number of Adults</label><br>
                                    <input type="number" name="adults" id="adults">
                                </div>

                                <div class="section">
                                    <label for="childrens">Number of Childrens</label><br>
                                    <input type="number" name="childrens" id="childrens">
                                </div>

                                <div class="section">
                                    <label for="checkIn">Check in Date</label><br>
                                    <input type="date" name="checkIn" id="checkIn">
                                </div>
                        
                            </div>
                            
                            <div class="horizontalWrap2" id="horizontalWrap">
                                <div class="section">
                                    <label for="breakfast">Add breakfast</label><br>
                                    <input type="text" name="breakfast" id="breakfast" placeholder="No of packets">
                                </div>
                                <div class="section">
                                    <label for="lunch">Add Lunch</label><br>
                                    <input type="text" name="lunch" id="lunch" placeholder="No of packets">
                                </div>

                            </div>

                            <div class="horizontalWrap3" id="horizontalWrap">
                            
                                <div class="section">
                                    <label for="name">Name</label><br>
                                    <input type="text" name="name" id="name" value="<?php echo $ufname?>" readonly>
                                </div>

                                <div class="section">
                                    <label for="email">Email</label><br>
                                    <input type="email" name="email" id="email" value="<?php echo $uemail?>">
                                </div>

                                <div class="section">
                                    <label for="cnumber">Contact Number</label><br>
                                    <input type="number" name="cnumber" id="cnumber" value="<?php echo $ucnumber?>">
                                </div>

                            </div>

                            <button type="submit" name="submit">Book Now</button>
                        </fieldset>
                    </form>
                
                
            </div>
        </div>
    </div>
    
    
    <script src="js/index.js"></script>
</body>
</html>