<?php 
        include 'include/head.inc.html';
?>


<div id="formBanniere">
        <form>
                <div id="form">
                <h2>SweatMore</h2>
                        <span class="contact">Contactez-nous</span>

                        <div id="insertForm"></div>

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
			</form>

			<span class="contactMore">
				Pour toute question, veuillez vous adresser à notre centre d'appel :<span class="contact100-more-highlight"> +33 345 6889</span>
			</span>
		
	</div>
                        </div>

                </div>
        </form>
</div>
