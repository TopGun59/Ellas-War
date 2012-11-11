<?php

/*
 * Permet d'envoyer un objet json et de récuperer la réponse
 * @param url l'adresse de la cible
 * @param data les données, en json
 * @param optional_headers les headers, optionels
 * @return la reponse obtenue
 */
function getRequest($url, $data = array(), $optional_headers = null) {
		
	$postdata = http_build_query($data);
	
	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postdata
	    )
	);
	
	$context  = stream_context_create($opts);
	
	return file_get_contents($url, false, $context);
}

function nbf($n, $nb=2) {
	if(is_numeric($n)) {
		if($n == round($n)) {
			return number_format($n , 0, ',', ' ');
		}
		else {
			if($nb == 0) {
				$n = floor($n);
			}
			return number_format($n , $nb, ',', ' ');
		}
	}
}

function redirect($url='/', $time=0) {
	echo'<meta http-equiv="refresh" content="',$time,'; url=',$url,'" />';
	if(empty($time)) {
		exit();
	}
}

function affiche_etoile($nb, $couleur, $txt) {
  $r = '';
  if($nb > 0) {
    //Les étoiles
    for($i=0;$i<$nb;$i++) {
      $r .= '<img src="images/etoiles/'.$couleur.'.png" alt="'.$txt.'" title="'.$txt.'" />';
    }
  }
  return $r;
}

function constr_get($type, $var) {
	if(!empty($var)) {
		return '&amp;'.$type.'='.$var;
	}
}

function alerte($message) {
	echo '<script type=\'text/javascript\'>
	alert(\''.addslashes($message).'\'); </SCRIPT>';	
}

/***
* Calcul le prix d'un ornement ou d'une statue
* @param le prix de base
* @param le niveau
***/
function prix_hall($tab, $level=0) {
	$prix = '';

	if(empty($level)) {
		$tab = array(	'prix_drachme'=> 0,
									'prix_or'	    => 0,
									'prix_argent'	=> 0,
									'prix_bois'  	=> 5000000,
									'prix_nourriture'=> 0,
									'prix_eau'		=> 10000000,
									'prix_fer'   	=> 8000000,
									'prix_raisin'	=> 0,
									'prix_vin'   	=> 0,
									'prix_pierre'	=> 1000000,
									'prix_marbre' => 20000);
	}
	else {
	  $tab['prix_drachme']  *= ($level);
	  $tab['prix_or']       *= ($level);
	  $tab['prix_argent']   *= ($level);
	  $tab['prix_bois']     *= ($level);
	  $tab['prix_nourriture']*= ($level);
	  $tab['prix_eau']      *= ($level);
	  $tab['prix_fer']      *= ($level);
	  $tab['prix_raisin']   *= ($level);
	  $tab['prix_vin']      *= ($level);
	  $tab['prix_pierre']   *= ($level);
	  $tab['prix_marbre']   *= ($level);
	}
	
	if($tab['prix_drachme'] > 0) {
		$prix .= nbf($tab['prix_drachme']).'&nbsp;'.
		         imress('drachme').' ';
	}

	if($tab['prix_nourriture'] > 0) {
		$prix .= nbf($tab['prix_nourriture']).'&nbsp;'.
		         imress('nourriture').' ';
	}

	if($tab['prix_eau'] > 0) {
		$prix .= nbf($tab['prix_eau']).'&nbsp;'.
		         imress('eau').' ';
	}

	if($tab['prix_bois'] > 0) {
		$prix .= nbf($tab['prix_bois']).'&nbsp;'.
		         imress('bois').' ';
	}

	if($tab['prix_fer'] > 0) {
		$prix .= nbf($tab['prix_fer']).'&nbsp;'.
		         imress('fer').' ';
	}

	if($tab['prix_argent'] > 0) {
		$prix .= nbf($tab['prix_argent']).'&nbsp;'.
		         imress('argent').' ';
	}

	if($tab['prix_pierre'] > 0) {
		$prix .= nbf($tab['prix_pierre']).'&nbsp;'.
		         imress('pierre').' ';
	}

	if($tab['prix_marbre'] > 0) {
		$prix .= nbf($tab['prix_marbre']).'&nbsp;'.
		         imress('marbre').' ';
	}

	if($tab['prix_raisin'] > 0) {
		$prix .= nbf($tab['prix_raisin']).'&nbsp;'.
		         imress('raisin').' ';
	}

	if($tab['prix_vin'] > 0) {
		$prix .= nbf($tab['prix_vin']).'&nbsp;'.
		         imress('vin').' ';
	}

	if($tab['prix_or'] > 0) {
		$prix .= nbf($tab['prix_or']).'&nbsp;'.
		         imress('gold').' ';
	}

	return $prix;
}

function plus_valeur($nombre) {
	if($nombre > 0) {
		return '+ '.nbf($nombre);
	}
	else {
		return nbf($nombre);
	}
}

function css_meteo($meteo='', $statu) {
	if(empty($meteo)) {
		$meteo = 'soleil';
	}
	else {
		$meteo = trim($meteo);
	}

	if($statu != 1) {
		$dossier = 'design/deco';
	}
	else {
		$dossier = 'design/co';
	}
	
	echo '<style>';

	switch($meteo) {
		case 'neige':
		echo '
		body {background-image:url(\'design/deco/font_ew_neige.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_neige.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_neige.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_neige.png\');}
		'; break;
		
		case 'nuage':
		echo '
		body {background-image:url(\'design/deco/font_ew.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_nuage.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_nuage.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_nuage.png\');}
		'; break;
		
		case 'orage':
		echo '
		body {background-image:url(\'design/deco/font_ew_orage.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_orage.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_orage.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_orage.png\');}
		'; break;
		
		case 'grele':
		echo '
		body {background-image:url(\'design/deco/font_ew_grele.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_grele.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_grele.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_grele.png\');}
		'; break;
		
		case 'vent':
		echo '
		body {background-image:url(\'design/deco/font_ew.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_vent.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_vent.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_vent.png\');}
		'; break;
		
		case 'canicule':
		echo '
		body {background-image:url(\'design/deco/font_ew.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_canicule.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_canicule.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_canicule.png\');}
		'; break;
		
		case 'pluie':
		echo '
		body {background-image:url(\'design/deco/font_ew_pluie.png\');}
		#centre_design2 {background-image:url(\'design/deco/sous_menu_pluie.png\');}
		#banniere {background-image:url(\''.$dossier.'/banniere_pluie.png\');}
		#barre_menu {background-image:url(\''.$dossier.'/barre_menu2_pluie.png\');}
		'; break;
	}
	
	echo '</style>';
}

function get_ip($ip='') {
  if(empty($ip)) {
	  if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
		  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	  } 
	  elseif(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
		  $ip = $_SERVER['HTTP_CLIENT_IP'];
	  } 
	  elseif(!empty($_SERVER['REMOTE_ADDR'])) {
		  $ip = $_SERVER['REMOTE_ADDR'];
	  }
	  else {
		  $ip = 'Inconnue';
	  }
	}
	return $ip;
}

?>