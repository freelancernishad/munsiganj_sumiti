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
-- Table structure for table `history_places`
--

CREATE TABLE `history_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentCategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_places`
--

INSERT INTO `history_places` (`id`, `name`, `info`, `category`, `parentCategory`, `created_at`, `updated_at`) VALUES
(2, 'বাবা আদমের মসজিদ।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বাবা আদমের মসজিদ।</span><br></p>', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(3, 'টেঙ্গরশাহী জামে মসজিদ।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">টেঙ্গরশাহী জামে মসজিদ।</span><br></p>', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(4, 'ইদ্রাকপুরের কেল্লা।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">ইদ্রাকপুরের কেল্লা।</span><br></p>', 'বিক্রমপুরের ঐতিহ্যবাহী স্থান ও স্থাপনা', 'ঐতিহাসিক স্থাপনা ও স্থান সমূহ', NULL, NULL),
(5, 'পাথর ঘাটার মসজিদ।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">পাথর ঘাটার মসজিদ।</span><br></p>', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(6, 'আউটশাহীর মসজিদ।', 'আউটশাহীর মসজিদ।', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(7, 'তাজপুরের মসজিদ।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">তাজপুরের মসজিদ।</span><br></p>', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL),
(8, 'বলইর মোঘল আমলের মসজিদ।', '<p><span style=\"color: rgb(33, 37, 41); font-family: SutonnyMJ; font-size: 18.6667px; text-align: justify;\">বলইর মোঘল আমলের মসজিদ।</span><br></p>', 'ঐতিহাসিক মসজিদ', 'ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_places`
--
ALTER TABLE `history_places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_places`
--
ALTER TABLE `history_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
