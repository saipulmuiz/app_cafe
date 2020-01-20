-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2020 pada 13.48
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_cart` int(11) NOT NULL,
  `id_menu` varchar(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(11) NOT NULL,
  `nama_menu` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `update_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `harga`, `foto`, `deskripsi`, `created_at`, `update_At`) VALUES
('M004', 'Pancake', 'Makanan', 13000, 'M004.jpg', 'Pancake adalah kue dadar yang terbuat dari tepung terigu, telur, gula, dan susu. Bahan-bahan ini kemudian dicampur dengan air untuk membentuk adonan kental, yang nantinya akan digoreng atau dipanggang diatas wajan datar atau pan yang sudah diolesi minyak terlebih dahulu.', '2020-01-15', '2020-01-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_det`
--

CREATE TABLE `transaksi_det` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_menu` varchar(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_det`
--

INSERT INTO `transaksi_det` (`id_transaksi`, `id_menu`, `qty`, `harga`, `sub_total`) VALUES
('TR-5e24ecab216c', 'M004', 2, 13000, 26000),
('TR-5e24ef5ac731', 'M004', 2, 13000, 26000),
('TR-5e24f11d929a', 'M004', 1, 13000, 13000),
('TR-5e2584dee06c', 'M004', 3, 13000, 39000),
('TR-5e2585d24b22', 'M004', 2, 13000, 26000),
('TR-5e25864cbb01', 'M004', 5, 13000, 65000),
('TR-5e2586aba7bc', 'M004', 1, 13000, 13000),
('TR-5e2586f087d1', 'M004', 1, 13000, 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_head`
--

CREATE TABLE `transaksi_head` (
  `id_transaksi` varchar(15) NOT NULL,
  `nama_pemesan` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL DEFAULT '',
  `status_pemesanan` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_head`
--

INSERT INTO `transaksi_head` (`id_transaksi`, `nama_pemesan`, `email`, `no_hp`, `status_pemesanan`, `total`, `bayar`, `kembali`, `id_user`) VALUES
('TR-5e24ef5ac731', 'Amelia Rosta', 'oktisah@gmail.com', '085795769489', 'Sudah Dibayar', 26000, 50000, 24000, '2132141'),
('TR-5e24f11d929a', 'Ipul', 'saipulmuiz87@gmail.com', '081312962137', 'Belum Dibayar', 13000, 0, 0, '2132141'),
('TR-5e2584dee06c', 'Kang Ocid', 'oktisah@gmail.com', '085795769489', 'Belum Dibayar', 39000, 0, 0, NULL),
('TR-5e2585d24b22', 'Kang Acil', 'shellasariyanti90@gmail.c', '0811211255', 'Belum Dibayar', 26000, 0, 0, NULL),
('TR-5e25864cbb01', 'Kang Danang', 'saipulmuiz87@gmail.com', '081312962137', 'Belum Dibayar', 65000, 0, 0, NULL),
('TR-5e2586aba7bc', 'Kang Ocid', 'shellasariyanti90@gmail.c', '0811211255', 'Belum Dibayar', 13000, 0, 0, NULL),
('TR-5e2586f087d1', 'Amelia Rosta', 'shellasariyanti90@gmail.c', '0811211255', 'Belum Dibayar', 13000, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `created_at`, `update_at`) VALUES
(1, 'fani', '/', 0, 'admin', '2020-01-15', '2020-01-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `transaksi_det`
--
ALTER TABLE `transaksi_det`
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `transaksi_head`
--
ALTER TABLE `transaksi_head`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
