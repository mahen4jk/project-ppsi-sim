<?php
include "includes/connection.php";

$nis = $_GET['kode'];
$sql = "DELETE FROM data_siswa WHERE nis='$nis'";
$query = mysqli_query($koneksi,$sql);

if($query){
header("Location:data_siswa.php");
}else{
    echo mysqli_error($koneksi);
}