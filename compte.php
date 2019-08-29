<?php 
session_start();
 include "./include/bdd.inc.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
    </head>

    <body>
        <?php include "./include/nav.inc.php"; ?>

        <div class="container">

        <div class="offset-md-2 col-md-8">

                <?php 

                    // RECUPERATION DES DONNEES
                    $req = $bdd->prepare('SELECT * FROM articles ORDER BY cat');
                    $req->execute();

                ?>


                    <section>

                        <h2> </h2>

                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data=$req->fetch()) {?>
                                <tr>
                                    <td><?= $data['id']?></td>
                                    <td><?= $data['cat']?></td>
                                    <td><?= $data['nom']?></td>
                                    <td><?= $data['descri']?></td>
                                    <td><img src="<?php echo $data['photo'];?>" width="50" style="display: block; margin: 0 auto;"></td>
                                    <td><a href="form-edit.php?edit=<?= $data['id']?>" role="button">Modifier</a></td>
                                    <td><a href="treatment.php?del=<?= $data['id']?>" role="button">Supprimer</a></td>
                                </tr>
                                
                                <?php }?>
                        </table>

                    </section>

                    <a href="form-addAdmin.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un produit</a>
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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>