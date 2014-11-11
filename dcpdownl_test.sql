-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2014 at 05:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multilang`
--

-- --------------------------------------------------------

--
-- Table structure for table `alog_language`
--

CREATE TABLE IF NOT EXISTS `alog_language` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alog_language`
--

INSERT INTO `alog_language` (`id`, `code`, `name`) VALUES
(1, 'en', 'English'),
(2, 'da', 'Danish');

-- --------------------------------------------------------

--
-- Table structure for table `alog_page`
--

CREATE TABLE IF NOT EXISTS `alog_page` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alog_page`
--

INSERT INTO `alog_page` (`id`, `name`) VALUES
(1, 'home'),
(2, 'response');

-- --------------------------------------------------------

--
-- Table structure for table `alog_page_entry`
--

CREATE TABLE IF NOT EXISTS `alog_page_entry` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `language_code` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL,
  `field_label` varchar(1024) NOT NULL,
  `field_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `alog_page_entry`
--

INSERT INTO `alog_page_entry` (`id`, `language_code`, `page_id`, `field_label`, `field_text`) VALUES
(1, '2', 1, 'name', 'Navn:'),
(2, '2', 1, 'start_time', 'Start tid:'),
(3, '2', 1, 'end_time', 'Slut tid:'),
(4, '2', 1, 'flight_no', 'Fly nr:'),
(5, '2', 1, 'place', 'Sted:'),
(6, '2', 1, 'comment', 'kommentar:'),
(7, '1', 1, 'name', 'Name:'),
(8, '1', 1, 'start_time', 'Start Time:'),
(9, '1', 1, 'end_time', 'End Time:'),
(10, '1', 1, 'flight_no', 'Flight No:'),
(11, '1', 1, 'place', 'Place:'),
(12, '1', 1, 'comment', 'Comment:'),
(13, '1', 1, 'save_&_start', 'Save & Start'),
(14, '1', 1, 'save_&_exit', 'Save & Exit'),
(15, '2', 1, 'save_&_start', 'GEM & Start'),
(16, '2', 1, 'save_&_exit', 'Gem & afslut'),
(17, '1', 2, 'name', 'Name'),
(18, '2', 2, 'name', 'Medarbejder'),
(19, '1', 2, 'is_there_objects_that_could_be_from the_shop', 'Is there objects that could be from the shop?'),
(20, '2', 2, 'is_there_objects_that_could_be_from the_shop', 'Er der varer der kan stamme fra butkken?'),
(21, '1', 2, 'yes', 'Yes'),
(22, '2', 2, 'yes', 'Ja'),
(23, '1', 2, 'no', 'No'),
(24, '2', 2, 'no', 'Nej'),
(25, '1', 2, 'signature', 'Signature'),
(26, '2', 2, 'signature', 'Underskift'),
(27, '1', 2, 'back', 'BACK'),
(28, '2', 2, 'back', 'TILBAGE'),
(29, '1', 2, 'start', 'Start/New'),
(30, '2', 2, 'start', 'Gem/Ny'),
(31, '1', 2, 'roof_picture', 'Roof Picture'),
(32, '2', 2, 'roof_picture', 'TAG BILLEDE');

-- --------------------------------------------------------

--
-- Table structure for table `alog_user`
--

CREATE TABLE IF NOT EXISTS `alog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `start_time` varchar(200) NOT NULL,
  `end_time` varchar(200) NOT NULL,
  `flight_no` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
