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
                        $idTicket = $tTicket->idTicket;
                        $nom = $tTicket->NomClient;
                        $prenom = $tTicket->PrénomClient;
                        $idCommande = $tTicket->IdCommande;
                        $typeInter = $tTicket->LibType;
                        echo '<a href="index.php?action=affTicket&id='. $idTicket . '&idCommande=' . $idCommande . '" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                        . $idTicket . ' - ' . $nom . " " . $prenom . " - N° Cmd : " . $idCommande . '<p class="type-dossier">' . $typeInter . '</p></a>';
                }
?>
        </div>
</div>



           