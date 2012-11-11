<?php

include('../header.php');

$paquet = new EwPaquet('get_ticket');
$nb     = $paquet->getRetour();
$alea   = $paquet->getRetour(2);

if($paquet -> getstatu() != 1) {
	exit();
}

include('../lang/'.LANG.'/include/prendre_ticket.php');

?>