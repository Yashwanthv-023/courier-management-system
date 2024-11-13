<?php

include('dbconnection.php');
session_start();
$gd = $_SESSION['gid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group {
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        .form-group input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 18px;
            box-sizing: border-box;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Set New Password</h1>
        <form action="reset.php" method="POST">
            <div class="form-group">
                <label for="pass">New Password:</label>
                <input type="password" id="pass" name="pass" placeholder="Enter new password" required>
            </div>
            <div class="form-group">
                <label for="confirm_pass">Confirm Password:</label>
                <input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm new password" required>
            </div>
            <input type="submit" name="submit" value="Update Password">
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['submit'])) {

    $password = $_POST['pass'];

    $qryd = "UPDATE `login` SET `password` = '$password' WHERE `u_id` = '$gd'";
    $run = mysqli_query($dbcon, $qryd);

    if ($run == true) {
        ?> <script>
            alert('Password Updated Successfully :)');
            window.open('logout.php', '_self');
            </script>
        <?php
    }
}
?>