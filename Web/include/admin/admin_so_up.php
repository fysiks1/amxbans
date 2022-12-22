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

$update_url = "http://www.amxbans.net/version.php";


//get version from servers
$query=mysql_query("SELECT `address`,`amxban_version` FROM `".$config->db_prefix."_serverinfo` ORDER BY `address`") or die(mysql_error());
$version_server=array();
while($result = mysql_fetch_object($query)) {
	$version=array(
		"address"=>$result->address,
		"version"=>$result->amxban_version
	);
	$version_server[]=$version;
	$server_count++;
}
$smarty->assign("server_count",$server_count);
$smarty->assign("version_server",$version_server);

/*
//get versions from update db
@$mysql_upd = mysql_connect($update_ip,$update_user,$update_pw) or $error[]="_UPD_CONNECT_ERROR";
if($mysql_upd) {
	$resource = mysql_select_db($update_db,$mysql_upd) or $error[]="_UPD_DB_ERROR";
	if(!$error) {	
		//get newest web versions info
		$query = mysql_query("SELECT * FROM `version` WHERE `for`='web' ORDER BY `release` DESC LIMIT 1",$mysql_upd) or $error[]="_UPD_SELECT_ERROR";
		while($result = mysql_fetch_object($query)) {
			$version=array(
				"release"=>$result->release,
				"beta"=>$result->beta,
				"recommended_to"=>$result->recommended_to,
				"changelog"=>$result->changelog,
				"url"=>$result->url
			);
		}
		$smarty->assign("version_db_web",$version);
		//get newest plugin versions info
		$query = mysql_query("SELECT * FROM `version` WHERE `for`='plugin' ORDER BY `release` DESC LIMIT 1",$mysql_upd) or $error[]="_UPD_SELECT_ERROR";
		while($result = mysql_fetch_object($query)) {
			$version=array(
				"release"=>$result->release,
				"beta"=>$result->beta,
				"recommended_to"=>$result->recommended_to,
				"changelog"=>$result->changelog,
				"url"=>$result->url
			);
		}
		$smarty->assign("version_db_plugin",$version);
	}
	mysql_close($mysql_upd);
}
*/
//get versions from update url
$smarty->assign("version_latest", file_get_contents($update_url));

$smarty->assign("error",$error);
?>