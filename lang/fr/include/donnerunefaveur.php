<h1>Donner une faveur</h1>
<br/>
<?php $paquet -> display(); ?>
<br/>
<div class="ligne erreur centrer">/!\ Le don de faveur est soumis aux règles sur les multi-comptes /!\</div>
<br/><br/>
<div class="ligne centrer">Il ne vous est possible de donner une faveur qu'à un joueur en manque de ressource.<br/>Celui-ci après avoir reçu la faveur pourra l'utiliser pour remettre son compte en route.</div><br/>
<br/>

<form action='#' method='post'>
<div class="ligne centrer">
	<input type="text" name="somme" placeholder="Pseudo" size="10" class="form_retirer" style="margin-bottom:10px;" required="required"/>
<br/>
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" value="DONNER UNE FAVEUR" /></div>
</div>
</form>