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
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" /> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,500;1,700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,200;1,300;1,400;1,500;1,900&family=Roboto+Slab:wght@200&family=Roboto:ital,wght@0,100;0,900;1,100;1,900&display=swap" rel="stylesheet">
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

    .mainimg {
      border: 1px solid rgb(148, 148, 148);
      border-radius: 15px;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

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
  <!-- WhatsApp Button -->
  <a href="https://wa.me/919850838461"
    class="whatsapp-float"
    target="_blank"
    aria-label="Chat on WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp Chat" class="whatsapp-icon">
  </a>

  <section style="padding-bottom: 0px">
    <div id="carouselExampleInterval" class="carousel slide py-0" data-bs-ride="carousel">
      <div class="carousel-indicators"></div>
      <div class="carousel-inner">
        <div style="height: 20vh; background-color: #f0f0f086" class="carousel-item active">
          <!-- <img
                style="height: 100%; object-fit: cover; filter: brightness(0.3)"
                src="carosalImg/img3.jpg"
                class="d-block w-100"
                alt="..."
              /> -->
          <div class="carousel-caption top-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            <h2 class="display-5 fw-bold" style="color: #16507b">
              ~ Our Leadership ~
            </h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="" class="about pt-1 pb-2 section-bg">
    <div class="container " data-aos="fade-up">
      <section id="about-video" class="about-video container-fluid pt-3">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 align-self-baseline" data-aos="fade-right" data-aos-delay="100">
              <img style="height: 450px; width: 450px; object-fit:cover;" src="assets/img/testimonials/CAsuchitranew.jpg" style="height: max-content; " class="img-fluid mt-4 mainimg" alt="" />
              <p>

              <div class="row">
                <div class="col pt-3"><b class="px-3 h4 fw-bold" style="color: #16507b;">
                    Education:
                  </b>
                  <ul class="  pt-2">
                    <li class=" pb-2 ">Fellow Chartered Accountant (FCA).</li>
                    <li class=" pb-2">DISA Qualified</li>
                    <li class=" pb-2">Bachelor of Law (Pursuing)</li>


                  </ul>
                </div>
                <div class="col pt-3">
                  <b class=" h4 fw-bold" style="color: #16507b;">
                    Area of Expertise:
                  </b>
                  <ul class="   pt-2">
                    <li class=" pb-2">GST Compliance, Refunds & Litigation
                    </li>
                    <li class=" pb-2">Statutory & Bank Audits
                    </li>
                    <li class=" pb-2">Financial & Business Advisory
                    </li>
                    <li class=" pb-2">Tax Planning & Business Structuring</li>
                    <li class=" pb-2">MIS, Budgeting & Accounting Systems (Tally, Zoho Books)</li>


                  </ul>
                </div>
              </div>

              </p>
            </div>
            <div class="col-lg-6 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <p>
              <h6 class="fw-bold h2 " style="color: #16507b">CA Suchitra Warudkar</h6>
              <p><b>CA Suchitra Warudkar </b> is a Fellow Member of the Institute of Chartered Accountants of India (FCA), bringing over 8 years of diverse professional experience in Audit, Taxation, and Financial Advisory Services. She serves as a trusted advisor to clients across manufacturing, trading, real estate, construction, and service sectors, providing tailored solutions that combine regulatory compliance with strategic financial insights.

              </p>
              <p>

              <div>
                <p>
                  She is known for her deep domain expertise in Goods and Services Tax (GST), with proven capabilities in:
                </p>
                <ul class="gst-list">
                  <li>-GST return preparation and compliance management</li>
                  <li>-End-to-end GST refund processing including export-related claims, inverted duty structure, and excess ledger balances</li>
                  <li>-Handling GST audits, departmental assessments, and litigations</li>
                  <li>-Advisory on GST implementation, system integration, and risk mitigation</li>
                </ul>
              </div>



              </p>
              <p>In her audit practice, CA Suchitra has led engagements with nationalized banks, multi-state co-operative institutions, government undertakings, and SMEs, demonstrating a keen understanding of regulatory frameworks and internal controls.
              </p>

              <div>
                <p>
                  Her additional expertise includes:
                </p>
                <ul class="gst-list">
                  <li>-Financial advisory and planning for growth-oriented businesses</li>
                  <li>-Business structuring and tax optimization strategies</li>
                  <li>-MIS design and preparation, budgeting, and forecasting</li>
                  <li>-Accounting system implementation using tools like Tally and Zoho Books</li>
                  <li>-Digital compliance through expert use of government portals, Excel dashboards, and automation tools</li>
                </ul>
              </div>
              <p>
              <p>An articulate professional and effective communicator, she also contributes as a GST faculty at the Institute of Taxation & Accounting Professionals (ITAP), helping shape the next generation of tax professionals.
              </p>

              </p>

            </div>
          </div>
        </div>
      </section>
    </div>
  </section>


  <!-- End Header -->

  <!-- next section  -->

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
</body>

<script>
  window.addEventListener("load", function() {
    // Check if the device screen width is greater than 600 pixels (adjust the value as needed)
    if (window.innerWidth > 600) {
      setTimeout(function open(event) {
        document.querySelector(".popup").style.display = "block";
      }, 2000);
    }
  });

  document.querySelector("#closethis").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
  });
</script>

</html>