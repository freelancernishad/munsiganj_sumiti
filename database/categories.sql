-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2022 at 07:01 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbsbdhld_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `status` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryId`, `name`, `parent`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, NULL, 'স্থানীয়', NULL, NULL, NULL, '2022-02-27 13:02:10', '2022-04-18 00:53:07'),
(7, NULL, 'জাতীয়', NULL, NULL, NULL, '2022-02-27 13:02:23', '2022-04-18 00:53:46'),
(8, NULL, 'আন্তর্জাতিক', NULL, NULL, NULL, '2022-02-27 13:02:36', '2022-04-18 00:54:07'),
(9, NULL, 'বিনোদন', NULL, NULL, NULL, '2022-02-27 13:02:52', NULL),
(10, NULL, 'খেলাধূলা', NULL, NULL, NULL, '2022-02-27 13:03:04', NULL),
(11, NULL, 'শিল্প-সাহিত্য', NULL, NULL, NULL, '2022-02-27 13:03:22', NULL),
(12, NULL, 'ম্যাগাজিন', NULL, NULL, NULL, '2022-02-27 13:03:34', NULL),
(13, NULL, 'গল্প', 'ম্যাগাজিন', NULL, NULL, '2022-04-17 18:59:34', NULL),
(14, NULL, 'সাহিত্য', 'ম্যাগাজিন', NULL, NULL, '2022-04-17 18:59:34', NULL),
(15, NULL, 'কবিতা', 'ম্যাগাজিন', NULL, NULL, '2022-04-17 18:59:34', NULL),
(16, NULL, 'পাঠক কর্ণার', 'ম্যাগাজিন', NULL, NULL, '2022-04-17 18:59:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
