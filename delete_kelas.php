<?php
include "includes/connection.php";

$hapus = mysqli_query($koneksi, "DELETE FROM master_kelas WHERE kode_kelas= '".$_GET['k_kelas']."' ");

if($hapus == 1){
    echo '<script> alert("Data terhapus"); window.location.href = "master_kelas.php"; </script>';
}else{
    echo '<script> alert("Data gagal terhapus"); window.location.href = "master_kelas.php"; </script>';
}
?>