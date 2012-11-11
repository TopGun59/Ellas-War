<?php

if($obj1 == $taille) {
?>
<center>
<h2>Vous venez de passer niveau 6, félicitation</h2>

<br/>
<table>
<tr>
	<td>Nouveau bâtiment disponible : <b>École de cavalerie</b></td>
</tr>
	<tr>
		<td>Nouvelle unité disponible : <b>Hippeis</b></td>
	</tr>
	<tr>
		<td>Possibilité de bâtir un <b>nouveau temple</b></td>
	</tr>
	<tr>
		<td>Suppression du plafond de votre <b>trésor</b></td>
	</tr>
	<tr>
	  <td>Appui d'<b>Hébé</b></td>
	</tr>
</table>
<br/><br/>

<br/>
<a href="/"><div class="bouton_classique"><input class="bouton_classique2" type="submit" value="Continuer" name="Continuer" /></div></a>
<br/>

</center>
<?php
}
else {
	echo '<div class="ligne centrer">Vous ne pouvez pas passer niveau 6</div>';
}

?>
