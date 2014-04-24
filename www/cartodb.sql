-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Avril 2014 à 21:25
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
-- Structure de la table `crimehautdeseine`
--

CREATE TABLE IF NOT EXISTS `crimehautdeseine` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimehautdeseine`
--

INSERT INTO `crimehautdeseine` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 60805, 61486, 62332, 60603, 61018, 68679, NULL),
('Atteintes volontaires a l''integrite physique', 12513, 13187, 13605, 13704, 14194, 13971, NULL),
('Escroqueries et infractions economiques et financieres', 10091, 11144, 11065, 11228, 11250, 12533, NULL),
('Infractions revelees par l''action des services', 10678, 11066, 10246, 11339, 10466, 7321, NULL),
('Atteintes sexuelles', 299, 240, 221, 257, 293, 260, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `crimessonne`
--

CREATE TABLE IF NOT EXISTS `crimessonne` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimessonne`
--

INSERT INTO `crimessonne` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 48544, 46438, 44490, 44988, 45595, 47043, NULL),
('Atteintes volontaires a l''integrite physique', 12133, 11458, 11367, 10820, 11214, 11450, NULL),
('Escroqueries et infractions economiques et financieres', 7063, 4723, 5099, 5986, 5572, 5805, NULL),
('Infractions revelees par l''action des services', 7941, 8276, 8087, 8687, 8021, 6959, NULL),
('Atteintes sexuelles', 227, 292, 213, 234, 208, 167, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

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

-- --------------------------------------------------------

--
-- Structure de la table `crimseineetmarne`
--

CREATE TABLE IF NOT EXISTS `crimseineetmarne` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimseineetmarne`
--

INSERT INTO `crimseineetmarne` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteinte aux biens', 52283, 53283, 50981, 50802, 50390, 51520, NULL),
('Atteintes volontaires a l''integrite physique', 12417, 12260, 12686, 11798, 11513, 12543, NULL),
('Escroqueries et infractions economiques et financieres', 9435, 8909, 6642, 6996, 6851, 7334, NULL),
('Infractions revelees par l''action des services', 11741, 11191, 10298, 11147, 11046, 9783, NULL),
('Atteintes sexuelles', 317, 314, 232, 332, 276, 262, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `crimseinesaintdenis`
--

CREATE TABLE IF NOT EXISTS `crimseinesaintdenis` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimseinesaintdenis`
--

INSERT INTO `crimseinesaintdenis` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 94511, 94642, 93636, 90456, 91101, 92767, NULL),
('Atteintes volontaires a l''integrite physique', 27697, 28791, 30877, 31331, 30173, 30347, NULL),
('Escroqueries et infractions economiques et financieres', 8808, 9310, 10067, 9706, 9235, 9554, NULL),
('Infractions revelees par l''action des services', 17845, 17481, 16142, 17063, 16986, 16012, NULL),
('Atteintes sexuelles', 282, 298, 292, 344, 326, 337, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `crimvaldemarne`
--

CREATE TABLE IF NOT EXISTS `crimvaldemarne` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimvaldemarne`
--

INSERT INTO `crimvaldemarne` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 60975, 59663, 59547, 58636, 57039, 58330, NULL),
('Atteintes volontaires a l''integrite physique', 13694, 13534, 14580, 14605, 14490, 13973, NULL),
('Escroqueries et infractions economiques et financieres', 6917, 6090, 6335, 6515, 7474, 7585, NULL),
('Infractions revelees par l''action des services', 12565, 13373, 11553, 11440, 11312, 8217, NULL),
('Atteintes sexuelles', 225, 226, 177, 206, 188, 173, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `crimvaldoise`
--

CREATE TABLE IF NOT EXISTS `crimvaldoise` (
  `Faits constates` varchar(54) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` int(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimvaldoise`
--

INSERT INTO `crimvaldoise` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 58163, 57516, 56866, 55159, 54487, 55605, NULL),
('Atteintes volontaires a l''integrite physique', 13369, 13334, 13799, 14315, 14434, 13931, NULL),
('Escroqueries et infractions economiques et financieres', 9611, 9751, 10010, 10516, 7546, 8051, NULL),
('Infractions revelees par l''action des services', 11356, 11460, 11311, 12677, 12964, 9875, NULL),
('Atteintes sexuelles', 233, 217, 194, 248, 228, 194, NULL),
('crime_id', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `crimyvelines`
--

CREATE TABLE IF NOT EXISTS `crimyvelines` (
  `Faits constates` varchar(55) DEFAULT NULL,
  `2008` int(5) DEFAULT NULL,
  `2009` int(5) DEFAULT NULL,
  `2010` int(5) DEFAULT NULL,
  `2011` int(5) DEFAULT NULL,
  `2012` int(5) DEFAULT NULL,
  `2013` varchar(5) DEFAULT NULL,
  `NULL` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `crimyvelines`
--

INSERT INTO `crimyvelines` (`Faits constates`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `NULL`) VALUES
('Atteintes aux biens', 41010, 41151, 39504, 40386, 39260, '40747', NULL),
('Atteintes volontaires a l''integrite physique', 10818, 10990, 10861, 10782, 10352, '11189', NULL),
('Escroqueries et infractions économiques et financieres', 10581, 10769, 8569, 7530, 7975, '7927 ', NULL),
('Infractions revelees par l''action des services', 8108, 8157, 8538, 9642, 10152, '9206', NULL),
('Atteintes sexuelles', 278, 210, 268, 268, 225, '185', NULL),
('crime_id', 1, 2, 3, 4, 5, '6', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
