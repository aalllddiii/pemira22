<?php
    session_start();
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        
        $username = mysqli_real_escape_string($con, $_POST['u']);
        $password = mysqli_real_escape_string($con, $_POST['p']);
        // $password = md5($_POST['password']);
        
        // menyeleksi data admin dengan username dan password yang sesuai
        $query = mysqli_query($con, "SELECT * FROM pas_akun WHERE username = '$username' AND password = md5('$password') ");
    
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);
        
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['npm'] = $data['npm'];
            
            echo "<script>alert('Selamat Datang'); 
            location.href='../Has-Login/paslon/';</script>";
        }else{
            echo "<script>alert('akun salah'); 
            location.href='../login-form.php';</script>";
        }
    }

?>