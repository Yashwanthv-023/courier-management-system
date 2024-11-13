<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
    exit; // It's a good practice to exit after redirecting
}
?>

<?php include('header.php'); ?>

<div style="overflow-x:auto;">
    <form action="" method="GET" style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
        <label for="search" style="font-weight: bold;">Search by Payment ID:</label>
        <input type="text" id="search" name="search" placeholder="Enter transaction number" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-left: 10px;">
        <input type="submit" value="Search" style="padding: 8px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>

    <table width='80%' border="1" style="margin-left:auto;margin-right:auto;font-weight:bold;border-spacing: 0;">
        <tr style="background-color: #4CAF50; color: white; font-size: 18px;">
            <th style="padding: 10px;">No.</th>
            <th style="padding: 10px;">Item's Image</th>
            <th style="padding: 10px;">Sender Name</th>
            <th style="padding: 10px;">Receiver Name</th>
            <th style="padding: 10px;">Receiver Email</th>
            <th style="padding: 10px;">Action</th>
        </tr>

        <?php
        include('../dbconnection.php');

        $email = $_SESSION['emm'];
        $search = isset($_GET['search']) ? $_GET['search'] : '';

        // You can refine the query based on your database structure
        $qryy = "SELECT * FROM `courier` WHERE `semail`='$email' AND `billno` LIKE '%$search%'";
        $run = mysqli_query($dbcon, $qryy);

        if (mysqli_num_rows($run) < 1) {
            echo "<tr><td colspan='6' style='text-align:center;'>No records found.</td></tr>";
        } else {
            $count = 0;
            while ($data = mysqli_fetch_assoc($run)) {
                $count++;
        ?>
                <tr align="center">
                    <td style="padding: 10px;"><?php echo $count; ?></td>
                    <td style="padding: 10px;"><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"></td>
                    <td style="padding: 10px;"><?php echo $data['sname']; ?></td>
                    <td style="padding: 10px;"><?php echo $data['rname']; ?></td>
                    <td style="padding: 10px;"><?php echo $data['remail']; ?></td>
                    <td style="padding: 10px;">
                        <a href="updationtable.php?sid=<?php echo $data['c_id']; ?>" style="text-decoration: none; color: #4CAF50;">Edit</a> ||
                        <a href="deletecourier.php?bb=<?php echo $data['billno']; ?>" style="text-decoration: none; color: #f44336;">Delete</a> ||
                        <a href="status.php?sidd=<?php echo $data['c_id']; ?>" style="text-decoration: none; color: #2196F3;">Check Status</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>
