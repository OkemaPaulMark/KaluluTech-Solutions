<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <h3 class="mb-4">User Information</h3>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Include the database connection file
          include('../connection.php');

          // Query to fetch all users
          $sql = "SELECT id, username, email, role FROM users";
          $result = $conn->query($sql);

          // Check if any users exist
          if ($result->num_rows > 0) {
            // Loop through the results and display them in the table
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['username']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['role']}</td>
                        </tr>";
            }
          } else {
            echo "<tr><td colspan='4' class='text-center'>No users found.</td></tr>";
          }

          // Close the database connection
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>