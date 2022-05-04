<div class="main-accueil mx-auto toscroll">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossier Client : 
            </a>
            <div>
                <?php
                if(isset($donnee)){  
                    foreach($donnee as $key=> $tdonnee)
                        {   
                            $IdClient = $tdonnee[0];
                            $NomClient = $tdonnee[1];
                            $PrénomClient = $tdonnee[2];
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
                            $PrénomClient = $tdonnee[2];
                            $IdCommande = $tdonnee[3];
                            $AdresseClient = $tdonnee[4];
                            $VilleClient = $tdonnee[5];
                            $CPClient = $tdonnee[6];
                        }
                }

                    echo '<p>Numéro Client : '.$IdClient."</p><br/>";
                    echo '<p>Nom : '.$NomClient."</p><br/>";
                    echo '<p>Prenom : '.$PrénomClient."</p><br/>";
                    echo '<p>Adresse : '.$AdresseClient.'<br/> Code Postal : '.$CPClient.'<br/> Ville : '.$VilleClient. "</p><br/>";
                foreach ($donnee3 as $key => $tdonnee)
                {
                    $IdClient = $tdonnee[0];
                    $NomClient = $tdonnee[1];
                    $PrénomClient = $tdonnee[2];
                    $IdCommande = $tdonnee[3];
                    echo '<a href="index.php?action=afficheCMD&IdCommande='.$IdCommande.'">Commande(s) effectuée(s) : ' .$IdCommande . '</a><br/><hr>';
                }
// var_dump($donnee);
                    ?>
            </div>
        </div> 
</div>

