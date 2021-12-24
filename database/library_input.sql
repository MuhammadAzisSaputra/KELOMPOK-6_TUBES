-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 02:21 AM
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
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_buku` varchar(225) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`nama`, `username`, `nama_buku`, `tgl_pinjam`) VALUES
('Muhammad Azis Sahputra', '1', 'Edensor', '2021-12-14'),
('Muhammad Azis Saputra', 'azis89', 'dikta & hukum', '2021-12-15'),
('christello', 'ello', 'Edensor', '2021-12-15'),
('Hanji', 'hanji1', 'Edensor', '2021-12-15');

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
  `id` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telepon` int(12) UNSIGNED ZEROFILL NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_library`
--

INSERT INTO `user_library` (`id_member`, `id`, `username`, `password`, `nama`, `email`, `no_telepon`, `alamat`, `keterangan`, `level`) VALUES
(1, 0, 'admin', 'admin123', 'anonymous', 'admin@gmail.com', 000000000000, '', NULL, 'admin'),
(2, 0, 'Azis8899', '900c6fe6eb6aab9e5c68fc669a5d4917', 'Muhammad Azis Saputra', 'azis@gmail.com', 000000000000, '', NULL, 'member'),
(3, 0, 'Gihon123', '3464beed8b035b2aa689090251c385da', 'Gihon Sinaga', 'gihon@gmail.com', 000000000000, '', NULL, 'member'),
(4, 0, 'manda123', '4fe9854adb87b8c5d31a726b8315e02e', 'Amanda Bendicta', 'amanda@gmail.com', 000000000000, '', NULL, 'member'),
(5, 0, 'andre123', 'dd573120e473c889140e34e817895495', 'Andre Ghozali', 'andre@gmail.com', 000000000000, '', NULL, 'member'),
(6, 0, 'steven123', 'a36574edb703c814e3ad78273983d3e2', 'Steven Manurung', 'steven@gmail.com', 000000000000, '', NULL, 'member'),
(7, 0, 'cecil123', '9a594df7f083b3fa904242164f2ad2aa', 'Cecillia Pramuditha', 'cecil@gmail.com', 000000000000, '', NULL, 'member'),
(8, 0, 'fadli123', '42390d9e2df6f4a8cb162d6743cb69a7', 'Ahmad Fadli Tambunan', 'fadli@gmail.com', 000000000000, '', NULL, 'member'),
(9, 0, 'fery123', 'd0256bd76c9e1fe1c7f606009fdbf5ff', 'Fery Ananda Pratama', 'fery@gmail.com', 000000000000, '', NULL, 'member'),
(10, 0, 'dayat123', 'ff85143903e9251f3a7f13c20fcaea6d', 'Muhammad Hidayat', 'dayat@gmail.com', 000000000000, '', NULL, 'member'),
(11, 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 000000000000, '', NULL, 'member'),
(12, 0, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'muhammadhidayat509@yahoo.com', 000000000000, '', NULL, 'member'),
(13, 0, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'azis@gmail.com', 000000000000, '', NULL, 'member'),
(14, 0, 'aza', '4124bc0a9335c27f086f24ba207a4912', 'azis', 'aaa@gmail.com', 000000000000, '', NULL, 'member'),
(15, 0, 'Azis8899', '0cc175b9c0f1b6a831c399e269772661', 'Muhammad Azis', 'azis@gmail.com', 000000000000, '', NULL, 'member'),
(16, 0, 'azis8899', '0cc175b9c0f1b6a831c399e269772661', 'azis saputra', 'azis@gmail.com', 000000000000, '', NULL, 'member'),
(17, 0, 'senjaya12', '1609b9cea0295fbf1789d8e75c87af4a', 'Selamet Senjaya', 'senjaya@gmail.com', 000000000000, '', NULL, 'member'),
(18, 0, 'veyyevydv', 'f000fb5ac6a94e0e7b86e4b8c7dc3f00', 'ftefdtfetf', 'hbhdb@gmail.com', 000000000000, '', NULL, 'member'),
(19, 0, 'ahmad123', '8de13959395270bf9d6819f818ab1a00', 'ahmad fadli', 'ahmad@gmail.com', 000000000000, '', NULL, 'member'),
(20, 0, 'rahmad123', '0cc175b9c0f1b6a831c399e269772661', 'rahmad tambunan', 'rahmad@gmail.com', 000000000000, '', NULL, 'member');

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
  ADD PRIMARY KEY (`username`);

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
-- AUTO_INCREMENT for table `user_library`
--
ALTER TABLE `user_library`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
