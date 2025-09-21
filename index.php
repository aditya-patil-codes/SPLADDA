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


  <!-- Bootstrap 5.3 CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />


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
    #services {
      padding: 60px 20px;
    }

    /* Minor polish */
    .section-title h2 {
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .industry-card {
      border: 1px solid rgba(0, 0, 0, 0.08);
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
      border-radius: 1rem;
      overflow: hidden;
      transform: scale(0.9);
      /* reduces overall size */
      margin: auto;
      /* centers card */
    }

    .industry-card img {
      width: 100%;
      height: 180px;
      /* keep cards consistent */
      object-fit: cover;
      /* fill nicely */
    }

    .industry-card .card-footer {
      background: #fff;
      border-top: 0;
    }

    /* 2. Move arrows more outward */
    .carousel-control-prev,
    .carousel-control-next {
      width: 6%;
      /* shrink hitbox */
    }

    /* Default for small devices */
    .carousel-control-prev {
      left: -10px;
    }

    .carousel-control-next {
      right: -10px;
    }

    /* For medium (≥768px) and larger devices */
    @media (min-width: 768px) {
      .carousel-control-prev {
        left: -30px;
      }

      .carousel-control-next {
        right: -30px;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.25));
    }

    .carousel-indicators {
      bottom: -24px;
      /* increase this value to move further down */
    }

    /* Tighten indicators on mobile */
    .carousel-indicators [data-bs-target] {
      width: 8px;
      height: 8px;
      border-radius: 50%;
    }

    #services .section-title {
      margin-bottom: 40px;
    }

    /* Grid Layout */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      /* adjust space between cards */
      justify-content: center;
      align-items: stretch;
    }

    /* Service Card */
    .service-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.12);
    }

    .service-card img {
      max-width: 60px;
      margin-bottom: 15px;
    }

    .service-card h4 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .service-card p {
      font-size: 14px;
      color: #444;
      line-height: 1.5;
    }

    /* Remove extra gaps & align center */
    .container {
      max-width: 1100px;
      margin: auto;
    }

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
      bottom: 15vh;
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

      <!-- Logo + Text -->
      <a href="index.php" class="d-flex align-items-center logo">
        <img src="assets/img/download.png" alt="Logo" class="img-fluid" style="height:60px; margin-right:10px;" />
        <div class="logo-text">
          <h1 style="margin:0; font-size:18px; color:#003366; font-weight:600;">
            S.P. LADDA & ASSOCIATES
          </h1>
          <p style="margin:0; font-size:15px; color:green; font-weight:500;">
            Chartered Accountants
          </p>
        </div>
      </a>

      <!-- Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="scrollto active" href="./">Home</a></li>
          <li><a class="scrollto" href="./#about">About us</a></li>

          <!-- Dropdown for Services -->
          <li class="dropdown">
            <a href="./#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="ServiceDetails.php#AuditandAssurance">Assurance and Audit</a></li>
              <li><a href="ServiceDetails.php#DirectTaxation">Direct Taxation</a></li>
              <li><a href="ServiceDetails.php#IndirectTaxation">Indirect Taxation</a></li>
              <li><a href="ServiceDetails.php#Accounting&Consuting">Accounting & Consulting</a></li>
              <li><a href="ServiceDetails.php#BusinessSupportServices">Business Support Services</a></li>
              <li><a href="ServiceDetails.php#AdvisoryServices">Advisory Services</a></li>
            </ul>
          </li>

          <li><a class="scrollto" href="./#team">Team</a></li>
          <li><a class="scrollto" href="./Contact.php">Contact us</a></li>
          <li><a class="scrollto" href="Careers.php">Careers</a></li>
          <li><a class="scrollto" href="NewsLetter.php">Updates</a></li>
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
              <a href="Careers.php" class="btn btn-primary scrollto px-4 py-2 fs-5 mt-5">Apply Now !</a>
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
      <div class="section-title text-center">
        <h2>~ Services ~</h2>
        <h6>
          We offer a comprehensive range of services backed by vast experience and a team of qualified professionals,
          delivering reliable and value-driven solutions to our clients.
        </h6>
      </div>

      <!-- Services Grid -->
      <div class="services-grid">
        <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
          <img src="servicesIcon/search.png" alt="Assurance" />
          <h4><a href="ServiceDetails.php#AuditandAssurance">Assurance and Audit</a></h4>
          <p>
            Building trust through independent evaluation.
            We offer statutory audits, internal audits, tax audits, Bank Audits, Concurrent Audits and special purpose audits.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="150">
          <img src="servicesIcon/taxation.png" alt="Direct Taxation" />
          <h4><a href="ServiceDetails.php#DirectTaxation">Direct Taxation</a></h4>
          <p>
            Ensure full compliance while optimizing your tax position.
            We provide full-service income tax planning, filing, TDS compliance, and strategic structuring.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
          <img src="servicesIcon/taxation (1).png" alt="Indirect Taxation" />
          <h4><a href="ServiceDetails.php#IndirectTaxation">Indirect Taxation</a></h4>
          <p>
            Stay ahead with expert GST and indirect tax solutions.
            Includes GST registration, filing, audits, compliance checks, and litigation support.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="250">
          <img src="servicesIcon/talk.png" alt="Consulting" />
          <h4><a href="ServiceDetails.php#Accounting&Consuting">Accounting & Consulting</a></h4>
          <p>
            Empowering your decisions with financial clarity.
            From forecasting & budgeting to MIS reporting and internal controls.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
          <img src="servicesIcon/public-service.png" alt="Business Support" />
          <h4><a href="ServiceDetails.php#BusinessSupportServices">Business Support Services</a></h4>
          <p>
            Streamlined back-office solutions for growing businesses.
            Includes business creation, payroll, ROC compliance, and financing.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="350">
          <img src="servicesIcon/consultant.png" alt="Advisory" />
          <h4><a href="ServiceDetails.php#AdvisoryServices">Advisory Services</a></h4>
          <p>
            Strategic insights for smarter decisions.
            Covering due diligence, M&A, valuations, and fund management.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- new industries  -->

  <section id="clients" class="py-5 text-center">
    <div class="container" style="padding-bottom: 4rem;" data-aos="fade-up">
      <div class="section-title mb-4">
        <h2 class="mb-2">~ Industries We Serve ~</h2>
        <h6 class="text-muted">
          We possess a wealth of industry experience and have effectively guided various sectors towards accomplishing their objectives.
        </h6>
      </div>

      <!-- =========================
             DESKTOP (lg+) CAROUSEL
             Shows 3 cards per slide
        ========================== -->
      <div id="industriesCarouselDesktop"
        class="carousel carousel-dark slide d-none d-lg-block"
        data-bs-ride="carousel"
        data-bs-interval="3500"
        data-bs-wrap="true"
        data-bs-touch="true">

        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row g-3 justify-content-center">
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/banking.jpg" alt="Bank, NBFC and Financial Institutions" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Bank, NBFC & Financial Institutions</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/ITT.jpeg" alt="IT and Software Industry" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">IT & Software</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/infra1653295242.jpeg" alt="Infrastructure and Real Estate" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Infrastructure & Real Estate</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row g-3 justify-content-center">
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/FMCG.jpg" alt="Fast-moving Consumer Goods (FMCG)" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Fast-Moving Consumer Goods (FMCG)</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/doctor.jpg" alt="Health Care" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Health Care</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/MNC.jpg" alt="Multinational Companies" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Multinational Companies</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="row g-3 justify-content-center">
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/manufacture.jpeg" alt="Manufacturing - Engineering, OEMs, chemicals" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Manufacturing (Engineering, OEMs, Chemicals)</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/hsocieties.jpeg" alt="Housing Societies" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Housing Societies</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/education.jpeg" alt="Educational Sector" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Educational Sector</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item">
            <div class="row g-3 justify-content-center">
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/charity.webp" alt="Charitable Trusts" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Charitable <br> Trusts</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card industry-card h-100">
                  <img src="expIcons/hospitaliy.jpeg" alt="Hospitality" />
                  <div class="card-footer">
                    <h5 class="card-title m-0 py-2">Hospitality</h5>
                  </div>
                </div>
              </div>
              <!-- If you add more industries, place the 3rd card for this slide here -->
            </div>
          </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide="prev" aria-label="Previous">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#industriesCarouselDesktop" data-bs-slide="next" aria-label="Next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

      <!-- =========================
             MOBILE / TABLET CAROUSEL
             Shows 1 card per slide
        ========================== -->
      <div id="industriesCarouselMobile"
        class="carousel carousel-dark slide d-lg-none mt-4"
        data-bs-ride="carousel"
        data-bs-interval="3500"
        data-bs-wrap="true"
        data-bs-touch="true">

        <!-- Indicators -->
        <div class="carousel-indicators">
          <!-- 11 slides => 11 indicators; add/remove as needed -->
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="3" aria-label="4"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="4" aria-label="5"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="5" aria-label="6"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="6" aria-label="7"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="7" aria-label="8"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="8" aria-label="9"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="9" aria-label="10"></button>
          <button type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide-to="10" aria-label="11"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/banking.jpg" alt="Bank, NBFC and Financial Institutions" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Bank, NBFC & Financial Institutions</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/ITT.jpeg" alt="IT and Software Industry" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">IT & Software</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/infra1653295242.jpeg" alt="Infrastructure and Real Estate" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Infrastructure & Real Estate</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/FMCG.jpg" alt="Fast-moving Consumer Goods (FMCG)" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">FMCG</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/doctor.jpg" alt="Health Care" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Health Care</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/MNC.jpg" alt="Multinational Companies" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Multinational Companies</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/manufacture.jpeg" alt="Manufacturing - Engineering, OEMs, chemicals" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Manufacturing (Engineering, OEMs, Chemicals)</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/hsocieties.jpeg" alt="Housing Societies" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Housing Societies</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/education.jpeg" alt="Educational Sector" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Educational Sector</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/charity.webp" alt="Charitable Trusts" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Charitable Trusts</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="card industry-card mx-auto" style="max-width: 520px;">
                <img src="expIcons/hospitaliy.jpeg" alt="Hospitality" />
                <div class="card-footer">
                  <h5 class="card-title m-0 py-2">Hospitality</h5>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide="prev" aria-label="Previous">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#industriesCarouselMobile" data-bs-slide="next" aria-label="Next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

    </div>
  </section>

  <!-- reach out method  -->

  <section id="cta" class="cta my-5">
    <div class="container" data-aos="zoom-in">
      <div class="text-center">
        <h3>Reach Out Now !</h3>
        <p>
          Lets Do Whats Best for You with Our experience and Your Vision,
          Lets Make it Big !
        </p>
        <a class="cta-btn" href="Contact.php">Contact Now</a>
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



                <a href="LearnMore.php" class="btn-learn-more buttonFinal  mx-2">Learn More <span class="fw-bold" style="height: 15px;">&#x2192;</span></a>


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
                <a href="SameerLadda.php"><img src="assets/img/testimonials/CASameer.jpg" class="img-fluid" alt="" /></a>
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
                <a href="VishalRathi.php"><img src="assets/img/testimonials/CARathee.jpg" class="img-fluid" alt="" /></a>
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
                <a href="ShravanLadda.php"><img src="assets/img/testimonials/CAShravan.jpg" class="img-fluid" alt="" /></a>
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
                <a href="KiranShah.php"><img src="assets/img/testimonials/caKiran.jpg" class="img-fluid" alt="" /></a>
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
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class=" pt-5 pb-3 section-bgf">
    <div class="container">
      <div class="row g-4">
        <!-- Newsletter Column -->
        <div class="col-lg-3 col-md-6">
          <h4 class="border-bottom border-primary pb-2 mb-3">Stay Updated</h4>
          <p class="text-muted">Subscribe to our newsletter for the latest updates on taxation, accounting, and business advisory services.</p>
          <form class="mt-4">
            <div class="mb-3">
              <input type="email" class="form-control form-control-sm  border-1 text-white" placeholder="Your Email Address" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm w-100">Subscribe</button>
          </form>

        </div>

        <!-- Services Column -->
        <div class="col-lg-3 col-md-6">
          <h4 class="border-bottom border-primary pb-2 mb-3">Our Services</h4>
          <ul class="list-unstyled">
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Assurance and Audit</span>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Direct Taxation</span>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Indirect Taxation</span>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Accounting and Management Consulting</span>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Business Support Services</span>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <span class="ms-2">Advisory Services</span>
            </li>
          </ul>

        </div>

        <!-- Useful Links Column -->
        <div class="col-lg-3 col-md-6">
          <h4 class="border-bottom border-primary pb-2 mb-3">Useful Links</h4>
          <ul class="list-unstyled">
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://www.gst.gov.in/" class="text-decoration-none text-muted ms-2">
                Goods and Services Tax (GST)
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://www.incometax.gov.in/iec/foportal/" class="text-decoration-none text-muted ms-2">
                Income Tax
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://www.mca.gov.in/content/mca/global/en/home.html" class="text-decoration-none text-muted ms-2">
                Ministry of Corporate Affairs
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://www.cbic.gov.in/" class="text-decoration-none text-muted ms-2">
                Central Board Of Indirect Taxes & Customs (CBIC)
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://ipindia.gov.in/" class="text-decoration-none text-muted ms-2">
                Intellectual Property Rights (IPR)
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://mahasahakar.maharashtra.gov.in/" class="text-decoration-none text-muted ms-2">
                Maharashtra Co-operative Department
              </a>
            </li>
            <li class="mb-2 d-flex align-items-start">
              <i class="bx bx-chevron-right text-primary mt-1"></i>
              <a href="https://maharerait.mahaonline.gov.in/searchlist/search?MenuID=1069" class="text-decoration-none text-muted ms-2">
                Maha-RERA
              </a>
            </li>
          </ul>

        </div>

        <!-- Head Office Column -->
        <div class="col-lg-3 col-md-6">
          <h4 class="border-bottom border-primary pb-2 mb-3">Head Office</h4>
          <div class="d-flex mb-3 gap-2 align-items-center">
            <div>
              <i class=" p-2 text-white bg-primary bx bx-building-house rounded"></i>
            </div>
            <div>
              <h6 class="mb-0 text-primary">Main Office</h6>
              <small class="text-muted">104-105 Ganga Collidium</small>
            </div>
          </div>
          <p class="text-muted mb-3">
            Opp. Gangadham Towers, Chowk, Ganga Dham<br>
            Pune, Maharashtra 411037
          </p>

          <p class="mb-1">
            <i class="bx bx-phone text-primary me-2"></i>
            <span class="text-muted">+91-7875037800</span>
          </p>
          <p class="mb-1">
            <i class="bx bx-phone text-primary me-2"></i>
            <span class="text-muted">+91-020-29992800</span>
          </p>
          <p class="mb-2">
            <i class="bx bx-envelope text-primary me-2"></i>
            <span class="text-muted">info@spladda.com</span>
          </p>
          <p class="mb-3">
            <i class="bi bi-linkedin text-primary me-2"></i>
            <a target="_blank" href="https://in.linkedin.com/company/s-p-ladda-associates-co" class="text-muted">
              Linkedin
            </a>
          </p>

          <div class="rounded p-2">
            <small class="text-muted">Other locations in Baner and Mumbai</small>
          </div>
        </div>
      </div>

      <div class="d-md-flex pb-2 mt-5 pt-4 border-top border-secondary">
        <div class="w-100 text-center">
          <p class="text-muted mb-0">
            &copy; <script>
              document.write(new Date().getFullYear());
            </script>
            <span>S.P. Ladda & Associates</span>. All Rights Reserved.
          </p>
        </div>
      </div>

    </div>
  </footer>



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
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>
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