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
		#exit;
	}

    $admin_site="av";
	$title2 ="_TITLEAMXADMINS";
	$user_msg=array();
	
	$aid=(int)$_POST["aid"];
	
	//amxadmin delete
	if(isset($_POST["del"]) && $_SESSION["loggedin"]) {
		$query = $mysql->query("DELETE FROM `".$config->db_prefix."_amxadmins` WHERE `id`=".$aid." LIMIT 1") or die ($mysql->error);
		$query = $mysql->query("DELETE FROM `".$config->db_prefix."_admins_servers` WHERE `admin_id`=".$aid) or die ($mysql->error);
		$user_msg[]='_AMXADMINDELETED';
		log_to_db("AMXXAdmin config","Deleted admin: ".sql_safe($_POST["username"]));
	}
	//validate input values
	if((isset($_POST["save"]) || isset($_POST["new"])) && $_SESSION["loggedin"]) {
		$username=sql_safe($_POST["username"]);
		$password=sql_safe($_POST["password"]);
		$access=sql_safe($_POST["access"]);
		$flags=sql_safe($_POST["flags"]);
		$steamid=sql_safe($_POST["steamid"]);
		$nickname=sql_safe($_POST["nickname"]);
		
		if(!validate_value($username,"name",$error,1,31,"USERNAME")) $user_msg[]=$error;
		if(strrpos($flags,"a")===true || strrpos($flags,"e")===false) if(!validate_value($password,"name",$error,4,31,"PASSWORD")) $user_msg[]=$error;
		if(!validate_value($access,"amxxaccess",$error)) $user_msg[]=$error;
		if(!validate_value($flags,"amxxflags",$error)) $user_msg[]=$error;
		//validate steamid depending on flags (steamid, name, ip)
		if(strrpos($flags,"b")!==false) { //clantag
			if(!validate_value($steamid,"name",$error,1,30,"TAG")) $user_msg[]=$error;
		} else if(strrpos($flags,"c")!==false) { //steamid
			if(!validate_value($steamid,"steamid",$error)) $user_msg[]=$error;
		} else if(strrpos($flags,"d")!==false) { //ip
			if(!validate_value($steamid,"ip",$error)) $user_msg[]=$error;
		}
		if(!validate_value($nickname,"name",$error,1,31,"NICKNAME")) $user_msg[]=$error;
	}
	//amxadmin edit
	if(isset($_POST["save"]) && $_SESSION["loggedin"]) {
		if(isset($_POST["noend"])) {
			$days=0;
			$exp="0";
		} elseif (isset($_POST["moredays"]) && (int)$_POST["moredays"]<>"") {
			$days=(int)$_POST["days"] + (int)$_POST["moredays"];
			$exp="(`created`+(".($days * 86400)."))";
		} else {
			$days=(int)$_POST["days"];
			$exp=($days<=0)?"0":"(`created`+(".($days * 86400)."))";
		}
		if(!$user_msg) {
			$query = $mysql->query("UPDATE `".$config->db_prefix."_amxadmins` SET 
						`username`='".$username."',
						`password`='".$password."',
						`access`='".$access."',
						`flags`='".$flags."',
						`steamid`='".$steamid."',
						`nickname`='".$nickname."',
						`ashow`='".(int)$_POST["ashow"]."',
						`expired`=".$exp.",
						`days`=".$days."
						WHERE `id`=".$aid." LIMIT 1") or die ($mysql->error);
			$user_msg[]='_AMXADMINSAVESUCCESS';
			log_to_db("AMXXAdmin config","Edited admin: ".sql_safe($_POST["username"])." (nick: ".sql_safe($_POST["nickname"]).")");
		}
	}
	//amxadmin add
	if(isset($_POST["new"]) && $_SESSION["loggedin"]) {
		$exp="0,";
		if((int)$_POST["days"]=="" && (!isset($_POST["noend"]))) {
			$user_msg[]='_NOVALIDTIME';
		} elseif (isset($_POST["noend"])) {
			$days=0;
		} else { 
			$days=(int)$_POST["days"];
			$exp="(UNIX_TIMESTAMP()+(".($days * 86400).")),";
		}
		if(!$user_msg) {
			$name=sql_safe($_POST["username"]);
			//add new amxxadmin to db
			$query = $mysql->query("INSERT INTO `".$config->db_prefix."_amxadmins` 
							(`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) 
							VALUES (
							'".$username."',
							'".$password."',
							'".$access."',
							'".$flags."',
							'".$steamid."',
							'".$nickname."',
							".(int)$_POST["ashow"].",
							UNIX_TIMESTAMP(),
							".$exp."
							".$days."
							)") or die ($mysql->error ."INSERT INTO `".$config->db_prefix."_amxadmins` 
							(`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) 
							VALUES (
							'".$username."',
							'".$password."',
							'".$access."',
							'".$flags."',
							'".$steamid."',
							'".$nickname."',
							".(int)$_POST["ashow"].",
							UNIX_TIMESTAMP(),
							".$exp."
							".$days."
							)");
			//add as admin to selected servers
			$adminid=$mysql->insert_id;
			$addtoserver=$_POST["addtoserver"];
			$sban=sql_safe($_POST["staticbantime"]);
			if(is_array($addtoserver)) {
				foreach($addtoserver as $k => $v) {
					$query = $mysql->query("INSERT INTO `".$config->db_prefix."_admins_servers` 
							(`admin_id`,`server_id`,`custom_flags`,`use_static_bantime`) 
							VALUES 
							('".$adminid."','".$v."','','".$sban."')
							") or die ($mysql->error);
					}
			}
			$user_msg[]='_AMXADMINADDED';
			log_to_db("AMXXAdmin config","Added admin: ".$name);
		} else {
			$input=array(
				"username"=>html_safe($username),
				"password"=>$password,
				"access"=>$access,
				"flags"=>$flags,
				"steamid"=>$steamid,
				"nickname"=>html_safe($nickname),
				"ashow"=>(int)$_POST["ashow"],
				"days"=>$_POST["days"],
				"moredays"=>(int)$_POST["moredays"],
				"noend"=>(isset($_POST["noend"])?1:0)
				);
			$smarty->assign("input",$input);
		}
	}
	//amxadmins holen
	$admins=sql_get_amxadmins();
	
	//server holen
	$servers=sql_get_server();
	if(is_array($servers)) {
		foreach($servers as $k => $v) {
			$svalues[]=$v["sid"];
			$soutput[]=$v["hostname"];
		}
	}
	
	$smarty->assign("yesno_choose",array("yes","no"));
	$smarty->assign("yesno_output",array("_YES","_NO"));
	$smarty->assign("ashow_output",array("_NO","_YES"));
	$smarty->assign("ashow",array(0,1));
	$smarty->assign("admins",$admins);
	$smarty->assign("svalues",$svalues);
	$smarty->assign("soutput",$soutput);
	
?>