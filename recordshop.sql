-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
<<<<<<< HEAD
-- Host: localhost
-- Generation Time: May 07, 2014 at 10:09 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13
=======
-- Gostitelj: localhost
-- Čas nastanka: 03. maj 2014 ob 20.07
-- Različica strežnika: 5.6.12-log
-- Različica PHP: 5.4.12
>>>>>>> d2ae9af08cc66e5f2eb7bc8cbcf1927c333d58db

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
<<<<<<< HEAD
-- Database: `recordshop`
--
=======
-- Zbirka podatkov: `recordshop`
--
CREATE DATABASE IF NOT EXISTS `recordshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `recordshop`;
>>>>>>> d2ae9af08cc66e5f2eb7bc8cbcf1927c333d58db

-- --------------------------------------------------------

--
-- Struktura tabele `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `leto` int(11) NOT NULL,
  `cena` float NOT NULL,
  `id_izvajalec` int(11) NOT NULL,
  `id_zanr` int(11) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `album`
--

INSERT INTO `album` (`id_album`, `naslov`, `opis`, `image`, `leto`, `cena`, `id_izvajalec`, `id_zanr`) VALUES
(1, 'Bam bam', 'Bam bam na polno !', '1.jpg', 2013, 20.2, 2, 1),
<<<<<<< HEAD
(2, 'Hit mix', 'Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix', '2.jpg', 2333, 15.1, 1, 2),
(3, 'Joy Of Motion', 'Progressive metal', 'Animals As Leaders - Joy Of Motion-jpg', 2014, 17, 6, 4),
(4, 'Khaos Legions', 'Melodic Death Metal', 'Arch Enemy - Khaos Legions.jpg', 2011, 15, 10, 5),
(5, 'L''enfant Sauvage', 'Progressive french metal', 'Gojira - L''enfant Sauvage.jpg', 2012, 16, 9, 4),
(6, 'Haunted Shores', 'High tech prog riffage', 'Haunted Shores - Haunted Shores.jpg', 2011, 14, 5, 4),
(7, 'The Space Within', 'Canadian masterpiece', 'Intervals - The Space Within.jpg', 2011, 15, 4, 4),
(8, 'The Number Of The Beast', 'New wave of british metal', 'Iron Maiden - The Number Of The Beast.jpg', 1982, 15, 24, 8),
(9, 'Abigail', 'Horror scenes', 'King Diamond - Abigail.jpeg', 1987, 16, 23, 8),
(10, 'Periphery', 'Bulb action', 'Periphery - Periphery.jpg', 2010, 17, 3, 4),
(11, 'Volition', 'Freaking pilots', 'Protest The Hero - Volition.jpg', 2013, 16, 8, 4),
(12, 'Altered state', 'Ambientish prog', 'Tesseract - Altered State.jpg', 2013, 17, 7, 4),
(13, 'Dark Roots Of The Earth', 'American thrash carnage', 'Testament - Dark Roots Of The Earth.jpg', 2012, 17, 13, 7);
=======
(2, 'Hit mix', 'Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix Mix', '2.jpg', 2333, 15.1, 1, 2);
>>>>>>> d2ae9af08cc66e5f2eb7bc8cbcf1927c333d58db

-- --------------------------------------------------------

--
-- Struktura tabele `izvajalec`
--

CREATE TABLE IF NOT EXISTS `izvajalec` (
  `id_izvajalec` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  PRIMARY KEY (`id_izvajalec`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `izvajalec`
--

INSERT INTO `izvajalec` (`id_izvajalec`, `ime`) VALUES
(1, 'Rok Cernic'),
(2, 'Coky Mock');

-- --------------------------------------------------------

--
-- Struktura tabele `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `sporocilo` text NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_uporabnik` int(11) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `nakup`
--

CREATE TABLE IF NOT EXISTS `nakup` (
  `id_nakup` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `cas` time NOT NULL,
  `id_album_array` varchar(255) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0-naročeno 1-v obdelavi 2-poslano 3-prejeto ',
  `id_uporabnik` int(11) NOT NULL,
  PRIMARY KEY (`id_nakup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `uporabnik`
--

CREATE TABLE IF NOT EXISTS `uporabnik` (
  `id_uporabnik` int(11) NOT NULL AUTO_INCREMENT,
  `uporabnisko_ime` varchar(255) NOT NULL,
  `geslo` varchar(255) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `priimek` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `je_admin` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_uporabnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Odloži podatke za tabelo `uporabnik`
--

INSERT INTO `uporabnik` (`id_uporabnik`, `uporabnisko_ime`, `geslo`, `ime`, `priimek`, `email`, `naslov`, `je_admin`) VALUES
(1, 'Cernicc', '75b5678f346d6c57151d7ed05bb0ee3b', 'Rok', 'ÄŒerniÄ', 'rok.cernic@gmail.com', 'Blabla', '1');

-- --------------------------------------------------------

--
-- Struktura tabele `zanr`
--

CREATE TABLE IF NOT EXISTS `zanr` (
  `id_zanr` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  PRIMARY KEY (`id_zanr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `zanr`
--

INSERT INTO `zanr` (`id_zanr`, `ime`) VALUES
(1, 'Rock'),
<<<<<<< HEAD
(2, 'Techno'),
(3, 'Death Metal'),
(4, 'Progressive Metal'),
(5, 'Melodic Death Metal'),
(7, 'Thrash Metal'),
(8, 'Heavy Metal');
=======
(2, 'Techno');
>>>>>>> d2ae9af08cc66e5f2eb7bc8cbcf1927c333d58db

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
