

CREATE TABLE `clubs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `est` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `logo`, `est`) VALUES
(1, 'Gwajwa', 'gwajwa.png', 2012),
(2, 'Karere FC', 'karere.png', 2006),
(3, 'Elites FC', 'elites.png', 2013),
(4, 'Benghazi FC', 'benghazi.png', 2009),
(5, 'Bulembia FC', 'bulembia.png', 2009),
(6, 'Enogo FC', 'enogo.png', 1998),
(7, 'Historicals FC', 'historicals.png', 2011),
(8, 'Imaajo FC', 'imaajo.png', 2015),
(9, 'Kataara FC', 'kataara.png', 2013),
(10, 'Mallet FC', 'mallet.png', 2003),
(11, 'Worriors FC', 'worriors.png', 2010),
(12, 'Akasayi FC', 'akasayi.png', 2007),
(13, 'Giggaz FC', 'giggaz.png', 2005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
