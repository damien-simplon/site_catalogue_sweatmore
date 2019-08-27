<?php

session_start();
    include "include/head.inc.html";

?>
    <div class="header-login">
        <a href="index.php" class="logo">
            <img class="Logo" src="./img/logo.png" alt="SweatMore"> 
        </a>
    </div>

    <div class="container">
        <section>
        <h1>Connectez-vous</h1>
        <p>Bienvenue sur SweatMore</p>

            <form action="treatment.php" method="POST">
            <br>
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="mail" placeholder="Entrez votre adresse mail" name="email" required>
            </div>
            <br>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" placeholder="Entrez votre mot de passe" name="mdp" required>
            </div>
            <br>
            <br>
            <div id="connectBtn">
                <button type="submit" name="submit_connection" class="btn btn-success">Se connecter</button>
            </div>

            <p>______________________________</p>
            <p>Nouveau client?</p>
            <div id="creationCompte">
                    <input type="submit"  id='submit' value="Créer un compte">
            </div>
        </form>
        </section>
    </div>
