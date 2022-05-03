<div class="main-accueil mx-auto toscroll">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossier n° <?php echo $idTicket; ?>
            </a>

        <?php foreach ($infosTicket as $key => $tTicket) {
                        $IdTicket = $tTicket[0];
                        $DateAppelClient = $tTicket[1];
                        $DatePEC = $tTicket[2];
                        $DateFermTicket = $tTicket[3];
                        $Motif = $tTicket[4];
                        $Observation = $tTicket[5];
                        $IdDiagnostic = $tTicket[6];
                        $IdTypeDossier = $tTicket[7];
                        $IdTypeInter = $tTicket[8];
                        $IdCommande = $tTicket[9];
                        $IdTechnicien = $tTicket[10];
                        // $motif = $tTicket[11];
                        // $IdTechnicien = $tTicket[12];
                        $StatutCommande = $tTicket[13];
                        $IdClient = $tTicket[14];
                        $IdFacture = $tTicket[15];
                        // $motif = $tTicket[16];
                        $NomClient = $tTicket[17];
                        $PrenomClient = $tTicket[18];
                        $IdAdresse = $tTicket[19];
                        $AdresseClient = $tTicket[20];
                        $CPClient = $tTicket[21];
                        $VilleClient = $tTicket[22];
                        // $motif = $tTicket[23];
                    }

                        echo '<div class="champsTicket" >Date de création du dossier : ' . $DateAppelClient . "<br/>";
                        echo '<a href="index.php?action=afficheCMD&IdCommande='.$IdCommande.'">Commande concernée : ' . $IdCommande . '</a><br/><hr>';
                        echo '<p>Date de prise en charge du SAV : ' . $DatePEC . "</p><br/>";
                        echo '<p>Motif du dossier : ' . $Motif . "</p><br/>";
                        echo '<p>Observation: ' . $Observation . "</p><br/>";
                        

                ?>