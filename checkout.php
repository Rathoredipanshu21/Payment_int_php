<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemname = $_POST['itemname'] ?? 'Default Item';
    $amount = 1; // fixed amount of Rs 200

    // Store the item name in session for later use
    $_SESSION['itemname'] = $itemname;
    $_SESSION['amount'] = $amount;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<script>
    var options = {
        "key": "rzp_test_PYHaLDDqKzcd6G", // Enter the Key ID generated from the Dashboard
        "amount": "<?php echo $_SESSION['amount'] * 100; ?>", // Amount is in currency subunits
        "currency": "INR",
        "name": "<?php echo $_SESSION['itemname']; ?>",
        "description": "Transaction for " + "<?php echo $_SESSION['itemname']; ?>",
        "image": "https://example.com/your_logo",
        "handler": function (response){
            $.ajax({
                url: "payment-success.php",
                type: "POST",
                data: {
                    payment_id: response.razorpay_payment_id
                },
                success: function(result){
                    window.location.href = "success.php";
                }
            });
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
</script>

</body>
</html>
