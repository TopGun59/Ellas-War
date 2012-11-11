<?php

if(empty($_GET['var1'])) {
	redirect();
}
else {
	$paquet = new EwPaquet('lire_mp', array($_GET['var1']));
	$mp = $paquet->getRetour();

	if(empty($mp -> id)) {
		redirect();
	}
}

?>