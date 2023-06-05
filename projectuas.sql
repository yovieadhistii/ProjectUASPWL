-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 03:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `created_at`, `updated_at`) VALUES
('A', NULL, NULL),
('B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_has_mk`
--

CREATE TABLE `kelas_has_mk` (
  `kelas_id_kelas` varchar(5) NOT NULL,
  `mk_kode_mk` varchar(10) NOT NULL,
  `jadwal` varchar(45) NOT NULL,
  `ruangan` varchar(45) NOT NULL,
  `max_peserta` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas_has_mk`
--

INSERT INTO `kelas_has_mk` (`kelas_id_kelas`, `mk_kode_mk`, `jadwal`, `ruangan`, `max_peserta`, `created_at`, `updated_at`) VALUES
('A', 'BS401', 'Selasa, 12:30 - 15:00', 'Lab Prog 1', '7', NULL, NULL),
('A', 'BS403', 'Rabu, 12:30 - 15:00', 'Lab Prog 2', '5', NULL, NULL),
('A', 'BS404', 'Kamis, 12:30 - 15:00', 'Lab Networking', '5', NULL, NULL),
('A', 'BS406', 'Kamis, 12:30 - 15:00', 'Lab Prog 1', '5', NULL, NULL),
('A', 'BS407', 'Jumat, 12:30 - 15:00', 'Lab Networking', '6', NULL, NULL),
('A', 'BS501', 'Senin, 12:30 - 15:00', 'Lab Prog 1', '6', NULL, NULL),
('A', 'IN240', 'Selasa, 12:30 - 15:00', 'Lab Adv 2', '5', NULL, NULL),
('A', 'IN241', 'Senin, 09:30 - 12:00', 'Lab Adv 1', '4', NULL, NULL),
('A', 'IN242', 'Selasa, 10:00 - 12:00', 'Lab Adv 1', '6', NULL, NULL),
('A', 'IN243', 'Kamis, 08:00 - 10:00', 'Lab Multimedia', '8', NULL, NULL),
('A', 'IN244', 'Rabu, 10:00 - 12:00', 'Lab Adv 3', '4', NULL, NULL),
('A', 'IN261', 'Selasa, 07:00 - 09:30', 'Lab Int 1', '5', NULL, NULL),
('A', 'IN264', 'Selasa, 07:00 - 09:30', 'Lab Adv 4', '7', NULL, NULL),
('A', 'IN266', 'Selasa, 10:00 - 12:00', 'Lab Adv 4', '5', NULL, NULL),
('A', 'IN267', 'Jumat, 10:00 - 12:00', 'Lab Database', '6', NULL, NULL),
('A', 'IN268', 'Rabu, 09:30 - 12:00', 'Lab Adv Multimedia', '7', NULL, NULL),
('B', 'BS401', 'Selasa, 15:00 - 17:00', 'Lab Prog 1', '5', NULL, NULL),
('B', 'BS403', 'Rabu, 15:00 - 17:00', 'Lab Prog 2', '6', NULL, NULL),
('B', 'BS404', 'Kamis, 15:00 - 17:00', 'Lab Networking', '5', NULL, NULL),
('B', 'BS407', 'Kamis, 10:00- 12:00', 'Lab Networking', '7', NULL, NULL),
('B', 'BS501', 'Rabu, 12:30 - 15:00', 'Lab Networking', '5', NULL, NULL),
('B', 'IN240', 'Selasa, 15:00 - 17:00', 'Lab Adv 2', '6', NULL, NULL),
('B', 'IN241', 'Senin, 12:30 - 15:00', 'Lab Adv 1', '5', NULL, NULL),
('B', 'IN242', 'Selasa, 10:00 - 12:00', 'Lab Adv 2', '7', NULL, NULL),
('B', 'IN243', 'Selasa, 10:00 - 12:00', 'Lab Multimedia', '5', NULL, NULL),
('B', 'IN244', 'Rabu, 12:30 - 15:00', 'Lab Adv 3', '6', NULL, NULL),
('B', 'IN261', 'Rabu, 07:00 - 09:30', 'Lab Int 1', '6', NULL, NULL),
('B', 'IN264', 'Rabu, 07:00 - 09:30', 'Lab Adv 4', '5', NULL, NULL),
('B', 'IN266', 'Senin, 12:30 - 15:00', 'Lab Adv 4', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE `mk` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(45) NOT NULL,
  `sks` int(11) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`kode_mk`, `nama_mk`, `sks`, `kode_prodi`, `semester`, `created_at`, `updated_at`) VALUES
('BS401', 'Konsep E-Bisnis', 3, '73', 5, NULL, NULL),
('BS403', 'Administrasi dan Konfigurasi Sistem Enterpris', 4, '73', 5, NULL, NULL),
('BS404', 'Pemograman Web', 4, '73', 4, NULL, NULL),
('BS406', 'Kewirausahaan Teknologi Informasi', 4, '73', 4, NULL, NULL),
('BS407', 'Keamanan Sistem Informasi', 3, '73', 4, NULL, NULL),
('BS501', 'Pemodelan Sistem Informasi', 3, '73', 6, NULL, NULL),
('BS605', 'Kontrol & Audit SI', 3, '73', 6, NULL, NULL),
('BS901', 'Sistem Informasi Logistik', 4, '73', 8, NULL, NULL),
('BS903', 'Sistem Manajemen Pengetahuan', 3, '73', 8, NULL, NULL),
('BS904', 'Manajemen Resiko', 3, '73', 8, NULL, NULL),
('IN240', 'Pemrograman Web Lanjut', 4, '72', 4, NULL, NULL),
('IN241', 'Statistika', 3, '72', 4, NULL, NULL),
('IN242', 'Kecerdasan Mesin', 3, '72', 4, NULL, NULL),
('IN243', 'Sistem Operasi Komputer', 3, '72', 4, NULL, NULL),
('IN244', 'Strategi Algoritmik', 3, '72', 4, NULL, NULL),
('IN261', 'Start-up Technopreneur', 3, '72', 6, NULL, NULL),
('IN264', 'Web Semantik', 4, '72', 8, NULL, NULL),
('IN266', 'Pengenalan Pemrograman Game', 4, '72', 8, NULL, NULL),
('IN267', 'Administrasi Jaringan Komputer', 4, '72', 8, NULL, NULL),
('IN268', 'Ethical Hacking 1', 4, '72', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_terambil`
--

CREATE TABLE `mk_terambil` (
  `kode_mk` varchar(10) NOT NULL,
  `NRP` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_has_mk`
--
ALTER TABLE `kelas_has_mk`
  ADD PRIMARY KEY (`kelas_id_kelas`,`mk_kode_mk`),
  ADD KEY `fk_kelas_has_mk_mk1_idx` (`mk_kode_mk`),
  ADD KEY `fk_kelas_has_mk_kelas1_idx` (`kelas_id_kelas`);

--
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `mk_terambil`
--
ALTER TABLE `mk_terambil`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas_has_mk`
--
ALTER TABLE `kelas_has_mk`
  ADD CONSTRAINT `fk_kelas_has_mk_kelas1` FOREIGN KEY (`kelas_id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kelas_has_mk_mk1` FOREIGN KEY (`mk_kode_mk`) REFERENCES `mk` (`kode_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mk_terambil`
--
ALTER TABLE `mk_terambil`
  ADD CONSTRAINT `kode_mk` FOREIGN KEY (`kode_mk`) REFERENCES `mk` (`kode_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
