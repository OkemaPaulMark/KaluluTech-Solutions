<?php
session_start();

// Check if the user is logged in
// if (!isset($_SESSION['user_id'])) {
//   header("Location: login.php"); // Redirect to login page
//   exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kalulutechsolutions.com</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    .homepage {
      background-image: url(images/about.jpg);
      background-position: center;
      background-size: cover;
      height: 80vh;
    }

    /* carousel */
    .carousel-item {
      text-align: center;
      padding: 40px;
    }

    .carousel-item img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .carousel-caption {
      position: static;
    }

    .carousel-caption h5 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .carousel-caption p {
      font-size: 1.1rem;
      color: #666;
    }

    .row {
      padding-top: 10%;
    }

    /* Default font size */
    body {
      font-size: 16px;
      padding-top: 60px;
    }

    /* Media query for mobile devices */
    @media (max-width: 768px) {
      body {
        font-size: 14px;
        padding-top: 60px;
        /* Adjust the size as needed */
      }

      .homepage {
        background-image: url(images/about.jpg);
        background-position: center;
        background-size: cover;
        height: 50vh;
      }

      .row {
        padding-top: 5%;
      }

      .foot {
        font-size: 12px;
      }

      .word {
        margin-top: 8px;
      }

    }
  </style>

</head>

