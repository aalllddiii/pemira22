<?php
    session_start();
    session_destroy();

    echo "<script>alert('Terimakasih'); 
            location.href='../../../';</script>";

?>