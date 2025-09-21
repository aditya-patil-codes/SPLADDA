<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Careers</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
  <!-- <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,500;1,700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,200;1,300;1,400;1,500;1,900&family=Roboto+Slab:wght@200&family=Roboto:ital,wght@0,100;0,900;1,100;1,900&display=swap"
      rel="stylesheet"
    /> -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link
    href="assets/vendor/glightbox/css/glightbox.min.css"
    rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/careers.css" rel="stylesheet" />
  <style>
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
  <!-- WhatsApp Button -->
  <a href="https://wa.me/919850838461"
    class="whatsapp-float"
    target="_blank"
    aria-label="Chat on WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp Chat" class="whatsapp-icon">
  </a>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Careers</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Careers</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-7 d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">Work With Us !</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your message was sent, thank you!
                    </div>
                    <form
                      method="POST"
                      id="contactForm"
                      name="contactForm"
                      enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              name="name"
                              id="name"
                              placeholder="Name" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control"
                              name="email"
                              id="email"
                              placeholder="Email" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <select
                              class="form-select"
                              name="category"
                              aria-label="Default select example"
                              style="
                                  border-radius: 0px;
                                  border-color: rgb(233, 233, 233);
                                ">
                              <option selected>Apply For ?</option>
                              <option value="Job">Full Time</option>
                              <option value="Articleship">Articleship</option>
                              <!-- <option value="3">Three</option> -->
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea
                              name="message"
                              class="form-control"
                              id="message"
                              cols="30"
                              rows="7"
                              placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="customFile">Upload Resume</label>
                            <input
                              type="file"
                              class="form-control"
                              name="file"
                              style="border: 0px solid white" />
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <input
                              type="submit"
                              name="send"
                              value="Send Message"
                              class="btn"
                              style="background-color: #2487ce; color: white" />
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-5 d-flex align-items-stretch">
                  <div
                    class="info-wrap w-100 p-lg-5 p-4"
                    style="background-color: #2487ce">
                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <span>Address:</span> 104-105 Ganga Collidium Opp.
                          Gangadham Towers, Chowk, Ganga Dham, Pune,
                          Maharashtra 411037
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <span>Phone:</span>
                          <a href="tel://1234567920">+919850838461</a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text pl-3">
                        <p>
                          <span>Email:</span>
                          <a href="mailto:info@yoursite.com">caladdaclient@gmail.com</a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <input type="email" class=" form-control-sm w-100 border-0 text-white" placeholder="Your Email Address" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm p-1 w-100">Subscribe</button>
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
  <!-- End Footer -->

  <div id="preloader"></div>
  <a
    href="#"
    class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);

  if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $category = $_POST['category'];

    try {
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'sp.ladda.website@gmail.com';
      $mail->Password = 'ndlwhahltqulvcjt';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->setFrom($email, $name);
      $mail->addAddress($email);

      if ($_FILES['file']['name'] != null) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], "uploads/{$_FILES['file']['name']}")) {
          $mail->addAttachment("uploads/{$_FILES['file']['name']}");
        }
      }

      $mail->isHTML(true);
      $mail->Subject = $category;
      $mail->Body = $message;

      $mail->send();

      echo "
      <script>
        alert('Mail sent successfully');
        window.location.href = 'careers.php';
      </script>
    ";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }

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

      $mail->setFrom($email, $name);
      $mail->addAddress($tosend);

      $mail->isHTML(true);
      $mail->Subject = "New Subscribed User --> " . $email;
      $mail->Body = $email;

      $mail->send();

      echo "
      <script>
        alert('Mail sent successfully');
        window.location.href = 'index.php';
      </script>
    ";
    } catch (Exception $e) {
      echo "
      <script>
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'index.php';
      </script>
    ";
    }
  }
  ?>

</body>

</html>