-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 04:33 PM
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
(2, 'Karere', 'karere.png', 2006, 'Karere Giants formerly the Indomitable class is a team comprised of old students that joined Senior One at Kigezi High School from 2006 up to 2011 and has actively participated in the KHOSA League from season One putting up competition amongst other teams with an aim of lifting the title some day.'),
(3, 'Elites', 'elites.png', 2013, ''),
(4, 'Benghazi', 'benghazi.png', 2009, 'We call ourselves black 🐝🐝 because, 🖤 is our favorite color on any kind of jersey'),
(5, 'Bulembia', 'bulembia.png', 2008, 'Established in 2008. The name Bulembia was inspired by the amazing trip we had in 2011 which lasted for a week visiting geographical sites around Uganda but alot of good memories were made in kasese Bulembia to be specific'),
(6, 'Vegas', 'vegas.png', 1998, 'Established in 1998 Vegas the oldest team is home to all older oldstudents who joined S1 in 1998 and earlier.'),
(7, 'Historicals', 'historicals.png', 2011, 'The Khosa league season 5 winners'),
(8, 'Matrix', 'matrix.png', 2015, ''),
(9, 'Whizzy', 'whizzy.png', 2013, 'At Katara FC, it’s beyond football, we are one family where by we are involved in so many projects'),
(10, 'Formidables', 'Formidables.png', 2003, 'Established in 2003, the 2K3 Formidables took on the formidable name because they’re one since high school days. They’re frightening, diverse and capable.  Their  bond and unity is hard to break or defeat'),
(11, 'Warriors', 'Warriors.png', 2010, 'The Epitome Warriors class, which joined Kigezi High School in 2010 and graduated in 2015, made history by winning the inaugural season of the Khosa League Season 1 in 2017. Notably, they were the youngest team to achieve this feat.  The team boasted talented players such as Nyonyi HP 2015, Determinant, John, Amon, Iszaak(aka kireju), Joakim, Andrew, Aggrey, Mbonye (aka Machinery), Aaron, and others who joined from different classes, including Emmy \"\"My Son\"\" and Jose. The team also has had female players, including Rachel, Abigail, and Sarah.  Joakim was a key player and top scorer for the team and league in previous seasons. Epitome Warriors have participated in every season, consistently competing to win. They finished in 2nd place in the 2nd, 3rd, and 4th editions and secured 3rd place in the last season with the least goals conceded.  Now, Epitome Warriors 2010 is gearing up for Season 6, aiming to emerge triumphant. With their rich history and experienced players, they are determined to take home the top prize'),
(12, 'Akasayi', 'akasayi.png', 2007, ''),
(13, 'Giggaz', 'giggaz.png', 2005, 'Giggaz FC is a class representing Kigezi High School in the KHOSA LEAGUE,  we are happy to be part of this social networking platform through sports. And, we are pleased to say that we were the KHOSA league Season 4 champions. We front teamwork,  hardwork, togetherness and love for our beloved School, Kigezi High School. I serve'),
(14, 'Omwokyi', 'Omwokyi.png', 2014, 'A young class motivated to outshine the league and cooperative.');

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
(8, 'Formidables', 'Vegas', '2024-08-04', '17:30', 'Matchday 1', 'Pitch 1'),
(9, 'Bulembia', 'Elites', '2024-08-04', '14:00', 'Matchday 1', 'Pitch 2'),
(10, 'Vegas', 'Warriors', '2024-08-04', '14:30', 'Matchday 1', 'Pitch 2'),
(11, 'Formidables', 'Benghazi', '2024-08-04', '15:00', 'Matchday 1', 'Pitch 2'),
(12, 'Historicals', 'Omwokyi', '2024-08-04', '15:30', 'Matchday 1', 'Pitch 2'),
(13, 'Karere', 'Gwajwa', '2024-08-04', '16:30', 'Matchday 1', 'Pitch 2'),
(14, 'Akasayi', 'Whizzy', '2024-08-04', '17:00', 'Matchday 1', 'Pitch 2'),
(15, 'Elites', 'Giggaz', '2024-08-04', '17:30', 'Matchday 1', 'Pitch 2');

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
  `club` varchar(50) NOT NULL,
  `MP` int(20) NOT NULL DEFAULT 0,
  `W` int(20) NOT NULL,
  `D` int(20) NOT NULL,
  `L` int(20) NOT NULL,
  `Goals_Scored` int(10) NOT NULL,
  `Goals_Conceded` int(10) NOT NULL,
  `GD` int(10) NOT NULL,
  `Pts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kltable`
