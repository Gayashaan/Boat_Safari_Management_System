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
                    <img class="img1" src="images/safari_img1.jpg" alt="">
                </div>
                <div class="subImgWrap">
                    <div class="subImg">
                        <img class="subImg1" src="images/safari_img2.jpeg" alt="">
                    </div>
                    <div class="subImg">
                        <img class="subImg1" src="images/safari_img2.jpeg" alt="">
                    </div>
                    <div class="subImg">
                        <img class="subImg1" src="images/safari_img2.jpeg" alt="">
                    </div>
                </div>
                
            </div>

            <div class="safDetails">
                <div class="heading">
                    <h1>Safari Title</h1>
                    <div class="sub">
                        <h2>Avialability</h2>
                        <h2>$Price</h2>
                    </div>
                </div>
                <div class="para">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus ducimus dolorem quidem labore accusantium fugit debitis excepturi asperiores ipsa, dolore vitae eos possimus magni numquam impedit illo corrupti doloribus.</p>

                </div>
                <fieldset>
                    <form action="" method="post">
                        <div class="horizontalWrap1">
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
                        
                        <div class="horizontalWrap2">
                            <div class="section">
                                <label for="breakfast">Add breakfast</label><br>
                                <input type="text" name="breakfast" id="breakfast">
                            </div>
                            <div class="section">
                                <label for="lunch">Add Lunch</label><br>
                                <input type="text" name="lunch" id="lunch">
                            </div>

                        </div>

                        <div class="horizontalWrap2">

                            <div class="section">
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email">
                            </div>

                            <div class="section">
                                <label for="cnumber">Contact Number</label><br>
                                <input type="number" name="cnumber" id="cnumber">
                            </div>

                        </div>

                        <button type="submit">Book Now</button>
                        
                    </form>
                </fieldset>
                
            </div>
        </div>
    </div>
    
    
</body>
</html>