<?php

if(empty($_GET['var1']) or !is_numeric($_GET['var1'])) {
	redirect();
}

echo '
<div class="ligne">
<div id="info_btn">
	
</div>

<div id="cadre_btn">';

echo '</div></div>

<script type="text/javascript">
	info_carte('.$_GET['var1'].');
</script>';

?>