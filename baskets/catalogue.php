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
        <div class="container">
            <div class="row">
                <img src="../img/banniere/banniere_baskets.jpg" alt="Banniere Baskets" style="width:100% ; margin:10px">
            </div>
        </div>

        <div class="container container-catalogue">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">
                
                    <a href="article_1.php"><img src="../img/produit/baskets/01/front_cat.jpg" class="card-img-top" alt="Basket de Running"></a>

                    <div class="card-body">
                        <p class="card-text">Cette chaussure est faite pour défier vos chronos que ce soit en entraînement fractionné, ou le jour de la compétition.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_1.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_2.php"><img src="../img/produit/baskets/02/front_cat.jpg" class="card-img-top" alt="Basket de Basket-Ball"></a>

                    <div class="card-body">
                        <p class="card-text">Cette chaussure de Basketball tige basse a été développé pour vous offrir un maximum d'adhérence.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_2.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_3.php"><img src="../img/produit/baskets/03/front_cat.jpg" class="card-img-top" alt="Basket de Futsal"></a>

                    <div class="card-body">
                        <p class="card-text">Vous recherchez une chaussure légère et flexible pour jouer au futsal ?</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_3.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_4.php"><img src="../img/produit/baskets/04/front_cat.jpg" class="card-img-top" alt="Basket de Marche sportive"></a>

                    <div class="card-body">
                        <p class="card-text">Alix, ingénieure produit, a développé cette chaussure pour vos sorties occasionnelles de marche sportive.</p>
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