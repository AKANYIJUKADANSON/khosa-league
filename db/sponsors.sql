-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 07:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `logo`) VALUES
(1, 'Coco World Limited', 'cocoaWorldLimited.png'),
(2, 'Home And Away Sports Ltd', 'homeAndAwaySportsLtd.png'),
(3, 'Make Merry Events', 'makeMerryEvents.png'),
(4, 'Davies Auto Spar', 'davies-auto-spar.png'),
(6, 'The Fridge Guy', 'the-fridge-guy.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
