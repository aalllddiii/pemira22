<?php
    session_start();
    include "../../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['username'])) {
    
    } else {
      echo "<script>alert('Login Dulu ya'); 
      location.href='../login-admin.php';</script>";
    }

    $sqld1 = "SELECT * FROM vote_data WHERE `day` = 1";
    $resultd1 = mysqli_query($con, $sqld1);

    $sqld2 = "SELECT * FROM vote_data WHERE `day` = 2";
    $resultd2 = mysqli_query($con, $sqld2);
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

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <style>
        .day1, .day2{
            display: none;
        }
    </style>
</head>

<body id="page-top" onload="day2()">

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

            <li class="nav-item active">
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
            <li class="nav-item">
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
                        <h1 class="h3 mb-0 text-gray-800">Data Voting</h1>
                    </div>

                    <!-- Content Row -->
                    <button onclick="day1()" class="mx-1 btn btn-sm btn-outline-dark active" id="btn-text-1">day 1</button>
                    <button onclick="day2()" class="mx-1 btn btn-sm btn-outline-dark active" id="btn-text-2">day 2</button>
                    <br><br>

                    <div id="day1" class="day1 card p-4">
                        <h3 class="text-dark">Day 1</h3>
                        <table id="example1" class="table display table-striped-light" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">NPM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            while ($row = mysqli_fetch_assoc($resultd1)){
                            ?>
                                <tr>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['npm']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['nama']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['kelas']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['kandidat']?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div id="day2" class="day2 card p-4">
                        <h3 class="text-dark">Day 2</h3>
                        <table id="example2" class="table display table-striped-light" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">NPM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            while ($row = mysqli_fetch_assoc($resultd2)){
                            ?>
                                <tr>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['npm']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['nama']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['kelas']?></td>
                                    <td class="text-center" style="font-size: 15pt;"><?=$row['kandidat']?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

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



    <!-- datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example1').DataTable( {
            dom: 'Bfrtip',
            lengthMenu: [
                [ 10, 25, 50, 100, -1 ],
                [ '10 rows', '25 rows', '50 rows', '100 rows', 'Show all' ]
            ],
            buttons: [
                'pageLength',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
    $(document).ready(function() {
        $('#example2').DataTable( {
            dom: 'Bfrtip',
            lengthMenu: [
                [ 10, 25, 50, 100, -1 ],
                [ '10 rows', '25 rows', '50 rows', '100 rows', 'Show all' ]
            ],
            buttons: [
                'pageLength',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
    </script>

    <script>
        function day1(){
            document.getElementById("day1").style.display= "block";
            document.getElementById("day2").style.display= "none";
        }
        function day2(){
            document.getElementById("day1").style.display= "none";
            document.getElementById("day2").style.display= "block";
        }
    </script>

</body>

</html>