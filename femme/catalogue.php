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
                <img src="../img/banniere/banniere_women.jpg" alt="Banniere Femme" style="width:100% ; margin:10px">
            </div>
        </div>
        
        <div class="container container-catalogue">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_1.php"><img src="../img/produit/femme/01/front_cat.jpg" class="card-img-top" alt="Tenue complète femme yoga"></a>

                    <div class="card-body">
                        <p class="card-text">Cette tenue de yoga est une véritable seconde peau respirante.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_1.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_2.php"><img src="../img/produit/femme/02/front_cat.jpg" class="card-img-top" alt="Tenue complète femme fitness"></a>

                    <div class="card-body">
                        <p class="card-text">Un indispensable de votre vestiaire fitness.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_2.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_3.php"><img src="../img/produit/femme/03/front_cat.jpg" class="card-img-top" alt="Tenue complète femme football"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue de football.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_3.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_4.php"><img src="../img/produit/femme/04/front_cat.jpg" class="card-img-top" alt="Tenue complète femme tennis"></a>

                    <div class="card-body">
                        <p class="card-text">Tenue aussi bien adapté à la pratique du tennis que du badminton.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_4.php" role="button">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include "../include/footer.produit.inc.html";
        ?>
    </body>
</html>