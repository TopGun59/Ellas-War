	<?php
	
	echo 
	'<b>Archive de '.$res_permalien->login.' du '.date('d/m/Y \à H\hi', $res_permalien->timestamp).'</b>
	&nbsp;
	<div class="fb-like" style="width:100px;" data-href="'.SITE_URL.'/permalien-'.$res_permalien->id.'" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>';
	
	?>