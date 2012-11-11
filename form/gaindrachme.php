<?php

include('../header.php');

if(!empty($_GET['jeu'])) {
	$paquet = new EwPaquet('gain_drachme', array($_GET['jeu']));
}

?>
