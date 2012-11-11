<?php

if($paquet->getalliance() != 0 or $paquet->getlvl() < LVL_MINI_ALLIANCE) {
	redirect();
}

if(!empty($_POST)) {
	$paquet = new EwPaquet('creer_alliance',
												 array($_POST['nom'], $_POST['description']));
	if($paquet->getalliance() != 0) {
		redirect(trad_to_page('Alliance'));
	}
}

include('lang/'.LANG.'/include/creervotrealliance.php');

?>