<?php

include('../header.php');

if(!empty($_GET['ciblej'])) {
  $paquet = new EwPaquet('espionner', array($_GET['ciblej']));
	
	if($paquet->hasErreur()) {
		$paquet -> display();
	}
	
	echo $paquet->getRetour();
}

?>