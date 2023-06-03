<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signup.css">
    
    <title>Sign Up</title>
</head>

<body>

    <?php include("header.php"); ?>
    
    <div class="container">

        <div class="wrap">

        <form id="signup">
              <h1>Sign Up</h1>

              <label for="Firstname"><b>First Name</b></label>
              <input type="text" placeholder="Enter First name" id="firstname" required>

              <label for="Lastname"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last name" id="lastname" required>
              <br>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" id="email" required>
              <br>

              <label for="phone number"><b>Phone number</b></label>
              <input type="text" placeholder="Enter Phone number" id="PhoneNum" required>
              <br>

              <label for="address"><b>Address</b></label>
              <input type="text" placeholder="Enter Address" id="address" required>
              <br>

              <input type="radio" name ="gender" id="male">
              <span id="male">Male</span>

              <input type="radio" name ="gender" id="female">
              <span id="female">Female</span>
              <br>

              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" id="psw" required>
              <br>
              
              <label for="confirm password"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" id="psw-confirm" required>
              <br>
          
              <p>By clicking the submit button you agree to our <a href="#" >Terms & Conditions</a></p>
              <p>Already have an account? <a href="#">Login here</a></p>

              <button type="submit" form="signup" value="Submit">Submit</button>
            </form> 
        </div>
    </div>
    
    
</body>
</html>