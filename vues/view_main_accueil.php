<div class="main-accueil mx-auto toscroll">
        <div class="list-group">
            <?php if($action == 'accueil'){?><p href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossiers en cours
            </p><?php } ?>

            <?php if($action == 'recherchedossier'){?><p href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                    Voici les résultats pour "<?php echo($recherche)  ?>"<?php } ?></p>
     
</p>

<?php
                foreach ($listeTicket as $key => $tTicket) {
                        $idTicket = $tTicket[0];
                        $nom = $tTicket[1];
                        $prenom = $tTicket[2];
                        $idCommande = $tTicket[3];
                        $typeInter = $tTicket[4];
                        echo '<a href="index.php?action=affTicket&id='. $idTicket . '&idCommande=' . $idCommande . '" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                        . $idTicket . ' - ' . $nom . " " . $prenom . " - N° Cmd : " . $idCommande . '<p class="type-dossier">' . $typeInter . '</p></a>';
                }
?>
        </div>
</div>



           