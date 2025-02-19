<?php
include "includes/connection.php";

$hapus = mysqli_query($koneksi, "DELETE FROM mapel WHERE kode_mapel= '".$_GET['kode_mapel']."' ");

if($hapus == 1){
    echo '<script> alert("Data terhapus"); window.location.href = "matpel.php"; </script>';
}else{
    echo '<script> alert("Data gagal terhapus"); window.location.href = "matpel.php"; </script>';
}

?>

