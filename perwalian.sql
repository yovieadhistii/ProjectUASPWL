-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 03:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perwalian`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `count_mhs_mk`
-- (See below for the actual view)
--
CREATE TABLE `count_mhs_mk` (
`jumlah_mahasiswa` bigint(21)
,`jumlah_mata_kuliah` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `dkbs`
--

CREATE TABLE `dkbs` (
  `users_id` varchar(7) NOT NULL,
  `mk_tawar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dkbs`
--

INSERT INTO `dkbs` (`users_id`, `mk_tawar_id`) VALUES
('2172028', 1),
('2172028', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `sks` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama`, `sks`, `semester`, `created_at`, `updated_at`, `program_studi_kode_prodi`) VALUES
('BS101', 'Sistem Informasi', 3, 1, NULL, NULL, '73'),
('BS102', 'Sistem Pengarsipan dan Akses', 3, 1, NULL, NULL, '73'),
('BS103', 'Pemograman Dasar', 3, 1, NULL, NULL, '73'),
('BS104', 'Logika Informatika', 2, 1, NULL, NULL, '73'),
('BS106', 'Bahasa Inggris I', 2, 1, NULL, NULL, '73'),
('BS201', 'Arsitektur Bisnis', 3, 2, NULL, NULL, '73'),
('BS203', 'Basis Data', 3, 2, NULL, NULL, '73'),
('BS301', 'Struktur Data', 3, 3, NULL, NULL, '73'),
('BS302', 'Sistem Informasi SDM * (SAP HR)', 4, 3, NULL, NULL, '73'),
('BS303', 'Basis Data Lanjut', 3, 3, NULL, NULL, '73'),
('BS304', 'Jaringan Komputer', 4, 3, NULL, NULL, '73'),
('BS401', 'Konsep E-Bisnis', 3, 4, NULL, NULL, '73'),
('BS406', 'Kewirausahaan Teknologi Informasi', 2, 4, NULL, NULL, '73'),
('BS501', 'Pemodelan Sistem Informasi', 3, 5, NULL, NULL, '73'),
('BS502', 'Manajemen Proyek * (SAP MLM)', 4, 5, NULL, NULL, '73'),
('BS503', 'Pemograman Web Lanjut', 4, 5, NULL, NULL, '73'),
('BS601', 'Pemodelan SI Lanjut', 3, 6, NULL, NULL, '73'),
('BS602', 'Implementasi dan Integrasi Sistem', 3, 6, NULL, NULL, '73'),
('BS701', 'Kecerdasan Bisnis (BI)', 3, 7, NULL, NULL, '73'),
('BS702', 'Pemasaran Online', 3, 7, NULL, NULL, '73'),
('BS801', 'Kapita Selekta', 3, 8, NULL, NULL, '73'),
('BS802', 'Tugas Akhir', 4, 8, NULL, NULL, '73'),
('IN212', 'Web Dasar', 3, 1, NULL, NULL, '72'),
('IN214', 'Pengantar Aplikasi Komputer', 2, 1, NULL, NULL, '72'),
('IN215', 'Sibernetika', 2, 1, NULL, NULL, '72'),
('IN216', 'Computational Thinking', 2, 1, NULL, NULL, '72'),
('IN221', 'Arsitektur dan Keamanan Jaringan', 3, 2, NULL, NULL, '72'),
('IN222', 'Arsitektur Komputer Modern', 3, 2, NULL, NULL, '72'),
('IN230', 'Rekayasa Perangkat Lunak', 3, 3, NULL, NULL, '72'),
('IN231', 'Teknologi Multimedia', 2, 3, NULL, NULL, '72'),
('IN232', 'Matematika Diskrit', 3, 3, NULL, NULL, '72'),
('IN233', 'Algoritma dan Struktur Data', 4, 3, NULL, NULL, '72'),
('IN240', 'Pemrograman Web Lanjut', 4, 4, NULL, NULL, '72'),
('IN241', 'Statistika', 3, 4, NULL, NULL, '72'),
('IN243', 'Sistem Operasi Komputer', 2, 1, NULL, NULL, '72'),
('IN250', 'Manajemen Proyek', 3, 5, NULL, NULL, '72'),
('IN252', 'Desain Antarmuka', 2, 5, NULL, NULL, '72'),
('IN253', 'Grafika Komputer', 3, 5, NULL, NULL, '72'),
('IN254', 'Proyek Perangkat Lunak', 3, 5, NULL, NULL, '72'),
('IN260', 'Metode Penelitian Informatika', 2, 6, NULL, NULL, '72'),
('IN261', 'Start-up Technopreneur', 3, 6, NULL, NULL, '72'),
('IN262', 'Pemrograman Mobile', 4, 8, NULL, NULL, '72'),
('IN263', 'Competitive Programming', 4, 8, NULL, NULL, '72'),
('IN264', 'Web Semantik', 4, 8, NULL, NULL, '72'),
('IN270', 'Kerja Praktik', 4, 7, NULL, NULL, '72'),
('IN280', 'Seminar Tugas Akhir', 2, 8, NULL, NULL, '72'),
('IN281', 'Tugas Akhir', 4, 8, NULL, NULL, '72');

