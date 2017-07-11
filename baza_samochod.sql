-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 11 Lip 2017, 14:56
-- Wersja serwera: 5.6.12-log
-- Wersja PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `baza_samochod`
--
CREATE DATABASE IF NOT EXISTS `baza_samochod` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `baza_samochod`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE IF NOT EXISTS `samochody` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(128) NOT NULL,
  `rejestracja` varchar(16) NOT NULL,
  `data_produkcji` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `model`, `rejestracja`, `data_produkcji`) VALUES
(50, 'Toyota Corolla', 'KOL123', '2000-07-30 00:00:00'),
(51, 'Audi A4', 'KRA12', '1998-07-30 00:00:00'),
(52, 'Audi A1', 'KRA1234', '1999-07-30 00:00:00'),
(53, 'Audi A3', 'KOL1234', '2005-02-20 00:00:00'),
(54, 'Honda', 'KOL14524', '2015-08-20 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
