<?php
 include('../db/dbconfig.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
        <div class="container-fluid ">
            <h1>Create an Account</h1>
            <form action="./register.php" method="post">
                <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="input">
                <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                </div>
                <!-- <div class="input">
                <i class="fa-solid fa-mobile"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
                </div> -->
                <div class="input">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="password" placeholder="Password" required>
                </div>
                <div class="input">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="cpass" id="confirm-password" placeholder="Confirm Password" required>
                </div>
                <div class="button">
                    <button type="submit" name="submit" id="btn">Register</button>
                </div>
                <div class="links">
                   Have an account already?<a href="../frontend/signin.php" >Login Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
