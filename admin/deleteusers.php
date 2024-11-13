<!-- when admin click delete user link, it displays all users with delete option -->
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
    <title>Show All Users</title>
    <!-- CSS for better styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .logout {
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #f44336;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .logout:hover {
            background-color: #d32f2f;
        }
    
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
            border: 1px solid #ddd;
            border-spacing: 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4caf50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Show All Users</h1>
        <div class="header-links">
        <a href="logout.php" class="logout">Log Out</a>
        <a href="dashboard.php" class="dashboard-link" style="float: left; margin-left: 20px; ">Back to Dashboard</a>
        </div>
    </div>
    
    <div style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User's Name</th>
                    <th>Email Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('../dbconnection.php');
                    $qry = "SELECT * FROM `users`";
                    $run = mysqli_query($dbcon, $qry);
                    if(mysqli_num_rows($run) < 1){
                        echo "<tr><td colspan='4'>There are no users in the database.</td></tr>";
                    } else {
                        $count = 0;
                        while($data = mysqli_fetch_assoc($run)) {
                            $count++;
                ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><a href="usersdeleted.php?emm=<?php echo $data['email']; ?>" class="delete-link">Delete User</a></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

