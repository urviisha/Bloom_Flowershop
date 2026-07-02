<?php
session_start();
require 'php/db.php'; // database connection

// Redirect if not logged in
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flower Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .cart-btn, .wishlist-btn {
            display: inline-block;
            padding: 10px 18px;
            height: 50px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 77, 109, 0.3);
        }
        .cart-btn { background: #bf4eca; color: #fff; }
        .cart-btn:hover { background: #271d23; transform: translateY(-2px); box-shadow: 0 6px 14px rgba(255,77,109,0.4);}
        .cart-btn:active { transform: scale(0.95);}
        
        .wishlist-btn { background: #ff4d6d; color: #fff; }
        .wishlist-btn:hover { background: #c7334d; transform: translateY(-2px); box-shadow: 0 6px 14px rgba(255,77,109,0.4);}
        .wishlist-btn:active { transform: scale(0.95);}
    </style>
</head>
<body>
<header class="header">
    <a href="index.php" class="logo"><img src="img/4.png" alt="Logo" style="height:50px; width:100px;"></a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="bouquets.php">Flowers</a>
        <a href="./php/wishlist.php">Wishlist</a>
        <a href="./php/cart.php">Cart</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="products" id="products"><br><br><br><br><br>
    <h1 class="heading"><span>OUR</span> Flowers Collection</h1>
    <div class="box-container">

        <?php
        // Sample products array (replace with DB fetch if you want)
        $products = [
            ["id"=>1, "name"=>"Orange & Purple Lily Bouquet", "price"=>1499, "img"=>"01.jpg"],
            ["id"=>2, "name"=>"Luxury Purple & Blue Bouquet", "price"=>2199, "img"=>"02.jpg"],
            ["id"=>3, "name"=>"Premium Blue Rose Bouquet", "price"=>1299, "img"=>"03.jpg"],
            ["id"=>4, "name"=>"Classic Red Rose Bouquet", "price"=>899, "img"=>"04.jpg"],
            ["id"=>5, "name"=>"Grand Red & Pink Rose Mix Bouquet", "price"=>1299, "img"=>"05.jpg"],
            ["id"=>6, "name"=>"Pink Tulip Bouquet", "price"=>1599, "img"=>"06.jpg"],
            ["id"=>7, "name"=>"Blue Orchid Flower Basket", "price"=>1899, "img"=>"07.jpg"],
            ["id"=>8, "name"=>"White Daisy Wrapped Bouquet", "price"=>999, "img"=>"08.jpg"],
            ["id"=>9, "name"=>"Elegant Purple Orchid Bouquet", "price"=>1799, "img"=>"09.jpg"],
            ["id"=>10, "name"=>"Sunflower Love Bunch", "price"=>1399, "img"=>"10.jpg"],
            ["id"=>11, "name"=>"Romantic Red & White Bouquet", "price"=>1699, "img"=>"11.jpg"],
            ["id"=>12, "name"=>"Deluxe Pink Rose Bouquet", "price"=>1499, "img"=>"12.jpg"],
            ["id"=>13, "name"=>"Fresh Blue & Pink Mix Bouquet", "price"=>1699, "img"=>"13.jpg"],
             ["id"=>14, "name"=>"Fresh Blue & Pink Mix Bouquet", "price"=>1099, "img"=>"14.jpg"],
            ["id"=>15, "name"=>"Red & Pink Love Heart Bouquet", "price"=>999, "img"=>"15.jpg"]
        ];

        foreach($products as $product): ?>
        <div class="box">
            <div class="image">
                <img src="img/<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <div class="icons">
                    <!-- Wishlist Form -->
                    <form action="php/add_wishlist.php" method="post">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                        <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                        <input type="hidden" name="product_image" value="<?= $product['img'] ?>">
                        <button type="submit" name="add_wishlist" class="wishlist-btn fas fa-heart">Wishlist</button>
                    </form>

                    <!-- Add to Cart Form -->
                    <form action="php/add_cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                        <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                        <input type="hidden" name="product_image" value="<?= $product['img'] ?>">
                        <button type="submit" name="add_to_cart" class="cart-btn">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="content">
                <h3><?= $product['name'] ?></h3>
                <div class="price">₹<?= $product['price'] ?></div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- Footer -->
<section class="footer">
    <div class="box-container">
        <div class="box"><h3>Quick Links</h3><a href="#home">Home</a><a href="#about">About</a><a href="#products">Products</a></div>
        <div class="box"><h3>Extra Links</h3><a href="profile.php">My Account</a><a href="orders.php">My Orders</a><a href="wishlist.php">My Wishlist</a></div>
        <div class="box"><h3>Locations</h3><a href="#">India</a><a href="#">USA</a><a href="#">Japan</a></div>
        <div class="box"><h3>Contact Info</h3><a href="#">+91 9876543210</a><a href="#">support@flowershop.com</a></div>
    </div>
    <div class="credit">Created by <span>Flower Shop Team</span> | All Rights Reserved</div>
</section>
</body>
</html>
