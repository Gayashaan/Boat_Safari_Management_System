<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/contact_us.css"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/header.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->
<title>Contact us</title>
</head>


<body>
<?php	
		if(isset($_POST['bttn']))
		{
			$name = $_POST['fname'];
			$mail = $_POST['Email'];
			$msg = $_POST['Message'];

		$conn = new mysqli($fname, $Email, $Message);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully";
?>

	<?php include("header.php"); ?>







	<div class="container">
		<div class="wrap">
			<Center>
			<div class="Container_2">
				<form id="form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
				<h1 class="subheading">Contact Us</h1>
				<?php
						$msg="";
						if(isset($_GET['Error']))
						{
							$msg="Please Fill In The Blanks";
							echo <div class="alert alert-danger">'.$msg.'</div>
						}
				?>
				<p>Welcome to our Boat Safari Management System! We are delighted to assist you. If you have any questions, feedback, or inquiries, please don't hesitate to reach out to our dedicated team. Your satisfaction is our top priority, and we are here to ensure your boat safari experience is unforgettable. Contact us today!</p>
				<h2>We value Your Feedbacks</h2>
				<label for="fname">Name:</label>
				<input type="text" id="fname" name="fname">
				<br>
				<br>
				<label for="Email">Email:</label>
				<input type="text" id="Email" name="Email">
				<br>
				<br>
				<p><center>Message:</center></p>
				<textarea name="message" id="Message" name="Message" rows="10" cols="30" placeholder="Type here"></textarea>
				<br>
				<br>
				<input type="button" name="bttn" class="button" value="Submit">
				<nav>
					<div class="container_img">
					<img src ="Images/Facebook.ico" height="40" width="40">
					<img src ="Images/whatsapp.ico" height="40" width="40">
					<img src ="Images/Insta.ico" height="40" width="40">
					<img src ="Images/twitter.ico" height="40" width="40">
				
					</div>
				</nav>
			</form>

			</div>
			</Center>
	
			
		</div>

	</div>

	<?php include("footer.php"); ?>
</body>

</html>