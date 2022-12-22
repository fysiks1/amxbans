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

// sql functions

function sql_set_websettings() {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_webconfig`") or die ($mysql->error);
	$result = $query->fetch_object();

	$config->cookie=$result->cookie;
	$config->bans_per_page=($result->bans_per_page)<1 ? 1:$result->bans_per_page;
	$config->design = $result->design;
	$config->banner = $result->banner;
	$config->banner_url = $result->banner_url;
	$config->default_lang = $result->default_lang;
	$config->start_page = $result->start_page;
	$config->show_kick_count = $result->show_kick_count;
	$config->show_comment_count = $result->show_comment_count;
	$config->show_demo_count = $result->show_demo_count;
	$config->demo_all = $result->demo_all;
	$config->max_file_size = $result->max_file_size;
	$config->file_type = $result->file_type;
	$config->comment_all = $result->comment_all;
	$config->use_capture = $result->use_capture;
	$config->auto_prune = $result->auto_prune;
	$config->max_offences = $result->max_offences;
	$config->max_offences_reason = $result->max_offences_reason;
	$config->use_demo = $result->use_demo;
	$config->use_comment = $result->use_comment;
	//set vars to an array
	$vars=array(
			"cookie"=>trim($config->cookie),
			"design"=>$config->design,
			"bans_per_page"=>(int)$config->bans_per_page,
			"banner"=>$config->banner,
			"banner_url"=>$config->banner_url,
			"default_lang"=>$config->default_lang,
			"start_page"=>$config->start_page,
			"show_kick_count"=>$config->show_kick_count,
			"show_demo_count"=>$config->show_demo_count,
			"show_comment_count"=>$config->show_comment_count,
			"demo_all" => $config->demo_all,
			"comment_all" => $config->comment_all,
			"use_capture" => $config->use_capture,
			"max_file_size" => (int)$config->max_file_size,
			"file_type" => trim($config->file_type),
			"auto_prune" => (int)$config->auto_prune,
			"max_offences" => (int)$config->max_offences,
			"max_offences_reason" => $config->max_offences_reason,
			"use_demo" => (int)$result->use_demo,
			"use_comment" => $result->use_comment
		);
	return $vars;
}
function sql_get_server($serverid=0) {
	global $config, $mysql;
	if($serverid) {
		$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_serverinfo` WHERE `id`=".$serverid." LIMIT 1") or die ($mysql->error);
	} else {
		$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_serverinfo` ORDER BY `address` ASC") or die ($mysql->error);
		$servers=array();
	}
	while($result = $query->fetch_object()) {
		$server=array(
			"sid"=>$result->id,
			"timestamp"=>$result->timestamp,
			"hostname"=>html_safe($result->hostname),
			"address"=>$result->address,
			"gametype"=>$result->gametype,
			"rcon"=>$result->rcon,
			"amxban_version"=>$result->amxban_version,
			"amxban_motd"=>$result->amxban_motd,
			"motd_delay"=>$result->motd_delay,
			"amxban_menu"=>$result->amxban_menu,
			"reasons"=>$result->reasons,
			"timezone_fixx"=>$result->timezone_fixx
		);
		if(!$serverid) $servers[]=$server;
	}
	if(!$serverid) return $servers;
	return $server;
}
function sql_get_server_ids() {
	global $config, $mysql;
	$query = $mysql->query("SELECT `id` FROM `".$config->db_prefix."_serverinfo` ORDER BY `address` ASC") or die ($mysql->error);
	$serverids=array();
	while($result = $query->fetch_object()) {
		$serverids[]=$result->id;
	}
	return $serverids;
}
function sql_get_reasons_set() {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_reasons_set` ORDER BY `setname` ASC") or die ($mysql->error);
	$reasons_set=array();
	while($result = $query->fetch_object()) {
		$reason_set=array(
			"id"=>$result->id,
			"setname"=>html_safe($result->setname)
			);
		$query2 = $mysql->query("SELECT * FROM `".$config->db_prefix."_reasons_to_set` WHERE `setid`=".$result->id) or die ($mysql->error);
		$reasons="";
		while($result2 = $query2->fetch_object()) {
			$reasons.=($reasons)?",".$result2->reasonid:$result2->reasonid;
		}
		$reason_set["reasonids"]=$reasons;
		$reasons_set[]=$reason_set;
	}
	return $reasons_set;
}
function sql_get_reasons() {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_reasons` ORDER BY `id` ASC") or die ($mysql->error);
	$reasons=array();
	while($result = $query->fetch_object()) {
		$reason=array(
			"id"=>$result->id,
			"reason"=>html_safe($result->reason),
			"static_bantime"=>$result->static_bantime
			);
		$reasons[]=$reason;
	}
	return $reasons;
}
function sql_get_reasons_list() {
	global $config, $mysql;
	$reasons = array();
	$query = $mysql->query("SELECT reason FROM `".$config->db_prefix."_reasons` ORDER BY `id` ASC") or die ($mysql->error);
	while($result = $query->fetch_object()) {
		$reasons[]=$result->reason;
	}
	return $reasons;
}
function sql_get_amxadmins() {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_amxadmins` ORDER BY `ashow` DESC,`expired`,`access` DESC,`username` ASC") or die ($mysql->error);
	$admins=array();
	while($result = $query->fetch_object()) {
		$admin=array(
			"aid"=>$result->id,
			"username"=>html_safe($result->username),
			"password"=>$result->password,
			"access"=>$result->access,
			"flags"=>$result->flags,
			"steamid"=>$result->steamid,
			"nickname"=>html_safe($result->nickname),
			"ashow"=>$result->ashow,
			"created"=>$result->created,
			"expired"=>$result->expired,
			"days"=>$result->days
		);
		$admins[]=$admin;
	}
	return $admins;
}
function sql_get_amxadmins_list() {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_amxadmins` WHERE `ashow`=1 AND (`expired`=0 OR `expired`>UNIX_TIMESTAMP()) ORDER BY `expired`,`access` DESC,`username` ASC") or die ($mysql->error);
	$admins=array();
	while($result = $query->fetch_object()) {
		if(!empty($result->steamid)) {
			$steamid = htmlentities($result->steamid, ENT_QUOTES);
			$steamcomid = GetFriendId($steamid);
		}
		$admin=array(
			"aid"=>$result->id,
			"username"=>html_safe($result->username),
			"comid"=>$steamcomid,
			"password"=>$result->password,
			"access"=>$result->access,
			"flags"=>$result->flags,
			"steamid"=>$result->steamid,
			"nickname"=>html_safe($result->nickname),
			"ashow"=>$result->ashow,
			"created"=>$result->created,
			"expired"=>$result->expired,
			"days"=>$result->days
		);
		$admins[]=$admin;
	}
	return $admins;
}
function sql_get_amxadmins_server($server) {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_amxadmins` ORDER BY `ashow` DESC,`expired`,`access` DESC,`username` ASC") or die ($mysql->error);
	$admins=array();
	while($result = $query->fetch_object()) {
		$query2 = $mysql->query("SELECT `custom_flags`,`use_static_bantime` FROM `".$config->db_prefix."_admins_servers` WHERE `admin_id`=".$result->id." AND `server_id`=".$server) or die ($mysql->error);
		if($result2 = $query2->fetch_object()) {
				$custom_flags=$result2->custom_flags;
				$static_bantime=$result2->use_static_bantime;
				$aktiv=1;
		} else {
				$custom_flags="";
				$static_bantime="no";
				$aktiv=0;
		}
		$admin=array(
			"sid"=>$server,
			"aid"=>$result->id,
			"username"=>html_safe($result->username),
			"password"=>$result->password,
			"access"=>$result->access,
			"flags"=>$result->flags,
			"steamid"=>$result->steamid,
			"nickname"=>html_safe($result->nickname),
			"ashow"=>$result->ashow,
			"custom_flags"=>$custom_flags,
			"use_static_bantime"=>$static_bantime,
			"aktiv"=>$aktiv
		);
		$admins[]=$admin;
	}
	return $admins;
}
function sql_get_webadmins() {
	global $config, $mysql;
	$query = $mysql->query("SELECT id,username,level,last_action,email FROM `".$config->db_prefix."_webadmins` ORDER BY `level`,`username`") or die ($mysql->error);
	$users=array();
	
	while($result = $query->fetch_object()) {
		$user=array(
			"uid"=>$result->id,
			"name"=>html_safe($result->username),
			"level"=>$result->level,
			"last_action"=>$result->last_action,
			"email"=>html_safe($result->email)
		);
		$users[]=$user;
	}
	return $users;
}

