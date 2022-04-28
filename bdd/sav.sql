-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 avr. 2022 à 17:00
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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
CREATE DATABASE IF NOT EXISTS `sav` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sav`;

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
  `IdCLient` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdAdresse`),
  KEY `IdCLient` (`IdCLient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`IdAdresse`, `AdresseClient`, `CPClient`, `VilleClient`, `IdCLient`) VALUES
(1, '2b rue des près', 14270, 'MEZIDON', 1),
(2, '6 rue Emile Lebas', 14800, 'DEAUVILLE', 16),
(3, '5 avenue des champs élysées', 75000, 'PARIS', 17),
(4, '2 rue Yotte', 61240, 'LE MERLERAULT', 19),
(5, '21 rue Thiers', 27300, 'BERNAY', 20),
(6, '130 avenues Pompidou', 33000, 'BORDEAUX', 18),
(7, 'Places des vignes', 27000, 'EVREUX', 14),
(8, 'rue champs haut', 13000, 'MARSEILLES', 15),
(9, '8 avenue de la mer', 14000, 'CAEN', 13),
(10, 'chemin du maré', 49000, 'NICE', 12),
(11, 'rue du saucisson', 62000, 'LIMOGES', 11),
(12, '12 avenue du vigneron', 59000, 'LILLE', 5),
(13, 'allée de la sardine', 80000, 'STRASBOURG', 6),
(14, '15 chemin de la moutarde', 72600, 'DIJON', 7),
(15, 'rue du sans accent', 13000, 'NIMES', 8),
(16, '15 allée de la vague', 69500, 'BIARRITZ', 9),
(17, '56 rue de la glisse', 74000, 'MORZINE', 10),
(18, '33 chemin du repos', 69000, 'PAU', 4),
(19, 'Allée qui pique', 72400, 'LA FLECHE', 3),
(20, 'rue des rillettes', 72000, 'LE MANS', 2);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `IdArticle` int(11) NOT NULL,
  `NomArticle` varchar(30) DEFAULT NULL,
  `StockPhysiqueArticle` int(11) DEFAULT NULL,
  `StockRebusArticle` int(11) DEFAULT NULL,
  `StockSAVArticle` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`IdArticle`, `NomArticle`, `StockPhysiqueArticle`, `StockRebusArticle`, `StockSAVArticle`) VALUES
(1221, 'Porte de garage sectionnelle', 1, 5, 1),
(1230, 'Moteur de portail coulissant', 3, 0, 1),
(1245, 'Moteurs portail double-battant', 23, 0, 1),
(1300, 'Carport Alu EBENE', 23, 0, 0),
(1324, 'Porte entrée', 3, 0, 2),
(1596, 'Pergola FEUILLE', 1, 0, 1),
(1647, 'Volet roulant AIRUS', 1, 0, 1),
(1665, 'Pergola bioclimaque NATURA', 13, 0, 0),
(2377, 'Marquise COQUILLAGE', 23, 0, 1),
(2515, 'Porte de service', 3, 0, 1),
(3104, 'Porte entrée', 3, 0, 2),
(3201, 'Porte de garage sectionnelle', 3, 0, 1),
(3304, 'Porte d\'entrée', 3, 0, 1),
(3687, 'Fenêtre anthracite', 3, 0, 1),
(4623, 'Portillon ARIEGE', 15, 0, 0),
(4634, 'Lot 2 Volets battants LEONUA', 3, 1, 0),
(4690, 'Porte fenêtre', 3, 0, 1),
(4895, 'Portillon anthracite', 3, 0, 1),
(5180, 'Portillon SIRENE', 0, 4, 2),
(5620, 'Fenêtre blanche', 3, 0, 1),
(5623, 'Fenêtre de toit', 6, 0, 1),
(5662, 'Carport bois CEDRE', 3, 2, 1),
(7791, 'Porte de garage GEIO', 3, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdCLient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(30) DEFAULT NULL,
  `PrénomClient` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdCLient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`IdCLient`, `NomClient`, `PrénomClient`) VALUES
(1, 'Dupont', 'Serge'),
(2, 'DaSilva', 'Diego'),
(3, 'Deschamps', 'Didier'),
(4, 'LORIS', 'Hugo'),
(5, 'GIROUD', 'Olivier'),
(6, 'THURAM', 'Lilian'),
(7, 'LEPEN', 'Marine'),
(8, 'ROYAL', 'Ségolène'),
(9, 'BONAPART', 'Napoléon'),
(10, 'MACRON', 'Emmanuel'),
(11, 'PHILIPE', 'Edouard'),
(12, 'VEIL', 'Simone'),
(13, 'VIAN', 'Boris'),
(14, 'CURIE', 'Marie'),
(15, 'BLUM', 'Léon'),
(16, 'DULUXE', 'Valentine'),
(17, 'TELLIER', 'Sylvie'),
(18, 'MENARD', 'Malika'),
(19, 'FABRE', 'Cindy'),
(20, 'PERNAULT', 'Jean-Pierre');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IdCommande` int(11) NOT NULL,
  `DateCommande` date DEFAULT NULL,
  `StatutCommande` varchar(10) DEFAULT NULL,
  `IdCLient` int(11) DEFAULT NULL,
  `IdFacture` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdCommande`),
  UNIQUE KEY `IdFacture` (`IdFacture`),
  KEY `IdCLient` (`IdCLient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`IdCommande`, `DateCommande`, `StatutCommande`, `IdCLient`, `IdFacture`) VALUES
