<?php 
session_start();
// Ensure that the user is redirected if no payment ID is found in the session
if(!isset($_SESSION['paymentid'])) {
    header('Location: index.php'); // Redirect to the main page or login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Successful</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Payment has been successful</h2>
    <div class="alert alert-success">
        <strong>Success!</strong> Your payment was successful.
        <br>Your payment ID: <?php echo $_SESSION['paymentid']; ?>
    </div>
</div>

</body>
</html>
