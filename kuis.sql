-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10 Jul 2018 pada 11.56
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','mahasantri','dosen') DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `level`, `foto`) VALUES
(1, 'Abdul Aziz', 'aziz', 'a3012ec7d2aa8c3f93ca94e0be8ae0e0', 'aziz@gmail.com', 'admin', '1.png'),
(2, 'Ridwansayah', 'santri', '7d1959dcd37659e4cfdc794945cea9a8', 'santri@gmail.com', 'mahasantri', ''),
(3, 'Dudi Fitriadi', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen@gmail.com', 'dosen', NULL),
(4, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com`', 'mahasantri', NULL),
(8, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', NULL),
(9, 'Yuliadi', 'yuliadi', 'e60838b9f0c0ed98a486f231a4df9c4a', 'yuliadi@gmail.com', 'dosen', NULL),
(10, 'Nasrul', 'nasrul', '6f76ea47c8facb083934b74117386d47', 'nasrul@gmail.com', 'dosen', NULL),
(11, 'Wahyu', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'wahyu@gmail.com', 'dosen', NULL),
(12, 'Nanang Kuswana', 'nanang', 'cc8839950896aa17b3224887089241ba', 'nanang@gmail.com', 'dosen', NULL),
(13, 'Rizkiyadi', 'rizki', 'd27760903cceed436111922912553b96', 'rizki@gmai.com', 'dosen', NULL),
(14, 'Wahyu Mubarok', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'wahyum@gmail.com', 'dosen', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `nm_matkul` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `nm_matkul`) VALUES
(1, 'Pemrograman Web Dasar'),
(2, 'Bahasa Inggris'),
(3, 'Linux Fundamental'),
(4, 'Algoritma dan Pemrograman'),
(5, 'Komputer dan Jaringan'),
(6, 'Teknik Penulisan Ilmiah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id`, `id_dosen`, `id_matkul`) VALUES
(1, 12, 6),
(2, 3, 3),
(3, 10, 1),
(4, 14, 2),
(5, 9, 5),
(6, 13, 4),
(7, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, '2018/1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_mahasantri` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `jawaban` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_mahasantri`, `id_pertanyaan`, `id_pengajar`, `id_matkul`, `jawaban`) VALUES
(1, 4, 1, 2, 3, 1),
(2, 4, 5, 2, 3, 2),
(3, 4, 6, 2, 3, 3),
(4, 4, 7, 2, 3, 4),
(5, 4, 8, 2, 3, 5),
(6, 4, 9, 2, 3, 4),
(7, 4, 10, 2, 3, 3),
(8, 4, 11, 2, 3, 2),
(9, 4, 12, 2, 3, 1),
(10, 4, 13, 2, 3, 2),
(11, 4, 2, 2, 3, 1),
(12, 4, 3, 2, 3, 2),
(13, 4, 4, 2, 3, 3),
(14, 4, 14, 2, 3, 4),
(15, 4, 15, 2, 3, 5),
(16, 4, 1, 7, 5, 1),
(17, 4, 5, 7, 5, 2),
(18, 4, 6, 7, 5, 3),
(19, 4, 7, 7, 5, 4),
(20, 4, 8, 7, 5, 5),
(21, 4, 9, 7, 5, 4),
(22, 4, 10, 7, 5, 3),
(23, 4, 11, 7, 5, 2),
(24, 4, 12, 7, 5, 1),
(25, 4, 13, 7, 5, 2),
(26, 4, 2, 7, 5, 1),
(27, 4, 3, 7, 5, 2),
(28, 4, 4, 7, 5, 3),
(29, 4, 14, 7, 5, 4),
(30, 4, 15, 7, 5, 5),
(31, 2, 1, 2, 3, 1),
(32, 2, 5, 2, 3, 2),
(33, 2, 6, 2, 3, 3),
(34, 2, 7, 2, 3, 4),
(35, 2, 8, 2, 3, 5),
(36, 2, 9, 2, 3, 3),
(37, 2, 10, 2, 3, 4),
(38, 2, 11, 2, 3, 3),
(39, 2, 12, 2, 3, 2),
(40, 2, 13, 2, 3, 1),
(41, 2, 2, 2, 3, 5),
(42, 2, 3, 2, 3, 4),
(43, 2, 4, 2, 3, 3),
(44, 2, 14, 2, 3, 2),
(45, 2, 15, 2, 3, 1),
(46, 2, 1, 7, 5, 5),
(47, 2, 5, 7, 5, 4),
(48, 2, 6, 7, 5, 3),
(49, 2, 7, 7, 5, 2),
(50, 2, 8, 7, 5, 1),
(51, 2, 9, 7, 5, 2),
(52, 2, 10, 7, 5, 3),
(53, 2, 11, 7, 5, 4),
(54, 2, 12, 7, 5, 5),
(55, 2, 13, 7, 5, 4),
(56, 2, 2, 7, 5, 5),
(57, 2, 3, 7, 5, 4),
(58, 2, 4, 7, 5, 3),
(59, 2, 14, 7, 5, 2),
(60, 2, 15, 7, 5, 1),
(61, 2, 1, 1, 6, 2),
(62, 2, 5, 1, 6, 2),
(63, 2, 6, 1, 6, 1),
(64, 2, 7, 1, 6, 2),
(65, 2, 8, 1, 6, 3),
(66, 2, 9, 1, 6, 4),
(67, 2, 10, 1, 6, 5),
(68, 2, 11, 1, 6, 4),
(69, 2, 12, 1, 6, 3),
(70, 2, 13, 1, 6, 2),
(71, 2, 2, 1, 6, 2),
(72, 2, 3, 1, 6, 3),
(73, 2, 4, 1, 6, 2),
(74, 2, 14, 1, 6, 1),
(75, 2, 15, 1, 6, 2),
(76, 2, 1, 5, 5, 5),
(77, 2, 5, 5, 5, 4),
(78, 2, 6, 5, 5, 3),
(79, 2, 7, 5, 5, 2),
(80, 2, 8, 5, 5, 1),
(81, 2, 9, 5, 5, 2),
(82, 2, 10, 5, 5, 3),
(83, 2, 11, 5, 5, 4),
(84, 2, 12, 5, 5, 5),
(85, 2, 13, 5, 5, 4),
(86, 2, 2, 5, 5, 5),
(87, 2, 3, 5, 5, 4),
(88, 2, 4, 5, 5, 3),
(89, 2, 14, 5, 5, 2),
(90, 2, 15, 5, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jpertanyaan`
--

CREATE TABLE `tb_jpertanyaan` (
  `id_jpertanyaan` int(11) NOT NULL,
  `jenis_pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_jpertanyaan`
--

INSERT INTO `tb_jpertanyaan` (`id_jpertanyaan`, `jenis_pertanyaan`) VALUES
(1, 'Penilaian Pengajar'),
(2, 'Materi Mata Kuliah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasantri`
--

CREATE TABLE `tb_mahasantri` (
  `id_mahasantri` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `agama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nohp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_mahasantri`
--

INSERT INTO `tb_mahasantri` (`id_mahasantri`, `nama`, `nim`, `kelas`, `agama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `email`, `nohp`) VALUES
(1, 'Abdul Aziz', '170101001', 'mekkah', 'islam', 'Sukabumi', '1999-07-04', 'Sukabumi', 'azizmenor96@gmail.com', '089627005208'),
(3, 'Arisandi', '170101003', 'Mekkah', 'Isalam', 'Makkasar', '1999-10-10', 'Makkasar', 'ariasandi@gmail.com', '08946327864'),
(4, 'Ikram', '170101004', 'Madinah', 'Islam', 'Bangka', '1999-09-09', 'Bangka Belitung', 'Ikrambangka@gmail.com', '08945375663'),
(5, 'Aswar', '170101005', 'Madinah', 'Islam', 'Makassar', '1999-09-07', 'Makassar', 'aswar@gamil.com', '08364746643'),
(6, 'Ariyanto', '170101006', 'Mekkah', 'islam', 'Pontianak', '1999-09-03', 'Pontianak', 'ariyanto@gmail.com', '089654435534'),
(7, 'Ade irawan', '170101007', 'Madinah', 'Islam', 'Pontianak', '1999-08-01', 'Pontianak', 'ade@gmail.com', '08644635433');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_jpertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `id_pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_jpertanyaan`, `pertanyaan`, `id_pengajar`) VALUES
(1, 1, 'Ketepatan dalam memulai pelajaran', 0),
(2, 2, 'Alokasi waktu yang di berikan untuk menguasai meteri', 0),
(3, 2, 'Kemudahan dalam memehami materi yang diajarkan', 0),
(4, 2, 'Kesesuaian materi yang diajarkan dikelas dengan yang diinginkan', 0),
(5, 1, 'Ketepatan dalam mengakhiri pelajaran', 0),
(6, 1, 'Penampilan dan kerapian', 0),
(7, 1, 'Kesopanan dalam mengajar', 0),
(8, 1, 'Alur dan sistematika pengajaran yang disampaikan', 0),
(9, 1, 'Kemampuan memotivasi peserta didik', 0),
(10, 1, 'Penguasaan materi yang disampaikan', 0),
(11, 1, 'Kejelasan suara dalam menyampaikan materi', 0),
(12, 1, 'Keadilan dalam membimbing  peserta didik', 0),
(13, 1, 'Kesabaran dalam mengajar', 0),
(14, 2, 'Modul yang diberikan sebagai panduan untuk memahami materi', 0),
(15, 2, 'Kesesuaian workshop dengan materi yang diajarkan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_jpertanyaan`
--
ALTER TABLE `tb_jpertanyaan`
  ADD PRIMARY KEY (`id_jpertanyaan`);

--
-- Indexes for table `tb_mahasantri`
--
ALTER TABLE `tb_mahasantri`
  ADD PRIMARY KEY (`id_mahasantri`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_jpertanyaan`
--
ALTER TABLE `tb_jpertanyaan`
  MODIFY `id_jpertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mahasantri`
--
ALTER TABLE `tb_mahasantri`
  MODIFY `id_mahasantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
