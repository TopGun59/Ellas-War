<?php


if(!empty($_POST['joueur']) && !empty($_POST['ressource']) && 
	 !empty($_POST['somme'])) {
	$paquet = new EwPaquet('dons_parain',
												 array($_POST['joueur'], $_POST['ressource'],
												 			 $_POST['somme']));
}
else {
	$paquet = new EwPaquet('get_mes_filleuls', array(5));
}

$liste = $paquet->getRetour();
$possible = $paquet->getRetour(2);

include('lang/'.LANG.'/include/dons.php');

?>