<?php
    include_once("config.php");
 /*   //create data base if not exists
    $createDB = "CREATE DATABASE IF NOT EXISTS bstms";
    //run the query to create database if database does not exists
    $conn->query($createDB);//database creation
*/
    //query for table creation if not exists
    $createTable = "CREATE TABLE IF NOT EXISTS admin(
        adminID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(50) NOT NULL,
        lname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pwd VARCHAR(50) NOT NULL,
        cnumber INT(10) NOT NULL
    )";
    //run the query to create tbale if table does not exists
    $conn->query($createTable);//table creation

    //query for insert data if table is empty
    $insertData = "
    INSERT INTO admin(adminID, fname, lname, email, pwd, cnumber) VALUES
    (1, 'Dinuvi', 'Asithma', 'dinuviasithma@gmail.com', '123', 718823436),
    (2, 'Gayashaan', 'Krishnamoorthy', 'gayashaan49@gmail.com', '123', 718823436),
    (3, 'shenal', 'somaweera', 'shenalsomaweera@gmail.com', '123', 1324654),
    (4, 'Sasiru', 'Gunathilaka', 'gunathilakasasiya@gmail.com', '123', 465465),
    (5, 'Oshada', 'Dhahanayaka', 'oshadadhahanayaka2002@gmail.com', '123', 465465)";

    

    
    // check the records in the table
    $readTable = "SELECT * FROM admin";
    $result = $conn->query($readTable);

    //if table is empty insert data to the table
    if($result->num_rows == 0){
        $conn->query($insertData);
    }

?>