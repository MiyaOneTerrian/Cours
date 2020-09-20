-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 24 juin 2019 à 11:51
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

DROP DATABASE IF EXISTS base;
CREATE DATABASE base;
USE base;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int(5) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `libelle`) VALUES
(1, 'alimentaire'),
(2, 'bricolage'),
(3, 'santé');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(5) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `quantite` int(5) DEFAULT NULL,
  `idcategorie` int(5) NOT NULL,
  PRIMARY KEY (`idproduit`),
  KEY `idcategorie` (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `designation`, `prix`, `quantite`, `idcategorie`) VALUES
(6, 'Chocolat', 2.5, 200, 3),
(2, 'Pain', 6.2, 20, 1),
(3, 'Beurre', 1.5, 12, 1),
(7, 'Papier hygiÃ©nique', 2.02, 123, 3),
(8, 'Perceuse', 135, 12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `login`, `mdp`, `nom`, `prenom`) VALUES
(1, 'admin', 'admin', 'Administrateur', 'Administrateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
