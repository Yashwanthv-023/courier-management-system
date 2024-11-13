<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo h1 {
            margin: 0;
        }
        
        .navigation a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }
        
        .options {
            text-align: center;
        }
        
        .options h2 {
            color: #333;
        }
        
        .options ul {
            list-style-type: none;
            padding: 0;
        }
        
        .options ul li {
            margin-bottom: 10px;
        }
        
        .options ul li a {
            display: block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .options ul li a:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Welcome To Admin Dashboard</h1>
        </div>
        <div class="navigation">
            <a href="../index.php">Login As User</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="options">
            <h2>Admin Options:</h2>
            <ul>
                <li><a href="deletedata.php">Delete Data</a></li>
                <li><a href="deleteusers.php">Delete Users</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
