<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .container {
            margin-top: 50px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
            background-color: #ffffff;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #6c757d;
            text-align: center;
            margin-top: 0;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .btn-verify {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            transition: all 0.3s ease;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .btn-verify:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .register-link {
            color: #dc3545;
        }
        .register-link:hover {
            color: #bd2130;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Reset</h1>
        <p>To reset your password, please verify your email address.</p>
        <form action="resetpswd.php" method="get">
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-verify">Verify Email</button>
            </div>
        </form>
        <p class="text-center">Don't have an account? <a href="register.php" class="register-link">Register here</a>.</p>
    </div>
</body>
</html>


<?php

require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];

    $qryy= "SELECT * FROM `login` WHERE `email`='$email'";
    $run= mysqli_query($dbcon,$qryy);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Opps! Email not matched..Try again or Create New One");
            window.open('resetpswd.php','_self');
        </script>   <?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['u_id'];
        session_start();
        $_SESSION['gid']=$id;
        
        ?>  <script>
              
            window.open('reset.php','_self');
            </script>
        <?php
        

    }
}
    
?>