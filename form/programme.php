<?php

include('../header.php');

if(!empty($_GET['id'])) {
  $paquet = new EwPaquet('get_programme',array($_GET['id']));
  $do = $paquet->getRetour();
	if($paquet) {
		echo '<h2 class="centrer">'.$do->login.'</h2><br/>' .
				'<div class="centrer ligne">
				'.$do->programme.'</div>';
	}
}

?>
