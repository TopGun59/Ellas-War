<?php

include('../header.php');

$paquet = new EwPaquet('possible_blocus', array($_GET['alliance']));
$cible = $paquet->getRetour();
include('../lang/'.LANG.'/include/form_declarer_blocus.php');

?>