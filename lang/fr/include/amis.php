<?php

if($taille > 0) {
	echo '<h1>Mes amis</h1>
			<br/><br/><table class="centrer_tableau">
				';
	$i = 0;
	foreach($liste as $do) {
		
		if($i%$npl == 0) {
			echo '<tr>';
		}
		
		if(!empty($do->timestamp))
			$image='<img src="images/mb_connecter.png" alt="Joueur Connecté" />';
		else
			$image='<img src="images/mb_deconnecter.png" alt="Joueur Déconnecté\" />';
		
		echo '
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$image.' &nbsp;  <a href=\'profilsjoueur-'.$do->id.'\'>'.$do->login.'</a>&nbsp;</td>
<td>&nbsp;<a href="messagerie&action=Nouveaumessage-'.$do->id.'">'.img('images/joueurs/ecrire_mp.png', 'Écrire').'</a> <a href="Amis-'.$do->id.'-supprimer">'.img('images/joueurs/supprimer_mp.png', 'Supprimer').'</a>&nbsp;</td>';
		$i++;
		if($i%$npl == 0) {
			echo '</tr>';
		}
	}
	
	if($i > 0 && $i < $npl) {
		for($i;$i<=$npl;$i++) {
			echo '<td></td>';
		}
		echo '</tr>';
	}
	
	echo '</table>';
}
else {
	echo '<h2 class="centrer">Votre liste d\'amis est vide</h2>';
}

?>