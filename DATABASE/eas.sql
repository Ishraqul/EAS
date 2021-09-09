-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 08:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `ID` int(10) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@eas.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `ID` int(100) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`ID`, `Name`, `Email`, `Password`, `Phone`, `Position`) VALUES
(5, 'Ishraqul Islam', 'ishraqthechamp0312@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01847117789', 'CEO'),
(6, 'Asif Bin Saif', 'abs@gmail.com', 'eb62f6b9306db575c2d596b1279627a4', '0184756988', 'GM'),
(7, 'Mahin Islam', 'mahin@yahoo.com', 'bb6b07f0fd4afe38c61f232bbb693fd7', '01236475965', 'Senior Developer'),
(8, 'R', 'a@gmail.com', '4b43b0aee35624cd95b910189b3dc231', '789465132', 'GM'),
(9, 'Afia', 'af@gmail.com', '7813d1590d28a7dd372ad54b5d29d033', '01234567892', 'Social Media Manager'),
(10, 'Atiq', 'atc@gmail.com', 'cf79ae6addba60ad018347359bd144d2', '01847116987', 'General Manager');

-- --------------------------------------------------------

--
-- Table structure for table `task_info`
--

CREATE TABLE `task_info` (
  `Serial No.` int(250) NOT NULL,
  `Task_Assigned_To` varchar(500) NOT NULL,
  `Task_Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_info`
--

INSERT INTO `task_info` (`Serial No.`, `Task_Assigned_To`, `Task_Description`) VALUES
(1, 'Project Manager', 'Check the progress on the Web Dev Team for the Shopify Website'),
(2, 'UX Designer', 'Update the UI/UX of the Android App for the office'),
(3, 'Junior Developer', 'Create the Index page for the new e-commerce website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `task_info`
--
ALTER TABLE `task_info`
  ADD PRIMARY KEY (`Serial No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_info`
--
ALTER TABLE `task_info`
  MODIFY `Serial No.` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
