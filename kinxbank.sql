-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 01:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinxbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_models`
--

CREATE TABLE `admin_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HomeAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_models`
--

INSERT INTO `admin_models` (`id`, `FullName`, `Email`, `Password`, `UserName`, `Account_Number`, `otp`, `UserType`, `zipcode`, `Country`, `HomeAddress`, `PhoneNumber`, `created_at`, `updated_at`) VALUES
(1, 'Osagioduwa Nosakhare', 'odusoviasuyi@gmail.com', '$2y$10$FCE6HF1zvttY2Zr3Jz0L7uu1P4bc48871rRDsMR1H0ywb3Fwlk.Pi', 'KelvinCole', '8734609251', '918079', 'customer', '224324', 'Switzerland', 'Zurich', '08162942636', '2022-12-22 16:19:15', '2022-12-22 16:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `balancemodels`
--

CREATE TABLE `balancemodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrasactionId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankinfos`
--

CREATE TABLE `bankinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HomeAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankinfo_models`
--

CREATE TABLE `bankinfo_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HomeAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankinfo_models`
--

INSERT INTO `bankinfo_models` (`id`, `FullName`, `Email`, `Password`, `UserName`, `Account_Number`, `otp`, `UserType`, `zipcode`, `Country`, `HomeAddress`, `PhoneNumber`, `created_at`, `updated_at`) VALUES
(1, 'Nosakhare Osas', 'Lvinzamani@gmail.com', '$2y$10$nDrDXU1YZj5TGFQ1wfTjPORu1qjs3Phs./GUoTXOiqCJAKgCF5H5q', 'lvin', '1236548790', '971960', 'customer', '23432', 'Nigeria', 'Chicago', '08162942636', '2022-12-21 18:47:09', '2022-12-21 18:47:09'),
(2, 'Nosa Osas', 'marvel@gmail.com', '$2y$10$B9ZnJb8arrsnn/5s6ICE7.tT79c9LweXg5IkLan4ya7h2z0edE6tm', 'Osas', '6059137482', '786916', 'customer', '1231', 'Nigeria', 'Chicago', '08162942636', '2022-12-22 17:58:07', '2022-12-22 17:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_models`
--

CREATE TABLE `deposit_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SentTo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrasactionId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit_models`
--

