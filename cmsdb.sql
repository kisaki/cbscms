-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2011 at 04:21 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmsgroups`
--

CREATE TABLE IF NOT EXISTS `cmsgroups` (
  `ID` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `groupname` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cmsgroups`
--

INSERT INTO `cmsgroups` (`ID`, `groupname`) VALUES
(1, 'Admin'),
(2, 'Editors'),
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `cmsusers`
--

CREATE TABLE IF NOT EXISTS `cmsusers` (
  `ID` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `thegroup` int(4) DEFAULT '10',
  `firstname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `enabled` int(1) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cmsusers`
--

INSERT INTO `cmsusers` (`ID`, `user`, `pass`, `thegroup`, `firstname`, `surname`, `enabled`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Mr', 'Admin', 1),
(2, 'anonymous', '294de3557d9d00b3d2d8a1e6aab028cf', 2, 'No', 'Body', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `body` mediumtext,
  `parent` int(11) DEFAULT '0',
  `cdate` datetime DEFAULT NULL,
  `pdate` datetime DEFAULT NULL,
  `title` text,
  `template` text,
  `type` varchar(64) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `associated_date` date DEFAULT NULL,
  `tags` text,
  `author` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `body`, `parent`, `cdate`, `pdate`, `title`, `template`, `type`, `keywords`, `description`, `associated_date`, `tags`, `author`) VALUES
(1, 'Home', '<h1>Welcome to CBS Law Offices</h1>\r\n<p>Hello visitor, the site is still under construction</p>\r\n\r\n<p>Please visit again later!..</p>', 0, NULL, NULL, 'Home', NULL, 'home', NULL, NULL, NULL, NULL, NULL),
(2, 'Second Page', '<p>A Second Page</p>', 0, NULL, NULL, 'Second page', NULL, 'profile', NULL, NULL, NULL, NULL, NULL);
