-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 22 Juillet 2021 à 19:05
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `medical`
--
CREATE DATABASE IF NOT EXISTS `medical` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medical`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `noma` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`ida`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `mail_2` (`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ida`, `noma`, `mail`, `mdp`) VALUES
(1, 'RACHDI', 'rachdi@gmail.com', 'azerty'),
(2, 'RAHMANI', 'rahmani@gmail.com', 'azerty'),
(3, 'SAHMOUNE', 'sahmoune@gmail.com', 'azerty'),
(4, 'HAMMOUCHE', 'hammouche@gmail.com', 'azerty'),
(5, 'CHOULAK', 'choulak@gmail.com', 'azerty'),
(6, 'LAIMOUCHE', 'laimouche@gmail.com', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `nomM` varchar(20) NOT NULL,
  `prenomM` varchar(20) NOT NULL,
  `daten` date NOT NULL,
  `numordre` int(11) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `adrss` varchar(50) NOT NULL,
  `numtel` varchar(15) NOT NULL,
  `horaire` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`idm`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `mail_2` (`mail`),
  UNIQUE KEY `numordre` (`numordre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`idm`, `nomM`, `prenomM`, `daten`, `numordre`, `specialite`, `adrss`, `numtel`, `horaire`, `mail`, `mdp`) VALUES
(1, 'SAHMOUNE', 'Rachid', '1970-07-08', 1234, 'pediatre', 'freha TIZIOUZOU', '/', '8h', 'sahmoune@gmail.com', 'a'),
(16, 'HARRAR ', 'Smail', '0000-00-00', 0, 'ORL', '14 Rue Ouabdelkader BEJAIA', '034.21.15.33', '8h', 'harrar@gmail.com', 'a'),
(17, 'ACHOUR', 'Mouloud', '0000-00-00', 1, 'Chirurgie urologique', 'Résidence la Grande Baie n°4 cité Tobbal BEJAIA', '034.21.23.95', '8h', 'achour@gmail.com', 'a'),
(18, 'BAKOURI', 'Mahmoud', '0000-00-00', 2, 'Rhumatologie', 'Cité 1000 logts bt E 6 n° 521 Ihadaden BEJAIA', '034 12 72 59', '8h', 'bakouri@gmail.com', 'a'),
(19, 'HAMDI', 'Athmane', '0000-00-00', 3, 'Radiologie', 'Lot Djama n°1 Targa-Ouzemour BEJAIA', '034.10 03 19', '8h', 'hamdi@gmail.com', 'a'),
(20, 'HAMMICHE', 'Madina', '0000-00-00', 4, 'Ophtalmologie', '107 logts ECOTEX Bt B1 n°1 Targa-Ouzemour BEJAIA', '034.21.42.83', '8h', 'hammiche@gmail.com', 'a'),
(21, 'IDJRAOUI eps RAHMANI', 'Farida', '0000-00-00', 5, 'Rééducation fonctionnelle et Kinésithérapie', 'Cité 300 logts Bt C 9 n°261 – Ihaddaden BEJAIA', '034.11.92.60', '8h', 'idjraoui@gmail.com', 'a'),
(22, 'RAHMANI', 'M''hamed', '0000-00-00', 6, 'Rééducation fonctionnelle et Kinésithérapie', 'Cité 300 logts Bt C 9 n°261 – Ihaddaden BEJAIA', '034.11.92.60', '8h', 'rahmani@gmail.com', 'a'),
(23, 'MEZIANE eps SAHMOUNE', 'Naima', '0000-00-00', 7, 'pediatre', 'freha TIZIOUZOU', '/', '8h', 'meziane@gmail.com', 'a'),
(24, 'TIMIZAR', 'Ahmed', '0000-00-00', 8, 'Psychiatrie', 'Promotion EDIMCO Bloc D n° 02 BEJAIA', '034.21.71.58', '8h', 'timizar@gmail.com', 'a'),
(25, 'ALLAL  ep SADI', 'Fazilet Bachra', '0000-00-00', 9, 'Ophtalmologie', '01, cité NACERIA  BEJAIA', '034.22.11.12', '8h', 'allal@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `medecinavantverif`
--

CREATE TABLE IF NOT EXISTS `medecinavantverif` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `nomM` varchar(20) NOT NULL,
  `prenomM` varchar(20) NOT NULL,
  `daten` date NOT NULL,
  `numordre` int(11) NOT NULL,
  `specialite` varchar(20) NOT NULL,
  `adrss` varchar(30) NOT NULL,
  `numtel` varchar(15) NOT NULL,
  `horaire` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`idm`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `mail_2` (`mail`),
  UNIQUE KEY `numordre` (`numordre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `daten` date NOT NULL,
  `adrss` varchar(30) NOT NULL,
  `numidnat` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`idp`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `numidnat` (`numidnat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`idp`, `nom`, `prenom`, `daten`, `adrss`, `numidnat`, `mail`, `username`, `mdp`) VALUES
(1, 'amine', 'amine', '2000-05-16', 'bougie', '1234', 'a@gmail.com', 'chemsou', 'azerty'),
(2, 'chemsou', 'chemsou', '2021-07-01', 'zone', '333', 'amine@gmail.com', 'amine', 'azerty'),
(3, 'RACHDI', 'Chems eddine', '2000-05-16', 'bejaia', '111111111', 'r@gmail.com', 'chems eddine', 'a'),
(4, 'rahmani', 'mouna', '2000-02-26', 'bejaia', '33333333', 'm@gmail.com', 'MOON', 'a'),
(7, 'BOUDEJEMA', 'Said', '2021-07-08', 'bejaia', '123123', 'boudj@gmail.com', 'boudje', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `idrdv` int(11) NOT NULL AUTO_INCREMENT,
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `jour` date NOT NULL,
  `heure` varchar(10) NOT NULL,
  PRIMARY KEY (`idrdv`),
  KEY `idm` (`idm`),
  KEY `idp` (`idp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
