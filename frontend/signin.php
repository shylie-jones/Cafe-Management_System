<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <div class="container-fluid">
            <h1>Login</h1>
            <form action="./login.php" method="post" autocomplete="off">
                <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <!-- <i class="fa-solid fa-envelope"></i> -->
                    <input type="text" name="username" id="username" placeholder="Username/Email" required>
                </div>

                <div class="input">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="password" placeholder="Password" required>
                </div>
                
                <div class="forget">
                Forgot Password?<a href=""></a>
                </div>

                <div class="button">
                    <button type="submit" name="submit" id="btn">Login</button>
                </div>
                <div class="links">
                   Don't have an account?<a href="../frontend/signup.php" >Register Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
