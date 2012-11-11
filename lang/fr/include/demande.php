<?php

if(!empty($demande) && sizeof($demande)) {
	echo '<h1>Demandes en cours</h1><table class="centrer_tableau">';
	
	foreach($demande as $d) {
		echo '<tr>
<td>'.$d->login.'</td>
<td>'.$d->qtt.'</td>
<td>'.imress($d->ress).'</td>
<td>'.print_date($d->date_demande).'</td>
<td>';

if($d->joueur == $paquet->getid() or $paquet->getid() == $paquet->getidchef()) {
echo '<a href="Demande-'.$d->id.'"><img src="images/attaques/cross.png" alt="Annuler" title="Annuler"/></a>';
	}

echo '</td>
</tr>';
	}
	echo '</table><br/>';
}

if(!empty($offre) && sizeof($offre)) {
	echo '<h1>Propositions en cours</h1><table class="centrer_tableau">';
	
	foreach($offre as $d) {
		echo '<tr>
<td>'.$d->login.'</td>
<td>'.$d->qtt.'</td>
<td>'.imress($d->ress).'</td>
<td>'.print_date($d->date_demande).'</td>
<td>';

if($d->joueur == $paquet->getid() or $paquet->getid() == $paquet->getidchef()) {
echo '<a href="Demande-'.$d->id.'"><img src="images/attaques/cross.png" alt="Annuler" title="Annuler"/></a>';
	}

echo '</td>
</tr>';
	}
	echo '</table><br/>';
}

echo '<div class="centrer"><h1>Demander/Proposer</h1><br/>
<form action=\'Demande\' method=\'post\' >
<select name=\'type\' class="form_retirer" >
    <option value=\'demande\'>Demander</option>
		<option value=\'offrir\'>Offrir</option>
</select>
<input type=\'text\' name=\'qtt\' class="form_retirer" required="required" /> 
<select name=\'choix\' class="form_retirer" >
    <option value=\'drachme\'>Drachmes</option>
		<option value=\'nourriture\'>Nourriture</option>
		<option value=\'eau\'>Eau</option>
		<option value=\'bois\'>Bois</option>
		<option value=\'fer\'>Fer</option>
		<option value=\'argent\'>Argent</option>
		<option value=\'pierre\'>Pierre</option>
		<option value=\'marbre\'>Marbre</option>
		<option value=\'raisin\'>Raisin</option>
		<option value=\'vin\'>Vin</option>
		<option value=\'gold\'>Or</option>
</select>
<br/><br/>
<div class="bouton_classique"><input class="bouton_classique2" type="submit" name=\'Demander\' value=\'Demander\'/></div>
</form></div>';
	
?>