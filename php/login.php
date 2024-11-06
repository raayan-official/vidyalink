
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student-Login</title>
  <?php
  include "../others/header.php";
  ?>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>

  <!-- nav bar-->
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
              <a class="nav-link px-4 active" href="login.php">Login<i class="fa-light fa-user px-1"></i></a>
            </li>
          <li class="nav-item right">
              <a class="nav-link px-4 " href="signup.php">Sign-Up<i class="fa-light fa-right-to-bracket px-1"></i></a>
            </li>
          
        </ul>

      </div>
    </div>
  </nav>
  <!---- --->
  <div class="container d-flex justify-content-center align-items-center mt-5 ml-5">
  <div class="box2 mb-5 " style="margin-left: 250px">
    <div class="login">
    <?php
    session_start();
    if (isset($_SESSION['err'])) {
        echo "<p class='text-center text-danger'>" . $_SESSION['err'] . "</p>";
        unset($_SESSION['err']);
    }
    ?>
      <h1>Login</h1>
      <form action="authenticate.php" method="post">

        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Password" required />
        <p><a href="forget.php">Forget Password?</a></p>
        <input type="submit" name="submit" value="Login" />
        <p class="text-center signup"><a href="signup.php" >Sign Up</a></p>
      </form>
    
    </div>
  </div>
  </div>

  <footer class="footer" style="background-color: #171a1d; color: #fff; margin-top: 50px; padding: 50px 0;">
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
</body>
</html>
