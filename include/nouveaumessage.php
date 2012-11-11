<?php

if(!empty($_POST['contenu'])) {
	$paquet = new EwPaquet('ecrire_mp',
												 array($_POST['destinataire'],
																	 $_POST['titre_mp'],
																	 $_POST['contenu']));
}
else {
	if(!empty($_GET['var2'])) {
		$paquet = new EwPaquet('rep_mp',
													 array($_GET['var2']));
		$rep = $paquet->getRetour();
		
		if(!empty($_GET['var3']))
			$rep->message = '';
		if(!empty($rep->login))
			$rep_login = $rep->login;
	}
	elseif(!empty($_GET['var1'])) {
		$paquet = new EwPaquet('get_login',
													 array($_GET['var1']));
		$rep_login = $paquet->getRetour();
	}
}

$paquet->display();

include('lang/'.LANG.'/include/nouveaumessage.php');

?>