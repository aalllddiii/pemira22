<?php
  header("X-XSS-Protection: 1; mode=block");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PEMIRA FIKTI UG 2022</title>
    <meta property="og:image" content="assets/images/LOGO3.png">
    <meta property="og:title" content="PEMIRA BEM FIKTI UG">
    <meta property="og:description"
        content="Mari ikuti pendaftaran atau pemilihan ketua dan wakil ketua BEM FIKTI Universitas Gunadarma">

    <!-- Favicons -->
    <link href="assets/images/LOGO3.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>PEMIRA</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="login-form.php">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="counts">
            <div class="container">
                <div class="card mx-auto border-0">
                    <h2 class="text-center pt-4">REGISTER PASLON</h2>

                    <div class="card-body pb-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                aria-labelledby="pills-login-tab">
                                <form action="config/register_paslon.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="npm" class="form-control" placeholder="NPM" required
                                            autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username"
                                            required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>

                                    <div class="text-center pt-2">
                                        <button name="submit" type="submit"
                                            class="btn btn-primary col-12">REGISTER</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Maintained By Biro <strong><span>PTI</span></strong> &copy;2021/2022
            </div>
        </div>
        </div>
    </footer>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/carousel-custom/js/jquery.min.js"></script>
    <script src="assets/carousel-custom/js/popper.js"></script>
    <script src="assets/carousel-custom/js/bootstrap.min.js"></script>
    <script src="assets/carousel-custom/js/owl.carousel.min.js"></script>
    <script src="assets/carousel-custom/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom-login.js"></script>


</body>

</html>