-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busid` int(10) NOT NULL,
  `companynm` varchar(255) NOT NULL,
  `departtime` time NOT NULL,
  `coachno` varchar(10) NOT NULL,
  `startingcounter` varchar(255) NOT NULL,
  `endcounter` varchar(255) NOT NULL,
  `fare` float NOT NULL,
  `arrivaltime` time NOT NULL,
  `seatavailable` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `companynm`, `departtime`, `coachno`, `startingcounter`, `endcounter`, `fare`, `arrivaltime`, `seatavailable`) VALUES
(6, 'Desh Traveles', '17:00:00', 'DT01', 'Dhaka', 'Rajshahi', 450, '23:30:00', 30),
(7, 'Sr Traveles', '12:00:00', 'SR01', 'Dhaka', 'Bogra', 400, '17:00:00', 30);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(10) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`) VALUES
(1, 'Dhaka'),
(2, 'Rajshahi'),
(3, 'Naogaon'),
(4, 'Bogra');

-- --------------------------------------------------------

--
-- Table structure for table `sellerbonus`
--

CREATE TABLE `sellerbonus` (
  `id` int(10) NOT NULL,
  `bonus` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerbonus`
--

INSERT INTO `sellerbonus` (`id`, `bonus`) VALUES
(4, '100'),
(5, '0'),
(7, '0');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`, `status`) VALUES
(3, 'abc@gmail.com', '1234567j', 1),
(7, 'fgdg@gmail.com', '1234567j', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(16) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL,
  `filename` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `email`, `phonenumber`, `address`, `city`, `gender`, `salary`, `filename`) VALUES
(3, 'lolo tino', 'abc@gmail.com', '1761172191', 'nikunja-1', 'Dhaka', 'female', NULL, NULL),
(7, 'Al momin Faruk', 'fgdg@gmail.com', '12345678910', 'Bangladesh', 'Dhaka', NULL, '1000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `sellerbonus`
--
ALTER TABLE `sellerbonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellerbonus`
--
ALTER TABLE `sellerbonus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
