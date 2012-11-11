<?php


if(!empty($_GET['var1'])) {
	if($_GET['var1'] == 1) {
		$paquet = new EwPaquet('anti_meteo');
	}
	else {
		$paquet = new EwPaquet('annuler_anti_meteo');
	}
}

$meteo       = $paquet->get_meteo();
$bonus_meteo = $paquet->bonus_meteo();

echo '<div class="ligne80 centrer">';
include('lang/'.LANG.'/include/gestionmeteo.php');
echo '</div>'
?>