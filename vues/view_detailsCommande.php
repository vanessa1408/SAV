<?php
            if(isset($dossier)){
                foreach($dossier as $key=> $tdossier)
                {
                    $IdCommande = $tdossier[0];
                    $DateCommande = $tdossier[1];
                    $StatutCommande = $tdossier[2];
                    $IdClient = $tdossier[3];
                    $IdFacture = $tdossier[4];
                    $IdArticle = $tdossier[5];
                    $Garantie = $tdossier[6];
                    $QteCOmART = $tdossier[7];
                    $QteExpArt = $tdossier[8];
                    $NomArticle = $tdossier[9];
                    $DateFacture = $tdossier[10];
                    $NomCLient = $tdossier[11];
                    $PrenomClient = $tdossier[12];
                    $IdAdresse = $tdossier[13];
                    $AdresseClient = $tdossier[14];
                    $CPClient = $tdossier[15];
                    $VilleClient = $tdossier[16];
                    $IdTicket = $tdossier[17];
                    $DateAppelClient = $tdossier[18];
                    $DatePEC = $tdossier[19];
                    $DateFermTicket = $tdossier[20];
                    $Motif = $tdossier[21];
                    $Observation = $tdossier[22];
                    $IdTypeDossier = $tdossier[23];
                    $IdTypeInter = $tdossier[24];
                    $IdTechnicien = $tdossier[25];
                    $LibDiagnostic = $tdossier[26];
                    $DateDiag = $tdossier[27];
                    $LibType = $tdossier[28];
                    $NomTechnicien = $tdossier[29];
                    $PrenomTechnicien = $tdossier[30];
                }
            }    
?>

<div class="main-accueil mx-auto toscroll">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
        Détails Commande : <?php echo $IdCommande; ?>
        <button type="button" id="modalTicket" class="float-end" data-bs-toggle="modal" data-bs-target="#cmdModal">Creer ticket </button>
        </a>
    

        <div class="infos-dossier">
            <br/>
            <p><label class="label-dossier" for="typeDoss">Date de commande : </label><input name="typeDoss" type="text" disabled="disabled" value="<?php echo $DateCommande; ?>">
            <label class="label-dossier-droite" for="Statut">Statut de la commande : </label><input name="Statut" type="text" disabled="disabled" value="<?php echo $StatutCommande; ?>">
            <?php
            if(isset($IdTicket)){
                echo'<label class="float-end"><a href="index.php?action=affTicket&id='.$IdTicket.'&idCommande='.$IdCommande.'">Ticket en cours</a></p>';
                }
            ?>
            <p><label class="label-dossier" for="typeDoss">Numero de Facture : </label><input name="typeDoss" type="text" disabled="disabled" value="<?php echo $IdFacture; ?>">
            <label class="label-dossier-droite" for="Statut">Date de Facture : </label><input name="Statut" type="text" disabled="disabled" value="<?php echo $DateFacture; ?>"></p>

            <p><label class="label-dossier" for="nom">Nom :</label><input name="nom" type="text" disabled="disabled" value="<?php echo $NomCLient; ?>">
            <label class="label-dossier" for="prenom">Prenom :</label><input name="prenom" type="text" disabled="disabled" value="<?php echo $PrenomClient; ?>"></p>

            <p><label class="label-dossier" for="adress">Adresse d'expédition : </label><input name="adress" type="text" disabled="disabled" value="<?php echo $AdresseClient; ?>"></p>
            <p><label class="label-dossier" for="cp">Code postal : </label><input name="cp" type="text" disabled="disabled" value="<?php echo $CPClient; ?>">
            <label class="label-dossier" for="ville">   Ville : </label><input name="ville" type="text" disabled="disabled" value="<?php echo $VilleClient; ?>"></p>
            <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                    <h3><p><label class="label-dossier" for="titre">Article(s) commandé(s) :</label></h3></a>
                    <br/>
                    <?php

                    if(isset($contenu)){
                        foreach($contenu as $key=> $tdossier)
                        {
                            $IdCommande = $tdossier[0];
                            $DateCommande = $tdossier[1];
                            $StatutCommande = $tdossier[2];
                            $IdClient = $tdossier[3];
                            $IdFacture = $tdossier[4];
                            $IdArticle = $tdossier[5];
                            $Garantie = $tdossier[6];
                            $QteCOmART = $tdossier[7];
                            $QteExpArt = $tdossier[8];
                            $NomArticle = $tdossier[9];
                            $DateFacture = $tdossier[10];
                            $NomCLient = $tdossier[11];
                            $PrenomClient = $tdossier[12];
                            $IdAdresse = $tdossier[13];
                            $AdresseClient = $tdossier[14];
                            $CPClient = $tdossier[15];
                            $VilleClient = $tdossier[16];
                            $IdTicket = $tdossier[17];
                            $DateAppelClient = $tdossier[18];
                            $DatePEC = $tdossier[19];
                            $DateFermTicket = $tdossier[20];
                            $Motif = $tdossier[21];
                            $Observation = $tdossier[22];
                            $IdTypeDossier = $tdossier[23];
                            $IdTypeInter = $tdossier[24];
                            $IdTechnicien = $tdossier[25];
                            $LibDiagnostic = $tdossier[26];
                            $DateDiag = $tdossier[27];
                            $LibType = $tdossier[28];
                            $NomTechnicien = $tdossier[29];
                            $PrenomTechnicien = $tdossier[30];
                        }
                    }
                    foreach($contenu as $key=> $tContenu)
                        {
                            $IdArticle = $tContenu[0];
                            $NomArticle = $tContenu[1];
                    
                echo '<p><label class="label-dossier" for="nomarticle">Article : </label><label> '.$NomArticle.'</label>
                        <label class="label-dossier-droite" for="statutcde">Statut : </label><input name="statutcde" type="text" disabled="disabled" value="'.$StatutCommande.'">
                        ';
                        
                    if(isset($IdTicket)){
                echo '  <label class="float-end"><a href="index.php?action=affTicket&id='.$IdTicket.'&idCommande='.$IdCommande.'">Ticket en cours</a></label>
                        </p>
                        <p>
                        <label>Diagnostic : '.$LibDiagnostic.'</label>
                        </p>';
                    }
                }
                        ?>
            </div>   
        </div>   
    </div>  
</div>   

