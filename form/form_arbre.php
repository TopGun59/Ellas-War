<?php

include('../header.php');

if(!empty($_GET['id'])) {
	$paquet = new EwPaquet('arbre_incremente', array($_GET['id']));
	echo $paquet->getRetour();
}
else {
	echo '0';
}

?>