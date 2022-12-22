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
require_once("include/amxx_langs.inc.php");
require_once("include/functions.inc.php");

#$bid=(int)$_GET["bid"];
$sid=htmlspecialchars($_GET["sid"]);
$show_admin=(int)$_GET["adm"];

//get language for player from url
$lang=$_GET["lang"];
if($amxx_langs[$lang]) {
	$_SESSION['lang']=$amxx_langs[$lang];
} else {
	$_SESSION['lang']="english";
}
//check GET bid
#$query=mysql_query("SELECT min(bid),max(bid) FROM ".$config->db_prefix."_bans") or die (mysql_error());
#if($bid < mysql_result($query,0,0) || $bid > mysql_result($query,0,1)) $bid=0;

//check steamid or bid
if(strpos($sid,"STEAM") !== false) {
	$is_steamid=true;
} else if(substr($sid,0,1)=="B" && strlen($sid) > 1) {
	$bid=(int)substr($sid,1);
} else $sid=0;

$smarty = new dynamicPage;

//check GET adm
if($show_admin < 0 || $show_admin > 1) $show_admin=0;
$smarty->assign("show_admin",$show_admin);


// Get ban details
if($bid) {
	$ban=sql_get_ban_details($bid);
	$smarty->assign("ban_detail",$ban);
}

// Get ban details history with steam
if($is_steamid===true) {
	$count=0;
	$exp_bans=sql_get_ban_details_motd_exp($sid,$count);
	
	$smarty->assign("exp_count",$count);
	$smarty->assign("exp_bans",$exp_bans);
	$smarty->assign("history",1);
}
//no valid bid
if(!$sid) {
	echo "no valid data";
	exit;
}


/****************************************************************
* Template parsing						*
****************************************************************/

$title = "Bandetails";

if(file_exists("templates/".$config->design."/amxbans.css")) {
	$smarty->assign("design",$config->design);
}

$smarty->assign("title",$title);
$smarty->assign("dir",$config->document_root);



$smarty->display('motd.tpl');
?>