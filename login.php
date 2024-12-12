

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar Section -->
  <section>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark py-3 " id="#home">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/kalulutech.jpg" width="30" height="25" class="d-inline-block align-top" alt="" loading="lazy">
          Kalulu<span style="color: forestgreen; font-weight: bold">Tech</span> Solutions</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <button type="button" class="btn btn-success"><a href="register.php" style="text-decoration: none; color: white">Log In</a></button>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <div class="container mt-5 pt-5" style="max-width: 450px;">
    <div class="card shadow">
      <h4 class="card-header text-center text-success">Log In</h4>
      <div class="card-body">
        <form action="logging.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
          </div>
          <p>Don't have an Account? <a href="register.php" style="color: forestgreen;">Register</a></p>
          <button type="submit" class="btn btn-success w-100">Log In</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>