<body>

  <!-- Navbar Section -->
  <section>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark py-3" id="#home">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/kalulutech.jpg" width="30" height="25" class="d-inline-block align-top" alt="" loading="lazy">
          Kalulu<span style="color: forestgreen; font-weight: bold">Tech</span> Solutions
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
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

            <?php if (isset($_SESSION['user_id'])): ?>
              <!-- If the user is logged in, show username and Logout button -->
              <!-- <li class="nav-item">
                <span class="nav-link text-success">Welcome, <?php ; ?></span>
              </li> -->
              <li class="nav-item">
                <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
              </li>
            <?php else: ?>
              <!-- If the user is not logged in, show Login button -->
              <li class="nav-item">
                <a class="nav-link btn btn-success" href="login.php">Login</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </section>


  <!-- Home section -->
  <section class="homepage">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-8 col-lg-6">
          <h2>Welcome to our website</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum doloribus, numquam aut vero maiores tempore ratione consequuntur ullam consequatur fugit cupiditate aspernatur eius odit sapiente dolores corporis, nostrum sequi iusto.</p>
          <!-- <button class="btn btn-dark">Request a call Back</button> -->

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Request a call Back
          </button>

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

        </div>
      </div>
    </div>
  </section>

  <!-- Reason section -->
  <section>
    <div class="container">
      <h4 style="text-align: center;" class="py-3">Why Choose Us</h4>
      <div class="cardz">
        <div class="row py-0">
          <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <i class="bi bi-currency-dollar d-flex justify-content-center align-items-center" style="font-size: 30px;"></i>
                <h5 class="card-title d-flex justify-content-center align-items-center" style="color: forestgreen;">Affordable</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <i class="bi bi-hourglass-bottom d-flex justify-content-center align-items-center" style="font-size: 30px;"></i>
                <h5 class="card-title d-flex justify-content-center align-items-center" style="color: forestgreen;">Experience</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3  col-md-6 col-lg-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <i class="bi bi-alarm-fill d-flex justify-content-center align-items-center" style="font-size: 30px;"></i>
                <h5 class="card-title d-flex justify-content-center align-items-center" style="color: forestgreen;">Timely</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <i class="bi bi-1-circle d-flex justify-content-center align-items-center" style="font-size: 30px;"></i>
                <h5 class="card-title d-flex justify-content-center align-items-center" style="color: forestgreen;">The Best</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- About us Section -->
  <section id="about">
    <div class="container">
      <h4 style="text-align: center;" class="py-3">About Us</h4>
      <div class="row py-0 ">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <img src="images/bg-image.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 word">
          <h4 style="color: forestgreen;">Your go-to Tech solution</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt. Iure minima alias aliquid delectus quaerat! Libero corrupti maiores ipsam eius ducimus totam temporibus impedit illo error!</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <h4 style="text-align: center;" class="py-3">Our Services</h4>

      <!-- First Row -->
      <div class="row py-0 mb-4">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
          <div class="d-flex align-items-center">
            <img src="icons/icon2.png" width="75" alt="Service">
            <div class="ms-3">
              <h4 class="title"><a href="#" style="text-decoration: none; color: forestgreen;">Mobile App Development</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
          <div class="d-flex align-items-center">
            <img src="icons/icon1.png" width="75" alt="Service">
            <div class="ms-3">
              <h4 class="title"><a href="#" style="text-decoration: none; color: forestgreen;">Website Development</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Row -->
      <div class="row py-0">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
          <div class="d-flex align-items-center">
            <img src="icons/icon3.png" width="75" alt="Service">
            <div class="ms-3">
              <h4 class="title"><a href="#" style="text-decoration: none; color: forestgreen;">Software Development</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
          <div class="d-flex align-items-center">
            <img src="icons/icon4.png" width="75" alt="Service">
            <div class="ms-3">
              <h4 class="title"><a href="#" style="text-decoration: none; color: forestgreen;">IT Consultancy</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Projects section -->
  <section id="projects">
    <div class="container">
      <h4 style="text-align: center;" class="py-3">Recent Projects</h4>

      <div class="row py-0 justify-content-center mb-4">
        <div class="col-sm-12 col-md-6 mb-4">
          <div class="card">
            <img src="images/tranquil.png" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title" style="color: forestgreen;">Tranquil Hotel & Residences</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim facere modi reprehenderit sequi aut assumenda animi debitis? Atque Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum voluptatibus sapiente</p>
              <button class="btn btn-success"><a href="https://github.com/OkemaPaulMark/Tranquil-Hotel-Residences-" target="_blank" style="text-decoration: none; color:white">View on GitHub</a></button>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
          <div class="card">
            <img src="images/crown.png" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title" style="color: forestgreen;">Crown Villas</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim facere modi reprehenderit sequi aut assumenda animi debitis? Atque Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum voluptatibus sapiente</p>
              <button class="btn btn-success"><a href="https://github.com/OkemaPaulMark/CROWN-VILLAS-WEBSITE" target="_blank" style="text-decoration: none; color:white">View on GitHub</a></button>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-0 justify-content-center">
        <div class="col-sm-12 col-md-6 mb-4">
          <div class="card">
            <img src="images/mc.png" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title" style="color: forestgreen;">Mathematics Challenge System</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim facere modi reprehenderit sequi aut assumenda animi debitis? Atque Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum voluptatibus sapiente</p>
              <button class="btn btn-success"><a href="https://github.com/OkemaPaulMark/The-Mathematics-Challenge-Project" target="_blank" style="text-decoration: none; color:white">View on GitHub</a></button>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
          <div class="card">
            <img src="images/girl.png" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title" style="color: forestgreen;">Girl Tribe Cloth Brand</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim facere modi reprehenderit sequi aut assumenda animi debitis? Atque Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum voluptatibus sapiente</p>
              <button class="btn btn-success"><a href="https://github.com/OkemaPaulMark/girltribe" target="_blank" style="text-decoration: none; color:white">View on GitHub</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Blog section -->

  <section id="about">
    <div class="container">
      <h4 style="text-align: center;" class="py-3">Our Blogs</h4>
      <div class="row py-0 ">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <img src="images/blog.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 word">
          <h4 style="color: forestgreen;">Newest company in town taking over</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt. Iure minima alias aliquid delectus quaerat! Libero corrupti maiores ipsam eius ducimus totam temporibus impedit illo error!</p>
        </div>
      </div>

      <div class="row py-0 mt-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <img src="images/2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 word">
          <h4 style="color: forestgreen;">Best fruit to be eaten everyday</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt. Iure minima alias aliquid delectus quaerat! Libero corrupti maiores ipsam eius ducimus totam temporibus impedit illo error!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Feedbacks section -->
  <section>
    <div class="container mt-3" style="max-width: 900px;">
      <h4 style="text-align: center;" class="py-3">What our Customers say</h4>
      <div id="feedbackCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/portrait.jpg" alt="Person 1">
            <div class="carousel-caption">
              <h5 style="color: forestgreen;">Okema Paul Mark</h5>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis ullam voluptate ipsam illo minus nisi temporibus atque eaque dignissimos laborum modi, id in ipsum beatae necessitatibus provident quod vero repellat.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/avatar6.png" alt="Person 2">
            <div class="carousel-caption">
              <h5 style="color: forestgreen;">Ageno Adeline</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit recusandae perspiciatis voluptatem voluptatum iste? Voluptas, similique nemo explicabo, officia eius exercitationem praesentium deserunt perspiciatis est odio debitis repellat repudiandae? Praesentium.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/avatar3.png" alt="Person 3">
            <div class="carousel-caption">
              <h5 style="color: forestgreen;">Kato Joseph</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, rem nam reprehenderit minima earum animi rerum aliquam modi nisi ipsum, sunt, consequatur aperiam saepe provident? Consequuntur hic modi voluptatibus quo?</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#feedbackCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only" style="color: black;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#feedbackCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" style="color: black;">Next</span>
        </a>
      </div>
    </div>
  </section>


  <!-- Contacts section -->
  <section id="contact">
    <div class="container">
      <h4 style="text-align: center;" class="py-3">Contact Us</h4>
      <div class="row py-0">
        <!-- Contact Form -->
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
          <h5>Enter your Feedback here</h5>
          <form action="feedback.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 py-0">
              <div class="col-12">
                <input type="text" class="form-control" name="full_name" placeholder="Full names" required>
              </div>
              <div class="col-12">
                <input type="email" class="form-control" name="email" placeholder="Email address" required>
              </div>
              <!-- <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div> -->
              <div class="col-12 pb-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
            </div>
            <button class="btn btn-success mb-3">Submit</button>
          </form>
        </div>

        <!-- Links Section -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="row py-0">

            <!-- Useful Links -->
            <div class="col-lg-4 mb-4">
              <h5>Useful links</h5>
              <ul class="list-unstyled">
                <li><a style="text-decoration: none; color: forestgreen;" href="#home">Home</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#about">About Us</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#services">Services</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#projects">Recent Projects</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#contact">Contact</a></li>
              </ul>
            </div>

            <!-- Our Services -->
            <div class="col-lg-4 mb-4">
              <h5>Our Services</h5>
              <ul class="list-unstyled">
                <li><a style="text-decoration: none; color: forestgreen;" href="#services">Mobile Apps</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#services">Websites</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#services">Softwares</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#services">IT Consultancy</a></li>
              </ul>
            </div>

            <!-- Our Contacts -->
            <div class="col-lg-4 mb-4">
              <h5>Our Contacts</h5>
              <ul class="list-unstyled">
                <li><a style="text-decoration: none; color: forestgreen;" href="#">Makerere, Kikoni Street</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#">Kampala, Uganda</a></li>
                <br>
                <li><a style="text-decoration: none; color: forestgreen;" href="#"><strong>Phone:</strong> +256 762110420</a></li>
                <li><a style="text-decoration: none; color: forestgreen;" href="#"><strong>Email:</strong> paulokema342@gmail.com</a></li>
              </ul>
            </div>

          </div>

          <!-- Social Media Links -->
          <div class="pt-3">
            <h5>Follow us on social media</h5>
            <div class="d-flex align-items-center gap-4">
              <a href="#"><i class="bi bi-twitter" style="font-size: 29px; color:forestgreen"></i></a>
              <a href="#"><i class="bi bi-linkedin" style="font-size: 28px; color:forestgreen"></i></a>
              <a href="#"><i class="bi bi-instagram" style="font-size: 28px; color:forestgreen"></i></a>
              <a href="#"><i class="bi bi-github" style="font-size: 30px; color:forestgreen"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  <!-- Back to top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short" style="font-size: 30px; color: white; background-color: forestgreen; padding:3px 10px; border-radius: 5px"></i></a>


  <!-- Footer -->
  <section>
    <footer class="bg-dark text-white text-center py-3">
      <div class="container">
        <p class="mb-0 foot">2024 © Copyright <span style="font-weight: bold;">Kalulu<span style="color: forestgreen;">Tech</span>Solutions</span> All Rights Reserved</p>
      </div>
    </footer>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>