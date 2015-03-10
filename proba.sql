-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2015 at 09:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proba`
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
(8, 'Факултет за Информатика', 8),
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
  PRIMARY KEY (`id_fak_rang`),
  KEY `id_fakultet` (`id_fakultet`),
  KEY `id_korisnik` (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `fakultet_rang`
--

INSERT INTO `fakultet_rang` (`id_fak_rang`, `id_fakultet`, `id_korisnik`, `praksa`, `kadar`, `uslovi`) VALUES
(18, 8, 1, 3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `fakultet_univerzitet`
--

CREATE TABLE IF NOT EXISTS `fakultet_univerzitet` (
  `id_fak_uni` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakutet` int(11) NOT NULL,
  `id_univerzitet` int(11) NOT NULL,
  PRIMARY KEY (`id_fak_uni`),
  UNIQUE KEY `id_fakutet` (`id_fakutet`),
  KEY `id_univerzitet` (`id_univerzitet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fakultet_univerzitet`
--

INSERT INTO `fakultet_univerzitet` (`id_fak_uni`, `id_fakutet`, `id_univerzitet`) VALUES
(11, 8, 4),
(12, 9, 4),
(13, 10, 4),
(14, 11, 4),
(15, 12, 4),
(16, 13, 4);

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
(4, 'Кампус 2', 24),
(5, 'Кампус 3', 0),
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
  PRIMARY KEY (`id_kam_rang`),
  UNIQUE KEY `id_korisnik` (`id_korisnik`),
  KEY `id_kampus` (`id_kampus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kampus_rang`
--

INSERT INTO `kampus_rang` (`id_kam_rang`, `id_kampus`, `id_korisnik`, `higiena`, `lokacija`, `uslovi`) VALUES
(2, 4, 1, 3, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kampus_univerzitet`
--

CREATE TABLE IF NOT EXISTS `kampus_univerzitet` (
  `id_kam_uni` int(11) NOT NULL AUTO_INCREMENT,
  `id_kampus` int(11) NOT NULL,
  `id_univerzitet` int(11) NOT NULL,
  PRIMARY KEY (`id_kam_uni`),
  UNIQUE KEY `id_kampus` (`id_kampus`),
  KEY `id_univerzitet` (`id_univerzitet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kampus_univerzitet`
--

INSERT INTO `kampus_univerzitet` (`id_kam_uni`, `id_kampus`, `id_univerzitet`) VALUES
(13, 4, 4),
(14, 5, 4),
(15, 6, 4);

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
  `rejting_na_profesori` float(1,1) NOT NULL,
  `prosecna_ocena` float(1,1) NOT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`id_profesor`, `ime_prezime_prof`, `rejting_na_profesori`, `prosecna_ocena`) VALUES
(39, 'Сашо Коцевски', 0.0, 0.0),
(40, 'Цвета Мартиновска', 0.0, 0.0),
(41, 'Зоран Утковски', 0.0, 0.0),
(42, 'Игор Стојановиќ', 0.0, 0.0),
(43, 'Благој Делипетрев', 0.0, 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `profesor_univerzitet`
--

CREATE TABLE IF NOT EXISTS `profesor_univerzitet` (
  `id_prof_kam` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesor` int(11) NOT NULL,
  `id_univerzitet` int(11) NOT NULL,
  PRIMARY KEY (`id_prof_kam`),
  KEY `id_profesor` (`id_profesor`),
  KEY `id_univerzitet` (`id_univerzitet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profesor_univerzitet`
--

INSERT INTO `profesor_univerzitet` (`id_prof_kam`, `id_profesor`, `id_univerzitet`) VALUES
(6, 39, 4),
(7, 40, 4),
(8, 41, 4),
(9, 42, 4),
(10, 43, 4);

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
  `ocena` float NOT NULL,
  PRIMARY KEY (`id_prof_rang`),
  UNIQUE KEY `id_korisnik` (`id_korisnik`),
  KEY `id_prof` (`id_prof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prof_rang`
--

INSERT INTO `prof_rang` (`id_prof_rang`, `id_prof`, `id_korisnik`, `odgovornost`, `predavanja`, `literatura`, `ocena`) VALUES
(2, 39, 1, 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `univerzitet`
--

CREATE TABLE IF NOT EXISTS `univerzitet` (
  `id_univerzitet` int(11) NOT NULL AUTO_INCREMENT,
  `ime_univerzitet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_univerzitet` float NOT NULL,
  PRIMARY KEY (`id_univerzitet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `univerzitet`
--

INSERT INTO `univerzitet` (`id_univerzitet`, `ime_univerzitet`, `rejting_na_univerzitet`) VALUES
(4, 'Универзитет „Гоце Делчев“', 0),
(5, 'Универзитет „Кирил и Методиј“', 0),
(6, 'ФОН Универзитет', 0);

-- --------------------------------------------------------

--
-- Table structure for table `univerzitet_rang`
--

CREATE TABLE IF NOT EXISTS `univerzitet_rang` (
  `id_uni_rang` int(11) NOT NULL AUTO_INCREMENT,
  `id_univerzitet` tinyint(4) NOT NULL,
  `rejting_univerzitet` decimal(1,1) NOT NULL,
  PRIMARY KEY (`id_uni_rang`),
  KEY `id_univerzitet` (`id_univerzitet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Constraints for table `fakultet_univerzitet`
--
ALTER TABLE `fakultet_univerzitet`
  ADD CONSTRAINT `fakultet_univerzitet_ibfk_2` FOREIGN KEY (`id_univerzitet`) REFERENCES `univerzitet` (`id_univerzitet`),
  ADD CONSTRAINT `fakultet_univerzitet_ibfk_3` FOREIGN KEY (`id_fakutet`) REFERENCES `fakulteti` (`id_fakultet`);

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
-- Constraints for table `kampus_univerzitet`
--
ALTER TABLE `kampus_univerzitet`
  ADD CONSTRAINT `kampus_univerzitet_ibfk_2` FOREIGN KEY (`id_univerzitet`) REFERENCES `univerzitet` (`id_univerzitet`),
  ADD CONSTRAINT `kampus_univerzitet_ibfk_3` FOREIGN KEY (`id_kampus`) REFERENCES `kampus` (`id_kampus`);

--
-- Constraints for table `profesor_univerzitet`
--
ALTER TABLE `profesor_univerzitet`
  ADD CONSTRAINT `profesor_univerzitet_ibfk_2` FOREIGN KEY (`id_univerzitet`) REFERENCES `univerzitet` (`id_univerzitet`),
  ADD CONSTRAINT `profesor_univerzitet_ibfk_3` FOREIGN KEY (`id_profesor`) REFERENCES `profesori` (`id_profesor`);

--
-- Constraints for table `prof_rang`
--
ALTER TABLE `prof_rang`
  ADD CONSTRAINT `prof_rang_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profesori` (`id_profesor`),
  ADD CONSTRAINT `prof_rang_ibfk_2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnici` (`id_korisnik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
