<?php
include "includes/connection.php";

$kodeMapel = $_POST['k_mapel'];
$matpel = $_POST['maPel'];
$pengajar = $_POST['pengajar'];

$simpan = mysqli_query($koneksi,"UPDATE mapel SET mata_pelajaran = '$matpel', pengajar='$pengajar' WHERE kode_mapel = '$kodeMapel'");


if($simpan == 1){
    echo '<script> alert("Data terupdate"); window.location.href = "matpel.php"; </script>';
}else{
    echo '<script> alert("Data gagal terupdate"); window.location.href = "form_edit_matpel.php"; </script>';
}

?>