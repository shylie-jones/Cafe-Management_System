<?php
include("../db/dbconfig.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

    $sql_username = "SELECT * FROM users WHERE username='$username'";
    $sql_email = "SELECT * FROM users WHERE email='$email'";

$result_username = mysqli_query($conn, $sql_username);                      
    $result_email = mysqli_query($conn, $sql_email);

    $count_user = mysqli_num_rows($result_username);
    $count_email = mysqli_num_rows($result_email);

    if ($count_user == 0 && $count_email == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
            $result_insert = mysqli_query($conn, $sql_insert);

            if ($result_insert) {
                echo "<script>
                alert('Register Successfully');
                </script>";
                header("Location: signin.php");
                exit(); // Important to add this exit() to prevent further execution of the script.
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                  </script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                    alert("Username already exists!!");
                    window.location.href = "signup.php";
                  </script>';
        }
        if ($count_email > 0) {
            echo '<script>
                    alert("Email already exists!!");
                    window.location.href = "signup.php";
                  </script>';
        }
    }
}
?>
