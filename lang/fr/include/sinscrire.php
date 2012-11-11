<?php
echo '<h1>Inscription sur Ellàs War</h1>';

$paquet->display();

echo '<p>En vous inscrivant, vous acceptez le règlement du jeu. Nous vous conseillons de ne pas utiliser de caractères spéciaux dans vos pseudos et de ne pas utiliser d\'adresse hotmail/msn.<br/>Nous vous rappellons que l\'utilisation de plusieurs comptes par une même personne est strictement interdite.</p>';

echo '<form method="post" action="#">';

if(!empty($_SESSION['parrain'])) {
	echo '
				<div class="ligne centrer erreur">'.$_SESSION['parrain']->login.' vous parraine pour votre inscription sur Ellàs War</div>';
}
echo '<div id="gauche_inscription">
			<div id="pseudo_inscription" class="text_large_deco"><span class="rouge_goco">P</span>seudo :</div>

			<div id="mail_inscription" class="text_large_deco"><span class="rouge_goco">A</span>dresse E-mail :</div>

			<div id="pass_inscription" class="text_large_deco"><span class="rouge_goco">M</span>ot de passe :</div>

			<div id="pass_inscription3" class="text_large_deco"><span class="rouge_goco">V</span>érification du mot de passe :</div>
		</div>
		<div id="droite_inscription">
			<div id="pseudo_inscription2"><input type="text" name="pseudo" class="form_inscription" required="required" /></div>

			<div id="mail_inscription2"><input type="email" name="mail" class="form_inscription" required="required" /></div>

			<div id="pass_inscription2"><input type="password" name="pass" class="form_inscription" required="required" /></div>

			<div id="pass_inscription4"><input type="password" name="pass2" class="form_inscription" required="required" /></div>
		</div>
		<div id="contact_valider"><div class="bouton_classique"><input class="bouton_classique2" type="submit" value="Valider" name="Inscription" /></div></div>
		</form>
	<div class="centrer"><img src="images/inscription.png" alt="S\'inscrire" title="S\'inscrire" /></div>';
?>