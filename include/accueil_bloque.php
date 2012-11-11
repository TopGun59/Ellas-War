<?php

$info = $paquet->get_bloque_info();

if(!empty($_GET['var1']) && ($_GET['var1'] == 'recommencer')) {
  if($ban == false) {
		$paquet = new EwPaquet('reset');
  }
}

include('lang/'.LANG.'/include/accueil_bloque.php');

?>