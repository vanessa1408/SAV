<h1>Connexion au serveur SAV</h1>
    <form name="login" action="index.php?action=ctrlconnexion"  method="POST">
         <label id="label1">Nom d'utilisateur</label> 
        <br/>
        <input type="text" name="login" id="login" placeholder="Login" required="required">
        <br />
        <label id="label2">Mot de passe</label> 
        <br/>
        <input type="password" name="password" id="password" placeholder="Mot de passe" >
        <br/>        
        <input type="submit"  name="submit" id="connecter" value="Se connecter">
    </form>