(502116, '2022-04-22', 'Expediee', 1, '20001306'),
(502117, '2021-08-26', 'Expediee', 2, '20001307'),
(502118, '2019-03-02', 'Expediee', 3, '20001308'),
(502119, '2019-03-03', 'Expediee', 4, '20001309'),
(502120, '2019-03-04', 'Expediee', 5, '20001310'),
(502121, '2019-03-05', 'Expediee', 6, '20001311'),
(502122, '2021-08-26', 'Expediee', 7, '20001312'),
(502123, '2021-08-27', 'Expediee', 8, '20001313'),
(502124, '2021-08-28', 'Expediee', 9, '20001314'),
(502125, '2000-03-13', 'Expediee', 10, '20001315'),
(502126, '2007-04-06', 'Expediee', 11, '20001316'),
(502127, '2007-04-07', 'Annulee', 12, '20001317'),
(502128, '2021-08-26', 'En cours', 13, '20001318'),
(502129, '2021-08-26', 'En cours', 14, '20001319'),
(502130, '2021-08-27', 'En cours', 15, '20001320'),
(502131, '2021-08-28', 'Expediee', 16, '20001321'),
(502132, '2000-03-13', 'Expediee', 17, '20001322'),
(502133, '2007-04-06', 'Expediee', 18, '20001323'),
(502134, '2018-08-26', 'Expediee', 19, '20001324'),
(502135, '2013-08-27', 'Expediee', 20, '20001325'),
(502136, '2004-08-28', 'Expediee', 12, '20001326');

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
  `Idpiece` int(11) NOT NULL,
  PRIMARY KEY (`IdArticle`,`Idpiece`),
  KEY `Idpiece` (`Idpiece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `constituer`
--

INSERT INTO `constituer` (`IdArticle`, `Idpiece`) VALUES
(20001307, 990123),
(20001308, 990124),
(20001309, 990125),
(20001320, 990126),
(20001321, 990127),
(20001322, 990128),
(20001323, 990129),
(20001315, 990130),
(20001325, 990131),
(20001326, 990132),
(20001306, 990133),
(20001310, 990134);

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

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `IdFacture` varchar(20) NOT NULL,
  `DateFacture` date DEFAULT NULL,
  PRIMARY KEY (`IdFacture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`IdFacture`, `DateFacture`) VALUES
