<?php
            if(isset($dossier)){
                foreach($dossier as $key=> $tdossier)
                {
                    $idCommande = $tdossier[0];
                    $dateCommande = $tdossier[1];
                    $statutCommande = $tdossier[2];
                    $idClient = $tdossier[3];
                    $idFacture = $tdossier[4];
                    $idArticle = $tdossier[5];
                    $garantie = $tdossier[6];
                    $qteCOmART = $tdossier[7];
                    $qteExpArt = $tdossier[8];
                    $nomArticle = $tdossier[9];
                    $dateFacture = $tdossier[10];
                    $nomCLient = $tdossier[11];
                    $prenomClient = $tdossier[12];
                    $idAdresse = $tdossier[13];
                    $adresseClient = $tdossier[14];
                    $cPClient = $tdossier[15];
                    $villeClient = $tdossier[16];
                    $idTicket = $tdossier[17];
                    $dateAppelClient = $tdossier[18];
                    $datePEC = $tdossier[19];
                    $dateFermTicket = $tdossier[20];
                    $motif = $tdossier[21];
                    $observation = $tdossier[22];
                    $idTypeDossier = $tdossier[23];
                    $idTypeInter = $tdossier[24];
                    $idTechnicien = $tdossier[25];
                    $libDiagnostic = $tdossier[26];
                    $dateDiag = $tdossier[27];
                    $libType = $tdossier[28];
                    $nomTechnicien = $tdossier[29];
                    $prenomTechnicien = $tdossier[30];
                }
            }    
?>

<div class="main-accueil mx-auto toscroll">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
        Détails Commande : <?php echo $idCommande; ?>
        <button type="button" id="modalTicket" class="float-end" data-bs-toggle="modal" data-bs-target="#cmdModal">Creer ticket </button>
        </a>
    

        <div class="infos-dossier">
            <br/>
            <p><label class="label-dossier" for="typeDoss">Date de commande : </label><input name="typeDoss" type="text" disabled="disabled" value="<?php echo $dateCommande; ?>">
            <label class="label-dossier-droite" for="Statut">Statut de la commande : </label><input name="Statut" type="text" disabled="disabled" value="<?php echo $statutCommande; ?>">
            <?php
            if(isset($idTicket)){
                echo'<label class="float-end"><a href="index.php?action=affTicket&id='.$idTicket.'&idCommande='.$idCommande.'">Ticket en cours</a></p>';
                }
            ?>
            <p><label class="label-dossier" for="typeDoss">Numero de Facture : </label><input name="typeDoss" type="text" disabled="disabled" value="<?php echo $IidFacture; ?>">
            <label class="label-dossier-droite" for="statut">Date de Facture : </label><input name="statut" type="text" disabled="disabled" value="<?php echo $dateFacture; ?>"></p>

            <p><label class="label-dossier" for="nom">Nom :</label><input name="nom" type="text" disabled="disabled" value="<?php echo $nomCLient; ?>">
            <label class="label-dossier" for="prenom">Prenom :</label><input name="prenom" type="text" disabled="disabled" value="<?php echo $prenomClient; ?>"></p>

            <p><label class="label-dossier" for="adress">Adresse d'expédition : </label><input name="adress" type="text" disabled="disabled" value="<?php echo $adresseClient; ?>"></p>
            <p><label class="label-dossier" for="cp">Code postal : </label><input name="cp" type="text" disabled="disabled" value="<?php echo $cPClient; ?>">
            <label class="label-dossier" for="ville">   Ville : </label><input name="ville" type="text" disabled="disabled" value="<?php echo $villeClient; ?>"></p>
            <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                    <h3><p><label class="label-dossier" for="titre">Article(s) commandé(s) :</label></h3></a>
                    <br/>
                    <?php

                    if(isset($contenu)){
                        foreach($contenu as $key=> $tdossier)
                        {
                            $idCommande = $tdossier[0];
                            $dateCommande = $tdossier[1];
                            $statutCommande = $tdossier[2];
                            $idClient = $tdossier[3];
                            $idFacture = $tdossier[4];
                            $idArticle = $tdossier[5];
                            $garantie = $tdossier[6];
                            $qteCOmART = $tdossier[7];
                            $qteExpArt = $tdossier[8];
                            $nomArticle = $tdossier[9];
                            $dateFacture = $tdossier[10];
                            $nomCLient = $tdossier[11];
                            $prenomClient = $tdossier[12];
                            $idAdresse = $tdossier[13];
                            $adresseClient = $tdossier[14];
                            $cPClient = $tdossier[15];
                            $villeClient = $tdossier[16];
                            $idTicket = $tdossier[17];
                            $dateAppelClient = $tdossier[18];
                            $datePEC = $tdossier[19];
                            $dateFermTicket = $tdossier[20];
                            $motif = $tdossier[21];
                            $observation = $tdossier[22];
                            $idTypeDossier = $tdossier[23];
                            $idTypeInter = $tdossier[24];
                            $idTechnicien = $tdossier[25];
                            $libDiagnostic = $tdossier[26];
                            $dateDiag = $tdossier[27];
                            $libType = $tdossier[28];
                            $nomTechnicien = $tdossier[29];
                            $prenomTechnicien = $tdossier[30];
                        }
                    }
                    foreach($contenu as $key=> $tContenu)
                        {
                            $idArticle = $tContenu[0];
                            $nomArticle = $tContenu[1];
                    
                echo '<p><label class="label-dossier" for="nomarticle">Article : </label><label> '.$nomArticle.'</label>
                        <label class="label-dossier-droite" for="statutcde">Statut : </label><input name="statutcde" type="text" disabled="disabled" value="'.$statutCommande.'">
                        ';
                        
                    if(isset($idTicket)){
                echo '  <label class="float-end"><a href="index.php?action=affTicket&id='.$idTicket.'&idCommande='.$idCommande.'">Ticket en cours</a></label>
                        </p>
                        <p>
                        <label>Diagnostic : '.$libDiagnostic.'</label>
                        </p>';
                    }
                }
                        ?>
            </div>   
        </div>   
    </div>  
</div>   

