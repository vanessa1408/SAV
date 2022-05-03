<div class="position_formulaire">
    <form action="index.php?action=rechercheMaj" method="post" >
        <div class="mb-3">
            <label for="nomClient" class="form-label">Nom du client</label>
            <input type="text" class="form-control" name="nomClient" placeholder="Recherchez un client par nom...">
        </div>
        <div class="mb-3">
            <label for="Ncmd" class="form-label">N° de commande</label>
            <input type="text" class="form-control" name="Ncmd" placeholder="Recherchez un client par N° Commande...">
        </div>
        <div class="mb-3">
            <label for="refArticle" class="form-label">Reference de l'article</label>
            <input type="text" class="form-control" name="refArticle" placeholder="Recherchez un client par N° Article...">
        </div>
        <div class="mb-3">
            <label for="codePostal" class="form-label">Code Postal</label>
            <input type="text" class="form-control" name="codePostal" placeholder="Recherchez un client par Code postal...">
        </div>
        <!-- <div class="mb-3">
            <label for="VilleClient" class="form-label">Ville</label>
            <input type="text" class="form-control" name="VilleClient" placeholder="Recherchez un client par Ville...">
        </div> -->
        <button type="submit" class="btn btn-primary">Recherchez</button>
        <button type="reset" class="btn btn-danger">Annulez </button>
    </form>
</div>