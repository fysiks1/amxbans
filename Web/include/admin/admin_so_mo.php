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

if(!$_SESSION["loggedin"]) {
	header("Location:index.php");
}

$admin_site="mo";
$title2 ="_TITLEMODULE";

$mid=(int)$_POST["mid"];

//save module
if(isset($_POST["save"]) && $_SESSION["loggedin"]) {
		$query = $mysql->query("UPDATE `".$config->db_prefix."_modulconfig` SET 
					`activ`=".(isset($_POST["activ"])?1:0).",
					`menuname`='".$mysql->escape_string($_POST["menuname"])."',
					`name`='".$mysql->escape_string($_POST["name"])."',
					`index`='".$mysql->escape_string($_POST["index"])."'
					WHERE `id`=".$mid." LIMIT 1") or die ($mysql->error);
		$user_msg='_MODULSAVED';
		log_to_db("Modules config","Edited module: ID ".$mid);
}

//get all modules
$modules2=sql_get_modules(0,$tmp);

$smarty->assign("modules_menu_count",$modules_menu_count);
$smarty->assign("modules2",$modules2);
	
?>