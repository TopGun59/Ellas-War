<?php

include('../header.php');

if(!empty($_GET['id'])) {
	$paquet = new EwPaquet('demander_fusion', array($_GET['id']));
}

?>