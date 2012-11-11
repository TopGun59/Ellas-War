<?php

if(sizeof($liste) == 0) {
	echo  '<b>Vous n\'avez aucun filleul à qui vous pouvez donner des ressources</b>';
}
else {

	echo '<div class="centrer">
	<b>Vous pouvez faire un don toutes les 23h à l\'un de vos filleuls, ce don ne peut pas excéder '.nbf($possible).' unités de ressources.</b>
	<br/><br/>';
	$paquet->display();
	
	echo '<form action=\'#\' method=\'post\'>
	<select name=\'joueur\' class="form_retirer">';

	foreach($liste as $joueur) {
		if(!empty($_GET['var1']) && ($_GET['var1'] == $joueur->id)) {
			echo ' <option value=\''.$joueur->id.'\'selected="selected">'.$joueur->login.'</option> ';
		}
		else {
			echo ' <option value=\''.$joueur->id.'\'>'.$joueur->login.'</option> ';
		}
	}
	
	echo '</select>
	<select name="ressource" class="form_retirer">
		<option value="drachme">Drachmes</option>
		<option value="nourriture">Nourriture</option>
		<option value="eau">Eau</option>
		<option value="bois">Bois</option>
		<option value="fer">Fer</option>
		<option value="argent">Argent</option>
	</select>
<input type="text" name="somme" size="18" maxlength="6" class="form_retirer" required="required" placeholder="Quantité de ressources" />
<br/><br/>
<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="envoyer" value="Envoyer" /></div>
</form></div>';
}
?>