('20001306', '2000-04-13'),
('20001307', '2021-08-31'),
('20001308', '2019-03-12'),
('20001309', '2019-03-08'),
('20001310', '2019-05-14'),
('20001311', '2019-04-05'),
('20001312', '2021-08-31'),
('20001313', '2021-09-07'),
('20001314', '2021-09-28'),
('20001315', '2000-04-17'),
('20001316', '2007-04-26'),
('20001317', '2007-04-17'),
('20001318', '2021-10-26'),
('20001319', '2021-09-01'),
('20001320', '2021-09-17'),
('20001321', '2021-08-31'),
('20001322', '2000-04-03'),
('20001323', '2007-06-16'),
('20001324', '2018-10-26'),
('20001325', '2013-09-03'),
('20001326', '2004-09-13');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `Idpiece` int(11) NOT NULL,
  `NomPiece` varchar(30) DEFAULT NULL,
  `PxPiece` decimal(7,2) DEFAULT NULL,
  `StockPhysiquePiece` int(11) DEFAULT NULL,
  `StockRebusPiece` int(11) DEFAULT NULL,
  `StockSAVPiece` int(11) DEFAULT NULL,
  `QteCommpiece` int(11) DEFAULT NULL,
  `QteExpPiece` int(11) DEFAULT NULL,
  PRIMARY KEY (`Idpiece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`Idpiece`, `NomPiece`, `PxPiece`, `StockPhysiquePiece`, `StockRebusPiece`, `StockSAVPiece`, `QteCommpiece`, `QteExpPiece`) VALUES
(990123, 'Télécommande', '34.20', 2, 1, 2, 0, 0),
(990124, 'Poignée', '12.80', 1, 1, 5, 0, 0),
(990125, 'Batterie', '66.00', 1, 3, 1, 0, 0),
(990126, 'Batterie', '78.00', 0, 0, 0, 0, 0),
(990127, 'Poignée', '9.90', 0, 0, 0, 0, 0),
(990128, 'Télécommande', '22.60', 1, 2, 1, 0, 0),
(990129, 'Télécommande', '28.44', 5, 0, 0, 0, 0),
(990130, 'Télécommande', '45.10', 3, 1, 3, 0, 0),
(990131, 'Vis diam. 6', '0.90', 0, 2, 50, 0, 0),
(990132, 'Ecrou diam. 14', '2.40', 0, 0, 19, 0, 0),
(990133, 'Vitre 40 x 80', '25.60', 0, 0, 0, 0, 0),
(990134, 'Gond ARIEGE', '32.10', 0, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `IdService` int(11) NOT NULL,
  `LibService` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdService`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`IdService`, `LibService`) VALUES
(10, 'Compta'),
(11, 'Hotline'),
(12, 'SAV'),
(13, 'Logistique');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `IdTechnicien` int(11) NOT NULL,
  `NomTechnicien` varchar(30) DEFAULT NULL,
  `PrenomTechnicien` varchar(30) DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `IdService` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTechnicien`),
  KEY `IdService` (`IdService`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`IdTechnicien`, `NomTechnicien`, `PrenomTechnicien`, `Login`, `Password`, `Mail`, `IdService`) VALUES
(100, 'RAFISTOL', 'Louis', 'lrafistol100', 'Lrafistol@100', 'lrafistol@sav-mman.com', 12),
(102, 'LABRICOLE', 'Bob', 'blabricole102', 'Labricole@102', 'blabricole@sav-mman.com', 12),
(107, 'REPARTOU', 'Louisa', 'lrepartou107', 'Lrepartou@107', 'lrepartou@sav-mman.com', 12),
(113, 'ALLO', 'Pablo', 'pallo113', 'Allo@113', 'pallo@hotline-mman.com', 11),
(115, 'JEKOUT', 'Marie', 'mjekout115', 'Mjekout@115', 'mjekout@hotline-mman.com', 11),
(121, 'BLABLA', 'Carine', 'cblabla121', 'Cblabla@121', 'cblabla@hotline-mman.com', 11),
(122, 'MATIN', 'Martin', 'mmatin122', 'Matin@122', 'mmatin@hotline-mman.com', 11);

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
  `IdType` int(11) NOT NULL,
  `IDTypeInter` int(11) NOT NULL,
  `IdCommande` int(11) DEFAULT NULL,
  `IdTechnicien` int(11) DEFAULT NULL,
  `IdTechnicien_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTicket`),
  KEY `IdType` (`IdType`),
  KEY `IDTypeInter` (`IDTypeInter`),
  KEY `IdCommande` (`IdCommande`),
  KEY `IdTechnicien` (`IdTechnicien`),
  KEY `IdTechnicien_1` (`IdTechnicien_1`)
) ENGINE=InnoDB AUTO_INCREMENT=404022 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticketsav`
--

