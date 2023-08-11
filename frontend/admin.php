<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>

<?php
session_start();
include('../db/dbconfig.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql_fetch_user = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result_fetch_user = mysqli_query($conn, $sql_fetch_user);

    if (mysqli_num_rows($result_fetch_user) == 1) {
        // The user is authenticated successfully.
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header("Location: dashboard.php"); // Redirect to the logged-in page
        exit();
    } else {
        echo '<script>
                alert("Invalid username or password. Please try again.");
                window.location.href = "admin.php";
              </script>';
    }
}
?>







<div class="container-fluid">
          <form action="admin.php" method="post" autocomplete="off">
                <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <!-- <i class="fa-solid fa-envelope"></i> -->
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>

                <div class="input">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="password" placeholder="Password" required>
                </div>
                <div class="button">
                    <button type="submit" name="submit" id="btn">Login</button>
                </div>
          </form>
</div>
</body>
</html>
                