<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <h3 class="mb-4">Feedback Information</h3>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Include the database connection file
          include('../connection.php');

          // Query to fetch all feedback
          $sql = "SELECT id, full_name, email, message FROM feedback";
          $result = $conn->query($sql);

          // Check if any feedback exists
          if ($result->num_rows > 0) {
            // Loop through the results and display them in the table
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['full_name']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['message']}</td>
                        </tr>";
            }
          } else {
            echo "<tr><td colspan='4' class='text-center'>No feedback found.</td></tr>";
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