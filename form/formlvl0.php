<?php

include('../header.php');

$paquet = new EwPaquet('get_passage_lvl0');
											 
$obj = unserialize($paquet->getRetour(2));
$obj1 = array_sum($obj);
$taille = sizeof($obj);

include('../lang/'.LANG.'/include/formlvl0.php');

?>
