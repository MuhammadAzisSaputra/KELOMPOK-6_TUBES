-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 06:10 AM
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
  `id_order` int(10) UNSIGNED NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` float NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_buku`
--

INSERT INTO `beli_buku` (`id_order`, `total_item`, `total_bayar`, `tgl_transaksi`) VALUES
(68, 16, 1200000, '2021-12-13'),
(69, 3, 525000, '2021-12-14'),
(71, 2, 350000, '2021-12-14'),
(72, 3, 525000, '2021-12-14'),
(73, 3, 525000, '2021-12-14'),
(74, 5, 656565, '2021-12-14'),
(75, 4, 700000, '2021-12-14'),
(76, 5, 750000, '2021-12-15'),
(77, 1, 175000, '2021-12-15'),
(78, 3, 525000, '2021-12-15'),
(79, 10, 1550000, '2021-12-18'),
(80, 2, 350000, '2021-12-18'),
(81, 12, 1800000, '2021-12-23');

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

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`input_id`, `nama`, `email`, `subjek`, `message`) VALUES
(2, 'andik', 'andik@gmail.com', 'subjek@gmail.com', '<p>mantap kali ah</p>\r\n'),
(3, 'GadgetVersus', 'versus@gmail.com', 'wkwkwk@gmail.com', '<p><em><strong>kurang mantap bos</strong></em></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id_pinjam` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_buku` varchar(225) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id_pinjam`, `nama`, `email`, `nama_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(15, 'Muhammad Azis', 'azis@gmail.com', 'book1', '25-12-2021', '01-01-2022'),
(16, 'Muhammad Azis', 'azis@gmail.com', '', '26-12-2021', '02-01-2022');

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
  `penerbit` varchar(50) DEFAULT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_buku`
--

INSERT INTO `stok_buku` (`id_buku`, `judul`, `genre`, `harga`, `pengarang`, `tgl_terbit`, `penerbit`, `komentar`) VALUES
('book1', 'Edensor', 'Fiksi', 175000, 'Andrea Hirata', 0000, 'Bentang Pustaka', ''),
('book12', 'test', 'test', 100000, 'test', 2003, 'test', ''),
('book2', 'Negeri 5 Menara', 'Fiksi', 125000, 'Ahmad Fuadi', 0000, 'PT.Gramedia Pustaka Utama', ''),
('book3', 'Laskar Pelangi', 'Roman', 150000, 'Andrea Hirata', 2005, 'Bentang Pustaka', ''),
('book4', 'Angels and Demons', 'Fiksi', 120000, 'Dan Brown', 0000, 'Pocket Books', ''),
('book5', 'Crazy Rich Asians', 'Fiksi', 100000, 'Kevin Kwan', 2017, 'PT.Gramedia Pustaka Utama', ''),
('book6', 'Cantik itu Luka', 'Fiksi sejarah', 103500, 'Eka Kurniawan', 2004, 'PT.Gramedia Pustaka Utama', ''),
('book7', 'Laut Bercerita', 'Fiksi sejarah', 131313, 'Leila S. Chudori', 2017, 'Kepustakaan Popler Gramedia', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_library`
--

CREATE TABLE `user_library` (
  `id_member` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_library`
--

INSERT INTO `user_library` (`id_member`, `username`, `password`, `nama`, `email`, `no_telepon`, `alamat`, `keterangan`, `level`) VALUES
(1, 'Anonymous', '0192023a7bbd73250516f069df18b500', 'Admin Control', 'admin@gmail.com', 'xxxxx', 'xxxxx', NULL, 'admin'),
(2, 'azis123', '900c6fe6eb6aab9e5c68fc669a5d4917', 'Muhammad Azis', 'azis@gmail.com', '081265230266', 'Jalan B. Katamso No. 743-B', NULL, 'member'),
(3, 'manda8899', '4fe9854adb87b8c5d31a726b8315e02e', 'Amanda Bendicta', 'manda@gmail.com', '081260900289', 'Medan', NULL, 'member'),
(4, 'gihon123', '3464beed8b035b2aa689090251c385da', 'Gihon Sinaga', 'gihonganteng@gmail.com', '081345678945', 'Siantar', NULL, 'member'),
(5, 'steven8899', 'a36574edb703c814e3ad78273983d3e2', 'Steven Manurung', 'steven@gmail.com', '', 'Danau Toba', NULL, 'member'),
(7, 'fery123', 'd0256bd76c9e1fe1c7f606009fdbf5ff', 'Fery Ananda', 'fery@gmail.com', '081324354657', 'Kampung Pajak', NULL, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli_buku`
--
ALTER TABLE `beli_buku`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`input_id`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `stok_buku`
--
ALTER TABLE `stok_buku`
  ADD PRIMARY KEY (`id_buku`);

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
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `input_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_library`
--
ALTER TABLE `user_library`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
