

--
-- Table structure for table `ekimeza`
--

CREATE TABLE `KLtable` (
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
-- Dumping data for table `ekimeza`
--

INSERT INTO `KLtable` (`id`, `position`, `club`, `MP`, `W`, `D`, `L`, `GD`, `Pts`) VALUES
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