-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 12:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `businfo`
--

CREATE TABLE `businfo` (
  `Bus_Number` varchar(20) NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businfo`
--

INSERT INTO `businfo` (`Bus_Number`, `Time`) VALUES
('0002645', '18:20:00.000000'),
('001', '12:10:00.000000'),
('17345', '08:17:00.000000'),
('6523', '11:10:00.000000'),
('654326', '08:00:00.000000'),
('7634', '11:50:00.000000'),
('874234', '05:35:00.000000'),
('9723', '18:40:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businfo`
--
ALTER TABLE `businfo`
  ADD PRIMARY KEY (`Bus_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
