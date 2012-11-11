<?php

echo '<div id=\'menu_affaires\' class="gauche">
<h1>Stocks</h1><br/>
<table>
<tr><td>'.imress('drachme').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->drachme), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('nourriture').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->nourriture), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('eau').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->eau), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('bois').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->bois), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('fer').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->fer), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('argent').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->argent), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('pierre').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->pierre), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('marbre').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->marbre), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('raisin').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->raisin), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('vin').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->vin), 0, ',', ' ').'</td></tr>
<tr><td>'.imress('or').' </td>
<td class="droite"> '.number_format(floor($mon_alliance->gold), 0, ',', ' ').'</td></tr>
</table>
</div>
<div id=\'corps_affaires\'><center>';

echo '<h1>Demander</h1><br/>
<form action=\'Coffre\' method=\'post\' >
<input type=\'text\' name=\'qtt\' class="form_retirer" required="required"> 
<select name=\'choix\' class="form_retirer" >
    <option value=\'drachme\'>Drachmes</option>';

	if($mon_alliance->level >= 2)
		echo '<option value=\'nourriture\'>Nourriture</option>
	<option value=\'eau\'>Eau</option>
	<option value=\'bois\'>Bois</option>
	<option value=\'fer\'>Fer</option>
	<option value=\'argent\'>Argent</option>
	<option value=\'pierre\'>Pierre</option>
	<option value=\'marbre\'>Marbre</option>
	<option value=\'raisin\'>Raisin</option>
	<option value=\'vin\'>Vin</option>
	<option value=\'gold\'>Or</option>';
	
	echo '</select>
	<br/><br/>
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" name=\'Demander\' value=\'Demander\'/></div>
	</form>';

	if($paquet->peut_accepter() > 0) {
		$liste_demandes = $paquet->getRetour(3);

		if(sizeof($liste_demandes) > 0) {
			echo '<br/><br/><b>Demandes en cours : </b>';
			foreach($liste_demandes as $de) {
				echo '<div id="cadre_demande_'.$de->id.'">
				'.number_format($de->nombre, 0, ',', ' ').' '.imress($de->type).' par '.$de->login.' le '.date('d/m/y', $de->date_d);

				if($de->demande != $paquet->getid()) {
					echo ' <a href="javascript:accepter_demande('.$de->id.', 1);">'.img('images/joueurs/adept_reinstall.png', 'Accepter').'</a>
									<a href="javascript:accepter_demande('.$de->id.', 2);">'.img('images/joueurs/agt_uninstall-product.png', 'Refuser').'</a>';
				}
				else {
					echo ' <a href="javascript:accepter_demande('.$de->id.', 3);">'.img('images/joueurs/agt_uninstall-product.png', 'Annuler').'</a>';
				}
				echo '</div>';
			}
		}
	}
	
	$liste_demande_moi = $paquet->getRetour(2);

	if(!empty($liste_demande_moi) && sizeof($liste_demande_moi) > 0)	{
		echo '<br/><br/><b>Mes demandes en cours : </b>';
	
		foreach($liste_demande_moi as $cc => $de)
		{
			echo '<br/>'.number_format($de->nombre, 0, ',', ' ').' '.imress($de->type).' le '.date('d/m/y', $de->date_d). ' <a href="javascript:accepter_demande('.$de->id.', 3);">'.img('images/joueurs/agt_uninstall-product.png', 'Annuler').'</a>';
		}
	}
?></div>