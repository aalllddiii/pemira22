<?php
    session_start();
    include "../../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['npm'])) {
    
    } else {
      echo "<script>alert('Login Dulu ya'); 
      location.href='../../login-form.php';</script>";
    }

    $sqlselect = mysqli_query($con, "SELECT * FROM pas_datas WHERE npm = '$_SESSION[npm]' ");
    $sqlselectdatas = mysqli_query($con, "SELECT * FROM pas_datas WHERE npm = '$_SESSION[npm]' ");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PASLON</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/images/LOGO3.png" rel="icon">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">PASLON</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="berkas.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Berkas</span></a>
            </li>
            <hr class="sidebar-divider mb-0">

            <li class="nav-item">
                <a class="nav-link" href="config/logout.php">
                    <i class="fa fa-fw fa-sign-out"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h5 class="font-weight-bold text-primary">Selamat Datang Calon Ketua Umum & Wakil Ketua Umum BEM FIKTI UG 2022-2023</h5>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                            
                    while($datas = mysqli_fetch_array($sqlselectdatas)){
                        $ketum = $datas['ketum'];
                        $waketum = $datas['waketum'];
                        $fotbar = $datas['fotbar'];
                        $visi = $datas['visi'];
                        $misi = $datas['misi'];
                        if ($ketum != NULL) { ?>
                        <div class="card shadow mb-1 mt-n3 bg-primary">
                            <h3 class="pl-2 pt-2 font-weight-bold text-white"><?php echo $ketum; ?> & <?php echo $waketum; ?></h3>
                        </div>
                        <div class="row">
                        <?php
                            while($datas = mysqli_fetch_array($sqlselect)){
                            $ketum = $datas['ketum'];
                            $waketum = $datas['waketum'];
                            $foto = $datas['fotbar'];
                            $visi = $datas['visi'];
                            $misi = $datas['misi'];
                            $no_urut = $datas['no_urut'];
                            $validations = $datas['validations'];
                        ?>
                        <!-- Content Column -->

                        <div class="col-lg-5">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-2">
                                <img src="assets/fotocalon/<?php echo $foto; ?>" class="w-100" style="height: 430px;">
                            </div>

                            <div class="card shadow mb-2">
                            <h6 class="pl-2 pt-2 font-weight-bold text-primary">Upload Foto Pasangan Calon</h6>
                            <form action="config/update-foto.php" method="post" enctype="multipart/form-data">
                                <input type="npm" name="npm" value="<?php echo $_SESSION['npm']; ?>" hidden>
                                <input type="file" name="fotbar" class="ml-2" required>
                                <button name="update" type="submit" class="btn btn-primary col-5 my-2 ml-2">Upload</button>
                            </form>
                            </div>

                        </div>

                        <div class="col-lg-7 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-2">
                                <div class="card border-left-primary shadow">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xl  font-weight-bold text-primary text-uppercase mb-1">
                                                    NO URUT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$no_urut == 0? '(belum mendapatkan nomor urut paslon)' : '0'.$no_urut ;?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-check-circle fa-2x text-<?=$validations == 1? 'success': '';?>"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-2">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">VISI</h6>
                                </div>
                                <div class="card-body">
                                    <p style="color: black;"><?php echo $visi; ?></p>
                                </div>
                            </div>
                            <div class="card shadow mb-2">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">MISI</h6>
                                </div>
                                <div class="card-body">
                                    <p><?php echo $misi; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <a href="edit-data.php?npm=<?php echo $_SESSION['npm'];?>" class="btn btn-primary col-12 mb-4 mt-1" role="button">Edit Data</a>
                    
                    <?php } else { ?>
                    <form action="config/vismis-upload.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="card col-12 mb-3 mt-3 py-3">
                                <h5 class="card-title">Data Pasangan Calon</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="npm" class="form-control"
                                            value="<?php echo $_SESSION['npm']; ?>" hidden>
                                        <input type="text" name="ketum" class="form-control" placeholder="Ketua Umum" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="waketum" class="form-control"
                                            placeholder="Wakil Ketua Umum" required>
                                    </div>
                                    <!-- <div class="col-12 mt-3">
                                        Foto Pasangan Calon Ketua dan Wakil <br>
                                        <input type="file" name="fotbar" required>
                                    </div> -->
                                </div>
                            </div>

                            <div class="card col-12 mb-3 mt-2">
                                <div class="card-body">
                                    <h5 class="card-title">Tuliskan Visi kalian disini</h5>
                                    <textarea name="visi" class="w-100" style="height: 100px;" required></textarea>
                                </div>
                            </div>

                            <div class="card col-12">
                                <div class="card-body">
                                    <h5 class="card-title">Tuliskan Misi kalian disini</h5>
                                    <textarea name="misi" class="w-100" style="height: 200px; " required></textarea>
                                    <h6>catatan : <br>
                                        - Misi 1
                                        <br>
                                        &lt;br&gt;
                                        <br>
                                        - Misi 2
                                    </h6>
                                    <hr>
                                    <h6>Gunakan tag &lt;br&gt; Untuk memisahkan per point </h6>
                                </div>
                            </div>

                            <button name="submit" type="submit"
                                class="btn btn-primary col-6 mt-4 mb-4 float-right">Submit</button>
                        </div>
                    </form>
                    <?php } ?>
                    <!-- Content Row -->
                    <?php } ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="fixed-bottom bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>