INSERT INTO `deposit_models` (`id`, `User_id`, `Amount`, `Email`, `UserName`, `UserAccount`, `SentTo`, `Status`, `Method`, `TrasactionId`, `Time`, `Date`, `created_at`, `updated_at`) VALUES
(1, 1, '2000', 'Lvinzamani@gmail.com', 'Nosakhare Osas', '1236548790', '7956382401', 'Approved', 'Transfer', '1671619662', '10:47:42', '21:12:22', '2022-12-21 18:47:42', '2022-12-22 17:51:48'),
(2, 1, '3000', 'Lvinzamani@gmail.com', 'Nosakhare Osas', '1236548790', '7956382401', 'Approved', 'Transfer', '1671619674', '10:47:54', '21:12:22', '2022-12-21 18:47:54', '2022-12-23 11:39:46'),
(3, 1, '25000', 'Lvinzamani@gmail.com', 'Nosakhare Osas', '1236548790', '7956382401', 'Approved', 'Transfer', '1671702973', '09:56:13', '22:12:22', '2022-12-22 17:56:13', '2022-12-22 17:57:18'),
(4, 2, '4000', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Approved', 'Transfer', '1671703236', '10:00:36', '22:12:22', '2022-12-22 18:00:37', '2022-12-23 11:40:02'),
(5, 2, '25000', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Pending', 'Transfer', '1671703247', '10:00:47', '22:12:22', '2022-12-22 18:00:47', '2022-12-22 18:00:47'),
(6, 2, '1000', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Pending', 'Transfer', '1671703259', '10:00:59', '22:12:22', '2022-12-22 18:00:59', '2022-12-22 18:00:59'),
(7, 2, '500', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Approved', 'Transfer', '1671703269', '10:01:09', '22:12:22', '2022-12-22 18:01:09', '2022-12-23 11:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_12_16_222521_create_bankinfos_table', 1),
(25, '2014_10_12_000000_create_users_table', 2),
(26, '2014_10_12_100000_create_password_resets_table', 2),
(27, '2019_08_19_000000_create_failed_jobs_table', 2),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(29, '2022_12_17_003330_create_bankinfo_models_table', 2),
(30, '2022_12_17_094719_create_deposit_models_table', 2),
(31, '2022_12_17_094806_create_user_deposit_models_table', 2),
(32, '2022_12_20_215826_create_admin_models_table', 2),
(33, '2022_12_24_035521_create_balancemodels_table', 3),
(34, '2022_12_24_040455_create_withdrawmodels_table', 3);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_deposit_models`
--

CREATE TABLE `user_deposit_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SentTo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrasactionId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_deposit_models`
--

INSERT INTO `user_deposit_models` (`id`, `User_id`, `Amount`, `Email`, `UserName`, `UserAccount`, `SentTo`, `Status`, `Method`, `TrasactionId`, `Time`, `Date`, `created_at`, `updated_at`) VALUES
(2, 1, '3000', 'Lvinzamani@gmail.com', 'Nosakhare Osas', '1236548790', 'Admin', 'Approved', 'Transfer', '1671619674', '10:47:54', '21:12:22', '2022-12-21 18:47:42', '2022-12-23 11:39:46'),
(3, 1, '25000', 'Lvinzamani@gmail.com', 'Nosakhare Osas', '1236548790', 'Admin', 'Approved', 'Transfer', '1671702973', '09:56:13', '22:12:22', '2022-12-21 18:47:54', '2022-12-22 17:57:18'),
(4, 2, '4000', 'marvel@gmail.com', 'Nosa Osas', '6059137482', 'Admin', 'Approved', 'Transfer', '1671703236', '10:00:36', '22:12:22', '2022-12-22 17:56:13', '2022-12-23 11:40:02'),
(5, 2, 'Pending', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', '2022-12-22 18:00:36', '2022-12-22 18:00:36'),
(6, 2, 'Pending', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', '2022-12-22 18:00:47', '2022-12-22 18:00:47'),
(7, 2, '500', 'marvel@gmail.com', 'Nosa Osas', '6059137482', 'Admin', 'Approved', 'Transfer', '1671703269', '10:01:09', '22:12:22', '2022-12-22 18:00:59', '2022-12-23 11:40:37'),
(8, 2, 'Pending', 'marvel@gmail.com', 'Nosa Osas', '6059137482', '7956382401', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', '2022-12-22 18:01:09', '2022-12-22 18:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawmodels`
--

CREATE TABLE `withdrawmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrasactionId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_models`
--
ALTER TABLE `admin_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_models_email_unique` (`Email`);

--
-- Indexes for table `balancemodels`
--
ALTER TABLE `balancemodels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `balancemodels_user_id_foreign` (`User_id`);

--
-- Indexes for table `bankinfos`
--
ALTER TABLE `bankinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bankinfos_email_unique` (`Email`);

--
-- Indexes for table `bankinfo_models`
--
ALTER TABLE `bankinfo_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit_models`
--
ALTER TABLE `deposit_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposit_models_user_id_foreign` (`User_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `user_deposit_models`
--
ALTER TABLE `user_deposit_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_deposit_models_user_id_foreign` (`User_id`);

--
-- Indexes for table `withdrawmodels`
--
ALTER TABLE `withdrawmodels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawmodels_user_id_foreign` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_models`
--
ALTER TABLE `admin_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `balancemodels`
--
ALTER TABLE `balancemodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bankinfos`
--
ALTER TABLE `bankinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bankinfo_models`
--
ALTER TABLE `bankinfo_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposit_models`
--
ALTER TABLE `deposit_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_deposit_models`
--
ALTER TABLE `user_deposit_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdrawmodels`
--
ALTER TABLE `withdrawmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balancemodels`
--
ALTER TABLE `balancemodels`
  ADD CONSTRAINT `balancemodels_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `bankinfo_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deposit_models`
--
ALTER TABLE `deposit_models`
  ADD CONSTRAINT `deposit_models_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `bankinfo_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_deposit_models`
--
ALTER TABLE `user_deposit_models`
  ADD CONSTRAINT `user_deposit_models_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `bankinfo_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawmodels`
--
ALTER TABLE `withdrawmodels`
  ADD CONSTRAINT `withdrawmodels_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `bankinfo_models` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
