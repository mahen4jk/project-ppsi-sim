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

$simpan = mysqli_query($koneksi, "UPDATE data_guru SET NIP = '$NIP',nm_lengkap='$nm_lengkap',tm_lahir='$tp_lahir', tl_lahir='$tl_lahir', j_kelamin='$j_kelamin',
alamat='$alamat', h_perJam='$h_perJam', role='$role', username='$username', password='$password', m_tugas='$m_tugas' where kd_guru='$kd_guru'");

if($simpan == 1){
    echo '<script> alert("Data terupdate"); window.location.href = "data_guru.php"; </script>';
}else{
    echo '<script> alert("Data gagal terupdate"); window.location.href = "edit_guru.php"; </script>';
}

?>