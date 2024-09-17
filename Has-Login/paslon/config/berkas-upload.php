<?php
    session_start();
    include "../../../config/koneksi.php";

    $npm = mysqli_real_escape_string($con, $_POST['npm']);

    $berkas = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    if (isset($_POST['submit'])) {
        @move_uploaded_file($file_tmp, "../assets/berkaspaslon/".$berkas);

        $apdet = mysqli_query($con, "UPDATE pas_berkas SET berkas='$berkas' WHERE npm = '$npm' ");

        if ($apdet) {
            echo "<script>alert('Berkas telah diinput'); 
            location.href='../';</script>";
        }else{
            echo "<script>alert('Berkas Gagal Input'); 
            location.href='../';</script>";
        }
    }
?>