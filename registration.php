<?php
include('connection.php'); // Database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string(trim($_POST['username']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate password match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.location.href='register.php';</script>";
        exit();
    }

    // Check if email already exists
    $checkEmailSQL = "SELECT id FROM users WHERE email = '$email'";
    $emailResult = $conn->query($checkEmailSQL);

    if ($emailResult->num_rows > 0) {
        echo "<script>alert('Email is already registered.'); window.location.href='register.php';</script>";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', 'user')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful! Redirecting to login.'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
