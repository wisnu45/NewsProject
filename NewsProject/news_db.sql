-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 02:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(2, 'tarun', 'tarunkumbhakar030@gmail.com', '6c231a871236d4bd97ce39c90c050f19'),
(3, 'Subham', 'subham@gmail.com', '1a6c42113064a6c2888f5064385bbbef'),
(4, 'akash@gmail.com', 'akash@gmail.com', '94754d0abb89e4cf0a7f1c494dbb9d2c');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catagory_id` int(50) NOT NULL,
  `catagory_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `post` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catagory_id`, `catagory_name`, `post`) VALUES
(1, 'Sports', 1),
(2, 'Health', 1),
(4, 'Politics', 0),
(6, 'Entertainment & Arts', 1),
(7, 'Business', 1),
(8, 'Coronavirus', 2),
(9, 'Weather', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` text COLLATE utf8_bin NOT NULL,
  `news_desc` text COLLATE utf8_bin NOT NULL,
  `catagory` varchar(60) COLLATE utf8_bin NOT NULL,
  `author` varchar(50) COLLATE utf8_bin NOT NULL,
  `news_date` date NOT NULL,
  `news_img` varchar(455) COLLATE utf8_bin NOT NULL,
  `user_author` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `catagory`, `author`, `news_date`, `news_img`, `user_author`) VALUES
(42, 'A test to find out whether people have been infected with coronavirus in the past has been approved by health officials in England.', 'Public Health England said the antibody test, developed by Swiss pharmaceutical company Roche, was a \"very positive development\".\r\n\r\nThe blood test looks for antibodies to see if a person has already had the virus and might now have some immunity.\r\n\r\nUntil now, officials have said such tests are not reliable enough.\r\n\r\nThe government previously spent a reported £16m buying antibody tests which later proved to be ineffective.\r\n\r\nSources told the BBC the Roche test was the first one to offer serious potential.\r\n\r\nAntibodies are made by our immune system as it learns to fight an infection.\r\n\r\nFinding antibodies that attack the coronavirus show that person has been infected in the past, but they do not prove they are protected against it in the future.			', '8', '2', '2020-05-15', '20200515080509_895996.jpg', ''),
(45, 'Coronavirus may never go away, World Health Organization warns ', '					Speaking at a briefing on Wednesday, WHO emergencies director Dr Mike Ryan warned against trying to predict when the virus would disappear.\r\n\r\nHe added that even if a vaccine is found, controlling the virus will require a \"massive effort\".\r\n\r\nAlmost 300,000 people worldwide are reported to have died with coronavirus, and more than 4.3m cases recorded.\r\n\r\nThe UN meanwhile warned the pandemic was causing widespread distress and mental ill health - particularly in countries where there\'s a lack of investment in mental healthcare..								', '8', '2', '2020-05-15', '20200515080522_403355.jpg', ''),
(46, 'Daniel Ricciardo is to race for McLaren in 2021, taking the seat of Carlos Sainz, who will move to Ferrari.', '					The double switch was announced by both teams on Thursday morning in a choreographed series of news releases.\r\n\r\nRicciardo will partner Lando Norris, while Sainz is to replace four-time champion Sebastian Vettel at Ferrari.\r\n\r\nMcLaren Racing chief executive officer Zak Brown said Ricciardo brings \"an exciting new dimension to the team\"; Ferrari said Sainz was \"the ideal fit\".\r\n\r\nFerrari team principal Mattia Binotto added that Sainz \"had proved to be very talented and has shown that he has the technical ability and the right attributes\".				', '1', '', '2020-05-15', '20200515090513_913232.jpg', '12'),
(47, 'Coronavirus Outbreak: How Ayurvedic Studies Contribute Largely To World Research On COVID-19 Vaccines', '					New Delhi: World Health Organization has warned the world that it’s possible that the deadly coronavirus may never go. Though countries are in continuous efforts to develop a successful drug-vaccine, COVID-19  havoc is increasing with each passing day. Commenting on the same, India Union Health Minister Dr. Harsh Vardhan said that India is working fast towards making the vaccine. Ministry of Science and Technology and especially CSIR is aggressively engaged to develop cure for the deadly disease.				', '2', '', '2020-05-15', '20200515090532_592417.jpg', '11'),
(48, 'Coronavirus Lockdown LIVE: Adityanath Govt To Provide Free Food To Migrant Workers Once They Enter UP Border', '					Coronavirus Lockdown in LIVE UPDATES: With 3,967 new cases and 100 new deaths reported in the last 24 hours, the COVID-19 tally in India reached 81970, the Union Health Ministry stated on Friday. And two states, Goa and Manipur, which were declared COVID-19 free, have reported fresh corona positive cases.\r\nIn Maharashtra, the Covid-19 cases climbed to 27,524 followed by Tamil Nadu, which has reported 9,674 and Gujarat has 9,591 cases so far.							', '6', '', '2020-05-15', '20200515110504_263553.jpg', '11'),
(49, 'thisalashflksajflakshflas shflkasjflksa', '					ahflkashflhfklkHFS				', '7', '', '2020-05-15', '20200515120535_281224.jpg', '11');

