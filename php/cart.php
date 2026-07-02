<?php
session_start();
require 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch cart items
$stmt = $conn->prepare("SELECT * FROM cart WHERE user_id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Cart</title>
<link rel="stylesheet" href="../css/style.css">
<style>
    /* General page styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
    color: #333;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #444;
}

/* Table styling */
table {
    width: 80%;
    margin: 0 auto 30px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

th, td {
    padding: 12px 15px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: #fff;
    font-weight: 600;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Buttons */
button {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c82333;
}

/* Checkout link */
a[href="checkout.php"] {
    display: block;
    width: 200px;
    margin: 0 auto;
    text-align: center;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    padding: 12px 0;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

a[href="checkout.php"]:hover {
    background-color: #218838;
}

/* Responsive table */
@media (max-width: 768px) {
    table, th, td {
        font-size: 14px;
    }

    table {
        width: 100%;
    }
}

</style>

</head>
<body>

 <header class="header">

        <a href="index.php" class="logo">
            <img src="../img/4.png" alt="Logo" style="height:50px; width:100px;">
        </a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="bouquets.php">Flowers</a>
            <a href="./php/ wishlist.php">Wishlist</a>
            <a href="../cart.php">Cart</a>
            <a href="#contact">Contact</a>
        </nav>

    </header><br><br><br><br><br><br>

<br><br><br><br><br><h1>My Cart</h1>
<table border="1" cellpadding="10">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    <?php
    $grand_total = 0;
    while($row = $result->fetch_assoc()):
        $total = $row['product_price'] * $row['quantity'];
        $grand_total += $total;
    ?>
    <tr>
        
        <td><?= $row['product_name'] ?></td>
        <td>₹<?= $row['product_price'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td>₹<?= $total ?></td>
        <td>
            <form action="cart_remove.php" method="post" style="display:inline;">
                <input type="hidden" name="cart_id" value="<?= $row['id'] ?>">
                <button type="submit">Remove</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
    <tr>
        <td colspan="3"><strong>Grand Total</strong></td>
        <td colspan="2"><strong>₹<?= $grand_total ?></strong></td>
    </tr>
</table>

<a href="checkout.php">Checkout</a>
</body>
</html>
