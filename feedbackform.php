<?php
// Start the session


// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']); // Replace 'user_id' with the session key you use to track logged-in users

// Check if the form has been submitted and the user is not logged in
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$isLoggedIn) {
    // If not logged in and attempting to submit the form, redirect to login page
    header('Location: login.php');  // Redirect to login page
    exit();
}
?>

<div class="col-sm-12 col-md-6 col-lg-6 mb-4">
    <h5>Enter your Feedback here</h5>

    <!-- Feedback form for all users -->
    <form action="feedback.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4 py-0">
            <div class="col-12">
                <input type="text" class="form-control" name="full_name" placeholder="Full names" required>
            </div>
            <div class="col-12">
                <input type="email" class="form-control" name="email" placeholder="Email address" required>
            </div>
            <div class="col-12 pb-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
        </div>
        <button class="btn btn-success mb-3" type="submit">Submit</button>
    </form>
</div>
