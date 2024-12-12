<?php
// Include the database connection
include('../connection.php');

// Get the blog ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to delete the blog
    $sql = "DELETE FROM blog WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();

    // Redirect to the dashboard
    header("Location: view_blog.php");
    exit();
}

$conn->close();
?>
