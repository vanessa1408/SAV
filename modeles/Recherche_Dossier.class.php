<?php
    require('classes/Client.class.php');
    

    class Recherche_Dossier{

        public static function getListClients ($nom)
        {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT * FROM client WHERE NomClient LIKE CONCAT('%','$nom','%')");
            $tab = $resultat->fetchAll();
            return $tab;   
        }

        public static function getNumCmd ($numCMD)
        {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT IdCommande, DateCommande, StatutCommande, commande.IdClient, IdFacture, client.NomClient, client.PrénomClient 
            FROM `commande`
            JOIN client ON commande.IdClient = client.IdClient
            WHERE IdCommande
            LIKE '$numCMD'");
            $tab = $resultat->fetchAll();
            return $tab;
        }

        public static function getArticle ($numArt)
        {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT commande.IdCommande, commande.DateCommande, commande.StatutCommande, commande.IdClient, commande.IdFacture, 
                                                article.IdArticle, article.NomArticle, article.StockPhysiqueArticle, article.StockRebusArticle, article.StockSAVArticle, 
                                                contenir.Garantie, contenir.QteCOmART, contenir.QteExpArt, client.NomClient, client.PrénomClient 
                                                FROM commande 
                                                JOIN contenir ON contenir.IdCommande = commande.IdCommande 
                                                JOIN article ON contenir.IdArticle = article.IdArticle 
                                                JOIN client ON commande.IdClient = client.IdClient 
                                                WHERE article.IdArticle 
                                                LIKE '$numArt'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
        
        public static function getCodepostal ($codePostal)
        {
            $connexion = DbSav::getconnexion();
            $resultat = $connexion->query("SELECT adresse.IdAdresse, adresse.AdresseClient, Adresse.CPClient, Adresse.VilleClient, adresse.IdClient, client.NomClient, client.PrénomClient 
                                            FROM `adresse` JOIN client ON adresse.IdClient = client.IdClient WHERE CPClient LIKE '$codePostal'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
    }