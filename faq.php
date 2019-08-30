<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>
        FAQ - SWEATMORE.FR
        </title>
    </head>

    <body>
    <?php include "./include/nav.inc.php"; ?>
        
    <!-- la page concernée, faire ressortir l'onglet -->
    <div class="containerNavFaq">
        <h3>Informations légales</h3>
        
        <div class="list-footer-faq">
            <ul id="list-lien-footer-faq">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>

    
    <div id="containerClicFaq">
                    
        <div id="pageClic">
        <div class="pageClicFaq">
        
            <h2>Vos questions...<br>...Nos réponses.</h2><br>
                
                <button><h3>Comment fonctionne un retour magasin?</h3></button>
                <p>Le processus de remboursement est en cours de finalisation.</p>
                <button><h3>Ai-je les mêmes avantages clients que mon propre client?</h3></button>
                <p> Nous vendons nos articles en général 30% moins cher que vos ventes clients.</a></p>
                <button><h3>Stockez-vous mes coordonnées bancaires?</h3></button>
                <p>Non, elles sont chez un prestataire bancaire certifié et sécurisé.</p>
            
        </div>
        </div>
    </div>
      
    <?php include "./include/footer.inc.html"; ?>

    <div id="popup_bienvenue">
        <form action="treatment.php" method="POST">
            <br>
            <div class="form-group">
                <label for="email">SweatMore, magasin de détail pour entreprise.</label><br>
            </div>
        </form>
        <i class="fa fa-window-close-o" aria-hidden="true"></i>
    </div>

    
</body>
</html>