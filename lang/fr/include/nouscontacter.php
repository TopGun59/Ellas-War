<div class="ligne centrer">
<h1>Nous contacter</h1>
<?php
	$paquet->display();
?>
<p>Laissez nous un message et nous vous recontacterons par e-mail ou via la 
messagerie du jeu.<br/>Le temps de réponse est de 24h à une semaine mais nous 
faisons notre maximum pour traiter les demandes au plus vite.</p>
<form method="post" action="#">
<div id="contact_pseudo" class="text_large_deco"><span class="rouge_goco">P</span>seudo :</div>

<div id="contact_pseudo2"><input type="text" name="login" class="form_contact" required="required" /></div>

<div id="contact_mail" class="text_large_deco"><span class="rouge_goco">E</span>-mail :</div>

<div id="contact_mail2"><input type="email" name="mail" class="form_contact" required="required" /></div>

<div id="contact_titre" class="text_large_deco"><span class="rouge_goco">T</span>itre du message</div>
<div id="contact_titre2"><input type="text" name="titre" class="form_contact" required="required" /></div>
<div id="contact_message" class="text_large_deco"><span class="rouge_goco">V</span>otre message</div>
<div id="contact_message2">

<a href="skype:ellaswar?call"><img src="images/joueurs/skype.png" style="border: none;margin-right:100px;margin-bottom:175px;" height="82" alt="Skype Me™!" /></a>

<textarea name="message" class="message_contact"></textarea>

<a href="teamspeak"><img src="images/joueurs/teamspeak.png" alt="Venez nous rejoindre sur Teamspeak" title="Venez nous rejoindre sur Teamspeak" height="80" style="border: none;margin-left:100px;margin-bottom:173px;"/></a>

</div>
<div id="contact_valider"><div class="bouton_classique"><input class="bouton_classique2" type="submit" value="VALIDER" name="Contact" /></div></div>
</form>
</div>