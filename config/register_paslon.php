<?php
    include "koneksi.php";
    
    if (isset($_POST['submit'])) {
        $npm = mysqli_real_escape_string($con, trim($_POST['npm']));
        $username = mysqli_real_escape_string($con, trim($_POST['username']));
        $password = mysqli_real_escape_string($con, MD5($_POST['password']));
        $validations = 0;

        $cek = mysqli_query($con, "SELECT * FROM pas_akun WHERE `npm` = '$npm' OR `username` = '$username'");

        if (mysqli_num_rows($cek) > 0 ) {
            echo "<script>alert('NPM / username tidak dapat digunakan'); 
            location.href='../form-paslon-regis.php';</script>";
            die;
        }


        $sql = "INSERT INTO `pas_akun`(`npm`, `username`, `password`) VALUES ('$npm', '$username', '$password');";
        $sql .= "INSERT INTO `pas_datas`(`npm`, `fotbar`, `validations`) VALUES ('$npm', 'none-profile.png', '$validations');";
        $sql .= "INSERT INTO `pas_berkas`(`npm`) VALUES ('$npm')";

        if (!preg_match("/^[0-9]*$/", $npm)) {
            echo "<script>alert('Input NPM hanya angka yang diijinkan, dan tidak boleh menggunakan Huruf dan spasi ...!'); 
                    location.href='../form-paslon-regis.php';</script>";
        }else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                echo "<script>alert('Input Username hanya huruf dan angka yang diijinkan, dan tidak boleh menggunakan spasi ...!'); 
                    location.href='../form-paslon-regis.php';</script>";
        }else{
            $queries = mysqli_multi_query($con, $sql);
            if ($queries) {
                echo "<script>alert('Daftar Sukses, Silahkan Login'); 
                location.href='../login-form.php';</script>";
            }
            // else {
            //     echo "<script>alert('NPM Sudah Terdaftar'); 
            //     location.href='../form-paslon-regis.php';</script>";
            // }
        }
    }

?>