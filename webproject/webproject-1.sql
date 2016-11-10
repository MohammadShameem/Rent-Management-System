-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 04:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambottola`
--

CREATE TABLE IF NOT EXISTS `ambottola` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(200) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `empty_seat` varchar(10) NOT NULL,
  `empty_block` varchar(10) NOT NULL,
  `empty_floor` varchar(10) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_room` varchar(10) NOT NULL,
  `rent_seat` varchar(10) NOT NULL,
  `rent_floor` varchar(10) NOT NULL,
  `rent_block` varchar(10) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ambottola`
--

INSERT INTO `ambottola` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_room`, `rent_seat`, `rent_floor`, `rent_block`, `first_image`, `second_image`, `admin_id`) VALUES
(1, 'Jaman Mess', '0162558896', '12', '3', '3', '11', '2000', '700', '10000', '5000', 'WALL_0046.jpg', 'Casino_Baden_At_Night,_Baden-Baden,_Germany.jpg', ''),
(2, 'Noman Mess', '0162558896', '2', '1', '3', '11', '2000', '700', '10000', '5000', 'WALL_0046.jpg', 'Casino_Baden_At_Night,_Baden-Baden,_Germany.jpg', ''),
(3, 'Black & White', '01787066003', '0', '0', '0', '0', '2000', '700', '10000', '5000', 'CL0033.JPG', 'CL0003.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `arobpur`
--

CREATE TABLE IF NOT EXISTS `arobpur` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(200) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `empty_seat` varchar(10) NOT NULL,
  `empty_block` varchar(10) NOT NULL,
  `empty_floor` varchar(10) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_room` varchar(10) NOT NULL,
  `rent_seat` varchar(10) NOT NULL,
  `rent_floor` varchar(10) NOT NULL,
  `rent_block` varchar(10) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `arobpur`
--

INSERT INTO `arobpur` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_room`, `rent_seat`, `rent_floor`, `rent_block`, `first_image`, `second_image`, `admin_id`) VALUES
(4, 'Noman Mess', '01725486', '2', '1', '1', '11', '12', '700', '10000', '5000', '70.jpg', '69.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `churamonkati`
--

CREATE TABLE IF NOT EXISTS `churamonkati` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `empty_seat` varchar(25) NOT NULL,
  `empty_block` varchar(10) NOT NULL,
  `empty_floor` varchar(10) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_seat` varchar(10) NOT NULL,
  `rent_room` varchar(10) NOT NULL,
  `rent_block` varchar(10) NOT NULL,
  `rent_floor` varchar(10) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `churamonkati`
--

INSERT INTO `churamonkati` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_seat`, `rent_room`, `rent_block`, `rent_floor`, `first_image`, `second_image`, `admin_id`) VALUES
(3, 'Asik Mess', '01725486', '', '', '', '', '700', '1500', '5000', '10000', '0002-1.jpg', '0001-1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `dharmotola`
--

CREATE TABLE IF NOT EXISTS `dharmotola` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(200) NOT NULL,
  `contact_number` int(25) NOT NULL,
  `empty_seat` varchar(10) NOT NULL,
  `empty_block` varchar(10) NOT NULL,
  `empty_floor` varchar(10) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_room` varchar(10) NOT NULL,
  `rent_seat` varchar(10) NOT NULL,
  `rent_floor` varchar(10) NOT NULL,
  `rent_block` varchar(10) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dharmotola`
--

INSERT INTO `dharmotola` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_room`, `rent_seat`, `rent_floor`, `rent_block`, `first_image`, `second_image`, `admin_id`) VALUES
(1, 'Rohim Mess', 162558896, '2', '1', '1', '1', '2000', '700', '10000', '5000', '10.jpg', '11.jpg', ''),
(2, 'Asik Mess', 162558896, '2', '1', '3', '11', '2000', '700', '10000', '5000', '10.jpg', '11.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `mess_information`
--

CREATE TABLE IF NOT EXISTS `mess_information` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(200) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `empty_seat` varchar(10) NOT NULL,
  `empty_block` varchar(10) NOT NULL,
  `empty_floor` varchar(10) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_room` varchar(10) NOT NULL,
  `rent_seat` varchar(10) NOT NULL,
  `rent_floor` varchar(10) NOT NULL,
  `rent_block` varchar(10) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `mess_information`
--

INSERT INTO `mess_information` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_room`, `rent_seat`, `rent_floor`, `rent_block`, `first_image`, `second_image`, `place`, `admin_id`) VALUES
(3, 'Digital_mess', '01725498185', '12', '10', '2', '10', '2000', '500', '10000', '5000', 'Clean_Sky.jpg', 'Cap_Juluca_Maunday.jpg', 'arobpur', '1'),
(6, 'Jakaria Mess', '0162326696', '5', '4', '2', '5', '2000', '600', '5000', '300', 'Clean_Sky.jpg', 'Cap_Juluca_Maunday.jpg', 'Ambottola', '1'),
(11, 'Tamim Mess', '01725486', '12', '12', '3', '5', '2000', '700', '10000', '5000', 'Clean_Sky.jpg', 'Cap_Juluca_Maunday.jpg', 'Churamokati', ''),
(25, 'Asik Mess', '0162558896', '2', '1', '3', '11', '2000', '700', '10000', '5000', 'Clean_Sky.jpg', 'Cap_Juluca_Maunday.jpg', 'Palbari', ''),
(26, 'Noman Mess', '0162558896', '2', '1', '3', '11', '2000', '700', '10000', '5000', 'WALL_0046.jpg', 'Casino_Baden_At_Night,_Baden-Baden,_Germany.jpg', 'arobpur', ''),
(29, 'Noman Mess', '01725486', '2', '1', '1', '11', '12', '700', '10000', '5000', '70.jpg', '69.jpg', 'ambottola', ''),
(33, 'Black & White', '01787066003', '0', '0', '0', '0', '2000', '700', '10000', '5000', 'CL0033.JPG', 'CL0003.JPG', 'palbari', ''),
(37, 'shamim Mess', '01725486', '2', '1', '1', '11', '12', '700', '10000', '5000', '0028-1.jpg', '0008-1.jpg', 'Dharmotola', ''),
(38, 'Asik Mess', '01787066003', '2', '1', '3', '11', '2000', '700', '10000', '5000', '35.jpg', 'Aitutaki,_Cook_Islands.jpg', 'Dharmotola', ''),
(39, 'Arman Mess', '0162558896', '2', '1', '3', '5', '2000', '700', '10000', '5000', '0048-1.jpg', '0022-1.jpg', 'Palbari', ''),
(42, 'Jim Mess', '156563', '2', '2', '', '2', '2000', '800', '', '', 'thumbnail.jpg', 'WALL_0046.jpg', 'palbari', '');

-- --------------------------------------------------------

--
-- Table structure for table `palbari`
--

CREATE TABLE IF NOT EXISTS `palbari` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_name` varchar(300) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `empty_seat` int(11) NOT NULL,
  `empty_block` int(11) NOT NULL,
  `empty_floor` int(11) NOT NULL,
  `empty_room` varchar(10) NOT NULL,
  `rent_room` int(11) NOT NULL,
  `rent_seat` int(11) NOT NULL,
  `rent_block` int(11) NOT NULL,
  `rent_floor` int(11) NOT NULL,
  `first_image` varchar(200) NOT NULL,
  `second_image` varchar(200) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `palbari`
--

INSERT INTO `palbari` (`info_id`, `mess_name`, `contact_number`, `empty_seat`, `empty_block`, `empty_floor`, `empty_room`, `rent_room`, `rent_seat`, `rent_block`, `rent_floor`, `first_image`, `second_image`, `admin_id`) VALUES
(5, 'Asik Mess', '0162558896', 2, 1, 3, '11', 2000, 700, 5000, 10000, 'Clean_Sky.jpg', 'Cap_Juluca_Maunday.jpg', ''),
(7, 'shamim Mess', '01725486', 2, 1, 1, '11', 12, 700, 5000, 10000, '0028-1.jpg', '0008-1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'jihad', '123'),
(3, 'jubaer_mess', '564'),
(4, 'jubaer_mess', '564'),
(5, 'kamal_mess', '466'),
(6, 'admin', 'admin'),
(7, 'Durber Mess', '1234'),
(8, 'admin', 'admin'),
(9, 'Black & White', '137952'),
(10, 'arman', '1234'),
(11, 'admin', 'admin'),
(12, 'admin', 'admin'),
(13, 'admin', 'admin'),
(14, 'jim', '1234'),
(15, 'shamim', '1234'),
(16, 'shamim', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
