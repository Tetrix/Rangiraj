-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2016 at 08:29 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakulteti`
--

CREATE TABLE `fakulteti` (
  `id_fakultet` int(11) NOT NULL,
  `ime_fakultet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_fakultet` float NOT NULL,
  `prosek_praksa` float NOT NULL,
  `prosek_kadar` float NOT NULL,
  `prosek_uslovi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakulteti`
--

INSERT INTO `fakulteti` (`id_fakultet`, `ime_fakultet`, `rejting_na_fakultet`, `prosek_praksa`, `prosek_kadar`, `prosek_uslovi`) VALUES
(8, 'Факултет за Информатика', 3.09509, 2.8125, 3.375, 3.625),
(9, 'Електротехнички факултет', 0, 0, 0, 0),
(10, 'Факултет за медицински науки', 0, 0, 0, 0),
(11, 'Економски факултет', 0, 0, 0, 0),
(12, 'Правен факултет', 0, 0, 0, 0),
(13, 'Филолошки факултет', 5, 2.94118, 3.47059, 3.70588);

-- --------------------------------------------------------

--
-- Table structure for table `fakultet_kampus`
--

CREATE TABLE `fakultet_kampus` (
  `id_fak_kam` int(11) NOT NULL,
  `id_fakultet` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `fakultet_profesor` (
  `id_fak_prof` int(11) NOT NULL,
  `id_fakultet` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `fakultet_rang` (
  `id_fak_rang` int(11) NOT NULL,
  `id_fakultet` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `praksa` float NOT NULL,
  `kadar` float NOT NULL,
  `uslovi` float NOT NULL,
  `fax_kom` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultet_rang`
--

INSERT INTO `fakultet_rang` (`id_fak_rang`, `id_fakultet`, `id_korisnik`, `praksa`, `kadar`, `uslovi`, `fax_kom`) VALUES
(77, 8, 1, 4, 5, 3, 'Проба'),
(78, 8, 1, 5, 5, 5, 'Лелеле бе'),
(79, 8, 1, 1, 3, 4, 'коментирам'),
(80, 8, 1, 1, 1, 4, 'тоа друг пат тоа'),
(81, 8, 1, 1, 5, 3, 'Репортирам за ситуацијата јас'),
(82, 8, 1, 4, 3, 5, 'Направиле воа сеа'),
(83, 8, 1, 4, 4, 2, 'па пробувам'),
(84, 8, 1, 3, 4, 5, 'Мислам дека работе'),
(85, 8, 1, 4, 2, 5, 'Bejskoro'),
(86, 8, 1, 2, 4, 5, 'afsafsaf'),
(87, 8, 1, 3, 5, 4, 'JJOJOJO'),
(88, 8, 1, 2, 3, 2, 'ara'),
(89, 8, 1, 5, 4, 3, 'Uganda'),
(90, 8, 1, 4, 2, 5, 'коала'),
(93, 8, 10, 1, 1, 1, 'Добро ајде'),
(99, 8, 18, 1, 3, 2, 'ajde'),
(100, 13, 20, 5, 5, 5, 'ококо');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id_kampus` int(11) NOT NULL,
  `ime_kampus` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_kampus` float NOT NULL,
  `prosek_higiena` float NOT NULL,
  `prosek_lokacija` float NOT NULL,
  `prosek_uslovi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `ime_kampus`, `rejting_na_kampus`, `prosek_higiena`, `prosek_lokacija`, `prosek_uslovi`) VALUES
(4, 'Кампус 2', 3.51389, 4, 3.66667, 3.66667),
(5, 'Кампус 3', 4.66667, 0, 0, 0),
(6, 'Кампус 4', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kampus_profesor`
--

