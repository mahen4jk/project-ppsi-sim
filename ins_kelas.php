<?php
include "includes/connection.php";

$kodeKelas = $_POST['k_kelas'];
$kelas = $_POST['kelas'];
$wali = $_POST['w_kelas'];

$simpan = mysqli_query($koneksi, "INSERT INTO master_kelas values('$kodeKelas','$kelas','$wali',current_timestamp(),current_timestamp())");
header("location:master_kelas.php");
?>