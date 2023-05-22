<?php

    session_start();
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['adminID']);
    session_destroy();
    header("Refresh: 2; URL = ../main/adminloging.php");
    // exit();

?>