<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nomads</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display&display=swap"
    rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
  <div class="container-md">
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item ms-2">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link" href="page/paket-travel.php">Paket Travel</a>
            </li>
            <li class="nav-item ms-2 me-4">
              <a class="nav-link" href="page/testimonial.php">Testimonial</a>
            </li>
          </ul>

          <!-- for mobile -->
          <form class="d-sm-block d-md-none ms-2 mb-2" action="login-page/signin.php">
            <button class="btn btn-login py-2 px-4">Masuk</button>
          </form>

          <!-- for desktop -->
          <?php if (isset($_SESSION['email'])) {
            echo '<ul class="navbar-nav">
            <li class="nav-item dropdown">
                <div data-aos="fade-down">
                    <a class="nav-link dropdown-toggle btn btn-login btn-navbar-right py-md-2 px-md-4" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="profile/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="pesanan.php">Pesanan</a></li>
                        <li><a class="dropdown-item" href="visa.php">Visa</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login-page/logout.php">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>';
          } else {
            echo '<div class="tombol-login d-none d-md-block ms-3">
           <a href="login-page/signin.php"> <button type="submit" class="btn btn-login btn-navbar-right py-md-2 px-md-4">
               Masuk
             </button></a>
         </div>';
          } ?>

        </div>
      </div>
    </nav>
  </div>

  <header class="text-center">
    <h1>
      explore the beautiful word <br />
      as easy one click
    </h1>
    <p class="mt-3">
      You Will see beautiful <br />
      moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-5 py-2">Get Started</a>
  </header>

  <div class="container">
    <section class="section-state row justify-content-center">
      <div class="col-3 col-md-2 text-center state-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 text-center state-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 text-center state-detail">
        <h2>3K</h2>
        <p>Hotels</p>
      </div>
      <div class="col-3 col-md-2 text-center state-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>
  </div>

  <section class="section-populer">
    <div class="row">
      <div class="text-center">
        <h2>Wisata Popular</h2>
        <p class="mt-4">
          Something that you never try <br />
          before in this word
        </p>
      </div>
    </div>
  </section>
  <div class="empty"></div>
  <section class="section-populer-content" id="populerContent">
    <div class="container-md">
      <div class="section-populer-travel row justify-content-center">
        <div class="travel-a col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url(images/popular1.png)">
            <p>INDONESIA</p>
            <h4>DERATAN, BALI</h4>
            <div class="mt-auto">
              <a href="#" class="btn btn-travel px-5">View Details</a>
            </div>
          </div>
        </div>
        <div class="travel-b col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url(images/popular2.png)">
            <p>INDONESIA</p>
            <h4>BROMO, MALANG</h4>
            <div class="mt-auto">
              <a href="#" class="btn btn-travel px-5">View Details</a>
            </div>
          </div>
        </div>
        <div class="travel-c col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url(images/popular3.png)">
            <p>INDONESIA</p>
            <h4>NUSA PENIDA</h4>
            <div class="mt-auto">
              <a href="#" class="btn btn-travel px-5">View Details</a>
            </div>
          </div>
        </div>
        <div class="travel-d col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url(images/popular4.png)">
            <p>MIDDLE EAST</p>
            <h4>DUBAI</h4>
            <div class="mt-auto">
              <a href="#" class="btn btn-travel px-5">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-network" data-aos="fade-right">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h2>Our Networks</h2>
          <p>
            Companies are trusted us <br />
            more than just a trip
          </p>
        </div>
        <div class="col-md-6 text-center ms-auto">
          <img src="images/logos_partner.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <div class="container" data-aos="zoom-in">
    <section class="partners">
      <div class="row justify-content-center text-center">
        <h2>they are loving us</h2>
        <p class="mt-2">
          Moments were giving them <br />
          the best experience
        </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-9 col-md-5 col-lg-4">
          <div class="partners-card d-flex flex-column">
            <div class="text-center">
              <img src="images/member1.jpg" alt="" />
              <h6 class="name">Violeta</h6>
            </div>
            <div class="description text-center">
              <p>
                "It was glorious and I could <br />
                not stop to say wohooo for <br />
                every single moment <br />
                Dangkeeeeee"
              </p>
            </div>
            <div class="mt-auto destination text-center">
              <h6 class="location">Trip to Ubud</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-md-5 col-lg-4">
          <div class="partners-card d-flex flex-column">
            <div class="text-center">
              <img src="images/member2.jpg" alt="" />
              <h6 class="name">Indra</h6>
            </div>
            <div class="description text-center">
              <p>
                "The trip was amazing and <br />
                I saw something beautiful in <br />
                that Island that makes me <br />
                want to learn more
              </p>
            </div>
            <div class="mt-auto destination text-center">
              <h6 class="location">Trip to Nusa Penida</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-md-5 col-lg-4">
          <div class="partners-card d-flex flex-column">
            <div class="text-center">
              <img src="images/anggaphoto.png" alt="" />
              <h6 class="name">Angga</h6>
            </div>
            <div class="description text-center">
              <p>
                "I loved it when the waves was shaking harder __ I was scared
                too"
              </p>
            </div>
            <div class="mt-auto destination text-center">
              <h6 class="location">Trip to Karimun Jawa</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="partners-btn">
        <a href="#" class="btn-help px-5 py-2">i need help</a>
        <a href="#" class="btn-right-started btn-help px-5 py-2">get started</a>
      </div>
    </section>
  </div>

  <footer>
    <div class="container">
      <div class="row justify-content-center">
        <ul class="col-sm-6 col-md-3">
          <li class="footer-heading">Features</li>
          <li>Reviews</li>
          <li>Community</li>
          <li>Sosial Media Kit</li>
          <li>Affiliate</li>
        </ul>
        <ul class="col-sm-6 col-md-3">
          <li class="footer-heading">Account</li>
          <li>Refund</li>
          <li>Security</li>
          <li>Rewards</li>
        </ul>
        <ul class="col-sm-6 col-md-3">
          <li class="footer-heading">company</li>
          <li>Career</li>
          <li>Help Center</li>
          <li>Media</li>
        </ul>
        <ul class="col-sm-6 col-md-3">
          <li class="footer-heading">get connected</li>
          <li>Jakarta Selatan</li>
          <li>Indonesia</li>
          <li>0821 - 2222 - 8888</li>
          <li>support@nomads.id</li>
        </ul>
      </div>
    </div>
    <div class="row text-center creator">
      <p>2023 Copyright All right reserved Made in Jakarta Selatan</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="script/retina.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="script/script.js"></script>
</body>

</html>