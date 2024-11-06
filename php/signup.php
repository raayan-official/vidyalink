<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VidyaLink-registration</title>
  <?php
  include "../others/header.php";
  ?>
  <link rel="stylesheet" href="../css/signup.css">
  <link rel="stylesheet" href="../css/update.css">
</head>

<body>

  <!---nav bar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand px-4" href="#"><i class="fa-sharp fa-solid fa-graduation-cap text-light"> Vidya-Link</i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-4" aria-current="page" href="../index.php" id="home">Home<i class="fa-sharp fa-light fa-house px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="">About<i class="fa-sharp fa-light fa-address-card px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#">Services<i class="fa-light fa-truck-arrow-right px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#">Contact<i class="fa-sharp fa-light fa-address-book px-1"></i></a>
          </li>
          <li class="nav-item right">
            <a class="nav-link px-4 " href="login.php">Login<i class="fa-light fa-user px-1"></i></a>
          </li>
          <li class="nav-item right">
            <a class="nav-link px-4 active" href="signup.php">Sign-Up<i class="fa-light fa-right-to-bracket px-1"></i></a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!--- end of nav bar -->
  <div class="container w-50 mt-5 mb-5">
    <div class="row">
      <div class="col">
        <form action="./signupDb.php" method="post" class="form " enctype="multipart/form-data">
          <h3 class="text-center pt-4">
            Student Registration
          </h3>
          <?php
          session_start();
          if (isset($_SESSION['err'])) {
            echo "<p class='text-center text-danger'>" . $_SESSION['err'] . "</p>";
            unset($_SESSION['err']);
          }
          ?>


          <div class="mb-3 box">
            <label for="name" class="form-label my-2">Enter Your Name:</label>
            <i class="fa-light fa-user"></i>
            <input type="text" class="form-control form" id="name" placeholder="Name" name="name" />
          </div>

          <div class="mb-3 box">
            <label for="username" class="form-label my-2">Enter Your Usernameame:</label>
            <i class="fa-light fa-circle-user"></i>
            <input type="text" class="form-control form" id="username" placeholder="Username" name="username" />
          </div>

          <div class="mb-3 box">
            <label for="email" class="form-label my-2">Enter Your Email Address:</label>
            <i class="fa-light fa-envelope"></i>
            <input type="email" class="form-control form" id="email" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email" />
          </div>

          <div class="mb-3 box">
            <label for="phone" class="form-label my-2">Phone Number:</label>
            <i class="fa-light fa-phone"></i>
            <input type="text" class="form-control form" id="phone" placeholder="1234567890" name="phone" />
          </div>

          <div class="mb-3 box">
            <label for="dob" class="form-label my-2">Date Of Birth:</label>
            <i class="fa-light fa-calendar-days"></i>
            <input type="date" class="form-control form" id="dob" name="dob" />
          </div>

          <div class="mb-3 box">
            <label for="city" class="form-label my-2">Enter Your City:</label>
            <i class="fa-light fa-tree-city"></i>
            <input type="text" class="form-control form" id="city" placeholder="City" name="city" />
          </div>



          <div class="mb-3 box">
            <label for="password" class="form-label my-2">Password</label>
            <i class="fa-light fa-lock" id="btn"></i>
            <input type="password" class="form-control form" id="password" name="password" />
          </div>

          <div class="box box d-flex justify-content-center">
            <div class="picture mb-3">
              <img id="pic" class="img-thumbnail" src="../images/noimage.jpg" alt="Selected Image">

            </div>
          </div>

          <div class="mb-3 box d-flex justify-content-center">
            <label for="image" class="form-label m-2 custom-file-upload text-light">Choose File</label>
            <input type="file" class="form-control custom-file-upload" id="image" name="image" capture="user" />

            <input type="submit" class="btn btn-primary m-2" name="submit" value="Submit">
          </div>




        </form>
      </div>
    </div>
  </div>
  <footer class="footer" style="background-color: #171a1d; color: #fff;">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col">
          <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Company</h4>
          <ul class="footer-links" style="list-style: none; padding-left: 0;">
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">About Us</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Our Services</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Privacy Policy</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Affiliate Program</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Others</a></li>
          </ul>
        </div>

        <div class="col">
          <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Get Help!</h4>
          <ul class="footer-links" style="list-style: none; padding-left: 0;">
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">FAQ</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Shipping</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Returns</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Order Status</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Payment</a></li>
          </ul>
        </div>

        <div class="col">
          <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Online</h4>
          <ul class="footer-links" style="list-style: none; padding-left: 0;">
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Python</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">JavaScript</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Java</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">C++</a></li>
            <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Php</a></li>
          </ul>
        </div>

        <div class="col">
          <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Follow Us</h4>
          <div class="social-links" style="display: flex; gap: 10px;">
            <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-facebook px-2 mt-2"></i></a>
            <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-x-twitter px-2 mt-2"></i></a>
            <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-instagram px-2 mt-2"></i></a>
            <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-linkedin px-2 mt-2"></i></a>
            <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-github px-2 mt-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php

  include "../others/footer.php";

  ?>
  <script src="../js/script.js"></script>
</body>

</html>