<?php
    include_once("config.php");
 /*   //create data base if not exists
    $createDB = "CREATE DATABASE IF NOT EXISTS bstms";
    //run the query to create database if database does not exists
    $conn->query($createDB);//database creation
*/
    //query for table creation if not exists
    $deletetable = "DROP TABLE IF EXISTS admin";
    $conn->query($deletetable);

     $deletetable = "DROP TABLE IF EXISTS user";
     $conn->query($deletetable);

    
    $createTableAdmin = "CREATE TABLE IF NOT EXISTS admin(
        adminID VARCHAR(10) PRIMARY KEY,
        fname VARCHAR(50) NOT NULL,
        lname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pwd VARCHAR(50) NOT NULL,
        cnumber INT(10) NOT NULL,
        img VARCHAR(100)
 )";
    //run the query to create tbale if table does not exists
    $conn->query($createTableAdmin);//table creation

    //query for insert data if table is empty
    $insertDataAdmin = "
    INSERT INTO admin 
    VALUES
    ('A001', 'Dinuvi', 'Asithma', 'dinuviasithma@gmail.com', 'admin', 0771234569, 'img1.jpg'),
    ('A002', 'Gayashaan', 'Krishnamoorthy', 'gayashaan49@gmail.com', 'admin', 0771234569, 'img2.jpg'),
    ('A003', 'Shenal', 'Somaweera', 'shenalsomaweera@gmail.com', 'admin', 0774587963, 'img3.jpg'),
    ('A004', 'Sasiru', 'Gunathilaka', 'gunathilakasasiya@gmail.com', 'admin', 0771458963, 'img4.jpg'),
    ('A005', 'Oshada', 'Dhahanayaka', 'oshadadhahanayaka2002@gmail.com', 'admin', 0774589632, 'img5.jpg')";

    

    
    // check the records in the table
    $readTableAdmin = "SELECT * FROM admin";
    $resultAdmin = $conn->query($readTableAdmin);

    //if table is empty insert data to the table
    if($resultAdmin->num_rows == 0){
        $conn->query($insertDataAdmin);
    }


    $createTableUser = "CREATE TABLE IF NOT EXISTS user(
        userID VARCHAR(10) PRIMARY KEY,
        fname VARCHAR(50) NOT NULL,
        lname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pwd VARCHAR(50) NOT NULL,
        cnumber INT(10) NOT NULL,
        Address VARCHAR(200) NOT NULL
    )";

    $conn->query($createTableUser);

    $insertDataUser = "
    INSERT INTO user(userID, fname, lname, email, pwd, cnumber,Address) VALUES
    ('U001', 'TEST1', 'Asithma', 'dinuviasithma@gmail.com', 'admin', 0771234569,'adbc'),
    ('U002', 'TEST2', 'Krishnamoorthy', 'gayashaan49@gmail.com', 'admin', 0771234569,'dsds'),
    ('U003', 'TEST3', 'somaweera', 'shenalsomaweera@gmail.com', 'admin', 0774587963,'dsdf'),
    ('U004', 'TEST4', 'Gunathilaka', 'gunathilakasasiya@gmail.com', 'admin', 0771458963,'dfssd'),
    ('U005', 'TES5', 'Dhahanayaka', 'oshadadhahanayaka2002@gmail.com', 'admin', 0774589632,'dfkkd')";


    // check the records in the table
    $readTableUser = "SELECT * FROM user";
    $resultUser = $conn->query($readTableUser);

    //if table is empty insert data to the table
    if($resultUser->num_rows == 0){
        $conn->query($insertDataUser);
    }

?>