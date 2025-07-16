<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/careers.css" rel="stylesheet" />

    <style>
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
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo"><img src="assets/img/download.png" alt="" class="img-fluid" /></a>

            <nav id="navbar" class="navbar ">
                <ul>
                    <li><a class=" scrollto active" href="./">Home</a></li>
                    <li><a class=" scrollto" href="./#about">About</a></li>
                    <li><a class=" scrollto" href="./#services">Services</a></li>
                    <li><a class=" scrollto" href="./#team">Team</a></li>
                    <li><a class=" scrollto" href="./#contact">Contact</a></li>
                    <li>
                        <a class=" scrollto " href="careers.php">Careers</a>
                    </li>

                    <li>
                        <a class=" scrollto" href="newsletter.php">Updates</a>
                    </li>

                    <li></li>
                    <li><a class=" scrollto" href="login.php">Admin</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- WhatsApp Button -->
    <a href="https://wa.me/918600600955"
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
                    <h2>Admin Login</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Admin Login</li>
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
                                        <h3 class="mb-4">Login As Admin</h3>
                                        <div id="form-message-warning" class="mb-4"></div>

                                        <form method="POST" action="postdata.php">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Username" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12"></div>
                                                <div class="col-md-12"></div>
                                                <div class="col-md-12"></div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Submit" name="admin_login" class="btn" style="background-color: #2487ce; color: white" />
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-stretch">
                                    <div class="info-wrap w-100 p-lg-5 p-4" style="background-color: #2487ce">
                                        <h3 class="mb-4 mt-md-4">Admin Login</h3>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-unlock"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p>
                                                    <span>Admin Can: </span> Add, Edit and Delete all
                                                    the Newsletters, First Upload the Newsletter on
                                                    Drive and use Its link.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class=""></div>
                                        </div>
                                        <div class="">
                                            <div class=""></div>
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
    <!-- <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>S.P. Ladda & Associates</h3>
                        <p>
                            104-105 Ganga Collidium<br />
                            Opp. Gangadham Towers, Chowk, Ganga Dham, Pune, Maharashtra
                            411037 <br /><br />
                            <strong>Phone:</strong> 0000000000 <br />
                            <strong>Email:</strong> spladdha@gmail.com <br />
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a>Service1</a></li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a>Service2</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a>Service3</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a>Service4</a></li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a>Service5</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>
                            Get Amazed By our weekly Newsletter, get Updated About the Stuff
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright
                    <strong><span> S.P. Ladda & Associates </span></strong>. All Rights
                    Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer> -->
    <!-- End Footer -->

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
</body>

</html>