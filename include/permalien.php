<?php

if(is_numeric($res_permalien) && $res_permalien = 1) {
	$paquet->display(213);
}
elseif(is_numeric($res_permalien) && $res_permalien == 0) {
	$paquet->display(214);
}
else {
	$res_permalien->texte = str_replace('<table', '<table class="centrer_tableau"', $res_permalien->texte);
	echo '<h1>'.$res_permalien->titre.'</h1>
	<br/><br/><div class="ligne80 centrer">
	'.$res_permalien->texte.'<br/><br/>';
	include('lang/'.LANG.'/include/permalien.php');
	echo '</div>';
}

?>