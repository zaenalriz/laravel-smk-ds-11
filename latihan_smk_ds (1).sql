-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 02:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_smk_ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(10, '10 sijaa', NULL, '2024-05-27 20:41:35'),
(11, '10 plg 2', NULL, NULL),
(12, '10 pplgww', NULL, NULL),
(13, '10 pplg', NULL, NULL),
(17, '12 sija', NULL, NULL),
(18, '12 PPLG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `nilai` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `siswa_id`, `nilai`, `created_at`, `updated_at`) VALUES
(10, 9, 99, NULL, '2024-05-29 21:29:41'),
(11, 7, 40, NULL, NULL),
(12, 7, 70, NULL, NULL),
(13, 8, 40, NULL, '2024-05-29 21:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'zae', 'zae@gmail.com', '$2y$10$4/8HjMj/UPVUCRZ7/AsTJ.iSXX6lfGEhP7ABE.MI8q6PUq3YEX06S', NULL, NULL),
(2, 'zae', 'zae@gmail.com', '$2y$10$XJxYZOSkgY/Dr3v53vONFeeGTsFRl9k1hCdjSoUDhcduzgD7wrbmq', NULL, NULL),
(6, 'koe', 'eko@gmail.com', '$2y$10$brYIaQeoQ6Lg1QY/EVj0U.FR/Am.vAz/OEagynW9aklb/frxBoxz6', NULL, '2024-06-04 19:35:19'),
(7, 'ferdi', 'fer@gmail.com', '$2y$10$DlBWwWZ3xm6LmyapC7c.AOS0rX2RKgpRjlBkxDNteKGSWA.08gdNa', NULL, NULL),
(8, 'adit', 'adit@gmail.com', '$2y$10$L64a/8M6CwsaCI1P2iFNQOcn47pgHsafN2L65dzhEjUlMi5dmREOa', NULL, NULL),
(9, 'adit', 'sopo@gmail.com', '$2y$10$Xql5v8ruFSG.nCl94X.XNubb5GHT6Qw571nioaALowCybnH5tCmfy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`, `file`, `created_at`, `updated_at`) VALUES
(7, 'denisww', 'bogor barat', 'uploads/siswa/1722324082.webp', NULL, '2024-07-30 00:21:22'),
(8, 'sopo', 'cibinong', NULL, NULL, NULL),
(9, 'jarwoww', 'cibinongqq', NULL, NULL, '2024-07-30 18:46:52'),
(12, 'test', 'Test', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
