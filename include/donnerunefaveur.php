<?php

if($paquet->peut_commerce() == false) {
	$paquet->display(95);
}
else {
	if(!empty($_POST['somme'])) {
		$paquet = new EwPaquet('dons_faveurs',
													 array($_POST['somme']));
	}
	
	include('lang/'.LANG.'/include/donnerunefaveur.php');
}

?>