<?php

$paquet->display();

if(empty($meteo)) {
	$meteo = 'soleil';
}

echo '<br/><b>Météo : '.$meteo.'</b><br/><br/>';

?>
<b>La météo est la volonté des dieux. 
Elle influencera votre cité, vos productions et vos consommations. 
Grâce à elle vous pourrez remporter des victoires impossibles mais faites attention; tout peut se retourner contre vous.</b>
<br/>
<p>
Si vous avez peur que celle-ci ait un effet néfaste sur votre cité, vous pouvez faire une offrande aux dieux. 
Après cette offrande votre cité ne subira plus la météo durant une semaine.
</p>

<p>
<b>Prix :</b> 
200.000 <img src='images/ress/drachme.jpg' title='Drachmes' name='Drachmes' alt='Drachmes' /> 
4.000.000 <img src='images/ress/eau.jpg' title='Eau' name='Eau' alt='Eau' /> 
2.000.000 <img src='images/ress/nourriture.jpg' title='Nourriture' name='Nourriture' alt='Nourriture' />
</p>
<p>
<a href='gestionmeteo-1' class="rouge_goco">Ne plus subir la météo</a>
</p>
<?php

if(!empty($bonus_meteo) && ($bonus_meteo > time())) {
	echo '<p>Fin de l\'immunité : '.date("d/m/Y H:i:s", $bonus_meteo).
' (<a href="gestionmeteo-2" class="rouge_goco">Annuler</a>)</p>';
}
?>
