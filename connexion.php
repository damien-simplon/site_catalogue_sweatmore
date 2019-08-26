<?php

    include "include/head.inc.html";

?>

    <div class="container">
        <section>
        <h1>Connectez-vous</h1>
        <p>Bienvenue sur SweatMore</p>

        <form>
            <form action="verification.php" method="POST">
            <br>
            <div id="email">
                <label><p>Adresse email</p></label>
                <input type="text" placeholder="Entrez votre adresse mail" name="mail" required>
            </div>
            <br>
            <div id="mdp">
                <label><p>Mot de passe</p></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>
            </div>
            <br>
            <br>
            <div id="connectBtn">
                    <input type="submit"  id='submit' value="SE CONNECTER">
            </div>

            <p>______________________________</p>
            <p>Nouveau client?</p>
            <div id="creationCompte">
                    <input type="submit"  id='submit' value="Créer un compte">
            </div>
        </form>
        </section>
    </div>