-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_v`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(20) NOT NULL,
  `bus` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `seat` varchar(25) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `journeyDate` varchar(20) NOT NULL,
  `boarding` varchar(25) NOT NULL,
  `destination` varchar(25) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `bus`, `class`, `seat`, `userEmail`, `journeyDate`, `boarding`, `destination`, `payment`) VALUES
(8, 'Green Line', 'AC', 'A1', 'as@fl.com', '2020-05-30', 'Abdullahapur', 'Khulna', 'Bkash'),
(9, 'Ena', 'Non AC', 'A4', 'sdfdsf@fdsdsf.com', '2020-05-30', 'Abdullahapur', 'Khulna', 'Bkash'),
(10, 'Green Line', 'AC', 'A1', 'test@fl.com', '2020-05-22', 'Gabtoli', 'Jashore', 'Bkash'),
(12, 'Green Line', 'AC', 'A1', 'ayon@test.com', '2020-05-30', 'Abdullahapur', 'Khulna', 'Bkash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
