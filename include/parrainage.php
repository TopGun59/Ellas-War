<?php

$paquet = new EwPaquet('get_mes_filleuls', array(10));
$liste = $paquet->getRetour();

include('lang/'.LANG.'/include/parrainage.php');

?>