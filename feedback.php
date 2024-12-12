<?php
session_start(); // Start the session


// Process the feedback submission
include('connection.php'); // Include database connection

// Get and sanitize user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$full_name = $conn->real_escape_string(trim($_POST['full_name']));
$email = $conn->real_escape_string(trim($_POST['email']));
$message = $conn->real_escape_string(trim($_POST['message']));

// Insert feedback into the database
$sql = "INSERT INTO feedback (full_name, email, message, user_id) 
        VALUES ('$full_name', '$email', '$message', '{$_SESSION['user_id']}')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Thank you for your feedback!');
            window.location.href = 'index.php'; // Redirect to the dashboard
          </script>";
} else {
    echo "<script>
            alert('Error: Unable to submit your feedback.');
            window.location.href = 'index.php'; // Redirect to the dashboard
          </script>";
}

// Close the database connection
$conn->close();
}