<?php

if(!empty($_GET['var1']) && !empty($_GET['var2']) &&
   ($_GET['var2'] == 'supprimer')) {
	$paquet = new EwPaquet('supprimer_amis', array($_GET['var1']));
}
else {
	$paquet = new EwPaquet('get_mes_amis');
}

?>