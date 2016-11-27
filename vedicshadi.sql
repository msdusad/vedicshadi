-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 06:00 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vedicshadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fullprofile`
--

CREATE TABLE IF NOT EXISTS `fullprofile` (
  `userid` int(10) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `mobile_number` int(12) NOT NULL,
  `profile_for` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `veg` varchar(10) NOT NULL,
  `matirian_status` varchar(50) NOT NULL,
  `mother_toung` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `height` varchar(100) NOT NULL,
  `body_color` varchar(250) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL,
  `brother_sister` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `education` text NOT NULL,
  `job_profile` text NOT NULL,
  `other_details` text NOT NULL,
  `describe_yourself` text NOT NULL,
  `profile_pic` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullprofile`
--

INSERT INTO `fullprofile` (`userid`, `dob`, `mobile_number`, `profile_for`, `gender`, `religion`, `veg`, `matirian_status`, `mother_toung`, `cast`, `height`, `body_color`, `father_name`, `mother_name`, `brother_sister`, `address`, `education`, `job_profile`, `other_details`, `describe_yourself`, `profile_pic`, `updated_at`) VALUES
(3, '2016-11-01', 78, 'Son', 'Female', 'Sikh', 'Yes', 'Divorsed', 'Mother Toung', 'Cast5', '', 'b', 'b', 'b', 'b', '                      The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit                                                                                      bRamlwas\r\nRambass\r\n                  \r\n                  \r\n                  \r\n                  The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit\r\n                  \r\n                  ', '                                                            ed\r\n                  \r\n                  \r\n                  \r\n                  The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit\r\n                  \r\n                  ', '                    \r\n                    \r\n                    The script to be run on onsubmitThe script to be run on onsubmitThe script to be run onThe script to be run on onsubmit onsubmitThe script to be run on onsubmit\r\n                    \r\n                    \r\n                    \r\nb\r\n                  \r\n                  \r\n                  \r\n                  The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit\r\n                  \r\n                  ', '                    \r\n                    \r\n                    The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit\r\n                    \r\n                    \r\n                    \r\nb\r\n                  The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit\r\n                  \r\n                  \r\n                  \r\n                  \r\n                  ', '                    \r\n                                        \r\n                   The script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmitThe script to be run on onsubmit                     \r\n                                        \r\n                                        \r\n                                        \r\n                    b                                                                                                            ', 'friendship.jpg', '2016-11-27 21:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `token_id` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `token_id`, `updated_at`) VALUES
(3, 'Mahender Singh', 'msdusad@gmail.com', 'ec1d31d4ff7a4bfa4e5ca1df85410003', '2016-11-27 13:38:29', 134831817, '2016-11-27 13:38:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fullprofile`
--
ALTER TABLE `fullprofile`
  ADD CONSTRAINT `fullprofile_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
