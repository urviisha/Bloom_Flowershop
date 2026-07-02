<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Login required");
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

// get product details from DB
$p = $conn->prepare("SELECT name, price, image FROM products WHERE id=?");
$p->bind_param("i", $product_id);
$p->execute();
$prod = $p->get_result()->fetch_assoc();

$product_name = $prod['name'];
$product_price = $prod['price'];
$product_image = $prod['image'];

// check if already in wishlist
$check = $conn->prepare("SELECT id FROM wishlist WHERE user_id=? AND product_id=?");
$check->bind_param("ii", $user_id, $product_id);
$check->execute();
$res = $check->get_result();

if ($res->num_rows > 0) {
    echo "Product already in wishlist.";
    exit();
}

// insert now
$stmt = $conn->prepare("INSERT INTO wishlist (user_id, product_id, product_name, product_price, product_image) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iisss", $user_id, $product_id, $product_name, $product_price, $product_image);
$stmt->execute();

echo "Product added to wishlist.";
?>
