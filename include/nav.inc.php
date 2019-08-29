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
                        <?php if (isset($_SESSION['user-id'])){ ?>
                            <li class="nav-item connexion_inscription_menu"><a class="nav-link" href="./compte.php">Mon compte</a></li>
                            <li class="nav-item connexion_inscription_menu"><a class="nav-link" href="./deconnexion.php">Deconnexion</a></li>

                        <?php } else { ?> 
                            <li class="nav-item connexion_inscription_menu"><a class="nav-link" href="./connexion.php">Connexion</a></li>
                            <li class="nav-item connexion_inscription_menu"><a class="nav-link" href="./inscription.php">Inscription</a></li>
                <?php } ?>           
                    </ul>
                </div>
            </nav>
        </header>
        <script type="text/javascript" src="./js/nav.js"></script>