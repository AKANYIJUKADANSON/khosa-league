-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 08:10 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match_results`
--
ALTER TABLE `match_results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match_results`
--
ALTER TABLE `match_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
