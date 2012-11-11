<?php

include('../header.php');

$paquet = new EwPaquet('passer_lvlalliance');
$retour = $paquet->getRetour();

include('../lang/'.LANG.'/include/formlvlalliance.php');

?>
