<?php include('includes/header.php'); ?>

<div style="max-width: 800px; margin: auto">
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <h3>Add a New Blog</h3>
            <!-- Form to add a new blog post -->
            <form action="add_blog.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="heading" class="form-label">Blog Heading</label>
                    <input type="text" class="form-control bg-dark text-light" name="heading" id="heading" placeholder="Enter blog heading" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Blog Description</label>
                    <textarea class="form-control bg-dark text-light" name="description" id="description" rows="5" placeholder="Enter blog description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" class="form-control bg-dark text-light" name="image" id="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Blog</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php include('includes/footer.php'); ?>
