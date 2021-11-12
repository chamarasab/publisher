-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2021 at 03:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework03`
--

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `p_id` int(11) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_gender` varchar(20) DEFAULT NULL,
  `p_city` varchar(40) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`p_id`, `emp_name`, `emp_gender`, `p_city`, `country`, `branch`, `sdate`) VALUES
(1, 'Kavin', 'male', 'New York', 'USA', 15, '1969-12-25'),
(2, 'Rajini', 'female', 'New Delhi', 'India', 10, '1985-10-01'),
(3, 'Zidhan', 'male', 'Adelaide', 'Australia', 5, '1975-09-05'),
(4, 'Jhon', 'female', 'London', 'UK', 8, '1948-07-10'),
(5, 'Ben', 'male', 'Leeds', 'UK', 12, '1975-01-01'),
(6, 'Kavin', 'male', 'Houston', 'USA', 25, '1990-12-10'),
(7, 'mahesh', 'male', 'New Delhi', 'India', 8, '1950-07-15'),
(8, 'Anil', 'male', 'Colombo', 'Sri Lanka', 7, '0200-01-01'),
(9, 'jeni', 'female', 'New York', 'USA', 10, '1988-12-25'),
(10, 'Ben', 'male', 'London', 'UK', 20, '1995-09-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
