<?php
    require('classes/Client.class.php');
    

    class Recherche_Dossier{

       /**
        * Il renvoie une liste de clients dont le nom contient la chaîne 
        * 
        * @param nom le nom du client
        */
        public static function getListClients ($nom)
        {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT * FROM client WHERE NomClient LIKE CONCAT('%','$nom','%')");
            $tab = $resultat->fetchAll();
            return $tab;   
        }

        /**
         * Il renvoie le résultat d'une requête qui sélectionne les IdCommande, DateCommande,
         * StatutCommande, commande.IdClient, IdFacture, client.NomClient, client.PrénomClient dans les
         * tables commande et client où IdCommande est le paramètre 
         * 
         * @param numCMD Le numéro de la commande
         * 
         * @return le résultat de la requête.
         */
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

        /**
         * Il obtient le numéro d'article de la base de données et le renvoie sous forme de tableau
         * 
         * @param numArt Le numéro d'article
         * 
         * @return le résultat de la requête.
         */
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
        
        /**
         * Il renvoie un tableau de toutes les adresses d'un client, étant donné le code postal du
         * client
         * 
         * @param CodePostal Le code postal de l'adresse
         * 
         * @return le résultat de la requête.
         */
        public static function getCodepostal ($CodePostal)
        {
            $connexion = DbSav::getconnexion();
            $resultat = $connexion->query("SELECT adresse.IdAdresse, adresse.AdresseClient, Adresse.CPClient, Adresse.VilleClient, adresse.IdClient, client.NomClient, client.PrénomClient 
                                            FROM `adresse` JOIN client ON adresse.IdClient = client.IdClient WHERE CPClient LIKE '$CodePostal'");
            $tab = $resultat->fetchAll();
            return $tab;
        }
    }