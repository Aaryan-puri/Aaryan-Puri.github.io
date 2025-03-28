<?php
// Dummy login credentials (replace with database integration for production use)
$validUsername = "admin";
$validPassword = "password123";

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check login credentials
if ($username === $validUsername && $password === $validPassword) {
    echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    // Redirect to the portal or dashboard
    header("Location: portal.php");
    exit();
} else {
    echo "Invalid username or password. Please try again.";
    // Redirect back to login page after 2 seconds
    header("refresh:2; url=login.html");
    exit();
}
?>
