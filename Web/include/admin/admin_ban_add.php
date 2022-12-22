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

	$admin_site="ban_add";
	$title2 = "_TITLEBANADD";

	//save ban
	if(isset($_POST["save"]) && $_SESSION["loggedin"]) {
		if(isset($_POST["reasoncheck"])=="yes") {
			$reason=sql_safe(trim($_POST["user_reason"]));
			$reason_custom=1;
		} else {
			$reason=$_POST["ban_reason"];
		}
		if(!$reason) $reason=$_POST["ban_reason"];
		
		if(isset($_POST["perm"])=="yes") {
			$ban_length=0;
		} else {
			$ban_length=(int)$_POST["ban_length"];
		}
		if($ban_length < 0) $ban_length=0;
		
		$ban_type=$_POST["ban_type"];
		$name=sql_safe(trim($_POST["name"]));
		$steamid=sql_safe(trim($_POST["steamid"]));
		$ip=sql_safe(trim($_POST["ip"]));
		
		//validate the input
		if($steamid) if(!preg_match("/^STEAM_0:(0|1):[0-9]{1,10}$/",$steamid)) $user_msg="_STEAMIDINVALID";
		if($ip) if(!preg_match("/^[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}$/",$ip)) $user_msg="_IPINVALID";
		if(!$name)  $user_msg="_NOBANNAME";
		if(!$steamid && $ban_type=="S") $user_msg="_NOBANSTEAMID";
		if(!$ip && $ban_type=="SI") $user_msg="_NOIP"; 
		
		//check if a activ ban exists
		if(!$user_msg) {
			$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_bans` WHERE "
						.(($steamid)?"`player_id`='".$steamid."'":"").
						(($steamid && $ip)?" AND ":"").
						(($ip)?"`player_ip`='".$ip."'":"").
						" AND `expired`=0");
			if($query->num_rows) $user_msg="_ACTIVBANEXISTS";
		}
		
		//add the ban
		if(!$user_msg) {
			$query = $mysql->query("INSERT INTO `".$config->db_prefix."_bans` 
					(`player_ip`,`player_id`,`player_nick`,`admin_nick`,`admin_id`,`ban_type`,`ban_reason`,`ban_created`,`ban_length`,`server_name`) 
					VALUES 
					('".$ip."','".$steamid."','".$name."','".$_SESSION["uname"]."','".$_SESSION["uname"]."','".$ban_type."','".$reason."',UNIX_TIMESTAMP(),'".$ban_length."','website')
					") or die ($mysql->error);
			$user_msg='_BANADDSUCCESS';
			log_to_db("Add ban","playernick: ".$name." / time: ".$ban_length);	
		} else {
			$inputs=array("name"=>$name,"steamid"=>$steamid,"ip"=>$ip,"reason"=>$reason,"reason_custom"=>$reason_custom,"length"=>$ban_length,"type"=>$ban_type);
			$smarty->assign("inputs",$inputs);
		}
	}
	
	//get reasons
	$reasons=sql_get_reasons_list();
	$smarty->assign("reasons",$reasons);
	
	$banby_output=array("Steamid","Steamid & IP");
	$banby_values=array("S","SI");
	$smarty->assign("banby_output",$banby_output);
	$smarty->assign("banby_values",$banby_values);




?>