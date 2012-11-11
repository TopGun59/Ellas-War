<?php

$ress = $paquet->get_ress();

if($paquet->getlvl() <= 1 or ($ress['drachme'] < 10000)) {
	$erreur = 120;
}

include('lang/'.LANG.'/include/quadriges.php');

?>