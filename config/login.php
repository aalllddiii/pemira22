<?php
    session_start();
    include "koneksi.php";
    require_once ('cUrl.php');

    if (isset($_POST['submit'])) {

        sleep(1.5);
        if (isset($_POST['u']) && isset($_POST['p'])) {
            date_default_timezone_set("Asia/Jakarta");
            $hasil = login_data($_POST['u'], $_POST['p']);
            $hhn = json_decode($hasil, true);
            if ($hhn['status'] == 'failed') {
                $yah = '
                    <div class="alert alert-danger">
                    <strong>Maaf!</strong> username dan password anda salah
                    </div>
                ';
            }else{
                $nama = $hhn['nama'];
                $npm = $hhn['npm'];
                $email = $hhn['email'];
                $angkatan = $hhn['angkatan'];
                $tingkat = 2021 - $angkatan;
                $jurusan = substr($npm,0,1);
                $kelas = $hhn['kelas'];
                $kode_jurusan = substr($kelas,1,2);
                $ibu = $hhn['ibu'];

                echo "Nama Kamu adalah $nama <br>";
                echo "NPM Kamu adalah $npm <br>";
                echo "Email Kamu adalah $email <br>";
                echo "Angkatan Kamu adalah $angkatan <br>";
                echo "Kamu Adalah Tingkat $tingkat <br>";
                echo "Kamu ada di kelas $kelas <br>";
                echo "kode jurusan kamu $kode_jurusan <br>";
                echo "Ibu $ibu <br>";
                
                if($jurusan = 1){
                    echo "Jurusan kamu Sistem Informsi";
                }else{
                    echo "Jurusan kamu Sistem Komputer";
                }
                
                // $_SESSION['nama'] = $nama;
                $_SESSION['nama'] = $_POST['n'];
                $_SESSION['npm'] = $npm;
                $_SESSION['email'] = $email;
                $_SESSION['angkatan'] = $angkatan;
                // $_SESSION['kelas'] = $kelas;
                $_SESSION['kelas'] = $_POST['k'];
                header("Location: ../Has-Login/votes/");

            }

        }
    }
?>