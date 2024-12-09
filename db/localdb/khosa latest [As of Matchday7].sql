-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 10:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(7) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `password`) VALUES
(1, 'Danie', 'danie@gmail.com', '123@Danie'),
(2, 'Emmy', 'emmy@gmail.com', '123@Emmy');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` int(7) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `term` varchar(100) NOT NULL,
  `season` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link_twitter` mediumtext NOT NULL,
  `link_facebook` mediumtext NOT NULL,
  `link_instagram` mediumtext NOT NULL,
  `link_whatsapp` varchar(20) NOT NULL,
  `link_linkedin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `first_name`, `last_name`, `role`, `term`, `season`, `team`, `image`, `link_twitter`, `link_facebook`, `link_instagram`, `link_whatsapp`, `link_linkedin`) VALUES
(1, 'Twesigomwe', 'David', 'President', '3', '6', '', 'chue.png', 'https://x.com/kirowyne', '', '', '+256788139399', 'https://www.linkedin.com/in/lt-david-twesigomwe-ab1485285'),
(2, 'Natasha', 'Rinah', 'Vice President', '2', '6', '', 'tagobya.png', 'https://x.com/NatashaRinah1', '', '', '+256779768358', ''),
(3, 'Akatwijuka', 'Amon', 'Publicity', '2', '6', '', 'amon.png', 'https://x.com/AmonQs', '', '', '+256751308408', ''),
(5, 'Twinamastiko', 'Bob', 'Technical', '2', '6', '', 'bob.png', 'https://x.com/bob_t_trukfit', '', '', '+256784626440', ''),
(6, 'Kyokushaba', 'Shine', 'Ass. General Secretary', '2', '6', '', 'shine.png', '', '', '', '+256759816712', '');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(11) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `week` varchar(50) NOT NULL,
  `pitch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `team1`, `team2`, `date`, `time`, `week`, `pitch`) VALUES
