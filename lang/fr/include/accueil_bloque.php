<?php

echo '<center><br/><br/>
	<b>Votre compte a été bloqué par un membre du staff.</b><br/><br/>';

if(!empty($info['raison'])) {
	echo $info['raison'].'<br/><br/>';
}

if(!empty($info['sortie']) && $info['sortie'] > time()) {
	echo '<b>Votre compte sera automatiquement débloqué le '.
	strftime('%A %d %B %Y à %Hh %M', $info['sortie']);
}

if($info['ban'] == false) {
  echo '<br/>
  		<a href="accueil_bloque-recommencer">Recommencer une partie</a>';
}

echo '<br/><br/><br/><br/>
</center>';

?>