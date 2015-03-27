-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 04:36 PM
-- Server version: 5.1.71
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ma202dc_GroupProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `Comment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Responder_ID` text NOT NULL,
  `Comment_Body` text NOT NULL,
  PRIMARY KEY (`Comment_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Email`, `Password`, `F_Name`, `L_Name`) VALUES
('ma202dc@gold.ac.uk', '1234', 'Dean', 'Cooksey');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE IF NOT EXISTS `Question` (
  `Q_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Q_Category` varchar(50) NOT NULL,
  `Q_Body` varchar(1024) NOT NULL,
  `Q_Rating` int(255) NOT NULL,
  PRIMARY KEY (`Q_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`Q_ID`, `Username`, `Q_Category`, `Q_Body`, `Q_Rating`) VALUES
(9, '', 'computing', 'Should I use wamp for web development?', 0),
(8, 'joshakinsola', 'computing', 'i need to find out how to edit and delete posts on my php', 0),
(4, 'joshakinsola', 'Category', 'Why won''t dean help me with php', 0),
(5, 'ma202dc@gold.ac.uk', 'history', 'Whe edgfwaefwaerdfwaedfwed', 0),
(6, 'joshakinsola', 'Category', 'How do i use tables in php?', 0),
(10, 'ma202dc@gold.ac.uk', 'food', 'What is the canteen food like?', 0),
(11, '', 'history', 'who was Richard Hoggart?\r\n', 0),
(12, 'ma202dc@gold.ac.uk', 'computing', 'Anyone used ruby on rails before?', 0),
(13, '', 'general', 'What is goldsmiths like?', 0),
(14, 'ma202dc@gold.ac.uk', 'Category', 'Leave a question...', 0),
(15, 'ma202dc@gold.ac.uk', 'Category', 'Leave a question...', 0);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `Email`, `Password`) VALUES
(1, 'ma202dc@gold.ac.uk', 'test'),
(2, 'joshakinsola', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
