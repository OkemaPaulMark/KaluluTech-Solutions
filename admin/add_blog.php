<?php
// Include the database connection
include('../connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $heading = $_POST['heading'];
    $description = $_POST['description'];

    // Handle the image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $imagePath = 'uploads/' . $imageName;

        // Move the uploaded file to the 'uploads' folder
        move_uploaded_file($imageTempName, $imagePath);
    }

    // Insert data into the database
    $sql = "INSERT INTO blog (heading, description, image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $heading, $description, $imagePath);
    $stmt->execute();
    $stmt->close();

    // Redirect to the dashboard to see the blog list
    header("Location: blog.php");
    exit();
}

$conn->close();
?>
