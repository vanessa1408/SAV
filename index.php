<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- media="only screen and (max-width:767px)" -->
    <link rel="stylesheet" href="css/small.css" media="only screen and (min-width:768px) and (max-width:991px)">
    <link rel="stylesheet" href="css/medium.css" media="only screen and (min-width:992px) and (max-width:1199px)">
    <link rel="stylesheet" href="css/large.css" media="only screen and (min-width:1200px)">
    <title>File Rouge2 - SAV MenuizMan</title>
</head>
<body>
    <header class="row">
        <div class="col-8 logoD text-center"><img src="img/MenuizMan.png" alt="Logo MenuizMan" class="logo"/></div>
        <div class="col-4 text-center navbar-text"><img src="img/sav.png" alt="Logo SAV" class="logo"/></div>
    </header>
    <div class="menu-top text-center">
        <a href="#" class="myButton active" aria-current="page">Accueil</a>
        <a href="#" class="myButton">Nouveau dossier</a>
        <a href="#" class="myButton">Diagnostic</a>
    </div>

    <div class="row content search-bar">   
        <div class="col-10 nav text-center"><input class="input-search" type="search" placeholder="Recherche par n° dossier, nom client" aria-label="Search"></div>
        <div class="col-2 nav text-center"><button class="btn loupe"><i class="bi bi-search"></i></button></div>
    </div>

    <div class="main">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active title-list" aria-current="true">
            Dossiers en cours
            </a>
            <?php

            require_once("modele/DbSav.class.php");


            try {
                // Appelle une connexion
                $connexion = DbSav::getConnexion();
               
                // // Appelle et affiche la liste des Tickets en cours
                $listeTicket = TicketMgr::getListeTickets(PDO::FETCH_CLASS);
   
                } catch (TicketMgrException $err) {
                echo "Il n'y a pas de ticket en cours.";
            }

            ?>
            <!-- <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001255 - DUPONT Marie : cmd 15556620<p class="type-dossier">NPAI</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">EP</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001255 - DUPONT Marie : cmd 15556620<p class="type-dossier">SAV</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">SAV</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001255 - DUPONT Marie : cmd 15556620<p class="type-dossier">NPAI</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">EC</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001255 - DUPONT Marie : cmd 15556620<p class="type-dossier">SAV</p></a>
            <a class="malist navbar-text list-group-item-action disabled"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">SAV</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">EC</p></a>
            <a href="#" class="malist navbar-text list-group-item-action"><i class="bi bi-folder-fill"></i>3001255 - DUPONT Marie : cmd 15556620<p class="type-dossier">SAV</p></a>
            <a class="malist navbar-text list-group-item-action disabled"><i class="bi bi-folder-fill"></i>3001208 - HERSAN Jacques : cmd 10233690<p class="type-dossier">SAV</p></a> -->
        </div>
    </div>
    <div class="row text-center nav">
        <nav aria-label="Page navigation example">
            <ul class="j">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>