<!DOCTYPE html>
<html lang="fr">
    <head>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

    </head>

    <body>

        <header class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <h2>SweatMore</h2>

                <?php if (isset($_SESSION['user-id'])){ ?>
                <ul class="navbar-nav d-flex flex-row" id="connexion_inscription">
                    <li class="nav-item p-2"><a class="nav-link" href="../compte.php">Mon compte</a></li>
                    <li class="nav-item p-2"><a class="nav-link" href="../deconnexion.php">Deconnexion</a></li>
                </ul>

                <?php } else { ?> 
                <ul class="navbar-nav d-flex flex-row" id="connexion_inscription">
                    <li class="nav-item p-2"><a class="nav-link" href="../connexion.php">Connexion</a></li>
                    <li class="nav-item p-2"><a class="nav-link" href="../inscription.php">Inscription</a></li>
                </ul>
                <?php } ?>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sweat/catalogue.php">Sweat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../tshirt/catalogue.php">T-shirt</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="../baskets/catalogue.php">Baskets</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="../homme/catalogue.php">Homme</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="./catalogue.php">Femme</a>
                        </li>                
                    </ul>
                </div>
            </nav>
        </header>

        <img src="../img/banniere/banniere_women.jpg" alt="Banniere Femme" style="width:100%">

        <div class="container">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <img src="../img/produit/women/01/tenue_complete_women_front.jpg" class="card-img-top" alt="Tenue complète femme yoga">

                    <div class="card-body">
                        <p class="card-text">Cette tenue de yoga est une véritable seconde peau respirante.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="#" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <img src="../img/produit/women/02/tenue_complete_women_front.jpg" class="card-img-top" alt="Tenue complète femme fitness">

                    <div class="card-body">
                        <p class="card-text">Un indispensable de votre vestiaire fitness.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="#" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">
                    <img src="../img/produit/women/03/tenue_complete_women_front.jpg" class="card-img-top" alt="Tenue complète femme football">

                    <div class="card-body">
                        <p class="card-text">Tenue de football.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="#" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <img src="../img/produit/women/04/tenue_complete_women_front.jpg" class="card-img-top" alt="Tenue complète femme tennis">

                    <div class="card-body">
                        <p class="card-text">Tenue aussi bien adapté à la pratique du tennis que du badminton.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="#" role="button">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include "../include/footer.inc.html";
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>