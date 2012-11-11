<?php

if(empty($_GET['var1'])) {
	redirect();
}

$paquet = new EwPaquet('profils_joueur', array($_GET['var1']));

$j = $paquet -> getRetour();

if(empty($j)) {
//	redirect();
}

?>