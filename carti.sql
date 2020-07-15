-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2020 at 04:20 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carti`
--

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

DROP TABLE IF EXISTS `carti`;
CREATE TABLE IF NOT EXISTS `carti` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nume_aut` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nume_cart` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nationalitate_aut` int(5) NOT NULL,
  `Initiala_aut` int(2) NOT NULL,
  `Editura` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`ID`, `Nume_aut`, `Nume_cart`, `Nationalitate_aut`, `Initiala_aut`, `Editura`) VALUES
(1, 'F.M. Dostoievski', 'Crimă și pedeapsă', 5, 4, 1),
(2, 'Alexandre Dumas', 'Cei trei muschetari. Vol I+II', 4, 4, 2),
(3, 'Mihail Drumeș', 'Invitație la vals', 1, 4, 5),
(4, 'Charlotte Brontë', 'Jane Eyre', 2, 2, 4),
(5, 'Charles Bukowski', 'Femei', 3, 2, 7),
(6, 'F. M. Dostoievski', 'Frații Karamazov', 5, 4, 7),
(7, 'Lev Tolstoi', 'Anna Karenina', 5, 20, 6),
(8, 'F.M. Dostoievski', 'Idiotul', 5, 4, 5),
(9, 'Alexandre Dumas fiul', 'Dama cu camelii', 4, 4, 2),
(10, 'Lev Tolstoi', 'Război și pace. Vol. I+II', 5, 20, 6),
(11, 'Ivan Sergheevici Turgheniev', 'Prima iubire', 5, 20, 7),
(12, 'Alexandre Dumas', 'Contele de Monte Cristo', 4, 4, 3),
(13, 'Mihail Sadoveanu', 'Baltagul', 1, 19, 3),
(14, 'Liviu Rebreanu', 'Ion', 1, 18, 3),
(15, 'Victor Hugo', 'Notre-Dame de Paris', 4, 8, 4),
(16, 'Honore de Balzac', 'Moș Goriot', 4, 2, 3),
(17, 'Charles Dickens', 'Marile speranțe', 2, 4, 6),
(18, 'Vasile Alecsandri', 'Poezii', 1, 1, 2),
(19, 'William Shakespeare', 'Romeo și Julieta', 2, 19, 3),
(20, 'Kurt Vonnegut', 'Abatorul cinci', 3, 22, 2),
(21, 'Victor Hugo', 'Mizerabilii. Vol. I+II+III', 4, 8, 4),
(22, 'Mihai Eminescu', 'Poeme alese', 1, 5, 7),
(23, 'Ion L. Caragiale', 'Momente și schițe', 1, 3, 7),
(24, 'William Shakespeare', 'Hamlet', 2, 19, 6),
(25, 'Vladimir Nabokov', 'Lolita', 3, 14, 2),
(26, 'Margaret Mitchell', 'Pe aripile vântului. Vol. I+II', 3, 13, 1),
(27, 'Ion L. Caragiale', 'Lanțul slăbiciunilor', 1, 3, 1),
(28, 'Ion Creangă', 'Amintiri din copilărie', 1, 3, 7),
(29, 'Émile Zola ', 'Gervaise', 4, 26, 5);

-- --------------------------------------------------------

--
-- Table structure for table `editura`
--

DROP TABLE IF EXISTS `editura`;
CREATE TABLE IF NOT EXISTS `editura` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nume_ed` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `editura`
--

INSERT INTO `editura` (`ID`, `Nume_ed`) VALUES
(1, 'Rao'),
(2, 'Nemira'),
(3, 'Art'),
(4, 'Humanitas'),
(5, 'Top 10'),
(6, 'Corint'),
(7, 'Leda');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nume` varchar(30) NOT NULL,
  `Prenume` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mesaj` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imprumutat`
--

DROP TABLE IF EXISTS `imprumutat`;
CREATE TABLE IF NOT EXISTS `imprumutat` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nume_aut` varchar(50) NOT NULL,
  `Nume_cart` varchar(30) NOT NULL,
  `Nationalitate_aut` varchar(50) NOT NULL,
  `Initiala_aut` varchar(2) NOT NULL,
  `Editura` varchar(30) NOT NULL,
  `Nume_user` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initiala`
--

DROP TABLE IF EXISTS `initiala`;
CREATE TABLE IF NOT EXISTS `initiala` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Litera` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `initiala`
--

INSERT INTO `initiala` (`ID`, `Litera`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H'),
(9, 'I'),
(10, 'J'),
(11, 'K'),
(12, 'L'),
(13, 'M'),
(14, 'N'),
(15, 'O'),
(16, 'P'),
(17, 'Q'),
(18, 'R'),
(19, 'S'),
(20, 'T'),
(21, 'U'),
(22, 'V'),
(23, 'W'),
(24, 'X'),
(25, 'Y'),
(26, 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `nationalitate`
--

DROP TABLE IF EXISTS `nationalitate`;
CREATE TABLE IF NOT EXISTS `nationalitate` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nat_aut` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nationalitate`
--

INSERT INTO `nationalitate` (`ID`, `Nat_aut`) VALUES
(1, 'Română'),
(2, 'Engleză'),
(3, 'Americană'),
(4, 'Franceză'),
(5, 'Rusă'),
(6, 'Spaniolă');

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

DROP TABLE IF EXISTS `useri`;
CREATE TABLE IF NOT EXISTS `useri` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Nume` varchar(50) NOT NULL,
  `Parola` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Carte_imprumut` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`ID`, `Nume`, `Parola`, `Carte_imprumut`) VALUES
(1, 'admin', 'admin', 0),
(2, 'user1', 'user1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
