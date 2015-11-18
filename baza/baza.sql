-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2015 at 01:55 
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
-- Table structure for table `fakulteti`
--

CREATE TABLE IF NOT EXISTS `fakulteti` (
  `id_fakultet` int(11) NOT NULL AUTO_INCREMENT,
  `ime_fakultet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_fakultet` float NOT NULL,
  PRIMARY KEY (`id_fakultet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fakulteti`
--

INSERT INTO `fakulteti` (`id_fakultet`, `ime_fakultet`, `rejting_na_fakultet`) VALUES
(8, 'Факултет за Информатика', 3.51282),
(9, 'Електротехнички факултет', 0),
(10, 'Факултет за медицински науки', 0),
(11, 'Економски факултет', 0),
(12, 'Правен факултет', 0),
(13, 'Филолошки факултет', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fakultet_kampus`
--

CREATE TABLE IF NOT EXISTS `fakultet_kampus` (
  `id_fak_kam` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultet` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  PRIMARY KEY (`id_fak_kam`),
  UNIQUE KEY `id_fakultet` (`id_fakultet`),
  KEY `id_kampus` (`id_kampus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fakultet_kampus`
--

INSERT INTO `fakultet_kampus` (`id_fak_kam`, `id_fakultet`, `id_kampus`) VALUES
(7, 8, 4),
(8, 9, 4),
(9, 10, 5),
(10, 11, 6),
(11, 12, 6),
(12, 13, 6);

-- --------------------------------------------------------

--
-- Table structure for table `fakultet_profesor`
--

CREATE TABLE IF NOT EXISTS `fakultet_profesor` (
  `id_fak_prof` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultet` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  PRIMARY KEY (`id_fak_prof`),
  KEY `id_profesor` (`id_profesor`),
  KEY `id_fakultet` (`id_fakultet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fakultet_profesor`
--

INSERT INTO `fakultet_profesor` (`id_fak_prof`, `id_fakultet`, `id_profesor`) VALUES
(6, 8, 39),
(7, 8, 40),
(8, 8, 41),
(9, 8, 42),
(10, 8, 43);

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

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE IF NOT EXISTS `kampus` (
  `id_kampus` int(11) NOT NULL AUTO_INCREMENT,
  `ime_kampus` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_kampus` float NOT NULL,
  PRIMARY KEY (`id_kampus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `ime_kampus`, `rejting_na_kampus`) VALUES
(4, 'Кампус 2', 3.25),
(5, 'Кампус 3', 4.66667),
(6, 'Кампус 4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kampus_profesor`
--

CREATE TABLE IF NOT EXISTS `kampus_profesor` (
  `id_kam_prof` int(11) NOT NULL AUTO_INCREMENT,
  `id_kampus` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  PRIMARY KEY (`id_kam_prof`),
  KEY `id_kampus` (`id_kampus`),
  KEY `id_profesor` (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kampus_profesor`
--

INSERT INTO `kampus_profesor` (`id_kam_prof`, `id_kampus`, `id_profesor`) VALUES
(6, 4, 39),
(7, 4, 40),
(8, 4, 41),
(9, 4, 42),
(10, 4, 43);

-- --------------------------------------------------------

--
-- Table structure for table `kampus_rang`
--

CREATE TABLE IF NOT EXISTS `kampus_rang` (
  `id_kam_rang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kampus` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `higiena` float NOT NULL,
  `lokacija` float NOT NULL,
  `uslovi` float NOT NULL,
  `kam_komentar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_kam_rang`),
  KEY `id_kampus` (`id_kampus`),
  KEY `id_korisnik_2` (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kampus_rang`
--

INSERT INTO `kampus_rang` (`id_kam_rang`, `id_kampus`, `id_korisnik`, `higiena`, `lokacija`, `uslovi`, `kam_komentar`) VALUES
(18, 4, 1, 5, 4, 1, 'asaasas'),
(23, 4, 1, 2, 4, 4, 'dada'),
(24, 4, 1, 5, 4, 5, 'Dobro');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id_korisnik` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnik`, `username`, `password`) VALUES
(1, 'deni.101615@students.ugd.edu.mk', '');

-- --------------------------------------------------------

--
-- Table structure for table `profesori`
--

CREATE TABLE IF NOT EXISTS `profesori` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime_prof` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_profesori` float NOT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`id_profesor`, `ime_prezime_prof`, `rejting_na_profesori`) VALUES
(39, 'Сашо Коцевски', 1.48438),
(40, 'Цвета Мартиновска', 0),
(41, 'Зоран Утковски', 0),
(42, 'Игор Стојановиќ', 0),
(43, 'Благој Делипетрев', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prof_rang`
--

CREATE TABLE IF NOT EXISTS `prof_rang` (
  `id_prof_rang` int(11) NOT NULL AUTO_INCREMENT,
  `id_prof` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `odgovornost` float NOT NULL,
  `predavanja` float NOT NULL,
  `literatura` float NOT NULL,
  `prof_kom` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_prof_rang`),
  KEY `id_prof` (`id_prof`),
  KEY `id_korisnik` (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `prof_rang`
--

INSERT INTO `prof_rang` (`id_prof_rang`, `id_prof`, `id_korisnik`, `odgovornost`, `predavanja`, `literatura`, `prof_kom`) VALUES
(11, 39, 1, 5, 5, 5, 'aaaa'),
(19, 39, 1, 1, 1, 1, 'agagagaga');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fakultet_kampus`
--
ALTER TABLE `fakultet_kampus`
  ADD CONSTRAINT `fakultet_kampus_ibfk_2` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`),
  ADD CONSTRAINT `fakultet_kampus_ibfk_3` FOREIGN KEY (`id_fakultet`) REFERENCES `fakulteti` (`id_fakultet`);

--
-- Constraints for table `fakultet_profesor`
--
ALTER TABLE `fakultet_profesor`
  ADD CONSTRAINT `fakultet_profesor_ibfk_1` FOREIGN KEY (`id_fakultet`) REFERENCES `fakulteti` (`id_fakultet`),
  ADD CONSTRAINT `fakultet_profesor_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesori` (`id_profesor`);

--
-- Constraints for table `fakultet_rang`
--
ALTER TABLE `fakultet_rang`
  ADD CONSTRAINT `fakultet_rang_ibfk_2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici` (`id_korisnik`),
  ADD CONSTRAINT `fakultet_rang_ibfk_3` FOREIGN KEY (`id_fakultet`) REFERENCES `fakulteti` (`id_fakultet`);

--
-- Constraints for table `kampus_profesor`
--
ALTER TABLE `kampus_profesor`
  ADD CONSTRAINT `kampus_profesor_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesori` (`id_profesor`),
  ADD CONSTRAINT `kampus_profesor_ibfk_3` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`);

--
-- Constraints for table `kampus_rang`
--
ALTER TABLE `kampus_rang`
  ADD CONSTRAINT `kampus_rang_ibfk_1` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`),
  ADD CONSTRAINT `kampus_rang_ibfk_2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici` (`id_korisnik`);

--
-- Constraints for table `prof_rang`
--
ALTER TABLE `prof_rang`
  ADD CONSTRAINT `prof_rang_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profesori` (`id_profesor`),
  ADD CONSTRAINT `prof_rang_ibfk_2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici` (`id_korisnik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
