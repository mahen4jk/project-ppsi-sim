-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 06:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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
-- Table structure for table `data_calon_siswa`
--

CREATE TABLE `data_calon_siswa` (
  `kode_calon_siswa` varchar(20) NOT NULL,
  `nama_lengkap_calon_siswa` varchar(100) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `agama_siswa` varchar(20) NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat_siswa` varchar(500) NOT NULL,
  `jenis_kelamin_siswa` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `alamat_tinggal_siswa` varchar(500) NOT NULL,
  `tinggal_dengan` varchar(50) NOT NULL,
  `jumlah_saudara_kandung` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jarak_ke_sekolah` varchar(50) NOT NULL,
  `transportasi_siswa` varchar(50) NOT NULL,
  `nama_saudara_satu_sekolah` varchar(100) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `tinggi_badan_siswa` int(11) NOT NULL,
  `berat_badan_siswa` int(11) NOT NULL,
  `golongan_darah_siswa` varchar(2) NOT NULL,
  `penyakit_diderita_siswa` varchar(100) DEFAULT NULL,
  `status_siswa` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_calon_siswa`
--

INSERT INTO `data_calon_siswa` (`kode_calon_siswa`, `nama_lengkap_calon_siswa`, `tempat_lahir_siswa`, `agama_siswa`, `tanggal_lahir_siswa`, `umur`, `alamat_siswa`, `jenis_kelamin_siswa`, `kewarganegaraan`, `alamat_tinggal_siswa`, `tinggal_dengan`, `jumlah_saudara_kandung`, `anak_ke`, `jarak_ke_sekolah`, `transportasi_siswa`, `nama_saudara_satu_sekolah`, `asal_sekolah`, `tinggi_badan_siswa`, `berat_badan_siswa`, `golongan_darah_siswa`, `penyakit_diderita_siswa`, `status_siswa`) VALUES
('CPD0001', 'Sylvana Cristina Agera', 'Surabaya', 'Islam', '2010-11-21', 11, 'Taman Rungkut Indah', 'P', 'WNI', 'Taman Rungkut Indah', 'Ayah, Ibu', 0, 1, '250', 'Sepeda', NULL, 'SDN Karawang 1 Surabaya', 155, 47, 'AB', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `NIP` char(10) NOT NULL,
  `nm_lengkap` varchar(35) NOT NULL,
  `kd_guru` char(6) NOT NULL,
  `tm_lahir` varchar(25) NOT NULL,
  `tl_lahir` date NOT NULL,
  `j_kelamin` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `h_perJam` varchar(40) NOT NULL,
  `username` char(6) NOT NULL,
  `password` char(20) NOT NULL,
  `m_tugas` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`NIP`, `nm_lengkap`, `kd_guru`, `tm_lahir`, `tl_lahir`, `j_kelamin`, `alamat`, `h_perJam`, `username`, `password`, `m_tugas`, `created_at`, `updated_at`) VALUES
('0721512', 'Antonius Pongarang', 'A0001', 'Papua', '1991-01-23', 'Laki - Laki', 'Surabaya', '', 'A0001', 'AnPa1991', '0000-00-00', '2021-06-07 16:37:06', '2021-06-07 23:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_calon_siswa`
--
ALTER TABLE `data_calon_siswa`
  ADD PRIMARY KEY (`kode_calon_siswa`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
