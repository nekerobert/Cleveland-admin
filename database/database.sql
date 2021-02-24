-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 07:48 AM
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
-- Database: `cleveland`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cat_desc` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `type`, `cat_desc`, `date_created`, `date_updated`) VALUES
(1, 'COMPRHENSIVE HEALTH SCREENING', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 11:10:00', NULL),
(2, 'HAEMATOLOGY TESTS', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 10:49:32', NULL),
(5, 'DIABETIC TESTS', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 10:50:09', NULL),
(11, 'MEDICAL PROFILING', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 10:50:28', NULL),
(12, 'PRE-EMPLOYMENT TESTS', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 10:50:53', NULL),
(13, 'GENERAL TESTS', 'services', 'Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.', '2021-02-21 10:51:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `path` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `type`, `date_created`, `date_updated`) VALUES
(21, 'Screenshot2020-10-13145138.png', 'food_5fed6b6ce4c045.45344378.png', 'image/png', '2020-12-31 06:10:52', NULL),
(22, 'Screenshot2020-10-13144944.png', 'food_5fed6d66eba532.72930713.png', 'image/png', '2020-12-31 06:19:18', NULL),
(37, 'coronavirus-sample-procedure1.jpg', 'cleveland_60318ee2659635.00051106.jpg', 'image/jpeg', '2021-02-20 22:36:18', '2021-02-20 22:36:18'),
(39, 'Screenshot2020-10-13145057.png', 'food_5ff415620cbc08.04140116.png', 'image/png', '2021-01-05 07:29:38', NULL),
(41, '4.png', 'food_5ff438f576e581.25627957.png', 'image/png', '2021-01-05 10:01:25', NULL),
(42, 'Screenshot2020-10-13144810.png', 'food_5ff4390925feb9.84227645.png', 'image/png', '2021-01-05 10:01:45', NULL),
(43, 'Screenshot2020-10-13144911.png', 'food_5ff43a3e6b7484.24836195.png', 'image/png', '2021-01-05 10:06:54', NULL),
(44, 'Screenshot2020-10-13144810.png', 'food_5ff44e10ea5327.51191333.png', 'image/png', '2021-01-05 11:31:28', NULL),
(45, '5.png', 'food_5ff456c4429c35.20141406.png', 'image/png', '2021-01-05 12:08:36', NULL),
(48, 'Screenshot2020-10-13144944.png', 'food_5ff96ff265aed0.67052500.png', 'image/png', '2021-01-09 08:57:22', '2021-01-09 08:57:22'),
(49, 'time.jpg', 'cleveland_60329a57700335.53929039.jpg', 'image/jpeg', '2021-02-21 17:37:27', '2021-02-21 17:37:27'),
(50, '6.png', 'food_5ff99bcd8578d5.82101071.png', 'image/png', '2021-01-09 12:04:29', '2021-01-09 12:04:29'),
(51, 'Screenshot2020-10-13144911.png', 'food_5ff99c29adc543.12215049.png', 'image/png', '2021-01-09 12:06:01', '2021-01-09 12:06:01'),
(52, '', 'food_5ff9dc7668eef7.72179384.png', 'image/png', '2021-01-09 16:40:22', NULL),
(53, '', 'food_5ff9dc76695891.72573971.png', 'image/png', '2021-01-09 16:40:22', NULL),
(54, '', 'food_5ff9dc7669c163.92286071.png', 'image/png', '2021-01-09 16:40:22', NULL),
(55, '', 'food_5ff9dc766a2847.04035622.png', 'image/png', '2021-01-09 16:40:23', NULL),
(56, '', 'food_5ff9dc766aabb7.10856310.png', 'image/png', '2021-01-09 16:40:23', NULL),
(57, '', 'food_5ff9dc766b14c0.95318914.png', 'image/png', '2021-01-09 16:40:23', NULL),
(58, '3.png', 'food_5ff9f05a2bca96.31495311.png', 'image/png', '2021-01-09 18:05:14', NULL),
(59, '4.png', 'food_5ff9f05a2c5eb3.52680282.png', 'image/png', '2021-01-09 18:05:14', NULL),
(60, '5.png', 'food_5ff9f05a2cc833.12187282.png', 'image/png', '2021-01-09 18:05:14', NULL),
(61, '6.png', 'food_5ff9f05a2d2319.50977101.png', 'image/png', '2021-01-09 18:05:14', NULL),
(62, '7.png', 'food_5ff9f05a2d7f92.30803799.png', 'image/png', '2021-01-09 18:05:14', NULL),
(63, '8.png', 'food_5ff9f05a2de905.61008035.png', 'image/png', '2021-01-09 18:05:15', NULL),
(64, '4.png', 'food_5ff9f34380b3b6.08471816.png', 'image/png', '2021-01-09 18:17:39', NULL),
(65, '5.png', 'food_5ff9f343811e88.96303768.png', 'image/png', '2021-01-09 18:17:39', NULL),
(66, '6.png', 'food_5ff9f343818849.22761959.png', 'image/png', '2021-01-09 18:17:39', NULL),
(67, '7.png', 'food_5ff9f34381e5e7.51473949.png', 'image/png', '2021-01-09 18:17:40', NULL),
(68, '3.png', 'food_5ffa1ae2c685e0.70200697.png', 'image/png', '2021-01-09 21:06:42', NULL),
(69, '4.png', 'food_5ffa1ae2c6e011.42724627.png', 'image/png', '2021-01-09 21:06:42', NULL),
(70, '5.png', 'food_5ffa1ae2c74a43.23682268.png', 'image/png', '2021-01-09 21:06:43', NULL),
(71, '6.png', 'food_5ffa1ae2c79d99.89465320.png', 'image/png', '2021-01-09 21:06:43', NULL),
(72, '7.png', 'food_5ffa1ae2c7eef4.36162172.png', 'image/png', '2021-01-09 21:06:43', NULL),
(73, '8.png', 'food_5ffa1ae2c86be4.02200673.png', 'image/png', '2021-01-09 21:06:43', NULL),
(74, '3.png', 'food_5ffa1b7b598e08.65230866.png', 'image/png', '2021-01-09 21:09:15', NULL),
(75, '3.png', 'food_5ffa1ba7da8498.67335090.png', 'image/png', '2021-01-09 21:09:59', NULL),
(76, '3.png', 'food_5ffa1c3d8683e1.51336660.png', 'image/png', '2021-01-09 21:12:29', NULL),
(77, '4.png', 'food_5ffa1c3d8727b0.16910862.png', 'image/png', '2021-01-09 21:12:29', NULL),
(78, '5.png', 'food_5ffa1c3d879e81.28289507.png', 'image/png', '2021-01-09 21:12:29', NULL),
(79, '6.png', 'food_5ffa1c3d881d47.39062898.png', 'image/png', '2021-01-09 21:12:29', NULL),
(80, '7.png', 'food_5ffa1c3d88d3a6.19556134.png', 'image/png', '2021-01-09 21:12:30', NULL),
(81, '8.png', 'food_5ffa1c3d898242.76053310.png', 'image/png', '2021-01-09 21:12:30', NULL),
(82, '3.png', 'food_5ffa1eef728186.47766178.png', 'image/png', '2021-01-09 21:23:59', NULL),
(83, '4.png', 'food_5ffa1eef72d826.94226122.png', 'image/png', '2021-01-09 21:23:59', NULL),
(84, '5.png', 'food_5ffa1eef7348f5.46783079.png', 'image/png', '2021-01-09 21:23:59', NULL),
(85, '6.png', 'food_5ffa1eef73f482.82297964.png', 'image/png', '2021-01-09 21:23:59', NULL),
(86, '7.png', 'food_5ffa1eef74a515.58347449.png', 'image/png', '2021-01-09 21:24:00', NULL),
(87, '8.png', 'food_5ffa1eef750a56.68045342.png', 'image/png', '2021-01-09 21:24:00', NULL),
(88, '3.png', 'food_5ffa1fa44f8f15.24307023.png', 'image/png', '2021-01-09 21:27:00', NULL),
(89, '4.png', 'food_5ffa1fa4500552.13102615.png', 'image/png', '2021-01-09 21:27:00', NULL),
(90, '5.png', 'food_5ffa1fa4506fd1.58646497.png', 'image/png', '2021-01-09 21:27:00', NULL),
(91, '6.png', 'food_5ffa1fa450e1a4.94917750.png', 'image/png', '2021-01-09 21:27:00', NULL),
(92, '7.png', 'food_5ffa1fa45155b6.63877416.png', 'image/png', '2021-01-09 21:27:01', NULL),
(93, '8.png', 'food_5ffa1fa451be38.86515247.png', 'image/png', '2021-01-09 21:27:01', NULL),
(94, '3.png', 'food_5ffa203f7b9c33.12665264.png', 'image/png', '2021-01-09 21:29:35', NULL),
(95, '4.png', 'food_5ffa203f7c1831.47388216.png', 'image/png', '2021-01-09 21:29:35', NULL),
(96, '5.png', 'food_5ffa203f7c8a35.17194274.png', 'image/png', '2021-01-09 21:29:35', NULL),
(97, '6.png', 'food_5ffa203f7d2297.19390459.png', 'image/png', '2021-01-09 21:29:35', NULL),
(98, '7.png', 'food_5ffa203f7d9fa4.04049323.png', 'image/png', '2021-01-09 21:29:36', NULL),
(99, '8.png', 'food_5ffa203f7e0ed8.94400273.png', 'image/png', '2021-01-09 21:29:36', NULL),
(100, '3-Copy2.png', 'food_5ffa2134504c69.07073127.png', 'image/png', '2021-01-09 21:33:40', NULL),
(101, '3-Copy3.png', 'food_5ffa213450ae79.66636372.png', 'image/png', '2021-01-09 21:33:40', NULL),
(102, '3-Copy4.png', 'food_5ffa21345119d8.52650232.png', 'image/png', '2021-01-09 21:33:40', NULL),
(103, '3-Copy5.png', 'food_5ffa2134516d35.41789492.png', 'image/png', '2021-01-09 21:33:40', NULL),
(104, '3-Copy6.png', 'food_5ffa213451bd63.87779119.png', 'image/png', '2021-01-09 21:33:41', NULL),
(105, '3-Copy.png', 'food_5ffa2134520fc3.48760312.png', 'image/png', '2021-01-09 21:33:41', NULL),
(106, '3.png', 'food_5ffa2134525ef0.70544957.png', 'image/png', '2021-01-09 21:33:41', NULL),
(107, '4-Copy2.png', 'food_5ffa213452b079.96160550.png', 'image/png', '2021-01-09 21:33:41', NULL),
(108, '4-Copy3.png', 'food_5ffa2134530014.44705243.png', 'image/png', '2021-01-09 21:33:41', NULL),
(159, '5-Copy.png', 'food_5ffa2e0cb51de5.59092890.png', 'image/png', '2021-01-09 22:29:23', NULL),
(161, 'about3.jpg', 'cleveland_6032e725544866.14638364.jpg', 'image/jpeg', '2021-02-21 23:05:09', '2021-02-21 23:05:09'),
(162, 'Screenshot2020-10-13145057.png', 'food_600831b2b3a310.38100640.png', 'image/png', '2021-01-20 13:35:46', '2021-01-20 13:35:46'),
(166, '02.jpg', 'cleveland_6033939b7caf54.80426641.jpg', 'image/jpeg', '2021-02-22 11:20:59', '2021-02-22 11:20:59'),
(169, '05.jpg', 'cleveland_60339309aef2a3.22146065.jpg', 'image/jpeg', '2021-02-22 11:18:33', '2021-02-22 11:18:33'),
(172, '02.png', 'cleveland_60339641f2ae51.64743911.png', 'image/png', '2021-02-22 11:32:17', '2021-02-22 11:32:17'),
(173, '01.png', 'cleveland_6033960a484393.00464384.png', 'image/png', '2021-02-22 11:31:22', '2021-02-22 11:31:22'),
(174, 'about1.jpg', 'cleveland_6032e78286ee58.54495387.jpg', 'image/jpeg', '2021-02-21 23:06:42', '2021-02-21 23:06:42'),
(180, 'Abuja.jpg', 'food_600c1456501050.54689928.jpg', 'image/jpeg', '2021-01-23 12:19:34', NULL),
(181, 'Abuja.jpg', 'food_600c147b1993e3.74282584.jpg', 'image/jpeg', '2021-01-23 12:20:11', NULL),
(182, 'Abuja.jpg', 'food_600c148bf2caf7.75453165.jpg', 'image/jpeg', '2021-01-23 12:20:27', NULL),
(183, 'Abuja.jpg', 'food_600c158dbebf81.07934006.jpg', 'image/jpeg', '2021-01-23 12:24:45', NULL),
(184, 'labworker4.jpg', 'cleveland_6030e78d5dbd50.35490672.jpg', 'image/jpeg', '2021-02-20 10:42:21', '2021-02-20 10:42:21'),
(185, 'labworker2.jpg', 'cleveland_6031761e6c6f42.57323344.jpg', 'image/jpeg', '2021-02-20 20:50:38', '2021-02-20 20:50:38'),
(186, 'labworker1.jpg', 'cleveland_6030e76355cb61.79465263.jpg', 'image/jpeg', '2021-02-20 10:41:39', '2021-02-20 10:41:39'),
(187, 'precision.jpg', 'cleveland_60329ac88dae91.11139502.jpg', 'image/jpeg', '2021-02-21 17:39:20', NULL),
(188, 'accuracy.jpg', 'cleveland_60329b84a35f69.18337549.jpg', 'image/jpeg', '2021-02-21 17:42:28', NULL),
(189, 'precision.jpg', 'cleveland_6032c9d48a64c1.45616627.jpg', 'image/jpeg', '2021-02-21 21:00:04', NULL),
(190, 'accuracy.jpg', 'cleveland_6032c9ea8f6b82.10719132.jpg', 'image/jpeg', '2021-02-21 21:00:26', NULL),
(191, 'labworker2.jpg', 'cleveland_603379570203d8.84527745.jpg', 'image/jpeg', '2021-02-22 09:28:55', NULL),
(192, 'labworker1.jpg', 'cleveland_6033799a320185.41293133.jpg', 'image/jpeg', '2021-02-22 09:30:02', NULL),
(193, 'lab1.jpg', 'cleveland_603379c91a7302.64157173.jpg', 'image/jpeg', '2021-02-22 09:30:49', NULL),
(194, 'labworker2.jpg', 'cleveland_603379fb352797.24598433.jpg', 'image/jpeg', '2021-02-22 09:31:39', NULL),
(195, 'labworker2.jpg', 'cleveland_60337ad380cc52.98435035.jpg', 'image/jpeg', '2021-02-22 09:35:15', NULL),
(196, 'labworker1.jpg', 'cleveland_60337b46500d09.78069246.jpg', 'image/jpeg', '2021-02-22 09:37:10', NULL),
(197, 'labworker-taking-samples.jpg', 'cleveland_60337ba5154795.95907826.jpg', 'image/jpeg', '2021-02-22 09:38:45', NULL),
(198, 'lab2.jpg', 'cleveland_60337bf0a8b7a1.50804510.jpg', 'image/jpeg', '2021-02-22 09:40:00', NULL),
(199, 'lab1.jpg', 'cleveland_60337c8502ce45.24836394.jpg', 'image/jpeg', '2021-02-22 09:42:29', NULL),
(200, 'attendant-xrays.jpg', 'cleveland_60337cb36eb436.16702538.jpg', 'image/jpeg', '2021-02-22 09:43:15', NULL),
(201, 'labworker-result.jpg', 'cleveland_60337cd8878db5.21713030.jpg', 'image/jpeg', '2021-02-22 09:43:52', NULL),
(202, 'lab4.jpg', 'cleveland_60337d07b18313.67346461.jpg', 'image/jpeg', '2021-02-22 09:44:39', NULL),
(203, 'labworker1.jpg', 'cleveland_60337d340b6dd0.60736389.jpg', 'image/jpeg', '2021-02-22 09:45:24', NULL),
(204, 'labworker-taking-samples.jpg', 'cleveland_60337d5f3c4690.78623095.jpg', 'image/jpeg', '2021-02-22 09:46:07', NULL),
(205, 'lab1.jpg', 'cleveland_60337d97d036b0.33311571.jpg', 'image/jpeg', '2021-02-22 09:47:03', NULL),
(206, 'labworker1.jpg', 'cleveland_60337dc52d8aa8.18943273.jpg', 'image/jpeg', '2021-02-22 09:47:49', NULL),
(207, '04.jpg', 'cleveland_603393e2461f98.27586714.jpg', 'image/jpeg', '2021-02-22 11:22:10', NULL),
(208, '01.png', 'cleveland_6033965ed29ca6.11874035.png', 'image/png', '2021-02-22 11:32:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `date_created`, `date_updated`) VALUES
(38, 'Home', '2021-01-05 08:41:17', NULL),
(39, ' About Us', '2020-12-24 19:20:35', NULL),
(40, ' Junk page', '2020-12-24 19:21:04', NULL),
(43, ' Silly page', '2021-01-05 08:37:59', NULL),
(44, ' Fake again 2 ', '2021-01-06 09:26:18', NULL),
(45, ' Silly page 3 ', '2021-01-09 10:36:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_datas`
--

