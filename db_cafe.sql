-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 05:29 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.3.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `keranjang`
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(11) NOT NULL,
  `nama_menu` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` date NOT NULL,
  `update_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `harga`, `foto`, `deskripsi`, `created_at`, `update_At`) VALUES
('M004', 'Pancake', 'Non Coffee', 12000, 'M004.jpg', 'Pancake adalah kue dadar yang terbuat dari tepung terigu, telur, gula, dan susu. Bahan-bahan ini kemudian dicampur dengan air untuk membentuk adonan kental, yang nantinya akan digoreng atau dipanggang diatas wajan datar atau pan yang sudah diolesi minyak terlebih dahulu.', '2020-01-15', '2020-01-19'),
('M005', 'Espresso', 'Espresso Based', 10000, 'M005.jpg', 'Espresso dihasilkan dari ekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi. Espresso berasal dari Bahasa Italia yang berarti express atau "cepat" karena dibuat untuk disajikan dengan segera kepada pelanggan. Di dalam espresso terdapat lebih dari enam ratus komponen zat kimia termasuk diantaranya gula, kafeina, protein, emulsi dari minyak kopi, koloid, dan partikel kopi dalam suspensi dengan gelembung gas kecil. Pada setiap espresso terdapat suatu komponen yang disebut crema yang merupakan busa keemasan yang terdiri dari minyak, protein, gula yang mengambang di permukaan.', '2020-01-19', '2020-01-19'),
('M006', 'Espresso Milk', 'Espresso Based', 14000, 'M006.jpg', 'Mencampurkan susu ke espresso memberikan sensasi rasa yang nikmat dan juga tidak hanya merubah tekstur warna, lebih dari itu. Ada hal yang menarik, ketika susu dicampur ke secangkir espresso dan merubah keseluruhan espresso.', '2020-01-19', '2020-01-19'),
('M007', 'Americano', 'Espresso Based', 14000, 'M007.jpg', 'Seperti namanya, Americano tentu adalah kopi hitam yang berasal dari Amerika. Meskipun di coffee shop di Amerika dan sekitarnya tentu menyediakan juga menu long black. Meski sama-sama kopi hitam, Americano tentu berbeda dengan long black. Yang membedakannya sebenarnya sederhana saja yaitu cara penyajiannya. Cara menyajikan adalah espresso disiapkan terlebih dahulu lalu menambahkan air panas setelahnya. Hasil Americano biasanya nyaris tak meninggalkan krema di permukaan cangkir. Hal tersebut dikarenakan espresso yang diguyur air panas sehingga memecah krema yang ada pada espresso. Hal inilah perbedaan paling jelas antara Americano dan long black. Krema pada permukaan cangkir adalah yang membedakan kedua jenis kopi hitam ini.', '2020-01-19', '2020-01-19'),
('M008', 'Affogato', 'Espresso Based', 15000, 'M008.jpg', 'Affogato merupakan menu tradisional Italia berbahan dasar espresso yang dicampurkan dengan es krim atau gelato vanila. Di negri asalnya, affogato termasuk menu kopi yang banyak dinikmati dan digemari oleh orang-orang di kafe atau coffee bar di samping cappuccino dan mochaccino. Perpaduan antara dingin dan manisnya es krim/gelato vanila dengan panas dan rasa bittersweet-nya espresso, bikin meleleh di mulut, TOP Lovers!.\r\n\r\nNama asli affogato sendiri sebenarnya adalah affogato al cafe atau dalam bahasa Inggris dikenal dengan nama drowed in coffee yang memiliki arti “tenggalam”. Ini mengacu kepada es krim/gelato vanila yang seperti tenggelam dalam espresso panas yang dituangkan di atasnya. Cara mengajikan affogato, aslinya, memang dengan menaruh es krim/gelato vanila terlebih dahulu di dalam cangkir atau gelas baru setelah itu menuangkan espresso di atasnya. \r\n\r\nResep awal affogato hanya terdiri dari es krim/gelato vanila dengan espresso. Tapi sekarang ini banyak affogato dibuat tidak hanya menggunakan espresso, tapi juga cukup dengan menggunakan kopi tubruk atau kopi seduh hitam biasa. Es krim yang digunakan pun bisa berbagai rasa, seperti coklat, moka, kopi, atau stoberi. Juga perbedaan perbandingan takaran antara es krim/gelato dengan espresso dari resep aslinya. ', '2020-01-20', '2020-01-20'),
('M009', 'Cappuccino', 'Espresso Based', 16000, 'M009.jpg', 'Cappuccino adalah minuman tradisional Italia. Nama \'cappuccino\' berasal dari \'caphucin\', topi pada jubah pastur Italia. Ini karena bentuk buih susunya mirip topi tersebut.\r\n\r\nRacikan kopi yang populer ini terkenal dengan lapisan buih susu yang biasanya dihiasi dengan bubuk cokelat. Namun, yang membuat minuman ini menjadi khas bukan sekadar froth susu saja. Racikan cappuccino dibuat dengan perbandingan bahan, 1/3 Kopi espresso, 1/3 susu, 1/3 buih susu.\r\n\r\nPada cappuccino, kopi akan terasa lebih pekat dan lebih enak. Hal tersebut disebabkan karena cappuccino hanya dicampur dengan 50 % susu dan sisanya merupakan espresso. ', '2020-01-20', '2020-01-20'),
('M010', 'Cafe Latte', 'Espresso Based', 16000, 'M010.jpg', 'Cafe latte punya racikan berupa espresso hanya 25 %. Hal itu membuat cafe latte memiliki rasa susu atau creamy yang jauh lebih kuat dibandingkan dengan cappuccino, sehingga rasa cappuccino dan latte tentu saja tidak sama.\r\n\r\nJika dilihat dari cara pembuatannya, capppucino relatif lebih mudah membuatnya. Hal tersebut karena perbandingan yang digunakan untuk membuat cappuccino sudah cukup jelas, yakni 50 : 50. Namun, pada cafe latte perbandingannya 25 : 75 untuk espresso dan susu yang dicampurkan.', '2020-01-20', '2020-01-20'),
('M011', 'Caramel Latte', 'Espresso Based', 18000, 'M011.jpg', 'Baik Latte Karamel dan Karamel Cappuccino dibuat dengan bahan yang sama: espresso, sirup karamel, susu panas, dan busa. Satu-satunya perbedaan antara keduanya adalah bahwa cappuccino memiliki lebih banyak busa berdasarkan volume dibandingkan latte. Jadi, jika Anda menikmati minuman ringan dan berbusa, cappuccino adalah cara yang tepat. Dan jika Anda bukan penggemar busa susu, latte adalah minuman Anda. Di Starbucks, barista dilatih untuk membuat cappuccino dengan mengikuti aturan 50/50, di mana minuman memiliki 50% busa dan 50% susu; susu adalah 90% susu dan hanya 10% busa.', '2020-01-20', '2020-01-20'),
('M012', 'Hazelnut Latte', 'Espresso Based', 18000, 'M012.jpg', 'enu ini menjadi pilihan bagi yang tak terlalu suka kopi asli dengan karakter yang sangat kuat. Ada campuran susu yang membuatnya sedikit manis. Di dalam gelas berukuran tak lebih dari 10 oz, hazelnut latte disajikan manis dengan ukiran latte art berbentuk daun bertumpuk. \r\n\r\nMeski dicampur dengan susu, karakter kopinya masih kental terasa. Latte ini dibuat dari espresso berbahan dasar campuran tiga biji kopi, yakni Gayo, Toraja, dan Flores. Ketiga biji kopi itu saling menyeimbangkan rasa sehingga menghasilkan perpaudan yang tepat. Ada gurih, manis, pahit, dan fruity saat kopi direguk.', '2020-01-20', '2020-01-20'),
('M013', 'Vanilla Late', 'Espresso Based', 18000, 'M013.jpg', 'Rasa Vanilla dihasilkan dari tanaman genus vanilla, ialah vanilla planifolia. Vanilla sendiri berasal dari bahasa Spanyol, yang berarti ‘polong’. Masyarakat Azteclah yang membudidayakannya, dan Hernan Cortes yang membawa vanilla bersama coklat ke Eropa. Msyarakat Mesoamerika inilah yang akhirnya menggunakan vanilla sebagai bumbu, dalam menikmati coklat dan vanilla termasuk rempah yang mahal di dunia. Pasca panen vanilla meliputi pelayuan, fermentasi, pengeringan dan tahan pemeraman. Pemeraman ini ialah menyimpan buah vanilla di wadah tertutup selama lima sampai enam bulan lamanya. Semakin lama, aroma buah vanilla akan semakin meningkat.', '2020-01-20', '2020-01-20'),
('M014', 'Jeda Coffee Mil', 'Espresso Based', 16000, 'M014.jpg', 'Dengan dasar espresso dan susu yang berkualitas, kami hadirkan coffee andalan hasil riset kami', '2020-01-20', '2020-01-20'),
('M015', 'Vietnam Drip', 'Manual Brew', 16000, 'M015.jpg', 'Vietnam drip adalah metode dan alat seduh yang menghasilkan minuman dengan cara ekstraksi lewat tetesan. Dripper berbentuk seperti gelas metal dan terdiri dari tabung, plunger, dan tutup metal. Penggunaannya sangat mudah, setelah bubuk kopi dimasukkan, masukkan plunger lalu tekan, taruh dripper di atas gelas, lalu tuang air panas.\r\nSasame Coffee Kekayaan Perbedaan\r\n\r\nDi negara asalnya, minuman ini umumnya dihidangkan dingin dan biasa dikenal dengan sebutan cà phê s?a ?á. Sementara jika dihidangkan panas, namanya menjadi cà phê s?a nóng.\r\n\r\nJenis kopi asli Vietnam adalah robusta yang memiliki rasa lebih pahit dari arabika. Oleh karena itu, masyarakat Vietnam menggunakan metode ini agar rasa pahit dari robusta tidak terlalu dominan.\r\n\r\nUntuk membuat minuman ini, Anda tidak harus menggunakan kopi yang berjenis robusta seperti di negara asalnya. Kopi arabika bisa digunakan jika itu sesuai dengan selera Anda.\r\n\r\nJika Anda menggunakan kopi jenis arabika, ada baiknya menggunakan kopi dengan karakter body yang bold dan di-roasting pada tingkat medium hingga dark. Sebab, minuman kopi Vietnam ini menggunakan campuran krimer kental manis dalam jumlah yang cukup banyak (2-4 sdm). Menggunakan biji kopi dengan karakter body yang light akan membuat sajian terasa terlalu manis.', '2020-01-20', '2020-01-20'),
('M016', 'V60', 'Manual Brew', 16000, 'M016.jpg', 'V60 adalah alat manual brew kopi yang pertama kali di ciptakan sebagai prototype pada tahun 2004 oleh seorang ahli kimia berkebangsaan jepang yaitu Tsuruoka di tokyo.  Tsuruoka menyempurnakan bentuk alat kopi manual ini sampai bentuk yang saat ini kita kenal.  V60 merupakan alat manual brew yang sudah sangat terkenal saat ini . \r\n\r\nArti V disini melambangkan bentuk alat kopi manual tersebet yang seperti huruf V dan 60 adalah tingkat kemiringan dari alat ini yang jika dihitung memiliki kemiringan 60O.  V60 saat itu di ciptakan di perusaan kaca yang sekarang berfokus pada pembuatan alat kopi yaitu Hario.  V60 biasanya terbuat dari bahan plastik, keramik  dan aluminium.\r\nSistem pembuatan kopi menggunakan metode ini yaitu dripting, dimana air kopi yang kita seduh akan menetes kepada server yang di sediakan. ', '2020-01-20', '2020-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_det`
--

CREATE TABLE `transaksi_det` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_menu` varchar(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_det`
--

INSERT INTO `transaksi_det` (`id_transaksi`, `id_menu`, `qty`, `harga`) VALUES
('TR-5e24cb3c5cf0', 'M006', 1, 14000),
('TR-5e24cb3c5cf0', 'M007', 1, 14000),
('TR-5e24cb5bf1d8', 'M006', 1, 14000),
('TR-5e24cb5bf1d8', 'M007', 1, 14000),
('TR-5e24d7b5373d', 'M013', 1, 18000),
('TR-5e24d7b5373d', 'M012', 3, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_head`
--

CREATE TABLE `transaksi_head` (
  `id_transaksi` varchar(15) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_head`
--

INSERT INTO `transaksi_head` (`id_transaksi`, `nama_pemesan`, `email`, `no_hp`, `status_pemesanan`, `total`, `bayar`, `kembali`, `id_user`) VALUES
('TR-5e24cb3c5cf0', '2', '2@2.com', '2', 'Belum Dibay', 0, 0, 0, '2132141'),
('TR-5e24cb5bf1d8', 'zz', 'z@z.com', '222', 'Belum Dibay', 0, 0, 0, '2132141'),
('TR-5e24d7b5373d', 'Zam Zam Saeful Bahtiar', 'bekerz18@gmail.com', '082219583274', 'Belum Dibayar', 0, 0, 0, '2132141');

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
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_menu` (`id_menu`);

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
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;