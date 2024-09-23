<?php
session_start();
if(isset($_POST['payment_id'])) {
    $_SESSION['paymentid'] = $_POST['payment_id'];  // Store payment ID in session
    echo "done";
}
?>
