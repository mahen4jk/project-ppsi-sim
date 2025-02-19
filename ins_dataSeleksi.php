<?php
include "includes/connection.php";


$KCI = $_POST['kode-calon-siswa'];
$nm_lengkap = $_POST['nama-lengkap-siswa'];
$bi = $_POST['nilai-bi'];
$mtk = $_POST['nilai-mtk'];
$ipa = $_POST['nilai-ipa'];
$yaudahiya = $bi+$mtk+$ipa;
$rata_rata = $yaudahiya/3;
$zonasi = $_POST['jarak-zonasi'];

$ekstensi_diperbolehkan = array('png', 'jpg');
$nama_file = $_FILES['upload-prestasi']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['upload-prestasi']['size'];
$file_tmp = $_FILES['upload-prestasi']['tmp_name'];

move_uploaded_file($file_tmp, 'file/'.$nama_file);

$jumlah = $bi+$mtk+$ipa;
$total = $jumlah/3;
$rata_rata = $total;

$simpan = mysqli_query($koneksi, "INSERT INTO nilai_calon_siswa VALUES ('$KCI','$nm_lengkap','$bi','$mtk','$ipa','$rata_rata','$zonasi','$nama_file')");

if($simpan){
    header("location:seleksi.php");
    }else{
    echo mysqli_error($koneksi);
        }

?>