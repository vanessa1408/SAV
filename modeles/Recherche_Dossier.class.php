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
            $resultat = $connexion->query("SELECT * FROM `article` JOIN contenir ON contenir.IdArticle = article.IdArticle WHERE article.IdArticle LIKE '$numArt'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
        
        public static function getCodepostal ($CodePostal)
        {
            $connexion = DbSav::getconnexion();
            $resultat = $connexion->query("SELECT adresse.IdAdresse, adresse.AdresseClient, Adresse.CPClient, Adresse.VilleClient, adresse.IdClient, client.NomClient, client.PrénomClient 
                                            FROM `adresse` JOIN client ON adresse.IdClient = client.IdClient WHERE CPClient LIKE '$CodePostal'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
    }