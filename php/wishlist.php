<?php
session_start();
require 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Now fetch correct columns from DB
$sql = "SELECT id, product_name, product_price, product_image 
        FROM wishlist 
        WHERE user_id = ?
        ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
<title>My Wishlist</title>
<link rel="stylesheet" href="../css/style.css">

<style>
body{
    background:#f5f5f5;
    font-family: Arial;
    text-align:center;
}
h1{
    margin-top:30px;
    font-size:35px;
}
.wishlist-box{
    width:100%;
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:25px;
    margin-top:30px;
}
.item{
    width:350px;
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
.item img{
    width:220px;
    height:240px;
    object-fit:cover;
    border-radius:10px;
}
.item h3{
    font-size:20px;
    margin-top:15px;
}
.item h2{
    color:#1e00ff;
    margin-top:5px;
}
.remove-btn{
    margin-top:15px;
    background:red;
    color:white;
    padding:10px 15px;
    border:none;
    border-radius:6px;
    cursor:pointer;
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
            <a href="../bouquets.php">Flowers</a>
            <a href="../wishlist.php">Wishlist</a>
            <a href="./php/cart.php">Cart</a>
            <a href="#contact">Contact</a>
        </nav>

    </header><br><br><br><br>

<br><br><br><br><br><h1>My Wishlist</h1>

<div class="wishlist-box">

<?php while($row = $result->fetch_assoc()): ?>

<div class="item">
    <img src="img/<?= $products['img'] ?>" alt="">
    <h3><?php echo $row['product_name']; ?></h3>
    <h2>₹<?php echo $row['product_price']; ?></h2>

    <form action="../php/remove_wishlist.php" method="POST">
        <input type="hidden" name="wishlist_id" value="<?php echo $row['id']; ?>">
        <button class="remove-btn">Remove</button>
    </form>
</div>

<?php endwhile; ?>

</div>

</body>
</html>
