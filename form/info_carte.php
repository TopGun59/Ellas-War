<?php

include('../header.php');

$paquet = new EwPaquet('info_carte', array($_GET['partie']));
$carte = $paquet->getRetour();

include('../lang/'.LANG.'/include/form_info_carte.php');

?>