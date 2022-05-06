<?php
    require_once("classes/Client.class.php");
    require_once("modeles/DbSav.class.php");

class ClientMgr{
    public static function getInfoClient($id) {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, COUNT(commande.IdCommande), adresse.AdresseClient, adresse.VilleClient, adresse.CPClient
        FROM `client` 
        LEFT JOIN commande ON client.IdClient = commande.IdClient
        JOIN adresse ON client.IdClient = adresse.IdClient 
        WHERE client.IdClient = '$id'");
        $tab = $resultat->fetchAll();
        return $tab;
    }

    public static function getInfoClientByArt($idcmd,int $typageRet = PDO::FETCH_CLASS ){
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, commande.IdCommande, adresse.AdresseClient, adresse.VilleClient, adresse.CPClient
        FROM client 
        JOIN commande ON client.IdClient = commande.IdClient
        JOIN adresse ON client.IdClient = adresse.IdClient 
        WHERE commande.IdCommande = '$idcmd'");
     
        $tab = $resultat->fetch($typageRet);

        // Deconnecte du serveur
        DbSav::disconnect();

        // Retourne le tableau
        return $tab;
        }

    public static function getInfoClientByArticle($idcmd){
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, commande.IdCommande, adresse.AdresseClient, adresse.VilleClient, adresse.CPClient
        FROM `client` 
        JOIN commande ON client.IdClient = commande.IdClient
        JOIN adresse ON client.IdClient = adresse.IdClient 
        WHERE commande.IdCommande = '$idcmd'");
        $tab = $resultat->fetchAll();
        return $tab;
    }

    public static function getCommandeClient($id) {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, commande.IdCommande, commande.DateCommande, commande.StatutCommande, 
                                                commande.IdFacture FROM `client` JOIN commande ON commande.IdClient = client.IdClient WHERE client.IdClient LIKE'$id'");
        $tab = $resultat->fetchAll();
        return $tab;
    }
    
}