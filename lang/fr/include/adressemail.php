<h1>Changer d'adresse mail</h1><br/>
<?php

$paquet->display();
	
?>
<br/>
<form method="post" action="">
	<table style="margin:auto;">
		<tr>
			<td align="left" class="gras">Ancienne adresse mail</td>
			<td><input type="text" name="ancien" class="form_retirer" required="required"/></td>
		</tr>
		<tr>
			<td align="left" class="gras">Nouvelle adresse mail</td>
			<td><input type="text" name="nouveau" class="form_retirer" required="required"/></td>
		</tr>
		<tr>
			<td align="left" class="gras">Confirmation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><input type="text" name="confirmation" class="form_retirer" required="required"/></td>
		</tr>
	</table>
	<br/>
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="changer" value="Changer d'adresse mail" /></div>
</form>