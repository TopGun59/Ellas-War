<h1>Création de votre alliance</h1>

<?php

$paquet->display();

?>
<br/>
<div class="centrer">
<form method="post" action="">
<input type="text" name="nom" class="form_retirer" placeholder="Nom de votre alliance" required="required" size='30'/>
<br/><br/>
<textarea name="description" style="width:600px;height:300px;" class="form_retirer" placeholder="Quelques mots sur votre alliance (historique, description, objectifs,recrutement,...)" required="required"></textarea>
<br/><br/>
<div class="bouton_classique"><input class="bouton_classique2" type="submit" value="Créer votre alliance" /></div>
</form>
</div>