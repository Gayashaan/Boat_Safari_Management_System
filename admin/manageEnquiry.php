<?php
    include_once("config.php");
    include_once("sessionAdmin.php");
    // session_start();
    // if($_SESSION['adminID'] == ""){
    //     header("LOCATION: ../main/deniedpage.php");
    //     echo "<script> alert('Please Login');</script>";
    //     // header("location: ../main/adminloging.php");
    //     die();
        
    // }else{
    //     $adminID = $_SESSION['adminID'];
    //     $ufname = $_SESSION['fname'];
    //     $ulname = $_SESSION['lname'];
    //     $userName = $ufname . " " . $ulname;
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/manageEnquiry.css">
     <!-- This are icon for dash board -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- This are icon for dash board -->
    
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll reveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Enquiry Management</title>
</head>
<body>
    <div class="container">

        <?php include_once("leftPanel.php"); ?>

        <div class="right_panel">

            <div class="upper_panel">
                <div class="upper_panel_left">
                    <h6>Manage Enquiry</h6>
                </div>

                <?php include_once("upperPanelRight.php"); ?>

            </div>

            <div class="middle_panel">
            <h2>Inquiries</h2>
<table class="table">
    <thead>
        <tr>
            <th>Inquiry_ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($inquiryId as $inquiry) {
            $inquiryId = $inquiry['inquiryId'];
            $name = $inquiry['Name'];
            $email = $inquiry['Email'];
            $message = $inquiry['message'];
            $date = $inquiry['date'];

            echo '<tr>';
            echo '<td>' . $inquiryId . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $email . '</td>';
            echo '<td>' . $message . '</td>';
            echo '<td>' . $date . '</td>';
            echo '<td><button onclick="deleteInquiry(' . $inquiryId . ')">Delete</button></td>';
            echo '</tr>';
        }
        ?>

        <script>
            function deleteInquiry(inquiryId) {
                
                $.ajax({
                    url: 'delete_inquiry.php',
                    type: 'POST',
                    data: { id: inquiryId },
                    success: function(response) {
                      
                    },
                    error: function(xhr, status, error) {
                        
                    }
                });
            }
        </script>
    </tbody>
</table>

            </div>
        </div>
        
    </div>


   
</body>
</html>