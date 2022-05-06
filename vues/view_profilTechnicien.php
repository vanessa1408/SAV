<center><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=admin';">Retour à la page Admin</button></center>
<br/>
<?php
foreach ($infosTechnicien as $key => $tinfo){
        $IdTechnicien = $tinfo [0];
        $NomTechnicien = $tinfo[1];
        $PrenomTechnicien = $tinfo[2];
        $MailTechnicien = $tinfo[3];
        $LoginTechnicien = $tinfo[4];
        $PasswordTechnicien = $tinfo[5];
        $IdServiceTechnicien = $tinfo[6];
                if ($IdServiceTechnicien == 1){
                        $LibService = "SAV";
                } 
                if ($IdServiceTechnicien == 2){
                        $LibService = "HOTLINE";
                } 
                if ($IdServiceTechnicien == 3){
                        $LibService = "ADMIN";
                } 
    }
  ?>
  <form method="post">
<center><div class="card" style="width: 18rem;">
  <img src="img/silhouette.png" class="card-img-top" alt="silhouette">
  <div class="card-body">
    <h5 class="card-title">Détail du profil</h5>
    <p class="card-text">
            Id. Technicien : <?php echo($IdTechnicien);?><br/>
            <input type="hidden" name="IdTechSelect" value="<?php echo $IdTechnicien?>">
            Prénom : <?php echo($PrenomTechnicien);?><br/>
       Nom : <?php echo($NomTechnicien);?><br/>
        Mail : <?php echo($MailTechnicien);?><br/>
        Login : <?php echo($LoginTechnicien);?><br/>
        Password : <?php echo($PasswordTechnicien);?><br/>
        Service :  <?php echo($LibService);?><br/>
</p>
<!--
<input type="submit" name="modifTech" class="btn btn-primary" value="Modifier">
<input type="submit" name="deleteTech" class="btn btn-danger" value="Supprimer">
-->   
<?php
        if ($IdServiceTechnicien == 3){
                if((isset($_POST['modifTech']) || ($_POST['deleteTech']))){
                        echo "Cet utilisateur ne peut pas être modifié ou supprimé";
                }
        } else {
                if(isset($_POST['modifTech'])){
                        $_POST['IdTechModif'] = $IdTechnicien;
                        header('location:index.php?action=modifTech');
                } else if (isset($_POST['deleteTech'])){
                        $_POST['IdTechSupp'] = $IdTechnicien;
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
 