<?php
include_once("../admin/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Home</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <main>
        <div class="intro">
            <!-- <img src="https://gloogs.com/wp-content/uploads/2022/05/Ruta-Guiada3-02.jpg" alt=""> -->
            <video autoplay muted loop src="videos/pexels-twicce-switzerland-6560037-3840x2160-30fps.mp4"></video>
            <h1>LET YOUR DREAMS SET SAIL</h1>
            <button><a href="gallery.php">Gallery</a></button>
            <div class="playPause_btn" onclick="playPause()">
                <img id="playpause" src="images/icons/pause.png" alt="play_pause">
            </div>
            
        </div>
        

        <div class ="services">
        
            <div class="description">

                <div class="topic">
                    <h3>High Maintained Boats</h3>
                    <p>All baots ensure optimal performance for smooth rides through the ocean</p>
                </div>
                <div class="topic">
                    <h3>Professional Life Guards</h3>
                    <p>Our life guards are well trained to ensure safety of the passengers </p>
                </div>
                <div class="topic">
                    <h3>Best Routes</h3>
                    <p>Our routes are well organized so passengers will experiance the best.</p>
                </div>

            </div>

            <div class="vl"></div>

            <div class="imgBox">

                <img class="img1" src="images/boatpic4.jpg" alt="">
                <img class="img2" src="images/boat6.jpg" alt="">
                <img class="img3" src="images/boatpic2.jpg" alt="">
                <img class="img4" src="images/boatpic3.jpg" alt="">
                

            </div>
 
            
        </div>

        <div class="feedContainer">
            <?php

                $sqlFeed = "SELECT * FROM feedback";
                $resultFeed = $conn->query($sqlFeed);
                while($rowFeed = $resultFeed->fetch_assoc()){
                    $feed = $rowFeed["description"];
                    $rate = $rowFeed["rate"];
                    $feedUser = $rowFeed["userID"];
                    $getUser = "SELECT fname FROM user WHERE userID = '$feedUser'";
                    $resultUser = $conn->query($getUser);
                    $rowUser = $resultUser->fetch_assoc();
                    $userName = $rowUser["fname"];

                    
                    echo "<div class='feedbox'>
                            <div class='pImg'>
                                <img src='images/profile logo.png' alt='profile image'>
                            </div>
                            <div class='name'>
                                <p>$userName</p>
                            </div>
                            <div class='star'>";

                            for($i=0; $i<$rate; $i++){
                                echo"<img src='images/icons/star.png' alt='star'>";             
                                      
                            }

                    echo"
                            </div>
                            <div class='review'>
                                <p>$feed</p>
                            </div>
                            
                        </div>";
                }
            

            ?>
   

        </div>



    </main>














    <?php include("footer.php"); ?>





    <script>
        var video = document.querySelector('video');
        video.playbackRate = 0.8;

        /*This function will play pause the video when we click the video area*/
        function playPause() {
            if (video.paused) {
                document.querySelector("#playpause").src = "images/icons/pause.png";
                video.play();
            } else {
                document.getElementById("playpause").src = "images/icons/play.png";
                video.pause();
            }
        }
    </script>
</body>
</html>