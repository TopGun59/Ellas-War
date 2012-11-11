function balise(id_champ, balise1, balise2) {
	var champ = document.getElementById(id_champ);
	var scroll_position = champ.scrollTop;
	champ.focus();
	if(balise2 == '') { balise1 = ' '+balise1+' '; }
	if(typeof document.selection != 'undefined') {
		var range = document.selection.createRange();
		var chaine_select = range.text;
		range.text = balise1 + chaine_select + balise2;
		range = document.selection.createRange();
		if(chaine_select.length == 0) {
			range.move('character', -balise2.length);
		} else {
			range.moveStart('character', balise1.length + chaine_select.length + balise2.length);
		}
		range.select();
	} else if(typeof champ.selectionStart != 'undefined') {
		var curseur_debut = champ.selectionStart;
		var curseur_fin = champ.selectionEnd;
		var chaine_debut = champ.value.substr(0, curseur_debut);
		var chaine_fin = champ.value.substr(curseur_fin);
		var chaine_select = champ.value.substring(curseur_debut, curseur_fin);
		champ.value = chaine_debut + balise1 + chaine_select + balise2 + chaine_fin;

		var curseur_position;
		if (chaine_select.length == 0) {
			curseur_position = curseur_debut + balise1.length;
			champ.selectionStart = curseur_position;
	    	champ.selectionEnd = curseur_position;
		} else {
			champ.selectionStart = curseur_debut + balise1.length;
	    	champ.selectionEnd = curseur_debut + balise1.length + chaine_select.length;
		}
	} else {
		champ.value += balise1 + balise2;
	}
	champ.scrollTop = scroll_position;
	apercu(id_champ, id_champ+'_apercu');
}

function liste(id_input) {
	var list = '';
	while((puce = prompt('Entrez le contenu d\'une puce : (cliquez sur Annuler pour arrêter)', '')) != null) {
		list += '<puce>'+puce+'</puce>\n';
	}
	balise(id_input, '<liste>\n'+list, '</liste>');
}

function citation(id_input) {
	var citation = prompt('Auteur de la citation :', '');
	if(citation != '' && citation != null) {
		balise(id_input, '<citation:'+citation+'>', '</citation>');
	} else {
		balise(id_input, '<citation>', '</citation>');
	}
}

function lien(id_input) {
	var url = prompt('Veuillez entrer l\'adresse de votre lien :', 'http://');
	if(url != '' && url != null && url != 'http://') {
		balise(id_input, '<lien:'+url+'>', '</lien>');
	}
}

function email(id_input) {
	var email = prompt('Veuillez entrer l\'adresse de l\'email :', '');
	if(email != '' && email != null) {
		balise(id_input, '<email:'+email+'>', '</email>');
	}
}

function image(id_input) {
	var img = prompt('Veuillez entrer l\'adresse de l\'image :', 'http://');
	if(img != '' && img != null && img != 'http://') {
		balise(id_input, '<image:'+img+'>', '');
	}
}

function balise_masque(id_groupe_balise, button_plus) {
	var groupe = document.getElementById(id_groupe_balise);
	var boutton = document.getElementById(button_plus);
	if(groupe.style.display == 'none') {
		groupe.style.display = 'inline';
		boutton.value = '-';
	} else {
		groupe.style.display = 'none';
		boutton.value = '+';
	}
}

function active_apercu(id_apercu) {
	if(document.getElementById(id_apercu).style.display == 'block' || document.getElementById(id_apercu).style.display == '') {
		document.getElementById(id_apercu).style.display = 'none';
	} else {
		document.getElementById(id_apercu).style.display = 'block';
	}
}

