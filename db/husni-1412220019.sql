-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 03:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `husni-1412220019`
--

-- --------------------------------------------------------

--
-- Table structure for table `penerima_zis`
--

CREATE TABLE `penerima_zis` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `status_kelayakan` enum('Memenuhi Syarat','Tidak Memenuhi Syarat') NOT NULL,
  `kebutuhan` text NOT NULL,
  `kategori_penerima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerima_zis`
--

INSERT INTO `penerima_zis` (`id_penerima`, `nama_penerima`, `alamat`, `status_kelayakan`, `kebutuhan`, `kategori_penerima`) VALUES
(1, 'Lilun Ganteng', 'Jl. KH Asyhari Pabeyan Tambakboyo', 'Memenuhi Syarat', 'Medis', 'Ibnu Sabil'),
(2, 'Lilun Cantik', 'Jl. KH Asyhari Pabeyan Tambakboyo', 'Memenuhi Syarat', 'Medis', 'Ibnu Sabil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'aini', '$2y$10$eWo7OEmyPJZIgnelg.pf9epnyXW8aW.hmOVoZjZIHYOZxxirGA6uq'),
(6, '69830095', '$2y$10$qRYNQ1.M7QSoLJG4fmEyTekjxRcvEy7rvN0cLn8GUfD.DQUWo5HA6');

-- --------------------------------------------------------

--
-- Table structure for table `zis`
--

CREATE TABLE `zis` (
  `id` int(11) NOT NULL,
  `nama_muzakki` varchar(255) NOT NULL,
  `jumlah_zis` varchar(100) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `catatan` text NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `lembaga_penerima` varchar(255) NOT NULL,
  `penyaluran_dana` varchar(255) NOT NULL,
  `jenis_zis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zis`
--

INSERT INTO `zis` (`id`, `nama_muzakki`, `jumlah_zis`, `tanggal_bayar`, `catatan`, `sumber_dana`, `metode_pembayaran`, `lembaga_penerima`, `penyaluran_dana`, `jenis_zis`) VALUES
(16, 'Husni Muhasan', '250.000', '2024-05-01', 'Semoga bermanfaat', 'Gaji', 'Transfer Bank', 'Amil Zakat', 'Fakir Miskin', 'Shodaqoh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerima_zis`
--
ALTER TABLE `penerima_zis`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zis`
--
ALTER TABLE `zis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerima_zis`
--
ALTER TABLE `penerima_zis`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zis`
--
ALTER TABLE `zis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
