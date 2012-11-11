<?php
if(!empty($_GET['var1']) && ($_GET['var1'] == 'public')) {
	$paquet = new EwPaquet('rejoindre_btn');
}
else {
	$paquet = new EwPaquet('info_btn');
}
$places = $paquet->getRetour();
$liste  = $paquet->getRetour(2);
$temps  = time(); 
include('lang/'.LANG.'/include/bataillesnavales.php');

?>