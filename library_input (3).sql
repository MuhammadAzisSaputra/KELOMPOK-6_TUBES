-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 06:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_input`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli_buku`
--

CREATE TABLE `beli_buku` (
  `id_member` int(5) UNSIGNED ZEROFILL NOT NULL,
  `id_buku` varchar(50) DEFAULT NULL,
  `total_harga` int(100) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_buku`
--

INSERT INTO `beli_buku` (`id_member`, `id_buku`, `total_harga`, `tgl_transaksi`) VALUES
(10001, 'book5', 0, '2021-08-19'),
(10002, 'book7', 0, '2021-08-24'),
(10003, 'book1', 0, '2021-09-03'),
(10004, 'book7', 0, '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `input_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id_member` int(5) UNSIGNED ZEROFILL NOT NULL,
  `no_pinjam` tinyint(10) NOT NULL,
  `id_buku` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id_member`, `no_pinjam`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(10001, 1, 'book3', '2021-08-13', '2021-08-20'),
(10002, 2, 'book4', '2021-08-17', '2021-08-24'),
(10003, 3, 'book3', '2021-08-17', '2021-08-24'),
(10004, 4, 'book5', '2021-08-25', '2021-09-03'),
(10005, 5, 'book6', '2021-09-01', '2021-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `stok_buku`
--

CREATE TABLE `stok_buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `pengarang` varchar(60) DEFAULT NULL,
  `tgl_terbit` year(4) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_buku`
--

INSERT INTO `stok_buku` (`id_buku`, `judul`, `genre`, `harga`, `pengarang`, `tgl_terbit`, `penerbit`) VALUES
('book1', 'Edensor', 'Fiksi', 175000, 'Andrea Hirata', 0000, 'Bentang Pustaka'),
('book2', 'Negeri 5 Menara', 'Fiksi', 0, 'Ahmad Fuadi', 0000, 'PT.Gramedia Pustaka Utama'),
('book3', 'Laskar Pelangi', 'Roman', 0, 'Andrea Hirata', 2005, 'Bentang Pustaka'),
('book4', 'Angels and Demons', 'Fiksi', 0, 'Dan Brown', 0000, 'Pocket Books'),
('book5', 'Crazy Rich Asians', 'Fiksi', 0, 'Kevin Kwan', 2017, 'PT.Gramedia Pustaka Utama'),
('book6', 'Cantik itu Luka', 'Fiksi sejarah', 0, 'Eka Kurniawan', 2004, 'PT.Gramedia Pustaka Utama'),
('book7', 'Laut Bercerita', 'Fiksi sejarah', 0, 'Leila S. Chudori', 2017, 'Kepustakaan Popler Gramedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` float NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `total_item`, `total_bayar`, `tgl_transaksi`) VALUES
(68, 16, 1200000, '2021-12-13'),
(69, 3, 525000, '2021-12-14'),
(70, 0, 0, '2021-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_library`
--

CREATE TABLE `user_library` (
  `id_member` int(5) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_telpon` int(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_library`
--

INSERT INTO `user_library` (`id_member`, `username`, `password`, `nama`, `no_telpon`, `email`, `alamat`, `level`) VALUES
(00001, 'admin', 'admin123', 'anonymous', 000123456789, 'admin@gmail.com', '', 'admin'),
(00005, 'azis89', '900c6fe6eb6aab9e5c68fc669a5d4917', 'Muhammad Azis Saputra', 000000000000, 'azizsyahputra0311@gmail.com', '', 'member'),
(00006, 'wakwanhgyut43', '3e03487ccf6e2df31b1785a6cc2e8236', 'wawewuwewar', 000000000000, 'wawewuwewar@gmail.com', '', 'member'),
(00007, 'aqua botol', '3464beed8b035b2aa689090251c385da', 'Gihon Sinaga', 000000000000, 'eskosong@gmail.com', '', 'member'),
(00008, 'budi12345', '9c5fa085ce256c7c598f6710584ab25d', 'budi', 000000000000, 'budi@gmail.com', '', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli_buku`
--
ALTER TABLE `beli_buku`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`input_id`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `stok_buku`
--
ALTER TABLE `stok_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `user_library`
--
ALTER TABLE `user_library`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli_buku`
--
ALTER TABLE `beli_buku`
  MODIFY `id_member` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `input_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  MODIFY `id_member` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_library`
--
ALTER TABLE `user_library`
  MODIFY `id_member` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
