<?php
// Start the session
session_start();
// Define hardcoded credentials (for demonstration purposes)
$valid_username = "root";
$valid_password = "";

// Initialize variables
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials are valid
    if ($username == $valid_username && $password == $valid_password) {
        // Set the session variable
        $_SESSION['username'] = $username;
        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

 
