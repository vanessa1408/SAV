<?php 


    class TicketMgr {

        public static function getListeTickets(int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT idTicket, c.NomClient, c.PrénomClient, k.IdCommande, LibType 
            FROM ticketsav t
            JOIN commande k ON k.IdCommande = t.IdCommande
            JOIN client c ON c.IdCLient = k.IdCLient
            JOIN type_dossier td ON td.IdType = t.IdType";
            // Connexion
            $listTickets = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
                include ("classes/Ticket.class.php");
                $listTickets->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "ticketsav",
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','IdType','IDTypeInter','IdCommande','IdTechnicien'));
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
    }

?>