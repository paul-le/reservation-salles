-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 jan. 2020 à 10:54
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(26, 'Salut', 'lolo', '2020-01-15 08:00:00', '2020-01-17 09:00:00', 1),
(25, 'fere', 'ezrezr', '2019-12-12 08:00:00', '2019-12-13 09:00:00', 1),
(24, 'reeza', 'reeza', '2019-12-12 08:00:00', '2019-12-12 10:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(19, 'kuroashi', '$2y$12$AZFQlJ3NPEUcN5jWDQueZOADWnBhrnfLSGlBc8shojbRQMXCmtKJi'),
(18, 'serge13', '$2y$12$4PXPC/OHr0BDhSFNOtizKuZQYY/wMCIy6/ukTheLskuGm5fXzVgSC'),
(16, 'katakuri112', '$2y$12$mhdGfAo2eShYDD3eGLf6MesgqDNL.HwRfpPJLFhlhKbv.wp1umc66');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
