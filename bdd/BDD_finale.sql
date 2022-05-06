-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 mai 2022 à 09:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sav`
--
CREATE DATABASE IF NOT EXISTS `dwwm111` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dwwm111`;

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `IdAdresse` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseClient` varchar(30) DEFAULT NULL,
  `CPClient` int(11) DEFAULT NULL,
  `VilleClient` varchar(30) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdAdresse`),
  KEY `IdCLient` (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`IdAdresse`, `AdresseClient`, `CPClient`, `VilleClient`, `IdClient`) VALUES
(1, '2b rue des près', 14270, 'MEZIDON', 1),
(2, '6 rue Emile Lebas', 14800, 'DEAUVILLE', 16),
(3, '5 avenue des champs élysées', 75000, 'PARIS', 17),
(4, '2 rue Yotte', 61240, 'LE MERLERAULT', 19),
(5, '21 rue Thiers', 27300, 'BERNAY', 20),
(6, '130 avenues Pompidou', 33000, 'BORDEAUX', 18),
(7, 'Places des vignes', 655000000, 'EVREUX', 14),
(8, 'rue champs haut', 13000, 'hu', 15),
(9, '8 avenue de la mer', 14000, 'CAEN', 13),
(10, 'chemin du maré puant', 49000, 'ROUEN', 12),
(11, 'rue du saucisson', 62000, 'LIMOGES', 11),
(12, '12 avenue du vigneron', 59000, 'LILLE', 5),
(13, 'allée de la sardine', 80000, 'STRASBOURG', 6),
(14, '15 chemin de la moutarde', 72600, 'DIJON', 7),
(15, 'rue du sans accent', 13000, 'NIMES', 8),
(16, '15 allée de la vague', 69500, 'REIMS', 9),
(17, '56 rue de la glisse', 74000, 'MORZINE', 10),
(18, '33 chemin du repos', 612000, 'PAU', 4),
(19, 'Allée qui pique', 72400, 'OUARZAZATT', 3),
(20, '2b rue des près', 14270, 'MEZIDON', 1),
(21, '3 rue du rien', 99999, 'Zalem', 21);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `IdArticle` int(11) NOT NULL AUTO_INCREMENT,
  `NomArticle` varchar(30) DEFAULT NULL,
  `PrixU` decimal(15,2) DEFAULT NULL,
  `StockPhysiqueArticle` int(11) DEFAULT NULL,
  `StockRebusArticle` int(11) DEFAULT NULL,
  `StockSAVArticle` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=7792 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`IdArticle`, `NomArticle`, `PrixU`, `StockPhysiqueArticle`, `StockRebusArticle`, `StockSAVArticle`) VALUES
