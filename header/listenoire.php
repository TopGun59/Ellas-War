<?php

if(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('supr_listenoire', array($_GET['var1']));
}
else {
	$paquet = new EwPaquet('get_listenoire');
}

?>