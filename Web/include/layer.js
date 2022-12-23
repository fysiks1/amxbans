function ToggleLayer(obj) {
	if(document.all) {
	  if(document.all[obj].style.display == 'none') {
			document.all[obj].style.display = 'block';
		} else {
			document.all[obj].style.display = 'none';
		}
	} else{
		if(document.getElementById(obj).style.display == 'none') {
			document.getElementById(obj).style.display = 'table-row';
		} else {
			document.getElementById(obj).style.display = 'none';
		}
  }
}

function openURI() {
	var control = document.navigator.nav;
	if (control.options[control.selectedIndex].value != 'no-url') {
		location.href = control.options[control.selectedIndex].value;
	}
}

function insertAtCaret (textarea, icon) { 
	if (document.getElementById(textarea).createTextRange && document.getElementById(textarea).caretPos) { 
		var caretPos = document.getElementById(textarea).caretPos; 
		selectedtext = caretPos.text; 
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == '' ? icon + '' : icon; 
		caretPos.text = caretPos.text + selectedtext; 
	} else if (document.getElementById(textarea).textLength > 0) {
		Deb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
		Fin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
		document.getElementById(textarea).value = Deb + icon + Fin; 
	} else{ 
		document.getElementById(textarea).value = document.getElementById(textarea).value + icon; 
	}
	document.getElementById(textarea).focus(); 
}

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
 // login security
var wseconds;
var wbuttontext;
function countdown(trys) {
    var button = document.getElementById('action');
    var button2 = document.getElementById('action2');
	
    if(trys <= 3) {
        wseconds = 10;
    } else {
        wseconds = 120;
    }
    wbuttontext = button.value;
    button.disabled = true;
	if (button2)
		button2.disabled = true;
    for(i = 0; i <= wseconds; ++i) {
        window.setTimeout('timer()', i * 1000);
    }
}
function timer() {
    var button = document.getElementById('action');
    var button2 = document.getElementById('action2');
    if(wseconds == 0) {
        if(button.childNodes[0]) {
            button.childNodes[0].nodeValue = wbuttontext;
			if (button2)
				button2.childNodes[0].nodeValue = wbuttontext;
        } else if (button.value) {
            button.value = wbuttontext;
			if (button2)
				button2.value = wbuttontext;
        } else {
            button.innerHTML = wbuttontext;
			if (button2)
				button2.innerHTML = wbuttontext;
        }
        button.disabled = false;
		if (button2)
			button2.disabled = false;
    } else {
        if(button.childNodes[0]) {
            
			if (button2)
				button2.childNodes[0].nodeValue = wbuttontext + ' ( ' + wseconds + ' )';
			button.childNodes[0].nodeValue = wbuttontext + ' ( ' + wseconds-- + ' )';
        } else if (button.value) {
            
			if (button2)
				button2.value = wbuttontext + ' ( ' + wseconds + ' )';
			button.value = wbuttontext + ' ( ' + wseconds-- + ' )';	
        } else {
            
			if (button2)
				button2.innerHTML = wbuttontext + ' ( ' + wseconds + ' )';
			button.innerHTML = wbuttontext + ' ( ' + wseconds-- + ' )';
        }
    }
}