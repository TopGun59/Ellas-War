<div id="cadre_milieu_petit">
	<div id="cadre_haut_petit"></div>
	<div id="cadre_centre_petit">
	
	</div>
	<div id="cadre_bas_petit"></div>
</div>

<?php

$paquet = new EwPaquet('get_objectifs_lvl'.$paquet->getlvl(),
											 array(20));

$actu= unserialize($paquet->getRetour());
$obj = unserialize($paquet->getRetour(2));

include('lang/'.LANG.'/include/lvl'.$paquet->getlvl().'.php');

?>