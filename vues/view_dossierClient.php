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
                            $IdClient = $tdonnee[0];
                            $NomClient = $tdonnee[1];
                            $PrenomClient = $tdonnee[2];
                            $IdCommande = $tdonnee[3];
                            $AdresseClient = $tdonnee[4];
                            $VilleClient = $tdonnee[5];
                            $CPClient = $tdonnee[6];
                        }
                }else{
                    foreach($donnee2 as $key=> $tdonnee)
                        {   
                            $IdClient = $tdonnee[0];
                            $NomClient = $tdonnee[1];
                            $PrenomClient = $tdonnee[2];
                            $IdCommande = $tdonnee[3];
                            $AdresseClient = $tdonnee[4];
                            $VilleClient = $tdonnee[5];
                            $CPClient = $tdonnee[6];
                        }
                }


             
                    echo '<p><label class="label-dossier" for="nom">Numéro Client : </label>
                            <input id="nom" name="nom" type="text" disabled="disabled" value="'.$IdClient.'"></p>';
                    echo '<p><label class="label-dossier" for="nom">Nom : </label>
                            <input id="nom" name="nom" type="text" disabled="disabled" value="'.$NomClient.'">
                            <label class="label-dossier-droite" for="prenom">Prénom : </label>
                            <input id="prenom" name="prenom" type="text" disabled="disabled" value="'.$PrenomClient.'"></p>';
                    echo '<p><label class="label-dossier" for="adresse">Adresse : </label>
                            <input id="adresse" name="adresse" type="text" disabled="disabled" value="'.$AdresseClient.'"></p>
                          <p><label class="label-dossier" for="cp">CP : </label>
                            <input id="cp" name="cp" type="text" disabled="disabled" value="'.$CPClient.'">
                            <label class="label-dossier-droite" for="ville">Ville : </label>
                            <input id="ville" name="ville" type="text" disabled="disabled" value="'.$VilleClient.'"></p><br/>';
                    
                foreach ($donnee3 as $key => $tdonnee)
                {
                    $IdClient = $tdonnee[0];
                    $NomClient = $tdonnee[1];
                    $PrenomClient = $tdonnee[2];
                    $IdCommande = $tdonnee[3];
                    echo '<a href="index.php?action=afficheCMD&IdCommande='.$IdCommande.'">Commande(s) effectuée(s) : ' .$IdCommande . '</a><br/><hr>';
                }

                

                    ?>
            </div>
        </div> 
</div>

