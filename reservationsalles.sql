-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 jan. 2020 à 10:46
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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(33, 'Test', 'Test 123', '2020-01-16 11:00:00', '2020-01-16 12:00:00', 11),
(32, 'KaraokÃ©', 'KaraokÃ© old school', '2020-01-13 14:00:00', '2020-01-13 15:00:00', 13),
(31, 'Anniversaire', 'Anniversaire de ma fille Serge', '2020-01-17 10:00:00', '2020-01-13 11:00:00', 13),
(29, 'Mariage', 'Mariage bal oui oui', '2020-01-13 08:00:00', '2020-01-13 09:00:00', 13),
(30, 'Anniversaire', 'Anniversaire de mon fils Nicolas', '2020-01-14 10:00:00', '2020-01-14 11:00:00', 13);

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(2, 'pol', '$2y$12$m2f9FJ1NlPyyV8fCrzpIvOwqieS6ZkwUBOm96NSw8i6CUlHTFdVjG'),
(16, 'Polo', '$2y$12$xjtRufhtr9GwD2O6NuUks.Nw8tGqOhr9kaFXqtXpZpcA07ztUWb4W'),
(15, 'Paul1995', '$2y$12$6GeRR7ez.MU6LEAww6y9WOjElW1ukGzlW/1yOgRptUlPs0M4ZQrqO'),
(10, 'polo', '$2y$12$dGQ3trUA6n31oPItHD/TQuQr2HEX.xpZkQSOKFg6uLuKRxEP.EHzW'),
(11, 'Paul', '$2y$12$nPTxpUrvLSCEe8eKvaDZheSdQzXGUIT0VvcPhkRp.7DYPPp9R0.b6'),
(13, 'Serjuani', '$2y$12$it4u6Zxe70XG0ORWGrBuCObGEP48YD3akj5x6QcmCmdP/NiE.Y2bS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
