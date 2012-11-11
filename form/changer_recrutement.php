<?php

include('../header.php');

$paquet = new EwPaquet('changer_recrutement');
$rec = $paquet->get_statu_rec();

include('../lang/'.LANG.'/include/changer_recrutement.php');

?>
