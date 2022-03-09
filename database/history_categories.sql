-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 07:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `munsiganj_sumiti`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_categories`
--

CREATE TABLE `history_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_categories`
--

INSERT INTO `history_categories` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(2, 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(3, 'ঐতিহাসিক মন্দির', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(4, 'ঐতিহাসিক মাজার', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(5, 'বিক্রমপুরের ঐতিহ্যবাহী স্থান ও স্থাপনা', 'ঐতিহাসিক স্থাপনা ও স্থান সমূহ', NULL, NULL),
(6, 'বিক্রমপুরের দিঘি', 'ঐতিহাসিক স্থাপনা ও স্থান সমূহ', NULL, NULL),
(7, 'বিক্রমপুরের জীবিকা', 'ঐতিহাসিক স্থাপনা ও স্থান সমূহ', NULL, NULL),
(8, 'ঐতিহাসিক মঠ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(9, 'বিক্রমপুরের বিশিষ্ট ব্যক্তিবর্গের পরিভ্রমন', 'ঐতিহাসিক স্থাপনা ও স্থান সমূহ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_categories`
--
ALTER TABLE `history_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_categories`
--
ALTER TABLE `history_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
