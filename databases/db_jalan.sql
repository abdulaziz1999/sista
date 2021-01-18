-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Jan 2021 pada 11.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jalan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Jalan`
--

CREATE TABLE `Jalan` (
  `id` int(11) NOT NULL,
  `nomor_urut` int(11) DEFAULT NULL,
  `nm_jln` varchar(50) DEFAULT NULL,
  `p_jln` bigint(20) DEFAULT NULL,
  `status_jln` enum('Provinsi','Kota') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Jalan`
--

INSERT INTO `Jalan` (`id`, `nomor_urut`, `nm_jln`, `p_jln`, `status_jln`) VALUES
(2, 2, 'tes', 13, 'Kota'),
(3, 4, 'tes2', 13, 'Kota'),
(5, 5, 'tes3', 27, 'Provinsi'),
(6, 44, 'Haji imam bonjol', 40, 'Kota');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Jalan`
--
ALTER TABLE `Jalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Jalan`
--
ALTER TABLE `Jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