INSERT INTO `ticketsav` (`IdTicket`, `DateAppelClient`, `DatePEC`, `DateFermTicket`, `IdType`, `IDTypeInter`, `IdCommande`, `IdTechnicien`, `IdTechnicien_1`) VALUES
(404001, '2020-09-03', '2020-09-05', '2020-10-15', 1, 0, 502116, 100, 102),
(404002, '2020-12-04', '2020-12-10', '2021-01-30', 5, 3, 502117, 102, 107),
(404003, '2021-01-05', '2021-01-09', '2021-03-19', 5, 3, 502118, 107, 100),
(404004, '2021-09-06', '2021-09-16', NULL, 1, 0, 502119, 113, 102),
(404005, '2022-03-07', '2022-03-27', NULL, 2, 0, 502120, 100, 107),
(404006, '2022-02-08', '2022-02-12', NULL, 3, 1, 502121, 102, 102),
(404007, '2022-02-08', '2022-02-15', NULL, 5, 3, 502122, 107, 102),
(404008, '2022-02-08', '2022-02-22', NULL, 5, 3, 502123, 113, 107),
(404009, '2019-09-11', '2019-09-18', '2019-10-08', 1, 0, 502124, 115, 100),
(404010, '2019-09-12', '2019-09-14', '2020-03-14', 1, 0, 502125, 100, 102),
(404011, '2020-09-13', '2020-09-22', '2020-12-02', 2, 0, 502126, 102, 107),
(404012, '2021-11-14', '2021-11-22', NULL, 3, 1, 502127, 107, 100),
(404013, '2020-05-15', '2020-05-23', '2020-07-03', 4, 2, 502128, 113, 113),
(404014, '2020-06-16', '2020-06-28', '2020-10-08', 5, 3, 502129, 115, 102),
(404015, '2017-09-17', '2017-10-03', '2017-11-23', 5, 3, 502130, 121, 102),
(404016, '2020-11-18', '2020-11-22', '2021-01-20', 5, 3, 502131, 122, 107),
(404017, '2022-01-19', '2022-01-27', '2022-04-07', 2, 0, 502132, 100, 100),
(404018, '2020-02-20', '2020-03-01', '2020-03-21', 3, 1, 502133, 102, 102),
(404019, '2021-07-21', '2021-08-02', NULL, 4, 1, 502134, 107, 107),
(404020, '2018-10-22', '2018-10-29', '2018-12-31', 5, 3, 502135, 113, 115),
(404021, '2018-10-01', '2018-10-30', '2018-12-20', 5, 3, 502135, 115, 100);

-- --------------------------------------------------------

--
-- Structure de la table `typeinter`
--

DROP TABLE IF EXISTS `typeinter`;
CREATE TABLE IF NOT EXISTS `typeinter` (
  `IDTypeInter` int(11) NOT NULL,
  `LibTypeInter` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDTypeInter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeinter`
--

INSERT INTO `typeinter` (`IDTypeInter`, `LibTypeInter`) VALUES
(0, 'Réexpédition'),
(1, 'Echange'),
(2, 'Annulation'),
(3, 'SAV');

-- --------------------------------------------------------

--
-- Structure de la table `type_dossier`
--

DROP TABLE IF EXISTS `type_dossier`;
CREATE TABLE IF NOT EXISTS `type_dossier` (
  `IdType` int(11) NOT NULL,
  `LibType` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`IdType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_dossier`
--

INSERT INTO `type_dossier` (`IdType`, `LibType`) VALUES
(1, 'NPAI'),
(2, 'NP'),
(3, 'EC'),
(4, 'EP'),
(5, 'SAV');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
