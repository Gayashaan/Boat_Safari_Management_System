<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/css/header.css">
    <link rel="stylesheet" href="css/adminloging.css">
    <title>Admin Loging</title>
</head>
<body>
    <?php include("header.php"); ?>



    <div class="container">
        <img src="../main/images/boat.webp" alt="">
        <div class="wrap">
            <div class="formwrap">
                <div class="imgwrap">
                </div>
                <form action="" method="post">
                    <div class="background">
                        <p>Log In</p>
                        <div class="inputs">
                            <label for="email">Username</label>
                            <input type="email" name="email" id="email" placeholder="Email" autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
                        </div>
        
                        <div class="inputs">
                             <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </div>
        
                        <div class="inputs">
                            <input type="submit" value="Log In">
                            <a href="../admin/dashboard.php">Forget password?(click here to see admin dashboard)</a>
                        </div>
                    </div>
                    

                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>