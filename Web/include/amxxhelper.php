<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by SeToY & |PJ|ShOrTy

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

session_start();
if(!$_SESSION["loggedin"]) {
	echo "No Access!";
	exit;
}

require_once("config.inc.php");

$id = $_GET["id"];

if(file_exists("../templates/".$config->design."/amxbans.css")) {
	$design="/".$config->design;
}

?>

<html>
<head>
<title>AMXBans <?php echo $config->v_web; ?> - Access Generator</title>
<link rel="stylesheet" type="text/css" href="../templates<?php echo $design; ?>/amxbans.css" />
<style type="text/css">
<!--
body {margin:0; padding: 0;}
-->
</style>
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
	WindowClose();
}
function GetBox( id , flag ) {
	if ( document.getElementById(id).checked == true ) {
		return flag;
	} else {
		return "";
	}
}
function WindowClose() {
	if (window.opener)
		self.close();
}
-->
</script>
</head>
<body onLoad="self.focus();GetAccess('<?php echo $id ?>');" style="margin:0; padding: 0;" >

<form name="amxhfrm" method="POST">
<table align="center" width="95%">
<tr><td><input type="checkbox" id="chka" >a - Immunity (cant be kicked / banned etc.)</input></td></tr>
<tr><td><input type="checkbox" id="chkb" >b - Reserved Slots (can use reserved Slots)</input></td></tr>
<tr><td><input type="checkbox" id="chkc" >c - amx_kick Command</input></td></tr>
<tr><td><input type="checkbox" id="chkd" >d - amx_ban and amx_unban Command</input></td></tr>
<tr><td><input type="checkbox" id="chke" >e - amx_slay and amx_slap Command</input></td></tr>
<tr><td><input type="checkbox" id="chkf" >f - amx_map Command</input></td></tr>
<tr><td><input type="checkbox" id="chkg" >g - amx_cvar Command (not all CVARS available)</input></td></tr>
<tr><td><input type="checkbox" id="chkh" >h - amx_cfg Command</input></td></tr>
<tr><td><input type="checkbox" id="chki" >i - amx_chat and other Chat-Commands</input></td></tr>
<tr><td><input type="checkbox" id="chkj" >j - amx_vote and other Vote-Commands</input></td></tr>
<tr><td><input type="checkbox" id="chkk" >k - Access to sv_password cvar (through amx_cvar Command)</input></td></tr>
<tr><td><input type="checkbox" id="chkl" >l - Access to amx_rcon command and rcon_password cvar (through amx_cvar Command)</input></td></tr>
<tr><td><input type="checkbox" id="chkm" >m - Userdefined Level A (for other Plugins)</input></td></tr>
<tr><td><input type="checkbox" id="chkn" >n - Userdefined Level B</input></td></tr>
<tr><td><input type="checkbox" id="chko" >o - Userdefined Level C</input></td></tr>
<tr><td><input type="checkbox" id="chkp" >p - Userdefined Level D</input></td></tr>
<tr><td><input type="checkbox" id="chkq" >q - Userdefined Level E</input></td></tr>
<tr><td><input type="checkbox" id="chkr" >r - Userdefined Level F</input></td></tr>
<tr><td><input type="checkbox" id="chks" >s - Userdefined Level G</input></td></tr>
<tr><td><input type="checkbox" id="chkt" >t - Userdefined Level H</input></td></tr>
<tr><td><input type="checkbox" id="chku" >u - Menu-Access</input></td></tr>
<tr><td><input type="checkbox" id="chkz" >z - User (no Admin)</input></td></tr>
<tr><td align="center">
	<img src="../images/accept.png" style="cursor:pointer;" title="Accept" onclick="SaveAccess('<?php echo $id ?>');"/>
	<img src="../images/delete.png" style="cursor:pointer;" title="Delete" onclick="opener.document.getElementById('<?php echo $id ?>').value = '';self.close();"/>
	<img src="../images/cancel.png" style="cursor:pointer;" title="Cancel" onclick="self.close();"/>
</td></tr>
</table>

</form>
</body>
</html>