<?php
session_start();

if (empty($_SESSION['cart'])) {
    header("Location: ./add_cart.php");
    exit();
}

$grand_total = 0;
foreach ($_SESSION['cart'] as $item) {
    $grand_total += $item['price'] * $item['qty'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
</head>
<body>

<h1>Checkout</h1>

<h2>Total Amount: ₹<?= $grand_total ?></h2>

<form action="order_success.php" method="post">
    <button type="submit">Place Order</button>
</form>

</body>
</html>
