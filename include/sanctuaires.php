<?php

$paquet = new EwPaquet('liste_sanctuaires');
$liste_sanctuaires = $paquet->getRetour();
$sanctuaire_actuel = $paquet->getRetour(2);

include('lang/'.LANG.'/include/sanctuaires.php');

?>