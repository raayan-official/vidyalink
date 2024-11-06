<?php
include "./php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VidyaLink</title>
  <?php

  include "./others/header.php";


  ?>
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>

  <!------ nav start ------>
  <header class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-5 py-lg-5" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand px-4" href="#"><i class="fa-sharp fa-solid fa-graduation-cap text-light"> Vidya-Link</i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-4" aria-current="page" href="index.php" id="home">Home<i class="fa-sharp fa-light fa-house px-1" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#about">About<i class="fa-sharp fa-light fa-address-card px-1" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#">Services<i class="fa-light fa-truck-arrow-right px-1" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#contact">Contact<i class="fa-sharp fa-light fa-address-book px-1" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item right">
            <a class="nav-link px-4" href="./php/login.php">Login<i class="fa-sharp fa-light fa-user px-1" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item right">
            <a class="nav-link px-4" href="./php/signup.php">Sign-Up<i class="fa-sharp fa-light fa-right-to-bracket px-1" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <!------ nav end ------>


  <!------ hero section start ------>
  <section class="bg-main bg-color hero-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
          <h1 class="fw-bolder text-uppercase">WELCOME TO<br>Vidya-Link</h1>
          <p class="mt-3 mb-5 para-width text-light">‘Vidya link’ symbolizes the fusion of traditional learning with digital connectivity. Derived from the Sanskrit word ‘vidya,’ meaning knowledge, it highlights technology’s role in global education. This term reflects a shift towards inclusive learning environments, using digital platforms to democratize access to educational resources worldwide.</p>

          <div class="text-center w-100 text-md-start">
            <button class="btn btn-primary text-uppercase" data-bs-toggle="tooltip" data-bs-title="Contact Us">
              <a href="#contact" class="text-decoration-none text-light">Contact Us</a>
            </button>
          </div>
        </div>

        <!-- Hero section image -->
        <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
          <div class="text-center text-lg-end text-md-start">
            <video width="100%" height="100%" loop muted autoplay class="hero-video rounded" alt="Hero Video">
              <source src="./video/video1.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom shape divider -->
    <div class="custom-shape-divider-bottom-1715751167">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>



  <!--------services section----------->
  <section class="services-section" id="about">
    <div class="container text-center">
      <h2 class="section-title ">Explore Our Services
      </h2>
      <hr class="divider">
    </div>

    <div class="container mt-5">
      <div class="row justify-content-center">

        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="./images/services5.gif" class="card-img-top rounded" alt="Service 1">
            <div class="card-body">
              <h5 class="card-title">Academic Services

              </h5>
              <p class="card-text">Our college offers diverse undergraduate, graduate, certificate, and online programs, emphasizing theory and practical application for comprehensive student success.</p>
              <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="./images/service.gif" class="card-img-top rounded" alt="Service 2">
            <div class="card-body">
              <h5 class="card-title">Student Services

              </h5>
              <p class="card-text">Our institution provides extensive student services, including academic advising, career counseling, tutoring, health and wellness programs, and disability support initiatives.</p>
              <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card service-card">
            <img src="./images/service2.gif" class="card-img-top rounded" alt="Service 3">
            <div class="card-body">
              <h5 class="card-title">Technology Services

              </h5>
              <p class="card-text">Our institution delivers robust technology services, encompassing IT support, state-of-the-art computer labs, online learning platforms, and comprehensive software and hardware solutions.</p>
              <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!------- services section end--------->

  <section class="more-info-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-6 image-section mb-4 mb-lg-0">
          <figure>
            <img src="./images/communication.gif" alt="Main Image" class="img-fluid rounded mid-img">
          </figure>
        </div>

        <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
          <h1 class="fw-bolder text-uppercase text-light">Our Commitment to Trust and Integrity</h1>
          <p class="mt-3 mb-5 para-width text-light">
            Encapsulates our unwavering dedication to transparency, reliability, and ethical practices. Upholding these values ensures that every interaction, decision, and service delivery reflects our commitment to fostering strong, trustworthy relationships with our customers, partners, and stakeholders, maintaining integrity at every level of our operations.
          </p>
          <div class="text-center w-100 text-md-start">
            <a href="#contact" class="btn btn-primary text-uppercase text-decoration-none text-light" data-bs-toggle="tooltip" data-bs-title="Contact Us">
              Contact Us
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section business-section mb-5 pt-5" id="online-section">
    <div class="container text-center">
      <h2 class="section-title">Generating Innovative Ideas Through<br> Online Platforms</h2>
      <hr class="divider">
    </div>

    <div class="container">
      <div class="row g-5">
        <!-- Card 1 -->
        <div class="col-12 col-md-12 col-lg-6 shadow">
          <div class="d-flex px-3 py-5">
            <img src="./images/social.gif" alt="Social Media Advertising" class="d-md-block d-none img-fluid mx-3 rounded" width="200px">
            <div class="row">
              <p class="mb-2 fw-bolder">Social Media Advertising</p>
              <p>
                Harness the power of social media platforms to reach a wider audience and drive sales.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-12 col-lg-6 shadow">
          <div class="d-flex px-3 py-5">
            <img src="./images/email.gif" alt="Email Marketing" class="d-md-block d-none img-fluid mx-3 rounded" width="200px">
            <div class="row">
              <p class="mb-2 fw-bolder">Email Marketing</p>
              <p>
                Develop effective email campaigns to engage customers and boost conversions.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-12 col-lg-6 shadow">
          <div class="d-flex px-3 py-5">
            <img src="./images/content.gif" alt="Content Marketing" class="d-md-block d-none img-fluid mx-3 rounded" width="200px">
            <div class="row">
              <p class="mb-2 fw-bolder">Content Marketing</p>
              <p>
                Create valuable content to attract and retain a clearly defined audience.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-md-12 col-lg-6 shadow">
          <div class="d-flex px-3 py-5">
            <img src="./images/seo.gif" alt="Search Engine Optimization" class="d-md-block d-none img-fluid mx-3 rounded" width="200px">
            <div class="row">
              <p class="mb-2 fw-bolder">Search Engine Optimization</p>
              <p>
                Improve your website's visibility on search engines to attract more visitors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="common-section mb-5 pt-5 bg-main">
    <div class="container text-center">
      <h2 class="section-title text-light">Student Feedback &<br> Testimonials</h2>
      <hr class="divider">
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="container px-5">
            <div class="row">
              <!-- Review 1 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student3.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">
                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Raayan</h5>
                      <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 2 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student2.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">
                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Aria</h5>
                      <p class="card-text text-center">Another example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 3 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">
                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Mila</h5>
                      <p class="card-text text-center">Different example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="container px-5">
            <div class="row">
              <!-- Review 4 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student4.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">
                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Liam</h5>
                      <p class="card-text text-center">More example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 5 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student6.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">

                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Noah</h5>
                      <p class="card-text text-center">Example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 6 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student7.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">

                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Emma</h5>
                      <p class="card-text text-center">Text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="container px-5">
            <div class="row">
              <!-- Review 7 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student11.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">

                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Olivia</h5>
                      <p class="card-text text-center">Some example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 8 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student10.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">

                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Sophia</h5>
                      <p class="card-text text-center">Sample text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Review 9 -->
              <div class="col-12 col-lg-4 carousel-review">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/student9.webp" class="card-img-top rounded img-fluid p-2" alt="Client Image" style="height: 250px; object-fit: cover; object-position: top 20% left 20%;">

                    <div class="card-body">
                      <h5 class="card-title mb-3 text-center fw-bold">Lucas</h5>
                      <p class="card-text text-center">Another text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="mt-3 text-center" id="star">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                        <i class="fa-sharp fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>



  <section class="common-section business-section mb-5 pt-5" id="online-section">
    <div class="container text-center">
      <h2 class="section-title">Our Courses</h2>
      <hr class="divider">
    </div>

    <div class="container">
      <div class="row d-flex justify-content-around g-5">
        <!-- Course 1 -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card p-2" style="width: 18rem;">
            <img src="./images/webdev.jpeg" class="card-img-top rounded" alt="Course Image">
            <div class="d-flex justify-content-between mt-3">
              <p class="small text-secondary px-3">
                <i class="fa-solid fa-book-open-reader"> : 5000</i>
              </p>
              <p class="small text-secondary px-3">March 23, 2021</p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text mt-2 mb-2">Learn the fundamentals of web development with hands-on projects.</p>
              <div class="btn d-flex justify-content-center">
                <a href="#" class="btn btn-secondary">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Course 2 -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card p-2" style="width: 18rem;">
            <img src="./images/data .jpeg" class="card-img-top rounded" alt="Course Image">
            <div class="d-flex justify-content-between mt-3">
              <p class="small text-secondary px-3">
                <i class="fa-solid fa-book-open-reader"> : 4500</i>
              </p>
              <p class="small text-secondary px-3">April 10, 2021</p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Data Science</h5>
              <p class="card-text mt-2 mb-2">Dive into data analysis and machine learning with our expert-led course.</p>
              <div class="btn d-flex justify-content-center">
                <a href="#" class="btn btn-secondary">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Course 3 -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card p-2" style="width: 18rem;">
            <img src="./images/cyber.jpeg" class="card-img-top rounded" alt="Course Image">
            <div class="d-flex justify-content-between mt-3">
              <p class="small text-secondary px-3">
                <i class="fa-solid fa-book-open-reader"> : 6000</i>
              </p>
              <p class="small text-secondary px-3">May 15, 2021</p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Cybersecurity</h5>
              <p class="card-text mt-2 mb-2">Protect systems and networks from digital attacks in our cybersecurity course.</p>
              <div class="btn d-flex justify-content-center">
                <a href="#" class="btn btn-secondary">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Course 4 -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card p-2" style="width: 18rem;">
            <img src="./images/graph.jpeg" class="card-img-top rounded" alt="Course Image">
            <div class="d-flex justify-content-between mt-3">
              <p class="small text-secondary px-3">
                <i class="fa-solid fa-book-open-reader"> : 5500</i>
              </p>
              <p class="small text-secondary px-3">June 20, 2021</p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Graphic Design</h5>
              <p class="card-text mt-2 mb-2">Explore creative design techniques in our comprehensive graphic design course.</p>
              <div class="btn d-flex justify-content-center">
                <a href="#" class="btn btn-secondary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!------- Contact Us-------->


  <section class="contact-section" id="contact">
    <div class="container text-center">
      <h2 class="section-title p-3 text-light">Contact Us</h2>
      <hr class="divider">
    </div>

    <div class="contact-section">
      <div class="mx-auto form-section">
        <form>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="exampleFormUserFirstName" class="form-label text-light">First Name</label>
                <input type="text" class="form-control" id="exampleFormUserFirstName" aria-describedby="firstNameHelp" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label for="exampleFormUserLastName" class="form-label text-light">Last Name</label>
                <input type="text" class="form-control" id="exampleFormUserLastName" aria-describedby="lastNameHelp" placeholder="Last Name">
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
          </div>

          <div class="mb-3">
            <label for="floatingTextarea2" class="form-label text-light">Message</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          </div>

          <div class="pb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary m-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-----footer section ---------->
  <footer class="footer" style="background-color: #171a1d; color: #fff; padding: 50px 0;">
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

  include "./others/footer.php";
  ?>
  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  </script>
</body>

</html>