<?php
    include_once("config.php");
    // //create data base if not exists
    // $createDB = "CREATE DATABASE IF NOT EXISTS bstms";
    // //run the query to create database if database does not exists
    // $conn->query($createDB);//database creation

    //query for table creation if not exists
   // $deletetable = "DROP TABLE IF EXISTS admin";
    // $conn->query($deletetable);

    // $deletetable = "DROP TABLE IF EXISTS user";
    // $conn->query($deletetable);

    // $deletetable = "DROP TABLE IF EXISTS boat";
    // $conn->query($deletetable);

    // $deletetable = "DROP TABLE IF EXISTS msafari";
    // $conn->query($deletetable);

    
    $createTableAdmin = "CREATE TABLE IF NOT EXISTS admin(
        adminID VARCHAR(10) PRIMARY KEY,
        fname VARCHAR(50) NOT NULL,
        lname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pwd VARCHAR(50) NOT NULL,
        cnumber INT(10) NOT NULL,
        img VARCHAR(100) NOT NULL,
        status VARCHAR(11) NOT NULL
    )";
    //run the query to create tbale if table does not exists
    $conn->query($createTableAdmin);//table creation

    //query for insert data if table is empty
    $insertDataAdmin = "
    INSERT INTO admin 
    VALUES
    ('A001', 'Dinuvi', 'Asithma', 'dinuviasithma@gmail.com', 'admin', 0771234569, 'img1.jpg', 'Activated'),
    ('A002', 'Gayashaan', 'Krishnamoorthy', 'gayashaan49@gmail.com', 'admin', 0771234569, 'img2.jpg', 'Activated'),
    ('A003', 'Shenal', 'Somaweera', 'shenalsomaweera@gmail.com', 'admin', 0774587963, 'img3.jpg', 'Activated'),
    ('A004', 'Sasiru', 'Gunathilaka', 'gunathilakasasiya@gmail.com', 'admin', 0771458963, 'img4.jpg', 'Activated'),
    ('A005', 'Oshada', 'Dhahanayaka', 'oshadadhahanayaka2002@gmail.com', 'admin', 0774589632, 'img5.jpg', 'Activated')";

    

    
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
        Address VARCHAR(200) NOT NULL,
        gender VARCHAR(50) NOT NULL
    )";

    $conn->query($createTableUser);

    $insertDataUser = "
    INSERT INTO user(userID, fname, lname, email, pwd, cnumber,Address,gender) VALUES
    ('U001', 'Dinuvi', 'Asithma', 'dinuviasithma@gmail.com', 'user', 0771234569,'adbc','female'),
    ('U002', 'Gayashaan', 'Krishnamoorthy', 'gayashaan49@gmail.com', 'user', 0771234569,'dsds','male'),
    ('U003', 'Shenal', 'Somaweera', 'shenalsomaweera@gmail.com', 'user', 0774587963,'dsdf','male'),
    ('U004', 'Sasiru', 'Gunathilaka', 'gunathilakasasiya@gmail.com', 'user', 0771458963,'dfssd','male'),
    ('U005', 'Oshada', 'Dhahanayaka', 'oshadadhahanayaka2002@gmail.com', 'user', 0774589632,'dfkkd','male')";


    // check the records in the table
    $readTableUser = "SELECT * FROM user";
    $resultUser = $conn->query($readTableUser);

    //if table is empty insert data to the table
    if($resultUser->num_rows == 0){
        $conn->query($insertDataUser);
    }





    $createTableBoat = "CREATE TABLE IF NOT EXISTS boat(
        b_id VARCHAR(20) PRIMARY KEY,
        b_license_no VARCHAR(20) NOT NULL,
        b_name VARCHAR(20) NOT NULL,
        b_model VARCHAR(20) NOT NULL,
        b_capacity VARCHAR(20) NOT NULL,
        b_length VARCHAR(20) NOT NULL,
        b_weight VARCHAR(20) NOT NULL,
        b_image VARCHAR(20) NOT NULL
    )";
    //run the query to create tbale if table does not exists
    $conn->query($createTableBoat);//table creation

    //query for insert data if table is empty
    $insertDateBoat = "
    INSERT INTO boat 
    VALUES
    ('B001', '1254587', 'Blackperl', 'MB0012', '15', '80m','100Kg', 'img1.jpg'),
    ('B002', '1254565', 'Kraken', 'MB0054', '20', '50m', '120Kg', 'img2.jpeg'),
    ('B003', '1254598', 'Dqeen', 'MB0087', '25', '65m', '130Kg', 'img3.jpeg'),
    ('B004', '1254502', 'Vqeen', 'MB0045', '50', '90m', '125Kg', 'img4.jpg'),
    ('B005', '1254554', 'Gking', 'MB0069', '25', '89m', '135Kg', 'img5.jpeg')";

    

    
    // check the records in the table
    $readTableBoat = "SELECT * FROM boat";
    $resultBoat = $conn->query($readTableBoat);

    //if table is empty insert data to the table
    if($resultBoat->num_rows == 0){
        $conn->query($insertDateBoat);
    }





    $createTableSafari = "CREATE TABLE IF NOT EXISTS msafari(
        Sid VARCHAR(20) PRIMARY KEY,
        Sname VARCHAR(50) NOT NULL,
        Slocation VARCHAR(50) NOT NULL,
        Sprice VARCHAR(50) NOT NULL,
        Sdate DATE NOT NULL,
        Sdescription VARCHAR(1000) NOT NULL,
        Simage VARCHAR(30) NOT NULL
    )";
    //run the query to create tbale if table does not exists
    $conn->query($createTableSafari);//table creation

    //query for insert data if table is empty
    $insertDateSafari = "
    INSERT INTO msafari 
    VALUES
    ('S001', 'Beauty Of Bentota River', 'Bentota', 'LKR15000', '2023-06-05', 'Experiance a magical boat ride in the picturesqure water of place', 'img1.jpg'),
    ('S002', 'Famous Trincomalee Boat ride', 'Trincomalee', 'LKR18000', '2023-07-05', 'Experiance a magical boat ride in the picturesqure water of place', 'img2.jpg'),
    ('S003', 'River Of Mirissa', 'Mirissa', 'LKR19000', '2023-08-05', 'Experiance a magical boat ride in the picturesqure water of place', 'img3.jpg'),
    ('S004', 'Koggala Calm lake', 'Koggala', 'LKR20000', '2023-06-15', 'Experiance a magical boat ride in the picturesqure water of place', 'img4.jpeg'),
    ('S005', 'Lake of Galle', 'Galle', 'LKR15000', '2023-09-10', 'Experiance a magical boat ride in the picturesqure water of place', 'img5.jpg')";

    

    
    // check the records in the table
    $readTableSafari = "SELECT * FROM msafari";
    $resultSafari = $conn->query($readTableSafari);

    //if table is empty insert data to the table
    if($resultSafari->num_rows == 0){
        $conn->query($insertDateSafari);
    }


?>