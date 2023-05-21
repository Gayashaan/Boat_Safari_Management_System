<?php
    include_once("config.php");

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM admin WHERE adminID = '$id'";
        $result = $conn->query($sql);

        if($result){
            echo "<script> alert('Admin Deleted Successfully');</script>";
            header("Location: manageUsers.php");
        }else{
            echo "<script> alert('Admin Deletion Failed');</script>";
        }
    }

    mysqli_close($conn);
?>