<?php
include "db.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<section class="products" id="products">
	<h1 class="heading"><span>Latest</span> Products</h1>

	<div class="box-container">

		<?php while($row = mysqli_fetch_assoc($result)) { ?>
		
		<div class="box">
			<div class="image">
				<img src="img/<?php echo $row['image']; ?>" alt="">
				<div class="icons">

					<!-- ❤️ ADD TO WISHLIST -->
					<form action="php/add_wishlist.php" method="POST">
						<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
						<button style="background:none;border:none;color:red;font-size:22px;cursor:pointer;">
							<i class="fas fa-heart"></i>
						</button>
					</form>

					<!-- Add to Cart Button -->
					<a href="cart_add.php?id=<?php echo $row['id']; ?>" class="cart-btn">
						Add to Cart
					</a>

				</div>
			</div>

			<div class="content">
				<h3><?php echo $row['name']; ?></h3>

				<div class="price">
					₹<?php echo $row['price']; ?>
					<span>₹<?php echo $row['price'] + 100; ?></span>
				</div>
			</div>
		</div>

		<?php } ?>

	</div>
</section>