(1, 'Omwokyi', 'Gwajwa', '2024-08-04', '14:00', 'Matchday 1', 'Pitch 1'),
(3, 'Whizzy', 'Historicals', '2024-08-04', '14:30', 'Matchday 1', 'Pitch 1'),
(4, 'Giggaz', 'Karere', '2024-08-04', '15:00', 'Matchday 1', 'Pitch 1'),
(5, 'Matrix', 'Akasayi', '2024-08-04', '15:30', 'Matchday 1', 'Pitch 1'),
(6, 'Benghazi', 'Bulembia', '2024-08-04', '16:30', 'Matchday 1', 'Pitch 1'),
(7, 'Warriors', 'Matrix', '2024-08-04', '17:00', 'Matchday 1', 'Pitch 1'),
(8, '2K3Formidables', 'Vegas', '2024-08-04', '17:30', 'Matchday 1', 'Pitch 1'),
(9, 'Bulembia', 'Elites', '2024-08-04', '14:00', 'Matchday 1', 'Pitch 2'),
(10, 'Vegas', 'Warriors', '2024-08-04', '14:30', 'Matchday 1', 'Pitch 2'),
(11, '2K3Formidables', 'Benghazi', '2024-08-04', '15:00', 'Matchday 1', 'Pitch 2'),
(12, 'Historicals', 'Omwokyi', '2024-08-04', '15:30', 'Matchday 1', 'Pitch 2'),
(13, 'Karere', 'Gwajwa', '2024-08-04', '16:30', 'Matchday 1', 'Pitch 2'),
(14, 'Akasayi', 'Whizzy', '2024-08-04', '17:00', 'Matchday 1', 'Pitch 2'),
(15, 'Elites', 'Giggaz', '2024-08-04', '17:30', 'Matchday 1', 'Pitch 2'),
(46, 'Omwokyi', 'Karere', '2024-08-18', '2:00pm', 'Matchday 2', 'Pitch 1'),
(47, 'Historicals', 'Akasayi', '2024-08-18', '2:30pm', 'Matchday 2', 'Pitch 1'),
(48, 'Gwajwa', 'Elites', '2024-08-18', '3:00pm', 'Matchday 2', 'Pitch 1'),
(49, 'Whizzy', 'Warriors', '2024-08-18', '3:30pm', 'Matchday 2', 'Pitch 1'),
(50, 'Bulembia', 'Matrix', '2024-08-18', '4:30pm', 'Matchday 2', 'Pitch 1'),
(51, 'Vegas', 'Giggaz', '2024-08-18', '5:00pm', 'Matchday 2', 'Pitch 1'),
(52, '2K3Formidables', 'Whizzy', '2024-08-18', '5:30pm', 'Matchday 2', 'Pitch 1'),
(53, 'Matrix', '2K3Formidables', '2024-08-18', '2:00pm', 'Matchday 2', 'Pitch 2'),
(54, 'Giggaz', 'Benghazi', '2024-08-18', '2:30pm', 'Matchday 2', 'Pitch 2'),
(55, 'Bulembia', 'Vegas', '2024-08-18', '3:00pm', 'Matchday 2', 'Pitch 2'),
(56, 'Akasayi', 'Omwokyi', '2024-08-18', '3:30pm', 'Matchday 2', 'Pitch 2'),
(57, 'Warriors', 'Historicals', '2024-08-18', '4:30pm', 'Matchday 2', 'Pitch 2'),
(58, 'Elites', 'Karere', '2024-08-18', '5:00pm', 'Matchday 2', 'Pitch 2'),
(59, 'Benghazi', 'Gwajwa', '2024-08-18', '5:30pm', 'Matchday 2', 'Pitch 2'),
(60, 'Akasayi', 'Warriors', '2024-09-01', '2:00pm', 'Matchday 3', 'Pitch 1'),
(61, 'Karere', 'Benghazi', '2024-09-01', '2:30pm', 'Matchday 3', 'Pitch 1'),
(62, 'Omwokyi', 'Elites', '2024-09-01', '3:00pm', 'Matchday 3', 'Pitch 1'),
(63, 'Historicals', '2K3Formidables', '2024-09-01', '3:30pm', 'Matchday 3', 'Pitch 1'),
(64, 'Matrix', 'Gwajwa', '2024-09-01', '4:30pm', 'Matchday 3', 'Pitch 1'),
(65, 'Giggaz', 'Whizzy', '2024-09-01', '5:00pm', 'Matchday 3', 'Pitch 1'),
(66, 'Bulembia', 'Historicals', '2024-09-01', '5:30pm', 'Matchday 3', 'Pitch 1'),
(67, 'Whizzy', 'Bulembia', '2024-09-01', '2:00pm', 'Matchday 3', 'Pitch 2'),
(68, 'Gwajwa', 'Vegas', '2024-09-01', '2:30pm', 'Matchday 3', 'Pitch 2'),
(69, 'Giggaz', 'Matrix', '2024-09-01', '3:00pm', 'Matchday 3', 'Pitch 2'),
(70, 'Warriors', 'Omwokyi', '2024-09-01', '3:30pm', 'Matchday 3', 'Pitch 2'),
(71, 'Benghazi', 'Elites', '2024-09-01', '4:30pm', 'Matchday 3', 'Pitch 2'),
(72, '2K3Formidables', 'Akasayi', '2024-09-01', '5:00pm', 'Matchday 3', 'Pitch 2'),
(73, 'Vegas', 'Karere', '2024-09-01', '5:30pm', 'Matchday 3', 'Pitch 2'),
(76, 'Omwokyi', 'Benghazi', '2024-09-15', '2:00pm', 'Matchday 4', 'Pitch 1'),
(77, 'Warriors', '2K3Formidables', '2024-09-15', '2:30pm', 'Matchday 4', 'Pitch 1'),
(78, 'Elites', 'Vegas', '2024-09-15', '3:00pm', 'Matchday 4', 'Pitch 1'),
(79, 'Akasayi', 'Bulembia', '2024-09-15', '3:30pm', 'Matchday 4', 'Pitch 1'),
(80, 'Karere', 'Matrix', '2024-09-15', '2:00pm', 'Matchday 4', 'Pitch 2'),
(81, 'Historicals', 'Giggaz', '2024-09-15', '2:30pm', 'Matchday 4', 'Pitch 2'),
(82, 'Gwajwa', 'Whizzy', '2024-09-15', '3:00pm', 'Matchday 4', 'Pitch 2'),
(83, '2K3Formidables', 'Omwokyi', '2024-09-15', '3:30pm', 'Matchday 4', 'Pitch 2'),
(84, 'Vegas', 'Benghazi', '2024-09-15', '4:30pm', 'Matchday 4', 'Pitch 2'),
(85, 'Bulembia', 'Warriors', '2024-09-15', '5:00pm', 'Matchday 4', 'Pitch 2'),
(86, 'Matrix', 'Elites', '2024-09-15', '5:30pm', 'Matchday 4', 'Pitch 2'),
(87, 'Giggaz', 'Akasayi', '2024-09-15', '4:30pm', 'Matchday 4', 'Pitch 1'),
(88, 'Whizzy', 'Karere', '2024-09-15', '5:00pm', 'Matchday 4', 'Pitch 1'),
(89, 'Gwajwa', 'Historicals', '2024-09-15', '5:30pm', 'Matchday 4', 'Pitch 1'),
(90, 'Omwokyi', 'Vegas', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(91, '2K3Formidables', 'Bulembia', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(92, 'Benghazi', 'Matrix', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(93, 'Warriors', 'Giggaz', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(94, 'Elites', 'Whizzy', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(95, 'Akasayi', 'Gwajwa', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(96, 'Karere', 'Historicals', '2024-09-29', '', 'Matchday 5', 'Pitch 1'),
(97, 'Bulembia', 'Omwokyi', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(98, 'Matrix', 'Vegas', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(99, 'Giggaz', '2K3Formidables', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(100, 'Whizzy', 'Benghazi', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(101, 'Gwajwa', 'Warriors', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(102, 'Historicals', 'Elites', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(103, 'Karere', 'Akasayi', '2024-09-29', '', 'Matchday 5', 'Pitch 2'),
(104, 'Omwokyi', 'Matrix', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(105, 'Bulembia', 'Giggaz', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(106, 'Vegas', 'Whizzy', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(107, '2K3Formidables', 'Gwajwa', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(108, 'Benghazi', 'Historicals', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(109, 'Warriors', 'Karere', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(110, 'Elites', 'Akasayi', '2024-10-13', '', 'Matchday 6', 'Pitch 1'),
(111, 'Giggaz', 'Omwokyi', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(112, 'Whizzy', 'Matrix', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(113, 'Gwajwa', 'Bulembia', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(114, 'Historicals', 'Vegas', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(115, 'Karere', '2K3Formidables', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(116, 'Akasayi', 'Benghazi', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(117, 'Elites', 'Warriors', '2024-10-13', '', 'Matchday 6', 'Pitch 2'),
(118, '2K3Formidables', 'Whizzy', '2024-12-08', '2:00pm', 'Matchday 7', 'Pitch 1'),
(119, 'Benghazi', 'Warriors', '2024-12-08', '2:30pm', 'Matchday 7', 'Pitch 1'),
(120, 'Karere', 'Elites', '2024-12-08', '3:00pm', 'Matchday 7', 'Pitch 1'),
(121, 'Gwajwa', 'Historicals', '2024-12-08', '3:30pm', 'Matchday 7', 'Pitch 1'),
(122, 'Whizzy', 'Benghazi', '2024-12-08', '4:30pm', 'Matchday 7', 'Pitch 1'),
(123, '2K3Formidables', 'Bulembia', '2024-12-08', '5:00pm', 'Matchday 7', 'Pitch 1'),
(124, 'Warriors', 'Gwajwa', '2024-12-08', '5:30pm', 'Matchday 7', 'Pitch 1'),
(125, 'Karere', 'Matrix', '2024-12-08', '2:00pm', 'Matchday 7', 'Pitch 2'),
(126, 'Omwokyi', 'Akasayi', '2024-12-08', '2:30pm', 'Matchday 7', 'Pitch 2'),
(127, 'Vegas', 'Giggaz', '2024-12-08', '3:00pm', 'Matchday 7', 'Pitch 2'),
(128, 'Bulembia', 'Elites', '2024-12-08', '3:30pm', 'Matchday 7', 'Pitch 2'),
(129, 'Historicals', 'Omwokyi', '2024-12-08', '4:30pm', 'Matchday 7', 'Pitch 2'),
(130, 'Matrix', 'Vegas', '2024-12-08', '5:00pm', 'Matchday 7', 'Pitch 2'),
(131, 'Akasayi', 'Giggaz', '2024-12-08', '5:30pm', 'Matchday 7', 'Pitch 2');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `game_week` varchar(50) NOT NULL,
  `season` int(7) NOT NULL,
  `filter_type` varchar(100) NOT NULL,
  `match_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file_name`, `game_week`, `season`, `filter_type`, `match_date`) VALUES
(1, 'GODS3622.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(2, 'GODS3623.JPG', 'week1', 6, 'filter-week1', '2024-08-04'),
(3, '1.png', 'week1', 6, 'filter-week1', '2024-08-04'),
(4, 'GODS3908.JPG', 'week1', 6, 'filter-week1', '2024-08-04'),
(5, 'GODS3924.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(6, 'GODS3916.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(7, 'GODS3904.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(8, '2.png', 'Week1', 6, 'filter-week1', '2024-08-04'),
(9, 'GODS3721.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(10, 'GODS3622.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(11, 'GODS3733.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(12, 'GODS3623.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(13, '5.png', 'Week1', 6, 'filter-week1', '2024-08-04'),
(14, 'GODS3782.JPG', 'Week1', 6, 'filter-week1', '2024-08-04'),
(15, '6.png', 'Week1', 6, 'filter-week1', '2024-08-04'),
(16, 'img1.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(20, 'wk3_1.jpg', 'week1', 6, 'yes', '2024-01-01'),
(22, 'img2.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(23, 'img3.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(24, 'img4.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(25, 'img5.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(26, 'img6.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(27, 'img7.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(28, 'img8.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(29, 'img9.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(30, 'img10.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(31, 'img11.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(32, 'img12.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(33, 'img13.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(34, 'img14.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(35, 'img15.jpg', 'Week2', 6, 'filter-week2', '2024-08-18'),
(36, 'wk3_1.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(37, 'wk3_3.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(38, 'wk3_4.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(39, 'wk3_5.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(40, 'wk3_6.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(41, 'wk3_7.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(42, 'wk3_8.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(43, 'wk3_9.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(44, 'wk3_10.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(45, 'wk3_11.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(46, 'wk3_12.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(47, 'wk3_13.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(48, 'wk3_14.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(49, 'wk3_15.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(50, 'wk3_16.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(51, 'wk3_17.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(52, 'wk3_18.jpg', 'week1', 6, 'filter-week3', '2024-09-01'),
(53, 'wk3_19.jpg', 'week1', 6, 'filter-week3', '2024-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `kltable`
--

CREATE TABLE `kltable` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `played` int(11) DEFAULT 0,
  `won` int(11) DEFAULT 0,
  `drawn` int(11) DEFAULT 0,
  `lost` int(11) DEFAULT 0,
  `goals_for` int(11) DEFAULT 0,
  `goals_against` int(11) DEFAULT 0,
  `goal_difference` int(11) DEFAULT 0,
  `LP` int(11) DEFAULT 0,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kltable`
--

INSERT INTO `kltable` (`id`, `team_id`, `played`, `won`, `drawn`, `lost`, `goals_for`, `goals_against`, `goal_difference`, `LP`, `points`) VALUES
(31, 11, 14, 5, 3, 6, 34, 51, -17, 7, 25),
(32, 7, 14, 7, 0, 7, 36, 36, 0, 10, 31),
(33, 12, 12, 1, 1, 10, 10, 31, -21, 7, 11),
(34, 13, 14, 12, 0, 2, 57, 12, 45, 14, 50),
(35, 10, 14, 8, 2, 4, 31, 18, 13, 12, 38),
(36, 2, 14, 2, 0, 12, 10, 45, -35, 3, 9),
(37, 8, 14, 12, 0, 2, 60, 15, 45, 12, 48),
(38, 9, 14, 7, 0, 7, 18, 24, -6, 8, 29),
(39, 1, 14, 2, 0, 12, 14, 47, -33, 3, 9),
(40, 4, 14, 3, 1, 10, 29, 52, -23, 4, 14),
(41, 5, 13, 4, 0, 9, 35, 54, -19, 4, 16),
(42, 14, 14, 13, 1, 0, 40, 9, 31, 13, 53),
(43, 3, 13, 7, 1, 5, 28, 17, 11, 12, 34),
(44, 6, 14, 7, 3, 4, 30, 21, 9, 2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `season` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `match_results`
--

CREATE TABLE `match_results` (
  `id` int(11) NOT NULL,
  `home_team_id` int(11) DEFAULT NULL,
  `away_team_id` int(11) DEFAULT NULL,
  `home_team_goals` int(11) DEFAULT NULL,
  `away_team_goals` int(11) DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `home_team_lady_played` tinyint(1) DEFAULT 0,
  `away_team_lady_played` tinyint(1) DEFAULT 0,
  `game_week` varchar(20) NOT NULL,
  `win_type` varchar(20) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_results`
--

INSERT INTO `match_results` (`id`, `home_team_id`, `away_team_id`, `home_team_goals`, `away_team_goals`, `match_date`, `home_team_lady_played`, `away_team_lady_played`, `game_week`, `win_type`) VALUES
(1, 11, 7, 1, 11, '2024-08-04', 0, 0, 'week1', 'Normal'),
(2, 12, 13, 0, 4, '2024-08-04', 1, 1, 'week1', 'Normal'),
(3, 10, 2, 1, 0, '2024-08-04', 1, 1, 'week1', 'Normal'),
(4, 8, 11, 8, 0, '2024-08-04', 1, 1, 'week1', 'Normal'),
(5, 9, 7, 3, 2, '2024-08-04', 0, 1, 'week1', 'Normal'),
(6, 13, 10, 2, 1, '2024-08-04', 1, 1, 'week1', 'Normal'),
(7, 1, 12, 1, 2, '2024-08-04', 1, 1, 'week1', 'Normal'),
(8, 4, 5, 1, 10, '2024-08-04', 0, 0, 'week1', 'Normal'),
(9, 14, 8, 2, 1, '2024-08-04', 1, 1, 'week1', 'Normal'),
(10, 3, 1, 7, 1, '2024-08-04', 1, 0, 'week1', 'Normal'),
(11, 5, 6, 5, 4, '2024-08-04', 1, 0, 'week1', 'Normal'),
(12, 6, 9, 0, 1, '2024-08-04', 0, 0, 'week1', 'Normal'),
(13, 3, 4, 2, 0, '2024-08-04', 1, 0, 'week1', 'Normal'),
(14, 2, 14, 0, 3, '2024-08-04', 1, 1, 'week1', 'Normal'),
(15, 11, 9, 1, 2, '2024-08-18', 1, 0, 'Week2', 'Normal'),
(16, 8, 2, 3, 0, '2024-08-18', 1, 0, 'Week2', 'Normal'),
(17, 7, 5, 4, 3, '2024-08-18', 1, 0, 'Week2', 'Normal'),
(18, 14, 13, 1, 0, '2024-08-18', 1, 1, 'Week2', 'Normal'),
(19, 12, 6, 0, 2, '2024-08-18', 0, 0, 'Week2', 'Walkover'),
(20, 10, 1, 4, 0, '2024-08-18', 0, 0, 'Week2', 'Normal'),
(21, 6, 3, 2, 2, '2024-08-18', 1, 1, 'Week2', 'Normal'),
(22, 4, 12, 2, 0, '2024-08-18', 0, 1, 'Week2', 'Walkover'),
(23, 4, 10, 2, 4, '2024-08-18', 0, 1, 'Week2', 'Normal'),
(24, 2, 11, 0, 1, '2024-08-18', 0, 0, 'Week2', 'Normal'),
(25, 13, 8, 0, 2, '2024-08-18', 1, 1, 'Week2', 'Normal'),
(26, 9, 5, 3, 1, '2024-08-18', 1, 0, 'Week2', 'Normal'),
(27, 3, 7, 1, 0, '2024-08-18', 1, 1, 'Week2', 'Normal'),
(28, 14, 1, 3, 0, '2024-08-18', 1, 0, 'Week2', 'Normal'),
(29, 2, 13, 0, 15, '2024-09-01', 0, 1, 'Week3', 'Normal'),
(30, 9, 3, 2, 0, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(31, 11, 5, 12, 2, '2024-09-01', 0, 0, 'Week3', 'Normal'),
(32, 8, 1, 12, 1, '2024-09-01', 0, 0, 'Week3', 'Normal'),
(33, 10, 7, 1, 3, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(34, 6, 14, 2, 3, '2024-09-01', 0, 1, 'Week3', 'Normal'),
(35, 4, 8, 3, 7, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(36, 14, 4, 5, 2, '2024-09-01', 1, 0, 'Week3', 'Normal'),
(37, 7, 12, 3, 2, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(38, 6, 10, 2, 0, '2024-09-01', 0, 1, 'Week3', 'Normal'),
(39, 13, 11, 4, 1, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(40, 3, 5, 3, 2, '2024-09-01', 1, 0, 'Week3', 'Normal'),
(41, 1, 2, 2, 0, '2024-09-01', 2, 0, 'Week3', 'Walkover'),
(42, 12, 9, 0, 4, '2024-09-01', 1, 1, 'Week3', 'Normal'),
(43, 4, 13, 1, 5, '2024-09-15', 0, 1, 'Week4', 'Normal'),
(44, 10, 5, 4, 2, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(45, 3, 11, 7, 0, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(46, 13, 1, 4, 3, '2024-09-15', 1, 0, 'Week4', 'Normal'),
(47, 2, 4, 5, 2, '2024-09-15', 0, 0, 'Week4', 'Normal'),
(48, 6, 2, 1, 0, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(49, 14, 9, 3, 0, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(50, 7, 8, 1, 2, '2024-09-15', 0, 1, 'Week4', 'Normal'),
(51, 9, 10, 1, 3, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(52, 8, 6, 0, 2, '2024-09-15', 1, 0, 'Week4', 'Normal'),
(53, 7, 14, 1, 5, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(54, 1, 11, 2, 3, '2024-09-15', 1, 1, 'Week4', 'Normal'),
(55, 6, 13, 1, 4, '2024-09-29', 0, 1, 'Week5', 'Normal'),
(56, 4, 11, 2, 2, '2024-09-29', 0, 0, 'Week5', 'Normal'),
(57, 1, 4, 3, 2, '2024-09-29', 0, 0, 'Week5', 'Normal'),
(58, 3, 10, 1, 0, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(59, 12, 11, 3, 4, '2024-09-29', 1, 0, 'Week5', 'Normal'),
(60, 2, 9, 2, 0, '2024-09-29', 0, 1, 'Week5', 'Normal'),
(61, 10, 12, 2, 1, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(62, 7, 13, 1, 2, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(63, 5, 8, 1, 4, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(64, 2, 7, 2, 4, '2024-09-29', 0, 1, 'Week5', 'Normal'),
(65, 9, 8, 0, 5, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(66, 5, 14, 1, 6, '2024-09-29', 1, 1, 'Week5', 'Normal'),
(67, 6, 1, 2, 1, '2024-09-29', 0, 0, 'Week5', 'Normal'),
(69, 12, 14, 0, 1, '2024-10-13', 0, 1, 'Week6', 'Normal'),
(70, 4, 6, 2, 5, '2024-10-13', 0, 0, 'Week6', 'Normal'),
(71, 11, 10, 2, 2, '2024-10-13', 0, 1, 'Week6', 'Normal'),
(72, 8, 12, 2, 1, '2024-10-13', 1, 0, 'Week6', 'Normal'),
(73, 7, 4, 2, 1, '2024-10-13', 1, 1, 'Week6', 'Normal'),
(74, 3, 2, 4, 1, '2024-10-13', 1, 0, 'Week6', 'Normal'),
(75, 5, 2, 3, 0, '2024-10-13', 0, 0, 'Week6', 'Normal'),
(76, 7, 1, 2, 0, '2024-10-13', 1, 0, 'Week6', 'Walkover'),
(77, 3, 14, 1, 3, '2024-10-13', 1, 1, 'Week6', 'Normal'),
(78, 3, 8, 0, 2, '2024-10-13', 1, 1, 'Week6', 'Normal'),
(79, 13, 9, 3, 0, '2024-10-13', 1, 1, 'Week6', 'Normal'),
(80, 5, 13, 1, 6, '2024-10-13', 0, 1, 'Week6', 'Normal'),
(81, 6, 11, 3, 3, '2024-10-13', 0, 0, 'Week6', 'Normal'),
(83, 1, 9, 0, 2, '2024-10-13', 0, 0, 'Week6', 'Walkover'),
(84, 10, 14, 1, 1, '2024-10-13', 1, 1, 'Week6', 'Normal'),
(85, 7, 8, 2, 7, '2024-12-08', 0, 0, 'Week7', 'Normal'),
(86, 8, 11, 5, 2, '2024-12-08', 1, 1, 'Week7', 'Normal'),
(87, 1, 4, 0, 2, '2024-12-08', 0, 1, 'Week7', 'Walkover'),
(88, 9, 10, 0, 2, '2024-12-08', 0, 0, 'Week7', 'Walkover'),
(89, 5, 4, 2, 7, '2024-12-08', 0, 1, 'Week7', 'Normal'),
(90, 2, 11, 0, 2, '2024-12-08', 0, 1, 'Week7', 'Walkover'),
(91, 12, 6, 0, 0, '2024-12-08', 0, 0, 'Week7', 'Normal'),
(92, 1, 14, 0, 2, '2024-12-08', 0, 0, 'Week7', 'Walkover'),
(93, 13, 3, 2, 0, '2024-12-08', 1, 0, 'Week7', 'Walkover'),
(94, 14, 3, 2, 0, '2024-12-08', 1, 1, 'Week7', 'Normal'),
(95, 9, 5, 0, 2, '2024-12-08', 0, 0, 'Week7', 'Walkover'),
(96, 10, 12, 6, 1, '2024-12-08', 1, 0, 'Week7', 'Normal'),
(97, 6, 2, 4, 0, '2024-12-08', 0, 0, 'Week7', 'Normal'),
(98, 13, 7, 6, 0, '2024-12-08', 1, 0, 'Week7', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(7) NOT NULL,
  `created_on` date NOT NULL,
  `body` longtext NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'News'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_on`, `body`, `file_name`, `title`, `type`) VALUES
(1, '2024-07-30', 'Having been the official sponsor for Gwajwa FC last season, The Fridge Guy finally came to a conclusion and decided to extend  contract as their official sponsor in season 6. Gwajwa FC were delighted to sign this contract and happy about the partnership with The Fridge Guy and promised to keep working harder to promote and market the brand for more future benefits', 'bob.png', 'Official sponsor for Gwajwa FC', 'News'),
(3, '2024-07-31', 'KHOSA League season six is set to begin on 4th August with all the teams participating, the likes of Gwajwa, Karere, Warriors, Giggaz,  Elites, Vegas FC, Matrix FC, Historicals, Akasayi, Benghazi, Bulembia, Whizzy FC and Omwokyi FC which is excited to have their first KHOSA League experience this season. The Games will be played from Equinox Sports & Fitness Center, Kurambiro', 'season6.jpg', 'KHOSA League Season 6', 'News'),
(4, '2024-08-03', 'The Club is delighted to confirm the signing of Wensi Kevin from Omwokyi FC.\r\nWensi signed a whole season contract that will keep him playing for the Epitome.', 'transfer-wensi.png', 'Epitom Warriors sign Wensi Kevin from Omwokyi', 'Transfers'),
(5, '2024-08-03', 'The Epitome are delighted to announce the arrival of Herbert Kajura, who is the second signing of season 6 transfer window.\r\nThe young striker plenty of experience in National and international football, having spent years as a player for the School(Kigezi High School).', 'transfer-herbert.png', 'Epitome Warriors sign Kajura Herbert from Katara', 'Transfers'),
(6, '2024-08-24', 'Whizzy FC is delighted to announce the arrival of Victor Kwikiriza, who is their first signing in season 6 transfer window.', 'transferVictor.jpg', 'Whizzy FC signs Victor Kwikiriza from Matrix FC', 'Transfers'),
(7, '2024-08-24', 'The \"PLAYER OF THE WEEK\" for Matchday 2 is none other than Mandela Alex from Historicals FC', 'POTW2.jpg', 'Player of the week', 'Player Of The Week'),
(8, '2024-08-24', 'Meet the best players that made it to the \"TEAM OF THE WEEK\" list after a number of shots, assists, defending and goal keeping analysis from the technical team.\r\nGK: Bosco (Matrix) <br>\r\nRight Back: Bafana (Karere) <br>\r\nAttacking Mid: G. Abasa (Whizzy) <br>\r\nLeft Back: Mandela (Historicals) <br>\r\nStriker: Amon (Benghazi) <br>\r\nStriker: Francis (Matrix) <br>\r\nStriker: Patricia (Whizzy) <br>\r\n\r\n\r\n', 'TOTW2.jpg', 'Team Of The Week Matchday 2', 'Team Of The Week');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(7) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'placeholder.png',
  `goals` int(7) NOT NULL DEFAULT 0,
  `about` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `image`, `goals`, `about`, `name`, `team`, `role`) VALUES
(1, 'Kalongo_John Paul.jpg', 2, '2005 - 2008 Kigezi high midfield sensation that most of the students related to the Brazilian Ronaldinho.', 'Kalongo John Paul', '2K3Formidables', ' Midfielder'),
(2, 'placeholder.jpg', 4, '-----', 'Apollo', '2K3Formidables', '-----'),
(3, 'placeholder.jpg', 2, '-----', 'Jackson', '2K3Formidables', '-----'),
(4, 'placeholder.jpg', 1, '-----', 'Bito', '2K3Formidables', '-----'),
(5, 'placeholder.jpg', 1, '-----', 'Carlos', '2K3Formidables', '-----'),
(6, 'placeholder.jpg', 1, '-----', 'Paul Busingye', '2K3Formidables', '-----'),
(7, 'placeholder.jpg', 1, '-----', 'Paul Kanot', '2K3Formidables', '-----'),
(8, 'placeholder.jpg', 8, '--- ', 'Jelly', 'Akasayi', 'Striker'),
(9, 'bobm.jpg', 0, 'Mwine Bob\r\nTeam captain of Akasayi Fc 2007-2012 <br>\r\nAged 30yrs <br>\r\nLoves football, swimming, watching movies <br>', 'Bob Mwine', 'Akasayi', 'Goal Keeper'),
(10, 'placeholder.jpg', 1, '-----', 'Balamu', 'Akasayi', '-----'),
(11, 'placeholder.jpg', 1, '-----', 'Shem', 'Akasayi', '-----'),
(12, 'placeholder.jpg', 8, '---', 'Hamza', 'Benghazi', 'Striker'),
(13, 'placeholder.jpg', 10, '---', 'Andrew', 'Benghazi', 'Striker'),
(14, 'amon_ndugu.jpg', 4, 'Easy to access but hard to handle', 'Niwandinda Amon Ndugu', 'Benghazi', 'Midfielder'),
(15, 'placeholder.jpg', 2, '-----', 'Allan', 'Benghazi', '-----'),
(16, 'placeholder.jpg', 1, '-----', 'Joseph', 'Benghazi', '-----'),
(17, 'placeholder.jpg', 1, '-----', 'Tonny', 'Benghazi', '-----'),
(18, 'irinatwe_andrew.jpg', 0, 'Kigezi high School class of 2008', 'Irinitwe andrew', 'Bulembia', ' Midfielder'),
(19, 'Niwagaba_Methodias.jpg', 0, ' Class of 2008 - 13', 'Niwagaba Methodias', 'Bulembia', ' Midfielder'),
(20, 'Niyonsaba_Brian.jpg', 1, 'KHS OB since 2008-2013', ' Niyonsaba Brian', 'Bulembia', ' Striker'),
(21, 'kwikiriza_wilson.jpg', 0, 'Agent of all seasons', 'Kwikiriza Wilson', 'Bulembia', 'Striker'),
(22, 'placeholder.jpg', 0, ' ---', 'Naamara Eric', 'Bulembia', 'Goal Keeper'),
(23, 'Niwagab_Darsan.jpg', 2, 'Passionate about soccer and socializing which has led me to play in university games and corporate leagues', 'Niwagaba Darsan', 'Bulembia', 'Midfielder'),
(24, 'Taritwebwa_Eric.jpg', 0, 'Joined khs in 2008 in S1', 'Taritwebwa Eric', 'Bulembia', 'Defender'),
(25, 'tweheyo_tommy.jpg', 0, 'Name :Tweheyo Tommy \r\nAge: 32\r\nCurrent role: Banker\r\nInterests: Business \r\nHobby: Football \r\nPosition on field: forward \r\nLocation: Kampala \r\nPlace of birth: Kabale \r\nStatus: married', 'Tommy Tweheyo', 'Bulembia', 'Winger'),
(26, 'placeholder.jpg', 3, '-----', 'Francis', 'Bulembia', '-----'),
(27, 'placeholder.jpg', 4, '-----', 'Muhumuza Tom', 'Bulembia', '-----'),
(28, 'placeholder.jpg', 2, '-----', 'Ham', 'Bulembia', '-----'),
(29, 'placeholder.jpg', 2, '-----', 'Robbin', 'Bulembia', '-----'),
(30, 'Owence.jpg', 12, '---', 'Owence', 'Elites', 'Striker'),
(31, 'placeholder.jpg', 9, '---', ' Etoo', 'Elites', ' Striker'),
(32, 'Chriis_Parker.jpg', 0, 'Lawyer, Teacher and Medical Professional', 'Chriis Parker', 'Elites', ' GK & Winger'),
(33, 'muhima_brian.jpg', 0, 'I love this game', 'Muhima Brian', 'Elites', 'Midfielder'),
(34, 'tusiime_dickson.jpg', 0, 'Munyankole', 'Tusiime Dickson', 'Elites', 'Midfielder'),
(35, 'martin_mbaga.jpg', 0, ' Elites team member', 'Martin Mbaga', 'Elites', 'Midfielder / Defender'),
(36, 'liberty.jpg', 2, ' Legend', 'Kukundakwe Liberty', 'Elites', ' Midfielder'),
(37, 'tusiime_arnold.jpg', 0, ' ---', 'Tusiime Arnold', 'Elites', ' Winger'),
(38, 'placeholder.jpg', 3, '-----', 'Tush', 'Elites', '-----'),
(39, 'placeholder.jpg', 2, '-----', 'Bernet', 'Elites', '-----'),
(40, 'placeholder.jpg', 1, '-----', 'Ivaney', 'Elites', '-----'),
(41, 'placeholder.jpg', 6, '---', 'Jordan', 'Giggaz', 'Striker'),
(42, 'arinda_kenneth.jpg', 4, 'Simplicity', 'Kenneth Arinda', 'Giggaz', 'Midfielder'),
(43, 'Bob_Twinamasiko.jpg', 2, 'I love playing football in the KHOSA LEAGUE for both health and social networking reasons', 'Bob Twinamasiko', 'Giggaz', ' Midfielder'),
(44, 'Owamani_Ambrose.jpg', 3, 'Simple', 'Owamani Ambrose', 'Giggaz', 'Midfielder'),
(45, 'The_Godfather.jpg', 0, 'They dont make men like me anymore. I am the last of a dying rare breed', 'The God Father', 'Giggaz', 'Midfielder'),
(46, 'placeholder.jpg', 4, '-----', 'Donn muruta', 'Giggaz', '-----'),
(47, 'placeholder.jpg', 1, '-----', 'Benli', 'Giggaz', '-----'),
(48, 'michael_ankunda.jpg', 10, '---', 'Michael Ankunda', 'Gwajwa', 'Striker'),
(49, 'placeholder.jpg', 9, '--- ', 'Timothy Niwagaba', 'Gwajwa', ' Striker'),
(50, 'Davis_grace.jpg', 3, ' NIYONGABO Davis Grace, born and raised from the western part of Uganda, Kisoro district, Nyarusiza sub-county, Mubuga village. \r\nJoined Kigezi high school in 2012 and was there for full six years.  ', 'Niyongabo Davis .G', 'Gwajwa', 'Goal Keeper  '),
(51, 'Ernst_Dan.jpg', 3, 'Am an accountant by profession and a passionate footballer ', 'Ashaba Ernest Dan ', 'Gwajwa', ' Defender '),
(52, 'Mark_Ayebare.jpg', 1, 'Architect', 'Ayebare Mark', 'Gwajwa', ' Midfielder'),
(53, 'akatwijuka_Timothy.jpg', 1, ' ---', 'Akatwijuka Timothy', 'Gwajwa', 'Midfielder'),
(54, 'jude.jpg', 0, '5ft5\", 60kg  ', 'Ahimbisibwe Jude', 'Gwajwa', ' Left Back'),
(55, 'agabaEdwin.jpg', 0, ' Rukiga district born', ' Agaba Edwin', 'Gwajwa', ' Winger'),
(56, 'atumanya_abia.jpg', 0, 'Low budget ramos', ' Atumanya Abia', 'Gwajwa', 'Defender'),
(57, 'Akandonda_Elly.jpg', 0, 'I’m a medic and good with socializing', 'Elly Akandonda', 'Gwajwa', 'Winger'),
(58, 'larma_jim.jpg', 0, ' All is me', 'Jim Manzi', 'Gwajwa', 'Midfielder'),
(59, 'Med_Edgar.jpg', 0, ' ---', 'Musinguzi Edgar', 'Gwajwa', 'Defender'),
(60, 'Nasasira_Bruno.jpg', 0, 'Male Ugandan and Kigezi High School OB class of 2012', ' Nasasira Bruno', 'Gwajwa', 'Defender'),
(61, 'twinamasiko_benjamin.jpg', 0, ' First things first ⚽⚽⚽', 'Twinamasiko Benjamin', 'Gwajwa', 'Defender'),
(62, 'marion.jpg', 0, 'My goal is to support my teammates in any way possible and earning them an extra point just by being in the pitch', 'Marion Niwahereza', 'Gwajwa', 'Striker'),
(63, 'placeholder.jpg', 3, '-----', 'Clovis', 'Gwajwa', '-----'),
(64, 'Mandela.jpg', 12, '--- ', 'Mandela Alex', 'Historicals', 'Striker'),
(65, 'placeholder.jpg', 6, '---', 'Kefa', 'Historicals', 'Striker'),
(66, 'placeholder.jpg', 6, '--- ', 'Simon', 'Historicals', 'Striker'),
(67, 'placeholder.jpg', 5, '---', 'Janjali', 'Historicals', 'Striker'),
(68, 'placeholder.jpg', 4, '--- ', 'Jacob', 'Historicals', 'Striker'),
(69, 'Kajebe_osh.jpg', 0, 'Artist Statement\r\nAs an artist deeply rooted in my Ugandan heritage, I am driven by a passion for exploring and revitalizing our cultural practices to address contemporary challenges and ensure their preservation for future generations. My work is profoundly influenced by the restitution movement, emphasizing the importance of reclaiming and celebrating our cultural narratives and material heritage.\r\nThrough diverse mediums, including woodblock prints, painting, textiles, fashion, and curation, I delve into the rich tapestry of Ugandan traditions. My artistic practice is a dialogue between the past, present, and future, seeking to uncover the interconnectedness of our histories and the continuous evolution of our cultural identity.\r\nI believe in the power of art to serve as a bridge across time, bringing ancestral wisdom into contemporary contexts and fostering a deeper understanding of our collective journey. By documenting and reliving our cultural practices, I aim to create works that resonate with both personal and universal themes, inspiring reflection and dialogue.\r\nMy exploration of materiality and cultural narratives is a testament to my commitment to honoring and preserving the essence of our heritage. Through my art, I invite viewers to join me in this journey of rediscovery, reflection, and a re-imagination  of our shared cultural legacy\r\n', 'Kajebe Jacob Joshua', 'Historicals', 'Striker'),
(70, 'Beino_Ivan.jpg', 0, 'I am Beinomugisha Ivan ', 'Beinomugisha Ivan ', 'Historicals', 'Midfielder '),
(71, 'tagobya.jpg', 0, 'Sports lawyer Advocate at CCG, Vice President Khosa. Passionate about sports  ', 'Tagobya Natasha R.', 'Historicals', 'Midfielder '),
(72, 'ibra_niwa.jpg', 1, ' Ugandan', 'Namanya Ibrahim', 'Historicals', 'Defender'),
(73, 'conscious.jpg', 4, 'Name: Niwabiine conscious (LORD QS)<br>\r\nAge: 21 <br>\r\nPosition: Center forward <br>\r\nShirt no: 11 <br>\r\nStrengths: speed, shot power <br>\r\nClub: Historicals fc <br>\r\nHistoricals experience: 4 seasons<br>\r\nRole model: myself <br>\r\nFavorite club: Chelsea<br>\r\nProfession: Quantity surveyor<br>', 'Niwabiine Conscious', 'Historicals', 'Striker'),
(74, 'boris_niwa.jpg', 1, 'Nbr', 'Natumanya Boris R.', 'Historicals', ' Coach Player'),
(75, 'placeholder.jpg', 3, '-----', 'Atuheire Osbert', 'Historicals', '-----'),
(76, 'placeholder.jpg', 2, '-----', 'Joseph', 'Historicals', '-----'),
(77, 'placeholder.jpg', 1, '-----', 'solomon', 'historicals', '-----'),
(78, 'placeholder.jpg', 1, '-----', 'Phillip M', 'Historicals', '-----'),
(79, 'placeholder.jpg', 6, '---', 'Beckham', 'Karere', 'Striker'),
(80, 'Naamara_Hannington.jpg', 0, 'I represent team Karere Giants in Nyaruju and I am the President of Indomitable Class (2006-2011)', 'Hannington Naamara', 'Karere', 'Defender'),
(81, 'placeholder.jpg', 2, '-----', 'Benson', 'Karere', '-----'),
(82, 'placeholder.jpg', 2, '-----', 'brian', 'karere', '-----'),
(83, 'placeholder.jpg', 1, '-----', 'Bright', 'Karere', '-----'),
(84, 'placeholder.jpg', 1, '-----', 'Bright moi', 'karere', '-----'),
(85, 'placeholder.jpg', 1, '-----', 'Deborah', 'Karere', '-----'),
(86, 'placeholder.jpg', 1, '-----', 'Michael', 'Karere', '-----'),
(87, 'placeholder.jpg', 1, '-----', 'Nelson', 'Karere', '-----'),
(88, 'placeholder.jpg', 6, '-----', 'Hope', 'Matrix', '-----'),
(89, 'placeholder.jpg', 3, '-----', 'Jackson', 'Matrix', '-----'),
(90, 'placeholder.jpg', 3, '-----', 'Solomon', 'Matrix', '-----'),
(91, 'placeholder.jpg', 2, '-----', 'Francis', 'Matrix', '-----'),
(92, 'placeholder.jpg', 2, '-----', 'Tembo', 'Matrix', '-----'),
(93, 'placeholder.jpg', 1, '-----', 'bosco', 'matrix', '-----'),
(94, 'placeholder.jpg', 1, '-----', 'David', 'Matrix', '-----'),
(95, 'placeholder.jpg', 1, '-----', 'Kevin', 'Matrix', '-----'),
(96, 'placeholder.jpg', 1, '-----', 'Khan', 'Matrix', '-----'),
(97, 'placeholder.jpg', 4, '---', 'Alex', 'Omwokyi', ' Striker'),
(98, 'placeholder.jpg', 7, '---', 'Denis', 'Omwokyi', 'Striker'),
(99, 'placeholder.jpg', 1, '-----', 'Joff', 'Omwokyi', '-----'),
(100, 'placeholder.jpg', 4, '-----', 'Duncan', 'Omwokyi', '-----'),
(101, 'placeholder.jpg', 3, '-----', 'Bright', 'Omwokyi', '-----'),
(102, 'placeholder.jpg', 3, '-----', 'Edgar', 'Omwokyi', '-----'),
(103, 'placeholder.jpg', 2, '-----', 'Davis', 'Omwokyi', '-----'),
(104, 'placeholder.jpg', 1, '-----', 'Kayija', 'Omwokyi', '-----'),
(105, 'placeholder.jpg', 1, '-----', 'Kevin', 'Omwokyi', '-----'),
(106, 'placeholder.jpg', 2, '-----', 'Seth Ramathan', 'Omwokyi', '-----'),
(107, 'placeholder.jpg', 1, '-----', 'Timothy', 'Omwokyi', '-----'),
(108, 'placeholder.jpg', 4, '-----', 'Culture', 'Vegas', '-----'),
(109, 'placeholder.jpg', 2, '-----', 'Edgar', 'Vegas', '-----'),
(110, 'placeholder.jpg', 3, '-----', 'Dickson', 'Vegas', '-----'),
(111, 'placeholder.jpg', 1, '-----', 'Allan', 'Vegas', '-----'),
(112, 'Herbert.jpg', 21, '---', 'Kajura Herbert', 'Warriors', 'Striker'),
(113, 'placeholder.jpg', 11, '---', ' Peter', 'Warriors', 'Striker'),
(114, 'placeholder.jpg', 6, 'Am the thinnest mukiga with the tallest mind on football ', 'Byarugaba Godet ', 'Warriors', 'Midfielder '),
(115, 'Joakim_Mucunguzi.jpg', 3, '---', 'Joakim Mucunguzi', 'Warriors', 'Defender /Midfielder'),
(116, 'akatwi_amon.jpg', 0, ' KHS class of 2010-2015, 6 years and an Epitome. Quantity Surveyor by profession, passionate about sports at large and world affairs.', 'Akatwijuka Amon', 'Warriors', 'Defender /Striker'),
(117, 'precious_tugume.jpg', 1, 'God fearing, social, practicing architect, CEO level7 architecture & design studio ', 'Akampurira Precious Tugume', 'Warriors', ' Striker'),
(118, 'byamugisha_isaac.jpg', 1, 'Good Character ', 'Byamugisha isaac ', 'Warriors', 'Goal Keeper '),
(119, 'BYAMUKAMA_ISAAC.jpg', 1, 'Married , health professional', 'Byamukama Isaac', 'Warriors', 'Goal Keeper'),
(120, 'Bannet_pro.jpg', 0, ' MCO', 'Gumisiriza Bannet', 'Warriors', 'Midfielder'),
(121, 'ndrea - KATUREEBE ANDREW.jpg', 0, 'Katureebe Andrew, born on 17th dec 1993. I am a  talented and tenacious football defender known for my exceptional defensive skills and leadership on the field. Standing at 1.5m  and possessing a strong physical presence, I combine my natural athleticism with an acute understanding of the game, making me a formidable opponent for any striker.\r\nMy football journey began at a young age, showcasing my potential in local youth leagues. My passion and dedication to the sport earned me a spot in Khs First team, where I honed my skills and developed a reputation as a reliable and hard-working defender. My ability to read the game, make crucial tackles, and intercept passes quickly set me apart from my peers.\r\nOff the field, I am known for my humility and dedication to giving back to the community.I actively participate in youth development programs, sharing my knowledge and inspiring the next generation of footballers.\r\nI continue to be a vital asset to my team, bringing experience, leadership, and an unwavering defensive prowess that makes me one of the most respected defenders in the league.', 'Katureebe Andrew', 'Warriors', 'Defender'),
(122, 'Kakuru_Racheal.jpg', 0, 'Very passionate about sports', 'Racheal Ainembabazi', 'Warriors', 'Striker'),
(123, 'placeholder.jpg', 3, '-----', 'Aggrey', 'Warriors', '-----'),
(124, 'placeholder.jpg', 1, '-----', 'Judita', 'Warriors', '-----'),
(125, 'placeholder.jpg', 1, '-----', 'Justus', 'Warriors', '-----'),
(126, 'placeholder.jpg', 1, '-----', 'Kevin', 'Warriors', '-----'),
(127, 'placeholder.jpg', 1, '-----', 'Rogers Bazirake', 'Warriors', '-----'),
(128, 'placeholder.jpg', 11, '---', 'Kendo Godwin', 'Whizzy', ' Striker'),
(129, 'placeholder.jpg', 5, '--- ', 'Patricia', 'Whizzy', ' Striker'),
(130, 'placeholder.jpg', 9, '-----', 'Abaasa God', 'Whizzy', '-----'),
(131, 'placeholder.jpg', 3, '-----', 'Aine', 'Whizzy', '-----'),
(132, 'placeholder.jpg', 3, '-----', 'Victor', 'Whizzy', '-----'),
(133, 'placeholder.jpg', 2, '-----', 'Eddy', 'Whizzy', '-----'),
(134, 'placeholder.jpg', 1, '-----', 'Rutatina Desmond', 'Whizzy', '-----'),
(135, 'placeholder.jpg', 1, '-----', 'Samuel', 'Whizzy', '-----'),
(136, 'placeholder.jpg', 1, '-----', 'Chrispus', 'Elites', '-----'),
(137, 'placeholder.jpg', 4, '-----', 'Donald', 'Giggaz', '-----'),
(138, 'placeholder.jpg', 2, '-----', 'Morgan', 'Matrix', '-----'),
(139, 'placeholder.jpg', 2, '-----', 'Andrew', 'Elites', '-----'),
(140, 'placeholder.jpg', 1, '-----', 'Don Ali', 'Benghazi', '-----'),
(141, 'placeholder.jpg', 2, '-----', 'Mugabo', 'Benghazi', '-----');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `image`, `category`, `title`, `vendor`, `contact_phone`, `contact_email`, `price`, `stock`, `date_posted`) VALUES
(1, 'Black Hood', 'hoodie-black.svg', 'Hoodie', 'Black Hood, Size -> L', 'Obuntu Technologies', '+256779264619', 'obuntutechnologies@gmail.com', '50000', 10, '2024-12-08'),
(2, 'Grey cap', 'cap-grey.png', 'Caps', '', 'Manzi Arts', '+256757542857', 'manziarts@gmail.com', '20000', 20, '2024-12-07'),
(3, 'Golden Cup', 'golden-cup-black.png', 'Cups', 'Golden cup 500ml', 'AM Consults', '+256 779264619', 'amconsults@gmail.com', '25000', 50, '2024-12-06'),
(4, 'V-Tshirt - red', 'v-tshirt.png', 'Tshirts', 'V neck Tshirt, black, small size', 'Pam Collections', '+256779264619', 'pamcollections256@gmail.com', '20000', 50, '2024-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `scorers`
--

CREATE TABLE `scorers` (
  `id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `scorer_team` varchar(50) DEFAULT NULL,
  `scorer_name` varchar(50) DEFAULT NULL,
  `goal_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialnews`
--

CREATE TABLE `socialnews` (
  `id` int(7) NOT NULL,
  `embed_link` longtext NOT NULL,
  `platform` varchar(100) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socialnews`
--

INSERT INTO `socialnews` (`id`, `embed_link`, `platform`, `created_on`) VALUES
(1, '<blockquote class=\"twitter-tweet\" data-conversation=\"none\" data-dnt=\"true\">\r\n            <p lang=\"en\" dir=\"ltr\">It&#39;s official Equinox Sport and Fitness Centre in kulambiro along the ring road towards\r\n                the Najjera slope is our new home for season 6. Let&#39;s all show up in big numbers at our new home.<a\r\n                    href=\"https://twitter.com/hashtag/KhosaLeagueSn6?src=hash&amp;ref_src=twsrc%5Etfw\">#KhosaLeagueSn6</a>. <a\r\n                    href=\"https://t.co/mcRtVwAOAf\">pic.twitter.com/mcRtVwAOAf</a></p>&mdash; KHOSA LEAGUE 🐝⚽️ (@khosaleague) <a\r\n                href=\"https://twitter.com/khosaleague/status/1813461800207188225?ref_src=twsrc%5Etfw\">July 17, 2024</a>\r\n        </blockquote>\r\n        <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', 'twitter', '2024-07-18'),
(2, '<blockquote class=\"twitter-tweet\" data-media-max-width=\"560\">\r\n            <p lang=\"en\" dir=\"ltr\">📌This August the KHOSA LEAGUE Season 6 returns.!!!<br>Aren&#39;t you excited for yet another\r\n                banger of good football, vibes and inshallah.<br>Here we go!!!!!<a\r\n                    href=\"https://twitter.com/hashtag/KhosaLeagueSn6?src=hash&amp;ref_src=twsrc%5Etfw\">#KhosaLeagueSn6</a>. <a\r\n                    href=\"https://t.co/wKXpv2VPys\">pic.twitter.com/wKXpv2VPys</a></p>&mdash; KHOSA LEAGUE 🐝⚽️ (@khosaleague) <a\r\n                href=\"https://twitter.com/khosaleague/status/1810900425584865737?ref_src=twsrc%5Etfw\">July 10, 2024</a>\r\n        </blockquote>\r\n        <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', 'twitter', '2024-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `sponsor` varchar(50) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `team` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `sponsor`, `logo`, `team`, `status`) VALUES
(1, 'Coco World Limited', 'cocoaWorldLimited.png', 'Bulembia', 'Invalid'),
(2, 'Home And Away Sports', 'homeAndAwaySportsLtd.png', 'Historical', 'Invalid'),
(3, 'Make Merry Events', 'makeMerryEvents.png', 'Karere', 'Active'),
(4, 'Kajie Safaris', 'kajieSafaris.png', 'Elites', 'Invalid'),
(6, 'The Fridge Guy', 'the-fridge-guy.png', 'Gwajwa', 'Active'),
(7, 'Basaachi & Timotez Motor', 'basachi_timotez_motor.png\r\n', 'Giggaz', 'Active'),
(8, 'Allanblackia Safaris', 'allanb_safaris.jpg', 'Warriors', 'Active'),
(9, 'The Beauty Corner', 'beauty-corner.png', 'Whizzy', 'Active'),
(11, 'Whizphones', 'whizzPhones.png', 'Benghazi', 'Active'),
(13, 'Kats Artistry and greenlife', 'katsStudios.png', 'Vegas', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(7) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `est` int(10) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo`, `est`, `about`) VALUES
(1, '2K3Formidables', '2K3Formidables.png', 2003, 'Established in 2003, the 2K3 Formidables took on the formidable name because they’re one since high school days. They’re frightening, diverse and capable.  Their  bond and unity is hard to break or defeat'),
(2, 'Akasayi', 'akasayi.png', 2007, 'Founded:2007 <br>  Mission:To unite and empower individuals through football,connections, promoting teamwork and discipline<br>  Values:<br>  - Unity: Embracing diversity and working together towards a common goal.<br> - Excellence: Striving for greatness in every aspect of the game.<br> - Passion: Playing with heart and dedication.<br> - Respect: Valuing teammates, opponents, and the beautiful game.<br>  Team Overview: Akasayi FC is a dynamic and ambitious team established in 2007. With a strong focus on teamwork, strategy,keeping the kigezi high school flag shinning through different connections with obs and ogs and sportsmanship, we aim to excel on and off the pitch. Our members come from diverse backgrounds, united by a shared passion for football and a commitment to personal growth.<br>  Goals and Objectives:<br>  - Develop a strong team spirit and camaraderie. <br> - Improve technical skills and tactical awareness. <br> -improve on livelihoods through connections and creation of social capital. <br>'),
(3, 'Benghazi', 'benghazi.png', 2009, 'We call ourselves black 🐝🐝 because, 🖤 is our favorite color on any kind of jersey'),
(4, 'Bulembia', 'bulembia.png', 2008, 'Established in 2008. The name Bulembia was inspired by the amazing trip we had in 2011 which lasted for a week visiting geographical sites around Uganda but alot of good memories were made in kasese Bulembia to be specific'),
(5, 'Elites', 'elites.png', 2004, '2004 is our year of entry, and cohort has every student who joined us from 2004-2009'),
(6, 'Giggaz', 'giggaz.png', 2005, 'Giggaz FC is a class representing Kigezi High School in the KHOSA LEAGUE,  we are happy to be part of this social networking platform through sports. And, we are pleased to say that we were the KHOSA league Season 4 champions. We front teamwork,  hardwork, togetherness and love for our beloved School, Kigezi High School. I serve'),
(7, 'Gwajwa', 'gwajwa.png', 2012, 'A formidable team, Gwajwa FC brings together Senior once class of 2012 students of Kigezi High School united by love for their alma mater. With a blend of talent and experience, we represent our class and school on the pitch with passion and determination. Our team embodies the competitive spirit and camaraderie forged during our formative years at Kigezi High School. Our deep-rooted connection to the \"\"I Serve\"\" motto is the  bedrock of our unity and determination'),
(8, 'Historicals', 'historicals.png', 2011, 'The Khosa league season 5 winners'),
(9, 'Karere', 'karere.png', 2006, 'Karere Giants formerly the Indomitable class is a team comprised of old students that joined Senior One at Kigezi High School from 2006 up to 2011 and has actively participated in the KHOSA League from season One putting up competition amongst other teams with an aim of lifting the title some day.'),
(10, 'Matrix', 'matrix.png', 2015, 'It\'s a one heart desired team that selflessly plays and  has love for the league .. though facing some challenges'),
(11, 'Omwokyi', 'Omwokyi.png', 2014, 'A young class motivated to outshine the league and cooperative.'),
(12, 'Vegas', 'vegas.png', 1998, 'Established in 1998 Vegas the oldest team is home to all older oldstudents who joined S1 in 1998 and earlier.'),
(13, 'Warriors', 'Warriors.png', 2010, 'The Epitome Warriors class, which joined Kigezi High School in 2010 and graduated in 2015, made history by winning the inaugural season of the Khosa League Season 1 in 2017. Notably, they were the youngest team to achieve this feat.  The team boasted talented players such as Nyonyi HP 2015, Determinant, John, Amon, Iszaak(aka kireju), Joakim, Andrew, Aggrey, Mbonye (aka Machinery), Aaron, and others who joined from different classes, including Emmy \"\"My Son\"\" and Jose. The team also has had female players, including Rachel, Abigail, and Sarah.  Joakim was a key player and top scorer for the team and league in previous seasons. Epitome Warriors have participated in every season, consistently competing to win. They finished in 2nd place in the 2nd, 3rd, and 4th editions and secured 3rd place in the last season with the least goals conceded.  Now, Epitome Warriors 2010 is gearing up for Season 6, aiming to emerge triumphant. With their rich history and experienced players, they are determined to take home the top prize'),
(14, 'Whizzy', 'whizzy.png', 2013, 'At Katara FC, it’s beyond football, we are one family where by we are involved in so many projects');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `password`) VALUES
(1, 'AKANYIJUKA', 'DANSON', 'ADANSON', 'Dstar@Admin@Khosa'),
(2, 'ARINAITWE', 'EMMY', 'AEMMY', 'Emmy@Admin@Khosa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kltable`
--
ALTER TABLE `kltable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_results`
--
ALTER TABLE `match_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scorers`
--
ALTER TABLE `scorers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_id` (`match_id`);

--
-- Indexes for table `socialnews`
--
ALTER TABLE `socialnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `kltable`
--
ALTER TABLE `kltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match_results`
--
ALTER TABLE `match_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scorers`
--
ALTER TABLE `scorers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialnews`
--
ALTER TABLE `socialnews`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scorers`
--
ALTER TABLE `scorers`
  ADD CONSTRAINT `scorers_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `match_results` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
