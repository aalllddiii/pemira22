<?php
  session_start();
  include "../../config/koneksi.php";
  header("X-XSS-Protection: 1; mode=block");

  $select = mysqli_query($con, "SELECT * FROM pas_datas WHERE validations = 1");
  $day = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMIRA FIKTI UG 2022</title>
  <meta property="og:image" content="../../assets/images/LOGO3.png">
  <meta property="og:title" content="PEMIRA BEM FIKTI UG">
  <meta property="og:description"
    content="Mari ikuti pendaftaran atau pemilihan ketua dan wakil ketua BEM FIKTI Universitas Gunadarma">

  <!-- Favicons -->
  <link href="../../assets/images/LOGO3.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo:ital@1&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../../assets/carousel-custom/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/carousel-custom/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="../../assets/carousel-custom/css/style.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#"><span>PEMIRA</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#candidates">Candidates</a></li>
          <li><a class="nav-link scrollto" href="../../logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Halo <span style="border-bottom: unset;"><?php echo $_SESSION['nama']; ?></span></h1>
            <h2>Selamat datang di website Pemilihan Raya Ketua Umum & Wakil Ketua Umum BEM FIKTI</h2>
            <div class="text-center text-lg-start">
              <a href="#candidates" class="btn-get-started scrollto">Vote Sekarang !!!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="../../assets/images/LOGO3.png" class="img-fluid animated">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  <!-- End Hero -->


    <!-- ======= Team Section ======= -->
    <section id="candidates" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Candidates</h2>
          <p>These are the Candidates</p>
        </div>

        <div class="row justify-content-center">
            <?php
              $num_char = 200;
              while ($data = mysqli_fetch_array($select)) {
                $ketum = $data['ketum'];
                $waketum = $data['waketum'];
                $fotbar = $data['fotbar'];
                $visi = $data['visi'];
                $misi = $data['misi'];
                $no_urut = $data['no_urut'];
            ?>
          <div class="col-12 col-lg-6 col-md-6">
            <div class="mt-4">
              <div class="card pt-1">
                <div class="row px-3 pb-3 pt-0 content justify-content-center">
                  <div class="col-md-10" data-aos="fade-right">
                    <img src="../../assets/images/paslon<?=$no_urut?>.png" class="img-fluid" style="border-radius: 550px;">
                  </div>
                  <div class="col-md-12" data-aos="fade-up">
                    <center>
                    <h2 class="font-weight-bold text-white"><b>PASLON 0<?=$no_urut?></b></h2>
                    <table>
                      <tr>
                        <td class="text-white">Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white"><?=$ketum?></td>
                      </tr>
                      <tr>
                        <td class="text-white">Wakil Ketua Umum </td>
                        <td class="px-3 text-white"> : </td>
                        <td class="text-white"><?=$waketum?></td>
                      </tr>
                    </table>
                    </center>
                    <div class="container mt-4">
                      <center>
                        <form action="../../config/voting.php" method="post">
                          <input type="text" name="npm" value="<?php echo $_SESSION['npm']; ?>" hidden>
                          <input type="text" name="nama" value="<?php echo $_SESSION['nama']; ?>" hidden>
                          <input type="text" name="kelas" value="<?php echo $_SESSION['kelas']; ?>" hidden>
                          <input type="text" name="kandidat" value="paslon<?=$no_urut?>" hidden>
                          <input type="text" name="day" value="<?=$day?>" hidden>
                          <button type="submit" name="submit" class="btn button-customs col-8" onclick="return confirm('Pilihan tidak dapat dibatalkan, apakah anda yakin?')">
                            Vote Now
                          </button>
                        </form>
                      </center><br>
                    </div>
                    <div class="faq-list mt-4">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#visi<?=$no_urut?>" class="collapsed"
                            class="font-weight-bold text-white">Visi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="visi<?=$no_urut?>" class="collapse">
                            <!-- <p>
                            <?=$visi?>
                            </p> -->

                            <!-- SEMENTARA -->
                            <?php 
                            if ($no_urut == 1) {
                              echo "<div class='row justify-content-center'>
                                      <div class='col-1'><p><b>1</b></p></div>
                                      <div class='col-11'><p>Menjadi organisasi yang punya mindset, approaching, & eksekusi start-up</p></div>
                                      <div class='col-1'><p><b>2</b></p></div>
                                      <div class='col-11'><p>Setiap Departemen/ Biro Punya Guideline kerja</p></div>
                                      <div class='col-1'><p><b>3</b></p></div>
                                      <div class='col-11'><p>BEM FIKTI Punya Orientasi Program Kerja yang lebih balance untuk Mahasiswa SK</p></div>
                                      <div class='col-1'><p><b>4</b></p></div>
                                      <div class='col-11'><p>Mahasiswa FIKTI Punya Satu Platform yang terpusat untuk informasi akademis dan nonakademis</p></div>
                                      <div class='col-1'><p><b>5</b></p></div>
                                      <div class='col-11'><p>Mahasiswa FIKTI bisa menjawab kebutuhan industri di era disrupsi yang saat ini terjadi</p></div>
                                      <div class='col-1'><p><b>6</b></p></div>
                                      <div class='col-11'><p>Mahasiswa FIKTI punya relasi yang kuat di setiap maupun antar angkatan</p></div>
                                    </div>";  
                            }elseif ($no_urut == 2) {
                              echo "<div class='row justify-content-center'>
                                      <div class='col-12'><p>Menciptakan BEM FIKTI UG yang bersinergi dan kontributif bagi Mahasiswa FIKTI dalam menjalin langkah untuk bergerak bersama.</p></div>
                                      <div class='col-12'><p>1. Bersinergi</p></div>
                                      <div class='col-12'><p>BEM FIKTI ingin melakukan suatu kolaborasi dengan berbagai stakeholders (himpunan dan komunitas di bawah naungan FIKTI, pihak universitas dan perusahaan) untuk memadukan inovasi dan harapan yang dapat berdampak pada kebermanfaatan bersama.</p></div>
                                      <div class='col-12'><p>2. Kontributif</p></div>
                                      <div class='col-12'><p>BEM FIKTI ingin memberikan perannya sebagai inisiator dan fasilitator dalam pengembangan kemampuan diri Mahasiswa FIKTI maupun masyarakat sekitar.</p></div>
                                      <div class='col-12'><p>3. Bergerak Bersama</p></div>
                                      <div class='col-12'><p>Suatu langkah bersama yang dilakukan oleh BEM FIKTI dengan setiap elemen terkait untuk bersama-sama bergerak mewujudkan suatu kebermanfaatan.</p></div>
                                  </div>";
                            }
                            ?>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <a data-bs-toggle="collapse" data-bs-target="#misi<?=$no_urut?>" class="collapsed"
                            class="font-weight-bold text-white">Misi<i class="bx bx-chevron-down icon-show"></i><i
                              class="bx bx-chevron-up icon-close"></i></a>
                          <div id="misi<?=$no_urut?>" class="collapse">
                            <!-- <p>
                            <?=$misi?>
                            </p> -->

                            <!-- SEMENTARA -->
                            <?php
                            if ($no_urut == 1) {
                              echo "<div class='row justify-content-center'>
                                      <div class='col-12'><p><b>Misi 1</b></p></div>
                                      <div class='col-12'>
                                        <p>Implementasi approaching program kerja sebanyak 25% dengan metode design thinking</p>
                                        <p>Implementasi SCRUM untuk metode eksekusi di program kerja</p>
                                        <p>BPH melakukan risk management assessment setiap bulannya & diadakan sebelum rapat bulanan</p>
                                        <p>Penerapan Business Strategic di setiap stages marketing Funneling di 25% program Kerja</p>
                                      </div>
                                      <div class='col-12'><p><b>Misi 2</b></p></div>
                                      <div class='col-12'>
                                        <p>Pengadaan Grand Design di setiap departemen/biro Dan Integrasi Grand Design dengan AMEC Framework</p>
                                        <p>Usability Testing Grand Design oleh SPI, Kepala Bidang, Ketua/Wakil Ketua BEM FIKTI</p>
                                      </div>
                                      <div class='col-12'><p><b>Misi 3</b></p></div>
                                      <div class='col-12'>
                                        <p>Total Activation User +- 7% mahasiswa SK di seluruh proker</p>
                                      </div>
                                      <div class='col-12'><p><b>Misi 4</b></p></div>
                                      <div class='col-12'>
                                        <p>Total Acquisition & Activation User sebanyak 10% dari total mahasiswa FIKTI</p>
                                        <p>Total Retention 1% Dari Activation users</p>
                                        <p>Rata-Rata Maksimum Respon Users 30 Menit</p>
                                      </div>
                                      <div class='col-12'><p><b>Misi 5</b></p></div>
                                      <div class='col-12'>
                                        <p>Acquisition & Activation User di program kerja career Development sebanyak 100 Customers</p>
                                        <p>Tercapainya 3+ Bootcamp sebagai stakeholders</p>
                                        <p>Tercapainya 10+ Startup Company sebagai stakeholders</p>
                                        <p>Customer berhasil mendapatkan knowledge dan real experience dari outsourcing ke stakeholders</p>
                                      </div>
                                      <div class='col-12'><p><b>Misi 5</b></p></div>
                                      <div class='col-12'>
                                        <p>Participation Rate 90% Dari Angkatan Mahasiswa Baru</p>
                                        <p>CSAT Score</p>
                                      </div>
                                    </div>";  
                            }elseif ($no_urut == 2) {
                              echo "<div class='row justify-content-center'>
                                      <div class='col-1'><p><b>1</b></p></div>
                                      <div class='col-11'><p>Mewujudkan pengembangan dan pemberdayaan SDM BEM FIKTI UG yang profesional dengan menggunakan sistem manajemen yang terorganisir.</p></div>
                                      <div class='col-1'><p><b>2</b></p></div>
                                      <div class='col-11'><p>Menjadi wadah dan fasilitator dalam pengembangan minat bakat baik pada bidang akademik maupun non akademik sebagai penunjang untuk kemampuan Mahasiswa FIKTI pada dunia kerja.</p></div>
                                      <div class='col-1'><p><b>3</b></p></div>
                                      <div class='col-11'><p>Menjalin relasi dan kolaborasi dengan berbagai pihak internal maupun eksternal lingkungan kampus.</p></div>
                                      <div class='col-1'><p><b>4</b></p></div>
                                      <div class='col-11'><p>Mengoptimalkan penyaluran informasi yang lebih informatif, responsif dan faktual serta dapat berperan menjadi wadah penyalur aspirasi bagi Mahasiswa FIKTI UG yang terpercaya.</p></div>
                                    </div>";
                            }
                            ?>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
        
                </div>
              </div>
            </div>
          </div>
          <?php 
            };
          ?>
        </div>
      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">

          <div class="info">
            <div class="row justify-content-center">

              <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <a
                    href="https://www.google.com/maps/place/Universitas+Gunadarma+Kampus+D/@-6.3910528,106.8208827,14z/data=!4m9!1m2!2m1!1sgunadarma+depok!3m5!1s0x2e69ec11a33cd819:0x12ea682c158bc87d!8m2!3d-6.3686462!4d106.8333099!15sCg9ndW5hZGFybWEgZGVwb2uSAQp1bml2ZXJzaXR5">
                    <p>Jl. Margonda Raya No.345c, Depok, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>pemirafikti2022@gmail.com</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="https://www.instagram.com/pemira_fiktiug/">
                  <div class="phone">
                    <i class="bi bi-instagram"></i>
                    <h4>Instagram</h4>
                    <p>@pemira_fiktiug</p>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Maintained By Biro <strong><span>PTI</span></strong> &copy;2020/2021
      </div>
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <!-- <script type="text/javascript">
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
  </script> -->
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/carousel-custom/js/jquery.min.js"></script>
  <script src="../../assets/carousel-custom/js/popper.js"></script>
  <script src="../../assets/carousel-custom/js/bootstrap.min.js"></script>
  <script src="../../assets/carousel-custom/js/owl.carousel.min.js"></script>
  <script src="../../assets/carousel-custom/js/main.js"></script>

</body>

</html>