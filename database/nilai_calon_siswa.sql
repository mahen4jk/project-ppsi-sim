-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 05:36 PM
-- Generation Time: Jun 25, 2021 at 04:26 PM
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
-- Table structure for table `nilai_calon_siswa`
--

CREATE TABLE `nilai_calon_siswa` (
  `kode_calon_siswa` varchar(20) NOT NULL,
  `nama_calon_siswa` varchar(100) NOT NULL,
  `nilai_bi` int(3) NOT NULL,
  `nilai_mtk` int(3) NOT NULL,
  `nilai_ipa` int(3) NOT NULL,
  `jarak_rumah_ke_sekolah` int(4) NOT NULL,
  `file_prestasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_calon_siswa`
--

INSERT INTO `nilai_calon_siswa` (`kode_calon_siswa`, `nama_calon_siswa`, `nilai_bi`, `nilai_mtk`, `nilai_ipa`, `jarak_rumah_ke_sekolah`, `file_prestasi`) VALUES
('CPD0001', 'Sylvana', 10, 80, 80, 7, 'Juara 1 nggak ngapa ngapain.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_calon_siswa`
--
ALTER TABLE `nilai_calon_siswa`
  ADD PRIMARY KEY (`kode_calon_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
