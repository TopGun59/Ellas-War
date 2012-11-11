<?php

include('../header.php');

if(!empty($_GET['joueur']) && !empty($_GET['action'])) {
	if($_GET['action'] == 'oui') {
		$paquet = new EwPaquet('accepter_alliance', array($_GET['joueur']));
	}
	else {
		$paquet = new EwPaquet('refuser_alliance', array($_GET['joueur']));
	}
	$paquet->display();
}

?>
