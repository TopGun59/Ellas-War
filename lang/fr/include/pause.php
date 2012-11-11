<?php

echo '<h1>Pause</h1><br/>';

$paquet->display();

?>
<div class="ligne80 centrer">
	<p>Lorsque vous vous mettez en pause, vous devenez inattaquable 
		 durant une durée déterminée mais en contrepartie vos ressources 
		 et<br/>
		 celles de votre alliance n'augmentent pas durant cette période.
	<br/>
	<b>Entre 4 et 100 jours compris</b></p>

<form name="pause" method="post" action="#">
<b>	Nombre de jours :</b>
<input type='text' name='nbpause' maxlength='3' size='3' class="form_retirer" />
<br/><br/>

<div class="bouton_classique"><input class="bouton_classique2" type="submit" value="ok" name="pause" onclick="if (window.confirm('Valider la pause ?')) { this.disabled='true'; document.pause.submit();return false; } else { return false; }" /></div>
</form>
</div>
