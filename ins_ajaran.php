<?php
include "includes/connection.php";

$th = $_POST['tahun_ajaran'];

$simpan = mysqli_query($koneksi, "INSERT INTO tahun_ajaran (tahun_ajaran) values('$th')");
header("location:tahun_ajaran.php");
?>