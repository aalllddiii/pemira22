<?php
    session_start();
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        // menyeleksi data admin dengan username dan password yang sesuai
        $query = mysqli_query($con, "SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = PASSWORD('$password') ");
    
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);
        
        if($cek > 0){
            $_SESSION['username'] = $username;
            
            echo "<script>alert('Selamat Datang'); 
            location.href='../Has-Login/admin/';</script>";
        }else{
            echo "<script>alert('akun salah'); 
            location.href='../Has-Login/login-admin.php';</script>";
        }
    }

?>