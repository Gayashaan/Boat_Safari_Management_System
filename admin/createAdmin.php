<?php
    include_once("config.php");
    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cnumber = $_POST['cNo'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        

        if($pwd == $cpwd){
            $sql = "INSERT INTO admin(adminID, fname, lname, email, pwd, cnumber) VALUES ('','$fname', '$lname', '$email', '$pwd', '$cnumber')";
            //$result = mysqli_query($conn, $sql); //procedual method
            $result = $conn->query($sql); //oop method

            if($result){
                //echo "<script> alert('Admin Created Successfully');</script>";
                
                header("Location: manageUsers.php");
                
            }else{
                echo "<script> alert('Admin Creation Failed');</script>";
            }
        }else{
            echo "<script> alert('Password Not Matched');</script>";
        }
    }else{
        echo "<script> alert('Please Click Submit Button');</script>";
    }

    mysqli_close($conn);
?>
