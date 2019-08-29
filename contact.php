<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "./include/head.inc.html"; ?>
        <title>
        Contact - SWEATMORE.FR
        </title>
    </head>

    <body>
    <?php include "./include/nav.inc.php"; ?>
        

		    <!-- la page concernée, faire ressortir l'onglet -->
	<div class="containerNavContact">
    <h3>Informations légales</h3>
        
        <div class="list-footer-contact">
            <ul id="list-lien-footer-contact">
               <button> <li><a href="contact.php" class="lien-footer">Contact</a></li></button> 
               <button>  <li><a href="apropos.php" class="lien-footer">À propos</a></li></button> 
               <button> <li><a href="mentions.php" class="lien-footer">Mentions légales</a></li></button> 
               <button> <li><a href="cgv.php" class="lien-footer">CGV</a></li></button> 
               <button> <li><a href="faq.php" class="lien-footer">Questions fréquentes</a></li><br></button> 
            </ul>
        </div>
    </div>


	<div id="formBanniere"></div>
        <form action="treatment.php" method="post">
		<div id="form">
		<span class="contact">Contactez-nous</span>

			<div id="insertForm">

				<div class="nomEmail" data-validate="Name and Email are required">
					<span class="name">Votre nom</span>
					<input class="name" type="text" name="name" placeholder="Entrez votre nom">
					<span class="focus-input100"></span>
				
					<span class="email">Email</span>
					<input class="input100" type="text" name="email" placeholder="Entrez votre email">
					<span class="focus-input100"></span>
				</div>

				<div class="subject">
						<span class="label-input100">Sujet</span>
						<input class="input100" type="text" name="sujet" placeholder="Entrez votre sujet">
						<span class="focus-input100"></span>
				</div>
                                
				<div id="message">
					<label for="msg">Message :</label>
					<textarea id="msg" name="user_message"></textarea>
				</div>

				<div class="submit">
					<button class="contact100-form-btn">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

				<span class="contactMore">
					Pour toute question, veuillez vous adresser à notre centre d'appel :<span class="contact100-more-highlight"> +33 345 6889</span>
				</span>
			</div>
		</div>
	</form>

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


    <script type="text/javascript" src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>