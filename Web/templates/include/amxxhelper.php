<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta http-equiv="pragma" content="no-cache" /> 
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="../_css/style_popup.css" />
	<title>AMXBans 6.0 -//- Your Solution For Multiple Server Bans</title>
	<script type="text/javascript"> 
	<!--
	function GetAccess(id) {
		var access = opener.document.getElementById(id).value;
		SetBox( "chka" , access , "a" );
		SetBox( "chkb" , access , "b" );
		SetBox( "chkc" , access , "c" );
		SetBox( "chkd" , access , "d" );
		SetBox( "chke" , access , "e" );
		SetBox( "chkf" , access , "f" );
		SetBox( "chkg" , access , "g" );
		SetBox( "chkh" , access , "h" );
		SetBox( "chki" , access , "i" );
		SetBox( "chkj" , access , "j" );
		SetBox( "chkk" , access , "k" );
		SetBox( "chkl" , access , "l" );
		SetBox( "chkm" , access , "m" );
		SetBox( "chkn" , access , "n" );
		SetBox( "chko" , access , "o" );
		SetBox( "chkp" , access , "p" );
		SetBox( "chkq" , access , "q" );
		SetBox( "chkr" , access , "r" );
		SetBox( "chks" , access , "s" );
		SetBox( "chkt" , access , "t" );
		SetBox( "chku" , access , "u" );
		SetBox( "chkz" , access , "z" );
	}
	function SetBox( id , access , flag ) {
		var pos = access.indexOf(flag);
		if ( pos >= 0) {
			document.getElementById(id).checked=true;
		} else {
			document.getElementById(id).checked=false;
		}
		return true;
	}
	function SaveAccess( id ) {
		var access = "";
		access += GetBox( "chka" , "a");
		access += GetBox( "chkb" , "b");
		access += GetBox( "chkc" , "c");
		access += GetBox( "chkd" , "d");
		access += GetBox( "chke" , "e");
		access += GetBox( "chkf" , "f");
		access += GetBox( "chkg" , "g");
		access += GetBox( "chkh" , "h");
		access += GetBox( "chki" , "i");
		access += GetBox( "chkj" , "j");
		access += GetBox( "chkk" , "k");
		access += GetBox( "chkl" , "l");
		access += GetBox( "chkm" , "m");
		access += GetBox( "chkn" , "n");
		access += GetBox( "chko" , "o");
		access += GetBox( "chkp" , "p");
		access += GetBox( "chkq" , "q");
		access += GetBox( "chkr" , "r");
		access += GetBox( "chks" , "s");
		access += GetBox( "chkt" , "t");
		access += GetBox( "chku" , "u");
		access += GetBox( "chkz" , "z");
		
		opener.document.getElementById(id).value = access;
		Shadowbox.close();
	}
	function GetBox( id , flag ) {
		if ( document.getElementById(id).checked == true ) {
			return flag;
		} else {
			return "";
		}
	}
	
	function submitForm(){
		var s = window.parent.Shadowbox;
		var q = document.getElementById('q');
		var t = q.value == 'Search' ? "You didn't enter anything!" : 'You entered: ' + q.value;
 
		s.open({
			player:     'html',
			title:      'Search Query',
			content:    '<div style="padding-top:40px;text-align:center">' + t + '</div>',
			width:      300,
			height:     100
		});
	}
 
	function blurQ(){
		var q = document.getElementById('q');
		if(q.value == ''){
			q.style.color = '#aaa';
			q.value = 'Search';
		}
	}

	function focusQ(){
		var q = document.getElementById('q');
		q.style.color = '#000';
		if(q.value == 'Search') q.value = '';
	}
	-->
	</script>
</head>

<form id="shadowbox-form" name="shadowbox-form" action="#" onsubmit="submitForm();"> 
 
    <input id="q" type="text" value="Search" onfocus="focusQ();" onblur="blurQ();"> 
    <input id="submit" type="submit" value="Go"> 
 
</form> 

<body id="top">
<div id="site">
	<div class="center-wrapper" style="width:500px;">

		<div class="main">
			<div class="spacer">&nbsp;</div>

			<div class="post">
				<form name="amxhfrm" method="post" action=""> 
						<input type="checkbox" id="chka"/> 
						a - Immunity (cant be kicked / banned etc.)<br/>
						<input type="checkbox" id="chkb"/> 
						b - Reserved Slots (can use reserved Slots)<br/>
						<input type="checkbox" id="chkc"/> 
						c - amx_kick Command <br/>
						<input type="checkbox" id="chkd"/> 
						d - amx_ban and amx_unban Command <br/>
						<input type="checkbox" id="chke"/> 
						e - amx_slay and amx_slap Command <br/>
						<input type="checkbox" id="chkf"/> 
						f - amx_map Command <br/>
						<input type="checkbox" id="chkg"/> 
						g - amx_cvar Command (not all CVARS available) <br/>
						<input type="checkbox" id="chkh"/> 
						h - amx_cfg Command <br/>
						<input type="checkbox" id="chki"/> 
						i - amx_chat and other Chat-Commands <br/>
						<input type="checkbox" id="chkj"/> 
						j - amx_vote and other Vote-Commands <br/>
						<input type="checkbox" id="chkk"/> 
						k - Access to sv_password cvar (through amx_cvar Command) <br/>
						<input type="checkbox" id="chkl"/> 
						l - Access to amx_rcon command and rcon_password cvar (through amx_cvar Command) <br/>
						<input type="checkbox" id="chkm"/> 
						m - Userdefined Level A (for other Plugins) <br/>
						<input type="checkbox" id="chkn"/> 
						n - Userdefined Level B <br/>
						<input type="checkbox" id="chko"/> 
						o - Userdefined Level C <br/>
						<input type="checkbox" id="chkp"/> 
						p - Userdefined Level D <br/>
						<input type="checkbox" id="chkq"/> 
						q - Userdefined Level E <br/>
						<input type="checkbox" id="chkr"/> 
						r - Userdefined Level F <br/>
						<input type="checkbox" id="chks"/> 
						s - Userdefined Level G <br/>
						<input type="checkbox" id="chkt"/> 
						t - Userdefined Level H<br/> 
						<input type="checkbox" id="chku"/> 
						u - Menu-Access <br/>
						<input type="checkbox" id="chkz"/> 
						z - User (no Admin)<br/>
						<input type="button" class="button" name="accept" value="Accept" onclick="SaveAccess('custom_flags_2');"/> 
						<input type="button" class="button" name="delete" value="Delete" onclick="opener.document.getElementById('cftxt2').value = '';Shadowbox.close();"/> 
						<input type="button" class="button" name="cancel" value="Cancel" onclick="Shadowbox.close();"/>  
				</form> 
			</div>
		</div>
	</div>
</div>
</body>
</html>