-- --------------------------------------------------------

--
-- Table structure for table `mk_tawar`
--

CREATE TABLE `mk_tawar` (
  `id` int(11) NOT NULL,
  `mata_kuliah_kode` varchar(45) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `tahun_akademik_id` varchar(45) NOT NULL,
  `jadwal` varchar(45) NOT NULL,
  `ruangan` varchar(45) NOT NULL,
  `max_peserta` int(2) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mk_tawar`
--

INSERT INTO `mk_tawar` (`id`, `mata_kuliah_kode`, `kelas`, `tahun_akademik_id`, `jadwal`, `ruangan`, `max_peserta`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'IN240', 'A', 'Genap 2022/2023', 'Selasa, 12:30 - 15:00', 'ADV 1', 30, 'Teori', NULL, NULL),
(2, 'IN240', 'A', 'Genap 2022/2023', 'Kamis, 15.00 - 17.30', 'ADV 1', 30, 'Praktikum', NULL, NULL),
(3, 'BS101', 'A', 'Ganjil 2023/2024', 'Senin, 07:00 - 09:00', 'PROG 1', 25, 'Teori', NULL, NULL),
(4, 'BS102', 'A', 'Ganjil 2023/2024', 'Senin, 10:00 - 12:00', 'PROG 2', 20, 'Teori', NULL, NULL),
(5, 'BS103', 'A', 'Ganjil 2023/2024', 'Senin, 13:00 - 15:00', 'PROG 1', 25, 'Teori', NULL, NULL),
(6, 'BS103', 'A', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:30', 'PROG 1', 25, 'Praktikum', NULL, NULL),
(7, 'BS104', 'A', 'Ganjil 2023/2024', 'Selasa, 11:00 - 13:00', 'NET', 30, 'Teori', NULL, NULL),
(8, 'BS106', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:30', 'NET', 30, 'Teori', NULL, NULL),
(9, 'BS301', 'A', 'Ganjil 2023/2024', 'Rabu, 15:00 - 17:00', 'ENT 1', 30, 'Teori', NULL, NULL),
(10, 'BS302', 'A', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:30', 'ENT 2', 25, 'Teori', NULL, NULL),
(11, 'BS302', 'A', 'Ganjil 2023/2024', 'Kamis, 11:00 - 13:00', 'ENT 2', 25, 'Praktikum', NULL, NULL),
(12, 'BS303', 'A', 'Ganjil 2023/2024', 'Senin, 10:00 - 12:00', 'NET', 20, 'Teori', NULL, NULL),
(13, 'BS304', 'A', 'Ganjil 2023/2024', 'Selasa, 11:00 - 13:00', 'ENT 1', 25, 'Teori', NULL, NULL),
(14, 'BS304', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:30', 'ENT 1', 25, 'Praktikum', NULL, NULL),
(15, 'BS501', 'A', 'Ganjil 2023/2024', 'Kamis, 11:00 - 13:00', 'NET', 30, 'Teori', NULL, NULL),
(16, 'BS502', 'A', 'Ganjil 2023/2024', 'Selasa, 14:00 - 16:30', 'ENT 2', 20, 'Teori', NULL, NULL),
(17, 'BS502', 'A', 'Ganjil 2023/2024', 'Jumat, 07:00 - 09:30', 'ENT 2', 20, 'Praktikum', NULL, NULL),
(18, 'BS503', 'A', 'Ganjil 2023/2024', 'Selasa, 14:00 - 16:30', 'PROG 2', 25, 'Teori', NULL, NULL),
(19, 'BS503', 'A', 'Ganjil 2023/2024', 'Rabu, 14:00 - 16:30', 'PROG 2', 25, 'Praktikum', NULL, NULL),
(20, 'BS701', 'A', 'Ganjil 2023/2024', 'Jumat, 09:30 - 12:00', 'NET', 25, 'Teori', NULL, NULL),
(21, 'BS702', 'A', 'Ganjil 2023/2024', 'Kamis, 09:30 - 12:00', 'ENT 1', 20, 'Teori', NULL, NULL),
(22, 'IN212', 'A', 'Ganjil 2023/2024', 'Senin, 07:00 - 09:30', 'MMD', 25, 'Teori', NULL, NULL),
(23, 'IN212', 'A', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:30', 'MMD', 25, 'Praktikum', NULL, NULL),
(24, 'IN212', 'B', 'Ganjil 2023/2024', 'Senin, 11:00 - 13:00', 'MMD', 25, 'Teori', NULL, NULL),
(25, 'IN212', 'B', 'Ganjil 2023/2024', 'Selasa, 14:00 - 16:30', 'MMD', 25, 'Praktikum', NULL, NULL),
(26, 'IN214', 'A', 'Ganjil 2023/2024', 'Senin, 07:00 - 09:00', 'ADV 1', 30, 'Teori', NULL, NULL),
(27, 'IN214', 'B', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:30', 'ADV 1', 20, 'Teori', NULL, NULL),
(30, 'IN215', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:00', 'ADV 1', 25, 'Teori', NULL, NULL),
(31, 'IN215', 'B', 'Ganjil 2023/2024', 'Rabu, 09:30 - 11:30', 'ADV 1', 25, 'Teori', NULL, NULL),
(32, 'IN216', 'A', 'Ganjil 2023/2024', 'Selasa, 11:00 - 13:00', 'ADV 3', 30, 'Teori', NULL, NULL),
(33, 'IN216', 'B', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:30', 'ADV 2', 25, 'Teori', NULL, NULL),
(34, 'IN230', 'A', 'Ganjil 2023/2024', 'Senin, 07:00 - 09:00', 'ADV 4', 25, 'Teori', NULL, NULL),
(35, 'IN230', 'B', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:00', 'ADV 4', 25, 'Teori', NULL, NULL),
(36, 'IN231', 'A', 'Ganjil 2023/2024', 'Rabu, 10:00 - 12:00', 'ADV 3', 30, 'Teori', NULL, NULL),
(37, 'IN231', 'B', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:00', 'ADV 3', 25, 'Teori', NULL, NULL),
(38, 'IN232', 'A', 'Ganjil 2023/2024', 'Senin, 09:30 - 12:00', 'ADV 3', 30, 'Teori', NULL, NULL),
(39, 'IN250', 'A', 'Ganjil 2023/2024', 'Kamis, 13:00 - 15:00', 'DB', 30, 'Teori', NULL, NULL),
(40, 'IN233', 'A', 'Ganjil 2023/2024', 'Senin, 13:00 - 15:00', 'ADV 3', 30, 'Teori', NULL, NULL),
(41, 'IN233', 'A', 'Ganjil 2023/2024', 'Senin, 15:00 - 17:00', 'ADV 3', 30, 'Praktikum', NULL, NULL),
(42, 'IN233', 'B', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:00', 'ADV 4', 30, 'Teori', NULL, NULL),
(43, 'IN233', 'B', 'Ganjil 2023/2024', 'Kamis, 09:00 - 11:00', 'ADV 4', 30, 'Praktikum', NULL, NULL),
(44, 'IN252', 'A', 'Ganjil 2023/2024', 'Jumat, 07:00 - 09:30', 'MMD', 25, 'Teori', NULL, NULL),
(45, 'IN252', 'B', 'Ganjil 2023/2024', 'Jumat, 10:00 - 12:30', 'MMD', 25, 'Teori', NULL, NULL),
(46, 'IN253', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:30', 'ADV 2', 30, 'Teori', NULL, NULL),
(47, 'IN253', 'A', 'Ganjil 2023/2024', 'Rabu, 10:00 - 12:30', 'ADV 2', 30, 'Praktikum', NULL, NULL),
(48, 'IN253', 'B', 'Ganjil 2023/2024', 'Kamis, 15:00 - 17:30', 'DB', 30, 'Teori', NULL, NULL),
(49, 'IN253', 'B', 'Ganjil 2023/2024', 'Jumat, 07:00 - 09:30', 'DB', 30, 'Praktikum', NULL, NULL),
(50, 'IN254', 'A', 'Ganjil 2023/2024', 'Kamis, 11:00 - 13:00', 'MMD', 25, 'Teori', NULL, NULL),
(51, 'IN254', 'B', 'Ganjil 2023/2024', 'Jumat, 10:00 - 12:00', 'MMD', 30, 'Teori', NULL, NULL),
(52, 'IN262', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:00', 'ADV 1', 25, 'Teori', NULL, NULL),
(53, 'IN262', 'A', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:30', 'ADV 1', 25, 'Praktikum', NULL, NULL),
(54, 'IN262', 'B', 'Ganjil 2023/2024', 'Kamis, 11:00 - 13:00', 'ADV 3', 25, 'Teori', NULL, NULL),
(55, 'IN262', 'B', 'Ganjil 2023/2024', 'Kamis, 09:30 - 12:00', 'ADV 3', 25, 'Praktikum', NULL, NULL),
(56, 'IN263', 'A', 'Ganjil 2023/2024', 'Senin, 13:00 - 15:00', 'DB', 25, 'Teori', NULL, NULL),
(57, 'IN263', 'A', 'Ganjil 2023/2024', 'Senin, 15:00 - 17:00', 'DB', 25, 'Praktikum', NULL, NULL),
(58, 'IN264', 'A', 'Ganjil 2023/2024', 'Kamis, 09:30 - 12:00', 'ADV 2', 30, 'Teori', NULL, NULL),
(59, 'IN264', 'A', 'Ganjil 2023/2024', 'Jumat, 09:30 - 12:00', 'DB', 30, 'Praktikum', NULL, NULL),
(60, 'IN270', 'A', 'Ganjil 2023/2024', 'Selasa, 11:00 - 13:00', 'INT 1', 30, 'Teori', NULL, NULL),
(61, 'BS201', 'A', 'Ganjil 2023/2024', 'Jumat, 13:00 - 15:00', 'PROG 2', 30, 'Teori', NULL, NULL),
(62, 'BS201', 'B', 'Ganjil 2023/2024', 'Jumat, 15:00 - 17:00', 'PROG 2', 30, 'Teori', NULL, NULL),
(63, 'BS203', 'A', 'Ganjil 2023/2024', 'Selasa, 10:00 - 12:00', 'ENT 2', 20, 'Teori', NULL, NULL),
(64, 'BS203', 'B', 'Ganjil 2023/2024', 'Rabu, 10:00 - 12:00', 'ENT 1', 20, 'Teori', NULL, NULL),
(65, 'BS401', 'A', 'Ganjil 2023/2024', 'Rabu, 07:00 - 09:30', 'PROG 1', 25, 'Teori', NULL, NULL),
(66, 'BS401', 'B', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:30', 'PROG 1', 25, 'Teori', NULL, NULL),
(67, 'BS406', 'A', 'Ganjil 2023/2024', 'Kamis, 10:00 - 12:00', 'NET', 25, 'Teori', NULL, NULL),
(68, 'BS406', 'B', 'Ganjil 2023/2024', 'Kamis, 14:00 - 16:00', 'NET', 25, 'Teori', NULL, NULL),
(69, 'BS601', 'A', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:00', 'PROG 1', 30, 'Teori', NULL, NULL),
(70, 'BS101', 'B', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:00', 'NET', 25, 'Teori', NULL, NULL),
(71, 'BS301', 'B', 'Ganjil 2023/2024', 'Rabu, 09:30 - 12:00', 'NET', 25, 'Teori', NULL, NULL),
(72, 'BS501', 'B', 'Ganjil 2023/2024', 'Kamis, 07:00 - 09:30', 'ENT 1', 30, 'Teori', NULL, NULL),
(73, 'BS503', 'B', 'Ganjil 2023/2024', 'Selasa, 10:00 - 12:00', 'ENT 2', 30, 'Teori', NULL, NULL),
(74, 'BS503', 'B', 'Ganjil 2023/2024', 'Selasa, 13:00 - 15:00', 'ENT 2', 30, 'Praktikum', NULL, NULL),
(75, 'IN221', 'A', 'Ganjil 2023/2024', 'Senin, 09:30 - 12:00', 'DB', 30, 'Teori', NULL, NULL),
(76, 'IN221', 'B', 'Ganjil 2023/2024', 'Selasa, 09:30 - 12:00', 'DB', 30, 'Teori', NULL, NULL),
(77, 'IN222', 'A', 'Ganjil 2023/2024', 'Rabu, 09:00 - 11:30', 'INT 1', 25, 'Teori', NULL, NULL),
(78, 'IN222', 'B', 'Ganjil 2023/2024', 'Rabu, 13:00 - 14:30', 'INT 1', 25, 'Teori', NULL, NULL),
(79, 'IN241', 'A', 'Ganjil 2023/2024', 'Senin, 09:30 - 12:00', 'ADV 1', 25, 'Teori', NULL, NULL),
(80, 'IN241', 'B', 'Ganjil 2023/2024', 'Selasa, 13:00 - 15:00', 'ADV 1', 25, 'Teori', NULL, NULL),
(81, 'IN260', 'A', 'Ganjil 2023/2024', 'Rabu, 09:30 - 12:00', 'ADV 2', 25, 'Teori', NULL, NULL),
(82, 'IN260', 'B', 'Ganjil 2023/2024', 'Kamis, 09:30 - 12:00', 'DB', 20, 'Teori', NULL, NULL),
(83, 'IN261', 'A', 'Ganjil 2023/2024', 'Selasa, 07:00 - 09:00', 'INT 1', 25, 'Teori', NULL, NULL),
(84, 'IN280', 'A', 'Ganjil 2023/2024', 'MMD', 'Jumat, 15:00 - 17:00', 30, 'Teori', NULL, NULL),
(85, 'IN281', 'A', 'Ganjil 2023/2024', 'Rabu, 15:00 - 17:00', 'INT 1', 30, 'Teori', NULL, NULL),
(86, 'IN281', 'B', 'Ganjil 2023/2024', 'Kamis, 15:00 - 17:00', 'ADV 4', 25, 'Teori', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(45) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `website` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama`, `website`, `created_at`, `updated_at`) VALUES
('22', 'DummyProdi2', 'www.a.com', '2023-06-14 22:35:20', '2023-06-14 23:19:18'),
('72', 'Teknik Informatika', 'if.it.maranatha.edu', NULL, NULL),
('73', 'Sistem Informasi', 'si.it.maranatha.edu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `created_at`, `updated_at`, `status`) VALUES
('Ganjil 2023/2024', NULL, NULL, 'Aktif'),
('Genap 2022/2023', NULL, NULL, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telepon` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `kota`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `email`, `password`, `telepon`, `role`, `foto`, `program_studi_kode_prodi`, `created_at`, `updated_at`) VALUES
('2172028', 'Laurentius Gusti Ontoseno Panata Yudha', 'Jln. Adi Sedap Malam No. 55', 'Bandung', '08/09/2003', 'Pria', 'Lainnya', '2172028@maranatha.ac.id', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', '08223344', 'mahasiswa', NULL, '72', NULL, NULL),
('2173005', 'Yovie Adhisti Mulyono', 'Jln. Taman Kopo Indah 1 Blok B-66', 'Bandung', '28/06/03', 'Wanita', 'Kristen', '2173005@maranatha.ac.id', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', '085772279697', 'mahasiswa', NULL, '73', NULL, NULL),
('72-1', 'IFAdmin', '', '', '', '', '', 'ifAdmin@gamil.com', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', '0895999972', 'prodi', NULL, '72', '2023-05-30 06:01:53', NULL);

-- --------------------------------------------------------

--
-- Structure for view `count_mhs_mk`
--
DROP TABLE IF EXISTS `count_mhs_mk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `count_mhs_mk`  AS SELECT (select count(0) from `users` where `users`.`role` = 'mahasiswa') AS `jumlah_mahasiswa`, (select count(0) from `mata_kuliah`) AS `jumlah_mata_kuliah` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dkbs`
--
ALTER TABLE `dkbs`
  ADD PRIMARY KEY (`users_id`,`mk_tawar_id`),
  ADD KEY `fk_users_has_mk_tawar_mk_tawar1_idx` (`mk_tawar_id`),
  ADD KEY `fk_users_has_mk_tawar_users1_idx` (`users_id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mata_kuliah_program_studi1_idx` (`program_studi_kode_prodi`);

--
-- Indexes for table `mk_tawar`
--
ALTER TABLE `mk_tawar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mata_kuliah_has_tahun_akademik_tahun_akademik1_idx` (`tahun_akademik_id`),
  ADD KEY `fk_mata_kuliah_has_tahun_akademik_mata_kuliah1_idx` (`mata_kuliah_kode`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_program_studi1_idx` (`program_studi_kode_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mk_tawar`
--
ALTER TABLE `mk_tawar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dkbs`
--
ALTER TABLE `dkbs`
  ADD CONSTRAINT `fk_users_has_mk_tawar_mk_tawar1` FOREIGN KEY (`mk_tawar_id`) REFERENCES `mk_tawar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_mk_tawar_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `fk_mata_kuliah_program_studi1` FOREIGN KEY (`program_studi_kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mk_tawar`
--
ALTER TABLE `mk_tawar`
  ADD CONSTRAINT `fk_mata_kuliah_has_tahun_akademik_mata_kuliah1` FOREIGN KEY (`mata_kuliah_kode`) REFERENCES `mata_kuliah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mata_kuliah_has_tahun_akademik_tahun_akademik1` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademik` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_program_studi1` FOREIGN KEY (`program_studi_kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
