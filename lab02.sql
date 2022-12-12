-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 11:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab02`
--

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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_09_21_133452_news01', 2),
(10, '2022_09_28_163419_project01', 3),
(11, '2022_09_28_185408_publication01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news01`
--

CREATE TABLE `news01` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news01`
--

INSERT INTO `news01` (`id`, `name`, `notice`, `created_at`, `updated_at`, `date`) VALUES
(33, 'aaa', 'aaqqq', NULL, NULL, '2022-09-27'),
(37, 'Bangladesh', '<p>Bangladesh is a <font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">beautiful</font> country.</p>', NULL, NULL, '2022-09-28'),
(38, 'Bangladesh420', '<p><span style=\"font-family: Arial; background-color: rgb(255, 255, 0);\"><font color=\"#000000\">﻿Bangladesh</font></span><br></p>', NULL, '2022-10-08 00:24:12', '2022-09-28'),
(40, 'ghfgvhjb', '<p>nbhjbjbj</p>', NULL, NULL, '2022-10-08'),
(41, 'kndkfnrwkf', '<p>lknsjklnvjnrfvjk</p>', NULL, NULL, '2022-10-08');

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
-- Table structure for table `project01`
--

CREATE TABLE `project01` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project01`
--

INSERT INTO `project01` (`id`, `name`, `notice`, `created_at`, `updated_at`, `date`) VALUES
(1, 'Abir123', '<p>Bangladesh</p>', NULL, '2022-10-06 02:02:25', '2022-09-29'),
(2, 'Bangladesh420', '<p>abcde</p>', NULL, '2022-10-06 02:21:58', '2022-09-29'),
(3, 'ABCD', '<p>abcd</p>', NULL, NULL, '2022-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `publication01`
--

CREATE TABLE `publication01` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publication01`
--

INSERT INTO `publication01` (`id`, `name`, `notice`, `created_at`, `updated_at`, `date`) VALUES
(1, 'Abir420', '<p>Bangladesh</p>', NULL, '2022-10-06 02:24:39', '2022-09-29'),
(2, 'Bangladesh', '<p>abcde</p>', NULL, NULL, '2022-09-29'),
(4, '1232', '<p>qazxswedcvfrtgbnhyujm,kiolp</p>', NULL, NULL, '2022-10-06'),
(5, 'kjhdjhf', '<p>lkjfijr</p>', NULL, NULL, '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_type` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_type`, `photo`, `bio`) VALUES
(2, 'Kishor Morol', 'tarikulabir931@gmail.com', '0', NULL, '$2y$10$y8qH//9zOpbooN8AC4G.GeYioAm28GLPmksq8uKzl7x2vCG3PVEOy', 'Ql0EuvfPl9yvSJlap21z8a2bvEjTm6y2nLLUW6VgXKRo0SDydeQrc8iFJCT8', '2022-09-19 02:58:59', '2022-12-07 01:27:41', 'Principal Investigator', '', NULL),
(3, 'Tarikul Abir', 'tarikulabir@gmail.com', '0', NULL, '$2y$10$/2edoMgE3hM1nmtqjOoME.2SzNSGC826CBK0dR4bbqDhwFQloLesy', 'CEZ8NDfvj7jGwPZHfxggSa5HkpTCmhYoLcHFewe0CXs5obG6Fb6XpGLOhaLG', '2022-09-19 03:13:03', '2022-12-07 01:27:38', 'Research Assistant', '', NULL),
(5, 'Munna', 'munna121@gmail.com', '0', NULL, '$2y$10$5apqTjNLpqPoJAgIDyEIJOA4QtN4pY1xmy6Ka8wA6imasraIEqZqm', NULL, '2022-10-07 10:53:18', '2022-12-07 01:27:36', 'Research Assistant', NULL, NULL),
(8, 'Test1', 'test@gmail.com', '0', NULL, '$2y$10$LImqU7wtol1jFyzYEXMRZe3HFwKfTCzv6w/dXOz6DP1bo2dmRlU.W', NULL, NULL, '2022-12-07 06:04:59', 'Principal Invastigator', NULL, 'abcd...'),
(9, 'ababa', 'abab@gmail.com', '0', NULL, '$2y$10$t1p1Nj1HhjRFm3bMfP0NBOYtkQg2e5vTGcadBIg3GVhAwCICnFLrS', NULL, NULL, '2022-12-07 01:25:14', 'Research Assistant', 'photo/1746654042104502.jpeg', 'wdd');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `news01`
--
ALTER TABLE `news01`
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
-- Indexes for table `project01`
--
ALTER TABLE `project01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication01`
--
ALTER TABLE `publication01`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news01`
--
ALTER TABLE `news01`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project01`
--
ALTER TABLE `project01`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publication01`
--
ALTER TABLE `publication01`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
