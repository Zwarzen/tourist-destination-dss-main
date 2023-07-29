-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2023 pada 07.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fuzzy_database_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`) VALUES
('BTKDA', 'Wisata Batukuda', '-'),
('CWLNI', 'Ciwalini', '-'),
('GNPTR', 'Gunung Putri', '-'),
('KBBDG', 'Kebun Binatang Bandung', '-'),
('KPBBO', 'Kampung Bamboo', '-'),
('KWPTH', 'Kawah Putih', '-'),
('PCKBT', 'Puncak Bintang', '-'),
('RCUPS', 'Ranca Upas', '-'),
('SAUJO', 'Saung Angklung Udjo', '-'),
('SGCKH', 'Sungai Cikahuripan', '-'),
('SHYHT', 'Sanghyang Heuleut', '-'),
('STGRD', 'Stone Garden', '-'),
('STPTG', 'Situ Patenggang', '-'),
('STUCS', 'Situ Cisanti', '-'),
('TBKRT', 'Tebing Keraton', '-'),
('THRID', 'Taman Hutan Raya Ir Djuanda', '-'),
('TKPRH', 'Tangkuban Perahu', '-'),
('TSBDG', 'Trans Studio Mall Bandung', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(50) NOT NULL,
  `nama_kriteria` varchar(200) DEFAULT NULL,
  `batas_bawah` double DEFAULT NULL,
  `batas_tengah` double DEFAULT NULL,
  `batas_atas` double DEFAULT NULL,
  `nama_bawah` varchar(200) DEFAULT NULL,
  `nama_tengah` varchar(200) DEFAULT NULL,
  `nama_atas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `batas_bawah`, `batas_tengah`, `batas_atas`, `nama_bawah`, `nama_tengah`, `nama_atas`) VALUES
