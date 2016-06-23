-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2015 at 07:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE IF NOT EXISTS `flag` (
  `team_no` int(10) NOT NULL,
  `flag_1` varchar(100) NOT NULL,
  `flag_2` varchar(100) NOT NULL,
  `flag_3` varchar(100) NOT NULL,
  PRIMARY KEY (`team_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`team_no`, `flag_1`, `flag_2`, `flag_3`) VALUES
(1, 'akash', 'akash', 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `team_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `service_1` int(100) NOT NULL,
  `service_2` int(100) NOT NULL,
  `service_3` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  PRIMARY KEY (`team_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`team_no`, `name`, `service_1`, `service_2`, `service_3`, `total`) VALUES
(1, 'newbies', 0, 0, 0, 0),
(2, 'bluescreen', 100, 100, 100, 300),
(3, 'lethalComb', 100, 0, 100, 200);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
