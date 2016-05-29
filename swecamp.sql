-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 08:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swecamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`accountID` int(10) NOT NULL,
  `title` int(20) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `postalcode` int(5) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `food` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `artifact` int(11) DEFAULT NULL,
  `join` int(11) NOT NULL,
  `tour1` int(11) NOT NULL,
  `tour2` int(11) NOT NULL,
  `tour3` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `title`, `firstname`, `lastname`, `address`, `province`, `postalcode`, `phoneno`, `email`, `department`, `food`, `password`, `artifact`, `join`, `tour1`, `tour2`, `tour3`) VALUES
(9, 1, 'หฤษฎ์', 'คงทอง', '', '64', 111111, 0, 'user@wu.ac.th', 'test', '', '123456', 0, 1, 1, 0, 0),
(18, 2, 'กาลกิณี ', 'มนตรี ', '11', 'ตรัง', 80160, 833774856, 'qwerty@wu.ac.th', 'tes', 'test', '123456', 0, 2, 1, 1, 0),
(19, 1, 'เดช ', 'นัยนานนท์', '54', 'ระยอง', 80345, 977223845, 'dat123456@gmail.com', 'test', 'test', '123456', 1, 2, 1, 1, 0),
(20, 3, 'ประไพพรรณ', 'ชื่นตา', '', '0', 80321, 873774856, 'prapai@gmail.com', 'test', '', '123456', 1, 2, 1, 1, 0),
(21, 1, 'ทดสอบ', 'ทดสอบ', 'ย้ายยย', '19', 12345, 123456789, 'test1@email.com', 'ทดสอบ', '', '123456', 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `lastname`, `firstname`, `address`, `phoneNumber`) VALUES
(2, 'admin', 'admin', 'ladmin', 'fadmin', '12 test', '0812231321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `accountID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
