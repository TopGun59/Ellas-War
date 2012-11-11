<?php

include('../header.php');

if(!empty($_GET['ciblej'])) {
  $paquet = new EwPaquet('preparer', array($_GET['ciblej']));
	echo '<div class="centrer">';
	if(!$paquet->hasErreur()) {
		$login = $paquet->getRetour();
		$id    = $paquet->getRetour(2);
	  $paquet->display(array(121, $login));
	  include('../lang/'.LANG.'/include/preparer.php');
	}
	else {
		$paquet -> display();
	}
	echo '</div>';
}

?>
