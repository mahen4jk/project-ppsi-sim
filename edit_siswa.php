<?php
include "includes/connection.php";

$nis = $_POST['nis'];
$nm_siswa = $_POST['nm_siswa'];
$kd_siswa = $_POST['kd_siswa'];
$agm_siswa = $_POST['agm_siswa'];
$tp_lahirsiswa = $_POST['tp_lahir_siswa'];
$tl_lahirsiswa = $_POST['tl_lahir_siswa'];

$j_kelaminsiswa = $_POST['j_kelamin_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];
$asal_sekolah = $_POST['asal_sekolah'];

$gol_darah = $_POST['gol_darah'];
$penyakit_diderita = $_POST['penyakit_diderita'];
$status = $_POST['status'];
$tahun_ajaran = $_POST['tahun_ajaran'];

$username = $_POST['username'];
$password = $_POST['password'];

$simpan = mysqli_query($koneksi, "UPDATE data_siswa SET nm_siswa = '$nm_siswa', kd_siswa = '$kd_siswa', agm_siswa = '$agm_siswa',tp_lahir_siswa = '$tp_lahirsiswa', tl_lahir_siswa = '$tl_lahirsiswa', j_kelamin_siswa = '$j_kelaminsiswa', alamat_siswa = '$alamat_siswa', asal_sekolah = '$asal_sekolah', gol_darah = '$gol_darah', penyakit_derita = '$penyakit_diderita', status = '$status', tahun_ajaran = '$tahun_ajaran', username = '$username', password = '$password' WHERE nis='$nis'");

if($simpan){
    header("location:data_siswa.php");  
}else{
    echo mysqli_error($koneksi);
}

?>