-- --------------------------------------------------------

--
-- Table structure for table `usercontent_tb`
--

CREATE TABLE `usercontent_tb` (
  `content_id` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `catagory` varchar(60) COLLATE utf8_bin NOT NULL,
  `author` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `image` varchar(450) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usercontent_tb`
--

INSERT INTO `usercontent_tb` (`content_id`, `title`, `body`, `catagory`, `author`, `date`, `image`) VALUES
(72, 'The government says it is ', 'The Premier League met on Monday to discuss \"Project Restart\" and hopes for a return to action on 12 June, with matches played behind closed doors.\r\n\"We all agreed that we will only go ahead if it is safe to do so and the health and welfare of players, coaches and staff comes first,\" said Dowden.							', '1', '10', '2020-05-15', '20200515080551_724444.jpg'),
(74, 'Coronavirus Outbreak: How Ayurvedic Studies Contribute Largely To World Research On COVID-19 Vaccines', 'New Delhi: World Health Organization has warned the world that it’s possible that the deadly coronavirus may never go. Though countries are in continuous efforts to develop a successful drug-vaccine, COVID-19  havoc is increasing with each passing day. Commenting on the same, India Union Health Minister Dr. Harsh Vardhan said that India is working fast towards making the vaccine. Ministry of Science and Technology and especially CSIR is aggressively engaged to develop cure for the deadly disease.', '2', '12', '2020-05-15', '20200515090530_68908.jpg'),
(79, 'Coronavirus Lockdown LIVE: Adityanath Govt To Provide Free Food To Migrant Workers Once They Enter UP Border', 'Coronavirus Lockdown in LIVE UPDATES: With 3,967 new cases and 100 new deaths reported in the last 24 hours, the COVID-19 tally in India reached 81970, the Union Health Ministry stated on Friday. And two states, Goa and Manipur, which were declared COVID-19 free, have reported fresh corona positive cases.\r\nIn Maharashtra, the Covid-19 cases climbed to 27,524 followed by Tamil Nadu, which has reported 9,674 and Gujarat has 9,591 cases so far.			', '6', '11', '2020-05-15', '20200515110554_686101.jpg'),
(80, 'thisalashflksajflakshflas shflkasjflksa', 'ahflkashflhfklkHFS', '7', '11', '2020-05-15', '20200515120528_861627.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration_tb`
--

CREATE TABLE `userregistration_tb` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `u_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `u_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userregistration_tb`
--

INSERT INTO `userregistration_tb` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES
(9, 'Debanjan', 'debanjan@gmail.com', '50639a90bb2ffdc119f00764f8fc4ee3'),
(10, 'Rahul', 'rahul@gmail.com', '439ed537979d8e831561964dbbbd7413'),
(11, 'Tarun', 'tarunkumbhakar030@gmail.com', '6c231a871236d4bd97ce39c90c050f19'),
(12, 'Subham', 'subham@gmail.com', '1a6c42113064a6c2888f5064385bbbef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `usercontent_tb`
--
ALTER TABLE `usercontent_tb`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `userregistration_tb`
--
ALTER TABLE `userregistration_tb`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catagory_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `usercontent_tb`
--
ALTER TABLE `usercontent_tb`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `userregistration_tb`
--
ALTER TABLE `userregistration_tb`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
