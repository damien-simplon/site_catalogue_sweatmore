<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
    </head>

    <body>
        <?php include "./include/header.inc.php"; ?>

        <div id="content">
            <div class="container-fluid">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="" class="d-block w-100" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slide/tenue_complete_women_mvmt.jpg" class="d-block w-100" alt="2">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slide/basket_mvmt.jpg" class="d-block w-100" alt="2">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slide/sweat_mvmt.jpg" class="d-block w-100" alt="3">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slide/tenue_complete_men_mvmt.jpg" class="d-block w-100" alt="4">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slide/tshirt_mvmt.jpg" class="d-block w-100" alt="5">
                        </div>
                    </div>
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span class="fa fa-chevron-right text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <?php include "./include/footer.inc.html"; ?>

    <div id="popup_newsletter">
        <form action="treatment.php" method="POST">
            <br>
            <div class="form-group">
                <label for="email">Inscrivez vous à notre newsletter pour être au courant des derniers ajouts !</label><br>
                <input type="mail" placeholder="Entrez votre adresse mail" name="email" required>
                <input type="submit" id='submit' name="inscription_newsletter" value="S'inscrire">
            </div>
        </form>
        <i class="fa fa-window-close-o" aria-hidden="true"></i>
    </div>
    
    <div id="popup_cookie">
        <p>En navigant sur ce site, vous acceptez l’utilisation des cookies.</p>
        <i class="fa fa-window-close-o" aria-hidden="true"></i>
    </div>

        <script type="text/javascript" src="./js/index.js"></script>
    </body>
</html>