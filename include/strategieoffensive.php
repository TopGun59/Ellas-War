<?php

if(!empty($_POST)) {
	$paquet = new EwPaquet('maj_vagues2', array(serialize($_POST)));
}
else {
	if(isset($_GET['var1']) && ($_GET['var1']==0 or $_GET['var1']==999999)) {
		if($_GET['var1'] == 999999) {
			$paquet = new EwPaquet('ajout_vague2', array($_GET['var1']));
		}
		else {
			$paquet = new EwPaquet('ajout_vague2');
		}
	}
	elseif(!empty($_GET['var1'])) {
		$paquet = new EwPaquet('supprimer_vague2', array($_GET['var1']));
	}
	else {
		$paquet = new EwPaquet('get_vagues2');
	}
}

include('lang/'.LANG.'/donnees/unites.php');

$liste_vague = array();
$liste = '';
$tab = array();
$tableau = '<table width="100%"><tr>';
$i = 0;
$liste_unites = $paquet->get_unites();
$vague = unserialize($paquet->getRetour());
$largeur = 5;

foreach($liste_unites as $value) {
	if(($value -> attaque > 0) && ($value -> nb > 0)) {
		$liste .= $value -> nb.' '.$unites[$value->nom2]['nom'].'<br/>';
		$tab[] = $value->nom2;
	}
}

$nb_vague = sizeof($vague);
$nb_unite = sizeof($tab);

foreach($tab as $unite) {
	$i++;
	$tableau .= '<td>
	<table width="100%">
		<tr>
			<td class="titre_tab">'.$unites[$unite]['nom'].'</td>
		</tr>';
	for($j=0;$j<$nb_vague;$j++) {
		$tableau .= '<tr>
		<td class="centrer"><input type="text" value="'.$vague[$j][$unite].'" name="'.$unite.'[]" class="form_unites"/></td>
		</tr>';
	}
	$tableau .= '</table>
	</td>';
	
	if($i%$largeur == 0) {
		$tableau .= '<td><table width="100%"><tr><td class="case_suppr_strat">&nbsp;</td></tr>';
		
		for($j=0;$j<$nb_vague;$j++) {
			$tableau .= '<tr><td class="case_suppr_strat">&nbsp;<a href="StrategieOffensive-'.($j+1).'">'.img('images/joueurs/supprimer_mp.png', 'supprimer').'</a>&nbsp;</td></tr>';
		}
		
		$tableau .= '</table></td>';
		if($i < $nb_unite) {
			$tableau .= '</tr><tr>';
		}
		else {
			$tableau .= '</tr>';
		}
	}
}

include('lang/'.LANG.'/include/strategieoffensive.php');

?>