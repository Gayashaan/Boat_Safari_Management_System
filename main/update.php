<?php

      include_once("../admin/config.php");
      
     

        $userID = $_GET['updateid'];
        $fname=$_POST['fname']; 
        $lname=$_POST['lname']; 
       $email=$_POST['email'];
       $cnumber=$_POST['cnumber'];
       $Address=$_POST['Address'];
       $pwd=$_POST['pwd'];


       
       $sql="UPDATE user set userID='$userID',fname= '$fname',lname=' $lname',email='$email',pwd='$pwd',cnumber=' $cnumber',Address='$Address'
       WHERE userID = '$userID'";

       if($conn->query($sql)===TRUE){
        echo" Updated successfully";
       }
       else{
        echo"Error:".$conn->error;
       }
       mysqli_close($conn);

     


     
    
    
?>