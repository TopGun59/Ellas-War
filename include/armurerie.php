<?php

if(!empty($_GET['var1']))	{
  $paquet = new EwPaquet('acheter_bonus_unites',
  											 array($_GET['var1']));
}
else {
	$paquet = new EwPaquet('armurerie');
}

$possible = $paquet->getRetour();

include('lang/'.LANG.'/include/armurerie.php');

if(!empty($_GET['var1'])) {
  echo '
  <script type="text/javascript">
    $(function(){
      $("#bloc_amurerie_'.$_GET['var1'][0].'").show("slow");
    });
  </script>
  ';
}
?>