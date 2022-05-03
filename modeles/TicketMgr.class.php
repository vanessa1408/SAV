<?php 


    class TicketMgr {

        public static function getListeTickets(int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT idTicket, c.NomClient, c.PrénomClient, k.IdCommande, LibType 
            FROM ticketsav t
            JOIN commande k ON k.IdCommande = t.IdCommande
            JOIN client c ON c.IdCLient = k.IdCLient
            JOIN type_dossier td ON td.IdTypeDossier = t.IdTypeDossier";
            // Connexion
            $listTickets = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
                include ("classes/Ticket.class.php");
                $listTickets->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "ticketsav",
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','	IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
                $tabTicket = $listTickets->fetchAll();
    
            } else {
                $tabTicket = $listTickets->fetchAll($typageRet);
            }
           
            // Fermer le curseur
            $listTickets->closeCursor();
            // Deconnecte du serveur
            DbSav::disconnect();
    
            // Retourne le tableau
            return $tabTicket;
        }

        public static function getInfosTicket(int $idTicket, int $typageRet = PDO::FETCH_CLASS ){
             // Préparation de la requête SQL
             $sql="SELECT idTicket, DateAppelClient, DatePEC, DateFermTicket, Motif, Observations, t.IdCommande, DateCommande, StatutCommande, d.LibDiagnostic, DateDiag, LibTypeInter,LibType FROM ticketsav t
             JOIN commande cd on t.IdCommande = cd.IdCommande
             JOIN type_dossier td on td.IdTypeDossier = t.IdTypeDossier             
             JOIN typeinter ti on ti.IDTypeInter = t.IDTypeInter
             LEFT JOIN diagnostic d on d.IdDiag = t.IdDiag
             WHERE IdTicket = $idTicket";
             // Connexion
             $connect = DbSav::getConnexion()->query($sql);
             if($typageRet===PDO::FETCH_CLASS){
                include ("classes/Ticket.class.php");
                $connect->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "ticketsav",
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','	IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
                $tabTicket = $connect->fetchAll();
    
            } else {
                $tabTicket = $connect->fetch($typageRet);
            }
            // Fermer le curseur
            $connect->closeCursor();
            // Deconnecte du serveur
            DbSav::disconnect();

            // Retourne le tableau
            return $tabTicket;
        }
    }

?>