<?php

echo '<h1>Evenements d\'Ellàs War</h1>';

if(sizeof($events->courant) > 0 or sizeof($events->fini) > 0) {
	echo '<table class=\'tableau80 centrer_tableau\'>';
	foreach($events->courant as $e) {
		echo '<tr class="tableau_header">
					<td class="gras gauche">&nbsp;'.$e->titre.'&nbsp;</td>
					<td class="droite">&nbsp;du '.print_date($e->debut,1).' au '.print_date($e->fin,1).'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond'.($i%2).'">
					<td colspan="2" style="padding-top:5px;padding-bottom:5px;">&nbsp;'.$e->texte.'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond2"><td colspan="2"></td></tr>';
		$i++;
	}

	foreach($events->fini as $e) {
		echo '<tr class="tableau_header">
					<td class="gras gauche">&nbsp;'.$e->titre.'&nbsp;</td>
					<td class="droite">&nbsp;du '.print_date($e->debut,1).' au '.print_date($e->fin,1).'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond'.($i%2).'">
					<td colspan="2" style="padding-top:5px;padding-bottom:5px;">&nbsp;'.$e->texte.'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond2"><td colspan="2"></td></tr>';
		$i++;
	}
	echo '</table>';
}

if(sizeof($events->prochain) > 0) {
	$i=0;
	echo '<h2 class="centrer">Prochainement</h2>';
	echo '<table class=\'tableau80 centrer_tableau\'>';
	foreach($events->prochain as $e) {
		echo '<tr class="tableau_header">
					<td class="gras gauche">&nbsp;'.$e->titre.'&nbsp;</td>
					<td class="droite">&nbsp;du '.print_date($e->debut,1).' au '.print_date($e->fin,1).'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond'.($i%2).'">
					<td colspan="2" style="padding-top:5px;padding-bottom:5px;">&nbsp;'.$e->texte.'&nbsp;</td>
					</tr>';
		echo '<tr class="tableau_fond2"><td colspan="2"></td></tr>';
		$i++;
	}
	echo '</table>';
}

?>