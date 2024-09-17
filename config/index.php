<?php
    session_start();
    include "../config/koneksi.php";

    if (isset($_SESSION['npm'])) {
    
    } else {
      echo "<script>alert('Anda siapa masuk kesini'); 
      location.href='../';</script>";
    }
?>