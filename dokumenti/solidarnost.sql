-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 11:16 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `solidarnost`
--
CREATE DATABASE IF NOT EXISTS `solidarnost` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `solidarnost`;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `korisnickoIme` varchar(15) NOT NULL,
  `lozinka` varchar(15) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `ulica` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `korisnickoIme` (`korisnickoIme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `korisnickoIme`, `lozinka`, `ime`, `prezime`, `tel`, `email`, `grad`, `ulica`, `status`) VALUES
(1, 'Anton', '1234', 'Anton', 'Galfi', '096325673', 'anton@gmail.com', 'zagreb', 'zagreb', '1'),
(2, 'gffd', 'hter', 'higy', 'ft', 'yvh', 'bbu', 'vtgvt', 'vjyv', '0'),
(3, 'User', 'user', 'Korisnik', 'User', '12345', 'user@user.com', 'User', 'User', '0');

-- --------------------------------------------------------

--
-- Table structure for table `upit`
--

CREATE TABLE IF NOT EXISTS `upit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imePrezime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `upit` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `upit`
--

INSERT INTO `upit` (`id`, `imePrezime`, `email`, `upit`) VALUES
(12, 'yred', 'gsd@hrd.com', 'dfhhs');

-- --------------------------------------------------------

--
-- Table structure for table `zahtjev`
--

CREATE TABLE IF NOT EXISTS `zahtjev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idKorisnika` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `racun` varchar(100) NOT NULL,
  `cilj` float NOT NULL,
  `opis` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `zahtjev`
--

INSERT INTO `zahtjev` (`id`, `idKorisnika`, `ime`, `prezime`, `telefon`, `email`, `racun`, `cilj`, `opis`, `status`) VALUES
(11, 1, 'Jedan', 'Dva', '125457', 'erwgs@gds.com', '323723462', 500, 'jedan dva tri', 1),
(13, 1, 'bo', 'ko', '7312', 'fdas@gsd', '27456243', 20000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(14, 1, 'jd', 'shdfgds', '375231', 'sdg@gsd', '75234623', 5236, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
