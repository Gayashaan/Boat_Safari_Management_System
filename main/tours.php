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
                        if($row['Simage'] != null){
                                    
                            echo "<img src='uploads/tourImg/".$row['Simage']."' alt='profile'>";
                            
                        }else{
                            echo '<img src="images/tour1.jpg" width="700px" height="350px">';

                        }
                        
                        echo '<h2>'.$row['Sname'].'</h2>';
                        echo '<p>'.$row['Sdescription'].'</p>';
                        echo '<a href="tourView.php?safari_id='.$row['Sid'].'"> <button type="submit" value="Submit" >View </button></a>';
                        echo '</div>';
                    }
                }
            ?>
               <!-- <div class="tour1">

                      <img src="images/tour1.jpg" width="700px" height="350px">
                      <h2>Tour name</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec quam augue. Aliquam condimentum eros a nunc fringilla, eu accumsan odio eleifend. Nunc ac mauris quis est volutpat malesuada nec ac felis. Phasellus quis metus placerat, condimentum ligula vel, gravida justo. Pellentesque congue purus sit amet tempor ultrice</p>
                      <a href="tourView.php"> <button type="submit" value="Submit" >View </button></a>
                </div>
                <div class="tour2">
                      <img src="images/tour2.jpg" width="700px" height="350px">
                     <h2>Tour name</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec quam augue. Aliquam condimentum eros a nunc fringilla, eu accumsan odio eleifend. Nunc ac mauris quis est volutpat malesuada nec ac felis. Phasellus quis metus placerat, condimentum ligula vel, gravida justo. Pellentesque congue purus sit amet tempor ultrice</p>
                    <a href="tourView.php"> <button type="submit" value="Submit" >View </button></a>
                </div>
                <div class="tour3">
                      <img src="images/tour3.jpg" width="700px" height="350px">
                     <h2>Tour name</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec quam augue. Aliquam condimentum eros a nunc fringilla, eu accumsan odio eleifend. Nunc ac mauris quis est volutpat malesuada nec ac felis. Phasellus quis metus placerat, condimentum ligula vel, gravida justo. Pellentesque congue purus sit amet tempor ultrice</p>
                     <a href="tourView.php"><button type="submit" value="Submit" >View </button></a>
                </div> -->
            </div>
        </div>
    </div>
    
    
    
</body>
</html>