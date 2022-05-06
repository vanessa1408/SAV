<?php
    require_once("classes/Commande.class.php");
    require_once("modeles/DbSav.class.php");

    
class DetailsCommandeMgr {
    public static function getInfoCommande($Idcmd){
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT commande.IdCommande, commande.DateCommande, commande.StatutCommande, commande.IdClient, commande.IdFacture,
                                        contenir.IdArticle, contenir.Garantie, contenir.QteCOmART, contenir.QteExpArt,
                                        article.NomArticle, facture.DateFacture, client.NomClient, client.PrénomClient, 
                                        adresse.IdAdresse, adresse.AdresseClient, adresse.CPClient, adresse.VilleClient, 
                                        ticketsav.IdTicket, ticketsav.DateAppelClient, ticketsav.DatePEC, ticketsav.DateFermTicket, ticketsav.Motif,
                                        ticketsav.Observations, ticketsav.IdTypeDossier, ticketsav.IDTypeInter, ticketsav.IdTechnicien,
                                        diagnostic.LibDiagnostic, diagnostic.DateDiag, type_dossier.LibType, technicien.NomTechnicien, technicien.PrenomTechnicien
                                        FROM `commande` 
                                        LEFT JOIN contenir ON contenir.IdCommande = commande.IdCommande
                                        LEFT JOIN article ON article.IdArticle = contenir.IdArticle
                                        LEFT JOIN facture ON facture.IdFacture = commande.IdFacture
                                        LEFT JOIN client ON client.IdClient = commande.IdClient
                                        LEFT JOIN adresse ON adresse.IdClient = commande.IdClient
                                        LEFT JOIN ticketsav ON ticketsav.IdCommande = commande.IdCommande
                                        LEFT JOIN diagnostic ON diagnostic.IdTicket = ticketsav.IdTicket
                                        LEFT JOIN type_dossier ON type_dossier.IdTypeDossier = ticketsav.IdTypeDossier
                                        LEFT JOIN technicien ON technicien.IdTechnicien = ticketsav.IdTechnicien
                                        WHERE commande.IdCommande = '$Idcmd'");

        $tab = $resultat->fetchAll();
        return $tab;
    }
    public static function getAllArticle($Idcmd){
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT contenir.IdArticle, article.NomArticle FROM `contenir` JOIN article ON article.IdArticle = contenir.IdArticle WHERE contenir.IdCommande = '$Idcmd'");
        $tab = $resultat->fetchAll();
        return $tab;
    }

}



?>