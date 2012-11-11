<?php

include('../header.php');

if(!empty($_GET['ciblej'])) {
	$paquet = new EwPaquet('furie', array($_GET['ciblej']));
	
	if($paquet->hasErreur()) {
		$paquet -> display();
	}
	else {
		echo $paquet->getRetour();
			echo '
			<script type="text/javascript">
			$(function(){
				$("#bouton_furie_'.$_GET['ciblej'].'").hide("slow");
			});
			</script>';
	}
}

?>
