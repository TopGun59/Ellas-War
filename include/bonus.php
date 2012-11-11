<?php

if(!empty($_GET['var1'])) {
	$paquet = new EwPaquet('utiliser_bonus', array($_GET['var1']));
}

$bonus = $paquet->get_bonus_connexion();
$info  = $paquet->get_bonus_info();

include('lang/'.LANG.'/include/bonus.php');

echo '
<script type="text/javascript">
$(function(){';
echo '
		$("#bar_hf_2").css("width", "'.round(250*$info).'px");';
echo '
  $(".progress-bar").animate({"width": "250px"}, { duration: 2000});
});
</script>';
?>