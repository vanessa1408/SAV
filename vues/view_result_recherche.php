

<p>
    <center>Voici les résultats pour : <h4><?php echo $affichage ?><h4></center>
</p>
    <div class="main-accueil mx-auto" id="formsearch">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                <?php 
                    if (strlen($nom) > 0){
                        foreach ($resultatNom as $key => $tinfo){
                            $idClient = $tinfo [0];
                            $nomClient = $tinfo[1];
                            $prenomClient = $tinfo[2];
                            echo '<a href="index.php?action=afficheClient&idClient='.$idClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                            . $nomClient . " " . $prenomClient . " ".'<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($numCMD > 0)) {
                        foreach ($resultatCMD as $keyCmd => $tCMD){
                            $idCommande = $tCMD [0];
                            $dateCommande = $tCMD [1];
                            $statutCommande = $tCMD [2];
                            $idClient = $tCMD [3];
                            $idFacture = $tCMD [4];
                            $nomClient = $tCMD [5];
                            $prenomClient = $tCMD [6];
                            echo '<a href="index.php?action=afficheClient&idClient='.$idClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "N° Commande : ". $idCommande . " -- Date de commande : " . $dateCommande .
                            " -- Statut : ". $statutCommande. "   // Commandé par ". $nomClient. " " .$prenomClient." ".
                            '<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($numArt > 0)) {
                        foreach ($resultatArt as $keyArt => $tArt){
                            $idCommande  = $tArt [0];
                            $dateCommande = $tArt [1];
                            $statutCommande = $tArt [2];
                            $idClient = $tArt [3];
                            $idFacture = $tArt [4];
                            $idArticle = $tArt [5];
                            $nomArticle = $tArt [6];
                            $stockPhysiqueArticle = $tArt [7];
                            $stockRebusArticle = $tArt [8];
                            $stockSAVArticle = $tArt [9];
                            $qteCOmART = $tArt [10];
                            $garantie = $tArt [11];
                            $qteExpArt = $tArt [12];
                            $nomClient = $tArt [13];
                            $prenomClient = $tArt [14];
                            echo '<a href="index.php?action=afficheClient&idCommande='.$idCommande.'&idClient='.$idClient.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'.
                            "Nom de l'article : ". $nomArticle  . " -- Référence : " . $idArticle . " -- Commande : ". $idCommande . " // Nom : ". $nomClient. " " . $prenomClient . " ".
                            '<p class="type-dossier"></p></a>';
                        }
                    } elseif (strlen($cPclient > 0)) {
                        foreach ($resultatCP as $keyCPC => $tCPC){
                            $idAdresse = $tCPC [0];
                            $adresseClient = $tCPC [1];
                            $cPClient = $tCPC [2];
                            $villeClient = $tCPC [3];
                            $idClient = $tCPC [4];
                            $nomClient = $tCPC [5];
                            $prenomClient = $tCPC [6];
                            echo '<a href="index.php?action=afficheClient&idClient='.$idClient.'"class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>'
                            .$nomClient . " " . $prenomClient . " ".'<p class="type-dossier"></p></a>';
                        }
                    }
                    
    ?> 