
<?php
      $fname=$_POST['fname']; 
      $lname=$_POST['lname']; 
      $email=$_POST['email'];
      $cnumber=$_POST['cnumber'];
      $Address=$_POST['Address'];
      $Gender=$_POST['Gender'];
      $pwd=$_POST['pwd'];
      
      
      
      //Database connection

      $conn = new mysqli('localhost','root','','bstms');
      if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
      }else{
        $stmt = $conn->prepare("insert into user(fname,lname,email,pwd,cnumber,Address,Gender)
             values(?,?,?,?,?,?,?)")
        $stmt->bind_param("ssssiss",$fname,$lname,$email,$pwd,$cnumber,$Address,$Gender);
        $stmt->execute();
        echo"registration successful";
        $stmt->close();
        $conn->close();
      }
?>