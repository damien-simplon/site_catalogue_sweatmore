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
                <img src="../img/banniere/banniere_sweat.jpg" class="banniere" alt="Banniere Sweat" style="width:100% ; margin:10px">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_1.php"><img src="../img/produit/sweat/01/front_cat.jpg" class="card-img-top" alt="Sweat escalade"></a>

                    <div class="card-body">
                        <p class="card-text">Le temps d'assurage et le temps de repos n'a jamais été aussi confortable !</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_1.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_2.php"><img src="../img/produit/sweat/02/front_cat.jpg" class="card-img-top" alt="Sweat escalade"></a>

                    <div class="card-body">
                        <p class="card-text">Polaire pour la grimpeuse cherchant un vêtement douillet et confortable pour assurer aux pieds des voies.</p>
                    </div>
                    
                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_2.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_3.php"><img src="../img/produit/sweat/03/front_cat.jpg" class="card-img-top" alt="Sweat yoga"></a>

                    <div class="card-body">
                        <p class="card-text">Ce sweat chaud et doux vous procurera une sensation de bien-être avant et après votre séance.</p>
                    </div>

                    <div class="text-right">
                        <a class="btn btn-primary btn-voirplus" href="article_3.php" role="button">Voir plus</a>
                    </div>
                </div>

                <div class="card col-lg-3 col-md-3 col-sm-6" style="margin-top:10px;">

                    <a href="article_4.php"><img src="../img/produit/sweat/04/front_cat.jpg" class="card-img-top" alt="Sweat rugby"></a>

                    <div class="card-body">
                        <p class="card-text">Confortable et chaud grâce à son composant molletonné, il vous accompagnera partout sur et en dehors des terrains de rugby.</p>
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