-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 11:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `competitors`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `branch_address` varchar(200) NOT NULL,
  `branch_city` varchar(50) NOT NULL,
  `branch_barangay` varchar(100) NOT NULL,
  `branch_telephone` int(11) NOT NULL,
  `branch_cellphone` int(11) NOT NULL,
  `competitor_id` int(11) NOT NULL,
  PRIMARY KEY (`branch_id`),
  KEY `competitor_id` (`competitor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_address`, `branch_city`, `branch_barangay`, `branch_telephone`, `branch_cellphone`, `competitor_id`) VALUES
(1, 'qwe', 'qwe', 'qwe', 'qwe', 123, 123, 3);

-- --------------------------------------------------------

--
-- Table structure for table `competitors`
--

CREATE TABLE IF NOT EXISTS `competitors` (
  `competitors_id` int(11) NOT NULL AUTO_INCREMENT,
  `competitors_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`competitors_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `competitors`
--

INSERT INTO `competitors` (`competitors_id`, `competitors_name`, `is_active`) VALUES
(3, 'Rose Pharmacy', 1),
(4, 'Generica', 1),
(5, 'The Generics Pharmacy', 1),
(6, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logfiles`
--

CREATE TABLE IF NOT EXISTS `logfiles` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_description` varchar(100) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logfiles`
--

INSERT INTO `logfiles` (`log_id`, `log_description`) VALUES
(1, 'Added Branch');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `competitor_id` FOREIGN KEY (`competitor_id`) REFERENCES `competitors` (`competitors_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
