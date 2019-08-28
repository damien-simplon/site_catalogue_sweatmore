<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>
        Mentions légales - SWEATMORE.FR
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
    <div class="containerNavMentions">
        <h3>Informations légales</h3>
        
        <div class="list-footer-mentions">
            <ul id="list-lien-footer-mentions">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>

    <div class="pageClicMentions">
            <h2>Mentions Légales</h2><br>
            <p>Le site SweatMore est édité par la société SweatMore France S.A.S.,
            Société par Actions Simplifiées à capitale variable, dont le siège social
            est situé 4 boulevard de Mons, 59650 Villeneuve d’Ascq et immatriculée
            au Registre du Commerce et des Sociétés de Lille Métropole sous le numéro 500 569 405.</p><br>
            <p>N° TVA Intracommunautaire : FR11500569405<br>
            Numéro de téléphone : 09 69 36 32 10<br>
            Email : contacts@decathlon.com<br>
            Directeur de la publication : Christophe Leclerc</p>

        <ul id="list-mentions-page">
            <button><li><h3>Contact</h3></button>
                <p>Le Centre Relation Clients de SweatMore.fr est joignable :

                    - Par internet : via le lien Contact sur le site www.SweatMore.fr
                    - Par téléphone au 0969 368 369 (N° Cristal, prix d'un appel local depuis un téléphone fixe), du lundi au samedi
                    de 9h à 20h.
                    - Par voie postale : SWEATMORE SAS – Service Relation Clients - 4 boulevard de Mons, 59650 Villeneuve d’Ascq</p>
                </li>
            <button><li><h3>Protection des données personnelles</h3></button>
                <p>Pour consulter notre charte de protection de données personnelles, <a href="#">cliquez ici.</a></p></li>
            <button><li><h3>Propriété intellectuelle</h3></button>
                <p>Le présent site est protégé au titre de la propriété intellectuelle, notamment droits d'auteurs,
                    dessins et modèles, marques, noms de domaine, brevets, savoir-faire, logiciels ou bases de données.
                    Le groupe SWEATMORE SA (OXYLANE GROUP) et/ou ses partenaires reste(nt) propriétaire(s) de l'ensemble de
                    ces contenus et droits associés.
                    Sur ces contenus, OXYLANE GROUP vous accorde une licence limitée, non-exclusive, révocable,
                    sans droit de sous-licencier pour les simples accès, navigation et utilisation liés au présent Site. 
                    Cette licence ne vous accorde aucun autre droit, en particulier d'exploitation commerciale de ces contenus.</p></li>
            <button><li><h3>Nos prix</h3></button>
                <p>SweatMore.fr vous permet de prendre connaissance des prix des produits pratiqués dans les magasins SweatMore situés en France métropolitaine.
                Les prix affichés sont les prix définis par la centrale d'achat de SweatMore,
                il s'agit de prix maximum conseillés, ces prix peuvent donc varier selon la politique commerciale de chaque magasin SweatMore.
                Par ailleurs, l'internaute est informé que les offres de produits et prix proposés à l'achat dans les magasins 
                SweatMore ne sont pas applicables aux achats en ligne sur le site www.SweatMore.fr et inversement.</p></li>
            </ul>
    </div>

        <?php include "./include/footer.inc.html"; ?>

        <script type="text/javascript" src="./js/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>