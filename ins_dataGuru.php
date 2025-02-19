<?php
include "includes/connection.php";

$NIP = $_POST['NIP'];
$nm_lengkap = $_POST['nm_lengkap'];
$kd_guru = $_POST['kode_guru'];
$tp_lahir = $_POST['tp_lahir'];
$tl_lahir = $_POST['tl_lahir'];
$j_kelamin = $_POST['j_kelamin'];
$alamat = $_POST['alamat'];
$role = $_POST['role'];
$h_perJam = $_POST['h_perJam'];
$username = $_POST['username'];
$password = $_POST['password'];
$m_tugas = $_POST['mulai_tugas'];

$simpan = mysqli_query($koneksi, "INSERT INTO data_guru VALUES ('$NIP','$nm_lengkap','$kd_guru','$tp_lahir','$tl_lahir','$j_kelamin',
'$alamat','$h_perJam','$role','$username','$password','$m_tugas',current_timestamp(),current_timestamp())");
header("location:data_guru.php");

?>