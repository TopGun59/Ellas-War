<?php

//Include des textes traduits
include('lang/'.LANG.'/donnees/arbredesdieux.php');

//On crée un arbre
$liste_arbre = array(
array(
  array(
    array('num' => 1, 'lvl' => 5),
    array('num' => 2, 'lvl' => 5),
    array('num' => 28, 'lvl' => 5)
  ),
  array(
    array('num' => 26, 'lvl' => 5),
    array('num' => 27, 'lvl' => 5),
    array('num' => 29, 'lvl' => 5)
  ),
  array(
    array('num' => 11, 'lvl' => 5),
    array('num' => 30, 'lvl' => 5),
    array('num' => 0, 'lvl' => 0)
  ),
  array(
    array('num' => 0, 'lvl' => 0),
    array('num' => 4, 'lvl' => 5),
    array('num' => 0, 'lvl' => 0)
  ),
  array(
    array('num' => 0, 'lvl' => 0),
    array('num' => 25, 'lvl' => 1),
    array('num' => 0, 'lvl' => 0)
  )
),

array(
	array(
		array('num' => 9, 'lvl' => 5),
    array('num' => 21, 'lvl' => 5),
    array('num' => 22, 'lvl' => 5)
	),
  array(
    array('num' => 10, 'lvl' => 5),
    array('num' => 19, 'lvl' => 5),
    array('num' => 18, 'lvl' => 5),
  ),
  array(
    array('num' => 5, 'lvl' => 5),
    array('num' => 31, 'lvl' => 5),
  	array('num' => 0, 'lvl' => 0),
  ),
  array(
  	array('num' => 0, 'lvl' => 0),
  	array('num' => 12, 'lvl' => 5),
  	array('num' => 0, 'lvl' => 0)
  ),
  array(
    array('num' => 0, 'lvl' => 0),
    array('num' => 24, 'lvl' => 1),
    array('num' => 0, 'lvl' => 0)
  )
),

array(
  array(
    array('num' => 16, 'lvl' => 5),
    array('num' => 7, 'lvl' => 5),
    array('num' => 8, 'lvl' => 5)
  ),
  array(
    array('num' => 13, 'lvl' => 5),
    array('num' => 14, 'lvl' => 5),
    array('num' => 15, 'lvl' => 5)
  ),
  array(
    array('num' => 20, 'lvl' => 5),
    array('num' => 3, 'lvl' => 5),
    array()
  ),
  array(
    array('num' => 0, 'lvl' => 0),
    array('num' => 17, 'lvl' => 5),
    array()
  ),
  array(
    array('num' => 0, 'lvl' => 0),
    array('num' => 23, 'lvl' => 1),
    array('num' => 0, 'lvl' => 0)
  )
));

if(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('reset_arbredesdieux');
	if(!$paquet->hasErreur()) {
		redirect(trad_to_page('arbredesdieux'));
	}
}
else {
	$paquet = new EwPaquet('arbredesdieux');
}

$arbre_mon = $paquet->get_arbre();

include('lang/'.LANG.'/include/arbredesdieux.php');

?>