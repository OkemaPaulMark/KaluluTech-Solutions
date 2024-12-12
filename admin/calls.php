<?php
// Include the database connection file
include('../connection.php');

// Check if a delete request is made
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Query to delete the call request
    $delete_sql = "DELETE FROM callrequest WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param('i', $delete_id);
    $stmt->execute();
    $stmt->close();

    // Redirect to the same page to refresh the data
    header("Location: {$_SERVER['PHP_SELF']}");
    exit(); // Make sure no further code is executed after the redirect
}

include('includes/header.php');
?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <h3 class="mb-4">Call Request Information</h3>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Service</th>
            <th>Message</th>
            <th>Action</th> <!-- New Action column -->
          </tr>
        </thead>
        <tbody>
          <?php
          // Query to fetch all call requests
          $sql = "SELECT id, fullname, contact, email, service, message FROM callrequest";
          $result = $conn->query($sql);

          // Check if any call requests exist
          if ($result->num_rows > 0) {
            // Loop through the results and display them in the table
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['fullname']}</td>
                          <td>{$row['contact']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['service']}</td>
                          <td>{$row['message']}</td>
                          <td>
                            <a href='?delete_id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>
                          </td>
                        </tr>";
            }
          } else {
            echo "<tr><td colspan='7' class='text-center'>No call requests found.</td></tr>";
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
