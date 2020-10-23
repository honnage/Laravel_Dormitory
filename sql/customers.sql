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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_IDcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_deposit` int(11) NOT NULL,
  `roomcost` int(11) NOT NULL,
  `booking_statusResidence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_statusPayment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_timeperiod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_IDcard`, `customer_firstname`, `customer_lastname`, `customer_gender`, `customer_phone`, `customer_email`, `customer_address`, `room_id`, `booking_deposit`, `roomcost`, `booking_statusResidence`, `booking_statusPayment`, `booking_timeperiod`, `created_at`, `updated_at`) VALUES
(1, '1100024800326', 'admin', 'system', 'M', '0910000555', 'admin@gmail.com', '11', '101', 6000, 3900, '1', 'P', '6M', '2020-10-23 10:32:59', '2020-10-23 10:32:59'),
(2, '1900024800999', 'test', 'system', 'M', '0954500853', 'test@gmail.com', '11', '102', 6000, 3900, '1', 'P', '6M', '2020-10-23 10:33:21', '2020-10-23 10:33:21'),
(3, '1100024800326', 'hon', 'nage', 'M', '0910000555', 'honnage.x@gmail.com', '11', '109', 6000, 3900, '1', 'P', '6M', '2020-10-23 10:33:37', '2020-10-23 10:33:37'),
(4, '1900024800888', 'มาลี', 'มาแล้ว', 'F', '0910000555', 'admin@gmail.com', '11', '209', 6000, 3900, '1', 'P', '6M', '2020-10-23 10:57:03', '2020-10-23 10:57:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
