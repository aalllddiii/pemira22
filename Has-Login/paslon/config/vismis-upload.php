<?php
    session_start();
    include "../../../config/koneksi.php";

    $npm = mysqli_real_escape_string($con, $_POST['npm']);
    $ketum = mysqli_real_escape_string($con, $_POST['ketum']);
    $waketum = mysqli_real_escape_string($con, $_POST['waketum']);
    $visi = mysqli_real_escape_string($con, $_POST['visi']);
    $misi = mysqli_real_escape_string($con, $_POST['misi']);
    $validations = 0;

    // $fotbar = $_FILES['fotbar']['name'];
    // $file_tmp = $_FILES['fotbar']['tmp_name'];

    if (isset($_POST['submit'])) {
        // @move_uploaded_file($file_tmp, "../assets/fotocalon/".$fotbar);

        $apdet = mysqli_query($con, "UPDATE pas_datas 
        SET npm='$npm', ketum='$ketum', waketum='$waketum', visi='$visi', misi='$misi', validations='$validations'
        WHERE npm = '$npm'
        ");

        if ($apdet) {
            echo "<script>alert('Data sudah di update'); 
            location.href='../';</script>";
        }else{
            echo "<script>alert('Data Gagal Update'); 
            location.href='../';</script>";
        }
    }
?>