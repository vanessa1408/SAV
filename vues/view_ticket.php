<div class="main-accueil mx-auto">
    
    <div class="infos-dossier">            <form method="POST">
        <legend class="list-group-item list-group-item-action active title-list">Ticket n° <?php echo $infosTicket->IdTicket; ?> - Statut du ticket : 
            <?php if(!empty($infosTicket->DateFermTicket)) { echo 'clôturé'; }
            else { echo 'en cours'; }   ; ?>

            <input type="hidden" name="action" value="affMAJTicket">
            <input id="modifTicket" class="float-end" type="button" value="Modifier">
            <input id="enrmodifTicket" class="float-end" type="submit" value="Enregistrer">
            </legend>
            <input type="hidden" name="idTicket" value="<?php echo $infosTicket->IdTicket; ?>">
                        <p><label class="label-dossier" for="typeDoss">Type de ticket : </label><input id="typeDoss" name="typeDoss" type="text" disabled="disabled" value="<?php echo $infosTicket->LibType; ?>">
                        <label class="label-dossier-droite" for="typeInter">Type d'intervention : </label><input id="typeInter" name="typeInter" type="text" disabled="disabled" value="<?php echo $infosTicket->LibTypeInter; ?>"></p>

            <p><label class="label-dossier" for="dateCrea">Date de création du ticket :</label><input id="dateCrea" name="dateCrea" type="date" disabled="disabled" value="<?php echo $infosTicket->DateAppelClient; ?>"></p>
            <p><label class="label-dossier" for="dateCloture">Date de clôture du ticket :</label><input id="dateCloture" name="dateCloture" type="date" disabled="disabled" value="<?php echo $infosTicket->DateFermTicket; ?>"></p>
            <p><label class="label-dossier" for="numcde">Commande concernée : </label><input id="numcde" name="numcde" type="text" disabled="disabled" value="<?php echo $infosTicket->IdCommande ?>">
            <label class="label-dossier-droite" for="statutcde">Statut : </label><input id="statutcde" name="statutcde" type="text" disabled="disabled" value="<?php echo $infosTicket->StatutCommande; ?>"></p>
            <p><label class="label-dossier" for="datePEC">Date de prise en charge du SAV : </label><input id="datePEC" name="datePEC" type="date" disabled="disabled" value="<?php echo $infosTicket->DatePEC; ?>"></p>
            <p><label class="label-dossier" for="motif">Motif du ticket : </label><input id="motif" name="motif" type="text" disabled="disabled" value="<?php echo $infosTicket->Motif; ?>"></p>
            <p><label class="label-dossier" for="observation">Observation : </label>
            <textarea id="observation" name="observation"class="form-control" aria-label="With textarea" disabled="disabled"><?php echo $infosTicket->Observations; ?></textarea></p></form>
    </div>   
    <div class="infos-dossier">
        <form class="form-client" method="GET" action="#">
            <legend class="list-group-item list-group-item-action active title-list">Client
                        <input class="float-end" type="button" value="Modifier" id="modifClient">
                                <input type="hidden" name="action" value="affTicketMAJ">
                                <input type="hidden" name="id" value="<?php echo $infosTicket->IdTicket; ?>">
                                <input type="hidden" name="idCommande" value="<?php echo $infosTicket->IdCommande ?>">
                                <input class="float-end" type="submit" value="Enregistrer" id="enregistrerClient"></legend>
                        
                        <input type="hidden" name="idClient" value="<?php echo $infosClient->IdClient ?>">
                        <div id="infosClient" ><p><label class="label-dossier" for="nom">Nom : </label>
                        <input type="text" name="nom"  disabled="disabled" id="nom" value="<?php echo $infosClient->NomClient ?>" required="required">
                        <label class="label-dossier-droite" for="prenom">Prénom : </label>
                        <input id="prenom" name="prenom" type="text" disabled="disabled" value="<?php echo $infosClient->PrénomClient ?>" required="required"></p>
                        <p><label class="label-dossier" for="adresse">Adresse : </label>
                        <input id="adresse" name="adresse" type="text" disabled="disabled" value="<?php echo $infosClient->AdresseClient ?>" required="required"></p>
                        <p><label class="label-dossier" for="cp">CP : </label>
                        <input id="cp" name="cp" type="text" disabled="disabled" value="<?php echo $infosClient->CPClient ?>" required="required">
                        <label class="label-dossier-droite" for="ville">Ville : </label>
                        <input id="ville" name="ville" type="text" disabled="disabled" value="<?php echo $infosClient->VilleClient ?>" required="required"></p></div>
            </form>
    </div>       
         
    <div class="infos-dossier">
            <legend class="list-group-item list-group-item-action active title-list">Diagnostic
            <form method="GET" action="index.php">
            <input type="hidden" name="action" value="affTicketMAJdiag">
                    <input class="float-end" type="button" id="editDiag" value="Ajouter">
                    </legend></form></p>
                    <?php 
                

foreach($listDiag as $key => $value){

        echo '<div id="infosDiag"><p ><label class="label-dossier" for="datediag">Effectué le : 
                <input id="datediag" type="date" disabled="disabled" value="'. $value->DateDiag . 
                '"><label class="label-dossier-droite" for="obs">Observation :</label> <input id="obsDiag" class="input-obsDiag" type="text" name="obs"  disabled="disabled" value="' .
                $value->LibDiagnostic . '"></div>';

}
?></div> <form method="GET" action="index.php">
                    <input type="hidden" name="action" value="affTicketMAJdiag">
                    <input type="hidden" name="id" value="<?php echo $infosTicket->IdTicket; ?>">
                        <input type="hidden" name="idCommande" value="<?php echo $infosTicket->IdCommande ?>">
        <div id="addDiag"></div><input id="enrDiag" class="float-end" type="submit" value="Enregistrer">
            </form>

            
    </div>