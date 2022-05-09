<div class="main-accueil mx-auto toscroll">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossier Client : 
            </a>
            <div>
            <br/>
                <?php
                if(isset($donnee)){  
                    foreach($donnee as $key=> $tdonnee)
                        {   
                            $idClient = $tdonnee[0];
                            $nomClient = $tdonnee[1];
                            $prenomClient = $tdonnee[2];
                            $idCommande = $tdonnee[3];
                            $adresseClient = $tdonnee[4];
                            $villeClient = $tdonnee[5];
                            $cPClient = $tdonnee[6];
                        }
                }else{
                    foreach($donnee2 as $key=> $tdonnee)
                        {   
                            $idClient = $tdonnee[0];
                            $nomClient = $tdonnee[1];
                            $prenomClient = $tdonnee[2];
                            $idCommande = $tdonnee[3];
                            $adresseClient = $tdonnee[4];
                            $villeClient = $tdonnee[5];
                            $cPClient = $tdonnee[6];
                        }
                }


             
                    echo '<p><label class="label-dossier" for="nom">Numéro Client : </label>
                            <input id="nom" name="nom" type="text" disabled="disabled" value="'.$idClient.'"></p>';
                    echo '<p><label class="label-dossier" for="nom">Nom : </label>
                            <input id="nom" name="nom" type="text" disabled="disabled" value="'.$nomClient.'">
                            <label class="label-dossier-droite" for="prenom">Prénom : </label>
                            <input id="prenom" name="prenom" type="text" disabled="disabled" value="'.$prenomClient.'"></p>';
                    echo '<p><label class="label-dossier" for="adresse">Adresse : </label>
                            <input id="adresse" name="adresse" type="text" disabled="disabled" value="'.$adresseClient.'"></p>
                          <p><label class="label-dossier" for="cp">CP : </label>
                            <input id="cp" name="cp" type="text" disabled="disabled" value="'.$cPClient.'">
                            <label class="label-dossier-droite" for="ville">Ville : </label>
                            <input id="ville" name="ville" type="text" disabled="disabled" value="'.$villeClient.'"></p><br/>';
                    
                foreach ($donnee3 as $key => $tdonnee)
                {
                    $idClient = $tdonnee[0];
                    $nomClient = $tdonnee[1];
                    $prenomClient = $tdonnee[2];
                    $idCommande = $tdonnee[3];
                    echo '<a href="index.php?action=afficheCMD&idCommande='.$idCommande.'">Commande(s) effectuée(s) : ' .$idCommande . '</a><br/><hr>';
                }

                

                    ?>
            </div>
        </div> 
</div>

