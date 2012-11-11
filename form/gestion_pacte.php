<?php

include('../header.php');

if(!empty($_GET['id']) && !empty($_GET['action'])) {
	$paquet = new EwPaquet('gestion_pacte',
												 array($_GET['action'],$_GET['id']));
}

?>
