<?php

include('../header.php');

if(!empty($_GET['id'])) {
	$paquet = new EwPaquet('annuler_fusion', array($_GET['id']));
}

?>