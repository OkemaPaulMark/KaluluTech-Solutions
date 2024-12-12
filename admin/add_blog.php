<?php
// Include the database connection file
include('../connection.php'); // Adjust the path if necessary

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $heading = $_POST['heading'];
    $description = $_POST['description'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageType = $_FILES['image']['type'];

        // Set a folder to store the uploaded images
        $uploadDir = 'uploads/';

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Generate a unique name for the image to avoid overwriting files
        $imagePath = $uploadDir . uniqid() . '_' . basename($imageName);

        // Move the uploaded image to the upload folder
        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // Insert blog data into the database
            $sql = "INSERT INTO blog (heading, description, image) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $heading, $description, $imagePath);

            if ($stmt->execute()) {
                echo "<script>alert('Blog post submitted successfully!'); window.location = 'blog.php';</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Failed to upload image.');</script>";
        }
    } else {
        echo "<script>alert('No image uploaded or there was an error with the image.');</script>";
    }
}

// Close the database connection
$conn->close();
?>
