<?php

$paquet = new EwPaquet('get_tresor');

if(!empty($_POST['montant'])) {
	if($_POST['mode'] == "deposer") {
		$paquet = new EwPaquet('deposer', array($_POST['montant']));
	}
	else {
	  if(empty($_POST['calcul'])) {
	    $_POST['calcul'] = 'relatif';
	  }
		$paquet = new EwPaquet('retirer', array($_POST['montant'], $_POST['calcul']));
	}
}

?>