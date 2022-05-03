<div class="main-accueil mx-auto">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossiers en cours
            </a>
<?php
            try {
                // Appelle une connexion
                $connexion = DbSav::getConnexion();
                // var_dump($connexion);
               
                // // Appelle et affiche la liste des Tickets en cours
                $listeTicket = TicketMgr::getListeTickets(PDO::FETCH_CLASS);

                foreach ($listeTicket as $key => $tTicket) {
                        $idTicket = $tTicket[0];
                        $nom = $tTicket[1];
                        $prenom = $tTicket[2];
                        $idCommande = $tTicket[3];
                        $typeInter = $tTicket[4];
                        echo '<a href="index.php?" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                        . $idTicket . ' - ' . $nom . " " . $prenom . " - N° Cmd : " . $idCommande . '<p class="type-dossier">' . $typeInter . '</p></a>';
                }
                

   
                } catch (TicketMgrException $err) {
                echo "Il n'y a pas de ticket en cours.";
            }

?>
        </div>
</div>



           