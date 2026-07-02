<?php
session_start();
require "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check empty fields
    if ($name === "" || $email === "" || $password === "") {
        echo "All fields are required!";
        exit;
    }

    // Hash password
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_pass')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../login.html");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
