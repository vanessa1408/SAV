<?php echo $infosTicket->DateDiag ?>
<div class="main-accueil mx-auto">
    
    <div class="infos-dossier">
        <legend class="list-group-item list-group-item-action active title-list">Dossier n° <?php echo $infosTicket->idTicket; ?> - Statut du dossier : 
            <?php if(!empty($infosTicket->DateFermTicket)) { echo 'clôturé'; }
            else { echo 'en cours'; }   ; ?><input class="float-end" type="button" value="Modifier"></legend>

                        <p><label class="label-dossier" for="typeDoss">Type de dossier : </label><input name="typeDoss" type="text" disabled="disabled" value="<?php echo $infosTicket->LibType; ?>">
                        <label class="label-dossier-droite" for="typeInter">Type d'intervention : </label><input name="typeInter" type="text" disabled="disabled" value="<?php echo $infosTicket->LibTypeInter; ?>"></p>

            <p><label class="label-dossier" for="dateCrea">Date de création du dossier :</label><input name="dateCrea" type="date" disabled="disabled" value="<?php echo $infosTicket->DateAppelClient; ?>"></p>
            <p><label class="label-dossier" for="dateCloture">Date de clôture du dossier :</label><input name="dateCloture" type="date" disabled="disabled" value="<?php echo $infosTicket->DateFermTicket; ?>"></p>
            <p><label class="label-dossier" for="numcde">Commande concernée : </label><input name="numcde" type="text" disabled="disabled" value="<?php echo $infosTicket->IdCommande ?>">
            <label class="label-dossier-droite" for="statutcde">Statut : </label><input name="statutcde" type="text" disabled="disabled" value="<?php echo $infosTicket->StatutCommande; ?>"></p>
            <p><label class="label-dossier" for="datePEC">Date de prise en charge du SAV : </label><input name="datePEC" type="date" disabled="disabled" value="<?php echo $infosTicket->DatePEC; ?>"></p>
            <p><label class="label-dossier" for="motif">Motif du dossier : </label><input name="motif" type="text" disabled="disabled" value="<?php echo $infosTicket->Motif; ?>"></p>
            <p><label class="label-dossier" for="observation">Observation : </label>
            <textarea name="observation"class="form-control" aria-label="With textarea" disabled="disabled"><?php echo $infosTicket->Observations; ?></textarea></p>
    </div>   
    <div class="infos-dossier">
        <form method="GET" action="#">
            <legend class="list-group-item list-group-item-action active title-list">Client
                        <input class="float-end" type="button" value="Modifier" id="modifClient">
                                <input type="hidden" name="action" value="affTicketMAJ">
                                <input type="hidden" name="id" value="<?php echo $infosTicket->idTicket; ?>">
                                <input type="hidden" name="idCommande" value="<?php echo $infosTicket->IdCommande ?>">
                                <input class="float-end" type="submit" value="Enregistrer" id="enregistrerClient"></legend>
                        
                        <input type="hidden" name="idClient" value="<?php echo $infosClient->IdClient ?>">
                        <p><label class="label-dossier" for="nom">Nom : </label>
                        <input type="text" name="nom"  disabled="disabled" id="nom" value="<?php echo $infosClient->NomClient ?>">
                        <label class="label-dossier-droite" for="prenom">Prénom : </label>
                        <input id="prenom" name="prenom" type="text" disabled="disabled" value="<?php echo $infosClient->PrénomClient ?>"></p>
                        <p><label class="label-dossier" for="adresse">Adresse : </label>
                        <input id="adresse" name="adresse" type="text" disabled="disabled" value="<?php echo $infosClient->AdresseClient ?>"></p>
                        <p><label class="label-dossier" for="cp">CP : </label>
                        <input id="cp" name="cp" type="text" disabled="disabled" value="<?php echo $infosClient->CPClient ?>">
                        <label class="label-dossier-droite" for="ville">Ville : </label>
                        <input id="ville" name="ville" type="text" disabled="disabled" value="<?php echo $infosClient->VilleClient ?>"></p>
            </form>
    </div>       
         
    <div class="infos-dossier">
            <legend class="list-group-item list-group-item-action active title-list">Diagnostic
            <?php $dateDiag = $infosTicket->DateDiag;
            $valueBtn = ($dateDiag == null) ? ('Ajouter') : ('Modifier'); 
            ?>
                    <input class="float-end" type="button" value="<?php echo $valueBtn ?>"></legend></p>
            <p><label class="label-dossier" for="obs">Observation : 
                    <input name="obs" type="text" disabled="disabled" value="<?php echo $infosTicket->LibDiagnostic ?>"></p>
            <p><label class="label-dossier" for="datediag">Effectué le : 
                    <input name="datediag" type="date" disabled="disabled" value="<?php echo $infosTicket->DateDiag ?>"></p>
    </div>
