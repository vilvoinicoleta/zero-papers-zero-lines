-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2017 at 08:09 AM
-- Server version: 5.5.52-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartcit_central`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `CNP` bigint(13) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `people`
--


-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PeopleID` int(11) NOT NULL,
  `StudyLevel` int(11) NOT NULL,
  `SchoolName` varchar(200) NOT NULL,
  `FinishGPA` float NOT NULL,
  `ExamGPA` float NOT NULL,
  `FinalExamID` int(11) NOT NULL,
  `DateStarted` date NOT NULL,
  `DateCompleted` date NOT NULL,
  `IsCompleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `studies`
--
-- --------------------------------------------------------

--
-- Table structure for table `study_levels`
--

CREATE TABLE IF NOT EXISTS `study_levels` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `ISCED` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `study_levels`
--

INSERT INTO `study_levels` (`ID`, `Name`, `ISCED`) VALUES
(1, 'Primary', 1),
(2, 'Lower Secondary', 2),
(3, 'Upper Secondary', 3),
(4, 'Post-secondary', 4),
(5, 'Short-cycle tertiary', 5),
(6, 'Bachelor', 6),
(7, 'Master', 7),
(8, 'Doctoral', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
