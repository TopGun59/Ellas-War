<?php

$txt = array("d" => "a perdu", "v" => "a gagné");

if(!empty($_POST['choix'])) {
	if($_POST['choix'] == 'accepte') {
		echo '<div class="erreur centrer">La guerre vient d\'être annulée</div>';
	}
	else {
		echo '<div class="erreur centrer">Vous avez refusé de payer ! Préparez vous à la bataille.</div>';
	}
}

if(sizeof($bientot) > 0 or sizeof($encours) > 0) {

	if (sizeof($bientot) > 0) {
		echo '<p class="centrer">Il y a <b>'.sizeof($bientot).
				 '</b> guerre sur le point de démarrer :</p><p>';

		foreach($bientot as $details) {
			
			echo '<fieldset class="cadre_guerre_bientot">
					<b>'.stripslashes($details->attaquant).'</b> contre <b>'.
					stripslashes($details->defenseur).'</b>
						<p> Début de la guerre : <b>'.
						date("d/m/Y H:i:s", $details->temps+24*3600).'</b></p>';

			if ($details->iddefenseur == $paquet->getalliance()) {
				$write ="L'ennemi";
			}
			else {
				$write ="Notre alliance";
			}
			
			if($details->peut_annuler) {
				echo '<a href="Guerres-annuler-'.$details->id.'">Annuler la guerre</a>';
			}
			elseif($details->peut_payer) {
				echo '<p>'.$details->attaquant.' demande <b>'.$details->drachme.'</b> '.imress('drachme').' et <b>'.$details->gold.'</b> '.imress('gold').' contre la paix</P>';
				if($details->peut_payer2) {
					echo "<b>Vous pouvez : </b>
							<p><form action='Guerres' method='post' enctype='multipart/form-data'>.
							<input type='radio' name='choix' value='accepte' /> Accepter  
							<input type='radio' name='choix' value='refuse' /> Refuser
							<input type='hidden' name='id' value='".$details->id."'> </p><p>
							<div class=\"bouton_classique\"><input class=\"bouton_classique2\" type=\"submit\" value='Valider' /></div>
							</p></form>";
				}
			}
			echo '</fieldset><p>';
		}
	}

	if (sizeof($encours) > 0) {
		foreach($encours as $do) {	
			if($do->nous < 2)
				$writev = "victoire";
			else
				$writev = "victoires";
	
			if($do->eux < 2)
				$writev1 = "victoire";
			else
				$writev1 = "victoires";
	
		echo '<fieldset class="ligne80 centrer">';
		echo '<b><a href="profilsalliance-'.$do->idattaquant.'">'.stripslashes($do->attaquant).'</b></a> contre <a href="profilsalliance-'.$do->iddefenseur.'"><b>'.stripslashes($do->defenseur).'</b></a>';
		//echo '<P>Lancement de la guerre par : <b>'.$nomattaquant.'</b></P><P> Date et Heure de la provocation: <b>'.date("d/m/Y \à H:i:s", $do->provocation).'</b></P>';
		echo '<P>Etat : <b>En cours</b></P>';
		echo '<P>La guerre a commencé depuis le '.date("d/m/Y \à H:i:s", $do->provocation+24*3600).'</P>';
		echo '<fieldset>';
		echo '<center><b>Score</b></center>';
		echo '<P>Votre alliance : <Font color=green><b>'.$do->nous.'</b> '.$writev.'</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo 'Ennemis : <Font color=red><b>'.$do->eux.'</b> '.$writev1.'</font></P>';
		echo '<P><b>'.$do->but.'</b> victoires sont nécessaires pour gagner une guerre<p>';
		
		if(!empty($do->histo)) {
			echo '<center><b>'.sizeof($do->histo).' dernières attaques</b></center>';
			echo '<P>';
				foreach($do->histo as $histo) {
					echo '<font color ="'.$histo->color.'"><b>'.$histo->attaquant.'</b> '.$txt[$histo->res].' contre <b>'.$histo->defenseur.'</b>. Date et Heure : <b>'.date("d/m/Y H:i:s", $histo->temps).'</b></font><br>';
			
				}
				echo '<p><a href="#" onclick="window.open(\'popup_guerres.php?id='.$do->id.'\',\'Historique attaques\',\'toolbar=0, location=0, directories=0, status=0, scrollbars=1, resizable=0, copyhistory=0, menuBar=0, width=800, height=500\');">Voir toutes les attaques</a></p></fieldset></fieldset>';
			}
		}
	}
}
else {
	echo '<div class="ligne erreur centrer"><h2>Vous n\'avez aucune guerre en cours</h2></div>';
}
?>