<?php
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $npm        = mysqli_real_escape_string($con, $_POST['npm']);
        $nama       = mysqli_real_escape_string($con, $_POST['nama']);
        $kelas      = mysqli_real_escape_string($con, $_POST['kelas']);
        $kandidat   = mysqli_real_escape_string($con, $_POST['kandidat']);
        $day        = mysqli_real_escape_string($con, $_POST['day']);

        $cek = mysqli_query($con, "SELECT * FROM vote_data WHERE npm = $npm");
        
        if ( mysqli_num_rows($cek) > 0) {
            echo "<script>alert('Maaf, anda sudah melakukan voting sebelumnya'); 
                  location.href='../Has-Login/votes/';</script>";
        }

        $sqlinsert = mysqli_query($con, "INSERT INTO vote_data (npm, nama, kelas, kandidat, `day`) VALUES ('$npm', '$nama', '$kelas', '$kandidat', '$day') ");

        echo "<script>alert('Terimakasih telah ikut serta dalam pemilihan'); 
            location.href='../Has-Login/votes/';</script>";
    }

?>