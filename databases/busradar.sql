-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 09:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busradar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busno` int(11) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busno`, `source`, `destination`, `id`) VALUES
(103, 'Panvel Bus Stop', 'Nerul Lp', 1),
(71, 'Belapur station', 'Kalyan Station', 3),
(50, 'Panvel Station', 'Vashi bus Terminus', 4);

-- --------------------------------------------------------

--
-- Table structure for table `incoming`
--

CREATE TABLE `incoming` (
  `BusNo` int(11) NOT NULL,
  `From` varchar(30) NOT NULL,
  `To` varchar(30) NOT NULL,
  `Stop` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incoming`
--

INSERT INTO `incoming` (`BusNo`, `From`, `To`, `Stop`, `id`) VALUES
(103, 'Panvel Bus Stop', 'Nerul Lp', 'Kharghar', 1),
(50, 'Panvel Station', 'Koperkhairne', 'Kharghar', 2),
(71, 'Kalyan Station', 'Belapur Station', 'Kharghar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('9987', '9987');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `BusNo` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `StopName` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT 0,
  `isvisited` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`BusNo`, `Position`, `StopName`, `ID`, `time`, `isvisited`) VALUES
(103, 1, 'Panvel Bus Stop', 1, -124, 0),
(103, 2, 'Panvel Bridge', 2, -114, 0),
(103, 3, 'Khanda Colony', 3, -101, 0),
(103, 4, 'Asudgaon Depot', 4, -78, 0),
(103, 5, 'Taloja', 5, -66, 0),
(103, 6, 'Kopra Gaon', 6, -41, 0),
(103, 7, 'Kharghar', 7, -36, 0),
(103, 8, 'C.B.D Belapur Highway', 8, -21, 0),
(103, 9, 'Uran Phata', 9, -11, 0),
(103, 10, 'Nerul Lp', 10, 1, 0),
(50, 5, 'Kharghar', 11, 5, 0),
(71, 6, 'Kharghar', 12, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE `stops` (
  `busno` int(11) NOT NULL,
  `stopname` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`busno`, `stopname`, `latitude`, `longitude`, `id`) VALUES
(103, 'Panvel Bus Stop', 18.990907, 73.116376, 2),
(50, 'Panavel Rly. Stn.', 18.99172, 73.120824, 4),
(103, 'Panvel Bridge', 18.994306, 73.114374, 12),
(50, 'Thana Naka', 18.998761, 73.109691, 11),
(103, 'Khanda Colony', 19.009855, 73.107657, 25),
(103, 'Asudgaon Depot', 19.014544, 73.107229, 48),
(50, 'Asudgaon Depot', 19.014622, 73.107229, 21),
(71, 'Belapur Station', 19.021178, 73.039993, 3),
(103, 'C.B.D Belapur Highway', 19.024211, 73.03951, 105),
(71, 'C.B.D Belapur Highway', 19.024262, 73.039519, 15),
(103, 'Kharghar', 19.027125, 73.059422, 90),
(71, 'kharghar ', 19.027322, 73.059422, 26),
(50, 'kharghar ', 19.027345, 73.059422, 28),
(103, 'Taloja', 19.033274, 73.085058, 60),
(103, 'Uran Phata', 19.034465, 73.029609, 115),
(103, 'Kopra Gaon', 19.036942, 73.073174, 85),
(71, 'Kalamboli Sector 16', 19.038707, 73.099458, 32),
(103, 'Nerul Lp', 19.04649, 73.024793, 127),
(50, 'Nerul lp', 19.047, 73.024793, 38),
(71, 'Navde Fata', 19.053081, 73.099715, 41),
(50, 'Juinagar Station ', 19.055428, 73.015926, 49),
(71, 'Kalyan St Stand (W)', 19.056334, 72.884354, 56),
(50, 'Vashi Bus Terminus', 19.075958, 72.998019, 61),
(71, 'Tondare Fata', 19.08002, 73.136238, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming`
--
ALTER TABLE `incoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stops`
--
ALTER TABLE `stops`
  ADD PRIMARY KEY (`latitude`),
  ADD KEY `stopname` (`stopname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incoming`
--
ALTER TABLE `incoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
