-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2016 at 01:37 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_theangel`
--
CREATE DATABASE IF NOT EXISTS `db_theangel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_theangel`;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `votewhen` datetime NOT NULL,
  `image_id` int(10) NOT NULL,
  `ipaddress` varchar(200) DEFAULT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `votewhen`, `image_id`, `ipaddress`, `image_name`) VALUES
(58, '2014-01-26 23:16:08', 1, '127.0.0.1', 'Aishwarya Rai'),
(57, '2014-01-26 22:53:15', 1, '127.0.0.1', 'Aishwarya Rai'),
(56, '2014-01-26 22:53:03', 1, '127.0.0.1', 'Aishwarya Rai'),
(55, '2014-01-26 21:40:31', 7, '127.0.0.1', 'Anushka Shetty'),
(54, '2014-01-26 21:31:05', 2, '127.0.0.1', 'Angelina Jolie'),
(53, '2014-01-26 21:30:49', 2, '127.0.0.1', 'Angelina Jolie'),
(52, '2014-01-26 01:03:25', 3, '127.0.0.1', 'Katrina Kaif'),
(51, '2014-01-26 01:03:20', 3, '127.0.0.1', 'Katrina Kaif'),
(50, '2014-01-26 01:03:17', 3, '127.0.0.1', 'Katrina Kaif'),
(48, '2014-01-26 01:02:18', 10, '127.0.0.1', 'Kavya Madhavan'),
(49, '2014-01-26 01:02:54', 6, '127.0.0.1', 'Vidya Balan'),
(47, '2014-01-26 01:02:10', 12, '127.0.0.1', 'Nayanthara'),
(46, '2014-01-26 01:02:07', 12, '127.0.0.1', 'Nayanthara'),
(45, '2014-01-26 01:01:59', 4, '127.0.0.1', 'Kareena Kapoor'),
(44, '2014-01-26 01:01:49', 4, '127.0.0.1', 'Kareena Kapoor'),
(59, '2014-01-26 23:16:53', 1, '127.0.0.1', 'Aishwarya Rai'),
(60, '2014-01-26 23:24:37', 2, '127.0.0.1', 'Angelina Jolie'),
(61, '2014-01-26 23:27:44', 3, '127.0.0.1', 'Katrina Kaif'),
(62, '2014-01-26 23:28:47', 1, '127.0.0.1', 'Aishwarya Rai'),
(63, '2014-01-26 23:30:28', 1, '127.0.0.1', 'Aishwarya Rai'),
(64, '2014-01-26 23:31:00', 1, '127.0.0.1', 'Aishwarya Rai'),
(65, '2014-01-26 23:32:24', 2, '127.0.0.1', 'Angelina Jolie'),
(66, '2014-01-26 23:33:44', 2, '127.0.0.1', 'Angelina Jolie'),
(67, '2014-01-26 23:33:57', 3, '127.0.0.1', 'Katrina Kaif'),
(68, '2014-01-26 23:34:20', 3, '127.0.0.1', 'Katrina Kaif'),
(69, '2014-01-26 23:42:56', 12, '127.0.0.1', 'Nayanthara'),
(70, '2014-01-26 23:43:01', 11, '127.0.0.1', 'Meera Jasmine'),
(71, '2014-01-26 23:43:05', 10, '127.0.0.1', 'Kavya Madhavan'),
(72, '2014-01-26 23:43:10', 9, '127.0.0.1', 'Deepika Padukone'),
(73, '2014-01-26 23:43:14', 9, '127.0.0.1', 'Deepika Padukone'),
(74, '2014-01-26 23:43:17', 5, '127.0.0.1', 'Priyanka Chopra'),
(75, '2014-01-26 23:43:20', 6, '127.0.0.1', 'Vidya Balan'),
(76, '2014-01-26 23:43:24', 7, '127.0.0.1', 'Anushka Shetty'),
(77, '2014-01-26 23:43:34', 8, '127.0.0.1', 'Trisha Krishnan'),
(78, '2014-01-26 23:43:38', 4, '127.0.0.1', 'Kareena Kapoor'),
(79, '2014-01-26 23:43:58', 3, '127.0.0.1', 'Katrina Kaif'),
(80, '2014-01-26 23:44:01', 3, '127.0.0.1', 'Katrina Kaif'),
(81, '2014-01-26 23:44:03', 3, '127.0.0.1', 'Katrina Kaif'),
(82, '2014-01-26 23:54:51', 3, '127.0.0.1', 'Katrina Kaif'),
(83, '2014-03-31 22:01:26', 2, '127.0.0.1', 'Angelina Jolie'),
(84, '2016-03-12 23:38:26', 8, '127.0.0.1', 'Trisha Krishnan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
