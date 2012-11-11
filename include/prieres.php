<?php

if(!empty($_POST['message'])) {
	$paquet = new EwPaquet('prier',array($_POST['message']));
}

include('lang/'.LANG.'/include/prieres.php');

?>