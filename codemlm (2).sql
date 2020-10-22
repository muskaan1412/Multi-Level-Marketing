-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 07:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`) VALUES
(1, 'mlm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `permanentdate` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`permanentdate`) VALUES
('2020-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `current_bal` int(11) NOT NULL,
  `total_bal` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `userid`, `current_bal`, `total_bal`) VALUES
(1, 'topuser@website.com', 0, 21500),
(2, '1U1@web.com', 0, 1050),
(3, '1U2@web.com', 50, 650),
(4, '2U1@web.com', 0, 100),
(5, '2u2@web.com', 0, 0),
(6, '2u3@web.com', 0, 0),
(7, '2u4@gmail.com', 0, 0),
(8, '2u5@web.com', 0, 0),
(9, '2u6@web.com', 0, 0),
(10, '2u7@web.com', 0, 0),
(12, '2u9@web.com', 0, 0),
(13, '2u10@web.com', 0, 0),
(14, '3U1@web.com', 0, 0),
(15, 'anuj@web.com', 100, 600),
(16, 'mahi@web.com', 0, 0),
(17, 'anuj1@web.com', 0, 100),
(18, 'anuj2@web.com', 0, 0),
(19, 'mahia@web.com', 0, 0),
(20, 'div@web.com', 0, 0),
(21, 'letsee@gmail.com', 0, 0),
(22, 'date@trial.com', 0, 0),
(23, 'f@web.com', 0, 0),
(24, 'van@web.com', 0, 0),
(25, 'ani@web.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `income_received`
--

CREATE TABLE `income_received` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_received`
--