CREATE TABLE `kampus_profesor` (
  `id_kam_prof` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `kampus_rang` (
  `id_kam_rang` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `higiena` float NOT NULL,
  `lokacija` float NOT NULL,
  `uslovi` float NOT NULL,
  `kam_komentar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus_rang`
--

INSERT INTO `kampus_rang` (`id_kam_rang`, `id_kampus`, `id_korisnik`, `higiena`, `lokacija`, `uslovi`, `kam_komentar`) VALUES
(18, 4, 1, 5, 4, 1, 'asaasas'),
(23, 4, 1, 2, 4, 4, 'dada'),
(24, 4, 1, 5, 4, 5, 'Dobro'),
(25, 4, 10, 2, 2, 2, 'Ајде и тука работеее'),
(26, 4, 12, 5, 5, 5, 'ДОБРРООО АЈДЕ'),
(27, 4, 21, 5, 3, 5, 'супер е ');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id_korisnik` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fakultet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnik`, `username`, `password`, `fakultet`) VALUES
(18, 'puri@yahoo.com', '$2y$10$m3FPslJhYydFTw7zDX2QXufQwWUAs0tLJxXFbkd.3AQoydNcmJ6Pi', 'Факултет за Информатика'),
(19, 'kole@yahoo.com', '$2y$10$axk/RyB6cibdeESW4ggdw.3WiyFw1RE3TLoD9pcCb5xz703U3kZeW', 'Факултет за медицински науки'),
(20, 'alex@yahoo.com', '$2y$10$sojHbizWVFBpvPiBlXKVN.6i8jwb30.mGKeB4PqxP3DaWA/k4xUg6', 'Филолошки факултет'),
(21, 'mile@yahoo.com', '$2y$10$ctVZ5tlF0L0jdYU82XnbjO7fauL1O5i66JVwcq3tQotrFKKjW2Dx2', 'Факултет за медицински науки'),
(24, 'qw@yahoo.com', '$2y$10$5dy7Tx.wtyQLqbj7ZwGx3uTtJmET/Zzgdo/jscR9V4Y9zhK0u4jjC', 'Факултет за Информатика');

-- --------------------------------------------------------

--
-- Table structure for table `profesori`
--

CREATE TABLE `profesori` (
  `id_profesor` int(11) NOT NULL,
  `ime_prezime_prof` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rejting_na_profesori` float NOT NULL,
  `prosek_odgovornost` float NOT NULL,
  `prosek_predavanja` float NOT NULL,
  `prosek_literatura` float NOT NULL,
  `prof_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`id_profesor`, `ime_prezime_prof`, `rejting_na_profesori`, `prosek_odgovornost`, `prosek_predavanja`, `prosek_literatura`, `prof_img`) VALUES
(39, 'Сашо Коцевски', 1.48438, 0, 0, 0, ''),
(40, 'Цвета Мартиновска', 2.66667, 2.8, 2.8, 2.8, ''),
(41, 'Зоран Утковски', 0, 0, 0, 0, ''),
(42, 'Игор Стојановиќ', 0, 0, 0, 0, ''),
(43, 'Благој Делипетрев', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `prof_rang`
--

CREATE TABLE `prof_rang` (
  `id_prof_rang` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `odgovornost` float NOT NULL,
  `predavanja` float NOT NULL,
  `literatura` float NOT NULL,
  `prof_kom` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof_rang`
--

INSERT INTO `prof_rang` (`id_prof_rang`, `id_prof`, `id_korisnik`, `odgovornost`, `predavanja`, `literatura`, `prof_kom`) VALUES
(11, 39, 1, 5, 5, 5, 'aaaa'),
(19, 39, 1, 1, 1, 1, 'agagagaga'),
(20, 40, 10, 5, 5, 5, 'Петка за мене'),
(21, 40, 11, 1, 1, 1, 'ајдеее'),
(22, 40, 21, 2, 2, 2, 'добро ајде работе');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakulteti`
--
ALTER TABLE `fakulteti`
  ADD PRIMARY KEY (`id_fakultet`);

--
-- Indexes for table `fakultet_kampus`
--
ALTER TABLE `fakultet_kampus`
  ADD PRIMARY KEY (`id_fak_kam`),
  ADD UNIQUE KEY `id_fakultet` (`id_fakultet`),
  ADD KEY `id_kampus` (`id_kampus`);

--
-- Indexes for table `fakultet_profesor`
--
ALTER TABLE `fakultet_profesor`
  ADD PRIMARY KEY (`id_fak_prof`),
  ADD KEY `id_profesor` (`id_profesor`),
  ADD KEY `id_fakultet` (`id_fakultet`);

--
-- Indexes for table `fakultet_rang`
--
ALTER TABLE `fakultet_rang`
  ADD PRIMARY KEY (`id_fak_rang`),
  ADD KEY `id_fakultet` (`id_fakultet`),
  ADD KEY `id_korisnik` (`id_korisnik`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indexes for table `kampus_profesor`
--
ALTER TABLE `kampus_profesor`
  ADD PRIMARY KEY (`id_kam_prof`),
  ADD KEY `id_kampus` (`id_kampus`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indexes for table `kampus_rang`
--
ALTER TABLE `kampus_rang`
  ADD PRIMARY KEY (`id_kam_rang`),
  ADD KEY `id_kampus` (`id_kampus`),
  ADD KEY `id_korisnik_2` (`id_korisnik`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id_korisnik`);

--
-- Indexes for table `profesori`
--
ALTER TABLE `profesori`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indexes for table `prof_rang`
--
ALTER TABLE `prof_rang`
  ADD PRIMARY KEY (`id_prof_rang`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_korisnik` (`id_korisnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakulteti`
--
ALTER TABLE `fakulteti`
  MODIFY `id_fakultet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `fakultet_kampus`
--
ALTER TABLE `fakultet_kampus`
  MODIFY `id_fak_kam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fakultet_profesor`
--
ALTER TABLE `fakultet_profesor`
  MODIFY `id_fak_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fakultet_rang`
--
ALTER TABLE `fakultet_rang`
  MODIFY `id_fak_rang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id_kampus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kampus_profesor`
--
ALTER TABLE `kampus_profesor`
  MODIFY `id_kam_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kampus_rang`
--
ALTER TABLE `kampus_rang`
  MODIFY `id_kam_rang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id_korisnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `profesori`
--
ALTER TABLE `profesori`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `prof_rang`
--
ALTER TABLE `prof_rang`
  MODIFY `id_prof_rang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
