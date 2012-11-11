<?php

if(empty($liste_contrats) or sizeof($liste_contrats) == 0) {
	echo '<div class="centrer">Il n\'y a aucun contrat actuellement</div>';
}
else {

	echo '<table>
	<tr class=\'titre_tab\'>
		<td>&nbsp;Investigateur&nbsp;</td>
		<td>&nbsp;Cible&nbsp;</td>
		<td>&nbsp;Début&nbsp;</td>
		<td>&nbsp;Fin&nbsp;</td>
		<td>&nbsp;Récompense&nbsp;</td>
	</tr>';
	
	foreach($liste_contrats as $donnnees1) {
		$req = '';
			
		if(!empty($donnnees1['drachme'])) {
			$req .=' '.$donnnees1['drachme'].' '.imress('drachme');
		}
		
		if(!empty($donnnees1['gold'])) {
			$req .=' '.$donnnees1['gold'].' '.imress('gold');
		}
		
		echo '<tr>
		<td>&nbsp;'.ucfirst($donnnees1['alliance1']).'&nbsp;</td>
		<td>&nbsp;'.$donnnees1['alliance2'].'&nbsp;</td>
		<td>&nbsp;'.date('d/m/Y',$donnnees1['debut']).'&nbsp;</td>
		<td>&nbsp;'.date('d/m/Y',$donnnees1['fin']).'&nbsp;</td>
		<td align=\'right\'>&nbsp;'.$req.'&nbsp;</td>
		<td>&nbsp;';

		$reponse5 = query("SELECT count(*) as nb_g FROM guerre_resultat WHERE vainqueur='".$_SESSION['joueur'] -> alliance -> id."' AND (attaquant='".$donnnees1['client']."' or defenseur='".$donnnees1['client']."') AND debut>'".$donnnees1['date_d']."'");
		$donnnees5 = mysql_fetch_array($reponse5);

		if(empty($donnnees5['nb_g'])) {
			echo '&nbsp;</td></tr>';
		}
		else {
			echo '<a href="javascript:affiche_menu_alliance(16, '.$donnnees1['id'].', 0);">Valider</a>&nbsp;</td>
			</tr>';
		}
	}
	
	echo '</table>';
}

//Les contrats de mon alliance	
if(!empty($mes_contrats) && sizeof($mes_contrats) > 0) {
	echo '<br/><div class="titre3">Vos contrats</div>
	<table>
	<tr class=\'titre_tab\'>
		<td>&nbsp;Cible&nbsp;</td>
		<td>&nbsp;Confidentiel&nbsp;</td>
		<td>&nbsp;Date de dépôt&nbsp;</td>
		<td>&nbsp;Récompense&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
	</tr>';

	foreach($mes_contrats as $donnnees) {
		if(empty($donnnees['silence'])) {
			$s='Non';
		}
		else {
			$s='Oui';
		}

		$req = '';

		if(!empty($donnnees['some_d'])) {
			$req.=' '.$donnnees['some_d'].' <img src="images/drachme.jpg" alt="drachmes">';
		}
		
		if(!empty($donnnees['some_o'])) {
			$req.=' '.$donnnees['some_o'].' <img src="images/or.jpg" alt="or">';
		}
		
		echo '<tr>
		<td>&nbsp;'.ucfirst($donnnees['nom']).'&nbsp;</td>
		<td>&nbsp;'.$s.'&nbsp;</td>
		<td>&nbsp;'.date('d/m/Y',$donnnees['date_d']).'&nbsp;</td>
		<td>&nbsp; '.$req.'&nbsp;</td>
		<td>&nbsp;<a href=\'Contrats-'.$donnnees['id'].'\'>Annuler</a>&nbsp;</td>
		</tr>';
	}
		echo '</table>';
}

?>