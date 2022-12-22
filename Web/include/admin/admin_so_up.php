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

$admin_site="up";
$title2 ="_TITLEUPDATE";
$server_count = 0;

$update_url = "http://www.amxbans.net/version.php?web";


//get version from servers
$query=$mysql->query("SELECT `address`,`amxban_version` FROM `".$config->db_prefix."_serverinfo` ORDER BY `address`") or die($mysql->error);
$version_server=array();
while($result = $query->fetch_object()) {
	$version=array(
		"address"=>$result->address,
		"version"=>$result->amxban_version
	);
	$version_server[]=$version;
	$server_count++;
}
$smarty->assign("server_count",$server_count);
$smarty->assign("version_server",$version_server);
//get versions from update url
$smarty->assign("version_latest", file_get_contents($update_url));

//$smarty->assign("error",($error? $error));
?>