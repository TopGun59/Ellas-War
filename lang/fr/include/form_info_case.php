<?php

if(!empty($info->id_c) && $info->id_c == $paquet->getid()) {
	if($info->id_x == $info->cap_x && $info->id_y == $info->cap_y) {
		echo '
		<div class="ligne centrer">
			<b>'.$info->drachmes.'</b> 
			<img src="images/ress/gold.png" alt="Or" title="Or en stock" />';		
		echo '</div>';
	}

	echo '<div class="ligne"><br/><table>';
	
	if($info->unite1 > 0) {
		echo '<tr>
		<td class="droite">&nbsp;'.$info->unite1.'&nbsp;</td>
		<td>&nbsp;Birème(s)</td>
		</tr>';
	}
	
	if($info->unite2 > 0) {
		echo '<tr>
		<td class="droite">&nbsp;'.$info->unite2.'&nbsp;</td>
		<td>&nbsp;Trirème(s)</td>
		</tr>';
	}
	
	if($info->unite3 > 0) {
		echo '<tr>
		<td class="droite">&nbsp;'.$info->unite3.'&nbsp;</td>
		<td>&nbsp;Quadrirème(s) lourde(s)</td>
		</tr>';
	}
	
	if($info->unite4 > 0) {
		echo '<tr>
		<td class="droite">&nbsp;'.$info->unite4.'&nbsp;</td>
		<td>&nbsp;Léviathan(s)</td>
		</tr>';
	}
	
	if($info->bat > 0) {
		echo '<tr>
		<td class="droite">&nbsp;'.$info->bat.'&nbsp;</td>
		<td>&nbsp;Tour(s) à baliste</td>
		</tr>';
	}
	
	echo '</table><br/></div>';
}
else {
	echo '<div class="ligne centrer">
			<br/><br/>
			Aucune autre information sur cette case
			<br/><br/><br/>
			</div>';
}

?>