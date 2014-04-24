-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Avril 2014 à 09:51
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cartodb`
--
CREATE DATABASE IF NOT EXISTS `cartodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cartodb`;

-- --------------------------------------------------------

--
-- Structure de la table `cartodb`
--

CREATE TABLE IF NOT EXISTS `cartodb` (
  `cartodb_id` int(11) NOT NULL,
  `field_1` varchar(11) NOT NULL,
  `field_2` int(11) NOT NULL,
  `field_3` int(11) NOT NULL,
  `field_4` int(11) NOT NULL,
  `field_5` int(11) NOT NULL,
  `field_6` int(11) NOT NULL,
  `field_7` int(11) NOT NULL,
  `field_8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cartodb`
--

INSERT INTO `cartodb` (`cartodb_id`, `field_1`, `field_2`, `field_3`, `field_4`, `field_5`, `field_6`, `field_7`, `field_8`) VALUES
(1, '', 0, 0, 0, 0, 0, 0, 0),
(2, '', 0, 0, 0, 0, 0, 0, 0),
(1, 'Délits', 2008, 2009, 2010, 2011, 2012, 2013, 0);

-- --------------------------------------------------------

--
-- Structure de la table `crimparis`
--

CREATE TABLE IF NOT EXISTS `crimparis` (
  `Delits constates` varchar(54) DEFAULT NULL,
  `2008` int(6) DEFAULT NULL,
  `2009` int(6) DEFAULT NULL,
  `2010` int(6) DEFAULT NULL,
  `2011` int(6) DEFAULT NULL,
  `2012` int(6) DEFAULT NULL,
  `2013` int(6) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimparis`
--

INSERT INTO `crimparis` (`Delits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 139590, 141167, 147233, 142977, 151327, 167435, NULL),
('Atteintes volontaires a l''integrite physique', 34422, 35294, 28699, 35750, 35471, 35421, NULL),
('Escroqueries et infractions economiques et financieres', 30584, 25333, 24094, 23706, 21618, 27541, NULL),
('Infractions revelees par l''action des services', 34092, 33253, 32527, 33842, 28745, 19847, NULL),
('Atteintes sexuelles', 2287, 2053, 2064, 2086, 2355, 1573, NULL),
('Violences sexuelles', 1412, 1413, 1282, 1412, 1442, 1319, NULL),
('Crime_id', 1, 2, 3, 4, 5, 6, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
