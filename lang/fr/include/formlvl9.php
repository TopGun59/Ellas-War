<?php

if($obj1 == $taille) {
?>
<center>
<h2>Vous venez de passer niveau 10, félicitation</h2>

<br/>
<table>
<tr>
	<td>Nouveau bâtiment disponible : <b>Grotte maudite</b> et <b>Tour à miroir</b></td>
</tr>
	<tr>
		<td>Accés à l'autel des dieux</td>
	</tr>
	<tr>
		<td>Nouvelle unité disponible : <b>Hoplite d'élite</b></td>
	</tr>
	<tr>
		<td>Possibilité de bâtir un nouveau temple</td>
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
	echo '<div class="ligne centrer">Vous ne pouvez pas passer niveau 10</div>';
}

?>