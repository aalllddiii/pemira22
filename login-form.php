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
    <meta property="og:description" content="Mari ikuti pendaftaran atau pemilihan ketua dan wakil ketua BEM FIKTI Universitas Gunadarma">

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
                    <li><a class="nav-link scrollto" href="#">Login</a></li>
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
                    <h2 class="text-center pt-4">LOGIN</h2>
                    <div class="card-header border-bottom-0 bg-transparent">
                        <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill"
                                    href="#pills-login" role="tab" aria-controls="pills-login"
                                    aria-selected="true">Voting</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-primary" id="pills-register-tab" data-toggle="pill"
                                    href="#pills-register" role="tab" aria-controls="pills-register"
                                    aria-selected="false">Paslon</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body pb-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                aria-labelledby="pills-login-tab">
                                <!-- <form action="config/login.php" method="POST">
                                    
                                    <h6>Studentsite Account :</h6>
                                    <div class="form-group">
                                        <input type="text" name="u" class="form-control" placeholder="Username" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="p" class="form-control" placeholder="Password" required
                                        >
                                    </div>

                                    <h6>Data Diri :</h6>
                                    <div class="form-group">
                                        <input type="text" name="n" class="form-control" placeholder="Nama Lengkap" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="k" class="form-control" placeholder="Kelas" required
                                        >
                                    </div>

                                    <div class="text-center pt-0">
                                        <br>
                                        <br>
                                        <button name="submit" type="submit" class="btn btn-primary col-12">Login</button>
                                    </div>
                                </form> -->
                                <h3>Mohon maaf voting telah ditutup!</h3>
                                <h3>Terimakasih bagi seluruh mahasiswa FIKTI yang telah berpartisipasi untuk melakukan e-vote.</h3>
                                <h3>Sampai jumpa tahun depan!</h3>
                            </div>

                            <div class="tab-pane fade" id="pills-register" role="tabpanel"
                                aria-labelledby="pills-register-tab">
                                <form action="config/login-paslon.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="u" class="form-control" placeholder="Username" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="p" class="form-control" placeholder="Password"
                                            required>
                                    </div>

                                    <div class="text-center pt-0">
                                        <br>
                                        <br>
                                        <button name="submit" type="submit"
                                            class="btn btn-primary col-12">Login</button>
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