<?php

$paquet = new EwPaquet('condition_niveau');
$conditions = $paquet->getRetour();
$actu       = $paquet->getRetour(2);
$remplie    = $paquet->getRetour(3);
$necessaire = $paquet->getRetour(4);

if($paquet->get_level() < 5) {
	include('lang/'.LANG.'/include/niveau.php');
}
else {
	include('lang/'.LANG.'/include/niveaumax.php');
}

?>