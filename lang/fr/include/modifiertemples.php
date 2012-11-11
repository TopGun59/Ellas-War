<?php

if(empty($possible)) {
	$paquet->display();
?>

<div class="erreur ligne80"><br/>
La modification des temples est soumise à des règles très strictes. Vous ne pouvez changer qu'un temple tous les six mois. Cette modification est irrémédiable et vous obligera à attendre de nouveau six mois en cas d'erreur, en aucun cas le staff ne pourra intervenir.
<br/>
</div>

<div class="ligne centrer" id="prix_temple">

</div>
<div class="ligne">
<form method="post" action="">
<table class="centrer_tableau">
<tr>
	<td>
	<select name="temple" required="required" onchange="javascript:modifier_temple(this.value);" class="form_retirer">
		<option value="">&nbsp;</option>
		<?php
		$temples = $paquet->getTemples();
		foreach($temples as $index) {
			echo '<option value="'.$index.'">'.$temples_donnees[$index]['nom'].'</option>';
		}
		?>
	</select>
	</td>
	<td>
	<select name="nouveau" required="required" id="changement_temple" class="form_retirer">
		<option value="">&nbsp;</option>
	</select>
	</td>
	<td>
		<div class="bouton_classique"><input class="bouton_classique2" type="submit" value="MODIFIER" name="MODIFIER" /></div>
	</td>
</tr>
</table>
</form>
</div>

<?php
}
else {
	echo '<div class="erreur ligne centrer"><br/>Vous avez changé de temple recement, prochain changement possible dans '.
				round(($possible-time())/(24*3600)).' jours.</div>';
}

?>