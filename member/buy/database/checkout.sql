-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkout`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_buku`
--

INSERT INTO `stok_buku` (`id_buku`, `judul`, `genre`, `harga`, `pengarang`, `tgl_terbit`, `penerbit`) VALUES
('book1', 'Edensor', 'Fiksi', 75000, 'Andrea Hirata', 0000, 'Bentang Pustaka'),
('book2', 'Negeri 5 Menara', 'Fiksi', 75000, 'Ahmad Fuadi', 0000, 'PT.Gramedia Pustaka Utama'),
('book3', 'Laskar Pelangi', 'Roman', 75000, 'Andrea Hirata', 2005, 'Bentang Pustaka'),
('book4', 'Angels and Demons', 'Fiksi', 75000, 'Dan Brown', 0000, 'Pocket Books'),
('book5', 'Crazy Rich Asians', 'Fiksi', 75000, 'Kevin Kwan', 2017, 'PT.Gramedia Pustaka Utama'),
('book6', 'Cantik itu Luka', 'Fiksi sejarah', 75000, 'Eka Kurniawan', 2004, 'PT.Gramedia Pustaka Utama'),
('book7', 'Laut Bercerita', 'Fiksi sejarah', 75000, 'Leila S. Chudori', 2017, 'Kepustakaan Popler Gramedia');

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
(68, 16, 1200000, '2021-12-13');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
