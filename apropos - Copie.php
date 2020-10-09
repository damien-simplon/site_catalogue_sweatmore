<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>SweatMore | A propos</title>
        <meta name="description" content="A propos du site SweatMore">
    </head>

    <body>
    <header>
    <?php include "./include/nav.inc.php"; ?>
    </header>


    <div class="pageApropos">
        <!-- la page concernée, faire ressortir l'onglet -->
        <div class="containerNavApropos">
            <h3>Informations légales</h3>
            
            <div class="list-footer-apropos">
                <ul id="list-lien-footer-apropos">
                <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
                <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
                <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
                <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
                <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
                </ul>
            </div>
        </div>
                    </div>

        <div class="pageClicApropos">
            <h2>Qui sommes-nous?</h2>
                <p>SweatMore, entreprise leader sur le marché du sport, regroupe deux activités :
                    la création de produits sportifs et leur distribution en ligne et en magasins.</p><br>
                <p>Basé sur un modèle intégré, Decathlon maîtrise toutes les étapes de vie de ses produits :
                de la recherche et développement à la vente en passant par la conception, la production, et la logistique. 
                Présente en France et à l’international avec plus de mille points de vente, les équipes des services, marques et magasins travaillent depuis 1976 avec une ambition constante:
                innover dans tous les domaines pour rester le principal partenaire de jeu de tous les sportifs.</p>
               <button id="afficher_cacher1"> <a href="#"><p id="1">voir plus..</p><a></button><br>
        
                <div id="contactPageClicApropos">
                    <p id="p1"> <i class="fa fa-phone" aria-hidden="true"> Nous sommes joignable au:  0969 368 369<br>
                    (N° Cristal, prix d'un appel local depuis un téléphone fixe), <br>du lundi au samedi de 9h à 20h. -</i><br>
                    <br>Adresse <br> SWEATMORE SAS  Service Relation Clients<br> - 4 boulevard de Mons, 59650 Villeneuve d’Ascq</p>
                </div>
        </div>
    </div>
      
    <?php include "./include/footer.inc.html"; ?>
    
</body>
</html>