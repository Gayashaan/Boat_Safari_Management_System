<?php
    include_once("../admin/config.php");
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
    <link rel="stylesheet" href="css/tours.css">
    
    <title>Tours</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <div class="container">

        <div class="wrap">

           <div class="tourwrap">
            <?php
                $sql = "SELECT * FROM msafari";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result -> fetch_assoc()) {
                        echo '<div class="tour1">';
                        echo '<img src="images/tour1.jpg" width="700px" height="350px">';
                        echo '<h2>'.$row['Sname'].'</h2>';
                        echo '<p>'.$row['Sdescription'].'</p>';
                        echo '<a href="tourView.php?safari_id='.$row['Sid'].'"> <button type="submit" value="Submit" >View </button></a>';
                        echo '</div>';
                    }
                }
            ?>
               
            </div>
        </div>
    </div>
    
    
    
</body>
</html>