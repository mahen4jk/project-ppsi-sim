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

$edit = mysqli_query($koneksi, "UPDATE data_calon_siswa SET
                                kode_calon_siswa='$KCI',
                                nama_lengkap_calon_siswa='$nm_lengkap',
                                tempat_lahir_siswa='$tp_lahir',
                                agama_siswa='$agama',
                                tanggal_lahir_siswa='$tl_lahir',
                                umur='$umur',
                                alamat_siswa='$alamat',
                                jenis_kelamin_siswa='$jkel',
                                kewarganegaraan='$kewarganegaraan',
                                tinggal_dengan='$tinggal_dengan',
                                jumlah_saudara_kandung='$jml_saudara',
                                anak_ke='$anak_ke',
                                jarak_ke_sekolah='$jarak_sekolah',
                                transportasi_siswa='$transportasi',
                                nama_saudara_satu_sekolah='$saudara_satu_sekolah',
                                asal_sekolah='$asal_sekolah',
                                tinggi_badan_siswa='$tinggi',
                                berat_badan_siswa='$berat',
                                golongan_darah_siswa='$gol_darah',
                                penyakit_diderita_siswa='$penyakit',
                                status_siswa='$status' where kode_calon_siswa='$KCI'");

if($edit == 1){
    echo '<script> alert("Data terupdate"); window.location.href = "pendaftaran.php"; </script>';
}else{
    echo '<script> alert("Data gagal terupdate"); window.location.href = "edit_pendaftaran.php"; </script>';
}

?>