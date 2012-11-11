<?php

$tp = time() - 2*30*24*3600;

if(sizeof($liste_pactes) > 0) {
	echo'<center>
	<h1>Pactes</h1>
	<br/>Signer un pacte vous coutera '.nbf(250000).' '.imress('drachme');
	
	if(!empty($erreur))
			echo '<div class="ligne interdit">'.erreur($erreur).'</div>';

	echo'<br/><br/><table><tr class=\'titre_tab\'> <td>&nbsp;Nom&nbsp;</td>
<td>&nbsp;Chef&nbsp;</td>
<td>&nbsp;Signature&nbsp;</td>';

	if($paquet->peut_pacte() > 0)
		echo '<td>&nbsp;Action(s)&nbsp;</td></tr>';
	else
		echo '</tr>';
	if(!empty($liste_pactes)) {
	foreach($liste_pactes as $do) {
		if(empty($do->date))
			$signature = 'En cours';
		else
			$signature = date('d/m/y', $do->date);

		if($do->alliance1_id == $paquet->getalliance()) {
			echo '<tr>
	<td>&nbsp;<a href=\'profilsalliance-'.$do->alliance2_id.'\'>'.stripslashes($do->alliance2_nom).'</a>&nbsp;</td>
	<td>&nbsp;<a href=\'profilsjoueur-'.$do->alliance2_idchef.'\'>'.$do->alliance2_chef.'</a>&nbsp;</td>
	<td>&nbsp;'.$signature.'&nbsp;</td>';
			if(empty($do->date))
			{
				if($paquet->peut_pacte() > 0)
				{
					echo '<td>&nbsp;<a href="javascript:gestion_pacte('.$do->id.', \'signer\');">Signer</a>&nbsp;
										&nbsp;<a href="javascript:gestion_pacte('.$do->id.', \'refuser\');">Refuser</a>&nbsp;</td></tr>';
				}
				else
					echo '<td>&nbsp;&nbsp;</td></tr>';
			}
			else
			{
				if($paquet->peut_pacte() > 0) {
					echo '<td>&nbsp;<a href="javascript:gestion_pacte('.$do->id.', \'briser\');">Annuler</a>&nbsp; ';
				
					if(sizeof($liste_fusion) == 0 && $paquet->getid() == $do->alliance1_idchef && ($tp > $do->date)) {
						echo '<a href="javascript:demander_fusion('.$do->id.');">Demander une fusion</a>';
					}
				
					echo '&nbsp;</td></tr>';
				}
				else {
					echo '<td>&nbsp;&nbsp;</td></tr>';
				}
			}
		}
		else
		{
			echo '<tr><td>&nbsp;<a href=\'profilsalliance-'.$do->alliance1_id.'\'>'.stripslashes($do->alliance1_nom).'</a>&nbsp;</td>
	<td>&nbsp;<a href=\'profilsjoueur-'.$do->alliance1_idchef.'\'>'.$do->alliance1_chef.'</a>&nbsp;</td>
	<td>&nbsp;'.$signature.'&nbsp;</td>';
			if(empty($do->date))
			{
				if($paquet->peut_pacte() > 0)
					echo '<td>&nbsp;<a href="javascript:gestion_pacte('.$do->id.', \'annuler\');">Annuler</a>&nbsp;</td></tr>';
				else
					echo '<td>&nbsp;&nbsp;</td></tr>';
			}
			else
			{
				if($paquet->peut_pacte() > 0) {
					echo '<td>&nbsp;<a href="javascript:gestion_pacte('.$do->id.', \'briser\');">Annuler</a>&nbsp;';

					if(sizeof($liste_fusion) == 0 && $paquet->getid() == $do->alliance2_idchef && ($tp > $do->date)) {
						echo '<a href="javascript:demander_fusion('.$do->id.');">Demander une fusion</a>';
					}
				
					echo '&nbsp;</td></tr>';
				}
				else {
					echo '<td>&nbsp;&nbsp;</td></tr>';
				}
			}
		}
	}
	}
	echo '</table><br/><br/>';
	
	if(!empty($liste_fusion) && sizeof($liste_fusion) > 0) {
		foreach($liste_fusion as $k => $demande) {
			echo '<div class="ligne erreur">Demande de fusion avec '.$demande['nom'].' (<a href="javascript:annuler_fusion('.$demande['destination'].');">Annuler</a>)</div>';
		}
	}
	
	if(!empty($liste_fusion2) && sizeof($liste_fusion2) > 0) {
		foreach($liste_fusion2 as $k => $demande) {
			echo '<div class="ligne erreur">Demande de fusion de l\'alliance '.$demande['nom'].' (<a>Accepter</a> - <a href="javascript:annuler_fusion('.$demande['source'].');">Refuser)</a></div>';
		}
	}
	
}
else {
	echo '<div class="ligne erreur centrer"><h2>Vous n\'avez aucun pacte en cours</h2></div>';
}

?>
