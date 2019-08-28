<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>
        À propos - SWEATMORE.FR
        </title>
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
                    <li class="nav-item p-2"><a class="nav-link" href="./compte.php">Mon compte</a></li>
                    <li class="nav-item p-2"><a class="nav-link" href="./deconnexion.php">Deconnexion</a></li>
                </ul>

                <?php } else { ?> 
                <ul class="navbar-nav d-flex flex-row" id="connexion_inscription">
                    <li class="nav-item p-2"><a class="nav-link" href="./connexion.php">Connexion</a></li>
                    <li class="nav-item p-2"><a class="nav-link" href="./inscription.php">Inscription</a></li>
                </ul>
                <?php } ?>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sweat/catalogue.php">Sweat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./tshirt/catalogue.php">T-shirt</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="./baskets/catalogue.php">Baskets</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="./homme/catalogue.php">Homme</a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link" href="./femme/catalogue.php">Femme</a>
                        </li>                
                    </ul>
                </div>
            </nav>
        </header>
        
    <!-- la page concernée, faire ressortir l'onglet -->
<div class="pageCgv">
        <div class="containerNavCgv">
        <h3>Informations légales</h3>
        
        <div class="list-footer-cgv">
            <ul id="list-lien-footer-cgv">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>

    <div class="pageClicCgv">
        <h2>CONDITIONS GÉNÉRALES DE VENTE<br>
            <h3>WWW.SWEATMORE.FR - MARS 2017</h3>
                <p>Les présentes conditions sont conclues exclusivement entre la Société SWEATMORE FRANCE,<br>
                    Société par Actions Simplifiée à capital variable, immatriculée au Registre du Commerce 
                    et des Sociétés de Lille Métropole sous le numéro 500 569 405, dont le siège social se situe
                    4 Boulevard de Mons 59650 Villeneuve d'ascq, ci-après dénommée « sweatMore.fr » ou « le Site » 
                    et toute personne
                    effectuant un achat sur le site sweatMore.fr, <br>ci-après dénommé « l'Internaute » et collectivement dénommées " 
                    les Parties ". L'Internaute déclare être majeur ou titulaire d'une autorisation parentale et 
                    disposer de la capacité juridique à contracter lui permettant d'effectuer une commande sur 
                    le présent Site internet. <br>
                    Les Parties conviennent que leurs relations sont régies exclusivement par les présentes conditions générales de vente.
                        Ces conditions peuvent faire l'objet de modifications.<br> Dès lors, il est entendu que 
                    les conditions applicables sont celles en vigueur sur le site au moment de la passation
                    de la commande sur le Site.</p>
            
            <div id="downloadCgv">
            <a href="./doc/cgv.pdf" download="cgv.pdf"><i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
</div>
                </div>
      
    <?php include "./include/footer.inc.html"; ?>


    <script type="text/javascript" src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>