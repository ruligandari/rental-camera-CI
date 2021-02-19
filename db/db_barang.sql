-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` int(11) NOT NULL,
  `nm_plg` varchar(255) NOT NULL,
  `kp_plg` varchar(2550) NOT NULL,
  `jm_plg` int(22) NOT NULL,
  `date_plg` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `nm_plg`, `kp_plg`, `jm_plg`, `date_plg`) VALUES
(3, 'Siti Lestari', 'Sewa Canon 1200D untuk foto', 1, '2020-08-10'),
(4, 'Munaroh Muhaidi', 'Sewa Kamera Sony A600', 2, '2020-08-08'),
(5, 'Adinda', 'Sewa Canon 1200D Untuk Foto', 1, '2020-08-10'),
(6, 'Ujang', 'sewa Ring Light', 1, '2020-08-15'),
(7, 'Roby', 'Sewa kamera sony A6000', 2, '2020-08-08'),
(8, 'Anggita', 'Sewa mic rode', 2, '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `user_admin`, `pass_admin`) VALUES
(1, 'root', 'root'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(2550) NOT NULL,
  `stok_barang` int(255) NOT NULL,
  `disewa` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nm_barang`, `stok_barang`, `disewa`, `date`) VALUES
(4, 'Canon EOS 1200D', 5, 2, '2020-08-10'),
(3, 'Sony A6000', 15, 4, '2020-08-10'),
(8, 'Ring Light', 5, 2, '2020-08-08'),
(7, 'Canon EOS 600D', 7, 2, '2020-08-09'),
(9, 'Mic Rode', 4, 2, '2020-08-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_plg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
