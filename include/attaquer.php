<?php

if(!empty($_GET['var3'])) {
	$recupcible=addslashes(htmlentities(trim($_GET['var3'])));
}
else {
	$recupcible = 0;
}

if(!empty($_POST['recherche'])) {
	$recherche = addslashes(htmlentities(trim($_POST['recherche'])));
}
elseif(!empty($_GET['var4'])) {
	$recherche = addslashes(htmlentities(trim($_GET['var4'])));
}
else {
	$recherche = '';
}

if(!empty($_GET['var1'])) {
	$page_num = round(htmlentities(trim($_GET['var1'])));
}
else {
	$page_num = 1;
}

if(empty($_GET['var2'])) {
	$par = 'niveau';
}
else {
	$par = $_GET['var2'];
}

$paquet = new EwPaquet('liste_attaque',
											 array($recupcible, $par, $recherche, $page_num));
$totalDesMessages = $paquet->getRetour(2);
$liste_guerres = $paquet->getRetour(3);
$liste = $paquet->getRetour();
$temples = $paquet->getTemples();

// On calcule le nombre de pages à créer
$nombreDePages  = ceil($totalDesMessages / 20);

$i=($page_num-1)*50+1;

include('lang/'.LANG.'/include/attaquer.php');

?>