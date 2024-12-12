<?php
 // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']); // Check if user_id is set in the session
?>

<!-- Button trigger modal -->
<?php if ($isLoggedIn): ?>
    <!-- Show the button if the user is logged in -->
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Request a Call Back
    </button>
<?php else: ?>
    <!-- Redirect to login page if not logged in -->
    <button type="button" class="btn btn-dark" onclick="window.location.href='login.php'">
        Request a Call Back
    </button>
<?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request a Call</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="callrequest.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fullname" placeholder="Enter full names" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="contact" placeholder="Enter contact" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="service" required>
                            <option value="" disabled selected>Select a service</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Software Systems">Software Systems</option>
                            <option value="IT Consultancy">IT Consultancy</option>
                            <option value="Inquiry">Inquiry</option>
                        </select>
                    </div>
                    <div class="col-12 pb-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Enter message" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
