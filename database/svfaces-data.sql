-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2012 at 09:49 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `svfaces`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `address_3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `person_id_idxfk_1` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `advocate_case_assn`
--

CREATE TABLE IF NOT EXISTS `advocate_case_assn` (
  `advocate_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  KEY `advocate_id_idx` (`advocate_id`),
  KEY `case_id_idx` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`) VALUES
(1, 'CIA'),
(2, 'FBI'),
(3, 'IRS'),
(4, 'NASA');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crime_type_id` int(11) DEFAULT NULL,
  `crime_date` datetime DEFAULT NULL,
  `agency_reported_to_id` int(11) DEFAULT NULL,
  `crime_report_number` int(11) DEFAULT NULL,
  `family_law_number` int(11) DEFAULT NULL,
  `court_id` int(11) DEFAULT NULL,
  `case_status_id` int(11) DEFAULT NULL,
  `primary_person_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `crime_type_id_idxfk` (`crime_type_id`),
  KEY `agency_reported_to_id_idxfk` (`agency_reported_to_id`),
  KEY `court_id_idxfk` (`court_id`),
  KEY `case_status_id_idxfk` (`case_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE IF NOT EXISTS `case_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`id`, `name`) VALUES
(3, 'Awaiting Trial'),
(2, 'Closed'),
(1, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `case_suspect_assn`
--

CREATE TABLE IF NOT EXISTS `case_suspect_assn` (
  `case_id` int(11) NOT NULL,
  `suspect_id` int(11) NOT NULL,
  KEY `case_id_idx` (`case_id`),
  KEY `suspect_id_idx` (`suspect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `court_information`
--

CREATE TABLE IF NOT EXISTS `court_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `information` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE IF NOT EXISTS `crime_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`id`, `name`) VALUES
(2, 'Assault'),
(3, 'Break and Enter'),
(5, 'Fraud'),
(6, 'Money Laundering'),
(1, 'Robbery'),
(4, 'Sexual Assault');

-- --------------------------------------------------------

--
-- Table structure for table `ethnicity`
--

CREATE TABLE IF NOT EXISTS `ethnicity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ethnicity`
--

INSERT INTO `ethnicity` (`id`, `name`) VALUES
(1, 'American'),
(2, 'African American'),
(3, 'Asian'),
(4, 'European'),
(5, 'Polynesian'),
(6, 'Mexican'),
(7, 'Hispanic'),
(8, 'African');

-- --------------------------------------------------------

--
-- Table structure for table `grant`
--

CREATE TABLE IF NOT EXISTS `grant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `grant`
--

INSERT INTO `grant` (`id`, `name`) VALUES
(1, 'grant1'),
(2, 'grant2');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(3, 'Chinese (Cantonese)'),
(2, 'Chinese (mandarin)'),
(1, 'English'),
(4, 'Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `victim_witness_num` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `social_security_number` int(11) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `ethnicity_id` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `primary_language_id` int(11) DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `elderly` tinyint(1) DEFAULT NULL,
  `agency_referred_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`victim_witness_num`),
  UNIQUE KEY `victim_witness_num` (`victim_witness_num`),
  KEY `ethnicity_id_idxfk` (`ethnicity_id`),
  KEY `primary_language_id_idxfk` (`primary_language_id`),
  KEY `agency_referred_id_idxfk` (`agency_referred_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `person_case_assn`
--

CREATE TABLE IF NOT EXISTS `person_case_assn` (
  `person_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  KEY `person_id_idx` (`person_id`),
  KEY `case_id_idx` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) DEFAULT NULL,
  `related_to_person_id` int(11) DEFAULT NULL,
  `relationship_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `person_id_idxfk` (`person_id`),
  KEY `related_to_person_id_idxfk` (`related_to_person_id`),
  KEY `relationship_type_id_idxfk` (`relationship_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `relationship_type`
--

CREATE TABLE IF NOT EXISTS `relationship_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `relationship_type`
--

INSERT INTO `relationship_type` (`id`, `name`) VALUES
(5, 'Aunt Of'),
(4, 'Child Of'),
(7, 'Cousin Of'),
(2, 'Father of'),
(9, 'Husband Of'),
(1, 'Mother of'),
(3, 'Parent Of'),
(6, 'Uncle Of'),
(8, 'Wife Of');

-- --------------------------------------------------------

--
-- Table structure for table `role_type`
--

CREATE TABLE IF NOT EXISTS `role_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `role_type`
--

INSERT INTO `role_type` (`id`, `name`) VALUES
(3, 'Administrator'),
(2, 'Advocate'),
(4, 'Clerk'),
(1, 'Manager');

-- --------------------------------------------------------
--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_type_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_last_login` datetime DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `role_type_id_idxfk` (`role_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role_type_id`, `username`, `password`, `date_last_login`, `first_name`, `last_name`) VALUES
(1, 3, 'gseeto', 'gseeto', NULL, 'Gareth', 'Seeto'),
(2, 1, 'hnguyen', 'hnguyen', NULL, 'Huey', 'Nguyen'),
(3, 2, 'llam', 'llam', NULL, 'Larry', 'Lam'),
(4, 2, 'dtran', 'dtran', NULL, 'David', 'Tran');

-- --------------------------------------------------------
--
-- Table structure for table `advocate`
--

CREATE TABLE IF NOT EXISTS `advocate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `grant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `login_id_idxfk` (`login_id`),
  KEY `grant_id_idxfk` (`grant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `advocate`
--

INSERT INTO `advocate` (`id`, `login_id`, `grant_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `services_type_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `services_type_id_idxfk` (`services_type_id`),
  KEY `person_id_idxfk_2` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `name`) VALUES
(3, 'Counselling'),
(4, 'Financial Assistance'),
(2, 'Housing Assistance'),
(1, 'Legal Representation');

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE IF NOT EXISTS `suspect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `pfd` int(11) DEFAULT NULL,
  `information` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
