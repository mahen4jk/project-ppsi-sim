<?php
$koneksi = mysqli_connect("localhost","root","","ppsi-sim");
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>