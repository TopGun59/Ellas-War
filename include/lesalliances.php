<?php

$i = 0;

if(!empty($_GET['var1'])) {
	$page = $_GET['var1'];
}
else {
	$page = 1;
}

if(!empty($_POST['contrat'])) {
	if(empty($_POST['confidence'])) {
		$_POST['confidence'] = 0;
	}
	
	if(empty($_POST['or'])) {
		$_POST['or'] = 0;
	}
	
	$paquet = new EwPaquet('proposer_contrat',
												 array($_POST['contrat'],$_POST['confidence'],
												 			 $_POST['drachmes'],$_POST['or']));
}
elseif(!empty($_POST['alliance']) && !empty($_POST['motivation']) &&
	$paquet->peut_pacte() > 0) {
	$paquet = new EwPaquet('demander_pacte',
												 array($page,$_POST['alliance'],$_POST['motivation']));
}
elseif(!empty($_POST['declarer'])) {
	if(empty($_POST['ultimatum'])) {
		$_POST['ultimatum'] = '';
	}
	$paquet = new EwPaquet('declarer_guerre',
												 array($_POST['declarer'], $_POST['drachmes'],
												 			 $_POST['or'], $_POST['ultimatum'], $page));
	$resultat = $paquet->getRetour(3);
}
else {
	$paquet = new EwPaquet('get_listealliances', array($page));
}

$liste_alliances = $paquet->getRetour();
$nombreDePages   = ceil($paquet->getRetour(2)/20);

$attente = $paquet->getattente();

$paquet->display();

echo '
<div id="cadre_milieu_petit">
	<div id="cadre_haut_petit"><img src="images/attaques/cross.png" alt="Fermer" title="Fermer" class="supr_messagerie" style="margin-top:10px;margin-right:10px;" onclick="javascript:fermer_pacte();"/></div>
	<div id="cadre_centre_petit">
	
	</div>
	<div id="cadre_bas_petit"></div>
</div>
<br/>';

include('lang/'.LANG.'/include/lesalliances.php');

?>