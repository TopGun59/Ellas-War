<?php
if(empty($_GET['var1']) or !is_numeric($_GET['var1'])) {
	redirect();
}

if($paquet->getlvl() < $lvlminirejoindre) {
	redirect();
}

if($paquet->getalliance() != 0) {
	redirect();
}

if(!empty($_POST['motivation'])) {
	$paquet = new EwPaquet('postuler',array($_GET['var1'],$_POST['motivation']));
	redirect(trad_to_page('LesAlliances'));
}
else {
	$paquet = new EwPaquet('profils_alliance', array($_GET['var1']));
}

$alliance = $paquet -> getRetour();

if(empty($alliance -> nom) or !empty($alliance -> statu_rec)) {
	redirect();
}
?>