CREATE TABLE `page_datas` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `file_id` int(11) NOT NULL DEFAULT 0,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_datas`
--

INSERT INTO `page_datas` (`id`, `title`, `content`, `file_id`, `date_created`, `date_updated`) VALUES
(36, 'home-advert', '{\"enable_advert_section\":\"1\",\"advert_title\":\"Hello titlee one\",\"advert_text\":\"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Curabitur aliquet quam id dui posuer\",\"enable_advert_btn\":\"1\",\"advert_btn_text\":\"Hello world\",\"advert_btn_link\":\"#\"}', 37, '2021-02-20 22:37:12', '2021-02-20 10:37:12'),
(38, 'home-health-tip', '{\"tip_title\":\"New title one\",\"enable_tip_subtitle\":\"1\",\"tip-subtitle\":\"New title Suntitle\",\"tip_description\":\"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.\"}', 39, '2021-01-05 07:29:38', NULL),
(42, 'home-advert', '', 43, '2021-01-05 10:06:54', NULL),
(43, 'home-health-tip', '{\"tip_title\":\"New title one\",\"enable_tip_subtitle\":\"1\",\"tip-subtitle\":\"New title Suntitle\",\"tip_description\":\"Hello world two\"}', 44, '2021-01-05 11:31:29', NULL),
(50, 'home-footer-banner', '{\"banner_title\":\"Looking for a first class professional medical lab?\",\"btn_text\":\"CONTACT US\",\"btn_link\":\"https:\\/\\/cleveland.com\\/contact\"}', 0, '2021-02-21 21:52:16', '2021-02-21 09:52:16'),
(53, 'home-key-strength', '{\"section_title\":\"What Makes Us  Different\",\"section_desc\":\"Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit torto\"}', 0, '2021-02-21 16:48:12', '2021-02-21 04:48:12'),
(54, 'home-strength-item', '{\"item_title\":\"Time\",\"item_description\":\"Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..lis\"}', 49, '2021-02-21 20:45:28', '2021-02-21 08:45:28'),
(57, 'home-equipment-section', '{\"section_title\":\"Top-notch Equipments\",\"section_desc\":\"Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet\"}', 0, '2021-02-21 21:08:01', '2021-02-21 09:08:01'),
(185, 'home-equipment-item', '{\"path\":\"cleveland_6032cfc206a869.51191654.jpg\"}', 0, '2021-02-21 21:25:22', '2021-02-21 21:25:22'),
(226, 'main_faq', '{\"faq_title\":\"We\'re ready to start Thomso ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:15:37', NULL),
(227, 'main_faq', '{\"faq_title\":\"Thomso Design nostrd exercitation ullamco laboris ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:16:34', NULL),
(228, 'home-equipment-item', '{\"path\":\"cleveland_6032cfcd8f4381.73807718.jpg\"}', 0, '2021-02-21 21:25:33', '2021-02-21 21:25:33'),
(229, 'home-equipment-item', '{\"path\":\"cleveland_6032cfdfe89494.04356243.jpg\"}', 0, '2021-02-21 21:25:51', '2021-02-21 21:25:51'),
(231, 'home-equipment-item', '{\"path\":\"cleveland_6032d001a4c759.13807194.jpg\"}', 0, '2021-02-21 21:26:25', '2021-02-21 21:26:25'),
(232, 'main-section-about', '{\"section_title\":\"Welcome to cleveland laboratory\",\"enable_subtitle\":1,\"subtitle\":\"Cleveland Medical Laboratory was in established in 2020 in Abuja, Nigeria (RC 1651823).\",\"short_desc\":\"Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\\r\\n\\r\\nNulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.\\r\\n\\r\\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit.\",\"full_desc\":\"Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\\r\\n\\r\\nNulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.\\r\\n\\r\\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit.\",\"btn_text\":\"Learn More\",\"btn_link\":\"#\",\"vision_title\":\"Our Vision\",\"vision_content\":\"To maintain excellence in high quality diagnostic services within a minimal turnaround time.\",\"mission_title\":\"Our Mission\",\"mission_content\":\"To integrate best practises of science and innovative technology to meet up an accurate and precise results that correlates clinically.\"}', 0, '2021-02-21 23:01:52', '2021-02-22 11:01:52'),
(233, 'slider-image-about', '{\"path\":\"cleveland_6032dd8b7fb7e8.66231857.jpg\"}', 0, '2021-02-21 22:24:11', '2021-02-21 22:24:11'),
(234, 'slider-image-about', '{\"path\":\"cleveland_6032dd98a42437.00101851.jpg\"}', 0, '2021-02-21 22:24:24', '2021-02-21 22:24:24'),
(238, 'slider-image-about', '{\"path\":\"cleveland_6032dda7b76d14.86322525.jpg\"}', 0, '2021-02-21 22:24:39', '2021-02-21 22:24:39'),
(239, 'about-challenge-item', '{\"challenge_title\":\"The Challenge\",\"challenge_desc\":\"Most Nigerian citizens do not have adequate knowledge of the Laws\\/Policies of the Nation, its implications and how it can be applied.Policy makers also don\\u2019t communicate in the most understandable form and many people become policy victims due to inadequate knowledge of the Laws governing the different sectors in Nigeria.\"}', 161, '2021-02-21 23:04:50', '2021-02-22 11:04:50'),
(244, 'core-value-about', '{\"section_title\":\"Our Core Values\",\"section_desc\":\"We pride ourselves in providing affordable and precise results at the shortest possible time.\"}', 0, '2021-02-22 08:31:44', '2021-02-22 08:31:44'),
(249, 'about-testimonial-section', '{\"section_title\":\"What People Say?\",\"section_desc\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero minima impedit aliquam id\"}', 0, '2021-02-22 11:27:35', '2021-02-22 11:27:35'),
(250, 'about-team-member', '{\"member_name\":\"Sarah Micheal\",\"member_position\":\"Manager\",\"member_desc\":\"Lorem ipsum ipsum ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet\",\"enable_fb\":1,\"member_fb\":\"#\",\"enable_lk\":1,\"member_lk\":\"#\",\"enable_tw\":1,\"member_tw\":\"#\"}', 166, '2021-02-22 11:20:49', '2021-02-22 11:20:49'),
(253, 'about-team-member', '{\"member_name\":\"John Glemean\",\"member_position\":\"MD\\/CEO\",\"member_desc\":\"Lorem ipsum ipsum ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet\",\"enable_fb\":1,\"member_fb\":\"#\",\"enable_lk\":1,\"member_lk\":\"#\",\"enable_tw\":1,\"member_tw\":\"#\"}', 169, '2021-02-22 11:19:20', '2021-02-22 11:19:20'),
(256, 'about-testimonial-item', '{\"testifier_title\":\"Designer\",\"testifier_name\":\"Arit Minna\",\"testifier_msg\":\"consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.\"}', 172, '2021-02-22 11:32:12', '2021-02-22 11:32:12'),
(257, 'about-testimonial-item', '{\"testifier_title\":\"Designer\",\"testifier_name\":\"John Doe\",\"testifier_msg\":\"consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.\"}', 173, '2021-02-22 11:31:10', '2021-02-22 11:31:10'),
(258, 'about-challenge-item', '{\"challenge_title\":\"The Solution\",\"challenge_desc\":\"Cleveland laboratory provieds a simple platform that will provide comprehensive knowledge of the various Policies\\/Laws and its implications using Infographics: giving both policy makers and beneficiaries better communication.\"}', 174, '2021-02-21 23:06:56', '2021-02-22 11:06:56'),
(259, 'about-footer-banner', '{\"banner_title\":\"Hello one two\",\"btn_text\":\"See All Cosmetology Courses\",\"btn_link\":\"https:\\/\\/cleveland.com\\/contact\"}', 0, '2021-01-21 15:26:58', '2021-01-21 03:26:58'),
(260, 'service-section-content', '{\"section_title\":\"Our Quality Services\",\"section_desc\":\"Our services are customised to meet your every need!\\r\\nYou can trust us for acurate result on your health status and at the quickest time. We provide comprehensive analysis to aid in diagnosis, treatment, and prevention of disease.\"}', 0, '2021-02-22 09:49:17', '2021-02-22 09:49:17'),
(262, 'home-equipment-item', '{\"path\":\"cleveland_6032d00d86abd1.74882034.jpg\"}', 0, '2021-02-21 21:26:37', '2021-02-21 21:26:37'),
(263, 'home-equipment-item', '{\"path\":\"cleveland_6032d01ec12b98.59486568.jpg\"}', 0, '2021-02-21 21:26:54', '2021-02-21 21:26:54'),
(284, 'service-footer-banner', '{\"banner_title\":\"Hello onedd\",\"btn_text\":\"See All Cosmetology Courses\",\"btn_link\":\"https:\\/\\/cleveland.com\\/services\"}', 0, '2021-01-23 08:24:30', '2021-01-23 08:24:30'),
(289, 'slider', '{\"primary_title\":\"GET THIS RIGHT\",\"enable_sec_title\":1,\"secondary_title\":\"CLEVELAND LABORATORY IS SIMPLY THE BEST\",\"enable_btn_one\":1,\"btn_one_text\":\"BOOK APPOINTMENT\",\"btn_one_link\":\"#\",\"enable_btn_two\":1,\"btn_two_text\":\"Learn More\",\"btn_two_link\":\"#\"}', 184, '2021-02-20 10:30:00', NULL),
(290, 'slider', '{\"primary_title\":\"Welcome To Cleveland Laboratory\",\"enable_sec_title\":1,\"secondary_title\":\"Come And Get The Best Medical Diagnostic Procedures And Test\",\"enable_btn_one\":1,\"btn_one_text\":\"BOOK APPOINTMENT\",\"btn_one_link\":\"#\",\"enable_btn_two\":1,\"btn_two_text\":\"Learn More\",\"btn_two_link\":\"#\"}', 185, '2021-02-20 20:52:05', '2021-02-20 08:52:05'),
(291, 'slider', '{\"primary_title\":\"DO YOU KNOW?\",\"enable_sec_title\":1,\"secondary_title\":\"THE WORD \'LABORATORY\' IS OFTEN FRIGHTENING TO PEOPLE.\",\"enable_btn_one\":1,\"btn_one_text\":\"BOOK APPOINTMENT\",\"btn_one_link\":\"#\",\"enable_btn_two\":1,\"btn_two_text\":\"Learn More\",\"btn_two_link\":\"#\"}', 186, '2021-02-20 10:32:14', NULL),
(292, 'about-core-value-item', '{\"item_title\":\"Services\",\"item_desc\":\"Quality services is guaranteed.\"}', 0, '2021-02-22 09:05:08', '2021-02-22 09:05:08'),
(293, 'about-core-value-item', '{\"item_title\":\"Excellence\",\"item_desc\":\"We are professionals.\"}', 0, '2021-02-22 09:04:38', '2021-02-22 09:04:38'),
(295, 'about-core-value-item', '{\"item_title\":\"Integrity\",\"item_desc\":\"We keep our word.\"}', 0, '2021-02-22 09:04:01', '2021-02-22 09:04:01'),
(298, 'home-strength-item', '{\"item_title\":\"Precision\",\"item_description\":\"Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..\"}', 189, '2021-02-21 09:00:04', NULL),
(299, 'home-strength-item', '{\"item_title\":\"Accuracy\",\"item_description\":\"Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..\"}', 190, '2021-02-21 09:00:26', NULL),
(300, 'slider-image-about', '{\"path\":\"cleveland_6032ddb4f257c9.85315655.jpg\"}', 0, '2021-02-21 22:24:52', NULL),
(301, 'service-item', '{\"short_title\":\"Screening\",\"full_title\":\"Comprhensive Health Screening\",\"service_cat\":\"COMPRHENSIVE HEALTH SCREENING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 191, '2021-02-22 09:28:55', NULL),
(302, 'service-item', '{\"short_title\":\"Glucose Test\",\"full_title\":\"Glucose Test\",\"service_cat\":\"COMPRHENSIVE HEALTH SCREENING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 192, '2021-02-22 09:30:02', NULL),
(303, 'service-item', '{\"short_title\":\"LIVER FUNCT. TEST\",\"full_title\":\"Liver Function Test\",\"service_cat\":\"COMPRHENSIVE HEALTH SCREENING\",\"service_desc\":\"typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 193, '2021-02-22 09:30:49', NULL),
(304, 'service-item', '{\"short_title\":\"KIDENEY TEST\",\"full_title\":\"Kidney Function Test\",\"service_cat\":\"COMPRHENSIVE HEALTH SCREENING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 194, '2021-02-22 21:09:37', NULL),
(305, 'service-item', '{\"short_title\":\"HEAMATOLOGY\",\"full_title\":\"HEAMATOLOGY TEST\",\"service_cat\":\"HAEMATOLOGY TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 195, '2021-02-22 09:35:15', NULL),
(306, 'service-item', '{\"short_title\":\"Lipid Profile\",\"full_title\":\"Lipid Profile\",\"service_cat\":\"HAEMATOLOGY TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 196, '2021-02-22 09:37:10', NULL),
(307, 'service-item', '{\"short_title\":\"Hormone Profile\",\"full_title\":\"Hormone Profile\",\"service_cat\":\"HAEMATOLOGY TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 197, '2021-02-22 09:38:45', NULL),
(308, 'service-item', '{\"short_title\":\"DRUG TEST\",\"full_title\":\"Drug Abuse test\",\"service_cat\":\"HAEMATOLOGY TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 198, '2021-02-22 09:40:00', NULL),
(309, 'service-item', '{\"short_title\":\"UTI\",\"full_title\":\"Urinary Tract Infection Test\",\"service_cat\":\"MEDICAL PROFILING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 199, '2021-02-22 09:42:29', NULL),
(310, 'service-item', '{\"short_title\":\"Tumor Markers\",\"full_title\":\"Tumor Markers\",\"service_cat\":\"MEDICAL PROFILING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 200, '2021-02-22 09:43:15', NULL),
(311, 'service-item', '{\"short_title\":\"Cardiac Markers\",\"full_title\":\"Cardiac Markers\",\"service_cat\":\"MEDICAL PROFILING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 201, '2021-02-22 09:43:52', NULL),
(312, 'service-item', '{\"short_title\":\"BP CHECKUP\",\"full_title\":\"Blood Pressure Check-up\",\"service_cat\":\"MEDICAL PROFILING\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 202, '2021-02-22 09:44:39', NULL),
(313, 'service-item', '{\"short_title\":\"FOOD HANDLERS\",\"full_title\":\"Food Handlers Test\",\"service_cat\":\"GENERAL TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 203, '2021-02-22 09:48:07', '2021-02-22 09:48:07'),
(314, 'service-item', '{\"short_title\":\"Pre-Employment\",\"full_title\":\"Pre-Employment TEST\",\"service_cat\":\"GENERAL TESTS\",\"service_desc\":\"orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 204, '2021-02-22 09:46:07', NULL),
(315, 'service-item', '{\"short_title\":\"DOMESTIC WORKERS\",\"full_title\":\"Domestic Workers Test\",\"service_cat\":\"GENERAL TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 205, '2021-02-22 09:47:03', NULL),
(316, 'service-item', '{\"short_title\":\"Others\",\"full_title\":\"Free Body Mass Index\",\"service_cat\":\"GENERAL TESTS\",\"service_desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.\"}', 206, '2021-02-22 09:47:49', NULL),
(317, 'about-team-member', '{\"member_name\":\"Eva Keely\",\"member_position\":\"LABORATORY ASSISTANT\",\"member_desc\":\"Lorem ipsum ipsum ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet\",\"enable_fb\":1,\"member_fb\":\"\",\"enable_lk\":1,\"member_lk\":\"#\",\"enable_tw\":1,\"member_tw\":\"#\"}', 207, '2021-02-22 11:26:51', '2021-02-22 11:26:51'),
(318, 'about-testimonial-item', '{\"testifier_title\":\"Doctor\",\"testifier_name\":\"Chris Frank\",\"testifier_msg\":\"consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.\"}', 208, '2021-02-22 11:32:47', NULL),
(319, 'main_faq', '{\"faq_title\":\"Project Planing And Managment ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:16:09', NULL),
(320, 'main_faq', '{\"faq_title\":\"Duis aute dolor in reprehenderit. ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:16:58', NULL),
(321, 'main_faq', '{\"faq_title\":\"Clean And Professional Design ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit..\"}', 0, '2021-02-22 22:17:21', NULL),
(322, 'main_faq', '{\"faq_title\":\"Thomso aute dolor in reprehenderit. ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:17:49', NULL),
(323, 'main_faq', '{\"faq_title\":\"Are You Like Thomso ?\",\"faq_answer\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.\"}', 0, '2021-02-22 22:18:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `file_id` int(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `username`, `email`, `file_id`, `password`, `date_created`, `date_updated`, `role`, `status`) VALUES
(2, 'Idiono-mfon', 'Etim', 'test', 'abrahamterahdebik@gmail.com', 183, '$2y$10$1BTJEkE3dXZ0hmibFQPhNueUE.5LXlBWE66MyHaIBOyhuFzeYi2Ea', '2021-01-23 12:30:37', NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_title` (`cat_title`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `page_datas`
--
ALTER TABLE `page_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `page_datas`
--
ALTER TABLE `page_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
