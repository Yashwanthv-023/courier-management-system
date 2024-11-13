<!-- admin logIn page and login logic -->
<?php

session_start();
if (isset($_SESSION['uid'])) {

    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-form h1 {
            color: #333333;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form input[type="email"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-form input[type="submit"] {
            background-color: #067d64;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #065c4d;
        }
        .login-form a {
            color: #00BCD4;
            text-decoration: none;
            float: right;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="login-form" action="adminlogin.php" method="POST">
            <h1>Admin Login</h1>
            <input type="email" name="uname" placeholder="Email Address" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
            <a href="../index.php">Back to Home</a>
        </form>
    </div>
</body>
</html>

<?php
include('../dbconnection.php');

if (isset($_POST['login'])) {
    $ademail = $_POST['uname'];
    $password = $_POST['pass'];
    
    $qry = "SELECT * FROM `adlogin` WHERE `email`='$ademail' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    
    if ($row < 1) {
        echo '<script>alert("Only admin can login."); window.open("adminlogin.php", "_self");</script>';
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['a_id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
        exit();
    }
}
?>