function apercu(id_input, id_apercu) {
	var input = document.getElementById(id_input);
	var input_contenu = input.value;

	input_contenu = input_contenu.replace(/</g, '&lt;');
	input_contenu = input_contenu.replace(/>/g, '&gt;');
	input_contenu = input_contenu.replace(/\n/g, '<br />');

	input_contenu = input_contenu.replace(/&lt;lien:((https?|ftp):\/\/\S+[a-zA-Z0-9]\/?)&gt;(.+?)&lt;\/lien&gt;/g, '<a href="$1">$3</a>');
	input_contenu = input_contenu.replace(/&lt;email:([a-zA-Z0-9_.-]+@[a-zA-Z0-9_.-_.-]+\.[a-z]{2,4})&gt;(.+?)&lt;\/email&gt;/g, '<a href="mailto:$1">$2</a>');
	input_contenu = input_contenu.replace(/&lt;image:((https?|ftp):\/\/\S+[a-zA-Z0-9]\/?)&gt;/g, '<img src="$1" alt="" />');
	input_contenu = input_contenu.replace(/&lt;separation&gt;<br \/>/g, '&lt;separation&gt;');	
	input_contenu = input_contenu.replace(/&lt;separation&gt;/g, '<div class="separation"></div>');

	while(input_contenu.search(/&lt;police:(arial|times|courier|impact|verdana)&gt;(.+?)&lt;\/police&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;police:(arial|times|courier|impact|verdana)&gt;(.+?)&lt;\/police&gt;/g, '<span class="$1">$2</span>');
	}
	while(input_contenu.search(/&lt;taille:(minuscule|petit|moyenpetit|moyengrand|grand|enorme)&gt;(.+?)&lt;\/taille&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;taille:(minuscule|petit|moyenpetit|moyengrand|grand|enorme)&gt;(.+?)&lt;\/taille&gt;/g, '<span class="$1">$2</span>');
	}
	input_contenu = input_contenu.replace(/&lt;\/aligner&gt;<br \/>/g, '&lt;\/aligner&gt;');
	while(input_contenu.search(/&lt;aligner:(gauche|droite|centre|justifie)&gt;(.+?)&lt;\/aligner&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;aligner:(gauche|droite|centre|justifie)&gt;(.+?)&lt;\/aligner&gt;/g, '<div class="$1">$2</div>');
	}
	while(input_contenu.search(/&lt;style:(gras|italique|souligne|barre|suligne|surligne|encadre)&gt;(.+?)&lt;\/style&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;style:(gras|italique|souligne|barre|suligne|surligne|encadre)&gt;(.+?)&lt;\/style&gt;/g, '<span class="$1">$2</span>');
	}
	while(input_contenu.search(/&lt;couleur:(#[a-zA-Z0-9]+)&gt;(.+?)&lt;\/couleur&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;couleur:(#[a-zA-Z0-9]+)&gt;(.+?)&lt;\/couleur&gt;/g, '<span style="color:$1">$2</span>');
	}
	while(input_contenu.search(/&lt;titre:(1|2)&gt;(.+?)&lt;\/titre&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;titre:(1|2)&gt;(.+?)&lt;\/titre&gt;/g, '<span class="titre$1">$2</span>');
	}

	input_contenu = input_contenu.replace(/&lt;liste&gt;<br \/>/g, '&lt;liste&gt;');
	input_contenu = input_contenu.replace(/&lt;\/liste&gt;<br \/>/g, '&lt;/liste&gt;');
	input_contenu = input_contenu.replace(/&lt;\/puce&gt;<br \/>/g, '&lt;/puce&gt;');
	while(input_contenu.search(/&lt;liste&gt;(.+?)&lt;\/liste&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;liste&gt;(.+?)&lt;\/liste&gt;/g, '<ul>$1</ul>');
	}
	while(input_contenu.search(/&lt;puce&gt;(.+?)&lt;\/puce&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;puce&gt;(.+?)&lt;\/puce&gt;/g, '<li class="puce">$1</li>');
	}

	input_contenu = input_contenu.replace(/&lt;\/citation&gt;<br \/>/g, '&lt;/citation&gt;');
	while(input_contenu.search(/&lt;citation:(.+?)&gt;(.+?)&lt;\/citation&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;citation:(.+?)&gt;(.+?)&lt;\/citation&gt;/g, '<div class="citation_auteur">Citation : $1</div><div class="citation">$2</div>');
	}
	while(input_contenu.search(/&lt;citation&gt;(.+?)&lt;\/citation&gt;/g) != -1) {
		input_contenu = input_contenu.replace(/&lt;citation&gt;(.+?)&lt;\/citation&gt;/g, '<div class="citation_auteur">Citation : Auteur inconnu</div><div class="citation">$1</div>');
	}

	document.getElementById(id_apercu).innerHTML = input_contenu;
	var pourcentage_actuel_input = Math.round((100*input.scrollTop)/input.scrollHeight);
	var hauteur_apercu = Math.round((pourcentage_actuel_input*document.getElementById(id_apercu).scrollHeight)/100);
	document.getElementById(id_apercu).scrollTop = hauteur_apercu;
}

function lauch_apercu() {
	var textareas = document.getElementsByTagName('textarea');
	for(i = 0; i < textareas.length; i++) {
		if(textareas[i].getAttribute('onkeyup') != '') {
			apercu(textareas[i].getAttribute('id'), textareas[i].getAttribute('id')+'_apercu');
		}
	}
}

function smile(code,id_input) 
{	
	balise(id_input, code,'');
	//document.formulaire.contenu.value += code; 
} 

document.onload = setTimeout('lauch_apercu()', 100);


function GetId(id)
{
return document.getElementById(id);
}
var i=false; // La variable i nous dit si la bulle est visible ou non
 
function move(e) {
/*
  if(i) {  // Si la bulle est visible, on calcul en temps reel sa position ideale
    if (navigator.appName!="Microsoft Internet Explorer") { // Si on est pas sous IE
    GetId("curseur").style.left=e.pageX + 5+"px";
    GetId("curseur").style.top=e.pageY + 10+"px";
    }
    else { // Modif proposÃ© par TeDeum, merci Ã   lui
    if(document.documentElement.clientWidth>0) {
GetId("curseur").style.left=20+event.x+document.documentElement.scrollLeft+"px";
GetId("curseur").style.top=10+event.y+document.documentElement.scrollTop+"px";
    } else {
GetId("curseur").style.left=20+event.x+document.body.scrollLeft+"px";
GetId("curseur").style.top=10+event.y+document.body.scrollTop+"px";
         }
    }
  }
 */
}
 
function montre(text) {
  if(i==false) {
  GetId("curseur").style.visibility="visible"; // Si il est cacher (la verif n'est qu'une securité) on le rend visible.
  GetId("curseur").innerHTML = text; // on copie notre texte dans l'élément html
  i=true;
  }
}
function cache() {
if(i==true) {
GetId("curseur").style.visibility="hidden"; // Si la bulle est visible on la cache
i=false;
}
}
document.onmousemove=move; // dès que la souris bouge, on appelle la fonction move pour mettre Ã  jour la position de la bulle.

			function ouvre_popup(page) {				
				width = 660;
				leftf =150;
				height = 525;
				topf = 150;
				if(navigator.appName=="Microsoft Internet Explorer"){
					var riwindow = window.open(page,"IRC EllasWar" ,'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width= '+width+',height='+height+',left='+leftf+',top='+topf);
				}else{
				if(navigator.appName=="Opera"){				
					window.open(page,"IRC EllasWar","menubar=no, status=no, scrollbars=no, menubar=no, width=660, height=520");
				}else{				
					var riwindow = window.open(page,"IRC EllasWar" ,'toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width= '+width+',height='+height+',left='+leftf+',top='+topf);
				}
				if(navigator.appName!="Opera"){		
					if (riwindow){
						riwindow.focus();
					}
				}
			}
			}
			
google_ad_client = "pub-9343963495151849";
google_ad_slot = "8565488434";
google_ad_width = 468;
google_ad_height = 60;
