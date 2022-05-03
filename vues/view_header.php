<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/extra-small.css" media="only screen and (max-width:767px)" >
    <link rel="stylesheet" href="css/small.css" media="only screen and (min-width:768px) and (max-width:991px)">
    <link rel="stylesheet" href="css/medium.css" media="only screen and (min-width:992px) and (max-width:1199px)">
    <link rel="stylesheet" href="css/large.css" media="only screen and (min-width:1200px)">
    <title>File Rouge2 - SAV MenuizMan</title>
</head>
<body>
    <header>
        <div class="row"> 
        <?php if ($action != 'connexion'){?><div class="connexion text-end"><i class="bi bi-person-circle"></i><?php echo " " . $login ?> est connecté(e) !
            <br/><a href="index.php?action=deconnexion"><i class="bi bi-x-circle-fill">Se déconnecter</i></a></div><?php } ?>
            <div class="text-center logo"><a href="index.php?action=accueil"><img src="img/MenuizMan.png" alt="Logo MenuizMan"/></a></div>
            <div class="text-center logosmall"><a href="index.php?action=accueil"><img src="img/MenuizMan2.png" alt="Logo MenuizMan"/></a></div>
            
        </div>
    </header>