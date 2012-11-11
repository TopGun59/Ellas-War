<?php

include('../header.php');

if(!empty($_GET['ciblej'])) {
  $paquet = new EwPaquet('attaquer', array($_GET['ciblej']));
	
	if(!$paquet->hasErreur()) {
		echo $paquet->getRetour();
		echo '
		<script type="text/javascript">
		$(function(){
			$("#bouton_attaquer_'.$_GET['ciblej'].'").hide("slow");
		});
		</script>';
	}
	else {
		$paquet -> display();
	}
}

?>