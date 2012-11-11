<?php

$dir="images/drapeau";
$dossier=opendir($dir);

if(!empty($_POST)) {
	$age=abs(round($_POST['age']));

	if(is_numeric($age)) {

		if(!empty($_POST['pays'])) {
			$pays=trim(htmlentities($_POST['pays'], ENT_NOQUOTES, 'UTF-8'));
		}
		
		if(empty($pays) or ($pays == 'Thumbs.db') or !file_exists($dir.'/'.$pays)) {
			$pays='aaa.gif';
		}

	if(!empty($_FILES['fichier']['tmp_name'])) {
		list($width, $height, $type, $attr) = getimagesize($_FILES['fichier']['tmp_name']);
		
		if($_FILES['fichier']['error']==1) {
			alerte('Le fichier téléchargé excède la taille autorisée par le serveur(>2Mb)</div>');
		}
		elseif($_FILES['fichier']['size'] > 1024592) {
			alerte('Le fichier téléchargé excède la taille autorisée:	Vous ne pouvez télécharger qu\'un fichier dont la taille est inférieur à '.MAX_FILE_SIZE().' ');
		}
		elseif($width > 200 or $height > 200)	{
			alerte('L\'image a une trop haute résolution');
		}
		elseif($_FILES['fichier']['error'] == 3) {
			alerte('Le fichier n\'a été que partiellement téléchargé');
		}
		elseif($_FILES['fichier']['error'] == 4) {
		}
		elseif($_FILES['fichier']['type']!="image/jpeg" && $_FILES['fichier']['type']!="image/jpg" && $_FILES['fichier']['type']!="image/pjpeg" && $_FILES['fichier']['type']!="image/x-png" && $_FILES['fichier']['type']!="image/png") {
			alerte('Le fichier téléchargé n\'est pas du type autorisé');
		}
		else {
			@unlink('avatarjoueur/'.$paquet->getid().'.jpg');
			@unlink('avatarjoueur/'.$paquet->getid().'.png');
	
			if($_FILES['fichier']['type'] == "image/pjpeg")
				move_uploaded_file($_FILES['fichier']['tmp_name'],'avatarjoueur/'.$paquet->getid().'.jpg');
			else
				move_uploaded_file($_FILES['fichier']['tmp_name'],'avatarjoueur/'.$paquet->getid().'.png');
		}
	}
	$paquet = new EwPaquet('maj_profil', array($age, $_POST['loc'],
																						 $_POST['description'],
																						 $_POST['emplois'],$pays));
	}
	else {
		$paquet = new EwPaquet('get_profil');
	}
}
else {
	$paquet = new EwPaquet('get_profil');
}

$r = $paquet->getRetour();

echo '<h1>',$paquet->getlogin(),'</h1><div class="centrer">';

if(is_file('avatarjoueur/'.$paquet->getid().'.jpg'))
	echo '<br/><img src=\'avatarjoueur/'.$paquet->getid().'.jpg\' />';
elseif(is_file('avatarjoueur/'.$paquet->getid().'.png'))
	echo '<br/><img src=\'avatarjoueur/'.$paquet->getid().'.png\' />';
else {
	echo '<br/><br/>';
}

if(!empty($r->parrainage)) {
	echo $r->parrainage;
}

echo '</div><form method=\'post\' action=\'#\' enctype=\'multipart/form-data\'>
<table class="centrer_tableau">
<tr>
	<td class="gras">Age</td>
	<td><input type=\'text\' name=\'age\' maxlength=\'3\' size=\'3\' value=\'',$r->age,'\' class="form_retirer" style="text-align:right"> ans</td>
</tr>
<tr>
	<td class="gras">Emplois</td>
	<td><input type=\'text\' name=\'emplois\' maxlength=\'50\' value=\'',$r->emplois,'\' class="form_retirer" style="text-align:left"></td>
</tr>

<tr>
	<td class="gras">Avatar</td>
	<td><input name="fichier" type="file" class="form_retirer" />
			<br/> (max 200px × 200px, jpg ou png)</td>
</tr>

<tr>
	<td class="gras">Description</td> 
	<td><textarea name=\'description\' rows=\'6\' cols=\'50\' maxlength=\'1000\' style="height:120px; width:345px;text-align:left;" class="form_retirer">',$r->description,'</textarea></td>
</tr>
<tr>
	<td class="gras">Localisation</td>
	<td><input type=\'text\' name=\'loc\' maxlength=\'50\'  value="',$r->ville,'" class="form_retirer" style="text-align:left">';

if($r->pays != 'aaa.gif') {
	echo ' <img src="'.$dir.'/'.$r->pays.'" style="text-align:left">';
}

echo '</td></tr>
<tr><td></td><td> <table><tr>';

$i=0;
while($fichier=readdir($dossier))	{
	$berk=array('.', '..');
	if(!in_array($fichier,$berk)) {
		$lien=$dir.'/'.$fichier;
		if($fichier != 'Thumbs.db' AND $fichier != 'aaa.gif' AND $fichier != 'index.php')	{
			if(file_exists($lien)) {
				if($r->pays == $fichier) {
					echo '<td><img src="'.$lien.'"><input type="radio" name="pays" value="'.$fichier.'" checked="checked" /></td>';
				}
				else {
					echo '<td><img src="'.$lien.'"><input type="radio" name="pays" value="'.$fichier.'" /></td>';
				}
			}
			$i++;
			if($i%7 == 0)
				echo '</tr><tr>';
		}
	}
}
?>
</tr></table></td></tr>
<tr><td class="gras"></td><td class="centrer">
<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="action_profil" Value="Modifier"/></div>
</td></tr>
</table></form>