<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Home</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <main>
        <div class="intro">
            <!-- <img src="https://gloogs.com/wp-content/uploads/2022/05/Ruta-Guiada3-02.jpg" alt=""> -->
            <video autoplay muted loop src="videos/pexels-twicce-switzerland-6560037-3840x2160-30fps.mp4"></video>
            <h1>LET YOUR DREAMS SET SAIL</h1>
            <button>Gallery</button>
            <div class="playPause_btn" onclick="playPause()">
                <img id="playpause" src="images/icons/pause.png" alt="play_pause">
            </div>
        </div>

        <div class ="upcoming-tours">


            <h1>upcoming tours</h1>
            <br>
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