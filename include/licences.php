<?php
if($paquet->peut_commerce() == false) {
	$paquet->display(95);
}
else {
	if((isset($_GET['var1'])) && (!empty($_GET['var1']))) {
		$paquet = new EwPaquet('achat_licence', array($_GET['var1']));
	}
	else {
		$paquet = new EwPaquet('licence');
	}
	
	$temps = $paquet->getRetour();
	$prix_licences = $paquet->getRetour(2);
	
	include('lang/'.LANG.'/include/licences.php');
}

?>