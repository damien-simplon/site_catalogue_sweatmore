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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <h2>SweatMore</h2>

            <?php if (isset($_SESSION['user-id'])){ ?>
            <ul class="navbar-nav d-flex flex-row" id="connexion_inscription">
                <li class="nav-item p-2"><a class="nav-link" href="../compte.php">Mon compte</a></li>
                <li class="nav-item p-2"><a class="nav-link" href="../deconnexion.php">Deconnexion</a></li>
            </ul>

            <?php } else { ?> 
            <ul class="navbar-nav d-flex flex-row" id="connexion_inscription">
                <li class="nav-item p-2"><a class="nav-link" href="../connexion.php">Connexion</a></li>
                <li class="nav-item p-2"><a class="nav-link" href="../inscription.php">Inscription</a></li>
            </ul>
            <?php } ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sweat/catalogue.php">Sweat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tshirt/catalogue.php">T-shirt</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link" href="./catalogue.php">Baskets</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link" href="../homme/catalogue.php">Homme</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link" href="../femme/catalogue.php">Femme</a>
                    </li>                
                </ul>
            </div>
        </nav>
    </header>

    <img src="../img/banniere/banniere_tshirt.jpg" alt="Banniere T-Shirt" style="width:100%">

    <div id="produit_image_main"></div>

    <div id="produit_image">

      <div class="produit_image_miniature">
        <img src="../img/produit/t-shirt/02/tshirt_front.jpg" class="img-thumbnail" alt="T-Shirt front">
      </div>

      <div class="produit_image_miniature">
        <img src="../img/produit/t-shirt/02/tshirt_back.jpg" class="img-thumbnail" alt="T-Shirt back">
      </div>

      <div class="produit_image_miniature">
        <img src="../img/produit/t-shirt/02/tshirt_mvmt.jpg" class="img-thumbnail" alt="T-Shirt mouvement">
      </div>

    </div>

    <div id="produit_description">
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
    </div>



    <?php
        include "../include/footer.inc.html";
    ?>

    <script type="text/javascript" src="../js/produit.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>