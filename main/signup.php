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
 
        <form action="createaccount.php" method="post">
            <h1>Sign Up</h1>
            <div class="form">
               
                  <label for="firstname">First Name</label>
                  <input type="text" placeholder="Enter First name" id="firstname" name="fname" required>
               
                 <label for="lastname"> Last Name</label>
                  <input type="text" placeholder="Enter Last name" id="lastname" name="lname" required><br><br>
               
                 <label for="email">Email</label>
                 <input type="text" placeholder="Enter Email" id="email" name="email" required><br><br>
               
                 <label for="phonenumber">Phone number</label>
                 <input type="text" placeholder="Enter Phone number" id="phoneNum" name="cnumber" required><br><br>
               
                 <label for="address">Address</label>
                 <input type="text" placeholder="Enter Address" id="address" name="Address" required><br><br>
               
                 <input type="radio"  id="male" name="Gender" value="male">
                 <span id="male">Male</span>
                 
                 <input type="radio" id="female" name="Gender" value="female">
                  <span id="female">Female</span><br><br>]

                 <label for="password">Password</label>
                 <input type="password" placeholder="Enter Password" id="psw" name="pwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$" required><br><br>
              
                 <label for="confirm password">Confirm Password</label>
                 <input type="password" placeholder="Confirm Password" id="psw-confirm" name="confirmpsw" required><br><br>
              
            </div>
          
       
         <button type="submit" value="Submit">Submit</button><br>
         
         <hr>
         <p>Already have an account? <a href="login.php">Login here</a></p>
       </form> 
      </div>
   </div>
         
    
   
</body>

</html>