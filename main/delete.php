<?php
 include_once("../admin/config.php");
 if (isset($_GET['deleteid']))
 {

    $userID = $_GET['deleteid'];

    $sql = "delete from 'user' where userID = $userID";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo"Data deleted successfully ";
    }
    else{
        die (mysqli_error($conn));
    }


    
 }