--

INSERT INTO `kltable` (`id`, `club`, `MP`, `W`, `D`, `L`, `Goals_Scored`, `Goals_Conceded`, `GD`, `Pts`) VALUES
(1, 'Akasayi', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Benghazi', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Bulembia', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Elites', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Vegas', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Giggaz', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Gwajwa', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Historicals', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Matrix', 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Karere', 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Whizzy', 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Formidables', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Warriors', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Omwokyi', 0, 0, 0, 0, 0, 0, 0, 0);

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
(1, '2024-07-30', 'The Fridge Guy signs another contract as an official sponsor for Gwajwa FC', 'bob.png', 'Official sponsor for Gwajwa FC'),
(2, '2024-07-29', 'Edgar is set to play for Gwajwa FC in the season 6 games at a deal of $100', 'transfer_edgar.jpg', 'Transfer window'),
(3, '2024-07-31', 'KHOSA League season six is set to begin on 4th August with all the teams participating, the likes of Gwajwa, Karere, Warriors, Giggz,  Elites, Enogo FC, Mallet, Kataara, Imaajo, Historicals, Akasayi, Benghazi, Bulembia, Whizzy and more', 'season6.jpg', 'KHOSA League Season 6');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(7) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'placeholder.png',
  `age` int(7) NOT NULL,
  `appearances` int(7) NOT NULL DEFAULT 0,
  `shirt_no` int(7) NOT NULL DEFAULT 25,
  `goals` int(7) NOT NULL DEFAULT 0,
  `about` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `image`, `age`, `appearances`, `shirt_no`, `goals`, `about`, `name`, `team`, `role`) VALUES
