<?php
include "includes/connection.php";

$kodeKelas = $_POST['k_kelas'];
$kelas = $_POST['kelas'];
$wali = $_POST['w_kelas'];

$simpan = mysqli_query($koneksi, "UPDATE master_kelas SET kelas = '$kelas', wali_kelas = '$wali' WHERE kode_kelas='$kodeKelas'");

if($simpan == 1){
    echo '<script> alert("Data terupdate"); window.location.href = "master_kelas.php"; </script>';
}else{
    echo '<script> alert("Data gagal terupdate"); window.location.href = "form_edit_kelas.php" </script>';
}
?>