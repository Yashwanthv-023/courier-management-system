<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            color: #333; /* Dark text color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff; /* Blue header background */
            color: #fff; /* White text color */
            font-weight: bold;
            border-bottom: 2px solid #0056b3; /* Darker blue border bottom */
        }

        td {
            border-bottom: 1px solid #dee2e6; /* Light gray border between rows */
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff; /* Blue header color */
        }

        .payment-instructions {
            margin-top: 30px;
            padding: 20px;
            background-color: #f2f9fc; /* Light blue background for payment instructions */
            border-radius: 8px;
            border: 1px solid #d6e4f0; /* Light blue border */
        }

        .payment-instructions h4 {
            margin-bottom: 10px;
            color: #007bff; /* Blue header color */
        }

        .payment-method {
            margin-top: 15px;
        }

        .payment-method li {
            margin-top: 10px;
            font-size: 18px;
            color: #007bff; /* Blue list item color */
            list-style: none; /* Remove default bullet points */
        }

        .payment-method li span {
            font-weight: bold;
            margin-right: 10px;
        }

        .payment-method li strong {
            color: #333; /* Darker text color for payment method details */
        }

        .payment-method li:hover {
            background-color: #f2f9fc; /* Light blue background on hover */
            border-radius: 4px; /* Rounded corners on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Pricing</h3>
        <table>
            <tr>
                <th>Weight in Kg</th>
                <th>Price (INR)</th>
            </tr>
            <tr>
                <td>0-1</td>
                <td>₹120</td>
            </tr>
            <tr>
                <td>1-2</td>
                <td>₹200</td>
            </tr>
            <tr>
                <td>2-4</td>
                <td>₹250</td>
            </tr>
            <tr>
                <td>4-5</td>
                <td>₹300</td>
            </tr>
            <tr>
                <td>5-7</td>
                <td>₹400</td>
            </tr>
            <tr>
                <td>7-above</td>
                <td>₹500</td>
            </tr>
        </table>
        <div class="payment-instructions">
            <h4>Payment Instructions</h4>
            <ul class="payment-method">
                <li><span>1.</span>UPI: <strong>abcd@sbi.com</strong></li>
                <li><span>2.</span>GPay: <strong>6362786223</strong></li>
                <li><span>3.</span>PhonePe: <strong>3565656555</strong></li>
            </ul>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>