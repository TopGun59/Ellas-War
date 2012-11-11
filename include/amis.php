<?php

$liste = $paquet->getRetour();
$taille= sizeof($liste);

if($taille > 30) {
	$npl = 3;
}
elseif($taille > 15) {
	$npl = 2;
}
else {
	$npl = 1;
}

include('lang/'.LANG.'/include/amis.php');

?>