<?php
include "includes/connection.php";
$hapus = mysqli_query($koneksi, "DELETE FROM data_guru WHERE kd_guru= '".$_GET['kd_guru']."' ");

if($hapus == 1){
    echo '<script> alert("Data terhapus"); window.location.href = "data_guru.php"; </script>';
}else{
    echo '<script> alert("Data gagal terhapus"); window.location.href = "data_guru.php"; </script>';
}
?>