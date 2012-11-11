<?php

include('../header.php');

$paquet = new EwPaquet('get_missives');

$val  = $paquet->getRetour(2);
$next = $paquet->getRetour(3);

include('../lang/'.LANG.'/include/next_archive.php');

?>
