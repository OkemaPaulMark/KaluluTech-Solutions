<?php include('includes/header.php'); ?>

<div class="container py-4">
    <h3>Blog Dashboard</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Heading</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include the database connection
            include('../connection.php');

            // Query to fetch all blog posts
            $sql = "SELECT id, heading, description, image FROM blog";
            $result = $conn->query($sql);

            // Check if there are any blogs
            if ($result->num_rows > 0) {
                // Loop through and display each blog
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['heading']}</td>
                            <td>" . substr($row['description'], 0, 50) . "...</td>
                            <td><img src='{$row['image']}' alt='image' width='100'></td>
                            <td>
                                <a href='edit_blog.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_blog.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No blogs found.</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
