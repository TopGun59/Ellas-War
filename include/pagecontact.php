<?php

if(!empty($_POST['message']) && empty($mess['regle'])) {
	if(empty($_GET['var1'])) {
		$paquet = new EwPaquet('nouveau_topic',
													 array($_POST['sujet'], $_POST['message']));
		$mess = NULL;
	}
	else {
		$paquet = new EwPaquet('nouveau_message',
													 array($_GET['var1'], $_POST['message']));
		$mess = $paquet->getRetour(2);
	}
}
elseif(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('get_message_contact', array($_GET['var1']));
	$mess = $paquet->getRetour(2);
}
else {
	$paquet = new EwPaquet('page_contact');
	$mess = NULL;
}

$liste = $paquet->getRetour();

include('lang/'.LANG.'/include/pagecontact.php');

?>