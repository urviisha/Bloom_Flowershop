<?php
session_start();
require 'db.php';

$wishlist_id = $_POST['wishlist_id'];

$stmt = $conn->prepare("DELETE FROM wishlist WHERE id=?");
$stmt->bind_param("i", $wishlist_id);
$stmt->execute();

header("Location: ./php/wishlist.php");
exit();
