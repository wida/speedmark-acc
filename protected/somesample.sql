-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 01:31 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `somesample`
--

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `band_id` int(11) NOT NULL AUTO_INCREMENT,
  `band_name` varchar(100) NOT NULL,
  PRIMARY KEY (`band_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `band`
--

INSERT INTO `band` (`band_id`, `band_name`) VALUES
(1, 'Noah'),
(2, 'Gigi'),
(3, 'Dewa'),
(4, 'Slank'),
(5, 'Armada'),
(6, 'Kangen Band'),
(7, 'Kahitna'),
(8, 'Lyla'),
(9, 'Tangga'),
(10, 'Saykoji'),
(11, 'Jamrud');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `pro_id`, `city_name`) VALUES
(1, 1, 'Bandung'),
(2, 1, 'Garut'),
(3, 1, 'Sukabumi'),
(4, 1, 'Bogor'),
(5, 1, 'Karawang'),
(6, 1, 'Purwakarta'),
(7, 1, 'Cianjur'),
(8, 1, 'Bekasi'),
(9, 1, 'Depok'),
(10, 1, 'Subang'),
(11, 1, 'Indramayu'),
(12, 1, 'Majalengka'),
(13, 1, 'Cirebon'),
(14, 1, 'Kuningan'),
(15, 1, 'Sumedang'),
(16, 1, 'Kabupaten Bandung'),
(17, 1, 'Kabupaten Bandung Barat'),
(18, 1, 'Cimahi'),
(19, 1, 'Tasik Malaya'),
(20, 1, 'Ciamis'),
(21, 1, 'Banjar'),
(22, 1, 'Kabupaten Bekasi'),
(23, 1, 'Kabupaten Bogor'),
(24, 1, 'Kabupaten Sukabumi'),
(25, 1, 'Kabupaten Tasik Malaya');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `band_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_desc` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `band_id`, `city_id`, `event_date`, `event_desc`) VALUES
(1, 1, 3, '2012-10-06', 'ngbuburit'),
(2, 1, 5, '2012-09-26', '-'),
(5, 1, 7, '2012-09-29', '-'),
(22, 1, 1, '2012-09-26', '-'),
(23, 1, 13, '2012-09-27', 'cirebon'),
(24, 1, 20, '2012-09-30', 'ciamis'),
(25, 3, 11, '2012-09-27', 'tour indramayu'),
(26, 3, 12, '2012-09-30', 'tour majalengka');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`pro_id`, `pro_name`) VALUES
(1, 'Jawa Barat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
