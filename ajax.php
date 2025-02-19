<?php
include "koneksi.php";
$karyawan = mysqli_fetch_array(mysqli_query($koneksi, "select * from data_calon_siswa where id='$_GET[kode_calon_siswa]'"));
$data_calonsiswa = array('nama_karyawan'      =>  $nama['nama_calon_siswa']);
echo json_encode($data_calonsiswa);