INSERT INTO `income_received` (`id`, `userid`, `amount`, `date`) VALUES
(1, '1U1@web.com', 100, '2020-10-05'),
(2, '1U1@web.com', 700, '2020-10-20'),
(3, '1U1@web.com', 250, '2020-11-18'),
(4, '2U1@web.com', 100, '2020-11-18'),
(5, '1U2@web.com', 100, '2020-12-03'),
(6, '1U2@web.com', 100, '2020-12-03'),
(7, '1U2@web.com', 150, '0000-00-00'),
(8, 'anuj1@web.com', 100, '0000-00-00'),
(9, '1U2@web.com', 50, '0000-00-00'),
(10, 'anuj@web.com', 100, '0000-00-00'),
(11, '1U2@web.com', 50, '0000-00-00'),
(12, 'anuj@web.com', 100, '0000-00-00'),
(13, '1U2@web.com', 50, '0000-00-00'),
(14, 'anuj@web.com', 100, '0000-00-00'),
(15, '1U2@web.com', 50, '0000-00-00'),
(16, 'anuj@web.com', 100, '0000-00-00'),
(17, '1U2@web.com', 50, '0000-00-00'),
(18, 'anuj@web.com', 100, '0000-00-00'),
(19, '1U2@web.com', 50, '0000-00-00'),
(20, 'anuj@web.com', 100, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pin_list`
--

CREATE TABLE `pin_list` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_list`
--

INSERT INTO `pin_list` (`id`, `userid`, `pin`, `status`) VALUES
(1, 'topuser@website.com', 991265, 'close'),
(2, 'topuser@website.com', 145939, 'close'),
(3, '1U1@web.com', 444869, 'close'),
(4, '1U1@web.com', 987072, 'close'),
(5, '1U1@web.com', 968978, 'close'),
(6, '1U1@web.com', 365506, 'close'),
(7, '1U1@web.com', 459531, 'close'),
(8, '1U1@web.com', 848142, 'close'),
(9, '1U1@web.com', 913186, 'close'),
(10, '1U1@web.com', 656024, 'close'),
(11, '1U1@web.com', 267648, 'close'),
(12, '1U1@web.com', 215925, 'close'),
(13, '2U1@web.com', 644187, 'close'),
(14, '1U2@web.com', 201801, 'close'),
(15, '1U2@web.com', 675843, 'close'),
(16, '1U2@web.com', 941015, 'close'),
(17, '1U2@web.com', 974202, 'open'),
(18, '1U2@web.com', 964205, 'open'),
(19, '1U2@web.com', 962694, 'open'),
(20, '1U2@web.com', 272858, 'open'),
(21, 'anuj1@web.com', 720928, 'close'),
(22, 'anuj@web.com', 866159, 'close'),
(23, 'anuj@web.com', 338668, 'close'),
(24, 'anuj@web.com', 196394, 'close'),
(25, 'anuj@web.com', 318389, 'close'),
(26, 'anuj@web.com', 897771, 'close'),
(27, 'anuj@web.com', 737267, 'close'),
(28, 'anuj@web.com', 310026, 'close');

-- --------------------------------------------------------

--
-- Table structure for table `pin_request`
--

CREATE TABLE `pin_request` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_request`
--

INSERT INTO `pin_request` (`id`, `email`, `date`, `status`) VALUES
(1, 'topuser@website.com', '2020-10-02', 'close'),
(2, 'topuser@website.com', '2020-10-02', 'close'),
(3, '1U1@web.com', '2020-10-05', 'close'),
(4, '1U1@web.com', '2020-10-05', 'close'),
(5, '1U1@web.com', '2020-10-05', 'close'),
(6, '1U1@web.com', '2020-10-05', 'close'),
(7, '1U1@web.com', '2020-10-05', 'close'),
(8, '1U1@web.com', '2020-10-05', 'close'),
(9, '1U1@web.com', '2020-10-05', 'close'),
(10, '1U1@web.com', '2020-10-05', 'close'),
(11, '1U1@web.com', '2020-10-05', 'close'),
(12, '1U1@web.com', '2020-10-05', 'close'),
(13, '2U1@web.com', '2020-10-19', 'close'),
(14, '1U2@web.com', '2020-11-03', 'close'),
(15, '1U2@web.com', '2020-11-18', 'close'),
(16, '1U2@web.com', '2020-10-08', 'close'),
(17, '1U2@web.com', '2020-10-08', 'close'),
(18, '1U2@web.com', '2020-10-08', 'close'),
(19, '1U2@web.com', '2020-10-08', 'close'),
(20, '1U2@web.com', '2020-10-08', 'close'),
(21, 'anuj1@web.com', '2020-10-08', 'close'),
(22, 'anuj@web.com', '2020-10-09', 'close'),
(23, 'anuj@web.com', '2020-10-09', 'close'),
(24, 'anuj@web.com', '2020-10-09', 'close'),
(25, 'anuj@web.com', '2020-10-09', 'close'),
(26, 'anuj@web.com', '2020-10-09', 'close'),
(27, 'anuj@web.com', '2020-10-09', 'close'),
(28, 'anuj@web.com', '2020-10-09', 'close'),
(29, 'anuj@web.com', '2020-10-10', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `first` varchar(50) NOT NULL,
  `second` varchar(50) NOT NULL,
  `third` varchar(50) NOT NULL,
  `fourth` varchar(50) NOT NULL,
  `fifth` varchar(50) NOT NULL,
  `sixth` varchar(50) NOT NULL,
  `seventh` varchar(50) NOT NULL,
  `eighth` varchar(50) NOT NULL,
  `ninth` varchar(50) NOT NULL,
  `tenth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `userid`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`, `eighth`, `ninth`, `tenth`) VALUES
(1, 'topuser@website.com', '1U1@web.com', '1U2@web.com', '', '', '', '', '', '', '', ''),
(2, '1U1@web.com', '2U1@web.com', '2u2@web.com', '2u3@web.com', '2u4@gmail.com', '2u5@web.com', '2u6@web.com', '2u7@web.com', '2u8@web.com', '2u9@web.com', '2u10@web.com'),
(3, '1U2@web.com', 'anuj@web.com', 'anuj1@web.com', '', 'mahi@web.com', '', '', '', '', '', ''),
(4, '2U1@web.com', '3U1@web.com', '', '', '', '', '', '', '', '', ''),
(5, '2u2@web.com', '', '', '', '', '', '', '', '', '', ''),
(6, '2u3@web.com', '', '', '', '', '', '', '', '', '', ''),
(7, '2u4@gmail.com', '', '', '', '', '', '', '', '', '', ''),
(8, '2u5@web.com', '', '', '', '', '', '', '', '', '', ''),
(9, '2u6@web.com', '', '', '', '', '', '', '', '', '', ''),
(10, '2u7@web.com', '', '', '', '', '', '', '', '', '', ''),
(11, '2u8@web.com', '', '', '', '', '', '', '', '', '', ''),
(12, '2u9@web.com', '', '', '', '', '', '', '', '', '', ''),
(13, '2u10@web.com', '', '', '', '', '', '', '', '', '', ''),
(14, '3U1@web.com', '', '', '', '', '', '', '', '', '', ''),
(15, 'anuj@web.com', 'mahia@web.com', 'div@web.com', 'van@web.com', 'letsee@gmail.com', '', 'date@trial.com', '', 'ani@web.com', '', 'f@web.com'),
(16, 'mahi@web.com', '', '', '', '', '', '', '', '', '', ''),
(17, 'anuj1@web.com', 'anuj2@web.com', '', '', '', '', '', '', '', '', ''),
(18, 'anuj2@web.com', '', '', '', '', '', '', '', '', '', ''),
(19, 'mahia@web.com', '', '', '', '', '', '', '', '', '', ''),
(20, 'div@web.com', '', '', '', '', '', '', '', '', '', ''),
(21, 'letsee@gmail.com', '', '', '', '', '', '', '', '', '', ''),
(22, 'date@trial.com', '', '', '', '', '', '', '', '', '', ''),
(23, 'f@web.com', '', '', '', '', '', '', '', '', '', ''),
(24, 'van@web.com', '', '', '', '', '', '', '', '', '', ''),
(25, 'ani@web.com', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `account` varchar(20) NOT NULL,
  `under_userid` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `side` enum('first','second','third','fourth','fifth','sixth','seventh','eighth','ninth','tenth') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `address`, `account`, `under_userid`, `amount`, `side`) VALUES
(1, 'Top user', 'topuser@website.com', '12345678', '8457689', 'gghj', '56789', '', 21500, ''),
(2, '1-U-1', '1U1@web.com', '12345678', '56789', 'hb', '5463256', 'topuser@website.com', 1050, 'first'),
(3, '1-U-2', '1U2@web.com', '12345678', '35', 'yth', '3', 'topuser@website.com', 650, 'second'),
(4, '2U1', '2U1@web.com', '12345678', '45', 'hy', '54', '1U1@web.com', 100, 'first'),
(5, '2U2', '2u2@web.com', '12345678', '54', 'gt', '45', '1U1@web.com', 0, 'second'),
(6, '2u3', '2u3@web.com', '12345678', '423', 'hy', '34', '1U1@web.com', 0, 'third'),
(7, '2u4', '2u4@gmail.com', '12345678', '234', 'rg', '34', '1U1@web.com', 0, 'fourth'),
(8, '2u5', '2u5@web.com', '12345678', '5', 'g', '4', '1U1@web.com', 0, 'fifth'),
(9, '2u6', '2u6@web.com', '12345678', '54t', 'gf', '652', '1U1@web.com', 0, 'sixth'),
(10, '2u7', '2u7@web.com', '12345678', '54', 'tg', '43', '1U1@web.com', 0, 'seventh'),
(11, '2u8', '2u8@web.com', '12345678', '43', 'r', '32', '1U1@web.com', 0, 'eighth'),
(12, '2u9', '2u9@web.com', '12345678', '54', 'gt', '54', '1U1@web.com', 0, 'ninth'),
(13, '2u10', '2u10@web.com', '12345678', '45', 'g', '34', '1U1@web.com', 0, 'tenth'),
(14, '3u1', '3U1@web.com', '12345678', '45', 'gfr', '43', '2U1@web.com', 0, 'first'),
(15, 'anuj', 'anuj@web.com', '12345678', '64', 'gtr', '54', '1U2@web.com', 600, 'first'),
(16, 'mahi', 'mahi@web.com', '12345678', '567', 'f', '3', '1U2@web.com', 0, 'fourth'),
(17, 'anuja', 'anuj1@web.com', '12345678', '45', 'tg', '53', '1U2@web.com', 100, 'second'),
(18, 'anujaa', 'anuj2@web.com', '12345678', '324', 'wgt', '34', 'anuj1@web.com', 0, 'first'),
(19, 'mahia', 'mahia@web.com', '12345678', '34', 'thr', 'rt', 'anuj@web.com', 0, 'first'),
(20, 'div', 'div@web.com', '12345678', '465', 'ht', '56', 'anuj@web.com', 0, 'second'),
(21, 'letsee', 'letsee@gmail.com', '12345678', '9049', 'jdogjf', '34', 'anuj@web.com', 0, 'fourth'),
(22, 'date', 'date@trial.com', '12345678', '89899', 'dnvkjfnj', '989', 'anuj@web.com', 0, 'sixth'),
(23, 'finaldatetrial', 'f@web.com', '12345678', '34', 'fr', '43', 'anuj@web.com', 0, 'tenth'),
(24, 'van', 'van@web.com', '12345678', '34', 'rg', 'rg', 'anuj@web.com', 0, 'third'),
(25, 'vni', 'ani@web.com', '12345678', '35', 'f', '34', 'anuj@web.com', 0, 'eighth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`permanentdate`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_received`
--
ALTER TABLE `income_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin_list`
--
ALTER TABLE `pin_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin_request`
--
ALTER TABLE `pin_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `income_received`
--
ALTER TABLE `income_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pin_list`
--
ALTER TABLE `pin_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pin_request`
--
ALTER TABLE `pin_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
