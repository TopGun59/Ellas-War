<?php

include('../header.php');

if(!empty($_GET['action']) && !empty($_GET['demande'])) {
	$paquet = new EwPaquet('coffre_demande', 
												 array($_GET['action'],$_GET['demande']));
}

?>
