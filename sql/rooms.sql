-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:29 PM
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
  `rooms_roomtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms_unitsElectricity` int(11) NOT NULL,
  `rooms_unitsWater` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rooms_code`, `rooms_floor`, `rooms_roomtype`, `rooms_unitsElectricity`, `rooms_unitsWater`, `created_at`, `updated_at`) VALUES
(1, '101', '1', '1', 8000, 8000, '2020-10-23 10:36:03', '2020-10-23 10:36:03'),
(2, '102', '1', '1', 8000, 8000, NULL, NULL),
(3, '103', '1', '1', 8000, 8000, NULL, NULL),
(4, '104', '1', '1', 8000, 8000, NULL, NULL),
(5, '105', '1', '1', 8000, 8000, NULL, NULL),
(6, '106', '1', '1', 8000, 8000, NULL, NULL),
(7, '107', '1', '1', 8000, 8000, NULL, NULL),
(8, '108', '1', '1', 8000, 8000, NULL, NULL),
(9, '109', '1', '1', 8000, 8000, NULL, NULL),
(10, '110', '1', '1', 8000, 8000, NULL, NULL),
(11, '111', '1', '1', 8000, 8000, NULL, NULL),
(12, '201', '2', '2', 8000, 8000, NULL, NULL),
(13, '202', '2', '2', 8000, 8000, NULL, NULL),
(14, '203', '2', '2', 8000, 8000, NULL, NULL),
(15, '204', '2', '2', 8000, 8000, NULL, NULL),
(16, '205', '2', '2', 8000, 8000, NULL, NULL),
(17, '206', '2', '2', 8000, 8000, NULL, NULL),
(18, '207', '2', '2', 8000, 8000, NULL, NULL),
(19, '208', '2', '2', 8000, 8000, NULL, NULL),
(20, '209', '2', '2', 8000, 8000, NULL, NULL),
(21, '210', '2', '2', 8000, 8000, NULL, NULL),
(22, '211', '2', '2', 8000, 8000, NULL, NULL),
(23, '301', '3', '2', 8000, 8000, NULL, NULL),
(24, '302', '3', '2', 8000, 8000, NULL, NULL),
(25, '303', '3', '2', 8000, 8000, NULL, NULL),
(26, '304', '3', '2', 8000, 8000, NULL, NULL),
(27, '305', '3', '2', 8000, 8000, NULL, NULL),
(28, '306', '3', '2', 8000, 8000, NULL, NULL),
(29, '307', '3', '2', 8000, 8000, NULL, NULL),
(30, '308', '3', '2', 8000, 8000, NULL, NULL),
(31, '309', '3', '2', 8000, 8000, NULL, NULL),
(32, '310', '3', '2', 8000, 8000, NULL, NULL),
(33, '311', '3', '2', 8000, 8000, NULL, NULL),
(34, '401', '4', '2', 8000, 8000, NULL, NULL),
(35, '402', '4', '2', 8000, 8000, NULL, NULL),
(36, '403', '4', '2', 8000, 8000, NULL, NULL),
(37, '404', '4', '2', 8000, 8000, NULL, NULL),
(38, '405', '4', '2', 8000, 8000, NULL, NULL),
(39, '406', '4', '2', 8000, 8000, NULL, NULL),
(40, '407', '4', '2', 8000, 8000, NULL, NULL),
(41, '408', '4', '2', 8000, 8000, NULL, NULL),
(42, '409', '4', '2', 8000, 8000, NULL, NULL),
(43, '410', '4', '2', 8000, 8000, NULL, NULL),
(44, '411', '4', '2', 8000, 8000, NULL, NULL),
(45, '501', '5', '2', 8000, 8000, NULL, NULL),
(46, '502', '5', '2', 8000, 8000, NULL, NULL),
(47, '503', '5', '2', 8000, 8000, NULL, NULL),
(48, '504', '5', '2', 8000, 8000, NULL, NULL),
(49, '505', '5', '2', 8000, 8000, NULL, NULL),
(50, '506', '5', '2', 8000, 8000, NULL, NULL),
(51, '507', '5', '2', 8000, 8000, NULL, NULL),
(52, '508', '5', '2', 8000, 8000, NULL, NULL),
(53, '509', '5', '2', 8000, 8000, NULL, NULL),
(54, '510', '5', '2', 8000, 8000, NULL, NULL),
(55, '511', '5', '2', 8000, 8000, NULL, NULL),
(56, '601', '6', '2', 8000, 8000, NULL, NULL),
(57, '602', '6', '2', 8000, 8000, NULL, NULL),
(58, '603', '6', '2', 8000, 8000, NULL, NULL),
(59, '604', '6', '2', 8000, 8000, NULL, NULL),
(60, '605', '6', '2', 8000, 8000, NULL, NULL),
(61, '606', '6', '2', 8000, 8000, NULL, NULL),
(62, '607', '6', '2', 8000, 8000, NULL, NULL),
(63, '608', '6', '2', 8000, 8000, NULL, NULL),
(64, '609', '6', '2', 8000, 8000, NULL, NULL),
(65, '610', '6', '2', 8000, 8000, NULL, NULL),
(66, '611', '6', '2', 8000, 8000, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
