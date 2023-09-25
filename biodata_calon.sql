-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata_calon`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` bigint(14) NOT NULL,
  `cell_phone` bigint(14) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied_position` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `id_user`, `first_name`, `last_name`, `address`, `city`, `home_phone`, `cell_phone`, `email`, `applied_position`, `salary`, `skill`, `gambar`, `created_at`, `updated_at`) VALUES
(17, 3, 'Asep', 'Samir', 'Bogor, Jawa Barat, Indonesia', 'Bogor', 44455, 8211154, 'user1@gmail.com', 'Web Developer', 5000000, '', '', '2023-09-24 23:15:43', '2023-09-24 23:15:43'),
(27, 4, 'Hasan', 'Junior', 'Bogor, Jawa Barat, Indonesia', 'Bogor', 4455332, 82111543486, 'user3@gmail.com', 'Backend Developer', 5000000, '', '', '2023-09-25 00:28:04', '2023-09-25 00:28:04'),
(28, 5, 'John', 'Doe', 'Kebon Jeruk, Jakarta', 'Jakarta', 57282373, 82111543486, 'user4@gmail.com', 'Backend Developer', 4500000, 'HTML, CSS, Javascript, PHP, Node Js, React Js, MySQL', '', '2023-09-25 01:36:21', '2023-09-25 01:36:21'),
(30, 6, 'Udin', 'Hasanudin', 'Kebon Jeruk', 'Jakarta', 82537572, 82111543486, 'user5@gmail.com', 'Backend Developer', 4500000, 'HTML ,CSS PHP', 'post-images/biodata/9GQQiv4pBf6mRQ6S7yEnnVZ2OEKCdH3kUWqwa0A7.jpg', '2023-09-25 02:55:43', '2023-09-25 02:55:43'),
(31, 7, 'Asep', 'Alex', 'Kebon Jeruk', 'Bogor', 44578122, 82111543485, 'user6@gmail.com', 'Backend Developer', 4500000, 'HTML ,CSS, Javascript, PHP', 'post-images/biodata/EfbMMJ9LRIStBoKqZnCFj20AnEuJvTL0TgHKXnmM.jpg', '2023-09-25 02:59:09', '2023-09-25 02:59:09'),
(32, 8, 'Jaim', 'Saep', 'Bogor, Jawa Barat, Indonesia', 'Cikawang', 5733335, 82111543486, 'user7@gmail.com', 'Frontend Developer', 4000000, 'HTML, CSS, Javascript ,PHP, Mysql', 'post-images/biodata/Ms8BkzDgclA9fJS9QbigYHpomI1D2eqf6YTy5IHK.jpg', '2023-09-25 03:02:16', '2023-09-25 03:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_09_12_081912_create_biodata_table', 1),
(4, '2023_09_12_082909_create_pendidikan_table', 1),
(5, '2023_09_12_082926_create_pelatihan_table', 1),
(6, '2023_09_12_082933_create_pekerjaan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `id_biodata`, `nama_perusahaan`, `posisi`, `pendapatan`, `tahun`, `created_at`, `updated_at`) VALUES
(2, 27, 'PT Control System', 'Backend Developer', 5000000, 2022, '2023-09-25 00:28:04', '2023-09-25 00:28:04'),
(3, 28, 'PT Sinar Energi', 'Backend Developer', -4000000, 2023, '2023-09-25 01:36:22', '2023-09-25 01:36:22'),
(5, 30, 'PT WAN', 'Web Developer', 4000000, 2023, '2023-09-25 02:55:44', '2023-09-25 02:55:44'),
(6, 31, 'PT Control System', 'Backend Developer', 4000000, 2023, '2023-09-25 02:59:10', '2023-09-25 02:59:10'),
(7, 32, 'PT. Control System', 'Web Developer', 450000, 2023, '2023-09-25 03:02:16', '2023-09-25 03:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `nama_pelatihan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` enum('ada','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `id_biodata`, `nama_pelatihan`, `sertifikat`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 17, 'Frontend', 'ada', 2020, '2023-09-24 23:15:43', '2023-09-24 23:15:43'),
(2, 17, 'Backend', 'tidak', 2022, '2023-09-24 23:15:43', '2023-09-24 23:15:43'),
(12, 27, 'Backend Course', 'ada', 2022, '2023-09-25 00:28:04', '2023-09-25 00:28:04'),
(13, 27, 'Node Js Course', 'ada', 2022, '2023-09-25 00:28:04', '2023-09-25 00:28:04'),
(14, 28, 'PHP Course', 'ada', 2022, '2023-09-25 01:36:21', '2023-09-25 01:36:21'),
(15, 28, 'Javascript Course', 'tidak', 2023, '2023-09-25 01:36:22', '2023-09-25 01:36:22'),
(18, 30, 'PHP Course', 'ada', 2023, '2023-09-25 02:55:43', '2023-09-25 02:55:43'),
(19, 30, 'Javascript Course', 'ada', 2023, '2023-09-25 02:55:44', '2023-09-25 02:55:44'),
(20, 31, 'Backend Course', 'ada', 2020, '2023-09-25 02:59:09', '2023-09-25 02:59:09'),
(21, 31, 'PHP Course', 'tidak', 2021, '2023-09-25 02:59:10', '2023-09-25 02:59:10'),
(22, 32, 'Javascript Course', 'ada', 2020, '2023-09-25 03:02:16', '2023-09-25 03:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `pendidikan_terakhir` enum('SD','SMP','SMA/SMK','D3','D4','S1','S2','S3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `intuisi_akademik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `ipk` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_biodata`, `pendidikan_terakhir`, `intuisi_akademik`, `jurusan`, `tahun_lulus`, `ipk`, `created_at`, `updated_at`) VALUES
(10, 17, 'S1', 'Binus', 'Sistem Informasi', 2020, 3.00, '2023-09-24 23:15:43', '2023-09-24 23:15:43'),
(11, 17, 'S2', 'UT', 'Sistem Informasi', 2024, 4.00, '2023-09-24 23:15:43', '2023-09-24 23:15:43'),
(23, 27, 'S1', 'Universitas Indonesia', 'Sistem Informasi', 2022, 3.00, '2023-09-25 00:28:04', '2023-09-25 00:28:04'),
(24, 28, 'S1', 'Universitas Indonesia', 'Sistem Informasi', 2022, 3.60, '2023-09-25 01:36:21', '2023-09-25 01:36:21'),
(26, 30, 'D4', 'IPB', 'SI', 2019, 3.70, '2023-09-25 02:55:43', '2023-09-25 02:55:43'),
(27, 30, 'S1', 'IPB', 'SI', 2023, 3.90, '2023-09-25 02:55:43', '2023-09-25 02:55:43'),
(28, 31, 'D3', 'IPB', 'Sistem Informasi', 2019, 3.80, '2023-09-25 02:59:09', '2023-09-25 02:59:09'),
(29, 31, 'S1', 'IPB', 'Sistem Informasi', 2023, 3.90, '2023-09-25 02:59:09', '2023-09-25 02:59:09'),
(30, 32, 'S1', 'UT', 'IT', 2020, 3.80, '2023-09-25 03:02:16', '2023-09-25 03:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `alamat`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'Jalan Raya', 'admin', NULL, '$2y$10$mZibNZ7d3Q3BP5M04eyC5.AEU62oyQ9.OwTcCTimjEQG3hLYz5ISm', NULL, '2023-09-24 19:19:05', '2023-09-24 19:19:05'),
(2, 'user@gmail.com', 'Jl. Danau Kerinci Blok E1 no.15', 'user', NULL, '$2y$10$lsR0TWFNAT6lpF4KNQvie.xeQNfEolaiyx2DQHgTxYP41FzYKftie', NULL, '2023-09-24 19:20:35', '2023-09-24 19:20:35'),
(3, 'user1@gmail.com', 'Jl. Terapi Raya, RT.03/RW.19, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111', 'user', NULL, '$2y$10$x88.v.88Y40bbiv6Q67kIO10XPmUL09.wRisVqItSLuPDO1cCmlbu', NULL, '2023-09-24 20:26:05', '2023-09-24 20:26:05'),
(4, 'user3@gmail.com', 'Jl. Terapi Raya, RT.03/RW.19, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111', 'user', NULL, '$2y$10$pVie3IuswAD3H9YFjj9ksuAPDs7050F5xCRWHKvK6bveJqH7fSfoi', NULL, '2023-09-24 23:21:53', '2023-09-24 23:21:53'),
(5, 'user4@gmail.com', '107727 Santa Monica Boulevard Los Angeles', 'user', NULL, '$2y$10$ZuImTp64fF.X75Sb7vbH2.l3S.j0lE7m7Zd7mOQWwJaOZUJyideBW', NULL, '2023-09-25 01:22:47', '2023-09-25 01:22:47'),
(6, 'user5@gmail.com', '107727 Santa Monica Boulevard Los Angeles', 'user', NULL, '$2y$10$LmncwcA5TtsDpFIHReaum.ePJe.3Wlk6l970WziexG6jwZ0DV4qiq', NULL, '2023-09-25 01:40:25', '2023-09-25 01:40:25'),
(7, 'user6@gmail.com', '107727 Santa Monica Boulevard Los Angeles', 'user', NULL, '$2y$10$U5vRYYqtJVOBlQc6M2XUUuRchs7zGeFngimwb.8Bhu7K7KTCq4IW6', NULL, '2023-09-25 02:56:35', '2023-09-25 02:56:35'),
(8, 'user7@gmail.com', 'Jl. Danau Kerinci Blok E1 no.15', 'user', NULL, '$2y$10$H95.2jNU1u/XGrIohj//QOlR6FveABfCDpOnmZHU58Ngot4qhZKPm', NULL, '2023-09-25 03:00:19', '2023-09-25 03:00:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biodata_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
