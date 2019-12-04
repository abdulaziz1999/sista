-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 07:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stok`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `level` enum('admin','cs','staff_humas') DEFAULT NULL,
  `ttl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `email`, `level`, `ttl`) VALUES
(1, 'Berkah', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', 'admin', 'Sukabumi, 9 Juli 1999'),
(2, 'Bayu', 'operator1', '202cb962ac59075b964b07152d234b70', 'csdqm@gmail.com', 'cs', 'Jakarta, 16 Juli 1998'),
(3, 'Operator2', 'operator2', '202cb962ac59075b964b07152d234b70', 'humas@gmail.com', 'staff_humas', 'Jakarta, 17 Agustus 1999');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `part_number` varchar(32) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `move_tipe` varchar(16) NOT NULL,
  `cur_harga` varchar(4) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brand`
--

INSERT INTO `tb_brand` (`id_brand`, `nama_brand`) VALUES
(20, 'VIXAL - TENTATIVE'),
(21, 'CLING  REFILL - TENTATIVE'),
(22, 'CLING BOTOL - TENTATIVE'),
(23, 'DETERGEN DAIA - TENTATIVE'),
(24, 'DETERGEN ATTACK JAZZ - TENTATIVE'),
(25, 'SABUN CREAM EKONOMI - TENTATIVE'),
(26, 'HAND SOAP - TENTATIVE'),
(27, 'SABUN CUCI PIRING LIQUIS/LARIST '),
(28, 'KAMPER - TENTATIVE'),
(29, 'PROSTEX BOTOL - TENTATIVE'),
(30, 'KARBOL LARIST - TENTATIVE'),
(31, 'STELLA SPRAY - TENTATIVE'),
(32, 'STELLA GANTUNG - TENTATIVE'),
(33, 'CAIRAN PEMBERSIH LANTAI LARIST -'),
(34, 'LAP PELL - TENTATIVE'),
(35, 'SAPU IJUK - TENTATIVE'),
(36, 'SAPU LIDI - TENTATIVE'),
(37, 'WIPER LANTAI - TENTATIVE'),
(38, 'WIPER KACA - TENTATIVE'),
(39, 'EMBER KECIL - TENTATIVE'),
(40, 'PENGKI GAGANG KECIL - TENTATIVE'),
(41, 'SIKAT WC BULAT - TENTATIVE'),
(42, 'SIKAT KM GAGANG PANJANG - TENTAT'),
(43, 'GAYUNG KM - TENTATIVE'),
(44, 'KEMOCENG - TENTATIVE'),
(45, 'KANEBO - TENTATIVE'),
(46, 'EMBER BESAR - TENTATIVE'),
(47, 'SARUNG TANGAN KARET - TENTATIVE'),
(48, 'KAPSTOK (GANTUNGAN KM) - TENTATI'),
(49, 'LAP TANGAN - TENTATIVE'),
(50, 'SPONS BUSA BESAR - TENTATIVE'),
(51, 'PLASTIK SAMPAH 90X120'),
(52, 'PLASTIK SAMPAH 60X100'),
(53, 'KESET KAIN - TENTATIVE'),
(54, 'KESET WELLCOME - TENTATIVE'),
(55, 'EMBER SEDANG - TENTATIVE'),
(56, 'TONG SAMPAH 42L - TENTATIVE'),
(57, 'PENGKI BESAR - TENTATIVE'),
(58, 'SIKAT LANTAI - TENTATIVE'),
(59, 'SARUNG TANGAN BENANG - TENTATIVE'),
(60, 'SEPATU BOAT - TENTATIVE'),
(61, 'SPONS KAWAT - TENTATIVE'),
(62, 'MASKER - TENTATIVE'),
(63, 'KAPE GAGANG - TENTATIVE'),
(64, 'KUAS 3\" - TENTATIVE'),
(65, 'BELENCONG - TENTATIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_issuing`
--

CREATE TABLE `tb_issuing` (
  `id_issuing` int(11) NOT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `no_ref` varchar(64) NOT NULL,
  `picker` varchar(64) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_issuing_item`
--

CREATE TABLE `tb_issuing_item` (
  `id_itemiss` int(11) NOT NULL,
  `id_issuing` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_issuing_temp`
--

CREATE TABLE `tb_issuing_temp` (
  `id_issuing` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `part_number` varchar(32) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `satuan` varchar(3) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(20, 'MPS - ALAT-ALAT KEBERSIHAN'),
(21, 'MPS - CHEMICAL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_receiving`
--

CREATE TABLE `tb_receiving` (
  `id_receiving` int(11) NOT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `no_ref` varchar(64) NOT NULL,
  `supplier` varchar(64) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_receiving_item`
--

CREATE TABLE `tb_receiving_item` (
  `id_item` int(11) NOT NULL,
  `id_receiving` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_receiving_temp`
--

CREATE TABLE `tb_receiving_temp` (
  `id_receiving` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `part_number` varchar(32) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `satuan` varchar(3) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(3) NOT NULL,
  `ket` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nama_satuan`, `ket`) VALUES
(18, 'PCK', 'PACK'),
(19, 'DUS', 'DUS'),
(20, 'BTL', 'BOTOL'),
(21, 'LSN', 'LUSIN'),
(22, 'SCH', 'SACHET'),
(23, 'PCH', 'POUCH'),
(24, 'PCS', 'PCS'),
(25, 'KLG', 'KALENG'),
(26, 'DRG', 'DERIGEN'),
(27, 'GLN', 'GALON');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_barang` int(11) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tb_issuing`
--
ALTER TABLE `tb_issuing`
  ADD PRIMARY KEY (`id_issuing`);

--
-- Indexes for table `tb_issuing_item`
--
ALTER TABLE `tb_issuing_item`
  ADD PRIMARY KEY (`id_itemiss`),
  ADD KEY `FK_tb_issuing_item_tb_barang` (`id_barang`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_receiving`
--
ALTER TABLE `tb_receiving`
  ADD PRIMARY KEY (`id_receiving`);

--
-- Indexes for table `tb_receiving_item`
--
ALTER TABLE `tb_receiving_item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `FK_tb_receiving_item_tb_barang` (`id_barang`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_issuing`
--
ALTER TABLE `tb_issuing`
  MODIFY `id_issuing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_issuing_item`
--
ALTER TABLE `tb_issuing_item`
  MODIFY `id_itemiss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_receiving`
--
ALTER TABLE `tb_receiving`
  MODIFY `id_receiving` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_receiving_item`
--
ALTER TABLE `tb_receiving_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_issuing_item`
--
ALTER TABLE `tb_issuing_item`
  ADD CONSTRAINT `FK_tb_issuing_item_tb_barang` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);

--
-- Constraints for table `tb_receiving_item`
--
ALTER TABLE `tb_receiving_item`
  ADD CONSTRAINT `FK_tb_receiving_item_tb_barang` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
