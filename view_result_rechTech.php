
<center><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=admin';">Retour à la page Admin</button></center>
<p>    
<div class="position_formulaire">
    
    <center><form action="index.php?action=creaTech" method="post" >
        
         <button type="submit" class="btn btn-primary">Créer un nouveau technicien</button>
        
    </form></center>
   
</div>
<center><h4>Liste des techniciens :</h4></center>
</p>

<div class="main-accueil mx-auto" id="formsearch">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
                <?php 
                   
                        foreach ($resultatNomTechnicien as $key => $tinfo){
                            $IdTechnicien = $tinfo [0];
                            $NomTechnicien = $tinfo[1];
                            $PrenomTechnicien = $tinfo[2];
                            $MailTechnicien = $tinfo[3];
                            echo '<a href="index.php?action=affTechnicien&IdTechnicien='.$IdTechnicien.'" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>' 
                            . $NomTechnicien . " " . $PrenomTechnicien . " ".  $MailTechnicien ." " .'<p class="type-dossier"></p></a>';
                        }
                    
            ?> 

