<!-- for 'courier' navbar, courier placing page -->
<?php
session_start();
if (isset($_SESSION['uid']) && isset($_SESSION['emm'])) {
    $email = $_SESSION['emm'];
    $uid = $_SESSION['uid'];
} else {
    header('location: ../index.php');
    exit();
}
?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
</head>


<body>
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <div style="overflow-x:auto;">
            <table border="0px solid" style="margin: auto; font-weight:bold;border-spacing: 5px 15px;">
                <th colspan="4" style="text-align: center;background-color:#00FF00; width: 140px; height: 50px;">Fill The Details Of Sender & Receiver</th>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <hr>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <th colspan="2">SENDER</th>
                    <th colspan="2">RECEIVER</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="sname" placeholder="Sender Full Name" required></td>

                    <td>Name:</td>
                    <td><input type="text" name="rname" placeholder="Receiver Full Name" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="semail" value="<?php echo htmlspecialchars($email); ?>" readonly></td>

                    <td>Email:</td>
                    <td><input type="text" name="remail" placeholder="Receiver Email Id" required></td>
                </tr>
                <tr>
                    <td>Phone No.:</td>
                    <td><input type="text" name="sphone" placeholder="Sender Phone Number" required></td>

                    <td>Phone No.:</td>
                    <td><input type="text" name="rphone" placeholder="Receiver Phone Number" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="saddress" placeholder="Sender Address" required></td>

                    <td>Address:</td>
                    <td><input type="text" name="raddress" placeholder="Receiver Address" required></td>
                </tr>
                <tr>
                    <td colspan="4">✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️✖️</td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="number" name="wgt" placeholder="Weight in kg" required></td>

                    <td>Payment Id:</td>
                    <td><input type="number" name="billno" placeholder="Enter transaction number" required></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly /></td>
                    <td>Items Image:</td>
                    <td><input type="file" name="simg"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="submit" value="Place Order" style="background-color: orange; border-radius: 15px; width: 140px; height: 50px;cursor:pointer;"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    include('../dbconnection.php');

    $sname = htmlspecialchars($_POST['sname']);
    $rname = htmlspecialchars($_POST['rname']);
    $semail = htmlspecialchars($_POST['semail']);
    $remail = htmlspecialchars($_POST['remail']);
    $sphone = htmlspecialchars($_POST['sphone']);
    $rphone = htmlspecialchars($_POST['rphone']);
    $sadd = htmlspecialchars($_POST['saddress']);
    $radd = htmlspecialchars($_POST['raddress']);
    $wgt = htmlspecialchars($_POST['wgt']);
    $billn = htmlspecialchars($_POST['billno']);
    $date = date('Y-m-d'); // Current date

    $image_name = $_FILES['simg']['name'];
    $temp_name = $_FILES['simg']['tmp_name'];
    $image_destination = "../dbimages/$image_name";

    if (move_uploaded_file($temp_name, $image_destination)) {
        $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`, `date`, `u_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbcon->prepare($qry);
        $stmt->bind_param("sssssssssssss", $sname, $rname, $semail, $remail, $sphone, $rphone, $sadd, $radd, $wgt, $billn, $image_name, $date, $uid);
        
        if ($stmt->execute()) {
?>
            <script>
                alert('Order Placed Successfully :)');
                window.open('courierMenu.php', '_self');
            </script>
<?php
        } else {
            echo "Error: " . $qry . "<br>" . $dbcon->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

?>
