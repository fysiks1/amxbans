<?php session_start(); if(@$_SESSION["loggedin"]) { ?>
function LiveBanCopyVars (name,steamid,ip,userid) {
	document.getElementById('player_name').value = name;
	document.getElementById('player_uid').value = userid;
	document.getElementById('player_steamid').value = steamid;
	document.getElementById('player_ip').value = ip;
}

function SetNewPassword(fieldid,lang1,lang2,notmatch) {
	var pw1 = window.prompt(lang1, '');
	if(!pw1) return false;
	
	var pw2 = window.prompt(lang2, '');
	if(pw1 != pw2) { 
		alert(notmatch);
		return false;
	} else {
		document.getElementById(fieldid).value = pw1;
		return true;
	}
}

function ToggleMenu_open(obj) {
	if(obj != 1) { ToggleMenu_close('1'); }
	if(obj != 2) { ToggleMenu_close('2'); }
	if(obj != 3) { ToggleMenu_close('3'); }
	if(obj != 4) { ToggleMenu_close('4'); }
	if(obj != 5) { ToggleMenu_close('5'); }

	if(document.getElementById('menu_'+obj).style.display == 'none') {
		document.getElementById('menu_'+obj).style.display = 'block';
	}
}

function ToggleMenu_close(obj) {
	if(document.getElementById('menu_'+obj).style.display == 'block') {
		document.getElementById('menu_'+obj).style.display = 'none';
	}
}

<?php } ?>
function ToggleLayer(obj) {
	if(document.all) {
		if(document.all[obj].style.display == 'none') {
			document.all[obj].style.display = 'block';
		} else {
			document.all[obj].style.display = 'none';
		}
	} else {
		if(document.getElementById(obj).style.display == 'none') {
			if(document.getElementById(obj).tagName == 'DIV') {
				document.getElementById(obj).style.display = 'block';
			} else {
				document.getElementById(obj).style.display = 'table-row';
			}
		} else {
			document.getElementById(obj).style.display = 'none';
		}
	}
}

function NewToggleLayer(element) {
	var e = $('#' + element);
	if (e.css('display') == 'none') {
		e.show().find('div').slideDown('slow')
	} else {
		 e.find('div').slideUp('slow', function() { $(this).parent().parent().hide(); })
	}
}