-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 05:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preventive`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `pc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_settings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mr_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initial_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deploy_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) NOT NULL,
  `active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `department_id`, `pc_name`, `location`, `ip_add`, `ip_settings`, `mr_to`, `initial_cost`, `deploy_date`, `serial`, `year`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'ACCOUNTING-CLEO', 'Admin Building', 'Obtain', 'DHCP', NULL, NULL, NULL, '1', 2022, 1, '2021-12-01 20:54:00', '2021-12-01 20:54:00'),
(2, 1, 'ACCNTG-JOY-PC', 'ADMIN', 'OBTAIN', 'DHCP', 'JOY', NULL, NULL, NULL, 2021, 1, '2021-12-27 20:24:35', '2021-12-27 20:24:35'),
(3, 2, 'ADMIN-OFFICE-LAPTOP', 'ADMIN OFFICE', 'OBTAIN', 'DHCP', 'ADMIN', 'N/A', 'N/A', 'N34IJH34H6HB', 2022, 1, '2022-01-20 08:44:34', '2022-01-20 08:44:34'),
(4, 4, 'CASHIER-ADMIN PC', 'CASHIER ADMIN', 'OBTAIN', 'DHCP', 'LITO', NULL, 'N/A', 'SDF86987SS', 2022, 1, '2022-01-20 08:51:04', '2022-01-20 08:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'ACCOUNTING', '2021-11-30 16:41:10', '2021-11-30 16:41:10'),
(2, 'ADMIN OFFICE', '2021-11-30 16:41:22', '2021-11-30 16:41:22'),
(3, 'BUDGET OFFICE', '2021-11-30 16:41:30', '2021-11-30 16:41:30'),
(4, 'CASHIER ADMIN', '2021-11-30 16:54:30', '2021-11-30 16:54:30'),
(5, 'CHIEF OF CLINICS', '2021-11-30 16:54:42', '2021-11-30 16:54:42'),
(6, 'FINANCE OFFICE', '2021-11-30 16:54:49', '2021-11-30 16:54:49'),
(7, 'IASO', '2021-11-30 16:55:01', '2021-11-30 16:55:01'),
(8, 'SECURITY OFFICE', '2021-11-30 16:55:09', '2021-11-30 16:55:09'),
(9, 'RBC', '2021-11-30 16:55:18', '2021-11-30 16:55:18'),
(10, 'IM OFFICE (TRAINING ROOM 7)', '2021-11-30 16:55:27', '2021-11-30 16:55:27'),
(11, 'OB OFFICE (TRAINING ROOM 5)', '2021-11-30 16:55:40', '2021-11-30 16:55:40'),
(12, 'LEGAL OFFICE (TRAINING ROOM 6)', '2021-11-30 16:55:50', '2021-11-30 16:55:50'),
(13, 'TRAINING OFFICE', '2021-11-30 16:56:04', '2021-11-30 16:56:04'),
(14, 'PETRU', '2021-11-30 16:56:11', '2021-11-30 16:56:11'),
(15, 'PERSONNEL', '2021-11-30 16:56:18', '2021-11-30 16:56:18'),
(16, 'PROCUREMENT', '2021-11-30 16:56:24', '2021-11-30 16:56:24'),
(17, 'PROPERTY', '2021-11-30 16:56:28', '2021-11-30 16:56:28'),
(18, 'PROPERTY STOCK ROOM', '2021-11-30 16:56:34', '2021-11-30 16:56:34'),
(19, 'MEDICAL RECORD', '2021-11-30 16:56:40', '2021-11-30 16:56:40'),
(20, 'CECAP', '2021-11-30 16:56:46', '2021-11-30 16:56:46'),
(21, 'DIETARY', '2021-11-30 16:56:54', '2021-11-30 16:56:54'),
(22, 'ENGINEERING', '2021-11-30 16:57:03', '2021-11-30 16:57:03'),
(23, 'HOUSEKEEPING', '2021-11-30 16:57:09', '2021-11-30 16:57:09'),
(24, 'LAUNDRY', '2021-11-30 16:57:14', '2021-11-30 16:57:14'),
(25, 'PHIC HOUSEKEEPING', '2021-11-30 16:57:19', '2021-11-30 16:57:19'),
(26, 'DOH BOTICA', '2021-11-30 16:57:25', '2021-11-30 16:57:25'),
(27, 'CATHLAB', '2021-11-30 16:57:30', '2021-11-30 16:57:30'),
(28, 'IHOMS', '2021-11-30 16:57:35', '2021-11-30 16:57:35'),
(29, 'WARD 12', '2021-11-30 16:57:40', '2021-11-30 16:57:40'),
(30, 'WARD 12 OPD-CBS', '2021-11-30 16:57:55', '2021-11-30 16:57:55'),
(31, 'LABORATORY', '2021-11-30 16:58:00', '2021-11-30 16:58:00'),
(32, 'PHIC MAIN OFFICE', '2021-11-30 16:58:06', '2021-11-30 16:58:06'),
(33, 'CCU', '2021-11-30 16:58:11', '2021-11-30 16:58:11'),
(34, 'CCU EXTENSION', '2021-11-30 16:58:16', '2021-11-30 16:58:16'),
(35, 'ICU', '2021-11-30 16:58:21', '2021-11-30 16:58:21'),
(36, 'EMERGENCY COMPLEX', '2021-11-30 16:58:27', '2021-11-30 16:58:27'),
(37, 'ORTHOPEDIC OFFICE (ER GROUNDFLOOR)', '2021-11-30 16:58:34', '2021-11-30 16:58:34'),
(38, 'HOLDING AREA (ER)', '2021-11-30 16:58:41', '2021-11-30 16:58:41'),
(39, 'PINK CENTER', '2021-11-30 16:58:46', '2021-11-30 16:58:46'),
(40, 'REHAB', '2021-11-30 16:58:51', '2021-11-30 16:58:51'),
(41, 'RTU', '2021-11-30 16:58:56', '2021-11-30 16:58:56'),
(42, 'MANAGEMENT SYSTEM UNIT', '2021-11-30 17:14:42', '2021-11-30 17:14:42'),
(43, 'EMED OFFICE', '2021-11-30 17:14:49', '2021-11-30 17:14:49'),
(44, 'SURGICAL ONCOLOGY', '2021-11-30 17:14:54', '2021-11-30 17:14:54'),
(45, 'ENT OFFICE', '2021-11-30 17:14:59', '2021-11-30 17:14:59'),
(46, 'ETHICS OFFICE', '2021-11-30 17:15:04', '2021-11-30 17:15:04'),
(47, 'MEDICAL RECORD SATTELITE', '2021-11-30 17:15:09', '2021-11-30 17:15:09'),
(48, 'MEDICAL SOCIAL WORKER', '2021-11-30 17:15:15', '2021-11-30 17:15:15'),
(49, 'BILLING', '2021-11-30 17:15:21', '2021-11-30 17:15:21'),
(50, 'CENTRAL STERILE SUPPLY', '2021-11-30 17:15:28', '2021-11-30 17:15:28'),
(51, 'MALASAKIT', '2021-11-30 17:15:34', '2021-11-30 17:15:34'),
(52, 'CASHIER MAIN BUILDING', '2021-11-30 17:15:54', '2021-11-30 17:15:54'),
(53, 'PHILHEALTH WARD', '2021-11-30 17:15:59', '2021-11-30 17:15:59'),
(54, 'WARD 9', '2021-11-30 17:16:06', '2021-11-30 17:16:06'),
(55, 'ND GROUND FLOOR', '2021-11-30 17:16:12', '2021-11-30 17:16:12'),
(56, 'ND 2ND FLOOR', '2021-11-30 17:16:16', '2021-11-30 17:16:16'),
(57, 'ND 3RD FLOOR', '2021-11-30 17:16:21', '2021-11-30 17:16:21'),
(58, 'ND 4TH FLOOR', '2021-11-30 17:16:26', '2021-11-30 17:16:26'),
(59, 'ND EXTENSION', '2021-11-30 17:16:32', '2021-11-30 17:16:32'),
(60, 'RADIOLOGY', '2021-11-30 17:16:38', '2021-11-30 17:16:38'),
(61, 'LABOR ROOM', '2021-11-30 17:16:44', '2021-11-30 17:16:44'),
(62, 'OB-OR', '2021-11-30 17:16:49', '2021-11-30 17:16:49'),
(63, 'NEWBORN', '2021-11-30 17:16:54', '2021-11-30 17:16:54'),
(64, 'NICU', '2021-11-30 17:17:00', '2021-11-30 17:17:00'),
(65, 'NICU ILI', '2021-11-30 17:17:04', '2021-11-30 17:17:04'),
(66, 'RENAL', '2021-11-30 17:17:09', '2021-11-30 17:17:09'),
(67, 'SHOCKWAVE', '2021-11-30 17:17:14', '2021-11-30 17:17:14'),
(68, 'UROLOGY OFFICE', '2021-11-30 17:17:19', '2021-11-30 17:17:19'),
(69, 'WARD 10 ADULT', '2021-11-30 17:17:24', '2021-11-30 17:17:24'),
(70, 'WARD 10 PEDIA', '2021-11-30 17:17:28', '2021-11-30 17:17:28'),
(71, 'EREID UNIT', '2021-11-30 17:17:33', '2021-11-30 17:17:33'),
(72, 'ADMITTING LRU', '2021-11-30 17:17:39', '2021-11-30 17:17:39'),
(73, 'BILLING LRU', '2021-11-30 17:17:45', '2021-11-30 17:17:45'),
(74, 'MSW LRU', '2021-11-30 17:17:57', '2021-11-30 17:17:57'),
(75, 'LABOR ROOM EXTENSION', '2021-11-30 17:18:05', '2021-11-30 17:18:05'),
(76, 'WARD 7 GROUND FLOOR', '2021-11-30 17:18:10', '2021-11-30 17:18:10'),
(77, 'WARD 7 2ND FLOOR', '2021-11-30 17:18:16', '2021-11-30 17:18:16'),
(78, 'WARD 7 3RD FLOOR', '2021-11-30 17:18:22', '2021-11-30 17:18:22'),
(79, 'PEDIA OFFICE', '2021-11-30 17:18:29', '2021-11-30 17:18:29'),
(80, 'WARD 1 HRU', '2021-11-30 17:18:34', '2021-11-30 17:18:34'),
(81, 'WARD 1 LRU', '2021-11-30 17:18:38', '2021-11-30 17:18:38'),
(82, 'WARD 2', '2021-11-30 17:18:42', '2021-11-30 17:18:42'),
(83, 'PHIC ANNEX B', '2021-11-30 17:18:47', '2021-11-30 17:18:47'),
(84, 'ICC', '2021-11-30 17:18:58', '2021-11-30 17:18:58'),
(85, 'KAAMBAG', '2021-11-30 17:19:02', '2021-11-30 17:19:02'),
(86, 'KMC UNIT', '2021-11-30 17:19:12', '2021-11-30 17:19:12'),
(87, 'SP GROUND', '2021-11-30 17:19:18', '2021-11-30 17:19:18'),
(88, 'SP 2ND FLOOR', '2021-11-30 17:19:23', '2021-11-30 17:19:23'),
(89, 'SP 3RD FLOOR', '2021-11-30 17:19:27', '2021-11-30 17:19:27'),
(90, 'GENERAL SURGERY LIBRARY', '2021-11-30 17:19:33', '2021-11-30 17:19:33'),
(91, 'ANESTESIA OFFICE', '2021-11-30 17:19:38', '2021-11-30 17:19:38'),
(92, 'OPERATING ROOM', '2021-11-30 17:19:43', '2021-11-30 17:19:43'),
(93, 'OR CUSTODIAN', '2021-11-30 17:19:47', '2021-11-30 17:19:47'),
(94, 'PACU 1ST FLOOR (OR)', '2021-11-30 17:19:54', '2021-11-30 17:19:54'),
(95, 'PACU 2ND FLOOR (OR)', '2021-11-30 17:19:58', '2021-11-30 17:19:58'),
(96, 'CHIEF OF HOSPITAL', '2021-11-30 17:20:10', '2021-11-30 17:20:10'),
(97, 'CHIEF OF NURSE', '2021-11-30 17:20:27', '2021-11-30 17:20:27'),
(98, 'INFORMATION', '2021-11-30 17:20:32', '2021-11-30 17:20:32'),
(99, 'OSM', '2021-11-30 17:20:37', '2021-11-30 17:20:37'),
(100, 'LEGAL', '2021-11-30 17:20:43', '2021-11-30 17:20:43'),
(101, 'ADMITTING', '2021-11-30 17:20:48', '2021-11-30 17:20:48'),
(102, 'PHARMACY ER', '2021-11-30 17:20:52', '2021-11-30 17:20:52'),
(103, 'PHARMACY MAIN', '2021-11-30 17:20:58', '2021-11-30 17:20:58'),
(104, 'PHARMACY OR', '2021-11-30 17:21:09', '2021-11-30 17:21:09'),
(105, 'NEURO SURGICAL OFFICE', '2021-11-30 17:21:15', '2021-11-30 17:21:15'),
(106, 'WARD 11', '2021-11-30 17:21:20', '2021-11-30 17:21:20'),
(107, 'PHIC ANNEX A', '2021-11-30 17:21:31', '2021-11-30 17:21:31'),
(108, 'ANIMAL BITE', '2021-11-30 17:21:36', '2021-11-30 17:21:36'),
(109, 'CASHIER OPD', '2021-11-30 17:21:42', '2021-11-30 17:21:42'),
(110, 'CHILD SURVIVAL', '2021-11-30 17:21:46', '2021-11-30 17:21:46'),
(111, 'ECG / EEG', '2021-11-30 17:21:51', '2021-11-30 17:21:51'),
(112, 'ENDOSCOPY', '2021-11-30 17:21:56', '2021-11-30 17:21:56'),
(113, 'EYE CENTER', '2021-11-30 17:22:01', '2021-11-30 17:22:01'),
(114, 'EYE CENTER OR', '2021-11-30 17:22:05', '2021-11-30 17:22:05'),
(115, 'FAMED OFFICE', '2021-11-30 17:22:10', '2021-11-30 17:22:10'),
(116, 'LABORATORY OPD', '2021-11-30 17:22:16', '2021-11-30 17:22:16'),
(117, 'PHILHEALTH OPD', '2021-11-30 17:22:21', '2021-11-30 17:22:21'),
(118, 'MEDICAL RECORD OPD', '2021-11-30 17:22:25', '2021-11-30 17:22:25'),
(119, 'OPTHA OFFICE', '2021-11-30 17:22:30', '2021-11-30 17:22:30'),
(120, 'PHU', '2021-11-30 17:22:35', '2021-11-30 17:22:35'),
(121, 'STATION 1', '2021-11-30 17:22:43', '2021-11-30 17:22:43'),
(122, 'STATION 2', '2021-11-30 17:22:48', '2021-11-30 17:22:48'),
(123, 'STATION 3', '2021-11-30 17:22:54', '2021-11-30 17:22:54'),
(124, 'STATION 4', '2021-11-30 17:23:00', '2021-11-30 17:23:00'),
(125, 'WELLNESS', '2021-12-29 19:36:34', '2021-12-29 19:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `department_id`, `type`, `brand_name`, `device_name`, `ip_address`, `port`, `source`, `serial`, `location`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Switch', '3-COM SWITCH', 'ADMIN 3-COM', '172.0.0.1', '24', 'FINANCE OFFICE', 'XC8V6XC986V9', 'ACCOUNTING', 1, '2022-01-20 08:46:55', '2022-01-20 08:46:55'),
(2, 2, 'Router', 'PLDT-ROUTER', 'PLDTWIFIDF9G87', '192.168.1.1', '4', 'PLDT MAIN', 'SDF7S6G76D', 'ADMIN OFFICE', 1, '2022-01-20 08:48:50', '2022-01-20 08:48:50');

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
-- Table structure for table `firsts`
--

CREATE TABLE `firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `mouse_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kb_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitor_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avrups_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bargun_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sysboot_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avirus_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msoffice_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mms_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emr_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `queui_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weblis_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firsts`
--

INSERT INTO `firsts` (`id`, `computer_id`, `mouse_stats`, `kb_stats`, `monitor_stats`, `cpu_stats`, `avrups_stats`, `printer_stats`, `bargun_stats`, `sysboot_stats`, `os_stats`, `avirus_stats`, `msoffice_stats`, `his_stats`, `mms_stats`, `emr_stats`, `queui_stats`, `weblis_stats`, `created_at`, `updated_at`) VALUES
(1, 1, 'OK', 'OK', 'OK', 'OK', NULL, 'OK', NULL, NULL, 'OK', NULL, 'OK', 'OK', 'OK', NULL, NULL, NULL, '2021-12-01 20:55:21', '2021-12-01 20:59:25'),
(2, 2, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', NULL, NULL, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '2021-12-28 16:00:00', '2021-12-29 18:21:22'),
(3, 3, 'OK', 'OK', 'OK', 'OK', NULL, 'OK', NULL, NULL, 'OK', 'OK', 'OK', NULL, NULL, NULL, NULL, NULL, '2022-01-20 08:46:02', '2022-01-20 08:46:09'),
(4, 4, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', NULL, NULL, 'OK', 'OK', 'OK', NULL, NULL, NULL, NULL, NULL, '2022-01-20 08:52:32', '2022-01-20 08:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `forths`
--

CREATE TABLE `forths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `mouse_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kb_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitor_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avrups_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bargun_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sysboot_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avirus_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msoffice_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mms_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emr_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `queui_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weblis_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forths`
--

INSERT INTO `forths` (`id`, `computer_id`, `mouse_stats`, `kb_stats`, `monitor_stats`, `cpu_stats`, `avrups_stats`, `printer_stats`, `bargun_stats`, `sysboot_stats`, `os_stats`, `avirus_stats`, `msoffice_stats`, `his_stats`, `mms_stats`, `emr_stats`, `queui_stats`, `weblis_stats`, `created_at`, `updated_at`) VALUES
(1, 2, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', NULL, NULL, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '2021-12-27 16:00:00', '2021-12-29 18:21:55');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_19_080907_create_departments_table', 1),
(5, '2021_07_19_090302_create_computers_table', 1),
(6, '2021_07_21_044521_create_posts_table', 1),
(7, '2021_07_21_072737_create_remarks_table', 1),
(8, '2021_07_22_171526_create_firsts_table', 1),
(9, '2021_07_24_082629_create_seconds_table', 1),
(10, '2021_07_24_121034_create_thirds_table', 1),
(11, '2021_07_24_121133_create_forths_table', 1),
(12, '2021_09_22_073307_create_monthlyschedules_table', 1),
(13, '2021_09_22_073330_create_weeklyschedules_table', 1),
(14, '2021_11_09_090416_create_devices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monthlyschedules`
--

