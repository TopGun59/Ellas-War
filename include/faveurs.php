<?php

if(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('bonus_faveur', array($_GET['var1']));
}
else {
	$paquet = new EwPaquet('dernieres_faveurs');
}
$liste = $paquet->getretour();
include('lang/'.LANG.'/include/faveurs.php');

?>