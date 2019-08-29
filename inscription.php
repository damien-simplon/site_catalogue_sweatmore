<?php

    include 'include/head.inc.html';
    include "./include/nav.inc.php";

    echo'
        <div class="header-login">
            <a href="index.php" class="logo">
                <img class="Logo" src="./img/logo.png" alt="SweatMore">
            </a>
        </div>
        
        <div class="container">

                <h3 class="text-center">Créer un nouveau compte</h3>

            <form action="treatment.php" method="post">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" />
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom"  />
                </div>
                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="date" name="date_de_naissance" class="form-control" id="date_de_naissance" min="1900-01-01" max="2020-01-01" />
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email@gmail.com" />
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe" />
                </div>
                <div class="form-group">
                    <label for="mdpverifie">Confirmation du mot de passe</label>
                    <input type="password" name="mdpverifie" class="form-control" id="mdpverifie" placeholder="Confirmation du mot de passe" />
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

                <div class="text-right">
                    <button type="submit" name="submit_new_account" class="btn btn-success">Valider</button>
                </div>

                <!-- <div class="text-left">
                    <button onclick="window.location.href="index.php"" class="btn btn-success">Retour à la connexion</button>
                </div> -->
            </form>

            <div class="dropdown-divider"></div>

        </div>';

?>