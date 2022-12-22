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
require_once("include/rcon_hl_net.inc");
	
	if(!$_SESSION["loggedin"]) {
		header("Location:index.php");
	}

	$admin_site="ban_add_online";
	$title2 = "_TITLEBANADDONLINE";
	
	if(isset($_POST["server"])) {
		$sid=(int)$_POST["server"];
	} else {
		$sid=0;
	}
	
	//get servers
	$servers_array = array();
	$resource = $mysql->query("SELECT * FROM ".$config->db_prefix."_serverinfo ORDER BY hostname ASC") or die ($mysql->error);
	while($result = $resource->fetch_object()) {
		$servers_list[] = $result->id;
		$key = array_keys($servers_list);
		$count = count($key);
		
		//get some info
		$server = new Rcon();
		$server_address=explode(":",trim($result->address));
		$server->Connect($server_address[0],$server_address[1], $result->rcon);
		$infos = $server->Info();
		$server->Disconnect();
		for ($i=0; $i<$count; $i++) {
			$servers_info = array(
				"id"		=> $key[$i],
				"hostname"	=> $result->hostname,
				"address"	=> $result->address,
				"rcon"		=> $result->rcon,
				"map"         => $infos[map],
				"mod"        	=> $infos[mod],
				"os"		=> ($infos[os]=="l")?"Linux":"Windows",
				"cur_players"	=> $infos[activeplayers], 
				"max_players"	=> $infos[maxplayers],
				"bot_players"	=> $infos[botplayers]
			);
		}
		$servers_array[] = $servers_info;
	}
	//address for $sid exists?
	if(!isset($servers_array[$sid]["address"])) $sid=0;
	$hostname=$servers_array[$sid]["hostname"];
	$smarty->assign("servers",$servers_array);
	$smarty->assign("hostname",$hostname);
	$smarty->assign("server_select",$sid);
	
	//get reasons
	$reasons=sql_get_reasons_list();
	$smarty->assign("reasons",$reasons);
	
	//set bantypes
	$banby_output=array("Steamid","Steamid & IP");
	$banby_values=array("S","SI");
	$smarty->assign("banby_output",$banby_output);
	$smarty->assign("banby_values",$banby_values);
	
	//ban or kick a player, get the vars
	if((isset($_POST["ban"]) || isset($_POST["kick"])) && $servers_array[$sid]["address"] != "") {
		$pl_name = sql_safe($_POST["player_name"]);
		$pl_uid = (int)$_POST["player_uid"];
		$pl_steamid = sql_safe($_POST["player_steamid"]);
		$pl_ip = sql_safe($_POST["player_ip"]);
		$pl_ban_reason = sql_safe($_POST["ban_reason"]);
		$pl_user_reason = sql_safe($_POST["user_reason"]);
		$pl_ban_length = (int)$_POST["ban_length"];
		$pl_perm = ($_POST["perm"]=="on") ? true:false;
		$pl_silent = ($_POST["silent"]=="on") ? false:true;
		//some var checks
		$steamid_valid = (preg_match("/^STEAM_0:(0|1):[0-9]{1,10}$/",$pl_steamid)) ? true : false;
		$ip_valid = (preg_match("/^[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}$/",$pl_ip)) ? true : false;
		#if(preg_match("/^STEAM_0:(0|1):[0-9]{1,10}$/",$pl_steamid)) { $steam_valid = 1; } else { $steamid_valid = 0; }
		#if(preg_match("/^[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}$/",$pl_ip)) { $ip_valid = 1; } else { $ip_valid = 0; }
		$pl_reason=($pl_user_reason) ? $pl_user_reason : $pl_ban_reason;
		if(!$pl_reason) $user_msg="_NOREASON";
	}
	//ban a player
	if(isset($_POST["ban"]) && $servers_array[$sid]["address"] != "" && !$user_msg) {
		//get bantime
		$time=($pl_perm)?0:(($pl_ban_length >= 0) ? $pl_ban_length : 0);
		//get and check the ban type
		$type = $_POST["ban_type"];
		
		if(!$steamid_valid && $type=="S") $user_msg="_STEAMIDINVALID";
		if(!$ip_valid && $type=="SI") $user_msg="_IPINVALID";
		
		if($pl_silent) {
			//if banning silent, only add the ban to the db
			if(!$user_msg) {
				$query = $mysql->query("INSERT INTO `".$config->db_prefix."_bans` 
						(`player_ip`,`player_id`,`player_nick`,`admin_nick`,`admin_id`,`ban_type`,`ban_reason`,`ban_created`,`ban_length`,`server_name`) 
						VALUES 
						('".$pl_ip."','".$pl_steamid."','".$pl_name."','".$_SESSION["uname"]."','".$_SESSION["uname"]."','".$type."','".$pl_reason."',UNIX_TIMESTAMP(),'".$pl_ban_length."','website')
						") or die ($mysql->error);
				$user_msg='_BANADDSUCCESS';
				log_to_db("Add ban online","nick: ".$pl_name." <".$pl_steamid."><".$pl_ip."> banned for ".$pl_ban_length." minutes");	
			}
		} else {
			if(!$user_msg) {
				$server_address=explode(":",trim($servers_array[$sid]["address"]));
				$server = new Rcon();
				if($server->Connect($server_address[0],$server_address[1], $servers_array[$sid]["rcon"])) {
					//send ban cmd with rcon
					$response = $server->RconCommand("amx_ban #".$pl_uid." ".$time." ".$pl_reason);
					if(substr($response,1)!="") {
						$user_msg='_ADDBANSUCCESSKICK';
						log_to_db("Add ban online","nick: ".$pl_name." <".$pl_steamid."><".$pl_ip."> banned for ".$pl_ban_length." minutes");
					}
					//$server_msg=substr($response,1); //for debug, shows the response from server
					$server->Disconnect();
					
				}
			}
		}
	}
	//kick a player
	if(isset($_POST["kick"]) && $servers_array[$sid]["address"] != "") {
		$server_msg = "";
		$server_address=explode(":",trim($servers_array[$sid]["address"]));
		$server = new Rcon();
		if($server->Connect($server_address[0],$server_address[1], $servers_array[$sid]["rcon"])) {
			$response = $server->RconCommand("kick #".$pl_uid." ".$pl_reason);
			if(substr($response,1)!="") {
				$user_msg="_PLAYERKICKED";
				log_to_db("Kick online","nick: ".$pl_name." <".$pl_steamid."><".$pl_ip."> kicked");
			}
			$server_msg=$servers_array[$sid]["address"]."<br>".substr($response,1); //for debug, shows the response from server
			$server->Disconnect();
			
		}
		
	}
	
	if($servers_array[$sid]["mod"]) {
		//get player list sent by plugin
		$server_address=explode(":",trim($servers_array[$sid]["address"]));
		$server = new Rcon();
		if($server->Connect($server_address[0],$server_address[1], $servers_array[$sid]["rcon"])) {
			$response = $server->ServerPlayers();

			//explode packet and get infos
			$re=explode("\x0A",$response);
			
			//there is a response from amxmodx plugin
			if(strlen($response)) {
				if ($re[0]!="Bad rcon_password." && $re[1]!="Bad rcon_password." && $re[2]!="Bad rcon_password.") {
					foreach($re as $k=>$v) {
						$pl=explode("\xFC",$v);
						if(!is_array($pl)) break;
						switch ($pl[4]) {
							case 0:
								$statusname="_PLAYER";break;
							case 1:
								$statusname="_BOT";break;
							case 2:
								$statusname="_HLTV";break;
							default:
								$statusname="_UNKNOWN";break;
						}
						$player=array(
							"name"=>htmlspecialchars($pl[0]),
							"userid"=>$pl[1],
							"steamid"=>$pl[2],
							"ip"=>$pl[3],
							"status"=>$pl[4],
							"immunity"=>$pl[5],
							"statusname"=>$statusname,
							);
						$count++;
						$players[]=$player;
					}
					$smarty->assign("playerscount",$count);
					$smarty->assign("players",$players);
					$smarty->assign("players_sid",$sid);
				} else {
					$smsg="_WRONGRCON";
				}
			}
			$server->Disconnect();
		}
	} else {
		$smsg="_SERVEROFFLINE";
	}
	//close connection
	
	$smarty->assign("smsg",$smsg);
	$smarty->assign("user_msg",$user_msg);
	$smarty->assign("server_msg",$server_msg);
?>