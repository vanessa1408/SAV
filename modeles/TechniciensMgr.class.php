<?php
    require_once("classes/Technicien.class.php");
    require_once("modeles/TechniciensMgrException.class.php");
    require_once("modeles/DbSav.class.php");

    class TechniciensMgr {
        public static function getInfoTechByNom($nomTechnicien){
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT NomTechnicien, PrenomTechnicien, Mail
            FROM `technicien`
            WHERE NomTechnicien LIKE ");
        }
    
     public static function getTech(){
         //$saisieRechTech = $_POST['saisieRechTech'];
         $sql="SELECT IdTechnicien, PrenomTechnicien, NomTechnicien, Mail FROM `technicien`"; 
         
         $rechTechnicien = DbSav::getConnexion()->query($sql);
         $resultRechTechnicien = $rechTechnicien->fetch();

         DbSav::disconnect();

         return $resultRechTechnicien;
     }

     public static function createTech(){
        $creaNomTech = $_POST['creaNomTech'];
        $creaPrenomTech = $_POST['creaPrenomTech'];
        $creaMailTech = $_POST['creaMailTech'];
        $creaLogTech = $_POST['creaLogTech'];
        $creaPwdTech = $_POST['creaPwdTech'];
        $creaServTech = $_POST['idservice'];

         //Préparation requête SQL création technicien
         $sql="INSERT INTO technicien (NomTechnicien, PrenomTechnicien, Login, Password, Mail, IdService)
                 VALUES ('$creaNomTech', '$creaPrenomTech', '$creaLogTech', '$creaPwdTech', '$creaMailTech', '$creaServTech')";
        //Préparation requête SQL controle avant création technicien
        $sqlCtrl="SELECT COUNT(*) FROM technicien WHERE '$creaMailTech' LIKE Mail OR '$creaLogTech' LIKE Login
        OR '$creaPwdTech' = Password";
        //Controle pour éviter les doublons des champs Mail, Login et Password
        $ctrlcreaNewTech = DbSav::getConnexion()->query($sqlCtrl);
        $resCtrl = $ctrlcreaNewTech->fetch();
        if ($resCtrl[0] != 0){ //Présence de doublons dans les champs Mail, Login ou Password
            $action='ErrCreaTech';
            header('location:index.php?action=creaTech');
            $action='ErrCreaTech';
        } else { //Aucun doublon ==> Création du nouveau technicien
            $creaNewTech = DbSav::getConnexion()->query($sql);
            header('location:index.php?action=creaTechMAJ');
            $action = 'creaTechMAJ';
        }
        DbSav::disconnect();

            return $action;
    }
/**
 * Fonction qui a pour but de supprimer un technicien dans la table 'technicien'
 *Le choix de la requête à envoyer dépend du nombre de tickets auxquels le technicien
 * devant être supprimé est attribué. 
 *
 * @return void
 */
    public static function suppTech(){
        $idTechSupp = $_POST['idTechSupp'];
        //Préparation des requêtes
        //sql1 = Supprime le technicien si aucun ticket n'est attribué à ce technicien
        //sql2 = Désactive les droits de connexion si au moins 1 ticket est attribué à ce technicien
        $sql1="DELETE FROM technicien WHERE technicien.IdTechnicien = '$idTechSupp'";
        $sql2="UPDATE technicien
                SET Mail = '',
                    Login = '',
                    Password = '',
                    IdService = NULL
                WHERE '$idTechSupp' = idTechnicien";
        //Requête pour récupérer le nombre de tickets attribués à un technicien
        $sqlCtrlTicketTech = "SELECT COUNT(*) FROM ticketsav
                            WHERE IdTechnicien = '$idTechSupp'";
        //Contrôle du nombre de tickets attribués au technicien
        $ctrlNbTickets = DbSav::getConnexion()->query($sqlCtrlTicketTech);
        $resCtrlNbTickets = $ctrlNbTickets->fetch();
        if ( $resCtrlNbTickets[0] == 0){
            $supp1Tech = DbSav::getConnexion()->query($sql1);
            $action = "suppTechMAJ1";
        } else {
            $supp2Tech = DbSav::getConnexion()->query($sql2);
            $action = "suppTechMAJ2";
        }
        DbSav::disconnect();

        return $action;
    }

     /**************************************** */
       /**
        * Elle renvoie un tableau d'objets de la classe Technicien.
        * 
        * @param int choix PDO::FETCH_ASSOC (par défaut) ou PDO::FETCH_CLASS
        * 
        * @return Un tableau d'objets.
        */
        public static function getListTechniciens(int $choix = PDO::FETCH_ASSOC) {

            //prépare la requête SQL
            $sql = "SELECT IdTechnicien, NomTechnicien, PrenomTechnicien, Mail FROM technicien";

            //Executer la requête à partir de la connexion
            $resultset = DbSav::getConnexion()->query($sql);

            //Mettre les résultats dans un tableau
            if ($choix === PDO::FETCH_CLASS) {
                require_once("classes/Technicien.class.php");
                $resultset->setFetchMode(
                                PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE|PDO::FETCH_ASSOC,
                                "technicien",
                                array('IdTechnicien', 'NomTechnicien', 'PrenomTechnicien', 'Mail'));
                $records = $resultset->fetchAll();
            } else {
                $records = $resultset->fetchAll($choix);
            }

            //Fermer le curseur / resultset
            $resultset->closeCursor();
            //Détruire la connexion
            DbSav::disconnect();

            //Retourner le tableau
            return $records;
        }


        /**
         * Je veux obtenir les données de la base de données et les mettre dans un objet
         * 
         * @param int IdTechnicien L'ID du technicien que vous souhaitez obtenir.
         * @param int choix PDO::FETCH_ASSOC
         * 
         * @return un enregistrement.
         */
        public static function getTechnicienById(
                                                int $idTechnicien,
                                                int $choix = PDO::FETCH_ASSOC) {
        //préparer la requête SQL
        $sql = "SELECT IdTechnicien, NomTechnicien, PrenomTechnicien, Mail WHERE IdTechnicien = ?";

        //Préparer le Resultset (PDOstatement) à partir de la connexion
        $resultset = ConnectGestionSav::getConnexion()->prepare($sql);

        //Executer le resultset
        $resultset->execute(array($idTechnicien));

        //Récupère le seul enregistrement possible
        if ($choix === PDO::FETCH_CLASS) {
            require_once("metier/Technicien.class.php");
            $resultset->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "Technicien",
                    array('IdTechnicien', 'NomTechnicien','PrenomTechnicien', 'Mail'));
            $record = $resultset->fetch();
        } else {
            $record = $resultset->fetch($choix);
        }

        //Fermer le resultset
        $resultset->closeCursor();
        //Détruire la connexion
        DbSav::disconnect();

        if ($record == false) throw new TechniciensMgrException("ID Technicien inconnu");

        return $record;
        }
        
        /**
         * J'essaie d'obtenir les données de la base de données et de les afficher dans un tableau.
         * 
         * @param string NomTechnicien Le nom du technicien
         * @param int choix PDO::FETCH_ASSOC (par défaut)
         * 
         * @return Un tableau de tableaux associatifs.
         */
        public static function getTechnicienByName(string $nomTechnicien,
                                                    int $choix = PDO::FETCH_ASSOC) {
            //préparer la requête SQL
            $sql = "SELECT IdTechnicien, NomTechnicien, PrenomTechnicien, Mail WHERE LOWER(NomTechnicien) LIKE LOWER(:NomTechnicien)";

            //Préparer le Resultset (PDOstatement) à partir de la connexion
            $resultset = DbSav::getConnexion()->prepare($sql);

            //Executer le Resultset
            $resultset->execute(array(':NomTechnicien'=>'%'.$nomTechnicien.'%'));

            //Récupère les enregistrements
            if ($choix === PDO::FETCH_CLASS) {
                require_once("metier/Technicien.class.php");
                $resultset->setFetchMode(
                            PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                            "Technicien",
                            array('IdTechnicien', 'NomTechnicien', 'PrenomTechnicien', 'Mail'));
                $records = $resultset->fetchAll();
            } else {
                $records = $resultset->fetchAll($choix);
            }

            //Fermer le curseur
            $resultset->closeCursor();
            //Détruire la connexion
            DbSav::disconnect();

            return $records;
       }

      /**
       * J'essaie d'insérer un nouveau technicien dans ma base de données.
       * 
       * @param Technicien technicien l'objet qui contient les données à insérer dans la base de
       * données
       * 
       * @return bool Le résultat de la requête.
       */
       public static function addTechnicien(Technicien $technicien) : bool {
           //Préparer la requête sql
           $sql = "INSERT INTO technicien (NomTechnicien, PrenomTechnicien,  Login, Password, Mail, IdService) VALUES ('$','','','')";

           //Préparer le Resultset (PDOstatement) à partir de la connexion
           $resultset = DbSav::getConnexion()->prepare($sql);

           $res = $resultset->execute(array($technicien->getIdTech(),
                                            $technicien->getNomTech(),
                                            $technicien->getPrenomTech(),
                                            $technicien->getMailTech()));

            //Fermer le curseur / resultset
            $resultset->closeCursor();
            //Détruire la connexion
            DbSav::disconnect();

            return $res;
       }

       /**
        * Il supprime une ligne de la base de données.
        * 
        * @param int IdTechnicien L'identifiant du technicien à supprimer
        * 
        * @return int Le nombre de lignes affectées par la requête.
        */
       public static function delTechnicienById(int $idTechnicien) : int {
           //Préparer la requête SQL
            $sql = "DELETE FROM technicien WHERE IdTechnicien=?";

            //Préparer le Resultset (PDOstatement) à partir de la connexion
            $resultset = DbSav::getConnexion()->prepare($sql);

            $res = $resultset->execute(array($idTechnicien));

            $nombre = $resultset->rowCount();

            //Fermer le curseur / resultset
            $resultset->closeCursor();
            //Détruire la connexion
            DbSav::disconnect();

            return $nombre;
       }

      /**
       * Supprimer un technicien de la base de données par son identifiant.
       * 
       * @param Technicien technicien
       * 
       * @return La valeur de retour est le résultat de la requête.
       */
       public static function delTechnicien(Technicien $technicien) {
           return self::delTechnicienById($technicien->getIdTech());
       }

       /**
        * Il met à jour une ligne dans la base de données avec les valeurs de l'objet passé en
        * paramètre
        * 
        * @param Technicien technicien l'objet qui contient les données à mettre à jour
        * 
        * @return int Le nombre de lignes affectées par la requête.
        */
       public static function updateTechnicien(Technicien $technicien) : int {
           //Préparer la requête sql
           $sql = "UPDATE technicien SET NomTechnicien=:NomTechnicien, PrenomTechnicien=:PrenomTechnicien, Mail=:Mail WHERE IdTechnicien=:IdTechnicien";

           //Préparer le Resultset (PDOstatement) à partir de la connexion
           $resultset = DbSav::getConnexion()->prepare($sql);

           $res = $resultset->execute(array(
                                    ':IdTechnicien'=>$technicien->getIdTech(),
                                    ':NomTechnicien'=>$technicien->getNomTech(),
                                    ':PrenomTechnicien'=>$technicien->getPrenomTech(),
                                    ':Mail'=>$technicien->getMailTech()));

           $nombre = $resultset->rowCount();

           //Fermer le curseur / resultset
           $resultset->closeCursor();
           //Détruire la connexion
           DbSav::disconnect();

           return $nombre;
       }
    }