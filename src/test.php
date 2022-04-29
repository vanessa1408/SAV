<?php

require_once("../modeles/DbSav.class.php");
require_once("../modeles/TicketMgr.class.php");     
require_once("../classes/TicketMgrException.class.php");

            try {
                // Appelle une connexion
                $connexion = DbSav::getConnexion();
                var_dump($connexion);
               
                // // Appelle et affiche la liste des Tickets en cours
                $listeTicket = TicketMgr::getListeTickets(PDO::FETCH_CLASS);

                foreach ($listeTicket as $key => $tTicket) {
                        $idTicket = $tTicket[0];
                        $nom = $tTicket[1];
                        $prenom = $tTicket[2];
                        $idCommande = $tTicket[3];
                        echo "IdTicket : " . $idTicket . " - Nom Prenom : " . $nom . " " . $prenom . " - N° Cmd : " . $idCommande . "<br />";
                }
                

   
                } catch (TicketMgrException $err) {
                echo "Il n'y a pas de ticket en cours.";
            }