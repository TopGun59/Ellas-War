<?php
	session_start();

	if(empty($_SESSION['niveau']))
		$_SESSION['niveau'] = 1;
		
	if(!empty($_POST['Modifier'])) {
		if(!empty($_POST['carte']) && is_numeric($_POST['carte'])) {
			$_SESSION['niveau'] = $_POST['carte'];
		}
	}
	
	if(!empty($_POST['Enregistrer'])) {

		$fp = fopen("level/level_".$_SESSION['niveau'].".txt","w+");
		$ligne = '';
		
		for($y=0;$y<30;$y++) {
			for($x=0;$x<40;$x++) {
				if(!empty($_POST['case_'.$y][$x])){
					$ligne .= $_POST['case_'.$y][$x];
				}
				else {
					$ligne .= '.';
				}
			}
			$ligne .="\n";
		}
		fputs($fp, $ligne);
		fclose($fp);
	}
?>
<html>
	<header>
		<title>Editeur</title>
		<script type="text/javascript">
		var type;
		
		function charger(num) {
			type = num;
		}
		
		function changer(x, y) {
			if(type == 1) {
document.getElementById('case_' + x + '_' + y).innerHTML="<img src='images/bloc.png' onclick='javascript:changer("+x+", "+y+");' />";
document.getElementById('sav_' + x + '_' + y).value="#";
			}else if(type == 2) {
				document.getElementById('case_' + x + '_' + y).innerHTML="<img src='images/boule.png' onclick='javascript:changer("+x+", "+y+");' />";
				document.getElementById('sav_' + x + '_' + y).value="O";
			}else if(type == 3) {
				document.getElementById('case_' + x + '_' + y).innerHTML="<img src='images/gold.png' onclick='javascript:changer("+x+", "+y+");' />";
				document.getElementById('sav_' + x + '_' + y).value="V";
			}else if(type == 4) {
				document.getElementById('case_' + x + '_' + y).innerHTML="<img src='images/pers.png' onclick='javascript:changer("+x+", "+y+");' />";
				document.getElementById('sav_' + x + '_' + y).value="P";
			}else{
				document.getElementById('case_' + x + '_' + y).innerHTML="<img src='images/terre.png' onclick='javascript:changer("+x+", "+y+");' />";
				document.getElementById('sav_' + x + '_' + y).value=".";
			}
		}
		</script>
	</header>
	<body>
	<form action="" method="post">
	<select name="carte">
		<?php
			for($i=1;$i<=9;$i++) {
				if($i == $_SESSION['niveau']) {
					echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
				}
				else {
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
			}
		?>
	</select> <input type="submit" name="Modifier" value="Modifier" />
<img src="images/bloc.png" onclick="javascript:charger(1);" />
<img src="images/boule.png" onclick="javascript:charger(2);" />
<img src="images/gold.png" onclick="javascript:charger(3);" />
<img src="images/pers.png" onclick="javascript:charger(4);" />
<img src="images/terre.png" onclick="javascript:charger(5);" />
</form>

<form action="" method="post">
	<input type="submit" name="Enregistrer" value="Enregistrer" /><br/>
	<?php
	
$j = 0;
$fichier = fopen("level/level_".$_SESSION['niveau'].".txt","r+");
while($ligne = fgets($fichier)) {

	for($i=0;$i<40;$i++) {
		echo '<span id="case_'.$i.'_'.$j.'">';
		switch($ligne[$i]) {
			case '#': echo '<img src="images/bloc.png" onclick="javascript:changer('.$i.', '.$j.');" />';
			break;
			case 'O': echo '<img src="images/boule.png" onclick="javascript:changer('.$i.', '.$j.');" />';
			break;
			case 'V': echo '<img src="images/gold.png" onclick="javascript:changer('.$i.', '.$j.');" />';
			break;
			case 'P': echo '<img src="images/pers.png" onclick="javascript:changer('.$i.', '.$j.');" />';
			break;		
			default: echo '<img src="images/terre.png" onclick="javascript:changer('.$i.', '.$j.');" />';
			break;
		}
		echo '</span><input type="hidden" id="sav_'.$i.'_'.$j.'" name="case_'.$j.'[]" value="'.$ligne[$i].'" />';
	}
	echo '<br/>';
	$j++;
}

if($j<30) {
	while($j < 30) {
		for($i=0;$i<40;$i++) {
			echo '<span id="case_'.$i.'_'.$j.'"><img src="images/terre.png" onclick="javascript:changer('.$i.', '.$j.');" /></span><input type="hidden" id="sav_'.$i.'_'.$j.'" name="case_'.$j.'[]" value="'.$ligne[$i].'" />';
		}
	echo '<br/>
	';
	$j++;
	}
}

?>
</form>
	<body>
</html>
