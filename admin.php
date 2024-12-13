<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Your authentication logic goes here
    // Example: Check if username and password match a record in your database
    if ($email === "your_email" && $password=== "your_password") {
        // Authentication successful, redirect to enrollment page
        $_SESSION["email"] = $email;
        header("Location: shop.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>