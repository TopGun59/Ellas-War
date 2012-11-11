<?php

if(empty($temps)) {
	echo '<h1>Acheter une licence</h1><br/>';
}
else {
	echo '<h1>Prolonger une licence</h1>
			<br/>
			<div class="ligne centrer">
			<b>Votre licence finie</b> ',date('\à G\h i \m\i\n\u\t\e\(\s\) \e\t i \s\e\c\o\n\d\e\(\s\) \l\e j/m', $temps).'<br/><br/>
					</div>';
}

$paquet->display();

echo '<div class="ligne centrer">La licence de grand commerçant vous permet d\'accéder au commerce des gros lots.<br/>
		Cette licence bien que payante est limitée dans le temps, vous devez donc la renouveler régulièrement.<br/><br/></div>

<table style="margin:auto;">
<tr class="titre_tab"><td>&nbsp;Temps&nbsp;</td><td>&nbsp;Prix&nbsp;</td><td>&nbsp;Acheter&nbsp;</td></tr>';

	if(in_array('hermes', $paquet->getTemples()))
		$coef = 0.5;
	else
		$coef = 1;

	foreach($prix_licences as $valeur) {
		if(!empty($valeur->num)) {
			echo '<tr>
			<td align="left">&nbsp;'.$valeur->text.'&nbsp;</td>
			<td class="droite">&nbsp;'.nbf($valeur->prix*$coef).' '.imress('drachme').'&nbsp;</td>
			<td class="centrer">&nbsp;<a href=\'Licences-'.$valeur->num.'\'><img src=\'images/com/newspaper_add.png\' alt=\'licences\' /></a>&nbsp;</td>' .
					'</tr>';
		}
	}
	
echo '</table>';

?>