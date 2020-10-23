-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 07:15 PM
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
(1, '101', '1', '1', 8000, 8000),
(2, '102', '1', '1', 8000, 8000),
(3, '103', '1', '1', 8000, 8000),
(4, '104', '1', '1', 8000, 8000),
(5, '105', '1', '1', 8000, 8000),
(6, '106', '1', '1', 8000, 8000),
(7, '107', '1', '1', 8000, 8000),
(8, '108', '1', '1', 8000, 8000),
(9, '109', '1', '1', 8000, 8000),
(10, '110', '1', '1', 8000, 8000),
(11, '111', '1', '1', 8000, 8000),
(12, '202', '2', '2', 8000, 8000),
(13, '202', '2', '2', 8000, 8000),
(14, '203', '2', '2', 8000, 8000),
(15, '204', '2', '2', 8000, 8000),
(16, '205', '2', '2', 8000, 8000),
(17, '206', '2', '2', 8000, 8000),
(18, '207', '2', '2', 8000, 8000),
(19, '208', '2', '2', 8000, 8000),
(20, '209', '2', '2', 8000, 8000),
(21, '210', '2', '2', 8000, 8000),
(22, '211', '2', '2', 8000, 8000),
(23, '301', '3', '2', 8000, 8000),
(24, '302', '3', '2', 8000, 8000),
(25, '303', '3', '2', 8000, 8000),
(26, '304', '3', '2', 8000, 8000),
(27, '305', '3', '2', 8000, 8000),
(28, '306', '3', '2', 8000, 8000),
(29, '307', '3', '2', 8000, 8000),
(30, '308', '3', '2', 8000, 8000),
(31, '309', '3', '2', 8000, 8000),
(32, '310', '3', '2', 8000, 8000),
(33, '311', '3', '2', 8000, 8000),
(34, '401', '4', '2', 8000, 8000),
(35, '402', '4', '2', 8000, 8000),
(36, '403', '4', '2', 8000, 8000),
(37, '404', '4', '2', 8000, 8000),
(38, '405', '4', '2', 8000, 8000),
(39, '406', '4', '2', 8000, 8000),
(40, '407', '4', '2', 8000, 8000),
(41, '408', '4', '2', 8000, 8000),
(42, '409', '4', '2', 8000, 8000),
(43, '410', '4', '2', 8000, 8000),
(44, '411', '4', '2', 8000, 8000),
(45, '501', '5', '2', 8000, 8000),
(46, '502', '5', '2', 8000, 8000),
(47, '503', '5', '2', 8000, 8000),
(48, '504', '5', '2', 8000, 8000),
(49, '505', '5', '2', 8000, 8000),
(50, '506', '5', '2', 8000, 8000),
(51, '507', '5', '2', 8000, 8000),
(52, '508', '5', '2', 8000, 8000),
(53, '509', '5', '2', 8000, 8000),
(54, '510', '5', '2', 8000, 8000),
(55, '511', '5', '2', 8000, 8000),
(56, '601', '6', '2', 8000, 8000),
(57, '602', '6', '2', 8000, 8000),
(58, '603', '6', '2', 8000, 8000),
(59, '604', '6', '2', 8000, 8000),
(60, '605', '6', '2', 8000, 8000),
(61, '606', '6', '2', 8000, 8000),
(62, '607', '6', '2', 8000, 8000),
(63, '608', '6', '2', 8000, 8000),
(64, '609', '6', '2', 8000, 8000),
(65, '610', '6', '2', 8000, 8000),
(66, '611', '6', '2', 8000, 8000);


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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
