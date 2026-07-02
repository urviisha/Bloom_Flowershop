<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ./login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>

<h2>Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?></h2>
<p>Your User ID: <?= $_SESSION['user_id']; ?></p>

<a href="../php/logout.php">Logout</a>

</body>
</html>
