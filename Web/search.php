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

session_start();

require_once("include/config.inc.php");
require_once("include/access.inc.php");
require_once("include/menu.inc.php");
require_once("include/steam.inc.php");
require_once("include/sql.inc.php");
require_once("include/logfunc.inc.php");
require_once("include/functions.inc.php");

// Template generieren
$title = "_TITLESEARCH";
$smarty = new dynamicPage;

//get all admins ever
//$admins=sql_get_search_amxadmins();
sql_get_search_amxadmins($amxadmins,$admins);

//get all servers ever
$servers=sql_get_search_servers();
//get all reasons ever
//removed in 6.0beta4, made problems with big dbs
//$reasons=sql_get_search_reasons();

$msg = "";

if ((isset($_POST['nick'])) || (isset($_POST['steamid'])) || (isset($_POST['ip'])) || (isset($_POST['reason'])) || (isset($_POST['date'])) || (isset($_POST['timesbanned'])) || (isset($_POST['admin'])) || (isset($_POST['server']))) {
	
	if(isset($_POST["nick"])) {
		$nick=trim($_POST["nick"]);
		if(validate_value($nick,"name",$msg,2,31,"USERNAME")) {
			$search_query="`player_nick` LIKE '%".sql_safe($nick)."%'";
		} #else { $msg="_INVALIDNAME"; }
	}
	
	if(isset($_POST["steamid"])) {
		$steamid=trim($_POST["steamid"]);
		if(validate_value($steamid,"name",$msg,2,35,"STEAM")) { //validate only for length
			$search_query="`player_id` LIKE '%".sql_safe($steamid)."%'";
		} #else { $msg="_INVALIDSTEAMID"; }
	}
	
	if(isset($_POST["ip"])) {
		$ip=trim($_POST["ip"]);
		if(validate_value($ip,"name",$msg,2,15,"IP")) { //validate only for length
			$search_query="`player_ip` LIKE '%".sql_safe($ip)."%'";
		} #else { $msg="_INVALIDIP"; }
	}
	if(isset($_POST["reason"])) {
		$reason=trim($_POST["reason"]);
		if($reason != "") { //validate only for length
			$search_query="`ban_reason` LIKE '%".sql_safe($reason)."%'";
		} #else { $msg="_INVALIDREASON"; }
	}
	//if(isset($_POST["reason"]) && $_POST["reason"]<>"") $search_query="`ban_reason` LIKE '%".sql_safe($_POST["reason"])."%'";
	
	if(isset($_POST["date"]) && $_POST["date"]<>"") {
		$date		= substr_replace($_POST['date'], '', 2, 1);
		$date		= substr_replace($date, '', 4, 1);
		$search_query="FROM_UNIXTIME(ban_created,'%d%m%Y') LIKE '".sql_safe($date)."'";
	}
	
	if(isset($_POST["admin"]) && $_POST["admin"]<>"") $search_query="`admin_id`='".sql_safe($_POST["admin"])."'";
	
	if(isset($_POST["server"]) && $_POST["server"]<>"") {
		if($_POST["server"]=="website") {
			$search_query="`server_name`='".sql_safe($_POST["server"])."'";
		} else {	
			$search_query="`server_ip`='".sql_safe($_POST["server"])."'";
		}
	}
	$count_aktiv=0;
	$count_exp=0;
	if($search_query) {
		$ban_list_aktiv=sql_get_search_bans($search_query,1,$count_aktiv);
		$ban_list_exp=sql_get_search_bans($search_query,0,$count_exp);
	}
	
	if(isset($_POST["timesbanned"]) && is_numeric($_POST["timesbanned"])) {
		$query = $mysql->query("SELECT *,COUNT(*) as bancount FROM ".$config->db_prefix."_bans GROUP BY player_id HAVING COUNT(*) >= ".(int)$_POST["timesbanned"]." ORDER BY ban_created DESC,player_id");

		while($result = $query->fetch_object()) {
			if(!empty($result->player_id)) {
				$steamid = html_safe($result->player_id);
				$steamcomid = GetFriendId($steamid);
			}
			//search for a activ ban and make it as ref
			$query2=$mysql->query("SELECT * FROM ".$config->db_prefix."_bans WHERE `player_id`='".$result->player_id."' AND `expired`=0 ORDER BY ban_created DESC LIMIT 1");
			if($query2->num_rows) {
				$result2 = $query2->fetch_object();
				$result2->bancount=$result->bancount;
				$result=$result2;
			}
			//make array
			$ban_row=array(
				"bid" 			=> $result->bid,
				"player_ip" 	=> $result->player_ip,
				"player_id" 	=> $result->player_id,
				"player_comid"	=> $steamcomid,
				"player_nick" 	=> html_safe($result->player_nick),
				"admin_ip" 		=> $result->admin_ip,
				"admin_id" 		=> $result->admin_id,
				"admin_nick" 	=> html_safe($result->admin_nick),
				"ban_type" 		=> $result->ban_type,
				"ban_reason" 	=> html_safe($result->ban_reason),
				"ban_created" 	=> $result->ban_created,
				"ban_length" 	=> $result->ban_length,
				"ban_end"		=> ($result->ban_created + ($result->ban_length * 60)),
				"server_ip" 	=> $result->server_ip,
				"server_name" 	=> html_safe($result->server_name),
				"bancount"		=> ($result->bancount - 1)
			);
			
			$count++;
			if($result->expired==0) {
				$ban_list_aktiv[]=$ban_row;
				$count_aktiv++;
			} else {
				$ban_list_exp[]=$ban_row;
				$count_exp++;
			}
		}
		
	}
	//echo "DEBUG: ".$count_aktiv."/".$count_exp.":".$search_query;
	$smarty->assign("ban_list_aktiv",$ban_list_aktiv);
	$smarty->assign("ban_list_aktiv_count",$count_aktiv);
	$smarty->assign("ban_list_exp",$ban_list_exp);
	$smarty->assign("ban_list_exp_count",$count_exp);
	$smarty->assign("search_done",1);
}

$smarty->assign("amxadmins",$amxadmins);
$smarty->assign("admins",$admins);
$smarty->assign("servers",$servers);
//$smarty->assign("reasons",$reasons);
$smarty->assign("meta","");
$smarty->assign("title",$title);
$smarty->assign("version_web",$config->v_web);
// amxbans.css available in design? if not, take default one.
if(file_exists("templates/".$config->design."/amxbans.css")) {
	$smarty->assign("design",$config->design);
}
$smarty->assign("dir",$config->document_root);
$smarty->assign("this",$_SERVER['PHP_SELF']);
$smarty->assign("menu",$menu);
$smarty->assign("msg",$msg);
$smarty->assign("banner",$config->banner);
$smarty->assign("banner_url",$config->banner_url);

$smarty->display('main_header.tpl');
$smarty->display('search.tpl');
$smarty->display('main_footer.tpl');
?>