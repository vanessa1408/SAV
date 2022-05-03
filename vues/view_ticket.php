<div class="main-accueil mx-auto toscroll">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossier n° <?php echo $idTicket; ?>
            </a>

        <?php foreach ($infosTicket as $key => $tTicket) {
                        $idTicket = $tTicket[0];
                        $dateAppelClient = $tTicket[1];
                        $datePEC = $tTicket[2];
                        $dateFermTicket = $tTicket[3];
                        $motif = $tTicket[4];
                        $observation = $tTicket[5];
                        $idDiagnostic = $tTicket[6];
                        $idTypeDossier = $tTicket[7];
                        $idTypeInter = $tTicket[8];
                        $idCommande = $tTicket[9];
                        $idTechnicien = $tTicket[10];
                        // $motif = $tTicket[11];
                        $idTechnicien = $tTicket[12];
                        $statutCommande = $tTicket[13];
                        $idClient = $tTicket[14];
                        $idFacture = $tTicket[15];
                        // $motif = $tTicket[16];
                        $nomClient = $tTicket[17];
                        $prenomClient = $tTicket[18];
                        $idAdresse = $tTicket[19];
                        $adresseClient = $tTicket[20];
                        $cpClient = $tTicket[21];
                        $villeClient = $tTicket[22];
                        // $motif = $tTicket[23];
                    }

                        echo '<div class="champsTicket" >Date de création du dossier : ' . $dateAppelClient . "<br/>";
                        echo '<a href="#">Commande concernée : ' . $idCommande . '</a><br/><hr>';
                        echo '<p>Date de prise en charge du SAV : ' . $datePEC . "</p><br/>";
                        echo '<p>Motif du dossier : ' . $motif . "</p><br/>";
                        echo '<p>Observation: ' . $observation . "</p><br/>";
                        


                ?>