function sql_get_server_admins($server) {
	global $config, $mysql;
	$serveradmins=array();
	$query = $mysql->query("SELECT s.admin_id,s.custom_flags,s.use_static_bantime,a.username FROM ".$config->db_prefix."_admins_servers as s,".$config->db_prefix."_amxadmins as a WHERE s.server_id=".$server) or die ($mysql->error);
	$admins=array();
	while($result = $query->fetch_object()) {
		$admin=array(
			"admin_id"=>$result->admin_id,
			"custom_flags"=>$result->custom_flags,
			"use_static_bantime"=>$result->static_bantime,
			"username"=>html_safe($result->username)
		);
		$admins[]=$admin;
	}
	return $admins;
}
function sql_get_usermenu(&$count) {
	global $config, $mysql;
	//get menu from db
	global $count;
	$menu=array();
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_usermenu` ORDER BY `pos` ASC") or die ($mysql->error);
	$count=0;
	while($result = $query->fetch_object()) {
		$men=array(
			"id"=>$result->id,
			"pos"=>$result->pos,
			"activ"=>$result->activ,
			"lang_key"=>$result->lang_key,
			"url"=>$result->url,
			"lang_key2"=>$result->lang_key2,
			"url2"=>$result->url2,
		);
		$count++;
		$menu[]=$men;
	}
	
	return $menu;
}
function sql_get_modules($aktiv_only=0,&$count) {
	global $config, $mysql;
	$select="SELECT * FROM `".$config->db_prefix."_modulconfig`";
	if($aktiv_only===1) $select.=" WHERE `activ`=1";
	$select.=" ORDER BY `name` ASC";
	
	$query = $mysql->query($select) or die ($mysql->error);
	$modules=array();
	while($result = $query->fetch_object()) {
		$modul=array(
			"id"=>$result->id,
			"menuname"=>html_safe($result->menuname),
			"name"=>html_safe($result->name),
			"index"=>$result->index,
			"activ"=>$result->activ,
			"admin_page_exists"=>file_exists("include/modules/modul_".$result->name.".php")?1:0,
			"tpl_exists"=>file_exists("templates/modul_".$result->name.".tpl")?1:0,
			"index_exists"=>file_exists($result->index.".php")?1:0
		);
		$count++;
		$modules[]=$modul;
	}
	return $modules;
}
function sql_get_ban_details($bid) {
	global $config, $mysql;
	//banns for ID
	#$query = $mysql->query("SELECT ba.*, se.gametype,se.timezone_fixx, aa.nickname, wa.username FROM `".$config->db_prefix."_bans` AS ba 
	#			LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address 
	#			LEFT JOIN `".$config->db_prefix."_amxadmins` AS aa ON (aa.steamid=ba.admin_nick OR aa.steamid=ba.admin_ip OR aa.steamid=ba.admin_id) 
	#			LEFT JOIN `".$config->db_prefix."_webadmins` AS wa ON wa.username=ba.admin_nick WHERE ba.bid=".$bid." LIMIT 1") or die ($mysql->error);
	$query = $mysql->query("SELECT ba.*, se.gametype,se.timezone_fixx, aa.nickname,aa.username FROM `".$config->db_prefix."_bans` AS ba 
				LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address 
				LEFT JOIN `".$config->db_prefix."_amxadmins` AS aa ON (aa.steamid=ba.admin_nick OR aa.steamid=ba.admin_ip OR aa.steamid=ba.admin_id) 
				WHERE ba.bid=".$bid." LIMIT 1") or die ($mysql->error);
	//Array aufbereiten
	$ban_row=$query->fetch_assoc();
	//timezone fixx and ban_end calc
	$ban_row["ban_created"]=($ban_row["ban_created"] + ($ban_row["timezone_fixx"] * 60 * 60));
	$ban_row["ban_end"]=($ban_row["ban_created"] + ($ban_row["ban_length"] * 60));
	$ban_row["player_nick"] = html_safe($ban_row["player_nick"]);
	
	return $ban_row;
}
function sql_get_ban_details_activ($steamid,&$count,$bid) {
	global $config, $mysql;
	//banns for ID without $bid
	$query = $mysql->query("SELECT ba.*,se.timezone_fixx FROM `".$config->db_prefix."_bans` AS ba 
				LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address
				WHERE `player_id`='".$steamid."' AND `expired`=0 AND `bid`<>".$bid) or die ($mysql->error);
	//Array aufbereiten
	$ban_rows=array();
	while($ban_row=$query->fetch_assoc()) {
		$count++;
		//timezone fixx and ban_end calc
		$ban_row["ban_created"]=($ban_row["ban_created"] + ($ban_row["timezone_fixx"] * 60 * 60));
		$ban_row["ban_end"]=($ban_row["ban_created"] + ($ban_row["ban_length"] * 60));
		$ban_rows[]=$ban_row;
	}
	return $ban_rows;
}
function sql_get_ban_details_exp($steamid,&$count,$bid) {
	global $config, $mysql;
	//exp bans for ID without $bid
	$query = $mysql->query("SELECT ba.*,se.timezone_fixx FROM `".$config->db_prefix."_bans` AS ba 
				LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address
				WHERE `player_id`='".$steamid."' AND `expired`=1 AND `bid`<>".$bid) or die ($mysql->error);
	//Array aufbereiten
	$ban_rows=array();
	while($ban_row=$query->fetch_assoc()) {
		$count++;
		//timezone fixx and ban_end calc
		$ban_row["ban_created"]=($ban_row["ban_created"] + ($ban_row["timezone_fixx"] * 60 * 60));
		$ban_row["ban_end"]=($ban_row["ban_created"] + ($ban_row["ban_length"] * 60));
		$ban_rows[]=$ban_row;
	}
	return $ban_rows;
}
function sql_get_ban_details_motd_exp($steamid,&$count) {
	global $config, $mysql;
	//exp bans for ID without $bid
	$query = $mysql->query("SELECT ba.*,se.timezone_fixx FROM `".$config->db_prefix."_bans` AS ba 
				LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address
				WHERE `player_id`='".$steamid."' AND `expired`=1 ORDER BY ban_created DESC") or die ($mysql->error);
	//Array aufbereiten
	$ban_rows=array();
	while($ban_row=$query->fetch_assoc()) {
		//timezone fixx and ban_end calc
		$ban_row["ban_created"]=($ban_row["ban_created"] + ($ban_row["timezone_fixx"] * 60 * 60));
		$ban_row["ban_end"]=($ban_row["ban_created"] + ($ban_row["ban_length"] * 60));
		
		if($ban_row["server_ip"]!="website") {
			if($ban_row["nickname"]!="") {
				$ban_row["admin_nick"]=$ban_row["nickname"];
			}
		}
				
		$ban_row["player_nick"]=html_safe($ban_row["player_nick"]);
		$ban_row["admin_nick"]=html_safe($ban_row["admin_nick"]);
		$ban_row["server_name"]=html_safe($ban_row["server_name"]);
		
		$ban_rows[]=$ban_row;
		$count++;
	}
	return $ban_rows;
}
function sql_get_comments_count($bid) {
	global $config, $mysql;
	$query = $mysql->query("SELECT COUNT(*) FROM `".$config->db_prefix."_comments`".(($bid) ?" WHERE `bid`=".$bid : "")) or die ($mysql->error);
	return $query->fetch_row()[0];
}
function sql_get_comments_count_fail($repair=0) {
	global $config, $mysql;
	$repaired=0;
	//first search in the db for files without a ban
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_comments` WHERE `bid` NOT IN (SELECT DISTINCT `bid` FROM `".$config->db_prefix."_bans`)") or die ($mysql->error);
	
	if(!$repair) return $query->num_rows;
	
	while($result = $query->fetch_object()) {
		//delete db entry
		$query2 = $mysql->query("DELETE FROM `".$config->db_prefix."_comments` WHERE `id`=".$result->id." LIMIT 1") or die ($mysql->error);
		$repaired++;
	}
	return $repaired;
}
function sql_get_comments($bid,&$count) {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_comments` WHERE `bid`=".$bid." ORDER BY `date` ASC") or die ($mysql->error);
	//Array aufbereiten
	$comments=array();
	while($result = $query->fetch_object()) {
		$comment=array(
			"id"=>$result->id,
			"name"=>html_safe($result->name),
			"comment"=>html_safe($result->comment),
			"email"=>html_safe($result->email),
			"addr"=>$result->addr,
			"date"=>$result->date
		);
		$count++;
		$comments[]=$comment;
	}
	return $comments;
}
function sql_get_files_count($bid) {
	global $config, $mysql;
	$query = $mysql->query("SELECT COUNT(*) FROM `".$config->db_prefix."_files`".(($bid) ?" WHERE `bid`=".$bid : "")) or die ($mysql->error);
	return $query->fetch_row()[0];
}
function sql_get_files_count_fail($repair=0) {
	global $config, $mysql;
	$fail=0;
	$repaired=0;
	//first search in the db for files without a ban
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_files` WHERE `bid` NOT IN (SELECT DISTINCT `bid` FROM `".$config->db_prefix."_bans`)") or die ($mysql->error);
	$fail=$query->num_rows;
	//search files without db entry
	$d=opendir($config->path_root."/include/files/");
	while($f=readdir($d)) {
		if($f=="." || $f==".." || is_dir($config->path_root."/include/files/".$f) || $f=="index.php") continue;
		if(is_file($config->path_root."/include/files/".$f)) {
			$f=str_replace("_thumb","",$f);
			$query2 = $mysql->query("SELECT * FROM `".$config->db_prefix."_files` WHERE `demo_file`='".$f."'") or die ($mysql->error);
			if(!$query2->num_rows) {
				$files[]=$f;
				$fail++;
			}
		}
	}
	closedir($d);
	if(!$repair) return $fail;
	//delete fails from db
	while($result = $query->fetch_object()) {
		//delete files
		if(file_exists("include/files/".$result->demo_file)) unlink("include/files/".$result->demo_file);
		if(file_exists("include/files/".$result->demo_file."_thumb")) unlink("include/files/".$result->demo_file."_thumb");
		//delete db entry
		$query3 = $mysql->query("DELETE FROM `".$config->db_prefix."_files` WHERE `id`=".$result->id." LIMIT 1") or die ($mysql->error);
		$repaired++;
	}
	//delete files from dir without db entry
	for($i=0;$i<sizeof($files);$i++) {
		if(file_exists("include/files/".$files[$i])) unlink("include/files/".$files[$i]);
		if(file_exists("include/files/".$files[$i]."_thumb")) unlink("include/files/".$files[$i]."_thumb");
		$repaired++;
	}
	return $repaired;
}
function sql_get_files($bid,&$count) {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_files` WHERE `bid`=".$bid." ORDER BY `upload_time` ASC") or die ($mysql->error);
	//Array aufbereiten
	$files=array();
	while($result = $query->fetch_object()) {
		if(file_exists("include/files/".$result->demo_file."_thumb")) $thumb=1;
		$file=array(
			"id"=>$result->id,
			"demo_file"=>$result->demo_file,
			"demo_real"=>html_safe($result->demo_real),
			"comment"=>html_safe($result->comment),
			"upload_time"=>$result->upload_time,
			"down_count"=>$result->down_count,
			"name"=>html_safe($result->name),
			"email"=>html_safe($result->email),
			"file_size"=>$result->file_size,
			"addr"=>$result->addr,
			"thumb"=>$thumb
		);
		$count++;
		$files[]=$file;
	}
	return $files;
}
function sql_get_search_amxadmins(&$amxadmins,&$nickadmins) {
	global $config, $mysql;
	$query = $mysql->query("SELECT `admin_id`,`admin_nick` FROM `".$config->db_prefix."_bans` GROUP BY `admin_id` ORDER BY `admin_nick`") or die ($mysql->error);	
	while($result = $query->fetch_object()) {
		$checkQry = $mysql->query("SELECT * FROM `".$config->db_prefix."_amxadmins` WHERE `steamid`='".$result->admin_id."' GROUP BY `steamid`") or die ($mysql->error);
		if( $checkQry->num_rows > 0 ) {
			//-- Is Found
			if($result->admin_id <> "")	$amxadmins[]=array("steam"=>$result->admin_id,"nick"=>html_safe($result->admin_nick));
		} else {
			//-- Not Found
			if($result->admin_id <> "")	$nickadmins[]=array("steam"=>$result->admin_id,"nick"=>html_safe($result->admin_nick));
		}
	}
}
function sql_get_search_servers() {
	global $config, $mysql;
	$servers = array();
	$query = $mysql->query("SELECT `server_ip`,`server_name` FROM `".$config->db_prefix."_bans` GROUP BY `server_ip` ORDER BY `server_name`") or die ($mysql->error);
	//Array aufbereiten
	while($result = $query->fetch_object()) {
		if($result->server_name=="website") {
			$servers["website"]="_WEB";
		} else {
			$servers[$result->server_ip]=html_safe($result->server_name);
		}
	}
	return $servers;
}
function sql_get_search_reasons() {
	global $config, $mysql;
	$query = $mysql->query("SELECT DISTINCT `ban_reason` FROM `".$config->db_prefix."_bans` ORDER BY `ban_reason`") or die ($mysql->error);
	//Array aufbereiten
	while($result = $query->fetch_object()) {
		$reasons[$result->ban_reason]=html_safe($result->ban_reason);
	}
	return $reasons;
}
function sql_get_search_bans($search,$active=1,&$count=0) {
	global $config, $mysql;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_bans` WHERE ".$search." AND `expired`=".(($active==1)?0:1)." ORDER BY `ban_created` DESC") or die ($mysql->error);
	//Array aufbereiten
	
	$ban_list = array();
	while($result = $query->fetch_object()) {
		if(!empty($result->player_id)) {
			$steamid = htmlentities($result->player_id, ENT_QUOTES);
			$steamcomid = GetFriendId($steamid);
			$query2 = $mysql->query("SELECT COUNT(*) FROM `".$config->db_prefix."_bans` WHERE `player_id`='".$result->player_id."' AND `expired`=1");
			$bancount=$query2->fetch_row()[0];
		}
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
			"bancount"		=> $bancount
		);
		if($config->show_kick_count=="1") {
			$ban_row["kick_count"]=$result->ban_kicks;
			$ban_page["show_kicks"]=1;
		}
		if($config->show_demo_count=="1") {
			$file_count=0;
			sql_get_files($result->bid,$file_count);
			$ban_row["demo_count"]=$file_count;
			$ban_page["show_demos"]=1;
		}
		if($config->show_comment_count=="1") {
			$comment_count=0;
			sql_get_comments($result->bid,$comment_count);
			$ban_row["comment_count"]=$comment_count;
			$ban_page["show_comments"]=1;
		}
		$count++;
		$ban_list[]=$ban_row;
	}
	return $ban_list;
}
function sql_get_bans_count($activ_only = TRUE) {
	global $config, $mysql;

	if($activ_only)
		$active = " WHERE (((ban_created+(ban_length*60)) > ".time()." OR ban_length=0))";
	else
		$active = "";

	$query = $mysql->query("SELECT COUNT(*) FROM `".$config->db_prefix."_bans`".$active) or die ("Fuck: ".$mysql->error);
	return $query->fetch_row()[0];
}
function sql_get_logs($filter) {
	global $config, $mysql;
	if($filter) $where="WHERE ".$filter;
	$query = $mysql->query("SELECT * FROM `".$config->db_prefix."_logs` ".$where." ORDER BY `timestamp` DESC") or die ($mysql->error);
	//Array aufbereiten
	while ($row=$query->fetch_assoc())
		$rows[] = $row;
	array_walk_recursive($rows,"html_safe");
	return $rows;
}
?>