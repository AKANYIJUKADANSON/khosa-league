
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
(1, 'Karere', 'Kataara', '2023-09-16', '02:20'),
(2, 'Mallet', 'Bulembia', '2023-09-16', '02:20'),
(3, 'Giggaz', 'Bengazi', '2023-09-17', '02:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);
COMMIT;

