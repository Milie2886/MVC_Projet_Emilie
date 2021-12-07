-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 déc. 2021 à 13:45
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.10-dev

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `nom`, `description`, `image_name`) VALUES
(1, 'Splendor', 'Meilleur jeu du monde entier vers l\'infini et au delà!!!', 'https://lecoindujeu.com/wp-content/uploads/2015/02/Splendor-1.jpg'),
(2, 'Skull', '– Le joueur qui commence est le challenger de la manche précédente (qu’il ait gagné ou perdu son défi).\r\n– Chaque joueur choisit une carte qu’il pose face cachée sur son tapis\r\n– lorsque chaque tapis contient au moins une carte, il est possible de :\r\na) Poser une autre carte\r\nb) Ou lancer un défi (voir défi ci-dessous)\r\n[!] Un joueur à qui il ne reste qu’une seule carte doit obligatoirement lancer un défi.', 'https://www.jedisjeux.net/media/cache/full/uploads/img/skull-49-1378414562.jpg'),
(3, 'Catan', 'À vous les joies et les peines de l\'exploration de l\'île de Catane !\r\nCatan est un jeu de plateau et de stratégie qui vous embarque dans une course pour le développement de votre colonie sur l\'île de Catane.', 'https://www.espritjeu.com/upload/image/catan-p-image-65490-grande.jpg'),
(4, 'Uno', 'Pour gagner au Uno, vous devez être le 1er à vous débarrasser de toutes vos cartes (à chaque manche afin de marquer des points).', 'https://image.api.playstation.com/cdn/EP0001/CUSA04040_00/LRI3Rg5MKOi5AkefFaMcChNv5WitM7sz.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Gregory', 'Emilie', 'user@gmail.com', '$2y$10$tBv.Y5Xd8aoSwDPuRiaD6Om8VP9D0/YViFqe.n9g9MHXXA.4wr79S');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
