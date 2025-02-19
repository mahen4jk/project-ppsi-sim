-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2021 pada 06.44
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsi_sim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` varchar(20) NOT NULL,
  `nm_siswa` varchar(100) NOT NULL,
  `kd_siswa` varchar(20) NOT NULL,
  `agm_siswa` varchar(20) NOT NULL,
  `tp_lahir_siswa` varchar(20) NOT NULL,
  `tl_lahir_siswa` date NOT NULL,
  `j_kelamin_siswa` varchar(20) NOT NULL,
  `alamat_siswa` varchar(500) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `penyakit_derita` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nm_siswa`, `kd_siswa`, `agm_siswa`, `tp_lahir_siswa`, `tl_lahir_siswa`, `j_kelamin_siswa`, `alamat_siswa`, `gol_darah`, `asal_sekolah`, `penyakit_derita`, `status`, `username`, `password`) VALUES
('2101', 'Feby Nur', 'S001', 'Islam', 'Sidoarjo', '2020-01-22', 'P', 'Jalan Suko Indah gang 2', '', 'SD Taman sepanjang', '', 'Aktif', 'febynur', 'febynur123'),
('2102', 'Tasya Octav', 'S002', 'Islam', 'Surabaya', '2021-06-04', 'P', 'Jalan Manukan Kulon', 'SDN M', 'A', 'Tidak ada', 'AKTIF', 'tasya', 'tasya123'),
('2103', 'Ferdyans', 'S003', 'Islam', 'Lumajang', '2021-06-21', 'L', 'Jalan Bromo Semeru Tengger', 'SDN L', '-', 'Tidak ada', 'AKTIF', 'ferdy', 'ferdy123'),
('2104', 'andy heha', 'S004', 'Islam', 'Surabaya', '1999-08-23', 'L', 'Jalan Lakarsantri ll', 'SDN L', 'A', 'Tidak ada', 'AKTIF', 'andy', 'andy123'),
('2105', 'Akbar CJR', 'S005', 'Islam', 'Surabaya', '1999-08-04', 'L', 'Jalan Ketintang', 'SDN J', '-', 'Tidak ada', 'AKTIF', 'akbar', 'akbar123'),
('2106', 'Fadly gantengg', 'S006', 'Islam', 'Surabaya', '2000-03-04', 'L', 'Jalan Ngagel', 'SDN L', 'A', 'Tidak ada', 'AKTIF', 'fadly', 'fadly123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
