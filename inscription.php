<?php

    include 'include/head.inc.html';

    echo'
        <div class="container">
            <h3 class="text-center">Bonjour</h3>
            <div class="text-center">
               <button type="submit" name="connexion" class="btn btn-success">Se connecter</button>
            </div></br>

                <h3 class="text-center">Créer un nouveau compte</h3>

            <form action="treatment.php" method="post">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required />
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required />
                </div>
                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="date" name="date_de_naissance" class="form-control" id="date_de_naissance" min="1900-01-01" max="2020-01-01" required />
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email@gmail.com" required />
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe" required />
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    </br>
                    <div class="sexe">
                        <label for="femme">Femme
                        <input type="radio" name="sexe" id="femme" value="femme" checked/></label>
                        <label for="homme">Homme
                        <input type="radio" name="sexe" id="homme" value="homme" /></label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit_new_account" class="btn btn-success">Valider</button>
                </div>
            </form>

            <div class="dropdown-divider"></div>

        </div>';

?>