<?php

if(sizeof($liste_attente) > 0) {
	echo '﻿<h1>Membres en attente</h1><br/>';

	echo '<div id="affichage_erreur"></div>';

	echo'<table class="centrer_tableau">';
	foreach($liste_attente as $do) {
		echo '
		<tr id="cadre_recrutement_'.$do->id.'">
		<td>&nbsp;&nbsp;
		<a href="profilsjoueur-'.$do->id.'" class="centre_armee"><b>'.ucfirst($do->login).'</b></a>&nbsp;
		';
		if($paquet->peut_accepter_joueur()) {
			echo '<a onclick="javascript:recruter('.$do->id.', \'oui\');" class="supr_messagerie">'.img('images/joueurs/adept_reinstall.png', 'Accepter').'</a>
		&nbsp;
		<a onclick="javascript:recruter('.$do->id.', \'non\');" class="supr_messagerie">'.img('images/joueurs/agt_uninstall-product.png', 'Refuser').'</a>';
		}
		echo '</td>
		<td rowspan="2" align="left">&nbsp;'.stripslashes($do->motivations).'&nbsp;</td>
		</tr>
		<tr id="cadre_recrutement2_'.$do->id.'">
		<td>&nbsp; Niveau : '.$do->lvl.'<br/>
				&nbsp; Victoires : '.$do->victoires.'<br/>
				&nbsp; Défaites : '.$do->defaites.'&nbsp;
		</td></tr>';
			}
		echo '</table>';
}
else {
	$paquet->display(103);
}

if($paquet->peut_recrutement() > 0) {
	if(empty($info->statu_rec)) {
		echo '<br/><br/>
		<div id="fermer_recrutement" class="supr_messagerie erreur ligne centrer" onclick="javascript:changer_recrutement();">
		Fermer le recrutement
		</div>';
	}
	else {
		echo '<br/><br/>
		<div id="fermer_recrutement" class="supr_messagerie erreur ligne centrer" onclick="javascript:changer_recrutement();">
		Ouvrir le recrutement
		</div>';
	}
}

?>