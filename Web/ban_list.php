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
if (!function_exists('geoip_country_code_by_addr')) {
        require_once("include/geoip.inc");
}
require_once("include/thumbs.inc.php");

// Template generieren
$title = "_TITLEBANLIST";
$smarty = new dynamicPage;
$user_site="";
if(isset($_GET["bid"]) && is_numeric($_GET["bid"])) {
	$_POST["bid"] = $_GET["bid"];
	$tmp = "bd";
}

//user page loader
if(isset($_POST["bid"])) {
        isset($_POST["details_x"])?$tmp="bd":""; //ban details
        isset($_POST["edit_x"])?$tmp="be":""; //ban edit
        if(file_exists("include/user/user_".$tmp.".php")) {
                $user_site=$tmp;
                include("include/user/user_".$tmp.".php");
        }
}
//create default ban list and show it
$ban_page = "";
if(!$user_site) {
	$page = "";
        //count activ bans
        $query = mysql_query("SELECT COUNT(bid) FROM `".$config->db_prefix."_bans` WHERE `expired`=0") or die (mysql_error());
        $ban_count[0]=mysql_result($query,0);
        //count all bans
        $query = mysql_query("SELECT COUNT(bid) FROM `".$config->db_prefix."_bans`") or die (mysql_error());
        $ban_count[1]=mysql_result($query,0);
        //calc max sites
        $ban_page_max=ceil($ban_count[0] / $config->bans_per_page);
    if(isset($_REQUEST["site"])) $page=(int)$_REQUEST["site"];
    if(isset($_REQUEST["siteback_x"])) $page=(int)$_REQUEST["site"];
    if(isset($_REQUEST["sitenext_x"])) $page=(int)$_REQUEST["site"];
    if(isset($_REQUEST["sitestart_x"])) $page=1;
    if(isset($_REQUEST["siteend_x"])) $page=$ban_page_max;
        //check if site nr is valid
        $ban_page_curr=($page==0 || $page>$ban_page_max) ? 1:$page;
        //calc mysql limits from current site
        $min=($config->bans_per_page * $ban_page_curr)-$config->bans_per_page;
        //build array with site info
        $ban_page=array(
                "current"       => $ban_page_curr,            //current site
                "max_page"      => ($ban_page_max)? $ban_page_max:1,      //last site
                "per_page"      => $config->bans_per_page,    //bans per page
                "first_ban"     => ($ban_count[0])? $min + 1:$min,            //+1: LIMIT 0 is the first ban
                "max_ban"       => $ban_count[0],                  //count activ bans
                "all_ban"       => $ban_count[1]                     //count all bans
        );
        //get bans for current page
        $query  = mysql_query("SELECT ba.*, se.gametype,se.timezone_fixx, aa.nickname FROM `".$config->db_prefix."_bans` AS ba
                                LEFT JOIN `".$config->db_prefix."_serverinfo` AS se ON ba.server_ip=se.address
                                LEFT JOIN `".$config->db_prefix."_amxadmins` AS aa ON (aa.steamid=ba.admin_nick OR aa.steamid=ba.admin_ip OR aa.steamid=ba.admin_id)
                                WHERE ba.expired=0 ORDER BY ban_created DESC LIMIT ".$min.",".$config->bans_per_page) or die(mysql_error());
        //build ban list array
        $ban_list=array();
		$gi="";
        $cc="";
        $cn="";
		$gi = geoip_open($config->path_root."/include/GeoIP.dat",GEOIP_STANDARD);
        while($result = mysql_fetch_object($query)) {
                if($result->expired==1) continue;
                $steamid="";
                $steamcomid="";
                if(!empty($result->player_id)) {
                        $steamid = html_safe($result->player_id);
                        $steamcomid = GetFriendId($steamid);
                }
                if(!empty($result->player_ip)) {
                        $cc = geoip_country_code_by_addr($gi, $result->player_ip);
                        $cn = geoip_country_name_by_addr($gi, $result->player_ip);
                }
                $ban_row=array(
                        "bid"       => $result->bid,
                        "player_ip"     => $result->player_ip,
                        "player_id"     => $result->player_id,
                        "player_comid"  => $steamcomid,
                        "player_nick"   => html_safe($result->player_nick),
                        "admin_ip"           => $result->admin_ip,
                        "admin_id"           => $result->admin_id,
                        "admin_nick"    => html_safe($result->admin_nick),
                        "ban_type"           => $result->ban_type,
                        "ban_reason"    => $result->ban_reason,
                        "ban_created"   => ($result->ban_created + ($result->timezone_fixx * 60 * 60)),
                        "ban_length"    => $result->ban_length,
                        "ban_end"              => ($result->ban_created + ($result->ban_length * 60) + ($result->timezone_fixx * 60 * 60)),
                        "server_ip"     => $result->server_ip,
                        "server_name"   => html_safe($result->server_name),
						"expired"		=> $result->expired,
                        "cc"            => $cc,
                        "cn"            => $cn
                );
                // get previous offences if any
				$query2   = mysql_query("SELECT count(player_id) as ban_count FROM `".$config->db_prefix."_bans` WHERE player_id = '".$result->player_id."'") or die(mysql_error());
                while($result2 = mysql_fetch_object($query2)) {
                        $ban_row["bancount"] = $result2->ban_count;
                }
				$queryX = mysql_query("SELECT count(player_id) as ban_count FROM `".$config->db_prefix."_bans` WHERE player_id = '".$result->player_id."' AND (ban_length > 5 OR ban_length = 0)") or die(mysql_error());
				while($resultX = mysql_fetch_object($queryX)) {
						$tmp_bancount = $resultX->ban_count;
				}
				
                //if needed prune bans but after query to see it in the list once
                if($config->auto_prune=="1") {
                        //first search for max offence bans
                        if($tmp_bancount >= $config->max_offences && $ban_row["ban_length"] >= "0" && !(strlen(strstr($ban_row["ban_reason"],$config->max_offences_reason))>0)) {
                                $ban_row["ban_length"] = "0";
								$new_reason = $ban_row["ban_reason"] . ' (' .$config->max_offences_reason.')';
                                $ban_row["ban_reason"] = $new_reason;
                                $prune_query = mysql_query("UPDATE `".$config->db_prefix."_bans` SET `expired`=0,`ban_length`=0,`ban_reason`='".$new_reason."' WHERE `bid`=".$result->bid);
								$prune_query = mysql_query("INSERT INTO `".$config->db_prefix."_bans_edit` (`bid`,`edit_time`,`admin_nick`,`edit_reason`) VALUES (
															'".$result->bid."',UNIX_TIMESTAMP(NOW()),'amxbans','".$new_reason."')");
                        }
                        //prune expired bans
                        if($ban_row["ban_end"] < time() && $ban_row["ban_length"] != "0") {
                                $prune_query = mysql_query("UPDATE `".$config->db_prefix."_bans` SET `expired`=1 WHERE `bid`=".$ban_row["bid"]);
								$prune_query = mysql_query("INSERT INTO `".$config->db_prefix."_bans_edit` (`bid`,`edit_time`,`admin_nick`,`edit_reason`) VALUES (
																	'".$result->bid."','".$ban_row["ban_end"]."','amxbans','Bantime expired')");
                        }
                }
                if($result->server_ip=="") {
                        $ban_row["mod"]="html";
                } else {
                        $ban_row["mod"]=($result->gametype=="" || $result->gametype=="website")?"html":$result->gametype;
                        $ban_row["nickname"]=html_safe($result->nickname);
                }
                if($config->show_kick_count=="1") {
                        $ban_row["kick_count"]=$result->ban_kicks;
                        $ban_page["show_kicks"]=1;
                }
                if($config->show_demo_count=="1") {
                        $ban_row["demo_count"]=sql_get_files_count($result->bid);
                        $ban_page["show_demos"]=1;
                }
                if($config->show_comment_count=="1") {
                        $ban_row["comment_count"]=sql_get_comments_count($result->bid);
                        $ban_page["show_comments"]=1;
                }
                $ban_list[]=$ban_row;
        }
        geoip_close($gi);
        $smarty->assign("ban_list",$ban_list);
        $smarty->assign("ban_page",$ban_page);
}
//ban delete
if(isset($_POST["del_ban_x"]) && isset($_POST["bid"]) && $_SESSION["loggedin"]) {
        //get all uploaded files for the ban and delete it
        $query = mysql_query("SELECT `id`,`demo_file` FROM `".$config->db_prefix."_files` WHERE `bid`=".$bid) or die (mysql_error());
        while($result = mysql_fetch_object($query)) {
                if(file_exists("include/files/".$result->demo_file)) {
                        //delete the file(s)
                        if(file_exists("include/files/".$result->demo_file."_thumb")) {
                                unlink("include/files/".$result->demo_file."_thumb");
                        }
                        if(unlink("include/files/".$result->demo_file)) {
                                //if file deleted, remove db entry
                                $query2 = mysql_query("DELETE FROM `".$config->db_prefix."_files` WHERE `id`=".$result->id." LIMIT 1") or die (mysql_error());
                        }
                }
        }
        //delete all comments for the ban
        $query = mysql_query("DELETE FROM `".$config->db_prefix."_comments` WHERE `bid`=".$bid) or die (mysql_error());
        //get ban details
        $ban_row=sql_get_ban_details($bid);
        //delete the ban
        $query = mysql_query("DELETE FROM `".$config->db_prefix."_bans` WHERE `bid`=".$bid." LIMIT 1") or die (mysql_error());
        log_to_db("Ban edit","Deleted ban: ID ".$bid." (<".sql_safe($ban_row["player_nick"])."> <".sql_safe($ban_row["player_id"]).">)");
        //redirect to start page
        if($query) { header("Location:index.php"); exit; }
}
$smarty->assign("meta","");
$smarty->assign("title",$title);
$smarty->assign("version_web",$config->v_web);
// amxbans.css included in the design? if not use it from default
if(file_exists("templates/".$config->design."/amxbans.css")) {
        $smarty->assign("design",$config->design);
}
$smarty->assign("dir",$config->document_root);
$smarty->assign("this",$_SERVER['PHP_SELF']);
$smarty->assign("vars",$vars);
$smarty->assign("smilies",$smilies);
$smarty->assign("bbcodes",$bbcodes);
$smarty->assign("menu",$menu);
$smarty->assign("banner",$config->banner);
$smarty->assign("banner_url",$config->banner_url);
$smarty->assign("pagenav", construct_vb_page_nav($ban_page['current'], $ban_page['max_page'], 3, array(10, 50, 100, 500, 1000)));
$smarty->display('main_header.tpl');
//load main page, currently ban list or ban details/edit
if($user_site !== "") {
        $smarty->display("user_".$user_site.".tpl");
} elseif ($config->start_page == "" || $config->start_page == "index.php" || (!file_exists("./$config->start_page"))) {
        $smarty->display('ban_list.tpl');
} else {
        include($config->start_page);
        $start_tpl=str_replace(".php",".tpl",$config->start_page);
        $smarty->display($start_tpl);
}
$smarty->display('main_footer.tpl');
function construct_vb_page_nav($current, $total, $pagenavpages, $pagenavsarr)
{
    $result = array();
    if ($current > 1)
    {
        $result['prev'] = $current - 1;
    }
    else
    {
        $result['prev'] = false;
    }
    if ($current < $total)
    {
        $result['next'] = $current + 1;
    }
    else
    {
        $result['next'] = false;
    }
    $curpage = 0;
    $result['pages'] = array();
    $result['first'] = false;
    $result['last'] = false;
    while ($curpage++ < $total)
    {
        if (abs($curpage - $current) >= $pagenavpages && $pagenavpages != 0)
        {
            if ($curpage == 1)
            {
                $result['first'] = $curpage;
            }
            if ($curpage == $total)
            {
                $result['last'] = $curpage;
            }
            // generate relative links (eg. +10,etc).
            if (in_array(abs($curpage - $current), $pagenavsarr) && $curpage != 1 && $curpage != $total)
            {
                $result['pages'][] = array('number' => $curpage, 'current' => false);
            }
        }
        else
        {
            if ($curpage == $current)
            {
                $result['pages'][] = array('number' => $curpage, 'current' => true);
            }
            else
            {
                $result['pages'][] = array('number' => $curpage, 'current' => false);
            }
        }
    }
    return $result;
}
?>