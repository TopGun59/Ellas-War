<?php

include('../header.php');

$paquet = new EwPaquet('info_case', 
											 array($_GET['btn'], $_GET['x'], $_GET['y']));
$info = $paquet->getRetour();

if(!empty($info->id_c)) {
	echo '<div class="ligne centrer">
	<b>'.$info->login.'</b> ('.$info->id_x.';'.$info->id_y.')<br/><br/>
	</div>';
}

include('../lang/'.LANG.'/include/form_info_case.php');

?>