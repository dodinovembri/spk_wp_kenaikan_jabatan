-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 08:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_wp_rani`
--

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `criteria_code` varchar(100) DEFAULT NULL,
  `criteria_name` varchar(255) DEFAULT NULL,
  `criteria_type` varchar(50) DEFAULT NULL,
  `criteria_weight` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `criteria_code`, `criteria_name`, `criteria_type`, `criteria_weight`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'C1', 'Integrity', '1', 20, '2021-04-09 10:05:05', NULL, 1, NULL),
(2, 'C2', 'Teamwork', '1', 20, '2021-04-09 10:05:21', NULL, 1, NULL),
(3, 'C3', 'Innovative', '1', 20, '2021-04-09 10:05:36', NULL, 1, NULL),
(4, 'C4', 'Agility', '1', 20, '2021-04-09 10:05:50', NULL, 1, NULL),
(5, 'C5', 'Safety', '1', 20, '2021-04-09 10:06:17', NULL, 1, NULL),
(6, 'C6', 'Produktifitas', '1', 50, '2021-04-09 10:06:45', '2021-04-09 10:17:15', 1, 1),
(7, 'C7', 'Absensi', '1', 30, '2021-04-09 10:06:58', '2021-04-09 10:17:26', 1, 1),
(8, 'C8', 'Wawancara', '1', 10, '2021-04-09 10:07:21', '2021-04-09 10:17:36', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `criterion_value`
--

CREATE TABLE `criterion_value` (
  `id` int(11) NOT NULL,
  `criteria_id` int(50) DEFAULT NULL,
  `information` varchar(100) DEFAULT NULL,
  `score` double(18,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterion_value`
--

