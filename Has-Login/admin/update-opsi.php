<?php
    include "../../config/koneksi.php";
    
    if (isset($_GET['v'])) {
        $validations = htmlspecialchars($_GET['v']);
        $npm = htmlspecialchars($_GET['npm']);

        if ($validations != 1) {
            $change = 1;
        }else{
            $change = 0;
        }

        $sql = "UPDATE `pas_datas` SET `validations` = $change WHERE `npm` = $npm";

        $update = mysqli_query($con, $sql);

        if ( mysqli_affected_rows($con) > 0 ) {
            echo "<script>alert('Data telah diubah'); 
                  location.href='./calon.php';</script>";
        }else{
            echo "<script>alert('Data gagal diubah'); 
                  location.href='./calon.php';</script>";
        }
    }

    if (isset($_GET['no_urut'])) {
        $no_urut = htmlspecialchars($_GET['no_urut']);
        $npm = htmlspecialchars($_GET['npm']);

        $sql = "UPDATE `pas_datas` SET `no_urut` = $no_urut WHERE `npm` = $npm";

        $update = mysqli_query($con, $sql);

        if ( mysqli_affected_rows($con) > 0 ) {
            echo "<script>alert('Data telah diubah'); 
                  location.href='./calon.php';</script>";
        }else{
            echo "<script>alert('Data gagal diubah'); 
                  location.href='./calon.php';</script>";
        }
    }

?>