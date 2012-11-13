<?php

if($retour) {

echo '
<center>
<h2>Votre alliance vient de passer niveau '.($paquet->get_level()+1).', félicitation</h2>

<table class="centrer_tableau">';

switch($paquet->get_level()) {
	case 1:
	 echo '<tr><td><b>Calendrier</b> afin d\'organiser votre alliance</td></tr>
	 <tr><td>Possibilité de retirer <b>toutes les ressources</b> du coffre d\'alliance</td></tr>
	 <tr><td>Possibilité de recevoir <b>des contrats</b></td></tr>
	 <tr><td>Possibilité de recevoir <b>des blocus</b></td></tr>
	';
	
	break;
	case 2:
	 echo '<tr><td>Possiblité de <b>doubler la cotisation</b></td></tr>
	 	 <tr><td>Possibilité de lancer <b>des contrats</b></td></tr>
	 <tr><td>Possibilité de recevoir une <b>3<sup>ème</sup> guerre</b> si vous êtes la source des deux en cours</b></td></tr>
	';
	break;

	case 3:
	 echo '<tr><td>Possiblité de <b>doubler la cotisation</b></td></tr>
	 <tr><td>Possibilité de lancer des <b>blocus</b></td></tr>
	 <tr><td>Possibilité pour vos membres d\'acheter une <b>armurerie</b></td></tr>
	 <tr><td>Possibilité pour les membres de cotiser volontairement des drachmes</b></td></tr>
	';
	break;

	case 4:
	
	break;
}

echo '</table>
<br/>
<a href="/"><div class="bouton_classique"><input class="bouton_classique2" type="submit" value="Continuer" name="Continuer" /></div></a>
<br/>
</center>';

}
else {
	echo '<div class="ligne centrer">Vous ne pouvez pas passer niveau '.($paquet->get_level()+1).'</div>';
}

?>