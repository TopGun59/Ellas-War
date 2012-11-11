<?php

include('../header.php');

$paquet = new EwPaquet('possible_contrat', array($_GET['alliance']));
$cible = $paquet->getRetour();
include('../lang/'.LANG.'/include/form_declarer_contrat.php');

?>