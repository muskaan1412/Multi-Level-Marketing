-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 02:12 PM
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
(1, 'topuser@website.com', 0, 950),
(2, '1-1@web.com', 0, 50),
(3, '2-1@web.com', 0, 0);

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
(1, '1-1@web.com', 50, '2020-09-27');

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
(1, 'topuser@website.com', 714633, 'close'),
(2, 'topuser@website.com', 980684, 'close');

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
(1, 'topuser@website.com', '2020-09-27', 'close'),
(2, 'topuser@website.com', '2020-09-27', 'close');

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
(1, 'topuser@website.com', '1-1@web.com', '', '', '', '', '', '', '', '', ''),
(2, '1-1@web.com', '2-1@web.com', '', '', '', '', '', '', '', '', ''),
(3, '2-1@web.com', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `email`, `password`, `mobile`, `address`, `account`, `under_userid`, `amount`, `side`) VALUES
(1, 'topuser@website.com', '12345678', '8199828075', 'YNR', '12345678', '', 950, ''),
(2, '1-1@web.com', '12345678', '95', '95', '95', 'topuser@website.com', 50, 'first'),
(3, '2-1@web.com', '12345678', '34', 'f', '324', '1-1@web.com', 0, 'first');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `income_received`
--
ALTER TABLE `income_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pin_list`
--
ALTER TABLE `pin_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pin_request`
--
ALTER TABLE `pin_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
