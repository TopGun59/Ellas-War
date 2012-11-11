<?php

if($obj1 == $taille) {
?>
<center>
<h2>Vous venez de passer niveau 9, félicitation</h2>

<br/>
<table>
<tr>
	<td>Nouveaux bâtiments disponible : <b>Académie</b>, <b>Atelier de pressage</b>, <b>Mines d'or</b> et <b>Palais</b></td>
</tr>
	<tr>
		<td>Nouvelle unité disponible : <b>Hoplite à cheval</b></td>
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
	echo '<div class="ligne centrer">Vous ne pouvez pas passer niveau 9</div>';
}

?>