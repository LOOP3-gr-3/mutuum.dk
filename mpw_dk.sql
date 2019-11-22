-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 05. 11 2019 kl. 17:55:06
-- Serverversion: 5.7.26
-- PHP-version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpw_dk`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `beloeb`
--

DROP TABLE IF EXISTS `beloeb`;
CREATE TABLE IF NOT EXISTS `beloeb` (
  `beloeb_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `beloeb` int(10) NOT NULL,
  PRIMARY KEY (`beloeb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bindingsperiode`
--

DROP TABLE IF EXISTS `bindingsperiode`;
CREATE TABLE IF NOT EXISTS `bindingsperiode` (
  `bindingsperiode_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `loebetid_min` int(4) NOT NULL,
  `loebetid_max` int(4) NOT NULL,
  PRIMARY KEY (`bindingsperiode_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontrakt`
--

DROP TABLE IF EXISTS `kontrakt`;
CREATE TABLE IF NOT EXISTS `kontrakt` (
  `kontrakt_id` int(10) NOT NULL AUTO_INCREMENT,
  `netvaerk_id` int(10) NOT NULL,
  `kredit_id` int(10) NOT NULL,
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `rente_id` tinyint(4) NOT NULL,
  `beloeb_id` tinyint(4) NOT NULL,
  `bindingsperiode_id` tinyint(4) NOT NULL,
  `maanedlig_afdrag_min` int(10) NOT NULL,
  `maanedlig_afdrag_max` int(10) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kontrakt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontraktbrud`
--

DROP TABLE IF EXISTS `kontraktbrud`;
CREATE TABLE IF NOT EXISTS `kontraktbrud` (
  `kontraktbrud_id` tinyint(4) NOT NULL,
  `kontraktbrud` varchar(80) NOT NULL,
  PRIMARY KEY (`kontraktbrud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kredit`
--

DROP TABLE IF EXISTS `kredit`;
CREATE TABLE IF NOT EXISTS `kredit` (
  `kredit_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `kreditrating` int(4) NOT NULL,
  PRIMARY KEY (`kredit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `matchtabel`
--

DROP TABLE IF EXISTS `matchtabel`;
CREATE TABLE IF NOT EXISTS `matchtabel` (
  `match_id` int(10) NOT NULL AUTO_INCREMENT,
  `kontrakt_id` int(10) NOT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `netvaerk`
--

DROP TABLE IF EXISTS `netvaerk`;
CREATE TABLE IF NOT EXISTS `netvaerk` (
  `netvaerks_id` int(10) NOT NULL AUTO_INCREMENT,
  `laangiver_id` int(10) NOT NULL,
  `laantager_id` int(10) NOT NULL,
  PRIMARY KEY (`netvaerks_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `profil_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `netvaerk_id` int(10) NOT NULL,
  `kontrakt_id` int(10) NOT NULL,
  `statistik_id` int(10) NOT NULL,
  `kredit_id` int(10) NOT NULL,
  PRIMARY KEY (`profil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `rente`
--

DROP TABLE IF EXISTS `rente`;
CREATE TABLE IF NOT EXISTS `rente` (
  `rente_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `rente` varchar(4) NOT NULL,
  PRIMARY KEY (`rente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `statistik`
--

DROP TABLE IF EXISTS `statistik`;
CREATE TABLE IF NOT EXISTS `statistik` (
  `statistik_id` int(10) NOT NULL AUTO_INCREMENT,
  `match_id` int(10) NOT NULL,
  PRIMARY KEY (`statistik_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fornavn` varchar(40) NOT NULL,
  `efternavn` varchar(40) NOT NULL,
  `mobil` int(12) NOT NULL,
  `mail` varchar(80) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
