<?php
require('connection.php');
session_start();
if (empty($_SESSION['username'])) {
    header("Location: index.php");
}
?>


<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Write</title>
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
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo"><img src="assets/img/download.png" alt="" class="img-fluid" /></a>

            <nav id="navbar" class="navbar ">
                <ul>
                    <li><a class=" scrollto active" href="index.php">Home</a></li>
                    <li><a class=" scrollto" href="index.php">About</a></li>
                    <li><a class=" scrollto" href="index.php">Services</a></li>
                    <li><a class=" scrollto" href="index.php">Team</a></li>
                    <li><a class=" scrollto" href="index.php">Contact</a></li>
                    <li>
                        <a class=" scrollto " href="careers.php">Careers</a>
                    </li>

                    <li>
                        <a class=" scrollto" href="newsletter.php">Updates</a>
                    </li>

                    <li></li>
                    <li> <a class="text-danger" href="index.php"> Admin Logout </a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Write</h2>
                    <ol>
                        <li><a href="index.php">Admin Panel </a> </li>


                        <li>Write</li>
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
                                        <h3 class="mb-4">Make a Newsletter</h3>
                                        <div id="form-message-warning" class="mb-4"></div>
                                        <div id="form-message-success" class="mb-4">
                                            Your message was sent, thank you!
                                        </div>
                                        <form method="POST" action="postdata.php" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select class="form-select" name="category" required aria-label="Default select example" style="
                                  border-radius: 0px;
                                  border-color: rgb(233, 233, 233);
                                ">
                                                            <option selected>Category</option>
                                                            <option value="GST">GST</option>
                                                            <option value="Income Tax">Income Tax</option>
                                                            <option value="Newsletter">Newsletter</option>
                                                            <!-- <option value="3">Three</option> -->
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="customFile">Upload Newsletter</label>
                                                        <input type="file" class="form-control" name="file" id="customFile" style="border: 0px solid white" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Upload Newsletter" name="upload" class="btn" style="background-color: #2487ce; color: white" />
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-stretch">
                                    <div class="info-wrap w-100 p-lg-5 p-4" style="background-color: #2487ce">
                                        <h3 class="mb-4 mt-md-4">Important</h3>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-solid fa-diamond"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p><span>Upload it Carefully !</span> </p>
                                            </div>
                                        </div>

                                        <div class="dbox w-100 d-flex align-items-center"></div>
                                        <div class="dbox w-100 d-flex align-items-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Visit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php






                    $sql = " SELECT * FROM news ";


                    $query = mysqli_query($con, $sql);
                    $rows = mysqli_num_rows($query);
                    $count = 0;











                    if ($rows) {
                        while ($result2 = mysqli_fetch_assoc($query)) {
                    ?>

                            <tr>
                                <th> <?= ++$count ?></th>
                                <td> <?= $result2['name'] ?></td>
                                <td> <?= $result2['category'] ?></td>
                                <td> <a href="uploaddocs/.<?php echo $result2['file']; ?>" target="_blank"><?= $result2['name'] ?></a></td>
                                <td>
                                    <form class="mt-2" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                        <input type="hidden" name="id" value="<?= $result2['id'] ?>">
                                        <input type="submit" name="deletePost" value="Delete" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
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
        </section>
    </main>

    <!-- End #main -->


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



    <?php

    if (isset($_POST['deletePost'])) {
        $id = $_POST['id'];
        $table = $id;

        $delete = "DELETE FROM news WHERE id='$id'";
        $run = mysqli_query($con, $delete);
        if ($run) {
            echo "
               <script>
                 alert('Deleted Sucessfully');
                 window.location.href='admin.php';
               </script>
             ";
        } else {

            echo "
               <script>
                 alert('Cannot Run Query');
                 window.location.href='admin.php';
               </script>
             ";
        }
    }
    ?>

</body>

</html>