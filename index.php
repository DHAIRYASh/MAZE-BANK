<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>MAZE Bank</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');

  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
</style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <img src="logo.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" index.php ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"> Services</a>
          </li>

        </ul>


      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Home -->
  <section class="topContent">

    <div class="mainHeading">
      <div>
        <span class="main-content">WELCOME To MAZE BANK</span>
      </div>
      <div style="margin-top: 12px;">
        <span class="sub-content">Making your banking experience simply the Best.</span>
      </div>
      <a href="#services" class="btn btn-outline-primary mt-3">Get Started</a>
    </div>

    <div class="topContentImg">
      <img src="blue.png" alt="Banking" >
    </div>
  </section>
  <!-- End Home -->

  <!-- About -->
  <section id="about" class="container">
    <h2 class="heading">About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:530px;" height="500px" text-align="centre" ; src="capture.png" alt="MAZE Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text">MAZE Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content">It is a Basic Banking System for making transactions between users.
              It can transfer Money between multiple accounts,view all Customer's data and view all the past
              transactions happened between different accounts.<br />
            
            </span>
          </div>
          <a href="#services" class="btn btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Services -->
  <section class="container" id="services">
    <h2 class="heading">Our Services</h2>

    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="cust.jpeg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Customers</h5>
            <p class="card-text">View all Customer's data with balance</p>
            <a href="transfermoney.php" class="btn btn-primary">View Customers</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="transfer.jpeg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Transactions</h5>
            <p class="card-text">View all the past transactions happened between accounts</p>
            <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="mony.jpeg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Services -->



  <footer id="footer" class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4" >
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/thesparksfoundation.info" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>



          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://thesparksfoundationsingapore.org/" role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/thesparksfoundation.info/" role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/the-sparks-foundation/" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>

          <!-- Github -->

        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example2" class="form-control" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
             Sign up above to hear from us sbout latest interest rates and benefits in our bank.
          </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->

        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" >Developed by Dhairya Shah</a>
      </div>
      <!-- Copyright -->
    </footer>
  <!-- End Footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
