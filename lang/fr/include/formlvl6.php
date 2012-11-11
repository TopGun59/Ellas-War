<?php

if($obj1 == $taille) {
?>
<center>
<h2>Vous venez de passer niveau 7, félicitation</h2>

<br/>
<table>
	<tr>
		<td>Nouvelle unité disponible : <b>Archer à cheval</b></td>
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
	echo '<div class="ligne centrer">Vous ne pouvez pas passer niveau 7</div>';
}

?>
