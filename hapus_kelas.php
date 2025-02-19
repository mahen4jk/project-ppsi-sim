<?php
include "includes/connection.php";

$kode = $_GET['kode'];
$sql = "DELETE FROM data_kelas WHERE k_kelas='$kode'";
$query = mysqli_query($koneksi,$sql);

if($query){
header("Location:master_kelas.php");
}else{
    echo mysqli_error($koneksi);
}