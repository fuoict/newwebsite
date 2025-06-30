-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2025 at 06:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuo`
--

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `programme_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programme_type` enum('Undergraduate','Postgraduate','Diploma') COLLATE utf8mb4_unicode_ci NOT NULL,
  `programme_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programme_description` text COLLATE utf8mb4_unicode_ci,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_requirements` enum('Olevel','Alevel','Conversion','IUT','Direct-Entry') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `department_id`, `programme_name`, `programme_type`, `programme_code`, `programme_description`, `duration`, `entry_requirements`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'B.Sc. Environmental Health Science', 'Undergraduate', 'EHS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(2, 2, 'B.Sc. Arabic and Islamic Studies', 'Undergraduate', 'AIS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(3, 3, 'B.A. History and International Studies', 'Undergraduate', 'HIS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(4, 4, 'B.A. English Studies', 'Undergraduate', 'ENS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(5, 4, 'B.A. French Studies', 'Undergraduate', 'FSH', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(6, 4, 'B.A. Linguistics', 'Undergraduate', 'LNG', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(7, 5, 'B.A. Medical Lab Science', 'Undergraduate', 'MLS', 'LOREM', '5', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(8, 6, 'B.A. Nursing', 'Undergraduate', 'NSC', 'LOREM', '5', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(9, 7, 'B.A. Public Health', 'Undergraduate', 'PHE', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(10, 8, 'B.Sc. Microbiology.', 'Undergraduate', 'MCB', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(11, 9, 'B.Sc. Biochemistry & Nutrition', 'Undergraduate', 'BCH', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(12, 9, 'B.Sc. Industrial & Environmental Chemistry', 'Undergraduate', 'ICH', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(13, 10, 'B.Sc. Computer Science', 'Undergraduate', 'CPS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(15, 11, 'B.Sc. Physics with Electronics', 'Undergraduate', 'PHY', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(16, 11, 'Electronics and Computer Systems', 'Undergraduate', 'ECS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(17, 11, 'B.Sc. Electronics and Communication', 'Undergraduate', 'ECT', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(18, 10, 'B.Sc. Statistics and Bioinformatics', 'Undergraduate', 'STB', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(19, 10, 'B.Sc. Mathematics', 'Undergraduate', 'MTH', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(20, 12, 'B.Sc. Accounting', 'Undergraduate', 'ACC', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(21, 12, 'B.Sc. Banking and Finance', 'Undergraduate', 'BFN', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(22, 13, 'B.Sc. Business Administration', 'Undergraduate', 'BUA', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(23, 14, 'B.Sc. Economics', 'Undergraduate', 'ECO', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(24, 15, 'B.Sc. Mass Communication', 'Undergraduate', 'MAC', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(25, 16, 'B.Sc. Political Science', 'Undergraduate', 'POL', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(26, 17, 'B.Sc. Public Administration', 'Undergraduate', 'PAD', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(27, 18, 'B.Sc. Sociology', 'Undergraduate', 'SOS', 'LOREM', '4', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(28, 19, 'B.Sc. Common and Islamic Law', 'Undergraduate', 'CIL', 'LOREM', '5', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52'),
(30, 20, 'B.Sc. Common Law', 'Undergraduate', 'COL', 'LOREM', '5', 'Olevel', 1, '2025-06-30 16:16:52', '2025-06-30 16:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programmes_programme_name_unique` (`programme_name`),
  ADD UNIQUE KEY `programmes_programme_code_unique` (`programme_code`),
  ADD KEY `programmes_department_id_foreign` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
