<?php
include "includes/connection.php";

$KCI = $_POST['kode-siswa'];
$nm_lengkap = $_POST['nama-lengkap-siswa'];
$tp_lahir = $_POST['tempat-lahir-siswa'];
$agama = $_POST['agama'];
$tl_lahir = $_POST['tanggal-lahir-siswa'];
$umur = $_POST['umur-siswa'];
$alamat = $_POST['alamat-siswa'];
$jkel = $_POST['jenis-kelamin-siswa'];
$kewarganegaraan = $_POST['kewarganegaraan-siswa'];
$tinggal_dengan = $_POST['tinggal-dengan'];
$jml_saudara = $_POST['jumlah-saudara-siswa'];
$anak_ke = $_POST['anak-ke'];
$jarak_sekolah = $_POST['jarak-ke-sekolah'];
$transportasi = $_POST['transportasi-siswa'];
$saudara_satu_sekolah = $_POST['nama-saudara-satu-sekolah'];
$asal_sekolah = $_POST['asal-sekolah-siswa'];
$tinggi = $_POST['tinggi-badan-siswa'];
$berat = $_POST['berat-badan-siswa'];
$gol_darah = $_POST['golongan-darah-siswa'];
$penyakit = $_POST['riwayat-penyakit-siswa'];
$status = $_POST['status-siswa'];

$simpan = mysqli_query($koneksi, "INSERT INTO data_calon_siswa VALUES ('$KCI','$nm_lengkap','$tp_lahir','$agama','$tl_lahir',
'$jarak_sekolah', '$transportasi', '$saudara_satu_sekolah', '$asal_sekolah', '$tinggi', '$berat', '$gol_darah',
'$penyakit', '$status')");
header("location:pendaftaran.php");

?>