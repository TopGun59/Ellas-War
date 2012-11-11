<div class="ligne centrer">
<?php

if(empty($_GET['var1'])) {
	$_GET['var1'] = '';
}

if(!empty($_GET['var1'])) {
  $paquet = new EwPaquet('valider_nv_mdp', array($_GET['var1']));
}

$paquet->display();

?>
</div>