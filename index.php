<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>S.P. Ladda & Associates</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon" /> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->
  <!-- bootstrap cdn link  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <!-- <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    /> -->

  <!-- roboto slab -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,500;1,700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,200;1,300;1,400;1,500;1,900&family=Roboto+Slab:wght@200&family=Roboto:ital,wght@0,100;0,900;1,100;1,900&display=swap" rel="stylesheet"> -->





  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,200;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <style>
    .icon-box:hover {
      transform: translateY(-5px);
    }

    .navbar-brand-text {
      margin-left: 10px;
    }

    .navbar-nav .nav-link {
      color: #000;
    }

    .navbar-nav .nav-link:hover {
      color: #023C6C;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      z-index: 9999;
    }

    .team .row {
      justify-content: center;
      /* Center the rows horizontally */
    }

    .team .col {
      margin: 15px;
      /* Add equal spacing around each card */
    }

    .popup-close {
      position: absolute;
      top: 5px;
      right: 5px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: red;
      color: #fff;
      font-size: 20px;
      text-align: center;
      cursor: pointer;
    }

    .whatsapp-float {
      position: fixed;
      bottom: 10%;
      right: 1%;
      z-index: 10000;
      background-color: rgb(255, 255, 255);
      border-radius: 50%;
      padding: 5px;
      /* box-shadow: 0 2px 10px rgba(0,0,0,0.3); */
    }

    .whatsapp-icon {
      width: 30px;
      height: 30px;
    }
  </style>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/download.png" alt="" class="img-fluid" /></a>

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class=" scrollto active" href="#hero">Home</a></li>
          <li><a class=" scrollto" href="#about">About us</a></li>
          <li><a class=" scrollto" href="#services">Services</a></li>
          <li><a class=" scrollto" href="#team">Team</a></li>
          <li><a class=" scrollto" href="#contact">Contact us</a></li>
          <li>
            <a class=" scrollto " href="careers.php">Careers</a>
          </li>

          <li>
            <a class=" scrollto" href="newsletter.php">Updates</a>
          </li>

          <li></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <div class="modal fade" id="disclaimerModal" tabindex="-1" aria-labelledby="disclaimerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title" id="disclaimerLabel">Disclaimer</h5>
        </div>
        <div class="modal-body">
          <p>
            The Institute of Chartered Accountants of India does not permit advertisement or solicitation by Chartered Accountants in any form or manner. By accessing this website, you acknowledge and confirm that you are seeking information relating to S.P. Ladda & Associates of your own accord and that there has been no form of solicitation, advertisement or inducement by S.P. Ladda & Associates or its members. The content of this website is for informational purposes only and should not be interpreted as soliciting or advertisement. No material/information provided on this website should be construed as legal advice. S.P. Ladda & Associates shall not be liable for consequences of any action taken by relying on the material/information provided on this website. The contents of this website are the intellectual property of S.P. Ladda & Associates.
          </p>
        </div>
        <!-- <div class="modal-footer justify-content-center"> -->
        <button type="button" class="btn btn-primary " data-bs-dismiss="modal">I Accept the Above</button>
        <!-- </div> -->
      </div>
    </div>
  </div>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/919850838461"
    class="whatsapp-float"
    target="_blank"
    aria-label="Chat on WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp Chat" class="whatsapp-icon">
  </a>


  <section style="padding-bottom: 0px">
    <div id="carouselExampleInterval" class="carousel slide py-0" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>

      <div class="carousel-inner">
        <div style="height: 480px ; " class="carousel-item active" data-bs-interval="10000">
          <img style="height: 100%; object-fit: cover; filter: brightness(0.3)" src="carosalImg/img1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mt-5 display-2 fw-bolder text-capitalize pt-3">
              S. P. Ladda & Associates
            </h1>
            <h2>
              Providing Reliable Information & Solution For Better Business
              Decision
            </h2>
            <div class="text-center">
              <a href="#about" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Get Started</a>
            </div>
          </div>
        </div>
        <div style="height: 480px" class="carousel-item" data-bs-interval="2000">
          <img style="height: 100%; object-fit: cover; filter: brightness(0.3)" src="carosalImg/img2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mt-5 display-3 fw-bolder text-capitalize pt-5">
              Expert Consulting Services
            </h1>
            <h3>Delivering Accurate and Customized Financial Solutions</h3>
            <div class="text-center">
              <a href="#about" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Explore</a>
            </div>
          </div>
        </div>
        <div style="height: 480px" class="carousel-item">
          <img style="height: 100%; object-fit: cover; filter: brightness(0.3)" src="carosalImg/img3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mt-5 display-3 fw-bolder text-capitalize pt-5">
              Work with us !
            </h1>
            <h2>Explore Oppourtunities at S. P. Ladda & Associates.</h2>
            <div class="text-center">
              <a href="careers.php" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Apply Now !</a>
            </div>
          </div>
        </div>
        <div style="height: 480px" class="carousel-item">
          <img style="height: 100%; object-fit: cover; filter: brightness(0.3)" src="carosalImg/img4.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mt-5 display-3 fw-bolder text-capitalize pt-5">
              Trusted Financial Partners for Your Growth
            </h1>
            <div class="text-center">
              <a href="#about" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Explore</a>
            </div>
            <!-- <h2>Explore Oppourtunities at S. P. Ladda & Associates.</h2> -->
            <div class="text-center">

            </div>
          </div>
        </div>
        <div style="height: 480px" class="carousel-item">
          <img style="height: 100%; object-fit: cover; filter: brightness(0.6)" src="carosalImg/slide5.webp" class="d-block w-100" alt="..." />
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mt-5 display-3 fw-bolder text-capitalize pt-5">
              Simplifying Compliance, Empowering Business
            </h1>
            <div class="text-center">
              <a href="#about" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Explore</a>
            </div>
            <!-- <h2>Explore Oppourtunities at S. P. Ladda & Associates.</h2> -->
            <div class="text-center">

            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>



  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>~ Services ~</h2>
        <h6>
          We offer a comprehensive range of services backed by vast experience and a team of qualified professionals, delivering reliable and value-driven solutions to our clients.
        </h6>
      </div>

      <div class="row">
        <a href="serviceDetail.php">
          <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box " style="border: solid black 1px;">
              <img src="servicesIcon/search.png" alt="" />
              <h4><a href="serviceDetail.php">Assurance and Audit</a></h4>
              <h6>
                <a style="color: #444444;" href="serviceDetail.php">Building trust through independent evaluation.

                  To guarantee openness, compliance, and operational effectiveness, we offer statutory audits, internal audits, tax audits, Bank Audits, Concurrent Audits and special purpose audits.
                </a>
              </h6>
            </div>
          </div>
        </a>

        <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box " style="border: solid black 1px;">
            <img src="servicesIcon/taxation.png" alt="" />
            <h4><a href="serviceDetail.php">Direct Taxation</a></h4>
            <h6><a style="color: #444444;" href="serviceDetail.php">Ensure full compliance while optimizing your tax position.

                For both individuals and enterprises, we provide full-service income tax planning, filing, representation before tax authorities, TDS compliance, and strategic tax structuring advising.
              </a>

            </h6>
          </div>
        </div>

        <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box " style="border: solid black 1px;">
            <img src="servicesIcon/taxation (1).png" alt="" />
            <h4><a href="serviceDetail.php">Indirect Taxation</a></h4>
            <h6> <a style="color: #444444;" href="serviceDetail.php"> Stay ahead with expert GST and other indirect tax solutions.

                Input credit management, GST registration, filing, audits, compliance checks, and support for departmental evaluations and litigation are all handled by our staff.

              </a>

            </h6>
          </div>
        </div>

      </div>
      <div class="row pt-2">
        <a href="serviceDetail.php">
          <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box " style="border: solid black 1px;">
              <img src="servicesIcon/talk.png" alt="" />
              <h4><a href="serviceDetail.php">Accounting and Management Consulting</a></h4>
              <h6>
                <a style="color: #444444;" href="serviceDetail.php">Empowering your decisions with financial clarity.

                  We assist companies in making data-driven decisions and effectively managing their resources, from forecasting and budgeting to MIS reporting and internal controls.

                </a>
              </h6>
            </div>
          </div>
        </a>

        <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box " style="border: solid black 1px;">
            <img src="servicesIcon/public-service.png" alt="" />
            <h4><a href="serviceDetail.php">Business Support Services</a></h4>
            <h6><a style="color: #444444;" href="serviceDetail.php">Streamlined back-office solutions for growing businesses.

                For seamless operations, we help with business creation, payroll processing, ROC compliance, secretarial support, strategy planning, Project financing and end-to-end financial paperwork.

              </a>

            </h6>
          </div>
        </div>

        <div style="cursor: pointer" class="col-lg-4 col-md-6 d-flex pt-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box " style="border: solid black 1px;">
            <img src="servicesIcon/consultant.png" alt="" />
            <h4><a href="serviceDetail.php">Advisory Services</a></h4>
            <h6> <a style="color: #444444;" href="serviceDetail.php">Strategic insights that guide smarter business decisions.

                We offer professional advice on due diligence, mergers and acquisitions, demergers, business valuation, and fund management for startups, ensuring informed decisions and adherence to regulations at every stage.


              </a>

            </h6>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- new industries  -->

  <section id="clients" class="text-center">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        <h2>~ Industries We Serve ~</h2>
        <h6>
          We possess a wealth of industry experience and have effectively guided various sectors towards accomplishing their objectives.
        </h6>
      </div>
      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container d-flex flex-wrap justify-content-center">
              <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/banking.jpg" class="card-img-top " style=" object-fit: contain" alt="Bank, NBFC and Financial Institutions" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">
                    Bank, NBFC and Financial Institutions
                  </h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-md-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/ITT.jpeg" class="card-img-top " style=" object-fit: contain" alt="IT Sector" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">IT and Software Industry</h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-lg-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/infra1653295242.jpeg" class="card-img-top " style=" object-fit: contain" alt="Infrastructure and real estate" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Infrastructure and real estate</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper container d-flex flex-wrap justify-content-center">
              <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class="p-0">
                  <img src="expIcons/FMCG.jpg" class="card-img-top " style=" object-fit: contain" alt="IT and software industry" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Fast-moving Consumer Goods (FMCG)</h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-md-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/doctor.jpg" class="card-img-top " style=" object-fit: contain" alt="Health Care" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Health Care</h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-lg-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/MNC.jpg" class="card-img-top " style=" object-fit: contain" alt="Multinational Companies" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Multinational Companies</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper container d-flex flex-wrap justify-content-center">
              <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class="p-0">
                  <img src="expIcons/manufacture.jpeg" class="card-img-top " style=" object-fit: contain" alt="IT and software industry" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Manufacturing - Engineering, OEMs, chemicals</h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-md-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/hsocieties.jpeg" class="card-img-top " style=" object-fit: contain" alt="Health Care" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Housing Societies </h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-lg-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/education.jpeg" class="card-img-top " style=" object-fit: contain" alt="Multinational Companies" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Educational Sector </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper container d-flex flex-wrap justify-content-center">
              <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class="p-0">
                  <img src="expIcons/charity.webp" class="card-img-top " style=" object-fit: contain" alt="IT and software industry" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Charitable Trusts</h5>
                </div>
              </div>
              <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-md-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/hospitaliy.jpeg" class="card-img-top " style=" object-fit: contain" alt="Health Care" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">Hospitality </h5>
                </div>
              </div>
              <!-- <div class="card col-md-4 col-lg-3 col-sm-12 d-none d-lg-block mx-4 border-2 " style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2)">
                <div class=" p-0">
                  <img src="expIcons/MNC.jpg" class="card-img-top " style=" object-fit: contain" alt="Multinational Companies" />
                </div>
                <div class="card-footer bg-white">
                  <h5 class="card-title">add one more</h5>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </section>

  <!-- reach out method  -->

  <section id="cta" class="cta my-0">
    <div class="container" data-aos="zoom-in">
      <div class="text-center">
        <h3>Reach Out Now !</h3>
        <p>
          Lets Do Whats Best for You with Our experience and Your Vision,
          Lets Make it Big !
        </p>
        <a class="cta-btn" href="#contact">Contact Now</a>
      </div>
    </div>
  </section>
  <div class="mb-1"></div>
  <!-- End Testimonials Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about pt-5  pb-2">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Who We Are</h2>
          <h6>Get to know the passionate individuals behind S P Ladda & Associates and our shared vision.</h6>
        </div>

        <section id="about-video" class="about-video container-fluid">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-6 align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/team_home.jpg" style="height: max-content;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                <p class="h6 px-2" style="line-height: 1.5rem;">
                  <span class="fw-bold h5 " style="color: #023C6C;">S. P. Ladda and Associates</span> is a well-established Chartered Accountancy firm based in Pune. Since our inception in 2010, we have built a strong reputation for delivering reliable, high-quality professional services across various sectors.
                  Over the years, we have expanded our presence with two additional branches one in Mumbai and another in Baner, Pune to better serve our growing clientele.
                  <br>
                  <u>Our comprehensive range of services includes:</u>
                  <br>
                  <b style="color:#023C6C ;">Audit & Assurance, Direct and Indirect Taxation, Consulting, Business Support Services, Advisory services and Management & Accounting consultancy.</b>.
                  <br>
                  What sets us apart is our dedicated team of experienced professionals. With deep technical expertise and a client-centric approach, we provide insightful, practical solutions that help businesses stay compliant, make informed decisions, and achieve sustainable growth.

                </p>



                <a href="aboutDetail.php" class="btn-learn-more buttonFinal  mx-2">Learn More <span class="fw-bold" style="height: 15px;">&#x2192;</span></a>


              </div>

            </div>
          </div>
        </section>
      </div>
    </section>

    <!-- End qweqeqwe Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>~ Our Team ~</h2>
        </div>

        <div class="row">
          <!-- First Row -->


          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <a href="sameerLadda.php"><img src="assets/img/testimonials/CASameer.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CA Sameer Ladda</h4>
                <span>Founder Partner</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <a href="vishalRathee.php"><img src="assets/img/testimonials/CARathee.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CA Vishal Rathi</h4>
                <span>Partner</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <a href="suchitrawarudkar.php"><img src="assets/img/testimonials/CAsuchitranew.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CA Suchitra Warudkar</h4>
                <span>Partner</span>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <!-- Second Row -->
          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <a href="shravanLadda.php"><img src="assets/img/testimonials/CAShravan.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CA Shravan Ladda</h4>
                <span>Partner</span>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <a href="kiranshah.php"><img src="assets/img/testimonials/caKiran.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CA Kiran Shah</h4>
                <span>Partner</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <a href="kalpaLadda.php"><img src="assets/img/testimonials/CSKalpa.jpg" class="img-fluid" alt="" /></a>
                <div class="social">
                  <a><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CS Kalpa Ladda</h4>
                <span>Company Secretary</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact us</h2>
          <p></p>
        </div>

        <div>

          <iframe style="border: 0; width: 100%; height: 270px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.2650226467517!2d73.8722898740985!3d18.471650870668874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c01eb7f45545%3A0xccdc8a58d49e6f73!2sS.P.%20Ladda%20%26%20Associates!5e0!3m2!1sen!2sin!4v1688147997602!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>104-105 Ganga Collidium</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>caladdaclient@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>020-24244200</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form id="form_id" method="post">
              <div class="row gy-2 gx-md-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control name" id="name" placeholder="Your Name" required style="border-radius: 0px;" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control email" name="email" id="email" placeholder="Your Email" required style="border-radius: 0px;" />
                </div>
                <div class="form-group col-12">
                  <input type="text" class="form-control subject" name="subject" id="subject" placeholder="Subject" required style="border-radius: 0px;" />
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control message" name="msg" rows="5" id="msg" placeholder="Message" required style="border-radius: 0px;"></textarea>
                </div>

                <div class="text-center col-12 mt-3">
                  <!-- <button type="submit" name="sendmsg">Send Message</button> -->
                  <button type="submit" class="btn btn-primary" style="border-radius: 0px;" name="sendmsg">Send Message</button>
                  <!-- <input type="submit" class="btn btn-primary" name="sendmsg" value="Subscribe" /> -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>S.P. Ladda & Associates</h3>
            <p>
            <div style=" border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; max-width: 65px; padding:5px" class=" bg-primary text-white mb-3">
              <strong>Primary</strong>
            </div>
            104-105 Ganga Collidium<br />
            Opp. Gangadham Towers, Chowk, Ganga Dham, Pune, Maharashtra 411037 <br /><br />

            </p>

            <h5>Other Locations</h5>
            <p>

              <strong>Baner Office:</strong><br />
              Row House no.7, Samruddhi Row Houses,<br />
              Kalamkar Park Road, Opp Park Marina Society,<br />
              Balewadi Phata, Baner, Pune, 411045, IN<br />
              <a href="https://www.google.com/maps?q=18.5640253,73.7844823" target="_blank">Get directions</a><br /><br />

              <strong>Mumbai Office:</strong><br />
              C/o Mrs. Aarti Vishal Rathi, Gala No.230,<br />
              Blue Rose Industrial Estate, Near Metro Mall,<br />
              Borivali East, Mumbai, 400006, IN<br />
              <a href="https://www.google.com/maps?q=Blue+Rose+Industrial+Estate,+Borivali+East,+Mumbai+400006" target="_blank">Get directions</a>
            </p>

          </div>

          <!-- Remaining footer columns unchanged -->
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.gst.gov.in/">Goods and Services Tax (GST)</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.incometax.gov.in/iec/foportal/">Income Tax</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.mca.gov.in/content/mca/global/en/home.html">Ministry of Corporate Affairs</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.cbic.gov.in/">Central Board Of Indirect Taxes & Customs (CBIC)</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://ipindia.gov.in/">Intellectual Property Rights (IPR)</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://mahasahakar.maharashtra.gov.in/">Maharashtra Co-operative Department</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://maharerait.mahaonline.gov.in/searchlist/search?MenuID=1069">Maha-RERA</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Assurance and Audit</li>
              <li><i class="bx bx-chevron-right"></i>Direct Taxation</li>
              <li><i class="bx bx-chevron-right"></i>Indirect Taxation</li>
              <li><i class="bx bx-chevron-right"></i>Accounting and Management Consultings</li>
              <li><i class="bx bx-chevron-right"></i>Business Support Services</li>
              <li><i class="bx bx-chevron-right"></i>Advisory Services</li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Get Amazed By our weekly Newsletter, get Updated About the Stuff</p>
            <form method="post">
              <input type="email" placeholder="Enter Your Email address" name="email" />
              <input type="submit" name="subscribe" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; <script>
            document.write(new Date().getFullYear());
          </script>
          <strong><span>S.P. Ladda & Associates</span></strong>. All Rights Reserved.
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">

        <a target="_blank" href="https://in.linkedin.com/company/s-p-ladda-associates-co" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
    window.addEventListener("load", function() {
      // Check screen width
      // if (window.innerWidth > 600) {
      // Show modal after short delay
      setTimeout(() => {
        const modal = new bootstrap.Modal(document.getElementById('disclaimerModal'), {
          backdrop: 'static', // prevent click outside to close
          keyboard: false // disable ESC key
        });
        modal.show();
      }, 1000); // Delay (in ms)
      // }
    });
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    // const form = document.getElementById('.contact_form');

    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
    //sp.ladda.website@gmail.com
    // function send email
    function sendEmail() {
      const F_name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const subject = document.getElementById("subject").value;
      const message = document.getElementById("msg").value;
      var frm = document.getElementsByName("contact-form")[0];
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "sp.ladda.website@gmail.com",
        Password: "F37D6F5DAFA0B341B50D758A60D8785593F2",
        To: "partners.spl@gmail.com",
        From: "sp.ladda.website@gmail.com",
        Subject: "Mail From Website",
        Body: "Name: " +
          F_name +
          "<br/> User Email: " +
          email +
          "<br/> Subject: " +
          subject +
          "<br/> Message: " +
          message +
          "<br/>",
      }).then((message) => alert("Message Sent !"));
      frm.reset(); // Reset all form data
      return false; // Prevent page refresh
    }
  </script>
  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';
  $mail = new PHPMailer(true);

  if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];

    try {
      $tosend = 'sp.ladda.website@gmail.com';
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'sp.ladda.website@gmail.com';
      $mail->Password = 'ndlwhahltqulvcjt';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // FROM Mail
      $mail->setFrom($email);
      $mail->addAddress($tosend);
      $mail->isHTML(true);
      $mail->Subject = "New Subscribed User - " . $email;
      $mail->Body = $email;

      $mail->send();

      echo '
            <script>
                window.location.href = "careers.php";
            </script>
            ';

      echo '
            <script>
                alert("Mail Sent Successfully");
                window.location.href = "index.php";
            </script>
            ';
    } catch (Exception $e) {
      echo '
            <script>
                // Message could not be sent. Mailer Error: {$mail->ErrorInfo}
                alert("Mail could not be sent. Please try again later.");
                window.location.href = "index.php";
            </script>
            ';
    }
  }







  if (isset($_POST['sendmsg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    try {
      $tosend = 'sp.ladda.website@gmail.com';
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'sp.ladda.website@gmail.com';
      $mail->Password = 'ndlwhahltqulvcjt';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // FROM Mail
      $mail->setFrom($email);
      $mail->addAddress($tosend);
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = $mail->Body = 'Hello, I am ' . $name . ',<br><br>' . $msg;

      $mail->send();

      echo '
            <script>
                alert("Mail Sent Successfully");
                window.location.href = "index.php";
            </script>
            ';
    } catch (Exception $e) {
      echo '
            <script>
                // Message could not be sent. Mailer Error: {$mail->ErrorInfo}
                alert("Mail could not be sent. Please try again later.");
                window.location.href = "index.php";
            </script>
            ';
    }
  }
  ?>

</body>


</html>