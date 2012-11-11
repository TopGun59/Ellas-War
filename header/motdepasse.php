<?php

if(!empty($_POST['ancien']) && !empty($_POST['nouveau']) &&
	 !empty($_POST['confirmation'])) {
	$paquet = new EwPaquet('changer_pwd',
												 array($_POST['ancien'], $_POST['nouveau'],
															 $_POST['confirmation']));
}

?>