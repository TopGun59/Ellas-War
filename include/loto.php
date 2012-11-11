<?php

if(!empty($_POST['ticket'])) {
	$paquet = new EwPaquet('jouer_loto', array($_POST['ticket']));
}
else {
	$paquet = new EwPaquet('info_loto');
}

$cagnotte       = $paquet->getRetour();
$nb_mes_tickets = $paquet->getRetour(2);

include('lang/'.LANG.'/include/loto.php');

?>