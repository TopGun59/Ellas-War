<?php

if(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('get_permalien', array($_GET['var1']));
	$res_permalien = $paquet->getRetour();
}
else {
	$res_permalien = 1;
}

?>