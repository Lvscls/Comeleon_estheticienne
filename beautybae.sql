-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 oct. 2021 à 10:14
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `beautybae`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `title`, `text`, `created_at`, `nom`, `prenom`) VALUES
(4, 'Bonne Ambiance', 'Bonne ambiance au niveau du personnel surtout lilan là waouw quel male alpha', '2021-10-13 18:43:59', 'Zabili', 'Nouhaila'),
(5, 'bruh', 'Sah quel plaisir', '2021-10-13 18:58:25', 'lilian', 'vasc'),
(6, '1', 'test', '2021-10-13 19:40:07', '1', '1'),
(7, 'Ongle parfait', 'Lillian fait parfaitement les ongles ! je le recommande', '2021-10-13 20:03:35', 'moi', 'toi');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `message`) VALUES
(1, 'Zabili', 'Nouhaila', 'nouguvhjkbln,m;ù:*', '!4*7\r\n864+2'),
(2, 'Zabili', 'Nouhaila', 'nouguvhjkbln,m;ù:*', '^*àuçpy_otèir-u(yrset');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211001152047', '2021-10-07 20:34:41', 438),
('DoctrineMigrations\\Version20211007205137', '2021-10-07 20:51:45', 226),
('DoctrineMigrations\\Version20211008142958', '2021-10-08 14:30:10', 137),
('DoctrineMigrations\\Version20211012182853', '2021-10-12 18:30:12', 633);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

DROP TABLE IF EXISTS `prestation`;
CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `nbr_seance` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserverid_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51C88FAD4296D31F` (`genre_id`),
  KEY `IDX_51C88FADBCF5E72D` (`categorie_id`),
  KEY `IDX_51C88FADA74BBA15` (`reserverid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `genre_id`, `categorie_id`, `libelle`, `prix`, `nbr_seance`, `description`, `reserverid_id`) VALUES
(2, NULL, NULL, 'Massage', 50, 1, 'Massage pour femme, d\'une durée de 1heure aux huiles essentielles', NULL),
(3, NULL, NULL, 'Implantation capillaire', 150, 5, 'Soins pour cheveux avec implantation.', NULL),
(4, NULL, NULL, 'Epilation du maillot', 30, 1, 'Epilation du maillot pour femme. A la cire.', NULL),
(5, NULL, NULL, 'Lifting', 100, 2, 'Il s\'agit d\'un traitement non invasif qui s\'applique au moyen de ventouse qui exerce une aspiration qui permet de stimuler l\'irrigation sanguine de la peau pour lui redonner un aspect naturel et ferme.', NULL),
(6, NULL, NULL, 'Epilation Laser', 110, 5, 'Epilation laser pour homme du torse.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`id`, `date`, `name`, `phone`, `mail`) VALUES
(1, '2020-01-26 19:29:00', 'Vasconcelos', '0741288248', 'lojqsdioqjdqdqsjdkqsjnkd'),
(2, '2020-01-26 19:29:00', 'Vasconcelos', '0741288248', 'lojqsdioqjdqdqsjdkqsjnkd'),
(3, '2021-10-08 15:08:11', 'Vasconcelos', '0741288248', 'lojqsdioqjdqdqsjdkqsjnkd');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD CONSTRAINT `FK_51C88FAD4296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `FK_51C88FADA74BBA15` FOREIGN KEY (`reserverid_id`) REFERENCES `reserver` (`id`),
  ADD CONSTRAINT `FK_51C88FADBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
