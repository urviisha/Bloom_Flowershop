<?php
session_start();
require "../php/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email == "" || $password == "") {
        die("Please enter both email and password.");
    }

    $email = trim($email);
    $password = trim($password);

    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: ../index.php");  // <-- IMPORTANT
            exit;

        } else {
            echo "Incorrect password!";
        }

    } else {
        echo "Email not found!";
    }
}
?>
