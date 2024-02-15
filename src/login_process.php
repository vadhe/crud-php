<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username and password (replace with your authentication logic)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example authentication (replace with your actual authentication logic)
    if ($username === "admin" && $password === "password") {
        // Set session variable to indicate user is logged in
        $_SESSION["loggedin"] = true;

        // Redirect to index page
        header("Location: index.php");
        exit;
    } else {
        // Invalid credentials, redirect back to login page
        $_SESSION["login_error"] = "username or password salah.";
        header("Location: login.php");
        exit;
    }
}
?>
