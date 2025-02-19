-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:00 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_calon_siswa`
--
ALTER TABLE `data_calon_siswa`
  ADD PRIMARY KEY (`kode_calon_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
