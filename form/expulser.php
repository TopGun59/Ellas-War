<?php

include('../header.php');

if(!empty($_GET['id'])) {
	$paquet = new EwPaquet('expulser_joueur', array($_GET['id']));
}

?>
