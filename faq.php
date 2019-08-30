<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>
        FAQ - SWEATMORE.FR
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
    <div class="containerNavFaq">
        <h3>Informations légales</h3>
        
        <div class="list-footer-faq">
            <ul id="list-lien-footer-faq">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>

    
    <div id="containerClicFaq">
                    
        <div id="pageClic">
        <div class="pageClicFaq">
        
            <h2>Vos questions...<br>...Nos réponses.</h2><br>
                
                <button><h3>Comment fonctionne un retour magasin?</h3></button>
                <p>Le processus de remboursement est en cours de finalisation.</p>
                <button><h3>Ai-je les mêmes avantages clients que mon propre client?</h3></button>
                <p> Nous vendons nos articles en général 30% moins cher que vos ventes clients.</a></p>
                <button><h3>Stockez-vous mes coordonnées bancaires?</h3></button>
                <p>Non, elles sont chez un prestataire bancaire certifié et sécurisé.</p>
            
        </div>
        </div>
    </div>
      
    <?php include "./include/footer.inc.html"; ?>

    <div id="popup_bienvenue">
        <form action="treatment.php" method="POST">
            <br>
            <div class="form-group">
                <label for="email">SweatMore, magasin de détail pour entreprise.</label><br>
            </div>
        </form>
        <i class="fa fa-window-close-o" aria-hidden="true"></i>
    </div>

    <script type="text/javascript" src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>