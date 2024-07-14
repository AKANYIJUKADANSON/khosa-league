-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 01:05 PM
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
-- Table structure for table `ekimeza`
--

CREATE TABLE `ekimeza` (
  `id` int(10) NOT NULL,
  `position` int(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `club` varchar(50) NOT NULL,
  `MP` int(20) NOT NULL DEFAULT 0,
  `W` int(20) NOT NULL,
  `D` int(20) NOT NULL,
  `L` int(20) NOT NULL,
  `GD` int(10) NOT NULL,
  `Pts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekimeza`
--

INSERT INTO `ekimeza` (`id`, `position`, `logo`, `club`, `MP`, `W`, `D`, `L`, `GD`, `Pts`) VALUES
(1, 1, 'gwajwa.png', 'Gwajwa FC', 0, 0, 0, 0, 2, 9),
(2, 2, 'katara.png', 'Katara FC', 0, 0, 0, 0, 3, 8),
(3, 3, 'Giggaz.png', 'Giggaz FC', 0, 0, 0, 0, 2, 7),
(4, 4, 'enogo.png', 'Enogo FC', 0, 0, 0, 0, 0, 6),
(5, 5, 'Akasayi.png', 'Akasayi FC', 0, 0, 0, 0, 1, 5),
(6, 7, 'Historicals.png', 'Historicals FC', 0, 0, 0, 0, 2, 4),
(7, 8, 'Karere.png', 'Karere FC', 0, 0, 0, 0, 5, 3),
(8, 9, 'Imaajo.png', 'Imaajo FC', 0, 0, 0, 0, 6, 3),
(9, 10, 'Mallet.png', 'Mallet FC', 0, 0, 0, 0, 0, 2),
(10, 11, 'Warriors.png', 'Warriors FC', 0, 0, 0, 0, -1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekimeza`
--
ALTER TABLE `ekimeza`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekimeza`
--
ALTER TABLE `ekimeza`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

