
<center><h3>
  
  <small class="text-muted">Modification de technicien</small>
</h3>
<form action="index.php?action=verifModifTech" method="POST">
<label>ID Technicien</label>
<input type="text" for="IdTech" name="IdTech" required="required"><br/><br/>
<label>Nom</label>
<input type="text" for="ModifNomTech" name="ModifNomTech"><br/><br/>
<label>Prénom</label>
<input type="text" for="ModifPrenomTech" name="ModifPrenomTech" ><br/><br/>
<label>Mail</label>
<input type="email" for="ModifMailTech" name="ModifMailTech" ><br/><br/>
<label>Login</label>
<input type="text" for="ModifLogTech" name="ModifLogTech" ><br/><br/>
<label>Mot de passe</label>
<input type="password" for="ModifPwdTech" name="ModifPwdTech" ><br/><br/>
<select for="ModifIdService" name="ModifIdService" >
  <option selected>Selectionner le service d'affectation</option>
  <option value="1">SAV</option>
  <option value="2">HOTLINE</option>
  </select><br/><br/>
  <?php
        if($action=='ErrCreaTech'){?>
            <p align="center"><?php echo "Le technicien ne peut être créé";?></p>
        <?php
        }
    ?>
<br/>
<button type="submit" class="btn btn-primary">Valider</button>
</form>
</center>
<br/>
<center><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=admin';">Retour à la page Admin</button></center>
