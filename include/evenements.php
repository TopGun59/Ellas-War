<?php

$paquet = new EwPaquet('get_evenements');
$events = $paquet->getRetour();
$nb     = $paquet->getRetour(2);
$i      = 0;

include('lang/'.LANG.'/include/evenements.php');

?>