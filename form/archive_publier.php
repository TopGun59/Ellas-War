<?php

include('../header.php');

if(!empty($_GET['id'])) {
	$paquet = new EwPaquet('archive_publier', array($_GET['id']));
	
	$retour = $paquet->getRetour();

	include('../lang/'.LANG.'/include/form_archives.php');
}
?>
