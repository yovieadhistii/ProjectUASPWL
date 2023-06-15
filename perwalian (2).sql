-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:09 AM
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
-- Table structure for table `dkbs`
--

CREATE TABLE `dkbs` (
  `users_id` varchar(7) NOT NULL,
  `mk_tawar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `kode` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `sks` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode`, `nama`, `sks`, `semester`, `created_at`, `updated_at`, `program_studi_kode_prodi`) VALUES
('IN240', 'Pemrograman Web Lanjut', '4', '4', NULL, NULL, '72');

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
  `max_peserta` varchar(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mk_tawar`
--

INSERT INTO `mk_tawar` (`id`, `mata_kuliah_kode`, `kelas`, `tahun_akademik_id`, `jadwal`, `ruangan`, `max_peserta`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'IN240', 'A', 'Genap 2022/2023', 'Selasa, 12:30 - 15:00', 'ADV 1', '30', 'Teori', NULL, NULL),
(2, 'IN240', 'A', 'Genap 2022/2023', 'Kamis, 15.00 - 17.30', 'ADV 1', '30', 'Praktikum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(45) NOT NULL,
  `website` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `website`, `created_at`, `updated_at`) VALUES
('72', 'if.it.maranatha.edu', NULL, NULL),
('73', 'si.it.maranatha.edu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `created_at`, `updated_at`, `status`) VALUES
('Genap 2022/2023', NULL, NULL, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telepon` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `program_studi_kode_prodi` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `telepon`, `role`, `foto`, `program_studi_kode_prodi`, `created_at`, `updated_at`) VALUES
('2172028', 'Laurentius Gusti Ontoseno Panata Yudha', '2172028@maranatha.ac.id', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', '08223344', 'mahasiswa', NULL, '72', NULL, NULL);

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
  ADD PRIMARY KEY (`kode`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `fk_mata_kuliah_has_tahun_akademik_mata_kuliah1` FOREIGN KEY (`mata_kuliah_kode`) REFERENCES `mata_kuliah` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
