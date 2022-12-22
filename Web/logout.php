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


	include("include/config.inc.php");

	setcookie($config->cookie,"delete",time()-(60*60*24*7),"",$_SERVER["HTTP_HOST"]);
	
	if(isset($_SESSION["uid"])) @$query = $mysql->query("UPDATE `".$config->db_prefix."_webadmins` SET `logcode`=NULL WHERE `id`=".(int)$_SESSION["uid"]) or die ($mysql->error);
	
	unset($_SESSION["uid"]);
	unset($_SESSION["uname"]);
	unset($_SESSION["email"]);
	unset($_SESSION["level"]);
	unset($_SESSION["sid"]);
	unset($_SESSION["loggedin"]);
	unset($_SESSION["logg3din"]);
	
	$temp=$_SESSION["lang"];
	session_destroy();
	session_start();
	$_SESSION["lang"]=$temp;
	
	header("Location:index.php");

?>