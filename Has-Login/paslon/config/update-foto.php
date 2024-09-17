<?php

    include "../../../config/koneksi.php";

    $npm = mysqli_real_escape_string($con, $_POST['npm']);

    $foto = $_FILES['fotbar']['name'];
    $file_tmp = $_FILES['fotbar']['tmp_name'];
	
    $a = mysqli_query($con, "SELECT fotbar FROM pas_datas WHERE npm='$npm' "); //untuk melihat apa yang mw di hapus
    $cek = mysqli_fetch_assoc($a); //untuk menampilkan apa yang ada pada $a

    if($cek['fotbar'] !== "none-profile.png"){
        
        $folder = "../assets/fotocalon/$cek[fotbar]"; //nama folder dan nama foto yag akan di hapus
        unlink($folder); //di gunakan untuk menghapus data yang ada di dlam folder 
        
        // $del=mysqli_query($con, "DELETE fotbar FROM pas_datas WHERE npm='$npm' ");  //untuk menghapus data yang di inginkan

    }

	
	$update = mysqli_query($con, "UPDATE pas_datas SET fotbar='$foto' 
	WHERE npm='$npm' ");

    if (isset($_POST['update']) ){
        @move_uploaded_file($file_tmp, "../assets/fotocalon/".$foto);

        if ($update){
			echo"<script>alert('Foto Berhasil Di Ubah');
            location.href='../';</script>";
		}else{
            echo"<script>alert('Foto Gagal Di Ubah');
            location.href='../';</script>";
        }
    }

    if(isset($_POST['upload_foto_formal'])) {
        $nomor_acak = round(microtime(true));
        $foto_formal = $_FILES['foto_formal']['name'];
        $tipe_file_foto_formal = $_FILES['foto_formal']['type'];
        $file_tmp_foto_formal = $_FILES['foto_formal']['tmp_name'];
        
        $foto_formal_baru = $nomor_acak. '_' .$foto_formal;
        $a = mysqli_query($con, "SELECT foto_formal FROM `berkas` WHERE email='$email' ");
        $cek = mysqli_fetch_assoc($a);
        
        if ($cek['foto_formal'] != NULL) {
            $folder = "../../requirement/foto_formal/$cek[foto_formal]";
            unlink($folder);
            $del=mysqli_query($con, "DELETE foto_formal FROM `berkas` WHERE email='$email' ");
            
            if($tipe_file_foto_formal == "image/jpeg" || $tipe_file_foto_formal == "image/png" || $tipe_file_foto_formal == "image/jpg"){
                $update_foto_formal = mysqli_query($con, "UPDATE `berkas` SET `foto_formal`= '$foto_formal_baru' WHERE email = '$email' ");
                @move_uploaded_file($file_tmp_foto_formal, "../../requirement/foto_formal/".$foto_formal_baru);
            
                if ($update_foto_formal) {
                    echo"<script>alert('foto_formal berhasil upload');
                    location.href='../pages/berkas/Berkas-berkas/';</script>";
                }else{
                    echo"<script>alert('foto_formal gagal di upload');
                    location.href='../pages/berkas/Berkas-berkas/';</script>";
                }
            }else{
                echo"<script>alert('Maaf format file foto_formal selain pdf tidak di dukung');
                location.href='../pages/berkas/Berkas-berkas/';</script>";
            }
        }else {
            if($tipe_file_foto_formal == "image/jpeg" || $tipe_file_foto_formal == "image/png" || $tipe_file_foto_formal == "image/jpg"){
                $update_foto_formal = mysqli_query($con, "UPDATE `berkas` SET `foto_formal`= '$foto_formal_baru' WHERE email = '$email' ");
                @move_uploaded_file($file_tmp_foto_formal, "../../requirement/foto_formal/".$foto_formal_baru);
            
                if ($update_foto_formal) {
                    echo"<script>alert('Foto formal berhasil upload');
                    location.href='../pages/berkas/Berkas-berkas/';</script>";
                }else{
                    echo"<script>alert('Foto formal gagal di upload');
                    location.href='../pages/berkas/Berkas-berkas/';</script>";
                }
            }else{
                echo"<script>alert('Maaf format file Foto formal selain pdf tidak di dukung');
                location.href='../pages/berkas/Berkas-berkas/';</script>";
            }   
        }
    }
?>