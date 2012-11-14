<?php 

$paquet      = new EwPaquet('info_diamant');
//objet : id -> id du joueur qui a le diamant login -> son login
$actuel      = $paquet->getRetour();
//Null si on a jamais eu le diamant
//objet : temps -> temps durant lequel on a eu le diamant
//        depuis-> si on a le diamant, date à laquelle on l'a eu
$temps_perso = $paquet->getRetour(2);
//Temps en secondes durant lequel mon alliance a eu le diamant
$temps_alli  = $paquet->getRetour(3);

include('lang/'.LANG.'/include/diamant.php');

?>