CREATE TABLE `monthlyschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthlyschedules`
--

INSERT INTO `monthlyschedules` (`id`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 'january', '2022', '2021-11-30 16:53:08', '2021-11-30 16:53:08');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` int(10) UNSIGNED NOT NULL,
  `mouse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kboard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avr_ups` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bargun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sysboot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antivirus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `queui_sys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weblis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `computer_id`, `mouse`, `kboard`, `monitor`, `cpu`, `avr_ups`, `printer`, `bargun`, `sysboot`, `os`, `antivirus`, `ms_office`, `his`, `mms`, `emr`, `queui_sys`, `weblis`, `created_at`, `updated_at`) VALUES
(1, 1, 'HP', 'HP', 'HP', 'HP', 'N/A', 'Brother DCP-L2540W', 'N/A', 'N/A', 'WINDOWS 10', NULL, '2013', 'OK', 'OK', 'N/A', 'N/A', 'N/A', '2021-12-01 20:54:00', '2021-12-01 20:59:08'),
(2, 2, 'A4TECH', 'GENIUS', 'HP', 'HP', 'AVS', 'BROTHER DCP-L2540DW', 'N/A', 'N/A', 'WINDOWS 8.1', 'WINDOWS DEFENDER', '2007', 'OK', 'OK', 'OK', 'OK', 'OK', '2021-12-27 20:24:35', '2021-12-29 18:08:31'),
(3, 3, 'GENIUS', 'GENIUS', 'HP', 'LAPTOP HP', 'N/A', 'BROTHER DCP-L2540DW', 'N/A', NULL, 'WINDOWS 8', 'WINDOWS DEFENDER', '2016', NULL, NULL, NULL, NULL, NULL, '2022-01-20 08:44:35', '2022-01-20 08:45:56'),
(4, 4, 'A4-TECH', 'A4-TECH', 'ACER', 'LENOVO', 'APS', 'BROTHER DCP-L2540DW', 'N/A', NULL, 'WINDOWS 7', 'SMADAV', '2007', NULL, NULL, NULL, NULL, NULL, '2022-01-20 08:51:04', '2022-01-20 08:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` int(10) UNSIGNED NOT NULL,
  `date_findings` date DEFAULT NULL,
  `findings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seconds`
--

CREATE TABLE `seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `mouse_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kb_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitor_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avrups_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bargun_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sysboot_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avirus_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msoffice_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mms_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emr_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `queui_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weblis_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seconds`
--

INSERT INTO `seconds` (`id`, `computer_id`, `mouse_stats`, `kb_stats`, `monitor_stats`, `cpu_stats`, `avrups_stats`, `printer_stats`, `bargun_stats`, `sysboot_stats`, `os_stats`, `avirus_stats`, `msoffice_stats`, `his_stats`, `mms_stats`, `emr_stats`, `queui_stats`, `weblis_stats`, `created_at`, `updated_at`) VALUES
(1, 2, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', NULL, NULL, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '2021-12-28 16:00:00', '2021-12-29 18:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `thirds`
--

CREATE TABLE `thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `mouse_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kb_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitor_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avrups_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bargun_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sysboot_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avirus_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msoffice_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mms_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emr_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `queui_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weblis_stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thirds`
--

INSERT INTO `thirds` (`id`, `computer_id`, `mouse_stats`, `kb_stats`, `monitor_stats`, `cpu_stats`, `avrups_stats`, `printer_stats`, `bargun_stats`, `sysboot_stats`, `os_stats`, `avirus_stats`, `msoffice_stats`, `his_stats`, `mms_stats`, `emr_stats`, `queui_stats`, `weblis_stats`, `created_at`, `updated_at`) VALUES
(1, 2, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', NULL, NULL, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '2021-12-28 16:00:00', '2021-12-29 18:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$6FJzVph0ljDJbiv9bFn9Mex9BAO.6OJueWemRZIqfz9YyRa1T3hNO', NULL, '2021-12-27 19:41:26', '2021-12-27 19:41:26'),
(2, 'guest', '$2y$10$L.FxYKV6of8FqvFaAqvThe3l0FV.do.OwIYzX7Dy1LIKLp0Udl24a', NULL, '2021-11-30 16:26:59', '2021-11-30 16:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `weeklyschedules`
--

CREATE TABLE `weeklyschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monthlyschedule_id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekly` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partial` int(11) DEFAULT NULL,
  `done` int(11) DEFAULT NULL,
  `actual` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weeklyschedules`
--

INSERT INTO `weeklyschedules` (`id`, `monthlyschedule_id`, `department_name`, `weekly`, `partial`, `done`, `actual`, `created_at`, `updated_at`) VALUES
(1, 1, 'Accounting', '1week', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'ADMIN OFFICE', '1week', NULL, NULL, NULL, NULL, NULL),
(3, 1, 'BUDGET OFFICE', '1week', NULL, NULL, NULL, NULL, NULL),
(4, 1, 'CASHIER ADMIN', '1week', NULL, NULL, NULL, NULL, NULL),
(5, 1, 'CHIEF OF CLINICS', '1week', NULL, NULL, NULL, NULL, NULL),
(6, 1, 'FINANCE OFFICE', '1week', NULL, NULL, NULL, NULL, NULL),
(7, 1, 'IASO', '1week', NULL, NULL, NULL, NULL, NULL),
(8, 1, 'SECURITY OFFICE', '1week', NULL, NULL, NULL, NULL, NULL),
(9, 1, 'RBC', '1week', NULL, NULL, NULL, NULL, NULL),
(10, 1, 'IM OFFICE (TRAINING ROOM 7)', '1week', NULL, NULL, NULL, NULL, NULL),
(11, 1, 'OB OFFICE (TRAINING ROOM 5)', '2week', NULL, NULL, NULL, NULL, NULL),
(12, 1, 'LEGAL OFFICE (TRAINING ROOM 6)', '2week', NULL, NULL, NULL, NULL, NULL),
(13, 1, 'TRAINING', '2week', NULL, NULL, NULL, NULL, NULL),
(14, 1, 'PETRU', '2week', NULL, NULL, NULL, NULL, NULL),
(15, 1, 'PERSONNEL', '2week', NULL, NULL, NULL, NULL, NULL),
(16, 1, 'PROCUREMENT', '2week', NULL, NULL, NULL, NULL, NULL),
(17, 1, 'PROPERTY', '2week', NULL, NULL, NULL, NULL, NULL),
(18, 1, 'PROPERTY STOCKROOM', '2week', NULL, NULL, NULL, NULL, NULL),
(19, 1, 'MEDICAL RECORD', '2week', NULL, NULL, NULL, NULL, NULL),
(20, 1, 'CECAP', '2week', NULL, NULL, NULL, NULL, NULL),
(21, 1, 'DIETARY', '3week', NULL, NULL, NULL, NULL, NULL),
(22, 1, 'ENGINEERING', '3week', NULL, NULL, NULL, NULL, NULL),
(23, 1, 'HOUSEKEEPING', '3week', NULL, NULL, NULL, NULL, NULL),
(24, 1, 'LAUNDRY', '3week', NULL, NULL, NULL, NULL, NULL),
(25, 1, 'PHIC HOUSEKEEPING', '3week', NULL, NULL, NULL, NULL, NULL),
(26, 1, 'DOH BOTIKA', '3week', NULL, NULL, NULL, NULL, NULL),
(27, 1, 'CATHLAB', '3week', NULL, NULL, NULL, NULL, NULL),
(28, 1, 'IHOMS', '3week', NULL, NULL, NULL, NULL, NULL),
(29, 1, 'WARD 12', '3week', NULL, NULL, NULL, NULL, NULL),
(30, 1, 'WARD 12 OPD-CBS', '3week', NULL, NULL, NULL, NULL, NULL),
(31, 1, 'LABORATORY', '4week', NULL, NULL, NULL, NULL, NULL),
(32, 1, 'PHIC MAIN OFFICE', '4week', NULL, NULL, NULL, NULL, NULL),
(33, 1, 'CCU', '4week', NULL, NULL, NULL, NULL, NULL),
(34, 1, 'CCU EXTENSION', '4week', NULL, NULL, NULL, NULL, NULL),
(35, 1, 'ICU', '4week', NULL, NULL, NULL, NULL, NULL),
(36, 1, 'EMERGENCY COMPLEX', '4week', NULL, NULL, NULL, NULL, NULL),
(37, 1, 'ORTHOPEDICS OFFICE (ER DOWN)', '4week', NULL, NULL, NULL, NULL, NULL),
(38, 1, 'HOLDING AREA ER', '4week', NULL, NULL, NULL, NULL, NULL),
(39, 1, 'PINK CENTER', '4week', NULL, NULL, NULL, NULL, NULL),
(40, 1, 'REHAB', '4week', NULL, NULL, NULL, NULL, NULL),
(41, 1, 'RTU', '4week', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firsts`
--
ALTER TABLE `firsts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firsts_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `forths`
--
ALTER TABLE `forths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forths_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthlyschedules`
--
ALTER TABLE `monthlyschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seconds`
--
ALTER TABLE `seconds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seconds_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `thirds`
--
ALTER TABLE `thirds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thirds_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeklyschedules`
--
ALTER TABLE `weeklyschedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `weeklyschedules_monthlyschedule_id_foreign` (`monthlyschedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firsts`
--
ALTER TABLE `firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forths`
--
ALTER TABLE `forths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `monthlyschedules`
--
ALTER TABLE `monthlyschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seconds`
--
ALTER TABLE `seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thirds`
--
ALTER TABLE `thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weeklyschedules`
--
ALTER TABLE `weeklyschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `firsts`
--
ALTER TABLE `firsts`
  ADD CONSTRAINT `firsts_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`);

--
-- Constraints for table `forths`
--
ALTER TABLE `forths`
  ADD CONSTRAINT `forths_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`);

--
-- Constraints for table `seconds`
--
ALTER TABLE `seconds`
  ADD CONSTRAINT `seconds_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`);

--
-- Constraints for table `thirds`
--
ALTER TABLE `thirds`
  ADD CONSTRAINT `thirds_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`);

--
-- Constraints for table `weeklyschedules`
--
ALTER TABLE `weeklyschedules`
  ADD CONSTRAINT `weeklyschedules_monthlyschedule_id_foreign` FOREIGN KEY (`monthlyschedule_id`) REFERENCES `monthlyschedules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
