-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 10:12 AM
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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(255) NOT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_date` datetime NOT NULL,
  `bill_unitsWater` int(11) NOT NULL,
  `bill_serviceWater` int(11) NOT NULL,
  `bill_unitUsedWater` int(11) NOT NULL,
  `bill_water` int(11) NOT NULL,
  `bill_waterBefore` int(11) NOT NULL,
  `bill_unitselEctricity` int(11) NOT NULL,
  `bill_serviceElectricity` int(11) NOT NULL,
  `bill_unitUsedEctricity` int(11) NOT NULL,
  `bill_electricity` int(11) NOT NULL,
  `bill_electricityBefore` int(11) NOT NULL,
  `bill_roomcost` int(11) NOT NULL,
  `bill_setdate` datetime NOT NULL,
  `bill_paydate` datetime NOT NULL,
  `bill_fines` int(11) NOT NULL,
  `biil_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_code`, `customer_id`, `room_id`, `bill_title`, `bill_date`, `bill_unitsWater`, `bill_serviceWater`, `bill_unitUsedWater`, `bill_water`, `bill_waterBefore`, `bill_unitselEctricity`, `bill_serviceElectricity`, `bill_unitUsedEctricity`, `bill_electricity`, `bill_electricityBefore`, `bill_roomcost`, `bill_setdate`, `bill_paydate`, `bill_fines`, `biil_status`, `created_at`, `updated_at`) VALUES
(1, 'ID2R109MY10/2563', 2, '109', '10/2563', '2020-10-24 17:04:28', 20, 6, 2, 52, 8008, 5, 2, 50, 325, 8150, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '1', '2020-10-24 10:04:28', NULL),
(2, 'ID1R101MY10/2563', 1, '101', '10/2563', '2020-10-24 17:58:15', 20, 6, 2, 52, 8008, 5, 2, 100, 650, 8500, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-24 10:58:15', NULL),
(3, 'ID4R103MY10/2563', 4, '103', '10/2563', '2020-10-24 17:58:43', 20, 6, 3, 78, 8007, 5, 2, 30, 195, 8170, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-24 10:58:43', NULL),
(4, 'ID6R104MY10/2563', 6, '104', '10/2563', '2020-10-24 18:00:22', 20, 6, 5, 130, 8003, 5, 2, 20, 130, 8150, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-24 11:00:22', NULL),
(5, 'ID5R203MY10/2563', 5, '203', '10/2563', '2020-10-24 18:00:41', 20, 6, 3, 78, 8000, 5, 2, 100, 650, 8000, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-24 11:00:41', NULL),
(6, 'ID3R209MY10/2563', 3, '209', '10/2563', '2020-10-24 18:00:53', 20, 6, 5, 130, 8003, 5, 2, 50, 325, 8150, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-24 11:00:53', NULL),
(7, 'ID7R204MY10/2563', 7, '204', '10/2563', '2020-10-25 08:01:55', 20, 6, 3, 78, 8000, 5, 2, 100, 650, 8000, 3900, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2020-10-25 01:01:55', NULL);

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
(1, '1100024800326', 'admin', 'system', 'M', '0910000555', 'admin@gmail.com', '11', '101', 6000, 3900, '1', 'P', '1Y', '2020-10-24 07:42:32', '2020-10-24 07:42:32'),
(2, '1900024800999', 'test', 'system', 'M', '0954500853', 'test@gmail.com', '11', '109', 6000, 3900, '1', 'P', '1Y', '2020-10-24 07:42:55', '2020-10-24 07:42:55'),
(3, '1900024800888', 'มาลี', 'มาแล้ว', 'F', '0910000555', 'admin@gmail.com', '11', '209', 6000, 3900, '1', 'P', '1Y', '2020-10-24 07:43:27', '2020-10-24 07:43:27'),
(4, '1900024800666', 'มานะ', 'ไปแล้ว', 'M', '0910000248', 'test@gmail.com', '11', '103', 6000, 3900, '1', 'P', '1Y', '2020-10-24 07:44:15', '2020-10-24 07:44:15'),
(5, '1900024800555', 'สมชาย', 'ยอดชาย', 'M', '0910000555', 'admin@gmail.com', '11', '203', 6000, 3900, '1', 'P', '1Y', '2020-10-24 08:06:48', '2020-10-24 08:06:48'),
(6, '1900024800729', 'โจโจ้', 'โจสตาร์', 'M', '0910000456', 'jo.jo@gmail.com', '11', '104', 6000, 3900, '1', 'P', '6M', '2020-10-24 08:47:18', '2020-10-24 08:47:18'),
(7, '1900024800222', 'ชูใจ', 'บุญชู', 'M', '0910000511', 'honnage.x@gmail.com', '11', '204', 6000, 3900, '1', 'P', '6M', '2020-10-25 01:01:46', '2020-10-25 01:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `dormitory`
--

CREATE TABLE `dormitory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dormitory_unitsWater` double NOT NULL,
  `dormitory_serviceWater` double NOT NULL,
  `dormitory_unitselEctricity` double NOT NULL,
  `dormitory_serviceElectricity` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`id`, `dormitory_unitsWater`, `dormitory_serviceWater`, `dormitory_unitselEctricity`, `dormitory_serviceElectricity`, `created_at`, `updated_at`) VALUES
(1, 20, 6, 4.5, 2, '2020-10-23 12:19:02', '2020-10-23 12:19:02');

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2019_08_19_000000_create_failed_jobs_table', 1),
(47, '2020_10_14_093916_create_table_rooms', 1),
(52, '2020_10_23_184305_create_table_dormitory', 3),
(64, '2020_10_20_200529_create_table_customers', 4),
(69, '2020_10_23_183041_create_table_bill', 5),
(70, '2014_10_12_000000_create_users_table', 6);

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
(1, '101', '1', '1', 8600, 8010, '2020-10-23 10:36:03', '2020-10-23 10:36:03'),
(2, '102', '1', '1', 7000, 7000, NULL, NULL),
(3, '103', '1', '1', 8200, 8010, NULL, NULL),
(4, '104', '1', '1', 8170, 8008, NULL, NULL),
(5, '105', '1', '1', 8000, 8000, NULL, NULL),
(6, '106', '1', '1', 8000, 8000, NULL, NULL),
(7, '107', '1', '1', 8000, 8000, NULL, NULL),
(8, '108', '1', '1', 8000, 8000, NULL, NULL),
(9, '109', '1', '1', 8200, 8010, NULL, NULL),
(10, '110', '1', '1', 8000, 8000, NULL, NULL),
(11, '111', '1', '1', 8000, 8000, NULL, NULL),
(12, '201', '2', '2', 8000, 8000, NULL, NULL),
(13, '202', '2', '2', 8000, 8000, NULL, NULL),
(14, '203', '2', '2', 8100, 8003, NULL, NULL),
(15, '204', '2', '2', 8100, 8003, NULL, NULL),
(16, '205', '2', '2', 8000, 8000, NULL, NULL),
(17, '206', '2', '2', 8000, 8000, NULL, NULL),
(18, '207', '2', '2', 8000, 8000, NULL, NULL),
(19, '208', '2', '2', 8000, 8000, NULL, NULL),
(20, '209', '2', '2', 8200, 8008, NULL, NULL),
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StatusID` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `StatusID`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 0, 'admin@gmail.com', NULL, '$2y$10$4A5Uru1ra7svmGgoVCVZwOCsqSIGRDWRMfEF0bD19ntSlBx3VESzm', NULL, '2020-10-25 00:17:40', '2020-10-25 00:17:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dormitory`
--
ALTER TABLE `dormitory`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dormitory`
--
ALTER TABLE `dormitory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
