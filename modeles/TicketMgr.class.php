<?php 


    class TicketMgr {


        /**
         * Retourne la liste des tickets en cours 
         * @param string $typageRet // Typage du retour
         * @return array $tabTicket
         */
        public static function getListeTickets(string $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT idTicket, c.NomClient, c.PrénomClient, k.IdCommande, LibType 
            FROM ticketsav t
            JOIN commande k ON k.IdCommande = t.IdCommande
            JOIN client c ON c.IdCLient = k.IdCLient
            JOIN type_dossier td ON td.IdTypeDossier = t.IdTypeDossier
            WHERE DateFermTicket is NULL";
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

        /**
         * Retourne toutes les infos du ticket par son ID 
         * @param int $idTicket
         * @param string $typageRet // Typage du retour
         * @return array $tabTicket
         */
        public static function getInfosTicket(int $idTicket, string $typageRet = PDO::FETCH_CLASS ){
             // Préparation de la requête SQL
             $sql="SELECT t.IdTicket, DateAppelClient, DatePEC, DateFermTicket, Motif, Observations, t.IdCommande, DateCommande, StatutCommande, d.LibDiagnostic, IdDiag, DateDiag, LibTypeInter,LibType FROM ticketsav t
             JOIN commande cd on t.IdCommande = cd.IdCommande
             JOIN type_dossier td on td.IdTypeDossier = t.IdTypeDossier             
             JOIN typeinter ti on ti.IDTypeInter = t.IDTypeInter
             LEFT JOIN diagnostic d on d.IdTicket = t.IdTicket
             WHERE t.IdTicket = $idTicket";
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

         /**
         * Retourne les tickets à partir d'une recherche qui parcourt les nom, prenom, n° commande, n°ticket  
         * @param string $recherche
         * @param string $typageRet // Typage du retour
         * @return array $tabTicket
         */
        public static function getTicketbyMot(string $recherche, int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT `IdTicket`, cl.NomClient, cl.PrénomClient, cd.IdCommande, LibTypeInter
            FROM `ticketsav` t
            JOIN commande cd on cd.IdCommande = t.IdCommande
            JOIN client cl on cl.IdClient = cd.IdClient
            JOIN typeinter ti on ti.IDTypeInter = t.IDTypeInter
            WHERE cl.NomClient LIKE concat('%','$recherche','%') || cl.PrénomClient LIKE concat('%','$recherche','%') || t.IdCommande LIKE concat('%','$recherche','%')|| IdTicket LIKE concat('%','$recherche','%')";
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

       /**
         * Retourne l'historique des diagnostiques d'un Ticket  
         * @param int $idTicket
         * @return array $list
         */

        public static function getListDiagnostic(int $idTicket) {
        // Préparation de la requête SQL
        $sql="SELECT `LibDiagnostic`,`DateDiag` FROM `diagnostic` WHERE `IdTicket`= $idTicket";
        // Connexion
        $connexion = DbSav::getConnexion()->query($sql);
        $list = $connexion->fetchALL(PDO::FETCH_CLASS);
    
        // Fermer le curseur
        $connexion->closeCursor();
        // Deconnecte du serveur
        DbSav::disconnect();

        // Retourne le tableau
        return $list;

        }

        /**
        * Ajoute un diagnostique à un Ticket  
        * @param string $libelleDiag
        * @param int $idTicket
        * @param string $date
        * @return void
        */

       public static function createDiagnostic(string $libelleDiag, int $idTicket, string $date = null) {
        // Préparation de la requête SQL
        $sql="INSERT INTO diagnostic(LibDiagnostic, IdTicket, DateDiag) VALUES ('$libelleDiag',$idTicket,now())";
        // Connexion
        $connexion = DbSav::getConnexion()->query($sql);

        }

        /**
        * Met à jour les infos d'un Ticket  
        * @param string $libelleDiag
        * @param int $idTicket
        * @param string $dateCrea
        * @param int $numCmd
        * @param string $statCmd
        * @param string $datePEC
        * @param string $motif
        * @param string $obs
        * @return void
        */
        public static function updateInfosTicket(int $idTicket, string $dateCrea, int $numCmd, string $statCmd, string $datePEC, string $motif, string $obs){
            $sql="UPDATE `ticketsav` SET `DateAppelClient`='$dateCrea',`DatePEC`='$datePEC',`Motif`='$motif',`Observations`='$obs',`IdCommande`='$numCmd' WHERE `IdTicket`=$idTicket";
            // Connexion
            $connexion = DbSav::getConnexion()->query($sql);

        }

/**
       * Il obtient le type de dossier de la base de données.
       */
      public static function getTypeDossier() {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT * FROM typeinter");
        $tab = $resultat->fetchAll();
        return $tab;
   }

 /**
  * Il récupère les données de la base de données et les renvoie sous forme de tableau.
  */
   public static function getMotif() {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("SELECT * FROM type_dossier");
        $tab = $resultat->fetchAll();
        return $tab;
   }

  /**
   * Il crée un ticket dans la base de données.
   * 
   * @param IdTypeDossier 
   * @param IdTypeInter 
   * @param IdCommande Le numéro de commande
   * @param idTechnicien l'identifiant du technicien qui est connecté
   * @param date la date de l'appel
   * 
   * @return Le résultat de la requête.
   */
   public static function creaTicket($IdTypeDossier, $IdTypeInter, $IdCommande, $idTechnicien, $date=null) {
        $connexion = DbSav::getConnexion();
        $resultat = $connexion->query("INSERT INTO `ticketsav`(`IdTypeDossier`, `IDTypeInter`, 
                                                    `IdCommande`, `IdTechnicien`,`DateAppelClient`) 
                                                    VALUES ($IdTypeDossier,$IdTypeInter,$IdCommande,$idTechnicien,now())");
        $resultat->execute(); 
        return $resultat;
   }
    }

?>