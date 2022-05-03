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
            $resultat = $connexion->query("SELECT * FROM `article` WHERE IdArticle LIKE '$numArt'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
        
    }