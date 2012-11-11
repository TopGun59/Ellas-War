<?php

if($paquet->getlvl() < 10) {
	redirect();
}

if(!empty($_POST['temple']) && !empty($_POST['nouveau'])) {
	$paquet = new EwPaquet('changer_temple',
												 array($_POST['temple'], $_POST['nouveau']));
}
else {
	$paquet = new EwPaquet('possible_changer_temple');
}

$possible = $paquet->getRetour();

include('lang/'.LANG.'/include/modifiertemples.php');

?>