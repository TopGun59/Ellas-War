<?php

if($paquet->getlvl() < 10) {
	$paquet->display(94);
}
else {
	if(!empty($_GET['var1'])) {
		if(is_numeric($_GET['var1'])) {
			if($_GET['var1'] == 1) {
				$paquet = new EwPaquet('update_dino', array($_GET['var2']));
				redirect('AutelDesDieux-2');
			}
			else {
				$paquet = new EwPaquet('conditions_autels');
			}
		}
		else {
			$paquet = new EwPaquet('acheter_autel',
														 array($_GET['var1']));
		}
	}
	else {
		$paquet = new EwPaquet('conditions_autels');
	}
	
	$conditions = $paquet->getRetour();
		
	$condition_promethee	= $conditions->promethee;
	$condition_dino				= $conditions->dino;
	$condition_hestia			= $conditions->hestia;
	$condition_lion				= $conditions->lion;
	$condition_unite			= $conditions->unite;
	$condition_attirance_aphrodite=$conditions->aphro;
	
	$liste_autels = $paquet->liste_autels();
	$active_ter   = $paquet->active_ter();
	
	include('lang/'.LANG.'/include/auteldesdieux.php');
}

?>