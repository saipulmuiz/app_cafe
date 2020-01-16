-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 08:05 PM
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
-- Database: `dbcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(11) NOT NULL,
  `nama_menu` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `update_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `harga`, `foto`, `deskripsi`, `created_at`, `update_At`) VALUES
('M004', 'Fani Abdullah', 'Manusiakuh', 12000, 'M004.jpg', 'Ganteng', '2020-01-15', '2020-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_det`
--

CREATE TABLE `transaksi_det` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_menu` varchar(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_head`
--

CREATE TABLE `transaksi_head` (
  `id_transaksi` varchar(15) NOT NULL,
  `nama_pemesan` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `status_pemesanan` varchar(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` int(15) NOT NULL,
  `level` varchar(11) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `created_at`, `update_at`) VALUES
(1, 'fani', '/', 0, 'admin', '2020-01-15', '2020-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `transaksi_det`
--
ALTER TABLE `transaksi_det`
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `transaksi_head`
--
ALTER TABLE `transaksi_head`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_head`
--
ALTER TABLE `transaksi_head`
  ADD CONSTRAINT `transaksi_head_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
