-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 01:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis_dokter` varchar(100) NOT NULL,
  `email_dokter` varchar(255) NOT NULL,
  `noTelp_dokter` varchar(100) NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialis_dokter`, `email_dokter`, `noTelp_dokter`, `alamat_dokter`, `created_at`, `updated_at`) VALUES
(2, 'Abdul Rahmat', 'Jantung', 'Abdul1234@gmail.com', '08787874541', 'Jalan Kertapati', '2023-06-23 11:14:07', '2024-06-23 04:03:13'),
(3, 'Komarudin', 'Jantung', 'komar@gmail.com', '08519548768', 'Jalan Kesunyian', '2023-06-23 12:14:58', '2024-06-23 03:38:55'),
(4, 'Amalia', 'Anak', 'Lia@gmail.com', '08778412365', 'Jalan Keheningan', '2023-06-23 12:15:49', '2024-06-23 03:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `keterangan_obat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga_obat`, `keterangan_obat`, `created_at`, `updated_at`) VALUES
(2, 'Bodrexin', 5000, 'Obat demam', '2023-06-23 11:35:54', '2024-06-23 03:40:45'),
(3, 'Bodrex Migran', 8000, 'Obat Sakit Kepala Sebelah', '2023-06-23 12:18:18', '2024-06-23 03:41:12'),
(4, 'Amoxilin', 20000, 'Penahan Sakit', '2023-06-23 12:18:40', '2023-06-23 12:18:40'),
(6, 'Promag', 15000, 'obat sakit maag', '2023-06-23 12:19:44', '2023-06-23 12:19:44'),
(7, 'Bodrex', 2000, 'Obat Sakit Kepala Biasa', '2024-06-23 04:04:05', '2024-06-23 04:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jk_pasien` enum('Laki-laki','Perempuan') NOT NULL,
  `email_pasien` varchar(255) NOT NULL,
  `noTelp_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `jk_pasien`, `email_pasien`, `noTelp_pasien`, `alamat_pasien`, `created_at`, `updated_at`) VALUES
(5, 'Muhaemin Iskandar', 'Laki-laki', 'Cakimin@gmail.com', '0877546154', 'Jalan Kebahagian', '2023-06-23 10:14:09', '2024-06-23 03:59:40'),
(7, 'Yuuna', 'Perempuan', 'Yuuna123@gmail.com', '08994561457', 'Jalan Kesetaraan', '2024-06-23 03:36:30', '2024-06-23 04:00:14'),
(9, 'Akayuki', 'Laki-laki', 'Aka@gmail.com', '085478641576', 'Jalan Kesetiaan', '2024-06-23 04:02:29', '2024-06-23 04:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id` int(11) NOT NULL,
  `nama_poliklinik` varchar(255) NOT NULL,
  `gedung` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id`, `nama_poliklinik`, `gedung`, `created_at`, `updated_at`) VALUES
(2, 'Poli Anak', 'Lt. 1', '2023-06-23 11:59:34', '2024-06-23 04:04:49'),
(3, 'Poli Paru', 'Lt. 4', '2023-06-23 11:59:54', '2023-06-23 11:59:54'),
(5, 'Poli THT', 'Lt. 3', '2023-06-23 12:00:19', '2023-06-23 12:00:19'),
(6, 'Poli Mata', 'Lt. 3', '2023-06-23 12:02:25', '2023-06-23 12:02:25'),
(7, 'Poli Jantung pembuluh darah', 'Lt. 4', '2024-06-23 03:42:29', '2024-06-23 04:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id` int(11) NOT NULL,
  `nama_klinik` varchar(255) NOT NULL,
  `alamat_klinik` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id`, `nama_klinik`, `alamat_klinik`, `created_at`, `updated_at`) VALUES
(2, 'Klinik Sriwijaya', 'Jl. Ketapati', '2023-06-23 12:13:49', '2024-06-23 04:05:46'),
(3, 'Apotek Surya', 'Jl. Banyuasin', '2023-06-23 12:14:05', '2024-06-23 04:06:13'),
(4, 'Klinik Sehat Sentosa', 'Jl. Kenangan', '2024-06-23 04:06:49', '2024-06-23 04:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin10@gmail.com', NULL, '$2y$10$69MsGq7t9OLLxrXWuRtPLuQ3I5KK5bz9LnaIBb7D5ttl6yzdDd3gC', NULL, '2023-06-23 09:28:07', '2023-06-23 09:28:07'),
(2, 'minn', 'minn@gmail.com', NULL, '$2y$10$SmatRnOuKNh.fcDlJfy2d.XjMn/wUwQzkLoTcjtwUa5Ld.9K7A2tW', NULL, '2024-06-23 03:35:03', '2024-06-23 03:35:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
