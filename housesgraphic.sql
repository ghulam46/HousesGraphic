-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 05:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housesgraphic`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'dd5c730059b8ba8db85f5c61de2ba6c9', '2022-06-28 09:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 5),
(2, 6),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@mail.com', 1, '2022-06-28 02:16:23', 1),
(2, '::1', 'admin@mail.com', NULL, '2022-06-28 02:22:23', 0),
(3, '::1', 'admin@mail.com', NULL, '2022-06-28 02:22:35', 0),
(4, '::1', 'admin@mail.com', 1, '2022-06-28 02:24:49', 1),
(5, '::1', 'admin@mail.com', 1, '2022-06-28 02:25:41', 1),
(6, '::1', 'admin@mail.com', 1, '2022-06-28 02:26:49', 1),
(7, '::1', 'admin@mail.com', 1, '2022-06-28 02:41:06', 1),
(8, '::1', 'admin@mail.com', 1, '2022-06-28 02:41:27', 1),
(9, '::1', 'admin@mail.com', 1, '2022-06-28 02:41:39', 1),
(10, '::1', 'admin@mail.com', 1, '2022-06-28 02:54:42', 1),
(11, '::1', 'admin@mail.com', 1, '2022-06-28 07:44:07', 1),
(12, '::1', 'admin@mail.com', 1, '2022-06-28 08:07:24', 1),
(13, '::1', 'admin@mail.com', 1, '2022-06-28 08:07:32', 1),
(14, '::1', 'admin', NULL, '2022-06-28 08:24:59', 0),
(15, '::1', 'admin@mail.com', 2, '2022-06-28 08:27:14', 1),
(16, '::1', 'admin@mail.com', 2, '2022-06-28 08:27:27', 1),
(17, '::1', 'admin@mail.com', 3, '2022-06-28 08:28:43', 1),
(18, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 09:00:21', 1),
(19, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 09:09:49', 1),
(20, '::1', 'ghulam', NULL, '2022-06-28 09:10:09', 0),
(21, '::1', 'ghulam', NULL, '2022-06-28 09:10:20', 0),
(22, '::1', 'admin@mail.com', 3, '2022-06-28 09:11:04', 1),
(23, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 09:13:16', 1),
(24, '::1', 'admin@mail.com', 3, '2022-06-28 09:14:18', 1),
(25, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 09:17:57', 1),
(26, '::1', 'admin@mail.com', 3, '2022-06-28 09:20:32', 1),
(27, '::1', 'admin@mail.com', 3, '2022-06-28 09:26:06', 1),
(28, '::1', 'admin', NULL, '2022-06-28 09:33:09', 0),
(29, '::1', 'admin@mail.com', 3, '2022-06-28 09:33:25', 1),
(30, '::1', 'admin@mail.com', 3, '2022-06-28 09:40:48', 1),
(31, '::1', 'admin@mail.com', 3, '2022-06-28 09:41:06', 1),
(32, '::1', 'admin@mail.com', 3, '2022-06-28 09:44:49', 1),
(33, '::1', 'admin', NULL, '2022-06-28 21:46:33', 0),
(34, '::1', 'admin@mail.com', 3, '2022-06-28 21:46:39', 1),
(35, '::1', 'admin@mail.com', 3, '2022-06-28 21:49:37', 1),
(36, '::1', 'admin@mail.com', 3, '2022-06-28 21:50:37', 1),
(37, '::1', 'admin@mail.com', 3, '2022-06-28 21:58:19', 1),
(38, '::1', 'admin@mail.com', 3, '2022-06-28 22:00:11', 1),
(39, '::1', 'admin@mail.com', 3, '2022-06-28 22:01:05', 1),
(40, '::1', 'admin', NULL, '2022-06-28 22:02:20', 0),
(41, '::1', 'admin@mail.com', 3, '2022-06-28 22:02:26', 1),
(42, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 22:03:01', 1),
(43, '::1', 'admin@mail.com', 3, '2022-06-28 22:03:20', 1),
(44, '::1', 'example@gmail.com', 5, '2022-06-28 23:12:10', 1),
(45, '::1', 'admin@mail.com', 3, '2022-06-28 23:25:04', 1),
(46, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 23:25:24', 1),
(47, '::1', 'admin@mail.com', 3, '2022-06-28 23:31:30', 1),
(48, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-28 23:33:36', 1),
(49, '::1', 'admin@mail.com', 3, '2022-06-28 23:34:09', 1),
(50, '::1', 'admin@mail.com', 3, '2022-06-28 23:36:14', 1),
(51, '::1', 'admin@mail.com', 3, '2022-06-28 23:37:59', 1),
(52, '::1', 'example@gmail.com', 5, '2022-06-28 23:40:33', 1),
(53, '::1', 'example@gmail.com', 5, '2022-06-28 23:40:58', 1),
(54, '::1', 'admin@mail.com', 3, '2022-06-29 02:20:55', 1),
(55, '::1', 'admin@mail.com', 3, '2022-06-29 02:23:36', 1),
(56, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 02:24:08', 1),
(57, '::1', 'admin@mail.com', 3, '2022-06-29 02:32:54', 1),
(58, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 07:52:43', 1),
(59, '::1', 'admin@mail.com', 3, '2022-06-29 07:55:06', 1),
(60, '::1', 'ammar@gmail.com', 6, '2022-06-29 08:12:52', 1),
(61, '::1', 'ammar@gmail.com', 6, '2022-06-29 08:21:57', 1),
(62, '::1', 'admin@mail.com', 3, '2022-06-29 08:22:47', 1),
(63, '::1', 'ammar@gmail.com', 6, '2022-06-29 08:26:08', 1),
(64, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 09:15:20', 1),
(65, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 09:16:08', 1),
(66, '::1', 'admin@mail.com', 3, '2022-06-29 09:17:12', 1),
(67, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:18:04', 1),
(68, '::1', 'admin@mail.com', 3, '2022-06-29 09:24:42', 1),
(69, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:24:59', 1),
(70, '::1', 'admin', NULL, '2022-06-29 09:26:00', 0),
(71, '::1', 'admin', NULL, '2022-06-29 09:26:08', 0),
(72, '::1', 'admin@mail.com', 3, '2022-06-29 09:26:20', 1),
(73, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 09:29:34', 1),
(74, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:29:49', 1),
(75, '::1', 'admin@mail.com', 3, '2022-06-29 09:30:04', 1),
(76, '::1', 'admin', NULL, '2022-06-29 09:31:01', 0),
(77, '::1', 'admin@mail.com', 3, '2022-06-29 09:31:07', 1),
(78, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:36:53', 1),
(79, '::1', 'admin', NULL, '2022-06-29 09:37:20', 0),
(80, '::1', 'admin', NULL, '2022-06-29 09:37:28', 0),
(81, '::1', 'admin@mail.com', 3, '2022-06-29 09:37:38', 1),
(82, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:40:03', 1),
(83, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:42:37', 1),
(84, '::1', 'admin@mail.com', 3, '2022-06-29 09:43:54', 1),
(85, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 09:51:39', 1),
(86, '::1', '18102194@ittelkom-pwt.ac.id', 4, '2022-06-29 09:52:46', 1),
(87, '::1', 'example', NULL, '2022-06-29 09:54:22', 0),
(88, '::1', 'example@gmail.com', 5, '2022-06-29 09:54:30', 1),
(89, '::1', 'admin@mail.com', 3, '2022-06-29 09:58:05', 1),
(90, '::1', 'admin@mail.com', 3, '2022-06-29 09:58:50', 1),
(91, '::1', 'ammar@gmail.com', 6, '2022-06-29 09:59:45', 1),
(92, '::1', 'ghulam', NULL, '2022-06-29 22:38:04', 0),
(93, '::1', 'ghulam', NULL, '2022-06-29 22:38:13', 0),
(94, '::1', 'ghulam', NULL, '2022-06-29 22:38:41', 0),
(95, '::1', 'ammar@gmail.com', 6, '2022-06-29 22:38:49', 1),
(96, '::1', 'ammar@gmail.com', 6, '2022-06-29 22:52:31', 1),
(97, '::1', 'admin@mail.com', 3, '2022-06-30 02:20:57', 1),
(98, '::1', 'ammar@gmail.com', 6, '2022-06-30 02:22:27', 1),
(99, '::1', 'ammar@gmail.com', 6, '2022-06-30 02:48:15', 1),
(100, '::1', 'ammar@gmail.com', 6, '2022-06-30 02:49:31', 1),
(101, '::1', 'ammar@gmail.com', 6, '2022-06-30 02:53:16', 1),
(102, '::1', 'ammar@gmail.com', 6, '2022-06-30 03:09:25', 1),
(103, '::1', 'admin@mail.com', 3, '2022-06-30 03:10:29', 1),
(104, '::1', 'ammar@gmail.com', 6, '2022-06-30 03:14:04', 1),
(105, '::1', 'admin@mail.com', 3, '2022-06-30 03:14:49', 1),
(106, '::1', 'ammar@gmail.com', 6, '2022-06-30 03:18:09', 1),
(107, '::1', 'admin@mail.com', 3, '2022-06-30 03:22:14', 1),
(108, '::1', 'ammar@gmail.com', 6, '2022-06-30 03:23:31', 1),
(109, '::1', 'admin@mail.com', 3, '2022-06-30 03:24:08', 1),
(110, '::1', 'ammar@gmail.com', 6, '2022-06-30 03:25:20', 1),
(111, '::1', 'admin@mail.com', 3, '2022-06-30 03:25:44', 1),
(112, '::1', 'ammar@gmail.com', 6, '2022-06-30 07:46:31', 1),
(113, '::1', 'admin@mail.com', 3, '2022-06-30 07:57:50', 1),
(114, '::1', 'ammar@gmail.com', 6, '2022-06-30 22:45:13', 1),
(115, '::1', 'ammar@gmail.com', 6, '2022-07-01 01:29:12', 1),
(116, '::1', 'ammar@gmail.com', 6, '2022-07-01 22:18:16', 1),
(117, '::1', 'admin@mail.com', 3, '2022-07-01 22:19:33', 1),
(118, '::1', 'ghulam', NULL, '2022-07-01 22:21:58', 0),
(119, '::1', 'ghulam', NULL, '2022-07-01 22:22:10', 0),
(120, '::1', 'ghulam', NULL, '2022-07-01 22:22:28', 0),
(121, '::1', 'example@gmail.com', 5, '2022-07-01 22:22:47', 1),
(122, '::1', 'example@gmail.com', 5, '2022-07-01 22:23:07', 1),
(123, '::1', 'ammar@gmail.com', 6, '2022-07-03 22:04:16', 1),
(124, '::1', 'ammar@gmail.com', 6, '2022-07-03 22:39:08', 1),
(125, '::1', 'ammar@gmail.com', 6, '2022-07-04 08:10:36', 1),
(126, '::1', 'ghulam', NULL, '2022-07-04 22:01:21', 0),
(127, '::1', 'ghulam', NULL, '2022-07-04 22:01:29', 0),
(128, '::1', 'ammar', NULL, '2022-07-04 22:01:56', 0),
(129, '::1', 'ammar@gmail.com', 6, '2022-07-04 22:02:11', 1),
(130, '::1', 'example', NULL, '2022-07-05 01:11:22', 0),
(131, '::1', 'example@gmail.com', 5, '2022-07-05 01:11:35', 1),
(132, '::1', 'admin@mail.com', 3, '2022-07-05 02:22:27', 1),
(133, '::1', 'admin@mail.com', 3, '2022-07-05 08:21:05', 1),
(134, '::1', 'ammar@gmail.com', 6, '2022-07-05 08:52:07', 1),
(135, '::1', 'ammar@gmail.com', 6, '2022-07-05 22:42:40', 1),
(136, '::1', 'ammar@gmail.com', 6, '2022-07-06 01:34:00', 1),
(137, '::1', 'ammar@gmail.com', 6, '2022-07-09 07:15:23', 1),
(138, '::1', 'ammar', NULL, '2022-07-10 02:12:31', 0),
(139, '::1', 'ammar@gmail.com', 6, '2022-07-10 02:12:38', 1),
(140, '::1', 'ammar@gmail.com', 6, '2022-07-11 01:20:13', 1),
(141, '::1', 'ammar@gmail.com', 6, '2022-07-11 07:54:02', 1),
(142, '::1', 'admin@mail.com', 3, '2022-07-11 08:15:31', 1),
(143, '::1', 'admin@mail.com', 3, '2022-07-12 08:15:18', 1),
(144, '::1', 'admin@mail.com', 3, '2022-07-12 08:24:54', 1),
(145, '::1', 'admin@mail.com', 3, '2022-07-12 08:31:10', 1),
(146, '::1', 'admin@mail.com', 3, '2022-07-12 08:33:16', 1),
(147, '::1', 'admin@mail.com', 3, '2022-07-12 08:34:02', 1),
(148, '::1', 'admin@mail.com', 3, '2022-07-12 08:36:12', 1),
(149, '::1', 'admin@mail.com', 3, '2022-07-12 21:37:49', 1),
(150, '::1', 'ammar@gmail.com', 6, '2022-07-12 21:38:36', 1),
(151, '::1', 'admin', NULL, '2022-07-13 09:06:17', 0),
(152, '::1', 'admin@mail.com', 3, '2022-07-13 09:06:28', 1),
(153, '::1', 'admin@mail.com', 3, '2022-07-14 01:25:27', 1),
(154, '::1', 'admin', NULL, '2022-07-14 01:40:25', 0),
(155, '::1', 'admin@mail.com', 3, '2022-07-14 01:40:30', 1),
(156, '::1', 'ammar', NULL, '2022-07-17 22:17:12', 0),
(157, '::1', 'ammar@gmail.com', 6, '2022-07-17 22:17:18', 1),
(158, '::1', 'admin@mail.com', 3, '2022-07-17 22:33:56', 1),
(159, '::1', 'ammar@gmail.com', 6, '2022-07-17 22:39:13', 1),
(160, '::1', 'ammar@gmail.com', 6, '2022-07-17 22:44:08', 1),
(161, '::1', 'ammar@gmail.com', 6, '2022-07-17 22:46:58', 1),
(162, '::1', 'admin@mail.com', 3, '2022-07-17 22:51:12', 1),
(163, '::1', 'admin@mail.com', 3, '2022-07-17 22:51:37', 1),
(164, '::1', 'admin@mail.com', 3, '2022-07-17 23:07:28', 1),
(165, '::1', 'admin', NULL, '2022-07-17 23:10:08', 0),
(166, '::1', 'admin@mail.com', 3, '2022-07-17 23:10:13', 1),
(167, '::1', 'admin@mail.com', 3, '2022-07-17 23:11:46', 1),
(168, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:12:12', 1),
(169, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:12:49', 1),
(170, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:13:43', 1),
(171, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:14:03', 1),
(172, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:14:17', 1),
(173, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:14:42', 1),
(174, '::1', 'admin', NULL, '2022-07-17 23:15:00', 0),
(175, '::1', 'admin@mail.com', 3, '2022-07-17 23:15:05', 1),
(176, '::1', 'ammar@gmail.com', 6, '2022-07-17 23:38:31', 1),
(177, '::1', 'admin@mail.com', 3, '2022-07-17 23:40:29', 1),
(178, '::1', 'ammar@gmail.com', 6, '2022-07-18 01:52:59', 1),
(179, '::1', 'admin@mail.com', 3, '2022-07-18 01:53:49', 1),
(180, '::1', 'ammar@gmail.com', 6, '2022-07-18 02:46:43', 1),
(181, '::1', 'ammar', NULL, '2022-07-18 06:44:55', 0),
(182, '::1', 'ammar@gmail.com', 6, '2022-07-18 06:45:00', 1),
(183, '::1', 'admin@mail.com', 3, '2022-07-18 08:29:07', 1),
(184, '::1', 'ammar@gmail.com', 6, '2022-07-18 08:31:21', 1),
(185, '::1', 'ammar@gmail.com', 6, '2022-07-18 08:31:45', 1),
(186, '::1', 'ammar@gmail.com', 6, '2022-07-18 22:23:22', 1),
(187, '::1', 'ammar@gmail.com', 6, '2022-07-19 01:57:59', 1),
(188, '::1', 'ammar@gmail.com', 6, '2022-07-21 01:09:23', 1),
(189, '::1', 'ammar@gmail.com', 6, '2022-07-21 02:38:11', 1),
(190, '::1', 'ammar@gmail.com', 6, '2022-07-23 02:34:44', 1),
(191, '::1', 'ammar@gmail.com', 6, '2022-07-23 08:59:31', 1),
(192, '::1', 'admin@mail.com', 3, '2022-07-24 01:50:47', 1),
(193, '::1', 'ammar@gmail.com', 6, '2022-07-24 01:51:54', 1),
(194, '::1', 'admin@mail.com', 3, '2022-07-24 01:54:50', 1),
(195, '::1', 'ammar@gmail.com', 6, '2022-07-24 21:23:43', 1),
(196, '::1', 'admin', NULL, '2022-07-25 01:45:19', 0),
(197, '::1', 'admin@mail.com', 3, '2022-07-25 01:45:26', 1),
(198, '::1', 'ammar', NULL, '2022-07-25 23:17:36', 0),
(199, '::1', 'ammar@gmail.com', 6, '2022-07-25 23:17:45', 1),
(200, '::1', 'admin', NULL, '2022-07-26 01:24:00', 0),
(201, '::1', 'admin@mail.com', 3, '2022-07-26 01:24:13', 1),
(202, '::1', 'admin@mail.com', 3, '2022-07-26 22:26:41', 1),
(203, '::1', 'admin@mail.com', 3, '2022-07-27 01:54:11', 1),
(204, '::1', 'admin', NULL, '2022-07-27 06:52:14', 0),
(205, '::1', 'admin@mail.com', 3, '2022-07-27 06:52:44', 1),
(206, '::1', 'admin@mail.com', 3, '2022-07-27 23:32:39', 1),
(207, '::1', 'admin', NULL, '2022-07-30 00:41:12', 0),
(208, '::1', 'admin@mail.com', 3, '2022-07-30 00:41:18', 1),
(209, '::1', 'admin@mail.com', 3, '2022-07-30 08:30:03', 1),
(210, '::1', 'admin@mail.com', 3, '2022-08-01 08:43:51', 1),
(211, '::1', 'admin@mail.com', 3, '2022-08-03 04:42:41', 1),
(212, '::1', 'ammar@gmail.com', 6, '2022-08-05 21:46:48', 1),
(213, '::1', 'admin@mail.com', 3, '2022-08-05 21:57:28', 1),
(214, '::1', 'admin', NULL, '2022-08-06 06:19:20', 0),
(215, '::1', 'admin@mail.com', 3, '2022-08-06 06:19:38', 1),
(216, '::1', 'ammar@gmail.com', 6, '2022-08-06 22:31:15', 1),
(217, '::1', 'ammar@gmail.com', 6, '2022-08-07 01:38:41', 1),
(218, '::1', 'ammar@gmail.com', 6, '2022-08-07 05:25:01', 1),
(219, '::1', 'admin@mail.com', 3, '2022-08-07 08:28:16', 1),
(220, '::1', 'ammar@gmail.com', 6, '2022-08-08 08:58:43', 1),
(221, '::1', 'ammar', NULL, '2022-08-09 01:06:12', 0),
(222, '::1', 'ammar@gmail.com', 6, '2022-08-09 01:06:17', 1),
(223, '::1', 'admin@mail.com', 3, '2022-08-09 08:33:46', 1),
(224, '::1', 'ammar', NULL, '2022-08-10 07:04:00', 0),
(225, '::1', 'ammar@gmail.com', 6, '2022-08-10 07:04:09', 1),
(226, '::1', 'ammar@gmail.com', 6, '2022-08-10 09:05:02', 1),
(227, '::1', 'admin@mail.com', 3, '2022-08-10 09:05:35', 1),
(228, '::1', 'admin@mail.com', 3, '2022-08-10 22:46:21', 1),
(229, '::1', 'ammar@gmail.com', 6, '2022-08-16 22:17:51', 1),
(230, '::1', 'admin@mail.com', 3, '2022-08-17 01:27:03', 1),
(231, '::1', 'admin@mail.com', 3, '2022-08-17 08:17:49', 1),
(232, '::1', 'admin@mail.com', 3, '2022-08-18 08:19:11', 1),
(233, '::1', 'ammar@gmail.com', 6, '2022-08-18 22:56:14', 1),
(234, '::1', 'ammar@gmail.com', 6, '2022-08-18 23:03:11', 1),
(235, '::1', 'admin@mail.com', 3, '2022-08-18 23:28:04', 1),
(236, '::1', 'ammar@gmail.com', 6, '2022-08-19 04:13:11', 1),
(237, '::1', 'admin@mail.com', 3, '2022-08-19 10:13:20', 1),
(238, '::1', 'ammar@gmail.com', 6, '2022-08-20 01:48:09', 1),
(239, '::1', 'admin@mail.com', 3, '2022-08-22 06:53:31', 1),
(240, '::1', 'admin@mail.com', 3, '2022-08-24 01:29:51', 1),
(241, '::1', 'admin@mail.com', 3, '2022-08-24 06:53:21', 1),
(242, '::1', 'admin@mail.com', 3, '2022-08-24 07:29:22', 1),
(243, '::1', 'admin@mail.com', 3, '2022-08-26 01:43:21', 1),
(244, '::1', 'admin@mail.com', 3, '2022-08-26 08:08:23', 1),
(245, '::1', 'admin@mail.com', 3, '2022-08-26 22:48:08', 1),
(246, '::1', 'admin@mail.com', 3, '2022-08-26 23:01:47', 1),
(247, '::1', 'admin@mail.com', 3, '2022-08-27 06:17:49', 1),
(248, '::1', 'admin@mail.com', 3, '2022-08-29 22:06:19', 1),
(249, '::1', 'admin@mail.com', 3, '2022-08-29 22:19:16', 1),
(250, '::1', 'admin@mail.com', 3, '2022-08-30 07:59:41', 1),
(251, '::1', 'admin@mail.com', 3, '2022-08-31 01:54:57', 1),
(252, '::1', 'admin@mail.com', 3, '2022-08-31 03:08:39', 1),
(253, '::1', 'admin@mail.com', 3, '2022-08-31 08:58:46', 1),
(254, '::1', 'admin@mail.com', 3, '2022-09-02 02:05:03', 1),
(255, '::1', 'ammar@gmail.com', 6, '2022-09-02 02:06:17', 1),
(256, '::1', 'admin@mail.com', 3, '2022-09-02 02:16:49', 1),
(257, '::1', 'admin@mail.com', 3, '2022-09-02 09:09:40', 1),
(258, '::1', 'ammar@gmail.com', 6, '2022-09-02 09:14:05', 1),
(259, '::1', 'admin@mail.com', 3, '2022-09-02 09:14:44', 1),
(260, '::1', 'ammar@gmail.com', 6, '2022-09-02 09:32:51', 1),
(261, '::1', 'admin@mail.com', 3, '2022-09-02 09:35:25', 1),
(262, '::1', 'admin@mail.com', 3, '2022-09-04 23:31:32', 1),
(263, '::1', 'admin@mail.com', 3, '2022-09-04 23:52:41', 1),
(264, '::1', 'admin@mail.com', 3, '2022-09-06 00:50:25', 1),
(265, '::1', 'admin@mail.com', 3, '2022-09-06 02:54:48', 1),
(266, '::1', 'admin@mail.com', 3, '2022-09-06 02:57:08', 1),
(267, '::1', 'admin@mail.com', 3, '2022-09-06 02:57:52', 1),
(268, '::1', 'admin@mail.com', 3, '2022-09-09 09:49:24', 1),
(269, '::1', 'admin@mail.com', 3, '2022-09-10 08:20:40', 1),
(270, '::1', 'admin@mail.com', 3, '2022-09-12 23:31:38', 1),
(271, '::1', 'admin@mail.com', 3, '2022-09-13 23:12:45', 1),
(272, '::1', 'admin@mail.com', 3, '2022-09-14 01:19:22', 1),
(273, '::1', 'testujiuat@gmail.com', 9, '2022-09-14 01:44:25', 1),
(274, '::1', 'testujiuat@gmail.com', 9, '2022-09-14 01:50:15', 1),
(275, '::1', 'uat', NULL, '2022-09-14 01:51:18', 0),
(276, '::1', 'uat', NULL, '2022-09-14 01:51:51', 0),
(277, '::1', 'testujiuat@gmail.com', 9, '2022-09-14 01:51:56', 1),
(278, '::1', 'testujiuat@gmail.com', 9, '2022-09-14 07:39:04', 1),
(279, '::1', 'testujiuat@gmail.com', 9, '2022-09-14 23:03:28', 1),
(280, '::1', 'admin@mail.com', 3, '2022-09-14 23:14:29', 1),
(281, '::1', 'admin@mail.com', 3, '2022-09-16 08:27:44', 1),
(282, '::1', 'admin@mail.com', 3, '2022-09-21 23:00:00', 1),
(283, '::1', 'admin@mail.com', 3, '2022-09-22 01:37:36', 1),
(284, '::1', 'admin@mail.com', 3, '2022-09-22 06:44:20', 1),
(285, '::1', 'admin@mail.com', 3, '2022-09-27 22:35:11', 1),
(286, '::1', 'admin@mail.com', 3, '2022-10-03 08:15:18', 1),
(287, '::1', 'admin@mail.com', 3, '2022-10-03 08:19:51', 1),
(288, '::1', 'admin@mail.com', 3, '2022-10-08 02:14:47', 1),
(289, '::1', 'admin@mail.com', 3, '2022-10-10 01:50:20', 1),
(290, '::1', 'admin@mail.com', 3, '2022-10-18 22:03:18', 1),
(291, '::1', 'admin@mail.com', 3, '2022-10-21 02:40:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-cart', 'Manage Cart Users');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1656399254, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `id_desain` int(11) NOT NULL,
  `nama_desain` varchar(255) NOT NULL,
  `harga_desain` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `cover_desain` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_users`
