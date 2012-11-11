<?php

if(is_numeric($all)) {
	$paquet->display($all);
}
else {
		
	echo '<h1>'.$all->nom.' </h1><br/>';
	
	include('lang/'.LANG.'/include/profilsalliance.php');
}

?>