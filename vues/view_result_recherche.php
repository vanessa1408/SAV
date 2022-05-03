

<p>
    <center>Voici les résultats pour : <h4><?php echo $affichage ?><h4></center>
</p>
    <div class="main-accueil mx-auto" id="formsearch">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                <?php 
                    if (strlen($nom) > 0){
                        foreach ($resultatNom as $key => $tinfo){
                            $IdClient = $tinfo [0];
                            $NomClient = $tinfo[1];
                            $PrenomClient = $tinfo[2];
                            echo '<a href="index.php?action=afficheClient&IdClient='.$IdClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                            . $NomClient . " " . $PrenomClient . " ".'<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($numCMD > 0)) {
                        foreach ($resultatCMD as $keyCmd => $tCMD){
                            $IdCommande = $tCMD [0];
                            $DateCommande = $tCMD [1];
                            $StatutCommande = $tCMD [2];
                            $IdClient = $tCMD [3];
                            $IdFacture = $tCMD [4];
                            $NomClient = $tCMD [5];
                            $PrenomClient = $tCMD [6];
                            echo '<a href="index.php?action=afficheClient" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "N° Commande : ". $IdCommande . " -- Date de commande : " . $DateCommande .
                            " -- Statut : ". $StatutCommande. "   // Commandé par ". $NomClient. " " .$PrenomClient." ".
                            '<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($numArt > 0)) {
                        foreach ($resultatArt as $keyArt => $tArt){
                            $IdArticle  = $tArt [0];
                            $NomArticle = $tArt [1];
                            $StockPhysiqueArticle = $tArt [2];
                            $StockRebusArticle = $tArt [3];
                            $StockSAVArticle = $tArt [4];
                            echo '<a href="index.php?action=afficheClient" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "Nom de l'article : ". $NomArticle  . " -- Référence : " . $IdArticle . " -- Stock Principal : ". $StockPhysiqueArticle. " ".
                            " -- Stock Rebus : ". $StockRebusArticle . " -- Stock SAV : " . $StockSAVArticle . " ".
                            '<p class="type-dossier"></p></a>';
                        }
                    }
    ?> 