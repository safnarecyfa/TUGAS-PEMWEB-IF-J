-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2025 at 03:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `hargaPaket` int(11) NOT NULL,
  `hfasilitas` int(11) NOT NULL,
  `hlokasi` int(11) NOT NULL,
  `hpembayaran` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `paket`, `fasilitas`, `lokasi`, `metode_pembayaran`, `catatan`, `hargaPaket`, `hfasilitas`, `hlokasi`, `hpembayaran`, `pajak`, `totalHarga`, `total`, `tanggal_daftar`) VALUES
(14, 'SAFNA RECYFA NAQIYA', 'safnanaqiya@gmail.com', 'Intensif', 'Modul Cetak, Modul PDF', 'Jakarta Pusat', 'Transfer Bank', 'papapappapapa', 500000, 75000, 100000, 3000, 67800, 678000, 745800, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
