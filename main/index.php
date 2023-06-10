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
                    <h3>Topic 1</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eaque. Laboriosam reprehenderit, soluta esse molestias alias saepe consequatur ipsa quaerat! Illo, distinctio! Tempora nulla nisi, voluptatum maxime ad maiores optio.</p>
                </div>
                <div class="topic">
                    <h3>Topic 2</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eaque. Laboriosam reprehenderit, soluta esse molestias alias saepe consequatur ipsa quaerat! Illo, distinctio! Tempora nulla nisi, voluptatum maxime ad maiores optio.</p>
                </div>
                <div class="topic">
                    <h3>Topic 2</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eaque. Laboriosam reprehenderit, soluta esse molestias alias saepe consequatur ipsa quaerat! Illo, distinctio! Tempora nulla nisi, voluptatum maxime ad maiores optio.</p>
                </div>

            </div>

            <div class="vl"></div>

            <div class="imgBox">

                <img class="img1" src="images/boat1.jpg" alt="">
                <img class="img2" src="images/boat1.jpg" alt="">
                <img class="img3" src="images/boat1.jpg" alt="">
                <img class="img4" src="images/boat1.jpg" alt="">

            </div>
 
            
        </div>

        <div class="feedContainer">

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                    <!-- images/profile logo.png -->
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </div>

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </div>
                
            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>

            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>
            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>
            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>
            <div class="feedbox">
                <div class="pImg">
                    <img src="images/profile logo.png" alt="profile image">
                </div>
                <div class="rate">
                    5
                </div>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>

            </div>

        </div>



    </main>














    <?php include("footer.php"); ?>





    <script>
        var video = document.querySelector('video');
        video.playbackRate = 0.8;

        /*This function will play pause the video when we click the video area*/
        function playPause() {
            if (video.paused) {
                document.getElementById("playpause").src = "images/icons/pause.png";
                video.play();
            } else {
                document.getElementById("playpause").src = "images/icons/play.png";
                video.pause();
            }
        }
    </script>
</body>
</html>