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

$admin_site="lg";
$title2 ="_TITLELOGS";

//delete logs
if(isset($_POST["delall"]) && $_SESSION["loggedin"]) {
	$query = $mysql->query("DELETE FROM `".$config->db_prefix."_logs`") or die ($mysql->error);
	$user_msg="_LOGDELETED";
	log_to_db("Logs del","deleted all logs");
}
if(isset($_POST["delolder"]) && $_SESSION["loggedin"]) {
	$days=(int)$_POST["days"];
		$query = $mysql->query("DELETE FROM `".$config->db_prefix."_logs` WHERE UNIX_TIMESTAMP(now()) - timestamp > ".($days*84600)) or die ($mysql->error);
	$user_msg="_LOGDELETED";
	log_to_db("Logs del","deleted logs older than ".$days." days");
}
//get all logs
if(isset($_POST["username"]) && $_POST["username"]!="---" && $_SESSION["loggedin"]) {
	$username=$mysql->escape_string($_POST["username"]);
	$filter="`username`='".$username."'";
	$smarty->assign("username_checked",$username);
}
if(isset($_POST["action"]) && $_POST["action"]!="---" && $_SESSION["loggedin"]) {
	$action=$mysql->escape_string($_POST["action"]);
	$filter.=($filter)?" AND ":"";
	$filter.="`action`='".$action."'";
	$smarty->assign("action_checked",$action);
}
$logs=sql_get_logs($filter);
$smarty->assign("logs",$logs);

//get all usernames
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_logs` GROUP BY `username` ORDER BY `id`") or die ($mysql->error);
	$usernames["---"]="---";
	while($result = $query->fetch_object()) {
		if($result->username <> "") $usernames[html_safe($result->username)]=html_safe($result->username);
	}
	$smarty->assign("usernames",$usernames);
//get all actions
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_logs` GROUP BY `action` ORDER BY `id`") or die ($mysql->error);
	$actions["---"]="---";
	while($result = $query->fetch_object()) {
		if($result->action <> "") $actions[html_safe($result->action)]=html_safe($result->action);
	}
	$smarty->assign("actions",$actions);





?>