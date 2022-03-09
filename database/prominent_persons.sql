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
-- Table structure for table `prominent_persons`
--

CREATE TABLE `prominent_persons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prominent_persons`
--

INSERT INTO `prominent_persons` (`id`, `name`, `info`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Md Nishad Hossainfffff', '<h1>fdfgghghkjh</h1><h3>ftgyhghgh</h3>', 'বিক্রামপুরের ব্যক্তিত্ব', NULL, '2022-03-09 16:33:14'),
(2, 'Md Nishad Hossainfghfg', '<p>fghghgh</p>', 'বিক্রামপুরের ব্যক্তিত্ব', NULL, NULL),
(3, 'Freelancer Nishad', '<p>Freelancer NishadFreelancer NishadFreelancer NishadFreelancer NishadFreelancer NishadFreelancer Nishad<br></p>', 'বিক্রামপরের নারী ব্যক্তিত্ব', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prominent_persons`
--
ALTER TABLE `prominent_persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prominent_persons`
--
ALTER TABLE `prominent_persons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
