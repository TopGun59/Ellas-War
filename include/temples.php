<?php

if(empty($_GET['var1'])) {
	$_GET['var1'] = '';
}

if($_GET['var1'] == 'poseidon' && !empty($_POST['action'])) {
	$paquet = new EwPaquet('achat_mur_poseidon');
}
elseif($_GET['var1'] == 'demeter' AND !empty($_POST['foudre'])) {
	$paquet = new EwPaquet('achat_furie', array($_POST['foudre']));
}
elseif($_GET['var1'] == 'zeus' AND !empty($_POST['foudre'])) {
	$paquet = new EwPaquet('achat_foudre', array($_POST['foudre']));
}
else {
	$paquet = new EwPaquet('info_temples');
}

$temples = $paquet->getTemples();

include('lang/'.LANG.'/include/temples.php');

?>