<?php
session_start();
require 'database/connect.php'; // Skrip koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute SQL statement to fetch user data based on username
    $stmt = $mysqli->prepare("SELECT * FROM account WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if user exists and if password matches (plain text comparison)
    if ($user && $password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php?error=1"); // Redirect to login.php with an error parameter
        exit();
    }
}
?>
