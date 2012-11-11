<?php

$paquet = new EwPaquet('nb_tickets');
$nb = $paquet->getRetour();

include('lang/'.LANG.'/include/ticket.php');

?>