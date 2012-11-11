<?php

$ress = $paquet->get_ress();

if($paquet->getlvl() <= 1 or ($ress['drachme'] < 1000)) {
	$erreur = 120;
}

$paquet = new EwPaquet('javelot');
$info = $paquet->getRetour();

include('lang/'.LANG.'/include/javelot.php');

?>