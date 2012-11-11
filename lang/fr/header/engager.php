<title>Engager des unités</title>
<meta name="description" content="Engager des unités. EllasWar.Com est un jeu de stratégie en ligne gratuit au temps de l'antiquité grecque. Construisez votre cité et votre armée pour devenir le maître de toute une civilisation." />
<?php

if(!empty($_POST['batiment'])) {
  if($_POST['batiment'] == 'tourguet' or $_POST['batiment'] == 'tourobs'
     or $_POST['batiment'] == 'tourgarde' or $_POST['batiment'] == 'tourmir') {
		if(!empty($_POST['achatt'])) {
			$paquet = new EwPaquet('batir', array($_POST['batiment'], $_POST['achatt']));
		}
		elseif(!empty($_POST['ventee'])) {
			$paquet = new EwPaquet('detruire', array($_POST['batiment'], $_POST['ventee']));
		}
	}
	else {
		if(!empty($_POST['achatt'])) {
			$paquet = new EwPaquet('engager', array($_POST['batiment'], $_POST['achatt']));
		}
		elseif(!empty($_POST['ventee'])) {
			$paquet = new EwPaquet('liberer', array($_POST['batiment'], $_POST['ventee']));
		}
  }
	$_GET['var1'] = $_POST['batiment'];
}

?>
