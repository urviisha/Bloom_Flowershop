
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flower Shop</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

	<header class="header">

<a href="./index.php" class="logo">
    <img src="./img/4.png" alt="Logo" style="height:50px; width:100px;">
</a>

		<nav class="navbar">
			<a href="#home">Home</a>
			<a href="./about.html">About</a>
			<a href="./bouquets.php">Flowers</a>
			<a href="./php/wishlist.php">Wishlist</a>
			<a href="./php/cart.php">Cart</a>
			<a href="#contact">Contact</a>
		</nav>

		<div class="user-menu">
    <?php if (isset($_SESSION['user_id'])): ?>

     
        <a href="./php/profile.php" class="btn"><?= $_SESSION['user_name']; ?></a>
        <a href="./php/logout.php" class="btn logout">Logout</a>

    <?php else: ?>

       
        <a href="./login.html" class="btn">Login</a>
        <a href="./register.html" class="btn">Register</a>

    <?php endif; ?>
</div>


	</header>

	<!-- HOME SECTION -->
	<section class="home" id="home">
		<div class="content">
			<h3>Fresh Flowers Delivered</h3>
			<span>Beautiful & Natural Floral Collections</span>
			<p>
				We bring you freshly handpicked flowers prepared with love and care.
				Perfect for birthdays, anniversaries, celebrations, and special moments.
				Let our flowers add beauty and happiness to your day.
			</p>
			<a href="./bouquets.php" class="btn">Shop Now</a>
		</div>
	</section>

	


	<!-- FEATURES / ICONS -->
	 <section class="icons-container">

		<div class="icons">
			<img src="img/icon-1.png" alt="">
			<div class="info">
				<h3>Free Delivery</h3>
				<span>On all orders</span>
			</div>
		</div>

		<div class="icons">
			<img src="img/icon-2.png" alt="">
			<div class="info">
				<h3>10-Day Return</h3>
				<span>Money-back guarantee</span>
			</div>
		</div>

		<div class="icons">
			<img src="img/icon-3.png" alt="">
			<div class="info">
				<h3>Gift Offers</h3>
				<span>Available on every bouquet</span>
			</div>
		</div>

		<div class="icons">
			<img src="img/icon-4.png" alt="">
			<div class="info">
				<h3>Secure Payments</h3>
				<span>Protected transactions</span>
			</div>
		</div>

	</section> 

	<!-- PRODUCTS -->
	<section class="products" id="products">
		<h1 class="heading"><span>Latest</span> Products</h1>

		<div class="box-container">

			<!-- PRODUCT 1 -->
			<div class="box">
				<div class="image">
					<img src="img/01.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Rose Flower Vase</h3>
					<div class="price">₹999 <span>₹1299</span></div>
					</div>				
			</div>

			<!-- PRODUCT 2 -->
			<div class="box">
				<div class="image">
					<img src="img/img-2.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Lily Bouquet</h3>
					<div class="price">₹520 <span>₹600</span></div>
				</div>
			</div>

			<!-- PRODUCT 3 -->
			<div class="box">
				<div class="image">
					<img src="img/img-3.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Sunflower Bundle</h3>
					<div class="price">₹1000 <span>₹1200</span></div>
				</div>
			</div>

			<!-- PRODUCT 4 -->
			<div class="box">
				<div class="image">
					<img src="img/img-4.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Pink Blossom Vase</h3>
					<div class="price">₹1300 <span>₹1400</span></div>
				</div>
			</div>

			<!-- PRODUCT 5 -->
			<div class="box">
				<div class="image">
					<img src="img/img-5.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Orchid Pot</h3>
					<div class="price">₹950 <span>₹1050</span></div>
				</div>
			</div>

			<!-- PRODUCT 6 -->
			<div class="box">
				<div class="image">
					<img src="img/img-6.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>White Daisy Vase</h3>
					<div class="price">₹840 <span>₹900</span></div>
				</div>
			</div>

			<!-- PRODUCT 7 -->
			<div class="box">
				<div class="image">
					<img src="img/img-7.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Tulip Vase</h3>
					<div class="price">₹1200 <span>₹1450</span></div>
				</div>
			</div>

			<!-- PRODUCT 8 -->
			<div class="box">
				<div class="image">
					<img src="img/img-8.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Red Rose Basket</h3>
					<div class="price">₹1550 <span>₹1800</span></div>
				</div>
			</div>

			<!-- PRODUCT 9 -->
			<div class="box">
				<div class="image">
					<img src="img/img-9.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn">Add to Cart</a>
					</div>
				</div>
				<div class="content">
					<h3>Colorful Mix Bouquet</h3>
					<div class="price">₹1300 <span>₹1750</span></div>
				</div>
			</div>

		</div>
	</section>

	<!-- CONTACT -->
	<section class="contact" id="contact">
		<h1 class="heading"><span>Contact</span> Us</h1>

		<div class="row">

			<form action="">
				<input type="text" placeholder="Name" class="box">
				<input type="email" placeholder="Email" class="box">
				<input type="number" placeholder="Phone Number" class="box">
				<textarea cols="30" rows="10" class="box" placeholder="Message"></textarea>
				<input type="submit" value="Send Message" class="btn">
			</form>

			<div class="image">
				<img src="img/contact-img.svg" alt="">
			</div>

		</div>
	</section>

	<!-- FOOTER -->
	<section class="footer">

		<div class="box-container">

			<div class="box">
				<h3>Quick Links</h3>
				<a href="#home">Home</a>
				<a href="#about">About</a>
				<a href="#products">Products</a>
				<a href="#review">Reviews</a>
				<a href="#contact">Contact</a>
			</div>

			<div class="box">
				<h3>Extra Links</h3>
				<a href="profile.php">My Account</a>
				<a href="orders.php">My Orders</a>
				<a href="wishlist.php">My Wishlist</a>
			</div>

			<div class="box">
				<h3>Locations</h3>
				<a href="#">India</a>
				<a href="#">USA</a>
				<a href="#">Japan</a>
				<a href="#">France</a>
			</div>

			<div class="box">
				<h3>Contact Info</h3>
				<a href="#">+91 9876543210</a>
				<a href="#">support@flowershop.com</a>
				<a href="#">Ahmedabad, India</a>
			</div>

		</div>

		<div class="credit">
			Created by <span>Flower Shop Team</span> | All Rights Reserved
		</div>

	</section>

	<script src="js/script.js"></script>

</body>

</html>