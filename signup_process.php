<?php
// Include database connection
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Perform any additional validation here before inserting into the database
    $errors = [];

    if (strlen($firstName) > 50) {
        $errors[] = "First name should have a maximum of 50 characters.";
    }

    if (strlen($lastName) > 50) {
        $errors[] = "Last name should have a maximum of 50 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if (!preg_match("/^\d{11}$/", $mobileNumber)) {
        $errors[] = "Mobile number should be 11 digits.";
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{11,}$/", $password)) {
        $errors[] = "Password should contain at least 11 characters, including a capital letter, a number, and a special character.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // If there are no errors, proceed with registration
    if (empty($errors)) {
        // Perform database operations to insert the user data
        // Insert code here
        echo "Registration successful!";
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

    // Insert user into database
    $query = "INSERT INTO coffee_shop_users (first_name, last_name, email, mobile_number, password) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$password')";
    mysqli_query($conn, $query);

    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>