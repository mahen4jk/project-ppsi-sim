<?php
include "includes/header.php";
include "includes/connection.php";
$data_guru = mysqli_query($koneksi,"SELECT * FROM data_guru");
$data_siswa = mysqli_query($koneksi,"SELECT * FROM data_siswa");
$data_calon = mysqli_query($koneksi,"SELECT * FROM data_calon_siswa");


$jumlah_guru = mysqli_num_rows($data_guru);
$jumlah_siswa = mysqli_num_rows($data_siswa);
$jumlah_calon = mysqli_num_rows($data_calon);
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card" style="padding-bottom: 25px;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">SELAMAT DATANG DI</h5>
                    <h5 class="card-title" style="text-align:center">SISTEM INFORMASI MANAJEMEN</h5>
                    <h5 class="card-title" style="text-align:center">SMP Muhammadiyah 1 Babat</h5>
                    <p style="text-align:center">Jl. Tanggulrejo No.02</p>
                </div>
            </div>
            <div class="row" style="padding-top: 25px;">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-header">Siswa</div>
                        <div class="card-body">Jumlah data: <?php echo $jumlah_siswa ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                        <div class="card-header">Guru & Karyawan</div>
                        <div class="card-body">Jumlah data: <?php echo $jumlah_guru ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-header">Calon Peserta Didik</div>
                        <div class="card-body">Jumlah data: <?php echo $jumlah_calon ?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Laporan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="laporan_pendaftaran.php">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
</div>
<?php
include "includes/footer.php";
?>