--

CREATE TABLE `order_users` (
  `id` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `nama_desain` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cover_desain` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `nama_desain`, `slug`, `cover_desain`, `created_at`, `updated_at`) VALUES
(72, 'Skull dj orange', 'skull-dj-orange', 'LOGO SKULL ORANGE.png', '2022-06-22 01:15:03', '2022-06-22 01:15:03'),
(73, 'Skull la bestia', 'skull-la-bestia', 'SKULL ESPORTS noise.png', '2022-06-22 01:15:54', '2022-06-22 01:16:07'),
(74, 'The killer logo', 'the-killer-logo', 'THE KILLERS.jpg', '2022-06-22 01:16:25', '2022-06-22 01:16:25'),
(75, 'Tiger head monster', 'tiger-head-monster', 'TIGER PS.jpg', '2022-06-22 01:16:40', '2022-06-22 01:16:40'),
(77, 'Logo brand G', 'logo-brand-g', 'G.jpg', '2022-06-28 19:21:44', '2022-06-28 19:21:44'),
(84, 'Examination logo', 'examination-logo', 'EXAMINATION\'S FIX.png', '2022-07-13 02:16:39', '2022-07-13 02:16:39'),
(91, 'Tiger head', 'tiger-head', 'TigerHead.jpg', '2022-07-13 18:53:00', '2022-07-13 18:53:00'),
(92, 'Fox Esports', 'fox-esports', 'FOXX.jpg', '2022-07-30 01:31:34', '2022-07-30 01:31:34'),
(94, 'The Hourse Logo Esports', 'the-hourse-logo-esports', 'HORSE fix.png', '2022-09-02 02:19:42', '2022-09-02 02:19:42'),
(97, 'Astronot Playing Guitar', 'astronot-playing-guitar', 'astronotplayingguitar.jpg', '2022-09-27 16:24:59', '2022-09-27 16:24:59'),
(98, 'Jet Sky', 'jet-sky', 'jet-sky.jpg', '2022-09-27 16:26:54', '2022-09-27 16:26:54'),
(99, 'Robot Riding', 'robot-riding', 'robot-riding.jpg', '2022-09-27 16:32:46', '2022-09-27 16:32:46'),
(100, 'Skull Clown', 'skull-clown', 'skull-clown.jpg', '2022-09-27 16:32:56', '2022-09-27 16:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id_desain` int(11) NOT NULL,
  `nama_desain` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `harga_desain` int(255) NOT NULL,
  `cover_desain` varchar(255) NOT NULL,
  `deskripsi_desain` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id_desain`, `nama_desain`, `slug`, `harga_desain`, `cover_desain`, `deskripsi_desain`, `created_at`, `updated_at`) VALUES
(6, 'Alien Country', 'alien-country', 500000, 'alien_country.jpg', 'Alien Country is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, '2022-09-27 19:13:44'),
(7, 'Drive Theory V1', 'drive-theory-v1', 150000, 'drive_theory_v1.jpg', 'Drive theory V1 is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, '2022-09-27 19:22:40'),
(8, 'Drive Theory V2', 'drive-theory-v2', 150000, 'drive_theory_v2.jpg', 'Drive theory V2 is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, '2022-09-27 19:45:18'),
(9, 'Drive Theory V3', 'drive-theory-v3', 150000, 'drive_theory_v3.jpg', 'Drive theory V3 is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, '2022-09-27 19:51:43'),
(10, 'Gas Cartel', 'gas-cartel', 120000, 'gas_cartel-01.jpg', 'Gas cartel is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, NULL),
(11, 'Madmax', 'madmax', 150000, 'madmax.jpg', 'Madmax is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, NULL),
(12, 'Marhaban FC', 'marhaban-fc', 200000, 'marhaban-01.jpg', 'Marhaban FC is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', NULL, NULL),
(69, 'Savage Lion', 'savage-lion', 200000, 'savage_lion.jpg', 'Savage lion is a beast monster animal in the wold', '2022-05-23 00:48:14', '2022-05-23 00:48:14'),
(79, 'Rider PKB Performance', 'rider-pkb-performance', 500000, 'pkb_performance-01.jpg', 'Rider PKB Performance is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', '2022-05-24 16:23:57', '2022-05-24 16:23:57'),
(80, 'Rockyn skull shop ', 'rockyn-skull-shop', 400000, 'rockin_shop_logo-01.jpg', 'Rockyn skull shop is simple illustration with simple colour, in HIGH QUALITY, Resolution in 300 dpi.', '2022-05-24 16:25:07', '2022-05-24 16:25:07'),
(102, 'The barber Shop', 'the-barber-shop', 500000, 'the_barber-01.jpg', 'The barber is simple illustration with simple colour, planet decoration, coffe, and guitar, in HIGH QUALITY, Resolution in 300 dpi.', '2022-05-26 18:43:22', '2022-08-05 14:58:11'),
(130, 'Moon fish', 'moon-fish', 300000, 'Moon-fish.jpg', 'Moon fish is simple illustration with simple colour, moon decoration, and wave, in HIGH QUALITY, Resolution in 300 dpi.', '2022-07-17 15:53:24', '2022-07-17 15:53:24'),
(131, 'Moon Astronout', 'moon-astronout', 200000, 'Moon-astronout.jpg', 'Moon astronout is simple illustration with simple colour, moon decoration, and stars, in HIGH QUALITY, Resolution in 300 dpi.', '2022-07-17 15:55:02', '2022-08-05 23:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin@mail.com', 'admin', '$2y$10$ACPnjyXLrkHvcJIkgroyjOVB//Blbo1AB7DHKAiy9nCcZRODMYz9m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 08:28:34', '2022-06-28 08:28:34', NULL),
(5, 'example@gmail.com', 'example', '$2y$10$hI7AEbT50Nq87A59pmf18OHQkFMnmImBxT3eg.ph858m8uMSu8qv6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 23:11:56', '2022-08-27 01:51:24', '2022-08-27 01:51:24'),
(6, 'ammar@gmail.com', 'ammar', '$2y$10$qfAxq/bQXnVlr0znpo73XuHFivk88Jjpq5UdD/fsqZ4f9URAm6y9e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-29 08:12:44', '2022-06-29 08:12:44', NULL),
(9, 'testujiuat@gmail.com', 'uat', '$2y$10$wpHHaYHBb3C0Xtl1z9uxWuuIUtQ8rPPgofPHVDsrInP0DGgTFtp3G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-09-14 01:42:44', '2022-09-14 01:42:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_users`
--
ALTER TABLE `order_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_users`
--
ALTER TABLE `order_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id_desain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
