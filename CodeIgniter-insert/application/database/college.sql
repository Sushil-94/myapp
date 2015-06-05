-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2015 at 07:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--
CREATE DATABASE IF NOT EXISTS `college` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `college`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Student_id` int(10) NOT NULL AUTO_INCREMENT,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Email` varchar(255) NOT NULL,
  `Student_Mobile` varchar(255) NOT NULL,
  `Student_Address` varchar(255) NOT NULL,
  `Student_password` varchar(255) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_id`, `Student_Name`, `Student_Email`, `Student_Mobile`, `Student_Address`, `Student_password`) VALUES
(1, 'sushil', 'lostsoul_sushil@yahoo.com', '9845389851', 'hetauda sanopokhara', ''),
(2, 'uhsdf', 'lostsoul_sushil@yahoo.com', '1234566789', 'hetauda sanopokhara', '42142r422423f'),
(3, 'hsdhuvcds', 'lostsoul-sushil@yahoo.com', '9845389851', 'hetauda sanopokhara', 'ssushil123'),
(4, 'sushil thapa', 'lostsoul_sushil@yahoo.com', '9845389851', 'Hetauda Sanopokhara', 'sushil89851'),
(5, 'sushil thapa', 'lostsoul_sushil@yahoo.com', '9845389851', 'Hetauda Sanopokhara', 'sushil89851');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
