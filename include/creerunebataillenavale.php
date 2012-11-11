<?php

if(!empty($_POST['description'])) {
	$paquet = new EwPaquet('creer_btn', array($_POST['description']));
}

include('lang/'.LANG.'/include/creerunebataillenavale.php');

?>