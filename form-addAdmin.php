<?php

    // CREATION D'UNE SESSION
    session_start();
    
    include 'include/bdd.inc.php';
		
?>
 
<!DOCTYPE html>
<html>


<!--  INCLUSION DU HEAD -->
<?php     include 'include/head.inc.html'; ?>

    <body>
 
    <!-- INCLUSION DU HEADER -->
<?php  include 'include/nav.inc.php'; ?>
 
    <div class="container-fluid">
        <div class="row">



<div class="offset-md-3 col-md-6">
    <section>
       
       <h2>Formulaire d'ajout de produit</h2>

        <form method="POST" action="treatment.php">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Renseignez le nom de l'article">
            </div>

            <div class="form-group">
                <label for="descri">Description</label>
                <input type="text" class="form-control" id="descri" name="descri" placeholder="Renseignez la description de l'article">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image"/>
            </div>

            <div class="form-group">
            <label for="cat">Categorie : </label>
                <select name="cat" id="cat" class="form-control">
                    <option value="sweat">Sweat</option>
                    <option value="tshirt">Tshirt</option>
                    <option value="basket">Baskets</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </div>


            <div class="text-right">
                <button type="submit" class="btn btn-primary" name="formaddadmin">Enregistrer les données</button>
            </div>

        </form>

        </section>
        </div>

        </div>
    </div>
    
    <!-- INCLUSION DU FOOTER -->
<?php include 'include/footer.inc.html'; ?>
 
    </body>
</html>