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
function log_to_db($action,$remarks) {
	global $config, $mysql;
	$query = $mysql->query("INSERT INTO `".$config->db_prefix."_logs` (
			`id` ,
			`timestamp` ,
			`ip` ,
			`username` ,
			`action` ,
			`remarks` 
			)
			VALUES (
			NULL , UNIX_TIMESTAMP(), '".$_SERVER["REMOTE_ADDR"]."', '".$_SESSION["uname"]."', '".sql_safe($action)."', '".sql_safe($remarks)."'
			);
		") or die ($mysql->error);
}

?>