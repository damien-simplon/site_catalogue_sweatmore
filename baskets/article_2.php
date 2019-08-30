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
  <?php
      include "../include/dernierArticle.inc.php";
    ?>

    <header class="container-fluid">

        <?php include "../include/nav.produit.inc.php";?>
        
    </header>

    <img src="../img/banniere/banniere_baskets.jpg" alt="Banniere Baskets" style="width:100%">

    <div id="produit_image_main"></div>

    <div id="produit_image">

      <div class="produit_image_miniature">
        <img src="../img/produit/baskets/02/basket_cote.jpg" class="img-thumbnail" alt="Basket côté">
      </div>

      <div class="produit_image_miniature">
        <img src="../img/produit/baskets/02/basket_dessus.jpg" class="img-thumbnail" alt="Basket dessus">
      </div>

      <div class="produit_image_miniature">
        <img src="../img/produit/baskets/02/basket_mvmt.jpg" class="img-thumbnail" alt="Basket mouvement">
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