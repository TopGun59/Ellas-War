<?php
	echo '<h1>'.$txt_titre.'</h1>';
	echo '<div id="plan_site">';
	if($paquet->getstatu() == 1) {
		include('lang/'.LANG.'/include/plan_co.php');
	}
	else {
		include('lang/'.LANG.'/include/plan_deco.php');
	}
	echo '</div>';
?>