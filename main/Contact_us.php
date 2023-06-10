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


	<?php include("header.php"); ?>
		<div class="container">
		<div class="wrap">
			<?php
				include "config.php";

				if(isset($_POST['Submit']))
				{
					$name = $_POST['Name'];
					$Email = $_POST['Email'];
					$msg = $_POST['Message'];
				}

				$sql = "INSERT INTO 'inquiry_tb'('Name','Email','Message')	VALUES ('$name','$Email','$msg')";
				$result = $conn->query($sql);
					if($result == true)
					{
						echo "New Record Added Successfully";
					}
					else
					{
						echo "Error:" . $sql . "<br>" . $conn->error; 
					}

					$conn->close()
			
			?>
			<Center>
			<div class="Container_2">
				<form id="form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
				<h1 class="subheading">Contact Us</h1>
		
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

	<?php include("footer.php");
	?>
</body>
</html>