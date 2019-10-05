-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 09:51 AM
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
(50, 1, 'Panavel Rly. Stn.', 13, 0, 0),
(50, 2, 'Thana Naka', 14, 0, 0),
(50, 3, 'Asudgaon Depot', 15, 0, 0),
(50, 4, 'kharghar', 16, 0, 0),
(50, 5, 'Nerul lp', 17, 0, 0),
(50, 6, 'Juinagar Station', 18, 0, 0),
(50, 7, 'Vashi Bus Terminus', 19, 0, 0),
(71, 1, 'Belapur Station', 20, 0, 0),
(71, 2, 'C.B.D Belapur Highway', 21, 0, 0),
(71, 3, 'kharghar', 22, 0, 0),
(71, 4, 'Kalamboli Sector 16', 23, 0, 0),
(71, 5, 'Navde Fata', 24, 0, 0),
(71, 6, 'Tondare Fata', 25, 0, 0),
(71, 7, 'Kalyan St Stand (W)', 26, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
