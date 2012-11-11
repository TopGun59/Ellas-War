<?php

if($nb >= 0) {
	
	$image_larg = 15;
	$image_haut = 15;
	
	if($nb > 0) {
		echo '<div class="bouton_classique"><input class="bouton_classique2" type="button" value="PRENDRE UN TICKET" onclick="javascript:prendre_ticket();"/></div>
		<br/><br/>';
	}
	
	echo '<div class="ligne">';
	for($i=0;$i<$image_haut;$i++) {
		for($j=0;$j<$image_larg;$j++) {
			echo '<img src="images/grilles/grattez.png" style="position:absolute;margin-top:'.($i*10).'px;margin-left:'.($j*10).'px;width:10px;height:10px;cursor:hand;" onmouseover="this.style.visibility=\'hidden\';" onmouseout="this.style.visibility=\'hidden\';gain_ticket();">';
		}
	}

	echo '<img src="images/grilles/'.$alea.'.gif" width="150" height="150" alt="Grille de morpion">
	<br/><br/>';
	
	if($nb > 1) {
  	echo '<b>Il vous reste '.$nb.' tickets</b>';
  }
  else {
  	echo '<b>Il vous reste '.$nb.' ticket</b>';
  }
  
  echo '</div>';

}
else {
	echo '<b>Il ne vous reste plus de tickets</b>';
}

?>