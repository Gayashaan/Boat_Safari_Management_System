<?php
$name = "Name";
$Email = "Email";
$msg = "Message";

$conn = new mysqli($name, $Email, $msg);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>