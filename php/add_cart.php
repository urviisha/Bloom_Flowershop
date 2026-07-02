<?php
session_start();
require 'db.php'; // your database connection

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Check if product already in cart
    $stmt = $conn->prepare("SELECT * FROM cart WHERE user_id=? AND product_id=?");
    $stmt->bind_param("ii", $user_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        // Product already in cart, increase quantity
        $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE user_id=? AND product_id=?");
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        echo "Product quantity updated in cart.";
    } else {
        // Insert new product
        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, product_name, product_price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisd", $user_id, $product_id, $product_name, $product_price);
        $stmt->execute();
        echo "Product added to cart.";
    }
}
?>
