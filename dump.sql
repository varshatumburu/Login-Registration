-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Nov 06, 2021 at 05:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empID` varchar(10) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `empName` varchar(20) NOT NULL,
  `DoJ` date NOT NULL,
  `salary` int(11) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobileNo` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empID`, `passwd`, `empName`, `DoJ`, `salary`, `department`, `mobileNo`, `email`) VALUES
('E01', 'x@b34', 'Ravi', '2001-11-12', 25000, 'Technical', 2456789121, 'rtumburu@gmail.com'),
('E12', 'pwert', 'Paul Walker', '2021-02-04', 12000, 'Social Media', 8901234567, 'pw@hotmail.com'),
('E23', 'p57$r', 'Pratima', '1998-10-01', 50000, 'Management', 8008507065, 'jpratima@gmail.com'),
('E46', 'als8*', 'Tripti', '2002-03-12', 42000, 'Social Media', 9539027890, 'tripti@gmail.com'),
('E50', 'gsl92', 'Jyoti', '1995-04-12', 35000, 'Creative', 9008123456, 'jyotir@yahoo.com'),
('E71', 'u80y1', 'David', '1990-12-01', 18000, 'Human Resources', 7337567025, 'daviddobrik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empID`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
