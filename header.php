<?php

header('Cache-Control: no-cache');
header('Pragma: no-cache');
header('Expires: ' . gmdate(DATE_RFC1123, time()-1));

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');

//Les fonctions
include('fct_generique.php');

//Par rapport à la langue
include('lang/'.LANG.'/fonctions.php');
include('lang/'.LANG.'/donnees/donnees.php');

//Les class
include('class/class_ewpaquet.php');

?>