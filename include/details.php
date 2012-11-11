<?php

include('lang/'.LANG.'/donnees/batiments.php');
include('lang/'.LANG.'/donnees/unites.php');

$ress_var     = $paquet->get_ress_var();
$ress         = $paquet->get_ress();
$liste_bat    = $paquet->get_batiments();
$prod_bonus   = $paquet->get_prod_bonus();
$cotisation   = $paquet->get_cotisation();
$liste_unites = $paquet->get_unites();

if(empty($_GET['var1'])) {
  $_GET['var1'] = 0;
}

include('lang/'.LANG.'/include/details.php');

?>