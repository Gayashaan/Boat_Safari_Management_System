<div class="upper_panel_right">
    <div class="user">
        
        <?php 

            $imgQuery = "SELECT img FROM admin WHERE adminID = '$adminID'";
            $imgResult = $conn->query($imgQuery);
            $imgRow = $imgResult->fetch_assoc();
                
                        
            if($imgRow['img'] == NULL){
                echo "<img src='uploads/profile logo.png' alt='profile'>";
            }else{
                //echo "<img src='uploads/".$imgRow['img']."' alt='profile'>";
                echo '<a href="updateAdmin.php?'.$adminID.'"><img src="uploads/'.$imgRow['img'].'" alt="profile"></a>';
            }
        ?>
        <!-- <img src="images/profile logo.png" alt="user"> -->
    </div>
    <div class="user_name">
        <p><?php echo '<a href="updateAdmin.php?updateid='.$adminID.'">'.$userName.'</a>'?></p>
            
    </div>

</div>
