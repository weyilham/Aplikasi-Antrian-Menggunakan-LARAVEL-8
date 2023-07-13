-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrians`
--

CREATE TABLE `antrians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loket_id` bigint(20) UNSIGNED NOT NULL,
  `no_antrian` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antrians`
--

INSERT INTO `antrians` (`id`, `loket_id`, `no_antrian`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'P01', 0, '2023-05-24 03:05:28', '2023-05-24 03:05:28'),
(2, 1, 'P02', 0, '2023-05-24 03:05:28', '2023-05-24 03:05:28'),
(3, 2, 'U01', 0, '2023-05-24 03:05:28', '2023-05-24 03:05:28'),
(4, 2, 'U02', 0, '2023-05-24 03:05:28', '2023-05-24 03:05:28'),
(5, 1, 'P01', 0, '2023-07-12 02:59:28', '2023-07-12 02:59:28'),
(6, 2, 'U01', 0, '2023-07-12 02:59:33', '2023-07-12 02:59:33'),
(7, 1, 'P02', 0, '2023-07-12 05:56:33', '2023-07-12 05:56:33'),
(8, 1, 'P03', 0, '2023-07-12 07:25:35', '2023-07-12 07:25:35'),
(9, 2, 'U02', 0, '2023-07-12 07:25:44', '2023-07-12 07:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `nama_dokter`, `spesialis`, `layanan_id`, `tgl_lahir`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Argo Pribadi, dr, Sp.A', 'Spesialis Anak', 1, '1988-05-22', '087771525333', 'Jl. Rumah Sakit Umum No.1, Kotabaru, Kec. Serang, Kota Serang, Banten 42112', '2023-05-24 03:05:29', '2023-05-24 03:05:29'),
(2, 'Eris Sejahtera, drg', 'Spesialis Gigi', 2, '1981-07-12', '087771525323', 'Jl. sochari, Kota Serang, Banten 42112', '2023-05-24 03:05:29', '2023-05-24 03:05:29'),
(3, 'M. Erwin Jaya Sanjaya, SpOG', 'Spesialis Obstetri dan Ginekologi', 3, '1970-11-22', '0877715211111', 'Jl. Rumah Sakit Umum No.1, Kotabaru, Kec. Serang, Kota Serang, Banten 42112', '2023-05-24 03:05:29', '2023-07-11 04:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_layanan` varchar(255) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `kd_layanan`, `nama_layanan`, `created_at`, `updated_at`) VALUES
(1, 'kia', 'Poli KIA1', '2023-05-24 03:05:29', '2023-07-11 00:08:51'),
(2, 'anak', 'Poli Anak', '2023-05-24 03:05:29', '2023-05-24 03:43:47'),
(3, 'obgin', 'Poli Obgin', '2023-05-24 03:05:29', '2023-05-24 03:05:29'),
(5, 'igd', 'Instalasi Gawat Darurat', '2023-05-24 03:09:15', '2023-05-24 03:40:51'),
(6, 'lab', 'Laboratorium', '2023-05-24 03:47:20', '2023-05-24 03:47:20'),
(7, 'igd-2', 'igd', '2023-07-11 00:09:16', '2023-07-11 00:09:16'),
(8, 'gigi', 'POLI GIGI', '2023-07-12 07:29:39', '2023-07-12 07:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `lokets`
--

CREATE TABLE `lokets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_loket` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokets`
--

INSERT INTO `lokets` (`id`, `nama_loket`, `kode`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Bpjs Kesehatan', 'P', 'Pasien Bpjs', '2023-05-24 03:05:28', '2023-05-24 03:05:28'),
(2, 'Umum', 'U', 'Pasien Umum', '2023-05-24 03:05:28', '2023-05-24 03:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_03_054402_create_lokets_table', 1),
(6, '2022_11_03_064254_create_antrians_table', 1),
(7, '2023_05_04_165935_create_pendaftarans_table', 1),
(8, '2023_05_22_124304_create_layanans_table', 1),
(9, '2023_05_22_124323_create_dokters_table', 1),
(10, '2023_05_22_131921_create_reg_pasiens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_rm` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `no_rm`, `nama`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan`, `pekerjaan`, `agama`, `no_hp`, `email`, `created_at`, `updated_at`) VALUES
(1, '53-23-07', 'Refsi rafsanjani', '2023-07-12', 'Laki-laki', 'Single', 'ciomas', 'S1', 'swasta', 'ISLAM', '081122334455', 'refsi@gmail.com', '2023-07-11 00:06:58', '2023-07-11 00:06:58'),
(2, '97-97-09', 'Ilham Maulana', '1997-09-07', 'Laki-laki', 'Single', 'cinangka', 'S1', 'swasta', 'ISLAM', '081122334455', 'ilham@gmail.com', '2023-07-11 05:26:02', '2023-07-11 05:26:02'),
(3, '28-23-07', 'Lia', '2023-07-03', 'Perempuan', 'Berumah Tangga', 'cinangka', 'S1', 'IRT', 'ISLAM', '12345', 'lia@gmail.com', '2023-07-12 07:28:08', '2023-07-12 07:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_pasiens`
--

CREATE TABLE `reg_pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noregistrasi` varchar(255) NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `tipe_pasien` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_pasiens`
--

INSERT INTO `reg_pasiens` (`id`, `noregistrasi`, `pasien_id`, `dokter_id`, `layanan_id`, `tipe_pasien`, `status`, `created_at`, `updated_at`) VALUES
(1, '68561576', 1, 1, 2, 'BPJS', 1, '2023-07-11 00:07:31', '2023-07-11 00:07:31'),
(2, '68755460', 2, 1, 2, 'Umum', 1, '2023-07-12 02:51:51', '2023-07-12 02:51:51'),
(3, '39363669', 3, 2, 8, 'Umum', 1, '2023-07-12 07:30:08', '2023-07-12 07:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ilham Maulana', 'ilham', 'ilham@gmail.com', NULL, '$2y$10$fyvwyI.Z0GdfDVJp6s7qAuun53s/Mf8noQAET998R.dhpb7ooOPJu', NULL, '2023-05-24 03:05:28', '2023-05-24 03:05:28', 1),
(2, 'Dr. Vernon Spencer', 'griffin.stanton', 'mauricio85@example.org', '2023-05-24 03:05:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kOEmjlKNBm', '2023-05-24 03:05:29', '2023-05-24 03:05:29', 0),
(6, 'Rizki', 'giles78', 'rprohaska@example.com', '2023-05-24 03:05:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HVeTsWh8SM', '2023-05-24 03:05:29', '2023-05-24 03:34:07', 0),
(8, 'Idham', 'idham', 'idham@gmail.com', NULL, '$2y$10$U4/tsfwDdA/ztC6mp20FdOQI/EzW7gTGNqIR0UKHZZsSKdQC.If0y', NULL, '2023-07-12 05:42:47', '2023-07-12 05:42:47', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrians`
--
ALTER TABLE `antrians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokets`
--
ALTER TABLE `lokets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reg_pasiens`
--
ALTER TABLE `reg_pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrians`
--
ALTER TABLE `antrians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokets`
--
ALTER TABLE `lokets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_pasiens`
--
ALTER TABLE `reg_pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
