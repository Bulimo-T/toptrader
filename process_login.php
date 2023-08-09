<?php
session_start();

// Replace these with actual credentials
$validUsername = "admin";
$validPassword = "password";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_dashboard.php");
    } else {
        // Invalid credentials, redirect back to login
        header("Location: login.php");
    }
}
?>
