-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormitory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rooms_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms_floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms_roomtype` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rooms_code`, `rooms_floor`, `rooms_roomtype`, `created_at`, `updated_at`) VALUES
(1, '101', '1', '1', NULL, NULL),
(2, '102', '1', '1', NULL, NULL),
(3, '103', '1', '1', NULL, NULL),
(4, '104', '1', '1', NULL, NULL),
(5, '105', '1', '1', NULL, NULL),
(6, '106', '1', '1', NULL, NULL),
(7, '107', '1', '1', NULL, NULL),
(8, '108', '1', '1', NULL, NULL),
(9, '109', '1', '1', NULL, NULL),
(10, '110', '1', '1', NULL, NULL),
(11, '111', '1', '1', NULL, NULL),
(12, '201', '2', '2', NULL, NULL),
(13, '202', '2', '2', NULL, NULL),
(14, '203', '2', '2', NULL, NULL),
(15, '204', '2', '2', NULL, NULL),
(16, '205', '2', '2', NULL, NULL),
(17, '206', '2', '2', NULL, NULL),
(18, '207', '2', '2', NULL, NULL),
(19, '208', '2', '2', NULL, NULL),
(20, '209', '2', '2', NULL, NULL),
(21, '210', '2', '2', NULL, NULL),
(22, '211', '2', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
