<?php

$paquet = new EwPaquet('pactes');
$mon_alliance  = $paquet->getinfoalliance();
$liste_attente = $paquet->getRetour(4);
$sortie        = $paquet->getRetour(5);
$depart_urgent = $paquet->depart_urgent();
$liste_pactes        = $paquet->getRetour();
$liste_fusion  = $paquet->getRetour(2);
$liste_fusion2 = $paquet->getRetour(3);

include('lang/'.LANG.'/menu_monalliance.php');
include('lang/'.LANG.'/include/pactes.php');

?>