('FSL', 'Fasilitas', 50, 70, 85, 'Kurang', 'Cukup', 'Lengkap'),
('HRG', 'Harga', 15000, 30000, 50000, 'Murah', 'Sedang', 'Mahal'),
('JRK', 'Jarak', 13, 26, 38, 'Dekat', 'Sedang', 'Jauh'),
('PKR', 'Parkiran', 50, 70, 85, 'Sempit', 'Sedang', 'Luas'),
('SPT', 'Spot Foto', 50, 70, 85, 'Kurang', 'Cukup', 'Keren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` varchar(50) DEFAULT NULL,
  `id_kriteria` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `bawah` double DEFAULT NULL,
  `tengah` double DEFAULT NULL,
  `atas` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`, `bawah`, `tengah`, `atas`) VALUES
(1, 'CWLNI', 'JRK', 42, 0, 0, 1),
(2, 'CWLNI', 'HRG', 25000, 0.3333, 0.6667, 0),
(3, 'CWLNI', 'FSL', 84, 0, 0.0667, 0.93333),
(4, 'CWLNI', 'SPT', 80, 0, 0.3333, 0.6667),
(5, 'CWLNI', 'PKR', 79, 0, 0.4, 0.6),
(6, 'GNPTR', 'JRK', 16, 0.7692, 0.2308, 0),
(7, 'GNPTR', 'HRG', 30000, 0, 1, 0),
(8, 'GNPTR', 'FSL', 81, 0, 0.2667, 0.73333),
(9, 'GNPTR', 'SPT', 87, 0, 0, 1),
(10, 'GNPTR', 'PKR', 82, 0, 0.2, 0.8),
(11, 'KPBBO', 'JRK', 10, 1, 0, 0),
(12, 'KPBBO', 'HRG', 75000, 0, 0, 1),
(13, 'KPBBO', 'FSL', 86, 0, 0, 1),
(14, 'KPBBO', 'SPT', 81, 0, 0.2667, 0.7333),
(15, 'KPBBO', 'PKR', 79, 0, 0.4, 0.6),
(16, 'KWPTH', 'JRK', 45, 0, 0, 1),
(17, 'KWPTH', 'HRG', 45000, 0, 0.25, 0.75),
(18, 'KWPTH', 'FSL', 84, 0, 0.0667, 0.93333),
(19, 'KWPTH', 'SPT', 82, 0, 0.2, 0.8),
(20, 'KWPTH', 'PKR', 80, 0, 0.3333, 0.6667),
(21, 'KBBDG', 'JRK', 4, 1, 0, 0),
(22, 'KBBDG', 'HRG', 55000, 0, 0, 1),
(23, 'KBBDG', 'FSL', 88, 0, 0, 1),
(24, 'KBBDG', 'SPT', 82, 0, 0.2, 0.8),
(25, 'KBBDG', 'PKR', 87, 0, 0, 1),
(26, 'PCKBT', 'JRK', 14, 0.9231, 0.0769, 0),
(27, 'PCKBT', 'HRG', 15000, 1, 0, 0),
(28, 'PCKBT', 'FSL', 76, 0, 0.6, 0.4),
(29, 'PCKBT', 'SPT', 90, 0, 0, 1),
(30, 'PCKBT', 'PKR', 70, 0, 1, 0),
(31, 'RCUPS', 'JRK', 41, 0, 0, 1),
(32, 'RCUPS', 'HRG', 30000, 0, 1, 0),
(33, 'RCUPS', 'FSL', 82, 0, 0.2, 0.8),
(34, 'RCUPS', 'SPT', 85, 0, 0, 1),
(35, 'RCUPS', 'PKR', 82, 0, 0.2, 0.8),
(36, 'SHYHT', 'JRK', 36, 0, 0.1667, 0.8333),
(37, 'SHYHT', 'HRG', 20000, 0.6667, 0.3333, 0),
(38, 'SHYHT', 'FSL', 63, 0.35, 0.65, 0),
(39, 'SHYHT', 'SPT', 85, 0, 0, 1),
(40, 'SHYHT', 'PKR', 70, 0, 1, 0),
(41, 'SAUJO', 'JRK', 6, 1, 0, 0),
(42, 'SAUJO', 'HRG', 60000, 0, 0, 1),
(43, 'SAUJO', 'FSL', 87, 0, 0, 1),
(44, 'SAUJO', 'SPT', 84, 0, 0.0667, 0.9333),
(45, 'SAUJO', 'PKR', 85, 0, 0, 1),
(46, 'STUCS', 'JRK', 43, 0, 0, 1),
(47, 'STUCS', 'HRG', 10000, 1, 0, 0),
(48, 'STUCS', 'FSL', 68, 0.1, 0.9, 0),
(49, 'STUCS', 'SPT', 82, 0, 0.2, 0.8),
(50, 'STUCS', 'PKR', 69, 0.05, 0.95, 0),
(51, 'STPTG', 'JRK', 46, 0, 0, 1),
(52, 'STPTG', 'HRG', 25000, 0.3333, 0.6667, 0),
(53, 'STPTG', 'FSL', 82, 0, 0.2, 0.8),
(54, 'STPTG', 'SPT', 84, 0, 0.0667, 0.9333),
(55, 'STPTG', 'PKR', 85, 0, 0, 1),
(56, 'STGRD', 'JRK', 24, 0.1538, 0.8462, 0),
(57, 'STGRD', 'HRG', 17000, 0.8667, 0.1333, 0),
(58, 'STGRD', 'FSL', 59, 0.55, 0.45, 0),
(59, 'STGRD', 'SPT', 82, 0, 0.2, 0.8),
(60, 'STGRD', 'PKR', 73, 0, 0.8, 0.2),
(61, 'SGCKH', 'JRK', 34, 0, 0.3333, 0.6667),
(62, 'SGCKH', 'HRG', 20000, 0.6667, 0.3333, 0),
(63, 'SGCKH', 'FSL', 51, 0.95, 0.05, 0),
(64, 'SGCKH', 'SPT', 87, 0, 0, 1),
(65, 'SGCKH', 'PKR', 40, 1, 0, 0),
(66, 'THRID', 'JRK', 9, 1, 0, 0),
(67, 'THRID', 'HRG', 20000, 0.6667, 0.3333, 0),
(68, 'THRID', 'FSL', 80, 0, 0.3333, 0.6667),
(69, 'THRID', 'SPT', 81, 0, 0.2667, 0.7333),
(70, 'THRID', 'PKR', 78, 0, 0.4667, 0.5333),
(71, 'TKPRH', 'JRK', 22, 0.3077, 0.6923, 0),
(72, 'TKPRH', 'HRG', 35000, 0, 0.75, 0.25),
(73, 'TKPRH', 'FSL', 83, 0, 0.1333, 0.8667),
(74, 'TKPRH', 'SPT', 83, 0, 0.1333, 0.8667),
(75, 'TKPRH', 'PKR', 83, 0, 0.1333, 0.8667),
(76, 'TBKRT', 'JRK', 13, 1, 0, 0),
(77, 'TBKRT', 'HRG', 17000, 0.8667, 0.1333, 0),
(78, 'TBKRT', 'FSL', 62, 0.4, 0.6, 0),
(79, 'TBKRT', 'SPT', 83, 0, 0.1333, 0.8667),
(80, 'TBKRT', 'PKR', 65, 0.25, 0.75, 0),
(81, 'TSBDG', 'JRK', 3, 1, 0, 0),
(82, 'TSBDG', 'HRG', 180000, 0, 0, 1),
(83, 'TSBDG', 'FSL', 95, 0, 0, 1),
(84, 'TSBDG', 'SPT', 84, 0, 0.0667, 0.9333),
(85, 'TSBDG', 'PKR', 90, 0, 0, 1),
(86, 'BTKDA', 'JRK', 19, 0.5384, 0.4615, 0),
(87, 'BTKDA', 'HRG', 15000, 1, 0, 0),
(88, 'BTKDA', 'FSL', 79, 0, 0.4, 0.6),
(89, 'BTKDA', 'SPT', 80, 0, 0.3333, 0.6667),
(90, 'BTKDA', 'PKR', 68, 0.1, 0.9, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nilai_fuzzy_ibfk_1` (`id_alternatif`),
  ADD KEY `id_kriteria_fuzzy` (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
