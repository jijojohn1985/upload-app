<?php
session_start();

// Define your username and password
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials are correct
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: upload.html'); // Redirect to upload page
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>

