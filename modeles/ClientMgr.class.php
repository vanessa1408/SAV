<?php
    require_once("classes/Client.class.php");
    require_once("modeles/DbSav.class.php");

class ClientMgr{
    public static function getInfoClient($id) {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT client.IdClient, client.NomClient, client.PrénomClient, commande.IdCommande, adresse.AdresseClient, adresse.VilleClient, adresse.CPClient
        FROM `client` 
        JOIN commande ON client.IdClient = commande.IdClient
        JOIN adresse ON client.IdClient = adresse.IdClient 
        WHERE client.IdClient = '$id'");
        $tab = $resultat->fetchAll();
        return $tab;
    }
}