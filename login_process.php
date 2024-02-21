<?php
session_start();
// Include database connection
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform query to check if user exists with given email and password
    $query = "SELECT * FROM coffee_shop_users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User exists, set session and redirect to homepage
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        // User doesn't exist or incorrect credentials, redirect back to login page
        header("Location: login.php");
        exit();
    }
}
?>