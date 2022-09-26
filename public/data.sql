-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2022 at 06:42 PM
-- Server version: 10.3.36-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hkdthlxm_sherlin`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://',
  `hit` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_name_unique` (`name`),
  UNIQUE KEY `links_cname_unique` (`cname`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `name`, `cname`, `url`, `hit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'github', 'gh', 'https://github.com/irfans18', 35, NULL, '2022-01-09 18:56:33', '2022-09-24 00:18:51'),
(2, 1, 'skut', NULL, 'https://meet.google.com/hka-xjky-iiz', 11, NULL, '2022-01-17 19:57:49', '2022-01-24 21:13:45'),
(3, 1, 'skuts', NULL, 'https://meet.google.com/eiv-vbqs-vfr', 106, NULL, '2022-01-21 18:49:15', '2022-09-25 03:54:18'),
(4, 1, 'rkj', NULL, 'https://drive.google.com/drive/u/0/folders/1B1NQ-8xeYkr_aRKSHZfppZeFhbZL5Rxm', 14, NULL, '2022-04-09 03:02:23', '2022-04-20 13:44:50'),
(5, 1, 'formatur', 'frm', 'https://drive.google.com/drive/folders/1sTNe2r7HXFhUenr_3EH_CGd_Rch4wyKy?usp=sharing', 3, NULL, '2022-04-10 01:41:28', '2022-04-14 18:06:01'),
(6, 1, 'silsilah', 'sl', 'https://docs.google.com/spreadsheets/d/1QXWyAu1WDbzQ3EVpV6vfZOYnyQ0yBRm2/edit?usp=sharing&ouid=103226998652053837360&rtpof=true&sd=true', 93, NULL, '2022-05-04 00:22:25', '2022-06-02 02:06:50'),
(7, 1, 'fmtree', NULL, 'https://drive.google.com/uc?id=1RW4MEQPBq8H26MCVT4yk6uZg0NFeR_98', 41, NULL, '2022-05-06 19:32:25', '2022-05-10 02:42:21'),
(8, 1, 'digigid', NULL, 'https://docs.google.com/spreadsheets/d/1eXbUR17qNngLsRIRwhnE1UQE89UrIwBF78phCv3YpZc/edit?usp=sharing', 2, NULL, '2022-08-31 17:58:35', '2022-09-03 20:24:31'),
(9, 1, 'devops', 'wd', 'https://drive.google.com/drive/folders/11VwwFpW1-6KJ8XSdfEtQkvEY_5l9yNrt', 7, NULL, '2022-09-04 05:36:59', '2022-09-20 17:27:34'),
(10, 1, 'eng7', 'ev', 'https://drive.google.com/drive/folders/1m_dL3A4yiXcs2ntxFmJh-UGhK7qKMpvx?usp=sharing', 29, NULL, '2022-09-04 06:57:12', '2022-09-25 19:49:05'),
(11, 1, 'proposalPA', 'pa', 'https://drive.google.com/drive/folders/1CKhxvhCx4YoKsCN8qlJmGjRI42bJ9G6L', 6, NULL, '2022-09-11 18:05:07', '2022-09-21 17:04:10'),
(12, 1, 'sem7', 'se7', 'https://drive.google.com/drive/folders/13UtyYmN3bKu8nQ59PMzgTwCg_5jCK41a?usp=sharing', 1, NULL, '2022-09-13 06:38:58', '2022-09-13 06:41:13'),
(13, 1, 'wcloud', 'wcl', 'https://drive.google.com/drive/folders/13UtyYmN3bKu8nQ59PMzgTwCg_5jCK41a?usp=sharing', 3, NULL, '2022-09-13 06:40:07', '2022-09-13 06:45:46'),
(14, 1, 'docker', 'd', 'https://download.docker.com/linux/ubuntu/dists/jammy/pool/stable/amd64/docker-ce-cli_20.10.18~3-0~ubuntu-jammy_amd64.deb', 0, NULL, '2022-09-13 19:19:01', '2022-09-13 19:19:11'),
(15, 1, 'babi21', NULL, 'https://meet.google.com/kzv-dnyu-bty', 6, NULL, '2022-09-25 05:55:01', '2022-09-25 06:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_15_205209_create_links_table', 1),
(6, '2021_11_15_213559_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dev', 'admin@this', NULL, '$2y$10$mAhYYGPsv3U27ukZ72PVrepN5xL5KY1cP1JboV4Ns0mXTwBYHdGkO', NULL, '2022-01-01 09:46:48', '2022-01-01 09:46:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
