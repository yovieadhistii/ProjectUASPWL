-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 06:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `detail_mk`
--

CREATE TABLE `detail_mk` (
  `mk_kode_mk` varchar(45) NOT NULL,
  `kelas_id_kelas` varchar(45) NOT NULL,
  `jadwal` varchar(45) NOT NULL,
  `ruangan` varchar(45) NOT NULL,
  `max_peserta` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_mk`
--

INSERT INTO `detail_mk` (`mk_kode_mk`, `kelas_id_kelas`, `jadwal`, `ruangan`, `max_peserta`, `created_at`, `updated_at`) VALUES
('BS401', 'B', '', '', '', NULL, NULL),
('IN240', 'A', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(45) NOT NULL,
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
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `perwalian` varchar(45) NOT NULL,
  `telepon` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama`, `password`, `email`, `foto`, `perwalian`, `telepon`, `alamat`, `created_at`, `updated_at`, `program_studi_kode_prodi`) VALUES
(2172003, 'asdasdasda', 'asdasdasd', 'asdasdas', NULL, 'Sudah', 'asdasd', 'asdasd', NULL, NULL, '72');

-- --------------------------------------------------------

--
-- Table structure for table `matkul_terambil`
--

CREATE TABLE `matkul_terambil` (
  `detail_mk_mk_kode_mk` varchar(45) NOT NULL,
  `detail_mk_kelas_id_kelas` varchar(45) NOT NULL,
  `mahasiswa_nrp` int(11) NOT NULL,
  `mahasiswa_program_studi_kode_prodi` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matkul_terambil`
--

INSERT INTO `matkul_terambil` (`detail_mk_mk_kode_mk`, `detail_mk_kelas_id_kelas`, `mahasiswa_nrp`, `mahasiswa_program_studi_kode_prodi`, `created_at`, `updated_at`) VALUES
('IN240', 'A', 2172003, '72', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE `mk` (
  `kode_mk` varchar(45) NOT NULL,
  `nama_mk` varchar(45) NOT NULL,
  `sks` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`kode_mk`, `nama_mk`, `sks`, `semester`, `created_at`, `updated_at`, `program_studi_kode_prodi`) VALUES
('BS401', 'Konsep E-Bisnis', '3', '5', NULL, NULL, '73'),
('BS403', 'Administrasi dan Konfigurasi Sistem Enterpris', '4', '5', NULL, NULL, '73'),
('BS404', 'Pemograman Web', '4', '4', NULL, NULL, '73'),
('BS406', 'Kewirausahaan Teknologi Informasi', '4', '4', NULL, NULL, '73'),
('BS407', 'Keamanan Sistem Informasi', '3', '4', NULL, NULL, '73'),
('BS501', 'Pemodelan Sistem Informasi', '3', '6', NULL, NULL, '73'),
('BS605', 'Kontrol & Audit SI', '3', '6', NULL, NULL, '73'),
('BS901', 'Sistem Informasi Logistik', '4', '8', NULL, NULL, '73'),
('BS903', 'Sistem Manajemen Pengetahuan', '3', '8', NULL, NULL, '73'),
('BS904', 'Manajemen Resiko', '3', '8', NULL, NULL, '73'),
('IN240', 'Pemrograman Web Lanjut', '4', '4', NULL, NULL, '72'),
('IN241', 'Statistika', '3', '4', NULL, NULL, '72'),
('IN242', 'Kecerdasan Mesin', '3', '4', NULL, NULL, '72'),
('IN243', 'Sistem Operasi Komputer', '3', '4', NULL, NULL, '72'),
('IN244', 'Strategi Algoritmik', '3', '4', NULL, NULL, '72'),
('IN261', 'Start-up Technopreneur', '3', '6', NULL, NULL, '72'),
('IN264', 'Web Semantik', '4', '8', NULL, NULL, '72'),
('IN266', 'Pengenalan Pemrograman Game', '4', '8', NULL, NULL, '72'),
('IN267', 'Administrasi Jaringan Komputer', '4', '8', NULL, NULL, '72'),
('IN268', 'Ethical Hacking 1', '4', '8', NULL, NULL, '72');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `website` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `email`, `password`, `website`, `created_at`, `updated_at`) VALUES
('72', '', '', '', NULL, NULL),
('73', '', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_mk`
--
ALTER TABLE `detail_mk`
  ADD PRIMARY KEY (`mk_kode_mk`,`kelas_id_kelas`),
  ADD KEY `fk_mk_has_kelas_kelas1_idx` (`kelas_id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`,`program_studi_kode_prodi`),
  ADD KEY `fk_mahasiswa_program_studi1_idx` (`program_studi_kode_prodi`);

--
-- Indexes for table `matkul_terambil`
--
ALTER TABLE `matkul_terambil`
  ADD PRIMARY KEY (`detail_mk_mk_kode_mk`,`detail_mk_kelas_id_kelas`,`mahasiswa_nrp`,`mahasiswa_program_studi_kode_prodi`),
  ADD KEY `fk_detail_mk_has_mahasiswa_mahasiswa1_idx` (`mahasiswa_nrp`,`mahasiswa_program_studi_kode_prodi`),
  ADD KEY `fk_detail_mk_has_mahasiswa_detail_mk1_idx` (`detail_mk_mk_kode_mk`,`detail_mk_kelas_id_kelas`);

--
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`kode_mk`,`program_studi_kode_prodi`),
  ADD KEY `fk_mk_program_studi_idx` (`program_studi_kode_prodi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_mk`
--
ALTER TABLE `detail_mk`
  ADD CONSTRAINT `idkelas` FOREIGN KEY (`kelas_id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idmk` FOREIGN KEY (`mk_kode_mk`) REFERENCES `mk` (`kode_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiswa_program_studi1` FOREIGN KEY (`program_studi_kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matkul_terambil`
--
ALTER TABLE `matkul_terambil`
  ADD CONSTRAINT `fk_detail_mk_has_mahasiswa_detail_mk1` FOREIGN KEY (`detail_mk_mk_kode_mk`,`detail_mk_kelas_id_kelas`) REFERENCES `detail_mk` (`mk_kode_mk`, `kelas_id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mahasiswa` FOREIGN KEY (`mahasiswa_nrp`,`mahasiswa_program_studi_kode_prodi`) REFERENCES `mahasiswa` (`nrp`, `program_studi_kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mk`
--
ALTER TABLE `mk`
  ADD CONSTRAINT `fk_mk_program_studi` FOREIGN KEY (`program_studi_kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
