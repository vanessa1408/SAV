<center><h3>
  
  <small class="text-muted">Créer un nouveau technicien</small>
</h3>
<form action="index.php?action=verifCreaTech" method="post">

<label>Nom</label>
<input type="text" for="CreaNomTech" name="creaNomTech" required="required"><br/><br/>
<label>Prénom</label>
<input type="text" for="CreaPrenomTech" name="creaPrenomTech" required="required"><br/><br/>
<label>Mail</label>
<input type="email" for="CreaMailTech" name="creaMailTech" required="required"><br/><br/>
<label>Login</label>
<input type="text" for="CreaLogTech" name="creaLogTech" required="required"><br/><br/>
<label>Mot de passe</label>
<input type="password" for="CreaPwdTech" name="creaPwdTech" required="required"><br/><br/>
<select for="idService" name="idservice" required="required">
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
