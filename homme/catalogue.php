<?php
  session_start();
  include '../include/bdd.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4afe80f74f.js"></script>

    </head>

    <body>

        <header class="container-fluid">

            <?php include "../include/nav.produit.inc.php";?>

        </header>

        <img src="../img/banniere/banniere_men.jpg" alt="Banniere Homme" style="width:100%">

        <div class="container container-catalogue">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_1.php"><img src="../img/produit/men/01/tenue_complete_men_front.jpg" class="card-img-top" alt="Tenue complète homme running"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue de running qui vous apporte un confort thermique idéal lors de vos sorties.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_1.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_2.php"><img src="../img/produit/men/02/tenue_complete_men_front.jpg" class="card-img-top" alt="Tenue complète homme velo"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue de vélo homme qui vous offre une bonne évacuation de la transpiration</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_2.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_3.php"><img src="../img/produit/men/03/tenue_complete_men_front.jpg" class="card-img-top" alt="Tenue complète homme volley-ball"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue très légere, qui accompagne vos mouvements de beach-volley</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_3.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_4.php"><img src="../img/produit/men/04/tenue_complete_men_front.jpg" class="card-img-top" alt="Tenue complète homme"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue en matière respirante avec élasticité</p>
                    </div>
                    
                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_4.php" role="button">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include "../include/footer.inc.html";
        ?>
    </body>
</html>