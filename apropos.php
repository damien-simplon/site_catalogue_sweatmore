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
<div class="pageApropos">
    <!-- la page concernée, faire ressortir l'onglet -->
    <div class="containerNavApropos">
        <h3>Informations légales</h3>
        
        <div class="list-footer-apropos">
            <ul id="list-lien-footer-apropos">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>
                </div>

    <div class="pageClicApropos">
        <h2>Qui sommes-nous?</h2>
            <p>SweatMore, entreprise leader sur le marché du sport, regroupe deux activités :
                la création de produits sportifs et leur distribution en ligne et en magasins.</p><br>
            <p>Basé sur un modèle intégré, Decathlon maîtrise toutes les étapes de vie de ses produits :
            de la recherche et développement à la vente en passant par la conception, la production, et la logistique. 
            Présente en France et à l’international avec plus de mille points de vente, les équipes des services, marques et magasins travaillent depuis 1976 avec une ambition constante:
            innover dans tous les domaines pour rester le principal partenaire de jeu de tous les sportifs.</p>
            <a href="#"><p>voir plus..</p><a><br>
           <div id="contactPageClicApropos">
                <p> <i class="fa fa-phone" aria-hidden="true"> Nous sommes joignable au:  0969 368 369<br>
                 (N° Cristal, prix d'un appel local depuis un téléphone fixe), <br>du lundi au samedi de 9h à 20h. -</i><br>
                 <br>Adresse <p> SWEATMORE SAS  Service Relation Clients<br> - 4 boulevard de Mons, 59650 Villeneuve d’Ascq</p>
            </div>
    </div>
      
    <?php include "./include/footer.inc.html"; ?>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>