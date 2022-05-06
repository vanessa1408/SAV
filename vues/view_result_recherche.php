

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
                            $PrénomClient = $tCMD [6];
                            echo '<a href="index.php?action=afficheClient&IdClient='.$IdClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "N° Commande : ". $IdCommande . " -- Date de commande : " . $DateCommande .
                            " -- Statut : ". $StatutCommande. "   // Commandé par ". $NomClient. " " .$PrénomClient." ".
                            '<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($numArt > 0)) {
                        foreach ($resultatArt as $keyArt => $tArt){
                            $IdCommande  = $tArt [0];
                            $DateCommande = $tArt [1];
                            $StatutCommande = $tArt [2];
                            $IdClient = $tArt [3];
                            $IdFacture = $tArt [4];
                            $IdArticle = $tArt [5];
                            $NomArticle = $tArt [6];
                            $StockPhysiqueArticle = $tArt [7];
                            $StockRebusArticle = $tArt [8];
                            $StockSAVArticle = $tArt [9];
                            $QteCOmART = $tArt [10];
                            $Garantie = $tArt [11];
                            $QteExpArt = $tArt [12];
                            $NomClient = $tArt [13];
                            $PrénomClient = $tArt [14];
                            echo '<a href="index.php?action=afficheClient&IdCommande='.$IdCommande.'&IdClient='.$IdClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "Nom de l'article : ". $NomArticle  . " -- Référence : " . $IdArticle . " -- Commande : ". $IdCommande . " // Nom : ". $NomClient. " " . $PrénomClient . " ".
                            '<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($CPclient > 0)) {
                        foreach ($resultatCP as $keyCPC => $tCPC){
                            $IdAdresse = $tCPC [0];
                            $AdresseClient = $tCPC [1];
                            $CPClient = $tCPC [2];
                            $VilleClient = $tCPC [3];
                            $IdClient = $tCPC [4];
                            $NomClient = $tCPC [5];
                            $PrénomClient = $tCPC [6];
                            echo '<a href="index.php?action=afficheClient&IdClient='.$IdClient.'"class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'
                            .$NomClient . " " . $PrénomClient . " ".'<p class="type-dossier"></p></a>';
                        }
                    }
                    
    ?> 