(6, 'irinatwe_andrew.jpg', 29, 0, 25, 0, 'Kigezi high School class of 2008', 'Irinitwe andrew', 'Bulembia', ' Midfielder'),
(7, 'akatwijuka_Timothy.jpg', 26, 0, 25, 0, ' ---', 'Akatwijuka Timothy', 'Gwajwa', 'Midfielder'),
(8, 'Davis_grace.jpg', 27, 0, 25, 0, ' NIYONGABO Davis Grace, born and raised from the western part of Uganda, Kisoro district, Nyarusiza sub-county, Mubuga village. \r\nJoined Kigezi high school in 2012 and was there for full six years.  ', 'Niyongabo Davis Grace  ', 'Gwajwa', 'Goal Keeper  '),
(9, 'jude.png', 24, 0, 25, 0, '5ft5\", 60kg  ', 'Ahimbisibwe Jude', 'Gwajwa', ' Left Back'),
(10, 'Niwagaba Methodias.jpg', 30, 0, 25, 0, ' Class of 2008 - 13', 'Niwagaba Methodias', 'Bulembia', ' Midfielder'),
(11, 'Niyonsaba_Brian.png', 30, 0, 25, 0, 'KHS OB since 2008-2013', ' Niyonsaba Brian', 'Bulembia', ' Striker'),
(12, 'agabaEdwin.png', 26, 0, 0, 0, ' Rukiga district born', ' Agaba Edwin', 'Gwajwa', ' Winger'),
(13, 'akatwi_amon.png', 27, 0, 0, 0, ' KHS class of 2010-2015, 6 years and an Epitome. Quantity Surveyor by profession, passionate about sports at large and world affairs.', 'Akatwijuka Amon', 'Warriors', 'DEFENDER, STRIKER'),
(14, 'Mark_Ayebare.jpg', 26, 0, 0, 0, 'Architect', 'Ayebare Mark', 'Gwajwa', ' Midfielder'),
(15, 'precious_tugume.jpeg', 27, 0, 0, 0, 'God fearing, social, practicing architect, CEO level7 architecture & design studio ', 'Akampurira Precious Tugume', 'Warriors', ' Striker'),
(16, 'Ernst_Dan.jpeg', 24, 0, 0, 0, 'Am an accountant by profession and a passionate footballer ', 'Ashaba Ernest Dan ', 'Gwajwa', ' Defender '),
(17, 'atumanya_abia.jpg', 25, 0, 0, 0, 'Low budget ramos', ' Atumanya Abia', 'Gwajwa', 'Defender'),
(18, 'Bob_Twinamasiko.jpg', 32, 0, 0, 0, 'I love playing football in the KHOSA LEAGUE for both health and social networking reasons', 'Bob Twinamasiko', 'Giggaz', ' Midfielder'),
(19, 'byamugisha_isaac.jpg', 29, 0, 0, 0, 'Good Character ', 'Byamugisha isaac ', 'Warriors', 'Goal Keeper '),
(20, 'BYAMUKAMA_ISAAC.jpg', 29, 0, 0, 0, 'Married , health professional', 'Byamukama Isaac', 'Warriors', 'Goal Keeper'),
(21, 'Chriis_Parker.jpeg', 0, 0, 0, 0, 'Lawyer, Teacher and Medical Professional', 'Chriis Parker', 'Elites', ' GK & Winger'),
(22, 'placeholder.png', 27, 0, 0, 0, 'Am the thinnest mukiga with the tallest mind on football ', 'Byarugaba Godet ', 'Warriors', 'Midfielder '),
(23, 'Akandonda_Elly.jpeg', 26, 0, 0, 0, 'I’m a medic and good with socializing', 'Elly Akandonda', 'Gwajwa', 'Winger'),
(24, 'Bannet_pro.jpg', 28, 0, 0, 0, ' MCO', 'Gumisiriza Bannet', 'Warriors', 'Midfielder'),
(25, 'Naamara_Hannington.jpg', 31, 0, 0, 0, 'I represent team Karere Giants in Nyaruju and I am the President of Indomitable Class (2006-2011)', 'Hannington Naamara', 'Karere', 'Defender'),
(27, 'larma_jim.jpg', 28, 0, 0, 0, ' All is me', 'Jim Manzi', 'Gwajwa', 'Midfielder'),
(28, 'Joakim_Mucunguzi.jpg', 28, 0, 0, 0, '---', 'Joakim Mucunguzi', 'Warriors', ' Defender/midfielder'),
(29, 'placeholder.png', 25, 0, 0, 0, '---', 'Kajura Herbert', 'Warriors', 'Striker'),
(30, 'Kajebe_osh.jpg', 26, 0, 25, 0, 'Artist Statement\r\nAs an artist deeply rooted in my Ugandan heritage, I am driven by a passion for exploring and revitalizing our cultural practices to address contemporary challenges and ensure their preservation for future generations. My work is profoundly influenced by the restitution movement, emphasizing the importance of reclaiming and celebrating our cultural narratives and material heritage.\r\nThrough diverse mediums, including woodblock prints, painting, textiles, fashion, and curation, I delve into the rich tapestry of Ugandan traditions. My artistic practice is a dialogue between the past, present, and future, seeking to uncover the interconnectedness of our histories and the continuous evolution of our cultural identity.\r\nI believe in the power of art to serve as a bridge across time, bringing ancestral wisdom into contemporary contexts and fostering a deeper understanding of our collective journey. By documenting and reliving our cultural practices, I aim to create works that resonate with both personal and universal themes, inspiring reflection and dialogue.\r\nMy exploration of materiality and cultural narratives is a testament to my commitment to honoring and preserving the essence of our heritage. Through my art, I invite viewers to join me in this journey of rediscovery, reflection, and a re-imagination  of our shared cultural legacy\r\n', 'Kajebe Jacob Joshua', 'Historicals', 'Striker'),
(31, 'Kalongo_John Paul.jpg', 0, 0, 0, 0, '2005 - 2008 Kigezi high midfield sensation that most of the students related to the Brazilian Ronaldinho.', 'Kalongo John Paul', 'Formidables', ' Midfielder'),
(32, 'ndrea - KATUREEBE ANDREW.png', 31, 0, 0, 0, 'Katureebe Andrew, born on 17th dec 1993. I am a  talented and tenacious football defender known for my exceptional defensive skills and leadership on the field. Standing at 1.5m  and possessing a strong physical presence, I combine my natural athleticism with an acute understanding of the game, making me a formidable opponent for any striker.\r\nMy football journey began at a young age, showcasing my potential in local youth leagues. My passion and dedication to the sport earned me a spot in Khs First team, where I honed my skills and developed a reputation as a reliable and hard-working defender. My ability to read the game, make crucial tackles, and intercept passes quickly set me apart from my peers.\r\nOff the field, I am known for my humility and dedication to giving back to the community.I actively participate in youth development programs, sharing my knowledge and inspiring the next generation of footballers.\r\nI continue to be a vital asset to my team, bringing experience, leadership, and an unwavering defensive prowess that makes me one of the most respected defenders in the league.', 'Katureebe Andrew', 'Warriors', 'Defender'),
(35, 'arinda_kenneth.jpeg', 31, 0, 0, 0, 'Simplicity', 'Kenneth Arinda', 'Giggaz', 'Midfielder'),
(36, 'kwikiriza_wilson.jpg', 30, 0, 0, 0, 'Agent of all seasons', 'Kwikiriza Wilson', 'Bulembia', 'Striker'),
(37, 'Med_Edgar.jpg', 26, 0, 0, 0, ' ---', 'Musinguzi Edgar', 'Gwajwa', 'Defender'),
(38, 'placeholder.png', 30, 0, 0, 0, ' ---', 'Naamara Eric', 'Bulembia', 'Goal Keeper'),
(39, 'Nasasira_Bruno.jpg', 27, 0, 0, 0, 'Male Ugandan and Kigezi High School OB class of 2012', ' Nasasira Bruno', 'Gwajwa', 'Defender'),
(40, 'Niwagab_Darsan.jpg', 31, 0, 0, 0, 'Passionate about soccer and socializing which has led me to play in university games and corporate leagues', 'Niwagaba Darsan', 'Bulembia', 'Midfielder'),
(41, 'Niwagaba_Methodias.jpg', 30, 0, 0, 0, 'Class of 2008-13', 'Niwagaba Methodias', 'Bulembia', 'Midfielder'),
(42, 'amon_ndugu.jpg', 28, 0, 0, 0, 'Easy to access but hard to handle', 'Niwandinda Amon Ndugu', 'Benghazi', 'Midfielder'),
(43, 'Owamani_Ambrose.png', 33, 0, 0, 0, 'Simple', 'Owamani Ambrose', 'Giggaz', 'Midfielder'),
(44, 'Kakuru_Racheal.png', 26, 0, 0, 0, 'Very passionate about sports', 'Racheal Ainembabazi', 'Warriors', 'Striker'),
(45, 'Taritwebwa_Eric.jpg', 29, 0, 0, 0, 'Joined khs in 2008 in S1', 'Taritwebwa Eric', 'Bulembia', 'Defender'),
(46, 'twinamasiko_benjamin.JPG', 27, 0, 0, 0, ' First things first ⚽⚽⚽', 'Twinamasiko Benjamin', 'Gwajwa', 'Defender'),
(47, 'tweheyo_tommy.JPG', 32, 0, 0, 0, 'Name :Tweheyo Tommy \r\nAge: 32\r\nCurrent role: Banker\r\nInterests: Business \r\nHobby: Football \r\nPosition on field: forward \r\nLocation: Kampala \r\nPlace of birth: Kabale \r\nStatus: married', 'Tommy Tweheyo', 'Bulembia', 'Winger'),
(48, 'The_Godfather.jpg', 30, 0, 0, 0, 'They dont make men like me anymore. I am the last of a dying rare breed', 'The God Father', 'Giggaz', 'Midfielder');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kltable`
--
ALTER TABLE `kltable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
