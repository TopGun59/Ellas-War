<?php

include('../header.php');

$paquet = new EwPaquet('info_guerre', $_GET['alliance']);

$info    = $paquet->getinfoalliance();
$ennemis = $paquet->getRetour();

if(empty($ennemis) or ($info   ->nb_membre <= 1) or 
	 ($ennemis->nbmembre  <= 1) or 
	 (!$ennemis->peut_guerre) or 
	 $paquet->peut_guerre() == 0 or 
	 ($ennemis->id == $info -> id)) {

}
else {
	include('../lang/'.LANG.'/include/form_declarer.php');
}

?>