<?php

if(!empty($_POST['batiment'])) {
	if(!empty($_POST['achatt'])) {
		$paquet = new EwPaquet('batir', array($_POST['batiment'], $_POST['achatt']));
	}
	elseif(!empty($_POST['ventee'])) {
		$paquet = new EwPaquet('detruire', array($_POST['batiment'], $_POST['ventee']));
	}
	elseif(isset($_POST['modif'])) {
		$paquet = new EwPaquet('modif_coef_marbre', array($_POST['modif']));
	}

	$_GET['var1'] = $_POST['batiment'];
}

?>
