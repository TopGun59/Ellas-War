<?php

if(!empty($_POST)) {
	$paquet = new EwPaquet('maj_bibliotheque', array($_POST['modif']));
}
else {
	$paquet = new EwPaquet('bibliotheque');
}

include('lang/'.LANG.'/include/bibliotheque.php');

?>