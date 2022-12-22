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
	require_once("include/rcon_hl_net.inc");
	
	$admin_site="sv";
	$title2 ="_TITLESERVER";
	
	$sid=(int)$_POST["sid"];
	
	//rcon function to send and receive
	function rcon_send($command,$sid,$max_response_pages=0) {
		//get server info
		global $config, $mysql;
		$resource = $mysql->query("SELECT address,rcon FROM ".$config->db_prefix."_serverinfo WHERE id=".$sid) or die ($mysql->error);
		$result = $resource->fetch_object();
		if($result) {
			$server_address=explode(":",trim($result->address));
			$server_rcon=$result->rcon;
			$server = new Rcon();
			if($server->Connect($server_address[0],$server_address[1], $server_rcon)) {
				$response = $server->RconCommand($command,$max_response_pages);
				$server->Disconnect();
				if($response != "") {
					return trim($response);
				} else return false;
			}
		} 
	}
	//rcon commands
	if((isset($_POST["rconcommand"]) || isset($_POST["rconuserstart_".$sid])) && $sid) {
		//to restrict rcon commands add it to the array
		$denied_cmds=array("rcon_password","_restart","quit","restart","changelevel");
		//defines how much packages for response (max), 0 for only 1 packet
		$max_response_pages=0;
		//pre defined rcon commands
		if(isset($_POST["command"])) {
			$pre = $_POST["command"];
			switch($pre) {
				//translate the rcon alias to the rcon command
				case 'reload': $command="amx_reloadadmins";break;
				case 'restart': $command="restart";$max_response_pages=3;break;
				case 'status': $command="status";break;
				case 'plugins': $command="amx_plugins";$max_response_pages=3;break;
				case 'modules': $command="amx_modules";$max_response_pages=3;break;
				case 'metalist': $command="meta list";break;
				default: $command="";
			}
		}
		//user defined rcon
		if(isset($_POST["rconuserstart_".$sid])) {
			$command=sql_safe(trim($_POST["rconuser"]));
		}
		//search for denied rcon commands
		foreach($denied_cmds as $k => $v) {
			if(stripos($command,$v) !== false) {
				$denied=true;
				$user_msg="_RCON_CMDDENIED";
				$hide_response=true;
				continue;
			}
		}
		// do the rcon command and receive the response from server
		if($command && !$denied) $response=rcon_send($command,$sid,$max_response_pages);
		if(!$user_msg) $user_msg="_RCON_SERVERRESPONSE";
		if(!$hide_response) {
			$smsg=str_replace("\n","<br />",html_safe($response));
			if(stripos($response,"Bad rcon") !== false) {
				$user_msg="_WRONGRCON";
				$smsg="";
			}	
			//without response, server seems timed out
			if(!$response) {
				$user_msg="_RCON_TIMEDOUT";
				$smsg="";
			}
		}
	}
	//save server settings
	if(isset($_POST["save"]) && $_SESSION["loggedin"]) {
		$query = $mysql->query("UPDATE `".$config->db_prefix."_serverinfo` SET 
					`rcon`='".sql_safe($_POST["rcon"])."',
					`amxban_motd`='".sql_safe($_POST["amxban_motd"])."',
					`motd_delay`='".(int)$_POST["motd_delay"]."',
					`amxban_menu`='".(int)$_POST["amxban_menu"]."',
					`reasons`='".(int)$_POST["reasons"]."',
					`timezone_fixx`='".(int)$_POST["timezone_fixx"]."'
					WHERE `id`=".$sid." LIMIT 1") or die ($mysql->error);
		$user_msg='_SERVERSAVED';
		log_to_db("Server config","Edited server: ".html_safe($_POST["sidname"]));
	}
	//delete server from db
	if(isset($_POST["del"]) && $_SESSION["loggedin"]) {
		$query = $mysql->query("DELETE FROM `".$config->db_prefix."_serverinfo` WHERE `id`=".$sid." LIMIT 1") or die ($mysql->error);
		$query = $mysql->query("DELETE FROM `".$config->db_prefix."_admins_servers` WHERE `server_id`=".$sid) or die ($mysql->error);
		$user_msg='_SERVERDELETED';
		log_to_db("Server config","Deleted server: ".html_safe($_POST["sidname"]));
	}
		
	//get servers
	$servers=sql_get_server();
	
	//get reason sets
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_reasons_set` ORDER BY `setname` ASC") or die ($mysql->error);
	$reasons_values=array("");
	$reasons_choose=array("");
	while($result = $query->fetch_object()) {
		$reasons_values[]=$result->id;
		$reasons_choose[]=$result->setname;
	}
	$timezone_values=array(-12,-11,-10,-9,-8,-7,-6,-5,-4,-3,-2,-1,0,1,2,3,4,5,6,7,8,9,10,11,12);
	$timezone_output=array("-12","-11","-10","-9","-8","-7","-6","-5","-4","-3","-2","-1","0","+1","+2","+3","+4","+5","+6","+7","+8","+9","+10","+11","+12");
	$delay_choose=array(2,3,4,5,7,10);
	$menu_choose=array(0,1);
	//pre defined rcon command aliase and lang keys
	$rcon_cmds=array("reload","restart","status","plugins","modules","metalist");
	$rcon_cmdkeys=array("_RCON_RELOADADMINS","_RCON_RESTARTMAP","_RCON_STATUS","_RCON_PLUGINS","_RCON_MODULES","_RCON_METALIST");
	//try to get the motd url
	$motd_url=$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	$motd_url="http://".str_replace(basename($motd_url),"motd.php?sid=%s&adm=%d&lang=%s",$motd_url);
	
	$smarty->assign("motd_url",$motd_url);
	$smarty->assign("rcon_cmds",$rcon_cmds);
	$smarty->assign("rcon_cmdkeys",$rcon_cmdkeys);
	$smarty->assign("timezone_values",$timezone_values);
	$smarty->assign("timezone_output",$timezone_output);
	$smarty->assign("delay_choose",$delay_choose);
	$smarty->assign("menu_choose",$menu_choose);
	$smarty->assign("reasons_choose",$reasons_choose);
	$smarty->assign("reasons_values",$reasons_values);
	$smarty->assign("servers",$servers);
	$smarty->assign("server_activ",$sid);
	$smarty->assign("smsg",$smsg);
?>