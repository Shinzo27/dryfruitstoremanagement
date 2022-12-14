<?php
include 'partials/datacon.php';
session_start();
$api_key = "rzp_test_bjhlVzb7HXtZXh";
$uid = $_SESSION['uid'];
$name = $_SESSION['name'];
$payment = $_SESSION['payment'];
$number = $_SESSION['number'];
$total_products = $_SESSION['total_products'];
$total_price = $_SESSION['total_price'];
$address = $_SESSION['address'];
$placed_on = $_SESSION['placed_on'];

$query = "SELECT MAX(oid) FROM tblorder;";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($result);

if ($payment == "cashondelivery") {
  header("location: Orderplaced.php");
}

if ($payment == "prepaid") {
?>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <form method="POST" action="Orderplaced.php">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $api_key; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys data-amount="<?php echo $total_price * 100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35. data-currency="INR" // You can accept international payments by changing the currency code. // Replace with the order_id generated by you in the backend. data-buttontext="Pay with Razorpay" data-name="Patel's Dryfruit And Masala" data-description="" data-image="" data-prefill.name="<?php echo $name; ?>" data-prefill.contact="<?php echo $number; ?>" data-theme.color="#F37254"></script>
    <input type="hidden" custom="Hidden Element" name="hidden" />
  </form>

  <style>
    .razorpay-payment-button {
      display: none;
    }
  </style>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.razorpay-payment-button').click();
    });
  </script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" type="x-icon" href="images\icon.ico">
</head>

<body>



</body>

</html>