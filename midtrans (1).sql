-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `snap_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `donation_code`, `donor_name`, `donor_email`, `donation_type`, `amount`, `note`, `status`, `snap_token`, `created_at`, `updated_at`) VALUES
(1, 'UDON-5ea92fcd39c43', 'asdasd', 'sadsa@adasd.asdsadsad', 'medis_kesehatan', '213213213.00', 'dfsfd', 'pending', '903cc1a5-65e5-4655-992f-7ad256053e8f', '2020-04-29 00:42:05', '2020-04-29 00:42:05'),
(2, 'UDON-5ea93033d5a8d', 'asdasd', 'sadsa@adasd.asdsadsad', 'medis_kesehatan', '213213213.00', 'dfsfd', 'pending', '2460bb1e-873e-421a-9aad-0b8abe6d97d6', '2020-04-29 00:43:47', '2020-04-29 00:43:48'),
(3, 'UDON-5ea9339e6cc56', 'test', 'test@mail.com', 'medis_kesehatan', '500000.00', '-', 'pending', '4ed8d1b4-cf3d-4024-83e5-0e433218601f', '2020-04-29 00:58:22', '2020-04-29 00:58:23'),
(4, 'UDON-5ea936a199ef0', 'fajar', 'fajar@mail.com', 'medis_kesehatan', '30000.00', '-', 'pending', '0d5738b7-01e9-4544-a08f-ed148807d30c', '2020-04-29 01:11:13', '2020-04-29 01:11:14'),
(5, 'UDON-5ea93e5bce000', 'Test Mid', 'midtrans@test.com', 'medis_kesehatan', '20000.00', 'test', 'pending', '6a96bac1-bd76-43a9-8a60-ebe56a0f7117', '2020-04-29 01:44:11', '2020-04-29 01:44:12'),
(6, 'UDON-5ea94014ebfa4', 'Hilmi', 'hilmi@mail.com', 'bencana_alam', '100000.00', '-', 'pending', 'fb091c3d-0c64-4128-a2ce-5bde12e586ea', '2020-04-29 01:51:32', '2020-04-29 01:51:33'),
(7, 'UDON-5ea9414a18792', 'test midtrans', 'testmidtrans@test.id', 'medis_kesehatan', '2000000.00', '-', 'pending', 'fde11e0e-7f1a-4174-9376-e730e624368a', '2020-04-29 01:56:42', '2020-04-29 01:56:42'),
(8, 'UDON-5ea943d0b60c0', 'test2', 'test2@mail.test', 'medis_kesehatan', '20000.00', NULL, 'pending', '637b0e94-184d-46f8-bd1f-1f8e008b377a', '2020-04-29 02:07:28', '2020-04-29 02:07:29'),
(9, 'UDON-5ea98de148c4f', 'test pay', 'test@pay.tes', 'beasiswa_pendidikan', '40000.00', NULL, 'pending', 'ae2547ea-82d4-442d-9563-dc7456364eac', '2020-04-29 07:23:29', '2020-04-29 07:23:29'),
(10, 'UDON-5eac43ba68fd8', 'hilmi', 'hilmi@main.test', 'medis_kesehatan', '20000.00', '-', 'pending', '8265b962-10b4-4d89-ba57-d362c8ef1f36', '2020-05-01 08:43:54', '2020-05-01 08:43:55'),
(11, 'UDON-5eafd8d35c57e', 'test', 'test@test.etst', 'medis_kesehatan', '50000.00', NULL, 'pending', 'e273fe41-1587-41b9-90d0-bcf3a2f96131', '2020-05-04 01:56:51', '2020-05-04 01:56:51'),
(12, 'UDON-5eafd90f872d2', 'test', 'test@test.etst', 'medis_kesehatan', '50000.00', NULL, 'pending', 'fb747120-7460-41a9-8289-5b8c8c164342', '2020-05-04 01:57:51', '2020-05-04 01:57:51'),
(13, 'UDON-5eafe1f7e185b', 'sdfdsf', 'dsfds@asdas.asdasd', 'medis_kesehatan', '3223423.00', NULL, 'pending', 'bb48f27f-07cc-4fff-ae08-840d4512102f', '2020-05-04 02:35:51', '2020-05-04 02:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_04_29_044411_create_donations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hilmi', 'hilmihidayat175@gmail.com', NULL, '$2y$10$NvfPLGaZ8fPwLd8K/GCTGefJXHt8.UnMdr0qGtL9neMiY.1On5Do6', NULL, '2020-04-29 07:45:44', '2020-04-29 07:45:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
