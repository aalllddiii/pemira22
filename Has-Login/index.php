<?php
    session_start();
    include "../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['npm'])) {
    
    } else {
      echo "<script>alert('Login Dulu ya'); 
      location.href='../login-form.php';</script>";
    }
?>