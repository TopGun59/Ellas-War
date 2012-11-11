<?php
if($paquet->peut_commerce() == false) {
	$paquet->display(95);
}
else {
	if(!empty($_POST['cle'])) {
		if(empty($_POST['anonyme'])) {
			$_POST['anonyme'] = '';
		}
		
		$paquet = new EwPaquet('vendre_lot',
													 array($_POST['nbressource'], $_POST['type'],
													 			 $_POST['vente'], $_POST['prixressource'],
													 			 $_POST['cle'], $_POST['anonyme']));
	}
	
	include('lang/'.LANG.'/include/vendre.php');
}

?>