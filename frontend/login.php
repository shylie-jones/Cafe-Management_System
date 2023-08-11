<?php
session_start();
include('../db/dbconfig.php');

if (isset($_POST['submit'])) {
    $username_email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql_fetch_user = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
    $result_fetch_user = mysqli_query($conn, $sql_fetch_user);

    if (mysqli_num_rows($result_fetch_user) == 1) {
        $user_data = mysqli_fetch_assoc($result_fetch_user);
        $hashed_password = $user_data['password'];

        if (password_verify($password, $hashed_password)) {
            // Password is correct, the user is authenticated.
            // You can store user information in session or cookies and redirect to a logged-in page.
            session_start();
            $_SESSION['id'] = $user_data['id']; // Assuming your user table has a column 'user_id'.
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['email'] = $user_data['email'];

            header("Location: home.php"); // Redirect to the logged-in page
            exit();
        } else {
            echo '<script>
                    alert("Invalid password. Please try again.");
                    window.location.href = "signin.php";
                  </script>';
        }
    } else {
        echo '<script>
                alert("User not found. Please check your username/email and try again.");
                window.location.href = "signin.php";
              </script>';
    }
}
?>
