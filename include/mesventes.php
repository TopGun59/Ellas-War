<?php
if($paquet->peut_commerce() == false) {
	$paquet->display(95);
}
else {
	if(!empty($_GET['var1'])) {
		$paquet = new EwPaquet('acheter_lot', array($_GET['var1']));
	}
	else {
		$paquet = new EwPaquet('mes_ventes');
	}
	
	$mesventes = $paquet->getRetour();
	$taux = $paquet->get_taux_rachat();
	
	if($paquet->getRetour(3) == true)
		$paquet->display(228);
	else
		include('lang/'.LANG.'/include/mesventes.php');
}

?>