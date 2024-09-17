<?php
    session_start();
    include "../../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['username'])) {
    
    } else {
      echo "<script>alert('Login Dulu ya'); 
      location.href='../login-admin.php';</script>";
    }

    $sqlselectpaslon = mysqli_query($con, " SELECT pas_berkas.*, pas_datas.* FROM pas_datas 
                                            JOIN pas_berkas ON pas_datas.npm = pas_berkas.npm ");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/images/LOGO3.png" rel="icon">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="votedata.php">
                    <i class="fas fa-fw fa-th"></i>
                    <span>Vote data</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="calon.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Calon</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="akun.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Akun</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="hasil.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Hasil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block mb-0">

            <li class="nav-item">
                <a class="nav-link" href="../../config/logout.php">
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

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Calon</h1>
                    </div>

                    <!-- Content Row -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Ketum</th>
                                <th class="text-center">Waketum</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Berkas</th>
                                <th class="text-center">Validasi</th>
                                <th class="text-center">No urut</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($data = mysqli_fetch_array($sqlselectpaslon)) {
                            $npm            = $data['npm'];
                            $ketum          = $data['ketum'];
                            $waketum        = $data['waketum'];   
                            $foto           = $data['fotbar'];
                            $berkas         = $data['berkas'];
                            $validations    = $data['validations'];
                            $no_urut        = $data['no_urut'];
                        ?>
                            <tr>
                                <td class="text-center" style="font-size: 15pt;"><?php echo $npm; ?></td>
                                <td class="text-center" style="font-size: 15pt;"><?php echo $ketum; ?></td>
                                <td class="text-center" style="font-size: 15pt;"><?php echo $waketum; ?></td>
                                <td class="text-center" style="font-size: 15pt;"><img src="../paslon/assets/fotocalon/<?php echo $foto; ?>" style="width: 150px;"></td>
                                <td class="text-center" style="font-size: 15pt;"><a href="../paslon/assets/berkaspaslon/<?php echo $berkas; ?>" download><?php echo $berkas; ?></a></td>
                                <td class="text-center" style="font-size: 15pt;"><?= $validations == 0 ? "<b style = 'color: red;'>NOT VALID</b>" : "<b style = 'color: blue;'>VALID</b>" ; ?></td>
                                <td class="text-center">
                                    <form action="./update-opsi.php" method="get">
                                        <input type="text" name="npm" value="<?=$npm?>" hidden>
                                        <input type="text" name="no_urut" value="<?=$no_urut == 0? '' : $no_urut;?>" <?=$no_urut != 0? 'disabled' : '' ;?> size="1" class="mb-2" pattern="[0-9]{1}" style="text-align:center;">
                                        <?php
                                            if ($no_urut == 0) {
                                                echo "<button type='submit' class='btn btn-small btn-primary' onclick='return confirm('Nomor urut paslon\n !!!!! TIDAK DAPAT DIRUBAH !!!!! \napakah anda yakin?')'>ubah</button>";
                                            }else{
                                                echo "";
                                            }
                                        ?>
                                        
                                    </form>
                                </td>
                                <td class="text-center" style="font-size: 15pt;">
                                    |<a style="color:<?= $validations == 0 ? '' : 'red'; ?>;" href="./update-opsi.php?v=<?=$validations?>&npm=<?=$npm?>"><?= $validations == 0 ? 'Validasi' : 'Unvalidasi';?></a>|
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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