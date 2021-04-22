-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 03:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(7) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `ukt` int(25) NOT NULL,
  `status_bayar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `gender`, `prodi`, `ukt`, `status_bayar`) VALUES
(16, 1800001, 'Steve Rogers', 'Laki-Laki', 'Ilmu Kelautan', 2500000, 'Sudah Lunas'),
(17, 1800002, 'Tony Stark', 'Laki-Laki', 'Sastra Sunda', 3500000, 'Belum Lunas'),
(18, 1800003, 'Bruce Banner', 'Laki-Laki', 'Tehnik Industri', 5000000, 'Sudah Lunas'),
(21, 1904442, 'Peter Parker', 'Laki-Laki', 'ilmu komputer', 6500000, 'Sudah Lunas'),
(22, 1900011, 'Natasha Romanoff', 'Perempuan', 'PGSD', 5500000, 'Belum Lunas'),
(23, 1900201, 'Clint Barton', 'Laki-Laki', 'Teknik Mesin', 6000000, 'Belum Lunas'),
(24, 1801121, 'Wanda', 'Perempuan', 'Manajemen Bisnis', 4600000, 'Sudah Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
