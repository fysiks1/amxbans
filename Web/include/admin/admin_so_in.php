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

	$admin_site="in";
	$title2 ="_TITLEINFO";

	//optimize tables
	if(isset($_POST["optimize"]) && $_SESSION["loggedin"]) {
		$query = $mysql->query("SHOW TABLES FROM `" . $config->db_db. "` LIKE '".$config->db_prefix."_%'");
		while($result = $query->fetch_row()) {
			$tables.=(($tables)?",":"")."`".$result[0]."`";
		}
		$query = $mysql->query("OPTIMIZE TABLES ".$tables);
		$user_msg="_DBOPTIMIZED";
	}

	//prune db
	$prunecount=-1;
	if(isset($_POST["prunedb"]) && $_SESSION["loggedin"]) {
		$query=$mysql->query("SELECT ba.bid,ba.ban_created,ba.ban_length,se.timezone_fixx FROM ".$config->db_prefix."_bans as ba 
							LEFT JOIN ".$config->db_prefix."_serverinfo AS se ON ba.server_ip=se.address WHERE ba.expired=0");
		$prunecount=0;
		while($result = $query->fetch_object()) {
			//prune expired bans
			if(($result->ban_created + ($result->timezone_fixx * 60 * 60) + ($result->ban_length * 60)) < time() && $result->ban_length != "0") {
				$prunecount++;
				$prune_query = $mysql->query("UPDATE `".$config->db_prefix."_bans` SET `expired`=1 WHERE `bid`=".$result->bid);
				$prune_query = $mysql->query("INSERT INTO `".$config->db_prefix."_bans_edit` (`bid`,`edit_time`,`admin_nick`,`edit_reason`) VALUES (
								'".$result->bid."','".($result->ban_created + ($result->timezone_fixx * 60 * 60) + ($result->ban_length * 60))."','amxbans','Bantime expired')");
			}
		}
		$smarty->assign("prunecount",$prunecount);
		$user_msg="_DBPRUNED";
	}

	function return_bytes($val) {
		$val = trim($val);
		$last = strtolower($val[strlen($val)-1]);
		switch($last) {
			// The 'G' modifier is available since PHP 5.1.0
			case 'g':
				$val *= 1024;
			case 'm':
				$val *= 1024;
			case 'k':
				$val *= 1024;
		}

		return $val;
	}
	@$gd=gd_info();
	$gd_version=$gd["GD Version"];
	$php_settings=array(
			"display_errors"=>(ini_get('display_errors')=="")?"off":ini_get('display_errors'),
			"register_globals"=>(ini_get('register_globals')==1 || ini_get('register_globals')=="on")?"_ON":"_OFF",
			"magic_quotes_gpc"=>(get_magic_quotes_gpc()==true)?"_ON":"_OFF",
			"safe_mode"=>(ini_get('safe_mode')==1 || ini_get('safe_mode')=="on")?"_ON":"_OFF",
			"post_max_size"=>ini_get('post_max_size')." (".return_bytes(ini_get('post_max_size'))." bytes)",
			"upload_max_filesize"=>ini_get('upload_max_filesize')." (".return_bytes(ini_get('upload_max_filesize'))." bytes)",
			"max_execution_time"=>ini_get('max_execution_time'),
			"version_php"=>phpversion(),
			"version_amxbans_web"=>$config->v_web,
			"server_software"=>$_SERVER["SERVER_SOFTWARE"],
			"mysql_version"=>mysqli_get_client_info(),
			"bcmath"=>(extension_loaded('bcmath')=="1")?"_YES":"_NO",
			"gmp"=>(extension_loaded('gmp')=="1")?"_YES":"_NO",
			"gd"=>(extension_loaded('gd')=="1")?"_YES":"_NO",
			"version_gd"=>$gd_version
		);
	$smarty->assign("php_settings",$php_settings);

	//clear smarty cache
	if(isset($_POST["clear"]) && $_SESSION["loggedin"]) {
		//special function available from smarty
		$smarty->clear_compiled_tpl();
		$user_msg="_CACHEDELETED";
	}
	//repair files db
	if(isset($_POST["file_repair"]) && $_SESSION["loggedin"]) {
		$repaired=sql_get_files_count_fail(1);
	}
	//repair comments db
	if(isset($_POST["comment_repair"]) && $_SESSION["loggedin"]) {
		$repaired=sql_get_comments_count_fail(1);
	}
	function db_size($name,$prefix) {
		global $mysql;
		$db_size = 0;

		$query = $mysql->query("SHOW TABLE STATUS FROM `" . $name. "` LIKE '".$prefix."_%'");
		if (!$query)
			return "_NOTAVAILABLE";
		while ($value = $query->fetch_assoc())
			$db_size += $value["Data_length"] + $value['Index_length'];

		return $db_size;
	}

	function format_size($size) {
		if($size == "_NOTAVAILABLE"){ return "_NOTAVAILABLE"; }
		if($size >= 1073741824) { return round(($size / 1073741824), 2) . "GB"; }
		elseif($size >= 1048576) { return round(($size / 1048576), 2) . "MB"; }
		elseif($size >= 1024) { return round(($size / 1024), 2) . " KB"; }
		else { return $size . " Byte"; }

	}
	$smarty->assign("bans",array("count"=>sql_get_bans_count(0),"activ"=>sql_get_bans_count(1)));
	$smarty->assign("db_size",format_size(db_size($config->db_db,$config->db_prefix)));
	$smarty->assign("auto_prune",$config->auto_prune);
	$smarty->assign("comment_count",array("count"=>sql_get_comments_count(0),"fail"=>sql_get_comments_count_fail(0)));
	$smarty->assign("file_count",array("count"=>sql_get_files_count(0),"fail"=>sql_get_files_count_fail(0)));
	$smarty->assign("msg",$user_msg);

?>