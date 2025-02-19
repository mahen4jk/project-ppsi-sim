<?php
include "includes/connection.php";
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Manajemen SMP Muhammadiyah 1 Babat</title>

    <!-- Inti Bootstrap -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">

    <!-- Logo Muhammadiyah 1 Babat -->
    <link rel="icon" type="image/png" href="img/SMP_Muhammadiyah_1_Babat.png">
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">SIM</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="nav navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown dropleft">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master Data</div>
                        <a class="nav-link" href="matpel.php">
                            <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                            Mata Pelajaran
                        </a>
                        <a class="nav-link" href="master_kelas.php">
                            <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                            Kelas
                        </a>
                        <a class="nav-link" href="tahun_ajaran.php">
                            <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                            Tahun Ajaran
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="data_guru.php">
                            <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                            Data Guru & Karyawan
                        </a>
                        <a class="nav-link" href="data_siswa.php">
                            <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                            Data Siswa
                        </a>
                        <!-- <div class="sb-sidenav-menu-heading">Keuangan</div>
                        <a class="nav-link" href="pembayaran_spp.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pembayaran SPP
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Penggajian
                        </a> -->
                        <div class="sb-sidenav-menu-heading">Kesiswaan</div>
                        <a class="nav-link" href="pendaftaran.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Pendaftaran
                        </a>
                        <a class="nav-link" href="seleksi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Seleksi siswa baru
                        </a>
                        <div class="sb-sidenav-menu-heading">Laporan</div>
                        <a class="nav-link" href="laporan_pendaftaran.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Laporan Pendaftar
                        </a>
                        <a class="nav-link" href="laporan_seleksi_pendaftaran.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Laporan Hasil Seleksi
                        </a>
                        <a class="nav-link" href="laporan_chart_pendaftaran.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Laporan Hasil Chart Pendaftaran
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>