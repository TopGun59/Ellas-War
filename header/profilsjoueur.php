<?php

if(empty($_GET['var1'])) {
	redirect();
}

if(!empty($_POST['pro_texte'])) {
	$paquet = new EwPaquet('dedi_joueur', array($_GET['var1'],
																							$_POST['pro_texte']));
	if(!($paquet->hasErreur())) {
		$_GET['var2'] = '';
	}
}
elseif(($paquet->getstatu() == 1) && !empty($_GET['var2'])) {
	if($_GET['var2'] == 'ajouter') {
		$paquet = new EwPaquet('ajouter_amis', array($_GET['var1']));
		redirect(trad_to_page('Amis'));
	}
	elseif($_GET['var2'] == 'ajouterl') {
		$paquet = new EwPaquet('ajouter_liste_noire',
													 array($_GET['var1'], $_GET['var3']));
	}
	elseif($_GET['var2'] == 'bloquer' && $paquet->getlvl2() >= 2) {
		$paquet = new EwPaquet('bloquer_joueur', array($_GET['var1']));
	}
	elseif($_GET['var2'] == 'supprdedi' && !empty($_GET['var3']))	{
		$paquet = new EwPaquet('supprimer_dedi', array($_GET['var1'], $_GET['var3']));
	}
	else {
		$paquet = new EwPaquet('profils_joueur', array($_GET['var1']));
	}
}
else {
	$paquet = new EwPaquet('profils_joueur', array($_GET['var1']));
}

$j = $paquet -> getRetour();

if(empty($j)) {
	redirect();
}

?>