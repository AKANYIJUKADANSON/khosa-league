-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 09:24 AM
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
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `est` int(10) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `logo`, `est`, `about`) VALUES
(1, 'Gwajwa', 'gwajwa.png', 2012, ''),
(2, 'Karere', 'karere.png', 2006, ''),
(3, 'Elites', 'elites.png', 2013, ''),
(4, 'Benghazi', 'benghazi.png', 2009, ''),
(5, 'Bulembia', 'bulembia.png', 2009, ''),
(6, 'Enogo', 'enogo.png', 1998, ''),
(7, 'Historicals', 'historicals.png', 2011, ''),
(8, 'Imaajo', 'imaajo.png', 2015, ''),
(9, 'Kataara', 'kataara.png', 2013, ''),
(10, 'Mallet', 'mallet.png', 2003, ''),
(11, 'Warriors', 'Warriors.png', 2010, ''),
(12, 'Akasayi', 'akasayi.png', 2007, ''),
(13, 'Giggaz', 'giggaz.png', 2005, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(11) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `team1`, `team2`, `date`, `time`) VALUES
(0, 'Benghazi', 'Mallet', '2024-07-17', '23:54:00'),
(1, 'Karere', 'Kataara', '2023-09-16', '02:20:00'),
(2, 'Mallet', 'Bulembia', '2023-09-16', '02:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `team`, `about`) VALUES
(1, 'Bulembia', 'EST  2002', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iste illo velit, accusamus assumenda, commodi est facilis dicta quaerat a repellendus optio non quia, ut cum numquam harum at! Maiores, distinctio?');

-- --------------------------------------------------------

--
-- Table structure for table `kltable`
--

CREATE TABLE `kltable` (
  `id` int(10) NOT NULL,
  `position` int(10) NOT NULL,
  `club` varchar(50) NOT NULL,
  `MP` int(20) NOT NULL DEFAULT 0,
  `W` int(20) NOT NULL,
  `D` int(20) NOT NULL,
  `L` int(20) NOT NULL,
  `GD` int(10) NOT NULL,
  `Pts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kltable`
--

INSERT INTO `kltable` (`id`, `position`, `club`, `MP`, `W`, `D`, `L`, `GD`, `Pts`) VALUES
(1, 1, 'Akasayi', 0, 0, 0, 0, 0, 0),
(2, 2, 'Benghazi', 0, 0, 0, 0, 0, 0),
(3, 3, 'Bulembia', 0, 0, 0, 0, 0, 0),
(4, 4, 'Elites', 0, 0, 0, 0, 0, 0),
(5, 5, 'Enogo', 0, 0, 0, 0, 0, 0),
(6, 6, 'Giggaz', 0, 0, 0, 0, 0, 0),
(7, 7, 'Gwajwa', 0, 0, 0, 0, 0, 0),
(8, 8, 'Historicals', 0, 0, 0, 0, 0, 0),
(9, 9, 'Imaajo', 0, 0, 0, 0, 0, 0),
(10, 10, 'Karere', 0, 0, 0, 0, 0, 0),
(11, 11, 'Kataara', 0, 0, 0, 0, 0, 0),
(12, 12, 'Mallet', 0, 0, 0, 0, 0, 0),
(13, 13, 'Warriors', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(7) NOT NULL,
  `created_on` date NOT NULL,
  `body` longtext NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_on`, `body`, `file_name`, `title`) VALUES
(1, '2024-07-16', 'The Fridge Guy signs another contract as an official sponsor for Gwajwa FC', 'bob.png', 'Official sponsor for Gwajwa FC'),
(2, '2024-07-14', 'Edgar is set to play for Gwajwa FC in the season 6 games at a deal of $100', 'transfer_edgar.jpg', 'Transfers - Edgar aka Omubagi'),
(3, '2024-07-17', 'KHOSA League season six is set to begin on 4th August with all the teams participating, the likes of Gwajwa, Karere, Warriors, Giggz,  Elites, Enogo FC, Mallet, Kataara, Imaajo, Historicals, Akasayi, Benghazi, Bulembia, Whizzy and more', 'season6.jpg', 'KHOSA League Season 6');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(7) NOT NULL,
  `image` varchar(20) NOT NULL,
  `age` int(7) NOT NULL,
  `appearances` int(7) NOT NULL,
  `shirt_no` int(7) NOT NULL,
  `goals` int(7) NOT NULL,
  `about` longtext NOT NULL,
  `name` varchar(20) NOT NULL,
  `team` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `image`, `age`, `appearances`, `shirt_no`, `goals`, `about`, `name`, `team`, `role`) VALUES
(1, 'arindaJoshuaKato.png', 18, 0, 25, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, autem, explicabo corrupti fugit magni molestiae fugiat est, quam beatae provident iusto sit blanditiis laborum repellendus unde? Sunt animi', 'Arinda K Joshua', 'Gwajwa', 'Winger');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(50) NOT NULL,
  `team1` varchar(100) NOT NULL,
  `result_team_1` int(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `result_team_2` int(50) NOT NULL,
  `result_date` varchar(50) NOT NULL,
  `game_week` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `team1`, `result_team_1`, `team2`, `result_team_2`, `result_date`, `game_week`) VALUES
(4, 'Giggaz', 2, 'Benghazi', 3, '2024-07-31', 'Week 1'),
(5, 'Bulembia', 1, 'Historicals', 10, '2024-08-01', 'Week 1');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `sponsor` varchar(50) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `sponsor`, `logo`, `team`) VALUES
(1, 'Coco World Limited', 'cocoaWorldLimited.png', 'Bulembia'),
(2, 'Home And Away Sports Ltd', 'homeAndAwaySportsLtd.png', 'Historical'),
(3, 'Make Merry Events', 'makeMerryEvents.png', 'Karere'),
(4, 'Kajie Safaris', 'kajieSafaris.png', 'Elites'),
(6, 'The Fridge Guy', 'the-fridge-guy.jpg', 'Gwajwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekimeza`
--
ALTER TABLE `ekimeza`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ekimeza`
--
ALTER TABLE `ekimeza`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
