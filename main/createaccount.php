
<?php

      include_once("../admin/config.php");
      $fname=$_POST['fname']; 
      $lname=$_POST['lname']; 
      $email=$_POST['email'];
      $cnumber=$_POST['cnumber'];
      $Address=$_POST['Address'];
      $Gender=$_POST['Gender'];
      $pwd=$_POST['pwd'];
      
      
      
      //Database connection
        $stmt = $conn->qury("insert into user(fname,lname,email,pwd,cnumber,Address,Gender)
             values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssiss",$fname,$lname,$email,$pwd,$cnumber,$Address,$Gender);
        $stmt->execute();
        echo"registration successful";
        $stmt->close();
        $conn->close();
      
?>