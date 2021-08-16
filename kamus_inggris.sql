-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2021 at 08:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamus_inggris`
--

-- --------------------------------------------------------

--
-- Table structure for table `alfabet`
--

CREATE TABLE `alfabet` (
  `id_alfabet` int(11) NOT NULL,
  `nama_alfabet` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suara_alfabet` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alfabet`
--

INSERT INTO `alfabet` (`id_alfabet`, `nama_alfabet`, `suara_alfabet`) VALUES
(5, 'A', NULL),
(6, 'B', NULL),
(7, 'C', NULL),
(8, 'D', NULL),
(9, 'E', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grammar`
--

CREATE TABLE `grammar` (
  `id_grammar` int(11) NOT NULL,
  `nama_grammar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grammar`
--

INSERT INTO `grammar` (`id_grammar`, `nama_grammar`) VALUES
(2, 'Budi is reading a book.');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_ujian`
--

CREATE TABLE `jawaban_ujian` (
  `id_jawaban` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jawaban` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE `kamus` (
  `id_kamus` int(11) NOT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indonesia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `gambar` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`id_kamus`, `english`, `indonesia`, `id_kategori`, `gambar`) VALUES
(7, 'Goat', 'Kambing', 2, 'Kambing.png'),
(8, 'Car', 'Mobil', 3, 'Mobil.png'),
(9, 'Monkey', 'Monyet', 2, 'Monyet.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kamus`
--

CREATE TABLE `kategori_kamus` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_kamus`
--

INSERT INTO `kategori_kamus` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Animals'),
(3, 'Vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(2, 'I'),
(3, 'II');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_materi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materi` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `materi`) VALUES
('M01', 'A', 0x412e706e67),
('M02', 'B', 0x422e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama_murid` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass_murid` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `id_kelas`, `nama_murid`, `username`, `pass_murid`) VALUES
('2020002', 2, 'Cantika', 'cantika', '5f52a10f22935c00f606');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_murid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_materi` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_murid`, `id_materi`, `nilai`) VALUES
(2, '2020002', 'M02', 10),
(3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `id_number` int(11) NOT NULL,
  `nama_number` int(11) DEFAULT NULL,
  `suara_alfabet` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`id_number`, `nama_number`, `suara_alfabet`) VALUES
(2, 1, NULL),
(3, 2, NULL),
(4, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `percakapan`
--

CREATE TABLE `percakapan` (
  `id_percakapan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kalimat` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_percakapan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `percakapan`
--

INSERT INTO `percakapan` (`id_percakapan`, `nama`, `kalimat`, `no_percakapan`) VALUES
(2, 'Andi', 'Hi, Udin!', 1),
(3, 'Udin', 'Hi, Andi! How are you?', 2),
(4, 'Andi', 'I am fine, and You?', 3),
(5, 'Udin', 'jhgjh huhh iuyiuu iuhiuyi uguyy yuguy uuyuy uuiy iuyit ututu tuytuy yygu', 4);

-- --------------------------------------------------------

--
-- Table structure for table `soal_ujian`
--

CREATE TABLE `soal_ujian` (
  `id_soal` int(11) NOT NULL,
  `nama_soal` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `a` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `c` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `d` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `true` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `soal_ujian`
--

INSERT INTO `soal_ujian` (`id_soal`, `nama_soal`, `a`, `b`, `c`, `d`, `true`, `level`, `gambar`) VALUES
(32, 'sds', 'd', 'ds', 'a', 'ff', 'c', 1, ''),
(33, 'sds..', 'd', 'ds', 'a', 'ff', 'a', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tebakgambar`
--

CREATE TABLE `tebakgambar` (
  `id_tebakgambar` int(11) NOT NULL,
  `id_kamus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tebakgambar`
--

INSERT INTO `tebakgambar` (`id_tebakgambar`, `id_kamus`) VALUES
(3, 7),
(5, 7),
(2, 8),
(4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tugas_murid`
--

CREATE TABLE `tugas_murid` (
  `id_tugasmurid` int(11) NOT NULL,
  `id_jawaban` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `username`, `password`, `kelas`, `level`, `create_at`, `updated_at`) VALUES
(24, NULL, 'd', '8277e0910d750195b448797616e091ad', NULL, '2', '2021-01-31 04:32:08', '2021-01-31 04:32:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alfabet`
--
ALTER TABLE `alfabet`
  ADD PRIMARY KEY (`id_alfabet`);

--
-- Indexes for table `grammar`
--
ALTER TABLE `grammar`
  ADD PRIMARY KEY (`id_grammar`);

--
-- Indexes for table `jawaban_ujian`
--
ALTER TABLE `jawaban_ujian`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`id_kamus`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_kamus`
--
ALTER TABLE `kategori_kamus`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_murid` (`id_murid`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `percakapan`
--
ALTER TABLE `percakapan`
  ADD PRIMARY KEY (`id_percakapan`);

--
-- Indexes for table `soal_ujian`
--
ALTER TABLE `soal_ujian`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tebakgambar`
--
ALTER TABLE `tebakgambar`
  ADD PRIMARY KEY (`id_tebakgambar`),
  ADD KEY `id_kamus` (`id_kamus`);

--
-- Indexes for table `tugas_murid`
--
ALTER TABLE `tugas_murid`
  ADD PRIMARY KEY (`id_tugasmurid`),
  ADD KEY `id_jawaban` (`id_jawaban`),
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
-- AUTO_INCREMENT for table `alfabet`
--
ALTER TABLE `alfabet`
  MODIFY `id_alfabet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grammar`
--
ALTER TABLE `grammar`
  MODIFY `id_grammar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawaban_ujian`
--
ALTER TABLE `jawaban_ujian`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `id_kamus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori_kamus`
--
ALTER TABLE `kategori_kamus`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `number`
--
ALTER TABLE `number`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `percakapan`
--
ALTER TABLE `percakapan`
  MODIFY `id_percakapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_ujian`
--
ALTER TABLE `soal_ujian`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tebakgambar`
--
ALTER TABLE `tebakgambar`
  MODIFY `id_tebakgambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas_murid`
--
ALTER TABLE `tugas_murid`
  MODIFY `id_tugasmurid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_ujian`
--
ALTER TABLE `jawaban_ujian`
  ADD CONSTRAINT `jawaban_ujian_ibfk_1` FOREIGN KEY (`id_soal`) REFERENCES `soal_ujian` (`id_soal`);

--
-- Constraints for table `kamus`
--
ALTER TABLE `kamus`
  ADD CONSTRAINT `kamus_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_kamus` (`id_kategori`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `murid` (`id_murid`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`);

--
-- Constraints for table `tebakgambar`
--
ALTER TABLE `tebakgambar`
  ADD CONSTRAINT `tebakgambar_ibfk_1` FOREIGN KEY (`id_kamus`) REFERENCES `kamus` (`id_kamus`);

--
-- Constraints for table `tugas_murid`
--
ALTER TABLE `tugas_murid`
  ADD CONSTRAINT `tugas_murid_ibfk_1` FOREIGN KEY (`id_jawaban`) REFERENCES `jawaban_ujian` (`id_jawaban`),
  ADD CONSTRAINT `tugas_murid_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
