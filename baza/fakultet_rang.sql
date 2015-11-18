-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2015 at 01:39 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultet_rang`
--

CREATE TABLE IF NOT EXISTS `fakultet_rang` (
  `id_fak_rang` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultet` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `praksa` float NOT NULL,
  `kadar` float NOT NULL,
  `uslovi` float NOT NULL,
  `fax_kom` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_fak_rang`),
  KEY `id_fakultet` (`id_fakultet`),
  KEY `id_korisnik` (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `fakultet_rang`
--

INSERT INTO `fakultet_rang` (`id_fak_rang`, `id_fakultet`, `id_korisnik`, `praksa`, `kadar`, `uslovi`, `fax_kom`) VALUES
(77, 8, 1, 4, 5, 3, 'Кучките од инстаграм'),
(78, 8, 1, 5, 5, 5, 'Лелелел абе улав еден'),
(79, 8, 1, 1, 3, 4, 'Аааа фесоре у фласк е воа'),
(80, 8, 1, 1, 1, 4, 'тоа друг пат тоа'),
(81, 8, 1, 1, 5, 3, 'Репортирам за ситуацијата јас'),
(82, 8, 1, 4, 3, 5, 'Направиле воа сеа'),
(83, 8, 1, 4, 4, 2, 'Хавус ќе е Скопје'),
(84, 8, 1, 3, 4, 5, 'Мислам дека џандарите тепаа'),
(85, 8, 1, 4, 2, 5, 'Bejskoro'),
(86, 8, 1, 2, 4, 5, 'afsafsaf'),
(87, 8, 1, 3, 5, 4, 'JJOJOJO'),
(88, 8, 1, 2, 3, 2, 'ara'),
(89, 8, 1, 5, 4, 3, 'Uganda');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fakultet_rang`
--
ALTER TABLE `fakultet_rang`
  ADD CONSTRAINT `fakultet_rang_ibfk_2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici` (`id_korisnik`),
  ADD CONSTRAINT `fakultet_rang_ibfk_3` FOREIGN KEY (`id_fakultet`) REFERENCES `fakulteti` (`id_fakultet`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
