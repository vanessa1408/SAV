<?php 

    require_once("classes/TicketMgrException.class.php");
    require_once("classes/DbSav.class.php");
    class TicketMgr {



        public static function getListeTickets(int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT * FROM ticketsav";
            // Connexion
            $listTickets = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
                include ("classes/Ticket.class.php");
                $listTickets->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "ticketsav",
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','IdType','IDTypeInter','IdCommande','IdTechnicien','IdTechnicien_1'));
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