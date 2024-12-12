<?php
// Include the database connection file
include('connection.php'); // Replace with your actual database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $fullname = $conn->real_escape_string(trim($_POST['fullname']));
    $contact = $conn->real_escape_string(trim($_POST['contact']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $service = $conn->real_escape_string(trim($_POST['service']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Insert data into the callrequest table
    $sql = "INSERT INTO callrequest (fullname, contact, email, service, message) 
            VALUES ('$fullname', '$contact', '$email', '$service', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Your request has been submitted successfully!');
                window.location.href = 'index.php'; // Redirect to the homepage or any other page
              </script>";
    } else {
        echo "<script>
                alert('Error: Unable to submit your request.');
                window.location.href = 'index.php'; // Redirect back to the homepage
              </script>";
    }

    // Close the database connection
    $conn->close();
}
?>
