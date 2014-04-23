-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 23 Avril 2014 à 21:20
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

-- --------------------------------------------------------

--
-- Structure de la table `table 2`
--

CREATE TABLE IF NOT EXISTS `table 2` (
  `COL 1` varchar(54) DEFAULT NULL,
  `COL 2` int(6) DEFAULT NULL,
  `COL 3` int(6) DEFAULT NULL,
  `COL 4` int(6) DEFAULT NULL,
  `COL 5` int(6) DEFAULT NULL,
  `COL 6` int(6) DEFAULT NULL,
  `COL 7` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table 2`
--

INSERT INTO `table 2` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`) VALUES
('Faits constat', 2008, 2009, 2010, 2011, 2012, 2013),
('Atteintes aux biens', 139590, 141167, 147233, 142977, 151327, 167435),
('Atteintes volontaires ', 34422, 35294, 28699, 35750, 35471, 35421),
('Escroqueries et infractions ', 30584, 25333, 24094, 23706, 21618, 27541),
('Infractions r', 34092, 33253, 32527, 33842, 28745, 19847),
('Atteintes sexuelles', 2287, 2053, 2064, 2086, 2355, 1573);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
