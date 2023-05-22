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

        <div class="left_panel">

            <div class="logo">
                <img src="../main/images/favpng_ferry-ship-boat-tour.png" alt="logo">
                <!-- <p>Brand Name</p> -->
            </div>

            
            <ul>
                <li><a href="dashboard.php"> <i class="material-icons" style="font-size:25px; color:white">dashboard</i>Dash Board</a></li>
                <li><a href="manageUsers.php"> <i class="fa fa-user" style="font-size:25px; color:white"></i>Manage Users</a></li>
                <li><a href="manageBooking.php"> <i class="material-icons" style="font-size:25px;color:white">library_books</i>Manage Booking</a></li>
                <li><a href="manageEnquiry.php"> <i class="material-icons" style="font-size:25px;color:white">question_answer</i>Manage Enquiries</a></li>
                <li><a href="manageSafari.php"> <i class="fa fa-safari" style="font-size:25px;color:white"></i>Manage Safari</a></li>
                <li><a href="manageBoat.php"> <i class="material-icons" style="font-size:25px;color:white">directions_boat</i>Manage Boats</a></li>
                <li><a href="manageGallery.php"> <i class="material-icons" style="font-size:25px;color:white">directions_boat</i>Manage Gallery</a></li>
                <li id="logout"><a href="#"> <i class="fa fa-sign-out" style="font-size:25px;color:white"></i>Log Out</a></li>
            </ul>
          
            
        </div>

        <div class="right_panel">

            <div class="upper_panel">

                <div class="upper_panel_left">
                    
                    <h6>DashBoard</h6>
                </div>
    
                <div class="upper_panel_right">
                    <div class="user">
                        <img src="images/profile logo.png" alt="user">
                    </div>
                    <div class="user_name">
                        <p>Admin</p>
                    </div>
    
                </div>
                
            </div>
            <div class="greeting">
                <p class="head">Welcome UserName</p>
                <p>You have (number of) unread alerts</p>
            </div>
            
            <div class="middle_panel">
                <div class="upper_box">
                    <div class="box">
                        <h6>Total Trips</h6>
                        <p class="val">40876</p>
                        <p class="date">date base date</p>
                    </div>
                    <div class="box">
                        <h6>Total sales</h6>
                        <p class="val">40876</p>
                        <p class="date">date base date</p>
                    </div>
                    <div class="box">
                        <h6>Total profit</h6>
                        <p class="val">40876</p>
                        <p class="date">date base date</p>
                    </div>
                    <div class="box">
                        <h6>Total Boats</h6>
                        <p class="val">40876</p>
                        <p class="date">date base date</p>
                    </div>
                </div>

                <div class="lower_boxes">
                    
                    <div class="left_box">
                        
                        <h6>Recent Bookings</h6>

                        <div class="grid">
                            <ul class="details">
                                <li class = "topic">Date</li>
                                <?php
                                    $date = 1;
                                    for($i=0; $i<10; $i++){
                                        echo "<li> $date jan 2021</li>";
                                        $date++;
                                    }
                                ?>
                            </ul>

                            <ul class="details">
                                <li class = "topic">Customer</li>
                                <?php
                                    for($i=0; $i<10; $i++){
                                        echo "<li class>Joahn Doe</li>";
                                    }
                                ?>
                            </ul>

                            <ul class="details">
                                <li class = "topic">Trip</li>
                                <?php
                                    for($i=0; $i<10; $i++){
                                        echo "<li>Pending</li>";
                                    }
                                ?>
                            </ul>

                            <ul class="details">
                                <li class = "topic">Total</li>
                                <?php
                                    for($i=0; $i<10; $i++){
                                        echo "<li>$5000</li>";
                                    }
                                ?>
                            </ul>

                            
                            
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