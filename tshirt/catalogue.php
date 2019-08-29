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

        <img src="../img/banniere/banniere_tshirt.jpg" alt="Banniere T-shirt" style="width:100%">

        <div class="container">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_1.php"><img src="../img/produit/t-shirt/01/tshirt_front.jpg" class="card-img-top" alt="T-shirt de randonné"></a>

                    <div class="card-body">
                        <p class="card-text">Vous aimez évoluer rapidement et sans contrainte en montagne ?</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_1.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_2.php"><img src="../img/produit/t-shirt/02/tshirt_front.jpg" class="card-img-top" alt="T-shirt de Crosstraining"></a>

                    <div class="card-body">
                        <p class="card-text">T-shirt de Crosstraining ultra léger et résistant.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_2.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_3.php"><img src="../img/produit/t-shirt/03/tshirt_front.jpg" class="card-img-top" alt="T-shirt de fitgirls"></a>

                    <div class="card-body">
                        <p class="card-text">Ce t-shirt en polyester aura un succès inévitable auprès des fitgirls avec sa forme loose.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_3.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_4.php"><img src="../img/produit/t-shirt/04/tshirt_front.jpg" class="card-img-top" alt="T-shirt de badminton"></a>

                    <div class="card-body">
                        <p class="card-text">T-shirt 1er prix conçu pour le badminton, confortable et léger.</p>
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

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>