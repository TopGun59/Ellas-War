<?php

if(!empty($_GET['var1']) && is_numeric($_GET['var1'])) {
	$paquet = new EwPaquet('rejoindre_btn', array($_GET['var1']));
}
else {
	$paquet = new EwPaquet('get_listebtn');
}
$liste = $paquet->getRetour(4);
include('lang/'.LANG.'/include/listebataillesnavales.php');

?>