(1221, 'Porte de garage sectionnelle', NULL, 1, 5, 1),
(1230, 'Moteur de portail coulissant', NULL, 3, 0, 1),
(1245, 'Moteurs portail double-battant', NULL, 23, 0, 1),
(1300, 'Carport Alu EBENE', NULL, 23, 0, 0),
(1324, 'Porte entrée', NULL, 3, 0, 2),
(1596, 'Pergola FEUILLE', NULL, 1, 0, 1),
(1647, 'Volet roulant AIRUS', NULL, 1, 0, 1),
(1665, 'Pergola bioclimaque NATURA', NULL, 13, 0, 0),
(2377, 'Marquise COQUILLAGE', NULL, 23, 0, 1),
(2515, 'Porte de service', NULL, 3, 0, 1),
(3104, 'Porte entrée', NULL, 3, 0, 2),
(3201, 'Porte de garage sectionnelle', NULL, 3, 0, 1),
(3304, 'Porte d\'entrée', NULL, 3, 0, 1),
(3687, 'Fenêtre anthracite', NULL, 3, 0, 1),
(4623, 'Portillon ARIEGE', NULL, 15, 0, 0),
(4634, 'Lot 2 Volets battants LEONUA', NULL, 3, 1, 0),
(4690, 'Porte fenêtre', NULL, 3, 0, 1),
(4895, 'Portillon anthracite', NULL, 3, 0, 1),
(5180, 'Portillon SIRENE', NULL, 0, 4, 2),
(5620, 'Fenêtre blanche', NULL, 3, 0, 1),
(5623, 'Fenêtre de toit', NULL, 6, 0, 1),
(5662, 'Carport bois CEDRE', NULL, 3, 2, 1),
(7791, 'Porte de garage GEIO', NULL, 3, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(30) DEFAULT NULL,
  `PrénomClient` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdClient`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`IdClient`, `NomClient`, `PrénomClient`) VALUES
(1, 'Dupont', 'Serge'),
(2, 'DaSilva', 'Diego'),
(3, 'Desch', 'Didier'),
(4, 'LORIS', 'Hugo'),
(5, 'GIROUD', 'Olivier'),
(6, 'THURAM', 'Lilian'),
(7, 'LEPEN', 'Marine'),
(8, 'ROYAL', 'Ségolène'),
(9, 'BONAPART', 'Napoléon'),
(10, 'MACRON', 'Emmanuel'),
(11, 'PHILIPE', 'Edouard'),
(12, 'LAVIEILLE', 'Simone'),
(13, 'VIAN', 'Boris'),
(14, 'CURIE', 'Marie'),
(15, 'BLUM', 'Léon'),
(16, 'DULUXE', 'Valentine'),
(17, 'TELLIER', 'Sylvie'),
(18, 'MENARD', 'Malika'),
(19, 'FABRE', 'Cindy'),
(20, 'PERNAULT', 'Jean-Pierre'),
(21, 'PASCOMMAND', 'Jeanne'),
(22, 'LARSON', 'Nicky'),
(23, 'KLINGE', 'Yoko'),
(24, 'LESURVIVANT', 'Ken'),
(25, 'SAILOR', 'Moon');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IdCommande` int(11) NOT NULL AUTO_INCREMENT,
  `DateCommande` date DEFAULT NULL,
  `StatutCommande` varchar(10) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `IdFacture` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdCommande`),
  UNIQUE KEY `IdFacture` (`IdFacture`),
  KEY `IdCLient` (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=502137 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`IdCommande`, `DateCommande`, `StatutCommande`, `IdClient`, `IdFacture`) VALUES
(502116, '2022-04-22', 'Expediee', 1, 20001306),
(502117, '2021-08-26', 'Expediee', 2, 20001307),
(502118, '2019-03-02', 'Expediee', 3, 20001308),
(502119, '2019-03-03', 'Expediee', 4, 20001309),
(502120, '2019-03-04', 'Expediee', 5, 20001310),
(502121, '2019-03-05', 'Expediee', 6, 20001311),
(502122, '2021-08-26', 'Expediee', 7, 20001312),
(502123, '2021-08-27', 'Expediee', 8, 20001313),
(502124, '2021-08-28', 'Expediee', 9, 20001314),
(502125, '2000-03-13', 'Expediee', 10, 20001315),
(502126, '2007-04-06', 'Expediee', 11, 20001316),
(502127, '2007-04-07', 'Annulee', 12, 20001317),
(502128, '2021-08-26', 'En cours', 13, 20001318),
(502129, '2021-08-26', 'En cours', 14, 20001319),
(502130, '2021-08-27', 'En cours', 15, 20001320),
(502131, '2021-08-28', 'Expediee', 16, 20001321),
(502132, '2000-03-13', 'Expediee', 17, 20001322),
(502133, '2007-04-06', 'Expediee', 18, 20001323),
(502134, '2018-08-26', 'Expediee', 19, 20001324),
(502135, '2013-08-27', 'Expediee', 20, 20001325),
(502136, '2004-08-28', 'Expediee', 12, 20001326);

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

DROP TABLE IF EXISTS `concerne`;
CREATE TABLE IF NOT EXISTS `concerne` (
  `IdArticle` int(11) NOT NULL,
  `IdTicket` int(11) NOT NULL,
  PRIMARY KEY (`IdArticle`,`IdTicket`),
  KEY `IdTicket` (`IdTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `constituer`
--

DROP TABLE IF EXISTS `constituer`;
CREATE TABLE IF NOT EXISTS `constituer` (
  `IdArticle` int(11) NOT NULL,
  `IdPièce` int(11) NOT NULL,
  PRIMARY KEY (`IdArticle`,`IdPièce`),
  KEY `IdPièce` (`IdPièce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `constituer`
--

INSERT INTO `constituer` (`IdArticle`, `IdPièce`) VALUES
(1221, 990123),
(1230, 990124),
(1245, 990125),
(1245, 990126),
(1300, 990127),
(1300, 990128),
(1324, 990129),
(2515, 990130),
(1596, 990131),
(5623, 990132),
(5662, 990133),
(4623, 990134);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `IdCommande` int(11) NOT NULL,
  `IdArticle` int(11) NOT NULL,
  `Garantie` varchar(50) DEFAULT NULL,
  `QteCOmART` varchar(50) DEFAULT NULL,
  `QteExpArt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdCommande`,`IdArticle`),
  KEY `IdArticle` (`IdArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`IdCommande`, `IdArticle`, `Garantie`, `QteCOmART`, `QteExpArt`) VALUES
(502116, 1221, '2024-04-22', '2', '2'),
(502116, 1230, '2024-04-22', '1', '1'),
(502117, 1221, '2023-08-26', '1', '1'),
(502117, 1245, '2023-08-26', '3', '3'),
(502118, 1665, '2021-03-02', '1', '1'),
(502118, 4634, '2024-03-02', '1', '1'),
(502119, 4895, '2021-03-03', '1', '1'),
(502120, 1647, '2022-03-04', '5', '5'),
(502121, 4623, '2021-03-05', '1', '1'),
(502121, 4690, '2021-03-05', '1', '1'),
(502122, 2377, '2023-08-26', '2', '1'),
(502123, 1300, '2022-08-27', '1', '1'),
(502124, 1300, '2022-08-28', '1', '1'),
(502124, 1665, '2024-08-28', '1', '1'),
(502125, 1596, '2001-03-13', '1', '1'),
(502126, 4895, '2009-04-06', '1', '1'),
(502127, 3201, '2222-04-06', '1', '1'),
(502128, 3201, '2023-08-26', '1', '1'),
(502129, 1324, '2023-08-26', '1', '1'),
(502130, 1230, '2021-08-27', '2', '1'),
(502131, 1665, '2023-08-28', '1', '1'),
(502132, 4634, '2002-03-13', '1', '1'),
(502133, 4690, '2009-04-06', '1', '1'),
(502134, 4690, '2020-08-26', '1', '1'),
(502135, 1300, '2015-08-27', '1', '1'),
(502136, 1221, '2006-08-28', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `diagnostic`
--

DROP TABLE IF EXISTS `diagnostic`;
CREATE TABLE IF NOT EXISTS `diagnostic` (
  `IdDiag` int(11) NOT NULL AUTO_INCREMENT,
  `LibDiagnostic` varchar(50) DEFAULT NULL,
  `IdTicket` int(11) NOT NULL,
  `DateDiag` date DEFAULT NULL,
  PRIMARY KEY (`IdDiag`),
  KEY `IdTicket` (`IdTicket`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diagnostic`
--

INSERT INTO `diagnostic` (`IdDiag`, `LibDiagnostic`, `IdTicket`, `DateDiag`) VALUES
(1, 'Remplacement à neuf', 404001, '2020-05-15'),
(2, 'Echange de la platine', 404021, '2022-11-05'),
(3, 'Remplacement de la batterie', 404008, '2020-07-13'),
(4, 'Economiquement irréparable', 404002, '2019-03-01'),
(5, 'Remplacement à neuf', 404003, '2018-06-22'),
(6, 'Encore en Panne !!!!', 404004, '2022-05-04'),
(12, 'Test', 404011, '2022-05-05'),
(16, 'Probleme resolu', 404020, '2022-05-05'),
(17, 'hhhhhhhhhhhhh', 404016, '2022-05-05'),
(33, 'Ca ne marche tjks pas', 404010, '2022-05-05'),
(47, 'Test diag', 404010, '2022-05-05'),
(52, 'Et maintenant ?????? ------', 404001, '2022-05-05'),
(53, 'huihui', 404014, '2022-05-06'),
(61, 'truc', 404014, '2022-05-06'),
(64, 'gfk', 404009, '2022-05-06'),
(66, 'essai_', 404014, '2022-05-06'),
(67, 'jih', 404012, '2022-05-06');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `IdFacture` int(11) NOT NULL AUTO_INCREMENT,
  `DateFacture` date DEFAULT NULL,
  PRIMARY KEY (`IdFacture`)
) ENGINE=InnoDB AUTO_INCREMENT=20001327 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`IdFacture`, `DateFacture`) VALUES
(20001306, '2000-04-13'),
(20001307, '2021-08-31'),
(20001308, '2019-03-12'),
(20001309, '2019-03-08'),
(20001310, '2019-05-14'),
(20001311, '2019-04-05'),
(20001312, '2021-08-31'),
(20001313, '2021-09-07'),
(20001314, '2021-09-28'),
(20001315, '2000-04-17'),
(20001316, '2007-04-26'),
(20001317, '2007-04-17'),
(20001318, '2021-10-26'),
(20001319, '2021-09-01'),
(20001320, '2021-09-17'),
(20001321, '2021-08-31'),
(20001322, '2000-04-03'),
(20001323, '2007-06-16'),
(20001324, '2018-10-26'),
(20001325, '2013-09-03'),
(20001326, '2004-09-13');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `IdPièce` int(11) NOT NULL AUTO_INCREMENT,
  `NomPiece` varchar(30) DEFAULT NULL,
  `PxPiece` decimal(7,2) DEFAULT NULL,
  `StockPhysiquePiece` int(11) DEFAULT NULL,
  `StockRebusPiece` int(11) DEFAULT NULL,
  `StockSAVPiece` int(11) DEFAULT NULL,
  `QtePièce` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdPièce`)
) ENGINE=InnoDB AUTO_INCREMENT=990135 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`IdPièce`, `NomPiece`, `PxPiece`, `StockPhysiquePiece`, `StockRebusPiece`, `StockSAVPiece`, `QtePièce`) VALUES
(990123, 'Télécommande', '34.20', 2, 1, 2, 0),
(990124, 'Poignée', '12.80', 1, 1, 5, 0),
(990125, 'Batterie', '66.00', 1, 3, 1, 0),
(990126, 'Batterie', '78.00', 0, 0, 0, 0),
(990127, 'Poignée', '9.90', 0, 0, 0, 0),
(990128, 'Télécommande', '22.60', 1, 2, 1, 0),
(990129, 'Télécommande', '28.44', 5, 0, 0, 0),
(990130, 'Télécommande', '45.10', 3, 1, 3, 0),
(990131, 'Vis diam. 6', '0.90', 0, 2, 50, 0),
(990132, 'Ecrou diam. 14', '2.40', 0, 0, 19, 0),
(990133, 'Vitre 40 x 80', '25.60', 0, 0, 0, 0),
(990134, 'Gond ARIEGE', '32.10', 0, 1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `IdService` int(11) NOT NULL AUTO_INCREMENT,
  `LibService` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdService`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`IdService`, `LibService`) VALUES
(1, 'SAV'),
(2, 'HOTLINE'),
(3, 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `IdTechnicien` int(11) NOT NULL AUTO_INCREMENT,
  `NomTechnicien` varchar(30) DEFAULT NULL,
  `PrenomTechnicien` varchar(30) DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `IdService` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTechnicien`),
  KEY `IdService` (`IdService`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`IdTechnicien`, `NomTechnicien`, `PrenomTechnicien`, `Login`, `Password`, `Mail`, `IdService`) VALUES
(1, 'Bonbeur', 'Jean', 'techsav1', 'jesuisletechsav1', 'techsav1@gestionsav.com', 1),
(2, 'Diprochain', 'Alain', 'techsav2', 'jesuisletechsav2', 'techsav2@gestionsav.com', 1),
(3, 'Terieur', 'Alex', 'techsav3', 'jesuisletechsav3', 'techsav3@gestionsav.com', 1),
(10, 'Tounet', 'Patrice', 'techhotline1', 'jesuisletechhotline1', 'techhotline1@gestionsav.com', 2),
(11, 'Zetofrais', 'Mélanie', 'techhotline2', 'jesuisletechhotline2', 'techhotline2@gestionsav.com', 2),
(12, 'Ouche', 'Jack', 'techhotline3', 'jesuisletechhotline3', 'techhotline3@gestionsav.com', 2),
(13, 'Fonfec', 'Sophie', 'techhotline4', 'jesuisletechhotline4', 'techhotline4@gestionsav.com', 2),
(14, 'Ate', 'Tom', 'techhotline5', 'jesuisletechhotline5', 'techhotline5@gestionsav.com', 2),
(15, 'Vigotte', 'Sarah', 'techhotline6', 'jesuisletechhotline6', 'techhotline6@gestionsav.com', 2),
(16, 'Treudelé', 'Willy', 'techhotline7', 'jesuisletechhotline7', 'techhotline7@gestionsav.com', 2),
(17, 'Tran', 'Pauline', 'techhotline8', 'jesuisletechhotline8', 'techhotline8@gestionsav.com', 2),
(18, 'Teaume', 'Emma', 'techhotline9', 'jesuisletechhotline9', 'techhotline9@gestionsav.com', 2),
(19, 'Leblanc', 'Juste', 'techhotline10', 'jesuisletechhotline10', 'techhotline10@gestionsav.com', 2),
(20, 'Coptaire', 'Elie', 'adminsav', 'jesuislechef', 'admin@gestionsav.com', 3),
(21, 'Mauboussin', 'Vanessa', 'va', 'va', 'vanvisse@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ticketsav`
--

DROP TABLE IF EXISTS `ticketsav`;
CREATE TABLE IF NOT EXISTS `ticketsav` (
  `IdTicket` int(11) NOT NULL AUTO_INCREMENT,
  `DateAppelClient` date DEFAULT NULL,
  `DatePEC` date DEFAULT NULL,
  `DateFermTicket` date DEFAULT NULL,
  `Motif` varchar(30) DEFAULT NULL,
  `Observations` varchar(150) DEFAULT NULL,
  `IdTypeDossier` int(11) NOT NULL,
  `IDTypeInter` int(11) NOT NULL,
  `IdCommande` int(11) DEFAULT NULL,
  `IdTechnicien` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTicket`),
  KEY `IdTypeDossier` (`IdTypeDossier`),
  KEY `IDTypeInter` (`IDTypeInter`),
  KEY `IdCommande` (`IdCommande`),
  KEY `IdTechnicien` (`IdTechnicien`)
) ENGINE=InnoDB AUTO_INCREMENT=404024 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticketsav`
--

INSERT INTO `ticketsav` (`IdTicket`, `DateAppelClient`, `DatePEC`, `DateFermTicket`, `Motif`, `Observations`, `IdTypeDossier`, `IDTypeInter`, `IdCommande`, `IdTechnicien`) VALUES
(404001, '2020-09-03', '2020-09-05', '2020-10-15', NULL, NULL, 1, 1, 502116, 1),
(404002, '2020-12-04', '2020-12-10', '2021-01-30', NULL, NULL, 5, 3, 502117, 2),
(404003, '2021-01-05', '2021-01-09', '2021-03-19', NULL, NULL, 5, 3, 502118, 3),
(404004, '2022-04-21', '2022-04-21', '2022-04-21', 'coucou', 'Enfin ca devrait fonctionner', 1, 4, 502119, 3),
(404005, '2022-03-07', '2022-03-27', NULL, NULL, NULL, 2, 4, 502120, 1),
(404006, '2022-02-08', '2022-02-12', NULL, NULL, NULL, 3, 1, 502121, 2),
(404007, '2022-02-08', '2022-02-15', '2022-05-10', 'COUCOU', 'tjdfj', 5, 3, 502122, 1),
(404008, '2022-02-08', '2022-02-22', NULL, 'COUCOU', 'chouette', 5, 3, 502123, 13),
(404009, '2019-09-11', '2019-09-18', '2019-10-08', NULL, NULL, 1, 1, 502124, 10),
(404010, '2019-09-12', '2019-09-14', '2020-03-14', NULL, NULL, 1, 2, 502125, 11),
(404011, '2020-09-13', '2020-09-22', '2020-12-02', NULL, NULL, 2, 3, 502126, 12),
(404012, '2021-11-14', '2021-11-22', '2022-05-26', 'bhj', 'jfnhzquilF', 3, 1, 502127, 13),
(404013, '2020-05-15', '2020-05-23', '2020-07-03', NULL, NULL, 4, 2, 502128, 14),
(404014, '2020-06-16', '2020-06-28', '2020-10-08', 'COUCOU', 'vfdevd', 5, 3, 502129, 15),
(404015, '2017-09-17', '2017-10-03', '2017-11-23', NULL, NULL, 5, 3, 502130, 11),
(404016, '2020-11-18', '2020-11-22', '2021-01-20', '', '', 5, 3, 502131, 12),
(404017, '2022-01-19', '2022-01-27', '2022-04-07', NULL, NULL, 2, 4, 502132, 16),
(404018, '2020-02-20', '2020-03-01', '2020-03-21', NULL, NULL, 3, 1, 502133, 17),
(404019, '2021-07-21', '2021-08-02', NULL, NULL, NULL, 4, 1, 502134, 17),
(404020, '2018-10-22', '2018-10-29', '2018-12-31', NULL, NULL, 5, 3, 502135, 18),
(404021, '2018-10-01', '2018-10-30', '2018-12-20', NULL, NULL, 5, 3, 502135, 19),
(404022, '2022-05-06', NULL, NULL, NULL, NULL, 5, 2, 502125, 11),
(404023, '2022-05-06', NULL, NULL, NULL, NULL, 5, 2, 502125, 11);

-- --------------------------------------------------------

--
-- Structure de la table `typeinter`
--

DROP TABLE IF EXISTS `typeinter`;
CREATE TABLE IF NOT EXISTS `typeinter` (
  `IDTypeInter` int(11) NOT NULL AUTO_INCREMENT,
  `LibTypeInter` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDTypeInter`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeinter`
--

INSERT INTO `typeinter` (`IDTypeInter`, `LibTypeInter`) VALUES
(1, 'Echange'),
(2, 'Annulation'),
(3, 'SAV'),
(4, 'Réexpédition');

-- --------------------------------------------------------

--
-- Structure de la table `type_dossier`
--

DROP TABLE IF EXISTS `type_dossier`;
CREATE TABLE IF NOT EXISTS `type_dossier` (
  `IdTypeDossier` int(11) NOT NULL AUTO_INCREMENT,
  `LibType` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`IdTypeDossier`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_dossier`
--

INSERT INTO `type_dossier` (`IdTypeDossier`, `LibType`) VALUES
(1, 'NPAI'),
(2, 'NP'),
(3, 'EC'),
(4, 'EP'),
(5, 'SAV');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `adresse_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`IdFacture`) REFERENCES `facture` (`IdFacture`);

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD CONSTRAINT `concerne_ibfk_1` FOREIGN KEY (`IdArticle`) REFERENCES `article` (`IdArticle`),
  ADD CONSTRAINT `concerne_ibfk_2` FOREIGN KEY (`IdTicket`) REFERENCES `ticketsav` (`IdTicket`);

--
-- Contraintes pour la table `constituer`
--
ALTER TABLE `constituer`
  ADD CONSTRAINT `constituer_ibfk_1` FOREIGN KEY (`IdArticle`) REFERENCES `article` (`IdArticle`),
  ADD CONSTRAINT `constituer_ibfk_2` FOREIGN KEY (`IdPièce`) REFERENCES `piece` (`IdPièce`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`IdCommande`) REFERENCES `commande` (`IdCommande`),
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`IdArticle`) REFERENCES `article` (`IdArticle`);

--
-- Contraintes pour la table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD CONSTRAINT `diagnostic_ibfk_1` FOREIGN KEY (`IdTicket`) REFERENCES `ticketsav` (`IdTicket`);

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `technicien_ibfk_1` FOREIGN KEY (`IdService`) REFERENCES `service` (`IdService`);

--
-- Contraintes pour la table `ticketsav`
--
ALTER TABLE `ticketsav`
  ADD CONSTRAINT `ticketsav_ibfk_1` FOREIGN KEY (`IdTypeDossier`) REFERENCES `type_dossier` (`IdTypeDossier`),
  ADD CONSTRAINT `ticketsav_ibfk_2` FOREIGN KEY (`IDTypeInter`) REFERENCES `typeinter` (`IDTypeInter`),
  ADD CONSTRAINT `ticketsav_ibfk_3` FOREIGN KEY (`IdCommande`) REFERENCES `commande` (`IdCommande`),
  ADD CONSTRAINT `ticketsav_ibfk_4` FOREIGN KEY (`IdTechnicien`) REFERENCES `technicien` (`IdTechnicien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
