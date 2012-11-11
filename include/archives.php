<?php

if(!empty($_POST['recherche'])) {
	$recherche = trim($_POST['recherche']);
}
elseif(!empty($_GET['var3'])) {
	$recherche = trim($_GET['var3']);
}
else {
	$recherche = '';
}

if(empty($_GET['var2']) or (!($_GET['var2'] <= 6 && $_GET['var2'] >= 1)))	{
	$type = 0;
}
else {
	$type = round($_GET['var2']);
}

if(empty($_GET['var1']) or !is_numeric($_GET['var1'])) {
	$nb = 1;
}
else {
	$nb = round($_GET['var1']);
}


$paquet = new EwPaquet('archives', array($recherche, $type, $nb));

$nombre_par_page = 20;
$nombre_archives = $paquet->getRetour();
$pages = ceil($nombre_archives/$nombre_par_page);
$archives =$paquet->getRetour(2);

include('lang/'.LANG.'/include/archives.php');

if(!empty($_GET['ouvrir'])) {
echo '
<script type="text/javascript">
$(function(){
	$("#historique_num'.$_GET['ouvrir'].'").addClass("ouvert");
$("#historique_num'.$_GET['ouvrir'].'").show("slow");
voir_historique('.$_GET['ouvrir'].');
});
</script>';
}

?>