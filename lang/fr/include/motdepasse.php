<h1>Changer de mot de passe</h1><br/>
<?php

$paquet->display();
	
?>
<br/>
<form method="post" action="">
	<table style="margin:auto;">
		<tr>
			<td align="left" class="gras">Ancien mot de passe</td>
			<td><input type="text" name="ancien" class="form_retirer" required="required"/></td>
		</tr>
		<tr>
			<td align="left" class="gras">Nouveau mot de passe</td>
			<td><input type="text" name="nouveau" class="form_retirer" required="required"/></td>
		</tr>
		<tr>
			<td align="left" class="gras">Confirmation du mot de passe &nbsp;</td>
			<td><input type="text" name="confirmation" class="form_retirer" required="required"/></td>
		</tr>
	</table>
	<br/>
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="changer" value="Changer de mot de passe" /></div>
</form>