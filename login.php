<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="email">Email Address:</label><br>
        <input type="text" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Your authentication logic goes here
    // For simplicity, let's assume username and password are hardcoded
    $valid_username = 'user';
    $valid_password = 'password';

    // Check if the provided credentials match the valid ones
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, redirect to a secure page
        header("Location: secure_page.php");
        exit;
    } else {
        // Authentication failed, display an error message
        echo "<p>Invalid username or password. Please try again.</p>";
    }
}
?>
