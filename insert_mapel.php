<?php
include "includes/connection.php";

$kodeMapel = $_POST['k_mapel'];
$matpel = $_POST['maPel'];
$pengajar = $_POST['pengajar'];

$simpan = mysqli_query($koneksi, "INSERT INTO mapel values('$kodeMapel','$matpel','$pengajar',current_timestamp(),current_timestamp())");
header("location:matpel.php");

?>