<?php

include('../header.php');
include('../lang/'.LANG.'/donnees/unites.php');
include('../lang/'.LANG.'/donnees/unites.php');
include('../lang/fr/donnees/unites2.php');

$paquet = new EwPaquet();

$ress = $paquet->get_ress();
$max = 10000000000;

if(!empty($_GET['unite'])) {
	$bat = addslashes($_GET['unite']);

	if($paquet->getstatu() != 1) {
echo '<SCRIPT LANGUAGE="JavaScript">
     		document.location.href="'.SITE_URL.'"
			</SCRIPT>';
	}
	
	$value = $paquet->get_unites()->$bat;
	$k = 0;
	
	echo '<div class="liste_batiment ligne">
			<div class="titre_batiment">
				<div class="titre_batiment2"><b>'.$unites[$bat]['nom'].'</b></div>
			</div>
		<div class="interieur_batiment" id="description_bat_'.$bat.'">';

	$prix2=$prix='<br/>';

	if(!empty($value -> prixdrachme)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix.=' '.nbf($value -> prixdrachme).' '.imress('drachme');
		$prix2.=' '.nbf($value -> prixdrachme*0.6).' '.imress('drachme');
		$max=min($max,floor($ress['drachme']/$value->prixdrachme));
		$k++;
	}

	if(!empty($value -> prixnourriture)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix.=' '.nbf($value -> prixnourriture).' '.imress('nourriture');
		$prix2.=' '.nbf($value -> prixnourriture*0.6).' '.imress('nourriture');
		$max=min($max,floor($ress['nourriture']/$value->prixnourriture));
		$k++;
	}

	if(!empty($value -> prixeau)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix.=' '.nbf($value -> prixeau).' '.imress('eau');
		$prix2.=' '.nbf($value -> prixeau*0.6).' '.imress('eau');
		$max=min($max,floor($ress['eau']/$value->prixeau));
		$k++;
	}

	if(!empty($value -> prixbois)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixbois).' '.imress('bois');
		$prix2 .=' '.nbf($value -> prixbois*0.6).' '.imress('bois');
		$max=min($max,floor($ress['bois']/$value->prixbois));
		$k++;
	}

	if(!empty($value -> prixfer)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixfer).' '.imress('fer');
		$prix2 .=' '.nbf($value -> prixfer*0.6).' '.imress('fer');
		$max=min($max,floor($ress['fer']/$value->prixfer));
		$k++;
	}

	if(!empty($value -> prixargent)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixargent).' '.imress('argent');
		$prix2 .=' '.nbf($value -> prixargent*0.6).' '.imress('argent');
		$max=min($max,floor($ress['argent']/$value->prixargent));
		$k++;
	}
	
	if(!empty($value -> prixpierre)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixpierre).' '.imress('pierre');
		$prix2 .=' '.nbf($value -> prixpierre*0.6).' '.imress('pierre');
		$max=min($max,floor($ress['pierre']/$value->prixpierre));
		$k++;
	}
	
	if(!empty($value -> prixmarbre)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixmarbre).' '.imress('marbre');
		$prix2 .=' '.nbf($value -> prixmarbre*0.6).' '.imress('marbre');
		$max=min($max,floor($ress['marbre']/$value->prixmarbre));
		$k++;
	}
	
	if(!empty($value -> prixraisin)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixraisin).' '.imress('raisin');
		$prix2 .=' '.nbf($value -> prixraisin*0.6).' '.imress('raisin');
		$max=min($max,floor($ress['raisin']/$value->prixraisin));
		$k++;
	}
	
	if(!empty($value -> prixvin)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixvin).' '.imress('vin');
		$prix2 .=' '.nbf($value -> prixvin*0.6).' '.imress('vin');
		$max=min($max,floor($ress['vin']/$value->prixvin));
		$k++;
	}
	
	if(!empty($value -> prixor)) {
		if($k>0 && $k%3 == 0) {
			$prix .= '<br/>';
			$prix2.= '<br/>';
		}
		$prix .=' '.nbf($value -> prixor).' '.imress('gold');
		$prix2 .=' '.nbf($value -> prixor*0.6).' '.imress('gold');
		$max=min($max,floor($ress['gold']/$value->prixor));
		$k++;
	}

	$prod='';
	if(!empty($value -> proddrachme)) {
		$prod.=' '.number_format(round($value -> proddrachme,2), 2, ',', ' ').' '.imress('drachme');
	}
	
	if(!empty($value -> prodnourriture)) {
		$prod.=' '.nbf($value -> prodnourriture).' '.imress('nourriture');
	}
	
	if(!empty($value -> prodeau)) {
		$prod.=' '.nbf($value -> prodeau).' '.imress('eau');
	}
	
	if(!empty($value -> prodbois)) {
		$prod .=' '.nbf($value -> prodbois).' '.imress('bois');
	}
	
	if(!empty($value -> prodfer)) {
		$prod .=' '.nbf($value -> prodfer).' '.imress('fer');
	}
	
	if(!empty($value -> prodargent)) {
		$prod .=' '.nbf($value -> prodargent).' '.imress('argent');
	}
	
	if(!empty($value -> prodpierre)) {
		$prod .=' '.nbf($value -> prodpierre*(100-$paquet->getcoef_marbre())/100).' '.imress('pierre');
	}
	
	if(!empty($value -> prodmarbre)) {
		$prod .=' '.($value -> prodmarbre*$paquet->getcoef_marbre()/100).' '.imress('marbre');
	}
	
	if(!empty($value -> prodraisin)) {
		$prod .=' '.nbf($value -> prodraisin).' '.imress('raisin');
	}
	
	if(!empty($value -> prodvin)) {
		$prod .=' '.nbf($value -> prodvin).' '.imress('vin');
	}
	
	if(!empty($value -> prodor)) {
		$prod .=' '.nbf($value -> prodor).' '.imress('gold');
	}

	$l = 0;
	$conso='';
	if(!empty($value -> consodrachme)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso.=' '.nbf($value -> consodrachme).' '.imress('drachme');
		$l++;
	}
	
	if(!empty($value -> consonourriture)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso.=' '.nbf($value -> consonourriture).' '.imress('nourriture');
		$l++;
	}
	
	if(!empty($value -> consoeau)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso.=' '.nbf($value -> consoeau).' '.imress('eau');
		$l++;
	}
	
	if(!empty($value -> consobois)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consobois).' '.imress('bois');
		$l++;
	}
	
	if(!empty($value -> consofer)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consofer).' '.imress('fer');
		$l++;
	}
	
	if(!empty($value -> consoargent)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consoargent).' '.imress('argent');
		$l++;
	}
	
	if(!empty($value -> consopierre)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consopierre).' '.imress('pierre');
		$l++;
	}
	
	if(!empty($value -> consomarbre)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consomarbre).' '.imress('marbre');
		$l++;
	}
	
	if(!empty($value -> consoraisin)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consoraisin).' '.imress('raisin');
		$l++;
	}
	
	if(!empty($value -> consovin)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consovin).' '.imress('vin');
		$l++;
	}
	
	if(!empty($value -> consoor)) {
		if($l>0 && $l%3 == 0) {
			$conso .= '<br/>';
		}
		$conso .=' '.nbf($value -> consoor).' '.imress('gold');
		$l++;
	}

	include('../lang/'.LANG.'/include/form_engager.php');
	
	echo '
	</td></tr>
	</table>
	</form>
	</div>
	</div></div>';
}

?>