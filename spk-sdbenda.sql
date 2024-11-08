-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2024 pada 03.34
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-sdbenda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `periode` int(11) NOT NULL,
  `n_pengetahuan` int(11) NOT NULL,
  `n_keterampilan` int(11) NOT NULL,
  `n_kehadiran` int(11) NOT NULL,
  `n_perilaku` int(11) NOT NULL,
  `n_presentasi` varchar(20) NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisis`
--

INSERT INTO `analisis` (`id_analisis`, `id_siswa`, `id_kriteria`, `periode`, `n_pengetahuan`, `n_keterampilan`, `n_kehadiran`, `n_perilaku`, `n_presentasi`, `hasil`) VALUES
(1, 1, 1, 2024, 100, 80, 80, 80, 'Provinsi', 0.636),
(2, 2, 1, 2024, 80, 80, 80, 80, 'Sekolah', 0.611),
(3, 3, 1, 2024, 80, 100, 80, 60, 'Kecamatan', 0.622),
(4, 4, 1, 2024, 60, 60, 40, 80, 'Kecamatan', 0.44),
(5, 5, 1, 2024, 80, 60, 60, 60, 'Kabupaten', 0.488),
(6, 6, 1, 2024, 100, 60, 40, 80, 'Sekolah', 0.536),
(7, 7, 1, 2024, 80, 40, 60, 60, 'Sekolah', 0.456),
(8, 8, 1, 2024, 100, 100, 100, 100, 'Kabupaten', 0.752),
(9, 9, 1, 2024, 100, 40, 60, 80, 'Provinsi', 0.508),
(10, 10, 1, 2024, 40, 80, 60, 60, 'Provinsi', 0.438),
(11, 11, 1, 2024, 100, 60, 40, 80, 'Provinsi', 0.516),
(12, 12, 1, 2024, 40, 80, 100, 60, 'Provinsi', 0.512),
(13, 13, 1, 2024, 100, 80, 40, 60, 'Sekolah', 0.555),
(14, 14, 1, 2024, 80, 40, 80, 100, 'Provinsi', 0.527),
(15, 15, 1, 2024, 100, 80, 60, 40, 'Kabupaten', 0.552),
(16, 16, 1, 2024, 100, 60, 80, 60, 'Nasional', 0.556),
(17, 17, 1, 2024, 80, 60, 80, 100, 'Kabupaten', 0.579),
(18, 18, 1, 2024, 60, 80, 40, 60, 'Kabupaten', 0.453),
(19, 19, 1, 2024, 40, 80, 100, 60, 'Nasional', 0.505),
(20, 20, 1, 2024, 80, 100, 60, 40, 'Sekolah', 0.565),
(21, 21, 1, 2024, 100, 40, 60, 80, 'Kabupaten', 0.515),
(22, 22, 1, 2024, 80, 40, 100, 60, 'Kecamatan', 0.523),
(23, 23, 1, 2024, 40, 80, 60, 100, 'Kabupaten', 0.499),
(24, 24, 1, 2024, 100, 60, 40, 60, 'Provinsi', 0.489),
(25, 25, 1, 2024, 100, 100, 40, 60, 'Provinsi', 0.58),
(26, 26, 1, 2024, 80, 60, 80, 40, 'Kecamatan', 0.504),
(27, 27, 1, 2024, 40, 100, 80, 60, 'Kabupaten', 0.527),
(28, 28, 1, 2024, 80, 60, 40, 100, 'Kabupaten', 0.505),
(29, 29, 1, 2024, 60, 40, 60, 100, 'Provinsi', 0.446),
(30, 30, 1, 2024, 60, 40, 80, 100, 'Kabupaten', 0.49),
(31, 31, 1, 2024, 80, 60, 40, 80, 'Kecamatan', 0.484),
(32, 32, 1, 2024, 80, 60, 40, 100, 'Provinsi', 0.498),
(33, 33, 1, 2024, 80, 100, 60, 40, 'Nasional', 0.538),
(34, 34, 1, 2024, 100, 60, 80, 100, 'Nasional', 0.61),
(35, 35, 1, 2024, 40, 100, 80, 100, 'Kabupaten', 0.581),
(36, 36, 1, 2024, 60, 80, 40, 100, 'Kecamatan', 0.513),
(37, 37, 1, 2024, 40, 60, 80, 40, 'Nasional', 0.395),
(38, 38, 1, 2024, 40, 60, 80, 100, 'Sekolah', 0.503),
(39, 39, 1, 2024, 80, 60, 80, 60, 'Kabupaten', 0.525),
(40, 40, 1, 2024, 100, 40, 80, 60, 'Sekolah', 0.538),
(41, 41, 1, 2024, 40, 100, 80, 60, 'Kabupaten', 0.527),
(42, 42, 1, 2024, 60, 80, 80, 40, 'Nasional', 0.486),
(43, 43, 1, 2024, 100, 80, 40, 60, 'Nasional', 0.528),
(44, 44, 1, 2024, 80, 60, 40, 60, 'Nasional', 0.437),
(45, 45, 1, 2024, 80, 60, 100, 60, 'Kecamatan', 0.568),
(46, 46, 1, 2024, 100, 80, 40, 100, 'Sekolah', 0.609),
(47, 47, 1, 2024, 80, 60, 40, 100, 'Sekolah', 0.518),
(48, 48, 1, 2024, 40, 80, 80, 100, 'Kabupaten', 0.536),
(49, 49, 1, 2024, 80, 60, 40, 100, 'Kabupaten', 0.505),
(50, 50, 1, 2024, 100, 80, 40, 60, 'Kabupaten', 0.542),
(51, 51, 1, 2024, 40, 60, 100, 60, 'Kecamatan', 0.479),
(52, 52, 1, 2024, 40, 80, 80, 60, 'Kabupaten', 0.482),
(53, 53, 1, 2024, 80, 60, 40, 60, 'Nasional', 0.437),
(54, 54, 1, 2024, 100, 100, 40, 60, 'Provinsi', 0.58),
(55, 55, 1, 2024, 100, 80, 40, 60, 'Provinsi', 0.535),
(56, 56, 1, 2024, 40, 80, 40, 100, 'Kabupaten', 0.462),
(57, 57, 1, 2024, 100, 60, 80, 40, 'Kabupaten', 0.543),
(58, 58, 1, 2024, 100, 80, 60, 40, 'Sekolah', 0.565),
(59, 59, 1, 2024, 60, 100, 80, 40, 'Kabupaten', 0.545),
(60, 60, 1, 2024, 80, 100, 80, 100, 'Kecamatan', 0.676),
(61, 61, 1, 2024, 60, 80, 40, 100, 'Kabupaten', 0.507),
(62, 62, 1, 2024, 40, 40, 100, 80, 'Kabupaten', 0.455),
(63, 63, 1, 2024, 80, 80, 100, 40, 'Kecamatan', 0.587),
(64, 64, 1, 2024, 40, 60, 80, 100, 'Provinsi', 0.483),
(65, 65, 1, 2024, 100, 60, 40, 80, 'Kabupaten', 0.523),
(66, 66, 1, 2024, 100, 40, 80, 60, 'Sekolah', 0.538),
(67, 67, 1, 2024, 80, 40, 60, 80, 'Provinsi', 0.463),
(68, 68, 1, 2024, 60, 80, 40, 100, 'Sekolah', 0.52),
(69, 69, 1, 2024, 40, 60, 100, 60, 'Kabupaten', 0.473),
(70, 70, 1, 2024, 60, 100, 40, 60, 'Provinsi', 0.491),
(71, 71, 1, 2024, 100, 60, 80, 60, 'Provinsi', 0.563),
(72, 72, 1, 2024, 80, 80, 100, 60, 'Kecamatan', 0.614),
(73, 73, 1, 2024, 100, 60, 80, 40, 'Sekolah', 0.556),
(74, 74, 1, 2024, 100, 80, 60, 80, 'Nasional', 0.592),
(75, 75, 1, 2024, 40, 80, 40, 80, 'Provinsi', 0.428),
(76, 76, 1, 2024, 40, 100, 80, 40, 'Kecamatan', 0.506),
(77, 77, 1, 2024, 80, 60, 80, 40, 'Kabupaten', 0.498),
(78, 78, 1, 2024, 100, 80, 40, 60, 'Kecamatan', 0.548),
(79, 79, 1, 2024, 40, 100, 60, 80, 'Provinsi', 0.51),
(80, 80, 1, 2024, 100, 80, 40, 60, 'Kecamatan', 0.548),
(81, 81, 1, 2024, 40, 60, 100, 80, 'Kecamatan', 0.506),
(82, 82, 1, 2024, 80, 100, 60, 100, 'Kecamatan', 0.639),
(83, 83, 1, 2024, 100, 60, 80, 40, 'Provinsi', 0.536),
(84, 84, 1, 2024, 100, 60, 40, 60, 'Kecamatan', 0.502),
(85, 85, 1, 2024, 60, 100, 80, 60, 'Kabupaten', 0.572),
(86, 86, 1, 2024, 40, 80, 80, 60, 'Nasional', 0.468),
(87, 87, 1, 2024, 100, 60, 100, 60, 'Sekolah', 0.62),
(88, 88, 1, 2024, 40, 80, 100, 60, 'Provinsi', 0.512),
(89, 89, 1, 2024, 100, 60, 80, 60, 'Nasional', 0.556),
(90, 90, 1, 2024, 100, 60, 40, 60, 'Provinsi', 0.489),
(91, 91, 1, 2024, 100, 40, 80, 60, 'Sekolah', 0.538),
(92, 92, 1, 2024, 80, 40, 60, 100, 'Nasional', 0.483),
(93, 93, 1, 2024, 60, 80, 40, 100, 'Kecamatan', 0.513),
(94, 94, 1, 2024, 60, 100, 80, 40, 'Kabupaten', 0.545),
(95, 95, 1, 2024, 80, 60, 40, 100, 'Kabupaten', 0.505),
(96, 96, 1, 2024, 60, 100, 40, 60, 'Kecamatan', 0.504),
(97, 97, 1, 2024, 40, 60, 80, 100, 'Kecamatan', 0.496),
(98, 98, 1, 2024, 100, 80, 40, 60, 'Kabupaten', 0.542),
(99, 99, 1, 2024, 60, 40, 100, 80, 'Kecamatan', 0.506),
(100, 100, 1, 2024, 60, 40, 100, 80, 'Kabupaten', 0.5),
(101, 101, 1, 2024, 60, 80, 40, 100, 'Kecamatan', 0.513),
(102, 102, 1, 2024, 60, 80, 100, 60, 'Kabupaten', 0.564),
(103, 103, 1, 2024, 60, 80, 100, 40, 'Kecamatan', 0.543),
(104, 104, 1, 2024, 60, 40, 80, 100, 'Sekolah', 0.503),
(105, 105, 1, 2024, 60, 100, 40, 60, 'Provinsi', 0.491),
(106, 106, 1, 2024, 60, 100, 80, 60, 'Kabupaten', 0.572),
(107, 107, 1, 2024, 60, 100, 40, 60, 'Provinsi', 0.491),
(108, 108, 1, 2024, 60, 80, 40, 100, 'Kecamatan', 0.513),
(109, 109, 1, 2024, 60, 80, 40, 60, 'Kabupaten', 0.453),
(110, 110, 1, 2024, 100, 40, 80, 60, 'Kabupaten', 0.525),
(111, 111, 1, 2024, 40, 80, 100, 60, 'Kecamatan', 0.525),
(112, 112, 1, 2024, 60, 40, 100, 60, 'Kecamatan', 0.479),
(113, 113, 1, 2024, 60, 40, 80, 100, 'Kabupaten', 0.49),
(114, 114, 1, 2024, 100, 40, 100, 80, 'Kabupaten', 0.589),
(115, 115, 1, 2024, 100, 60, 40, 80, 'Kabupaten', 0.523),
(116, 116, 1, 2024, 60, 80, 60, 100, 'Provinsi', 0.537),
(117, 117, 1, 2024, 80, 40, 80, 60, 'Kabupaten', 0.48),
(118, 118, 1, 2024, 80, 80, 100, 60, 'Provinsi', 0.601),
(119, 119, 1, 2024, 80, 80, 40, 100, 'Kabupaten', 0.551),
(120, 120, 1, 2024, 60, 100, 40, 60, 'Kabupaten', 0.498),
(121, 121, 1, 2024, 60, 80, 100, 60, 'Nasional', 0.55),
(122, 122, 1, 2024, 60, 80, 80, 40, 'Provinsi', 0.493),
(123, 123, 1, 2024, 100, 100, 80, 40, 'Kecamatan', 0.64),
(124, 124, 1, 2024, 60, 100, 80, 80, 'Nasional', 0.585),
(125, 125, 1, 2024, 80, 40, 80, 100, 'Provinsi', 0.527),
(126, 126, 1, 2024, 60, 80, 40, 100, 'Kabupaten', 0.507),
(127, 127, 1, 2024, 60, 80, 100, 80, 'Sekolah', 0.604),
(128, 128, 1, 2024, 60, 100, 40, 80, 'Sekolah', 0.538),
(129, 129, 1, 2024, 100, 60, 80, 40, 'Nasional', 0.529),
(130, 130, 1, 2024, 80, 100, 80, 60, 'Kabupaten', 0.616),
(131, 131, 1, 2024, 60, 80, 40, 60, 'Provinsi', 0.446),
(132, 132, 1, 2024, 60, 80, 80, 60, 'Kabupaten', 0.527),
(133, 133, 1, 2024, 60, 100, 40, 60, 'Sekolah', 0.511),
(134, 134, 1, 2024, 100, 100, 40, 60, 'Sekolah', 0.6),
(135, 135, 1, 2024, 60, 80, 100, 60, 'Provinsi', 0.557),
(136, 136, 1, 2024, 80, 60, 40, 100, 'Kecamatan', 0.511),
(137, 137, 1, 2024, 40, 60, 100, 80, 'Sekolah', 0.513),
(138, 138, 1, 2024, 80, 40, 80, 100, 'Nasional', 0.52),
(139, 139, 1, 2024, 60, 40, 100, 80, 'Kabupaten', 0.5),
(140, 140, 1, 2024, 60, 80, 40, 80, 'Sekolah', 0.493),
(141, 141, 1, 2024, 60, 40, 80, 60, 'Nasional', 0.422),
(142, 142, 1, 2024, 60, 80, 100, 60, 'Kecamatan', 0.57),
(143, 143, 1, 2024, 60, 100, 40, 60, 'Provinsi', 0.491),
(144, 144, 1, 2024, 60, 80, 100, 60, 'Sekolah', 0.577),
(145, 145, 1, 2024, 60, 80, 40, 100, 'Kecamatan', 0.513),
(146, 146, 1, 2024, 100, 80, 80, 60, 'Kabupaten', 0.616),
(147, 147, 1, 2024, 80, 60, 40, 100, 'Kabupaten', 0.505),
(148, 148, 1, 2024, 100, 80, 80, 60, 'Kabupaten', 0.616),
(149, 149, 1, 2024, 60, 80, 40, 100, 'Kabupaten', 0.507),
(150, 150, 1, 2024, 60, 100, 80, 80, 'Kecamatan', 0.605),
(151, 151, 1, 2024, 60, 100, 40, 60, 'Nasional', 0.484),
(152, 152, 1, 2024, 40, 100, 40, 80, 'Sekolah', 0.493),
(153, 153, 1, 2024, 100, 40, 80, 80, 'Nasional', 0.538),
(154, 154, 1, 2024, 80, 100, 80, 40, 'Kecamatan', 0.595),
(155, 155, 1, 2024, 60, 100, 40, 80, 'Kecamatan', 0.531),
(156, 156, 1, 2024, 80, 60, 40, 80, 'Sekolah', 0.491),
(157, 157, 1, 2024, 60, 80, 40, 60, 'Sekolah', 0.466),
(158, 158, 1, 2024, 80, 40, 100, 60, 'Provinsi', 0.51),
(159, 159, 1, 2024, 80, 40, 60, 100, 'Kecamatan', 0.503),
(160, 160, 1, 2024, 100, 80, 80, 40, 'Sekolah', 0.602),
(161, 161, 1, 2024, 60, 100, 80, 60, 'Sekolah', 0.585),
(162, 162, 1, 2024, 80, 100, 80, 80, 'Kecamatan', 0.649),
(163, 163, 1, 2024, 60, 60, 60, 60, 'Sekolah', 0.457),
(164, 164, 1, 2024, 80, 80, 60, 60, 'Provinsi', 0.527),
(165, 165, 1, 2024, 60, 80, 100, 80, 'Kecamatan', 0.597),
(166, 166, 1, 2024, 100, 60, 60, 100, 'Kecamatan', 0.593),
(167, 167, 1, 2024, 100, 40, 80, 60, 'Kecamatan', 0.531),
(168, 168, 1, 2024, 60, 100, 100, 40, 'Provinsi', 0.575),
(169, 169, 1, 2024, 100, 60, 100, 100, 'Kecamatan', 0.667),
(170, 170, 1, 2024, 100, 60, 100, 100, 'Nasional', 0.647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(125) NOT NULL,
  `sub_kriteria` varchar(125) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `sub_kriteria`, `bobot`) VALUES
(1, 'Nilai Keterampilan', 'Bagus', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `nama_siswa`, `jk`, `kelas`, `nis`) VALUES
(1, 1, 'Aar Mubarok', 'Laki-Laki', 'V', '0121853920'),
(2, 1, 'Adam Sabani Saputra', 'Laki-Laki', 'V', '3156125990'),
(3, 1, 'Ade Khoiril Bahrudin', 'Laki-Laki', 'V', '0121928261'),
(4, 1, 'Ade Solehudin', 'Laki-Laki', 'V', '0125745184'),
(5, 1, 'Adellia Rachmawati', 'Perempuan', 'V', '3161247160'),
(6, 1, 'Adi Cahyadi', 'Laki-Laki', 'V', '3159095031'),
(7, 1, 'Afidatul Farhah', 'Perempuan', 'V', '3149593584'),
(8, 1, 'Agus Ramadhani', 'Laki-Laki', 'V', '0125043543'),
(9, 1, 'Aida Darmayanti', 'Perempuan', 'V', '0128420465'),
(10, 1, 'Aidil Fazri', 'Laki-Laki', 'V', '0114449307'),
(11, 1, 'Aiedil Akbar', 'Laki-Laki', 'V', '3141842053'),
(12, 1, 'Aila Giyani', 'Perempuan', 'V', '3178851943'),
(13, 1, 'Ainiya Dwi Azmi', 'Perempuan', 'V', '3161001246'),
(14, 1, 'Ainun Dahnila', 'Perempuan', 'V', '3162111576'),
(15, 1, 'Aisyah Aila Zahra', 'Perempuan', 'V', '3151796498'),
(16, 1, 'Ajril Wafi Faujan', 'Laki-Laki', 'V', '3164767335'),
(17, 1, 'Akmal Amirul Hakim', 'Laki-Laki', 'V', '0115460361'),
(18, 1, 'Al-Ghozali', 'Laki-Laki', 'V', '3150314866'),
(19, 1, 'Alam Dermawan', 'Laki-Laki', 'V', '3175221835'),
(20, 1, 'Albaqir Romadhoni Utomo', 'Laki-Laki', 'V', '0139508022'),
(21, 2, 'Alfin Alfiansyah', 'Laki-Laki', 'V', '3161898383'),
(22, 2, 'Alifiya Shafana', 'Perempuan', 'V', '3162004775'),
(23, 2, 'Althaf Zamzami Muhaemin', 'Laki-Laki', 'V', '0153695300'),
(24, 2, 'Amanda Rindiawati', 'Perempuan', 'V', '0125650295'),
(25, 2, 'Andhika Pratama', 'Laki-Laki', 'V', '3150277698'),
(26, 2, 'Anisa Nur Husna', 'Perempuan', 'V', '3155248660'),
(27, 2, 'Annisa Mufia Ashadiya', 'Perempuan', 'V', '3171363179'),
(28, 2, 'Aphi Bahrul Ilmi', 'Laki-Laki', 'V', '3163238250'),
(29, 2, 'Aqilla Zihana Aziza', 'Perempuan', 'V', '3162566579'),
(30, 2, 'Arin Jahrini', 'Perempuan', 'V', '3177912042'),
(31, 2, 'Ariq Jalalludin', 'Laki-Laki', 'V', '3161856272'),
(32, 2, 'Arka Geovan Iniesta Suherman', 'Laki-Laki', 'V', '3159915621'),
(33, 2, 'Arka Valendra Sudistira', 'Laki-Laki', 'V', '3143527872'),
(34, 2, 'Arya Taufiq Nugraha', 'Laki-Laki', 'V', '3173376793'),
(35, 2, 'Asep Sukma Wijaya', 'Laki-Laki', 'V', '3143752037'),
(36, 2, 'Assyifa Aura Putri', 'Perempuan', 'V', '3169128031'),
(37, 2, 'Athaya Najib Zaahirulhaq', 'Laki-Laki', 'V', '3156356039'),
(38, 2, 'Audita Farihah Khoiriyah', 'Perempuan', 'V', '0129631282'),
(39, 2, 'Aufa Aulia', 'Perempuan', 'V', '3143730308'),
(40, 2, 'Aulia Safitri', 'Perempuan', 'V', '0138426386'),
(41, 3, 'Awaludin Alfarizki', 'Laki-Laki', 'V', '3155419908'),
(42, 3, 'Azis Firmansyah', 'Laki-Laki', 'V', '0127040933'),
(43, 3, 'Azizah Nur Falaah', 'Perempuan', 'V', '3149085645'),
(44, 3, 'Azka Aqila Pranaja', 'Laki-Laki', 'V', '3175711961'),
(45, 3, 'Azzahra Rahmawati', 'Perempuan', 'V', '3171979410'),
(46, 3, 'Baihaqi Nur Fauzy', 'Laki-Laki', 'V', '3148047332'),
(47, 3, 'Bayu Adi', 'Laki-Laki', 'V', '3152572815'),
(48, 3, 'Bayu Nursidik Pratama', 'Laki-Laki', 'V', '3160564633'),
(49, 3, 'Bilal Fazril', 'Laki-Laki', 'V', '3135330177'),
(50, 3, 'Biyan Revans Aldiansyah', 'Laki-Laki', 'V', '0122588437'),
(51, 3, 'Cika Fitria', 'Perempuan', 'V', '0122172465'),
(52, 3, 'Cika Siti Fadilah', 'Perempuan', 'V', '0133818504'),
(53, 3, 'Deva Ainun Mahya', 'Perempuan', 'V', '3157511314'),
(54, 3, 'Diana Alysa Fitri', 'Perempuan', 'V', '3151942720'),
(55, 3, 'Dinda Kiranna', 'Perempuan', 'V', '0134119725'),
(56, 3, 'Dinda Naufalina', 'Perempuan', 'V', '3172099051'),
(57, 3, 'Dita Maiasari', 'Perempuan', 'V', '3142885500'),
(58, 3, 'Dzakia Marwah Aswaja', 'Perempuan', 'V', '3167539176'),
(59, 3, 'Elmira Ainun Mahya', 'Perempuan', 'V', '3167526894'),
(60, 3, 'Elya Meylani', 'Perempuan', 'V', '3163685947'),
(61, 4, 'Fadlan Alawi', 'Laki-Laki', 'V', '3175825706'),
(62, 4, 'Fahmi Adam', 'Laki-Laki', 'V', '3152978033'),
(63, 4, 'Faisal Imamul Hakim', 'Laki-Laki', 'V', '3150756591'),
(64, 4, 'Faiz Dwi Prayoga', 'Laki-Laki', 'V', '3141539968'),
(65, 4, 'Fajar Maulana', 'Laki-Laki', 'V', '0121473260'),
(66, 4, 'Farhan Baehaqi', 'Laki-Laki', 'V', '0122065606'),
(67, 4, 'Farhan Syafik Ramdani', 'Laki-Laki', 'V', '0135745787'),
(68, 4, 'Faris Fadilah', 'Laki-Laki', 'V', '0126981367'),
(69, 4, 'Fatimah Azzahra', 'Perempuan', 'V', '3162673697'),
(70, 4, 'Fauzan', 'Laki-Laki', 'V', '3142978276'),
(71, 4, 'Firjiniah', 'Perempuan', 'V', '3160266863'),
(72, 4, 'Fredella Anindya Salim', 'Perempuan', 'V', '3156460052'),
(73, 4, 'Ghina Khoiriyah', 'Perempuan', 'V', '0134538654'),
(74, 4, 'Gilang Ramadhan', 'Laki-Laki', 'V', '3142534847'),
(75, 4, 'Habibi Nur Zaki', 'Laki-Laki', 'V', '3174946467'),
(76, 4, 'Haris Maulana', 'Laki-Laki', 'V', '3131336477'),
(77, 4, 'Hasby Al Fawaz', 'Laki-Laki', 'V', '3180443166'),
(78, 4, 'Humaira Azahra', 'Perempuan', 'V', '3140805182'),
(79, 4, 'Ibnu Juna', 'Laki-Laki', 'V', '3159659484'),
(80, 4, 'Ibra Aditia Beka', 'Laki-Laki', 'V', '3147027463'),
(81, 5, 'Ilyas Putra Anjani', 'Laki-Laki', 'V', '3152128566'),
(82, 5, 'Imaida Aisyah', 'Perempuan', 'V', '3154286175'),
(83, 5, 'Imelda Putri', 'Perempuan', 'V', '3171823438'),
(84, 5, 'Intan Auliya Nur Ain', 'Perempuan', 'V', '0129222747'),
(85, 5, 'Irwan Naufal Hamdani', 'Laki-Laki', 'V', '3131651911'),
(86, 5, 'Jenli Suci Fitriani', 'Perempuan', 'V', '3178798688'),
(87, 5, 'Jihan Kaisha Ulfa', 'Perempuan', 'V', '3160116941'),
(88, 5, 'Kaila Rahmatu Sa\'Adah', 'Perempuan', 'V', '0124963834'),
(89, 5, 'Kania Nur Aliyah', 'Perempuan', 'V', '0112814542'),
(90, 5, 'Kelvin Kurnia Maulana', 'Laki-Laki', 'V', '0123545125'),
(91, 5, 'Kelvin Wildiansyah', 'Laki-Laki', 'V', '3149009696'),
(92, 5, 'Kenzie Rayhan', 'Laki-Laki', 'V', '3148002300'),
(93, 5, 'Khoerul Nijam', 'Laki-Laki', 'V', '0124467482'),
(94, 5, 'Kirania Yumeina', 'Perempuan', 'V', '3168350544'),
(95, 5, 'Luthfia Zahra Talita', 'Perempuan', 'V', '3146266276'),
(96, 5, 'Malika Azzahra', 'Perempuan', 'V', '3165292855'),
(97, 5, 'Marwan Mahpudin', 'Laki-Laki', 'V', '0121171572'),
(98, 5, 'Maulana Ahmad Al-Qohwi', 'Laki-Laki', 'V', '3150489265'),
(99, 5, 'Muhamad Misbahul Anam', 'Laki-Laki', 'V', '3166699369'),
(100, 5, 'Muhamad Rivan Aulia Dzikrilah', 'Laki-Laki', 'V', '3131147204'),
(101, 6, 'Muhammad Azka Alifiandra', 'Laki-Laki', 'V', '3145700385'),
(102, 6, 'Muhammad Cahaya Dhuha', 'Laki-Laki', 'V', '0119142101'),
(103, 6, 'Muhammad Dzaka Fairus', 'Laki-Laki', 'V', '0135329761'),
(104, 6, 'Muhammad Fadil Pratama', 'Laki-Laki', 'V', '0122629753'),
(105, 6, 'Muhammad Hudyatul Arif', 'Laki-Laki', 'V', '3141361906'),
(106, 6, 'Muhammad Kaafin', 'Laki-Laki', 'V', '3172030938'),
(107, 6, 'Muhammad Ridho Billah', 'Laki-Laki', 'V', '3170193813'),
(108, 6, 'Muhammad Vikri', 'Laki-Laki', 'V', '0122838702'),
(109, 6, 'Muhammad Zaki', 'Laki-Laki', 'V', '3149899245'),
(110, 6, 'Nail Najwan', 'Laki-Laki', 'V', '3154230434'),
(111, 6, 'Naila Husna', 'Perempuan', 'V', '3166771783'),
(112, 6, 'Naira Ramadani', 'Perempuan', 'V', '3179540277'),
(113, 6, 'Naura Aulia Naplah', 'Perempuan', 'V', '0134556292'),
(114, 6, 'Naya Eka Septiyana', 'Perempuan', 'V', '3134786961'),
(115, 6, 'Nazwa Nur Anissa', 'Perempuan', 'V', '0121913614'),
(116, 6, 'Nida Maulida Turrohmah', 'Perempuan', 'V', '0123969621'),
(117, 6, 'Nur Azahra', 'Perempuan', 'V', '3159776368'),
(118, 6, 'Nur Azizah', 'Perempuan', 'V', '0137363705'),
(119, 6, 'Putri Nazwa', 'Perempuan', 'V', '0123993015'),
(120, 6, 'Qairina Nurhasanah', 'Perempuan', 'V', '3149563529'),
(121, 7, 'Radit Valentino', 'Laki-Laki', 'V', '0123695643'),
(122, 7, 'Rafka Calandra Lazuardy', 'Laki-Laki', 'V', '3177024325'),
(123, 7, 'Rahayyu Ramadanningrum', 'Perempuan', 'V', '3153104520'),
(124, 7, 'Rahdian Syah', 'Laki-Laki', 'V', '0132743627'),
(125, 7, 'Raihana Vianca', 'Perempuan', 'V', '3141683353'),
(126, 7, 'Rais Faujan Kamil', 'Laki-Laki', 'V', '3169215642'),
(127, 7, 'Raka Nur Meilansyah', 'Laki-Laki', 'V', '3169025190'),
(128, 7, 'Rama Sidiq', 'Laki-Laki', 'V', '0139071926'),
(129, 7, 'Ratipa Afaf Malaqianum', 'Perempuan', 'V', '3153583388'),
(130, 7, 'Ratri Dwi Purwati', 'Perempuan', 'V', '0133637437'),
(131, 7, 'Reva Meiliani', 'Perempuan', 'V', '0137112472'),
(132, 7, 'Revan Fadilah', 'Laki-Laki', 'V', '0134398411'),
(133, 7, 'Rezky Aditya', 'Laki-Laki', 'V', '3136857934'),
(134, 7, 'Rifki Alpanur Adaya', 'Laki-Laki', 'V', '3173601236'),
(135, 7, 'Rizki Ramdani', 'Laki-Laki', 'V', '0127119039'),
(136, 7, 'Rizqi Fadhil', 'Laki-Laki', 'V', '3165092076'),
(137, 7, 'Rofiq Mahdiana', 'Laki-Laki', 'V', '3161789499'),
(138, 7, 'Sabila Rohman', 'Laki-Laki', 'V', '3163486969'),
(139, 7, 'Safeea Nazwa Adaya', 'Perempuan', 'V', '3145648572'),
(140, 7, 'Salman Apriliana', 'Laki-Laki', 'V', '0142714007'),
(141, 8, 'Sandi Permana', 'Laki-Laki', 'V', '3168973828'),
(142, 8, 'Shafa Aulia Septiani', 'Perempuan', 'V', '3147342636'),
(143, 8, 'Shelena Karin', 'Perempuan', 'V', '3149092513'),
(144, 8, 'Silvy Azahra', 'Perempuan', 'V', '0139639359'),
(145, 8, 'Sofhia Al Maura', 'Perempuan', 'V', '0136344725'),
(146, 8, 'Suci Rahmadani', 'Perempuan', 'V', '0135893315'),
(147, 8, 'Sulaeman', 'Laki-Laki', 'V', '3166147900'),
(148, 8, 'Susilawati', 'Perempuan', 'V', '3178574006'),
(149, 8, 'Syifa Ainunnisa', 'Perempuan', 'V', '0139933455'),
(150, 8, 'Tania Tasya Amanda', 'Perempuan', 'V', '3154604713'),
(151, 8, 'Tari Try Wahyuni', 'Perempuan', 'V', '0117285171'),
(152, 8, 'Taura Wirdatu Syipa', 'Perempuan', 'V', '3177438005'),
(153, 8, 'Tedi Adi Kusuma', 'Laki-Laki', 'V', '0124405266'),
(154, 8, 'Tedi Aditia Novanto', 'Laki-Laki', 'V', '3166639512'),
(155, 8, 'Teguh Sulaeman', 'Laki-Laki', 'V', '3173955531'),
(156, 8, 'Trian Lukmanul Hakim', 'Laki-Laki', 'V', '0125393019'),
(157, 8, 'Triyani Noviyanti', 'Perempuan', 'V', '3170740157'),
(158, 8, 'Tuti Sugiharti', 'Perempuan', 'V', '0131523199'),
(159, 8, 'Vira Rahmawati Salsa Bila', 'Perempuan', 'V', '3156393489'),
(160, 8, 'Wafa Dini Maola', 'Perempuan', 'V', '0128410991'),
(161, 8, 'Wendi Setiawan', 'Laki-Laki', 'V', '0114685360'),
(162, 8, 'Wildansyah Manaf', 'Laki-Laki', 'V', '3165099649'),
(163, 8, 'Wisnu Maulana', 'Laki-Laki', 'V', '0129432368'),
(164, 8, 'Witanti Permatasari', 'Perempuan', 'V', '3144976421'),
(165, 8, 'Yhara Aqila Alfa', 'Perempuan', 'V', '3153690702'),
(166, 8, 'Yogi', 'Laki-Laki', 'V', '3130745325'),
(167, 8, 'Zafar Sidiq', 'Laki-Laki', 'V', '3176235852'),
(168, 8, 'Zeni Febriani', 'Perempuan', 'V', '0149993083'),
(169, 8, 'Zidan Vidal Lesmana', 'Laki-Laki', 'V', '3142406874'),
(170, 8, 'Zulfan Azhar Raihan', 'Laki-Laki', 'V', '3143458499'),
(171, 1, 'Siswa Coba', 'Perempuan', 'I', '232874234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Wali Kelas A', 'Kuningan', '089909823212', 'walikelasA', 'walikelasA', 2),
(2, 'Wali Kelas B', 'Kuningan', '089235623522', 'walikelasB', 'walikelasB', 2),
(3, 'Wali Kelas C', 'Kuningan', '087621673231', 'walikelasC', 'walikelasC', 2),
(4, 'Wali Kelas D', 'Kuningan', '086567323811', 'walikelasD', 'walikelasD', 2),
(5, 'Wali Kelas E', 'Kuningan', '087135232751', 'walikelasE', 'walikelasE', 2),
(6, 'Wali Kelas F', 'Kuningan', '089856758645', 'walikelasF', 'walikelasF', 2),
(7, 'Wali Kelas G', 'Kuningan', '087345635896', 'walikelasG', 'walikelasG', 2),
(8, 'Wali Kelas H', 'Kuningan', '081674356453', 'walikelasH', 'walikelasH', 2),
(9, 'Operator', 'Kuningan', '089743628762', 'operator', 'operator', 1),
(10, 'Kepala Sekolah', 'Kuningan', '087234562732', 'kepsek', 'kepsek', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
