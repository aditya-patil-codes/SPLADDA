<!-- <section class="bg-primary text-white py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h3 class="mb-3">Stay Updated with Our Insights</h3>
        <p class="mb-4">Subscribe to our newsletter for the latest updates on taxation, accounting, and business advisory services.</p>
        <form class="row g-2 justify-content-center">
          <div class="col-md-7">
            <input type="email" class="form-control form-control-lg" placeholder="Enter your email address" aria-label="Email">
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
          </div>
        </form>
        <small class="d-block mt-3 opacity-75">We respect your privacy. Unsubscribe at any time.</small>
      </div>
    </div>
  </div>
</section> -->


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


        .branch-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .branch-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important;
        }

        .icon-wrapper {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .branch-card:hover .icon-wrapper {
            transform: scale(1.1);
            background-color: rgba(22, 80, 123, 0.15) !important;
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
    <!-- End Header -->
    <section style="padding-bottom: 0px">
        <div class=" py-0">

            <div class="text-center">
                <div style=" background-color: #f0f0f086">

                    <div class=" top-0  py-5">
                        <h2 class="display-6 fw-bold" style="color: #16507b">
                            ~ Reach us for your One Stop Solutions ~
                        </h2>

                        <p class="pt-3 px-5">
                            <span class="h5 fw-bold" style="color: #16507b">S.P. Ladda & Associates,</span>
                            <span class="text-secondary"> is a Chartered Accountancy firm based in Pune, offering seamless online consultations as well. With two offices in Pune and a presence in Mumbai, we ensure accessibility and convenience for clients across locations.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row ">
                <div class="mb-3">
                    <h3>
                        <strong>Send Your Message to Us</strong>
                        <p class="fs-6 pt-2 text-muted">
                            We are here to assist you. Please fill out the form below to get in touch with us.
                        </p>
                    </h3>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <form id="form_id" method="post">
                        <div class="row gy-3 gx-md-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control p-3 fs-8" id="name" placeholder="Your Name" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control p-3 fs-8" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control p-3 fs-8" id="subject" placeholder="Subject" required />
                            </div>
                            <div class="col-12">
                                <textarea name="msg" rows="9" id="msg" class="form-control p-3 fs-8" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary px-4 py-2 fs-8" name="sendmsg">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <div class="address border p-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location</h4>
                            <p>Opp. Gangadham Towers, Chowk, Ganga Dham
                                Pune, Maharashtra, 411037</p>
                        </div>

                        <div class="email border p-4">
                            <i class="bi bi-envelope"></i>
                            <h4>Email</h4>
                            <p>caladdaclient@gmail.com</p>
                        </div>

                        <div class="phone border p-4">
                            <i class="bi bi-phone"></i>
                            <h4>Call</h4>
                            <p>020-24244200</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">

                <iframe style="border: 0; width: 100%; height: 270px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.2650226467517!2d73.8722898740985!3d18.471650870668874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c01eb7f45545%3A0xccdc8a58d49e6f73!2sS.P.%20Ladda%20%26%20Associates!5e0!3m2!1sen!2sin!4v1688147997602!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
    </section>



    <!-- next section  -->


    <section id="branches" class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-5 mb-3" style="color: #16507b">~Our Branches~</h2>
                <p class="lead text-muted">We are accessible at our offices in Pune and Mumbai or virtually.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Baner Branch -->
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow-sm border-0 branch-card">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="text-center">
                                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-geo-alt fs-2 text-primary"></i>
                                </div>
                                <h5 class="card-title fw-bold text-dark">Baner Office (Pune)</h5>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="text-center text-muted">
                                <p class="card-text mb-1">Row House no.7, Samruddhi Row Houses,</p>
                                <p class="card-text mb-1">Kalamkar Park Road, Opp Park Marina Society,</p>
                                <p class="card-text mb-1">Balewadi Phata, Baner, Pune, 411045, IN</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="https://www.google.com/maps?q=18.5640253,73.7844823" target="_blank" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-map me-2"></i>View on Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mumbai Branch -->
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow-sm border-0 branch-card">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="text-center">
                                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-geo-alt fs-2 text-primary"></i>
                                </div>
                                <h5 class="card-title fw-bold text-dark">Mumbai Office</h5>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="text-center text-muted">
                                <p class="card-text mb-1">C/o Mrs. Aarti Vishal Rathi, Gala No.230,</p>
                                <p class="card-text mb-1">Blue Rose Industrial Estate, Near Metro Mall,</p>
                                <p class="card-text mb-1">Borivali East, Mumbai, 400006, IN</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="https://maps.app.goo.gl/iMdWsVEkJNVxUUgj7" target="_blank" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-map me-2"></i>View on Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




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