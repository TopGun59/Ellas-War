<?php

$paquet->display();

echo '<div class="ligne centrer">Vous êtes sur le point de donner des Drachmes à
		un joueur de votre alliance.
		Un joueur ne peut recevoir que '.nbf($possible).' '.imress('drachme').' toutes 
		les 23 heures.<br/><br/></div>';


echo '<div class="ligne centrer"><form action=\'Donner\' method=\'post\'>
<select name=\'joueur\' class="form_retirer">';

foreach($liste_membres as $do) {
	echo ' <option value=\''.$do->id.'\'>'.$do->login.' (Max : '.nbf($possible - $do->don).')</option> ';
}
?>
</select> 
<input type="text" name="somme" size="10" maxlength="6" class="form_retirer" />
<br/><br/>
<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="envoyer" value="Envoyer" /></div>
</form>
<br/>
</div>
<div class="ligne erreur centrer">Nous vous rappelons que les dons se rattachent aux règles des multi-comptes.</div>
