<?php
    include_once("config.php");
    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cnumber = $_POST['cNo'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        
        $existSql = "SELECT * FROM admin WHERE email = '$email' and pwd = '$pwd'"; 
        $result2 = $conn->query($existSql);

        if(mysqli_num_rows($result2) > 0){
            echo "<script> alert('Admin Already Exists');</script>";
            header("Refresh: 0; URL = manageUsers.php");

        }else if($pwd == $cpwd){
            $sql = "INSERT INTO admin(adminID, fname, lname, email, pwd, cnumber) VALUES ('','$fname', '$lname', '$email', '$pwd', '$cnumber')";
            //$result = mysqli_query($conn, $sql); //procedual method
            $result = $conn->query($sql); //oop method

            if($result){
                echo "<script> alert('Admin Created Successfully');</script>";
                header("Refresh: 0; URL = manageUsers.php");
                
            }else{
                echo "<script> alert('Admin Creation Failed');</script>";
                header("Refresh: 0; URL = manageUsers.php");
            }
        }else{
            echo "<script> alert('Password Not Matched');</script>";
            header("Refresh: 0; URL = manageUsers.php");
        }
    }else{
        echo "<script> alert('Please Click Submit Button');</script>";
        header("Refresh: 0; URL = manageUsers.php");
    }

    mysqli_close($conn);
?>
