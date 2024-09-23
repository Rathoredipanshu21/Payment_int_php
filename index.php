<?php
session_start();
$amount = 1;  // Define the amount here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Pay for Item</h2>
    <form action="checkout.php" method="post">
        <div class="mb-3 mt-3">
            <label for="itemname" class="form-label">Item Name:</label>
            <input type="text" class="form-control" id="itemname" placeholder="Enter item name" name="itemname" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit and Pay ₹<?php echo $amount; ?></button>
    </form>
</div>

</body>
</html>
