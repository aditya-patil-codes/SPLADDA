<?php
require('connection.php');


?>

<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>All Newsletters</title>
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
    <link href="assets/css/newsletter.css" rel="stylesheet" />
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
            <h2>Newsletter</h2>
            <ol>
              <li><a href="index.php">Newsletters</a></li>
              <li>All Newsletter</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= Portfolio Details Section ======= -->

      <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="text-center">
                  <div class="icon text-center">
                    <i class="ri-palette-line"></i>
                  </div>
                  <h4 class="title"><a>GST </a></h4>
                  <p class="description">
                    We will predominantly work with organisations in the
                    charitable and voluntary sectors as partners to help them
                    achieve their desired outcomes.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-8 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>

                  </tr>
                </thead>
                <tbody>



                  <?php






                  $sql = "SELECT * FROM news WHERE category= 'GST' ";


                  $query = mysqli_query($con, $sql);
                  $rows = mysqli_num_rows($query);
                  $count = 0;











                  if ($rows) {
                    while ($result2 = mysqli_fetch_assoc($query)) {
                  ?>



                      <tr>
                        <th> <?= ++$count ?></th>
                        <td> <a href="uploaddocs/.<?php echo $result2['file']; ?>" target="_blank"><?= $result2['name'] ?></a></td>
                        <td> <?= $result2['date'] ?></td>


                      </tr>




                    <?php
                    }
                  } else {
                    ?>
                    <tr>
                      <td colspan="7">No record Found </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </section>
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
                104-105 Ganga Collidium<br />
                Opp. Gangadham Towers, Chowk, Ganga Dham, Pune, Maharashtra
                411037 <br /><br />
                <strong>Phone:</strong> 020-24244200 <br />
                <strong>Email:</strong> caladdaclient@gmail.com <br />
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="https://www.gst.gov.in/">Goods and Services Tax (GST)</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://www.incometax.gov.in/iec/foportal/">Income Tax</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://www.mca.gov.in/content/mca/global/en/home.html">Ministry of Corporrate Affairs</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://www.cbic.gov.in/">Central Board Of Indirect Taxes & Customs (CBIC)</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://ipindia.gov.in/">Intellectual Property Rights (IPR)</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://mahasahakar.maharashtra.gov.in/">Maharashtra Co-operative Department</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="https://maharerait.mahaonline.gov.in/searchlist/search?MenuID=1069">Maha-RERA</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a>Attestation</a></li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Risk Management</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Management Consultancy</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Business Support Services</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Taxation</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Indirect Taxation </a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a>Company Law </a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>
                Get Amazed By our weekly Newsletter, get Updated About the Stuff
              </p>
              <form method="post">
                <input
                  type="email"
                  placeholder="Enter Your Email address"
                  name="email" />
                <input type="submit" name="subscribe" value="Subscribe" />
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

      </div>
    </footer>
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

</php>