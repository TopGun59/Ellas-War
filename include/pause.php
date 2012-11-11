<?php


if(!empty($_POST['nbpause']) && is_numeric($_POST['nbpause'])) {
	$paquet = new EwPaquet('pause', array($_POST['nbpause']));
}

include('lang/'.LANG.'/include/pause.php');

?>