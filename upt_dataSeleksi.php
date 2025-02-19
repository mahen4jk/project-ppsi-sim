<?php
include "includes/connection.php";

$kci = $_POST['kode-calon-siswa'];
$nm_lengkap = $_POST['nama-lengkap'];
$bi = $_POST['nilai-bi'];
$mtk = $_POST['nilai-mtk'];
$ipa = $_POST['nilai-ipa'];
$zonasi = $_POST['jarak-zonasi'];
$nama_file = $_FILES['upload-prestasi']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['upload-prestasi']['size'];
$file_tmp = $_FILES['upload-prestasi']['tmp_name'];

if ($nama_file){
    move_uploaded_file($file_tmp, 'file/'.$nama_file);
    $edit = mysqli_query($koneksi, "UPDATE nilai_calon_siswa SET kode_calon_siswa='$kci', nama_calon_siswa='$nm_lengkap',
    nilai_bi='$bi', nilai_mtk='$mtk', nilai_ipa='$ipa' , jarak_rumah_ke_sekolah='$zonasi', file_prestasi='$nama_file' where kode_calon_siswa='$kci'");
}else {
    $edit = mysqli_query($koneksi, "UPDATE nilai_calon_siswa SET kode_calon_siswa='$kci', nama_calon_siswa='$nm_lengkap',
    nilai_bi='$bi', nilai_mtk='$mtk', nilai_ipa='$ipa' , jarak_rumah_ke_sekolah='$zonasi' where kode_calon_siswa='$kci'");
}


if($edit == 1){
    echo '<script> alert("Data terupdate"); window.location.href = "seleksi.php"; </script>';
}else{
    echo '<script> alert("Data gagal terupdate"); window.location.href = "edit_seleksi.php"; </script>';
}

?>