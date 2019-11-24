-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 nov. 2019 à 17:27
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
-- Base de données :  `e-livre`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `num_categ` int(10) NOT NULL,
  `nom_categ` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_categ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`num_categ`, `nom_categ`) VALUES
(1, 'Roman'),
(2, 'BD'),
(3, 'Manga');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `num_cli` int(3) NOT NULL,
  `nom_cli` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pnom_cli` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_cli` int(3) DEFAULT NULL,
  `mail_cli` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mdp_cli` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_cli` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num_cli` int(3) DEFAULT NULL,
  `num_com` int(10) NOT NULL,
  `date_com` date DEFAULT NULL,
  PRIMARY KEY (`num_com`),
  KEY `com_fk` (`num_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `num_genre` int(10) NOT NULL,
  `nom_genre` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`num_genre`, `nom_genre`) VALUES
(1, 'Fantastique'),
(2, 'Sciences-Fiction'),
(3, 'Classique');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_com`
--

DROP TABLE IF EXISTS `ligne_com`;
CREATE TABLE IF NOT EXISTS `ligne_com` (
  `num_prod` int(3) NOT NULL,
  `num_com` int(10) NOT NULL,
  PRIMARY KEY (`num_com`,`num_prod`),
  KEY `ligne_com_fk` (`num_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id_liv` int(10) NOT NULL,
  `titre_liv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_liv` int(10) DEFAULT NULL,
  `auteur_liv` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_liv` int(11) DEFAULT NULL,
  `format_liv` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_categ` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_liv`),
  KEY `livre_fk` (`num_categ`),
  KEY `livres_fk` (`genre_liv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id_liv`, `titre_liv`, `genre_liv`, `auteur_liv`, `date_liv`, `format_liv`, `num_categ`) VALUES
(7, 'Tintin au pays de l\'or noir', NULL, 'Hergé', 1993, 'cartonné', 2),
(8, 'Tintin au Congo', NULL, 'Hergé', 1993, 'cartonné', 2),
(9, 'Tintin au Congo', NULL, 'Hergé', 1993, 'cartonné', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `num_prod` int(3) NOT NULL,
  `nom_prod` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prix` int(100) DEFAULT NULL,
  `type_prod` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categ_prod` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrip_prod` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_prod` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_prod`),
  KEY `prod_fk` (`categ_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`num_prod`, `nom_prod`, `prix`, `type_prod`, `categ_prod`, `descrip_prod`, `img_prod`) VALUES
(1, 'liseuse Roobo Noir', 180, 'liseuses', NULL, ' Permet une lecture simple et intuitive', ' <img src=\"Produits/5.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(2, 'liseuse Roobo Blanc', 180, 'liseuses', NULL, ' Permet une lecture simple et intuitive', '<img src=\"Produits/3.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(3, 'liseuse Roobo Glo HD', 100, 'liseuses', NULL, ' Permet une lecture simple et intuitive a petit prix', ' <img  src=\"Produits/4.jpg\" alt=\"Snow\" style=\"width:80%\">'),
(4, 'Pochette protection', 20, 'accessoire', NULL, ' Permet une meilleure utilisation et protection du produit', ' <img src=\"Produits/2.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(5, 'Etui Rose-Rouge', 25, 'accessoire', NULL, ' Kit main libre et protection du produit', ' <img src=\"Produits/1.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(11, 'Etui Sleepcover edition Noir', 26, 'accessoire', NULL, 'Exclusivement dedie a la liseuse Kobo Aura, cet etui epouse parfaitement les lignes de votre liseuse. L\'etui Sleepcover intelligent demarre ou met en veille votre appareil grace a sa couverture magnetique.', ' <img src=\"Produits/11.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(7, 'Tintin au pays de l\'or noir', 12, 'livre', 'BD', ' Tintin part au Moyen-Orient...', ' <img src=\"Produits/7.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(8, 'Tintin au Congo', 12, 'livre', 'BD', ' Tintin part au Congo pour de nouvelles aventures...', ' <img src=\"Produits/8.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(9, 'Tintin objectif Lune', 12, 'livre', 'BD', ' Tintin part a la conquete de l\'espace...', ' <img src=\"Produits/9.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(10, 'Mini Chargeur Secteur', 12, 'accessoire', NULL, ' Chargeur rapide avec port USB special liseuses !', ' <img src=\"Produits/10.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(6, 'Etui coque violet de protection pour liseuses', 13, 'accessoire', NULL, 'Legere, cette housse de premiere qualite allie securite et durabilite pour proteger efficacement votre appareil grace a sa fermeture eclair facile d\'acces.\r\nAvec sa poche en maille a l\'interieur, elle offre du rangement supplémentaire.', ' <img src=\"Produits/12.jpg\" alt=\"ETUI\" style=\"width:100%\">'),
(15, 'Liseuse Touch Lux 4 rouge Vivlio', 119, 'liseuses', NULL, 'Cette tablette vous permettra de regarder vos livres de façon simple, un guide demarrage est inclue.', ' <img  src=\"Produits/15.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(16, 'Germinal de Zola', 4, 'livre', 'Roman', 'Voici, dans la France moderne et industrielle, les \" Miserables \" de Zola. Ce roman des mineurs, c\'est aussi l\'Enfer, dans un monde dantesque, où l\'on \" voyage au bout de la nuit \"', ' <img src=\"Produits/16.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(17, 'Madame de Bovary Gustave Flaubert', 4, 'livre', 'Roman', '\r\nUne jeune femme romanesque qui s\'etait construit un monde romantiquement tente d\'échapper - dans un vertige grandissant - a l\'ennui de sa province, la médiocrité de son mariage et la platitude de sa vie. ', ' <img src=\"Produits/17.jpg\" alt=\"Snow\" style=\"width:100%\">'),
(18, 'Le dernier jours d\'un condamné', 4, 'livre', 'Roman', 'Encore six heures et je serai mort. Est-il bien vrai que je serai mort avant la fin du jour ? \" Bientot, sa tete roulera dans la sciure. Juger, emprisonner, enchainer, il attend dans l\'epouvante. ', ' <img src=\"Produits/18.jpg\" alt=\"Snow\" style=\"width:100%\">');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_membre`
--

DROP TABLE IF EXISTS `tbl_membre`;
CREATE TABLE IF NOT EXISTS `tbl_membre` (
  `id_mbr` int(8) NOT NULL AUTO_INCREMENT,
  `nom_mbr` varchar(255) NOT NULL,
  `afficher_util` varchar(255) NOT NULL,
  `mdp_mbr` varchar(255) NOT NULL DEFAULT '',
  `email_mbr` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mbr`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_membre`
--

INSERT INTO `tbl_membre` (`id_mbr`, `nom_mbr`, `afficher_util`, `mdp_mbr`, `email_mbr`) VALUES
(2, 'btssio', 'Administrateur', '017fe3a523712ceba7cde169653316e9', 'btssio@lpp.re'),
(3, 'Toto', 'Utilisateur', '1234', 'toto@google.re'),
(4, 'Admin', 'Administrateur', 'azerty', 'Admin@lpp.re');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
