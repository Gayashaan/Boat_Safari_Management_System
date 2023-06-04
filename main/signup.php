<!DOCTYPE html>

<html>
    <head>
        <title>Sign up page</title>
        <link rel="stylesheet" href="signupstyle.css">
    </head>
    <body>
         <div class="container">
            <header> Sign Up</header>

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


              <form action="#"></form>

              <div class="fields">
                <div class="class input-fields">
                   <label for="firstname">First Name</label>
                  <input type="text" placeholder="Enter First name" id="firstname" required>
                </div>
                <div class="class input-fields">
                   <label for="lastname"> Last Name</label>
                   <input type="text" placeholder="Enter Last name" id="lastname" required>
                </div>
              
                <div class="class input-fields">
                   <label for="email">Email</label>
                   <input type="text" placeholder="Enter Email" id="email" required>
                </div>
              
                <div class="class input-fields">
                   <label for="phone number">Phone number</label>
                   <input type="text" placeholder="Enter Phone number" id="phoneNum" required>
                </div>
              
                <div class="class input-fields">
                   <label for="address">Address</label>
                  <input type="text" placeholder="Enter Address" id="address" required>
                 </div>
              
                <div class="class input-fields">
                  <input type="radio" name ="gender" id="male">
                  <span id="male">Male</span>


                  <input type="radio" name ="gender" id="female">
                  <span id="female">Female</span>
                </div>
              
              <div class="class input-fields">
                 <label for="password">Password</label>
                 <input type="password" placeholder="Enter Password" id="psw" required>
              </div>
              
              <div class="class input-fields">
                 <label for="confirm password">Confirm Password</label>
                 <input type="password" placeholder="Confirm Password" id="psw-confirm" required>
              </div>
            </div>
          
            <p>By clicking the submit button you agree to our <a href="#" >Terms & Conditions</a></p><br>
            <button type="submit" form="signup" value="Submit">Submit</button><br>
            <hr>
            <p>Already have an account? <a href="#">Login here</a></p>
       </form> 
       </div>
         
    </body>

              <button type="submit" form="signup" value="Submit">Submit</button>
            </form> 
        </div>
    </div>
    
    
</body>

</html>