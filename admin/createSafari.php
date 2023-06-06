<?php
    include_once("config.php");
    
    if(isset($_POST['submit'])){
        $Sname = $_POST['Sname'];
        $Slocation = $_POST['Slocation'];
        $Sprice = $_POST['Sprice'];
        $Sdate = $_POST['Sdate'];
        $Sdescription = $_POST['Sdescription'];
        
        
       

        

        $prefix = "S";//ADMIN USER ID PREFIX
        $last_db_id = "SELECT Sid FROM msafari ORDER BY Sid DESC LIMIT 1";//check thee last id in the database
        $result3 = $conn->query($last_db_id);

        if($result3->num_rows > 0){
            $row = $result3->fetch_assoc();
            $lastID = $row['Sid'];//save last id in the database to a variable A001(EXAMPLE)
            $incNumber = intval(substr($lastID, 1));//First remove the A(prefix) from the last id and then convert it into a intereger 1 MEAN A001 WILL BECOME 001 IF WE USE 2 IT WILL BECOME 01
            $incNumber = $incNumber + 1;//inTval will convert string to int and substr will cut the string
        }else{
            $incNumber = 1;
        }

        $Sid = $prefix . sprintf("%03d", $incNumber);

        $sql = "INSERT INTO msafari(Sname,Slocation,Sprice,Sdate,Sdescription) VALUES ('$Sid','$Sname', '$Slocation', '$Sprice', '$Sdate')";
            //$result = mysqli_query($conn, $sql); //procedual method
        $result = $conn->query($sql); //oop method

        if($result){
            echo "<script> alert('Safari added successfully');</script>";
            header("Refresh: 0; URL = manageSafari.php");
                
        }else{
            echo "<script> alert('Safari Creation Failed');</script>";
            header("Refresh: 0; URL = manageUsers.php");
        }
        
        }else{
           echo "<script> alert('Please Click Submit Button');</script>";
        header("Refresh: 0; URL = manageUsers.php");
    }

    $conn->close();
?>
