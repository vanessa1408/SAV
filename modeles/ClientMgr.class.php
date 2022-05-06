<?php
    require_once("classes/Client.class.php");
    require_once("modeles/DbSav.class.php");

class ClientMgr{
   /**
    * Il renvoie un tableau des informations du client (nom, prénom, nombre de commandes, adresse,
    * ville, code postal) de la base de données
    * 
    * @param id l'identifiant du client
    * 
    * @return Un tableau des informations du client.
    */
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

    /**
     * Il retourne les informations du client par article.
     * 
     * @param idcmd l'identifiant de la commande
     * @param int typageRet 
     */
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

    /**
     * Il renvoie un tableau des informations du client (nom, adresse, etc.) en fonction de
     * l'identifiant de la commande
     * 
     * @param idcmd l'identifiant de la commande
     * 
     * @return un tableau des informations du client.
     */
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

 /**
  * Il renvoie un tableau de tableaux, chacun contenant les données d'une seule ligne du jeu de
  * résultats.
  * 
  * @param id l'identifiant du client
  */
    public static function getCommandeClient($id) {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, commande.IdCommande, commande.DateCommande, commande.StatutCommande, 
                                                commande.IdFacture FROM `client` JOIN commande ON commande.IdClient = client.IdClient WHERE client.IdClient LIKE'$id'");
        $tab = $resultat->fetchAll();
        return $tab;
    }
    
}