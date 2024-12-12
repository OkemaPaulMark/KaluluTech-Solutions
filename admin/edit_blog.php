<?php
// Include the database connection
include('../connection.php');

// Get the blog ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch the blog data
    $sql = "SELECT * FROM blog WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();

    // Check if the blog exists
    if (!$blog) {
        echo "Blog not found!";
        exit();
    }
} else {
    echo "No blog ID specified!";
    exit();
}

// Handle the form submission for updating the blog
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $imagePath = $blog['image']; // Keep the existing image if not uploading a new one

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $imagePath = 'uploads/' . $imageName;

        // Move the uploaded file to the 'uploads' folder
        move_uploaded_file($imageTempName, $imagePath);
    }

    // Update the blog data in the database
    $updateSql = "UPDATE blog SET heading = ?, description = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param('sssi', $heading, $description, $imagePath, $id);
    $stmt->execute();
    $stmt->close();

    // Redirect to the dashboard
    header("Location: view_blog.php");
    exit();
}

$conn->close();
?>

<?php include('includes/header.php'); ?>
<!-- Edit Blog Form -->
<div class="container py-4">
    <h3>Edit Blog</h3>
    <form action="edit_blog.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="heading" class="form-label">Blog Heading</label>
            <input type="text" class="form-control" name="heading" id="heading" value="<?php echo $blog['heading']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Blog Description</label>
            <textarea class="form-control" name="description" id="description" rows="5" required><?php echo $blog['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload New Image (Optional)</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
            <br>
            <img src="<?php echo $blog['image']; ?>" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>
