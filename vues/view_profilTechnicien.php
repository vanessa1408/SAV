<center><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=admin';">Retour à la page Admin</button></center>
<br/>
<?php
foreach ($infosTechnicien as $key => $tinfo){
        $idTechnicien = $tinfo [0];
        $nomTechnicien = $tinfo[1];
        $prenomTechnicien = $tinfo[2];
        $mailTechnicien = $tinfo[3];
        $loginTechnicien = $tinfo[4];
        $passwordTechnicien = $tinfo[5];
        $idServiceTechnicien = $tinfo[6];
                if ($idServiceTechnicien == 1){
                        $libService = "SAV";
                } 
                if ($idServiceTechnicien == 2){
                        $libService = "HOTLINE";
                } 
                if ($idServiceTechnicien == 3){
                        $libService = "ADMIN";
                } 
    }
  ?>
  <form method="post">
<center><div class="card" style="width: 18rem;">
  <img src="img/silhouette.png" class="card-img-top" alt="silhouette">
  <div class="card-body">
    <h5 class="card-title">Détail du profil</h5>
    <p class="card-text">
            Id. Technicien : <?php echo($idTechnicien);?><br/>
            <input type="hidden" name="idTechSelect" value="<?php echo $idTechnicien?>">
            Prénom : <?php echo($prenomTechnicien);?><br/>
       Nom : <?php echo($nomTechnicien);?><br/>
        Mail : <?php echo($mailTechnicien);?><br/>
        Login : <?php echo($loginTechnicien);?><br/>
        Password : <?php echo($passwordTechnicien);?><br/>
        Service :  <?php echo($libService);?><br/>
</p>
<!--
<input type="submit" name="modifTech" class="btn btn-primary" value="Modifier">
<input type="submit" name="deleteTech" class="btn btn-danger" value="Supprimer">
-->   
<?php
        if ($idServiceTechnicien == 3){
                if((isset($_POST['modifTech']) || ($_POST['deleteTech']))){
                        echo "Cet utilisateur ne peut pas être modifié ou supprimé";
                }
        } else {
                if(isset($_POST['modifTech'])){
                        $_POST['idTechModif'] = $idTechnicien;
                        header('location:index.php?action=modifTech');
                } else if (isset($_POST['deleteTech'])){
                        $_POST['idTechSupp'] = $idTechnicien;
                        header('location:index.php?action=suppTech');
                }
        }
  
?>
  </div>
</div></center>
</form>      
<center>
<div class="position_formulaire">
    
    <form action="index.php?action=rechTech" method="post" >
  
         <button type="submit" class="btn btn-primary">Afficher la liste des techniciens</button>
        
    </form>
</div>

</center>
 