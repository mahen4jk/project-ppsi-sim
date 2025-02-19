<?php
include "includes/connection.php";

$KCI = $_GET['kci'];

$delete = mysqli_query($koneksi, "DELETE FROM nilai_calon_siswa where kode_calon_siswa='$KCI'");

if($delete == 1){
    echo '<script> alert("Data berhasil dihapus!"); window.location.href = "seleksi.php"; </script>';
}else{
    echo '<script> alert("Data gagal dihapus"); window.location.href = "seleksi.php"; </script>';
}

?>