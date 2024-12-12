<?php
session_start();

// Include the database connection file
include('connection.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>
            alert('You must be logged in to send feedback!');
            window.location.href = 'login.php'; // Redirect to login page
          </script>";
    exit();
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get logged-in user details from session
    $user_id = $_SESSION['user_id'];
    $full_name = $_SESSION['full_name'];
    $email = $_SESSION['email'];

    // Get the message from the form and sanitize input
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Insert data into the feedback table
    $sql = "INSERT INTO feedback (user_id, full_name, email, message) 
            VALUES ('$user_id', '$full_name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Thank you for your feedback!');
                window.location.href = 'index.php'; // Redirect to the homepage
              </script>";
    } else {
        echo "<script>
                alert('Error: Unable to submit your feedback.');
                window.location.href = 'index.php'; // Redirect back to homepage
              </script>";
    }

    // Close the database connection
    $conn->close();
}
?>
