<?php 
// Include header (assuming header.php contains the navigation and other layout parts)
include('includes/header.php');

// Include database connection
include('../connection.php');

// Query to fetch all blog posts from the blog table
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);

// Start the table and check if there are any blog posts in the database
if ($result->num_rows > 0) {
    echo '<div class="container py-4">';
    echo '<h3>Blog Posts</h3>';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Heading</th>';
    echo '<th>Description</th>';
    echo '<th>Image</th>';
    echo '<th>Actions</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through each blog post and display in table rows
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>'; // Display the blog post ID
        echo '<td>' . $row['heading'] . '</td>'; // Display the blog heading
        echo '<td>' . substr($row['description'], 0, 80) . '...</td>'; // Display part of the description (limit to 100 characters)
        echo '<td><img src="uploads/' . $row['image'] . '" alt="Blog Image" style="height: 50px; width: auto;"></td>'; // Display the blog image
        echo '<td>';
        echo '<a href="edit_blog.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
        echo '<a href="delete_blog.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this blog?\')">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo '<div class="container py-4">';
    echo '<p>No blog posts available at the moment.</p>';
    echo '</div>';
}

// Close the database connection
$conn->close();

// Include footer (assuming footer.php contains footer content)
include('includes/footer.php');
?>