INSERT INTO `criterion_value` (`id`, `criteria_id`, `information`, `score`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:07:44', NULL, 1, NULL),
(2, 1, 'Baik (B) ', 0.75, '2021-04-09 10:07:58', NULL, 1, NULL),
(3, 1, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:08:09', NULL, 1, NULL),
(4, 1, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:09:15', NULL, 1, NULL),
(5, 2, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:09:54', NULL, 1, NULL),
(7, 2, 'Baik (B) ', 0.75, '2021-04-09 10:10:06', NULL, 1, NULL),
(8, 2, 'Cukup Baik (CB) ', 0.50, '2021-04-09 10:10:53', NULL, 1, NULL),
(9, 2, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:11:11', NULL, 1, NULL),
(10, 3, 'Sangat Baik (SB) ', 1.00, '2021-04-09 10:11:28', NULL, 1, NULL),
(11, 3, 'Baik (B) ', 0.75, '2021-04-09 10:11:38', NULL, 1, NULL),
(12, 3, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:11:48', NULL, 1, NULL),
(13, 3, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:11:57', NULL, 1, NULL),
(14, 4, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:12:18', NULL, 1, NULL),
(15, 4, 'Baik (B) ', 0.75, '2021-04-09 10:12:25', NULL, 1, NULL),
(16, 4, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:12:38', '2021-04-09 10:12:49', 1, 1),
(17, 4, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:12:59', NULL, 1, NULL),
(18, 5, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:13:40', NULL, 1, NULL),
(19, 5, 'Baik (B) ', 0.75, '2021-04-09 10:13:47', NULL, 1, NULL),
(20, 5, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:13:55', NULL, 1, NULL),
(21, 5, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:14:08', NULL, 1, NULL),
(22, 6, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:14:26', NULL, 1, NULL),
(23, 6, 'Baik (B) ', 0.75, '2021-04-09 10:14:34', NULL, 1, NULL),
(24, 6, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:14:46', NULL, 1, NULL),
(25, 6, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:14:53', NULL, 1, NULL),
(26, 7, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:15:08', NULL, 1, NULL),
(27, 7, 'Baik (B) ', 0.75, '2021-04-09 10:15:16', NULL, 1, NULL),
(28, 7, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:15:25', NULL, 1, NULL),
(29, 7, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:15:34', NULL, 1, NULL),
(30, 8, 'Sangat Baik (SB)', 1.00, '2021-04-09 10:15:55', NULL, 1, NULL),
(31, 8, 'Baik (B) ', 0.75, '2021-04-09 10:16:28', NULL, 1, NULL),
(32, 8, 'Cukup Baik (CB)', 0.50, '2021-04-09 10:16:34', NULL, 1, NULL),
(33, 8, 'Kurang Baik (KB) ', 0.25, '2021-04-09 10:16:41', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT 4,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `nik`, `gender`, `email`, `image`, `location`, `position`, `type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Administrator', '00', 1, 'admin@gmail.com', '60706c705dbc4.jpg', '', '', 0, '2021-04-09 15:00:00', '2021-04-09 10:02:08', NULL, 1),
(2, 'Khoerur Rohim', 'A1', 1, 'khoerur@gmail.com', NULL, '', '', 4, '2021-04-09 10:51:19', NULL, 1, NULL),
(3, 'Ahmad Zaki', 'A2', 1, 'ahmad@gmail.com', NULL, '', '', 4, '2021-04-09 10:51:53', NULL, 1, NULL),
(4, 'Imam Pratama Aziz', 'A3', 1, 'imam@gmail.com', NULL, '', '', 4, '2021-04-09 10:52:28', NULL, 1, NULL),
(5, 'Muhammad Akbar', 'A4', 1, 'akbar@gmail.com', NULL, '', '', 4, '2021-04-09 10:52:47', NULL, 1, NULL),
(6, 'Dede Kurniawan', 'A5', 1, 'dede@gmail.com', NULL, '', '', 4, '2021-04-09 10:53:15', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `criterion_value_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `employee_id`, `criteria_id`, `criterion_value_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 2, 1, 1, '2021-04-09 11:01:57', NULL, 1, NULL),
(2, 2, 2, 5, '2021-04-09 11:01:57', NULL, 1, NULL),
(3, 2, 3, 10, '2021-04-09 11:01:57', NULL, 1, NULL),
(4, 2, 4, 15, '2021-04-09 11:01:57', NULL, 1, NULL),
(5, 2, 5, 19, '2021-04-09 11:01:57', NULL, 1, NULL),
(6, 2, 6, 23, '2021-04-09 11:01:58', NULL, 1, NULL),
(7, 2, 7, 26, '2021-04-09 11:01:58', NULL, 1, NULL),
(8, 2, 8, 30, '2021-04-09 11:01:58', NULL, 1, NULL),
(9, 3, 1, 1, '2021-04-09 11:02:38', NULL, 1, NULL),
(10, 3, 2, 5, '2021-04-09 11:02:38', NULL, 1, NULL),
(11, 3, 3, 11, '2021-04-09 11:02:38', NULL, 1, NULL),
(12, 3, 4, 15, '2021-04-09 11:02:38', NULL, 1, NULL),
(13, 3, 5, 19, '2021-04-09 11:02:38', NULL, 1, NULL),
(14, 3, 6, 23, '2021-04-09 11:02:38', NULL, 1, NULL),
(15, 3, 7, 27, '2021-04-09 11:02:38', NULL, 1, NULL),
(16, 3, 8, 31, '2021-04-09 11:02:39', NULL, 1, NULL),
(17, 4, 1, 2, '2021-04-09 11:03:07', NULL, 1, NULL),
(18, 4, 2, 7, '2021-04-09 11:03:08', NULL, 1, NULL),
(19, 4, 3, 11, '2021-04-09 11:03:08', NULL, 1, NULL),
(20, 4, 4, 15, '2021-04-09 11:03:08', NULL, 1, NULL),
(21, 4, 5, 19, '2021-04-09 11:03:08', NULL, 1, NULL),
(22, 4, 6, 23, '2021-04-09 11:03:08', NULL, 1, NULL),
(23, 4, 7, 28, '2021-04-09 11:03:08', NULL, 1, NULL),
(24, 4, 8, 32, '2021-04-09 11:03:08', NULL, 1, NULL),
(25, 5, 1, 1, '2021-04-09 11:04:13', NULL, 1, NULL),
(26, 5, 2, 7, '2021-04-09 11:04:13', NULL, 1, NULL),
(27, 5, 3, 10, '2021-04-09 11:04:13', NULL, 1, NULL),
(28, 5, 4, 15, '2021-04-09 11:04:13', NULL, 1, NULL),
(29, 5, 5, 19, '2021-04-09 11:04:13', NULL, 1, NULL),
(30, 5, 6, 23, '2021-04-09 11:04:13', NULL, 1, NULL),
(31, 5, 7, 27, '2021-04-09 11:04:13', NULL, 1, NULL),
(32, 5, 8, 30, '2021-04-09 11:04:13', NULL, 1, NULL),
(33, 6, 1, 1, '2021-04-09 11:05:32', NULL, 1, NULL),
(34, 6, 2, 7, '2021-04-09 11:05:32', NULL, 1, NULL),
(35, 6, 3, 11, '2021-04-09 11:05:32', NULL, 1, NULL),
(36, 6, 4, 16, '2021-04-09 11:05:32', NULL, 1, NULL),
(37, 6, 5, 20, '2021-04-09 11:05:32', NULL, 1, NULL),
(38, 6, 6, 23, '2021-04-09 11:05:32', NULL, 1, NULL),
(39, 6, 7, 27, '2021-04-09 11:05:32', NULL, 1, NULL),
(40, 6, 8, 31, '2021-04-09 11:05:32', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `email`, `password`, `role_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '2021-04-07 10:38:40', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `criterion_value`
--
ALTER TABLE `criterion_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
