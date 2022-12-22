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
require_once("include/logfunc.inc.php");
require_once("include/functions.inc.php");
require_once("include/sql.inc.php");

if(!$_SESSION["loggedin"]) {
	header("Location:index.php");
}

$site_start		= "so_in"; //Admin Start Page

//Seiten Verwaltung 		wm_ms
//UserLevel Verwaltung 		wm_ul
//Webadmin Verwaltung 		wm_wa
//AMXX Admin Verwaltung 	sm_av
//Server Verwaltung 		sm_sv
//Server Admins Verwaltung 	sm_sa
//ban reasons verwaltung 	sm_bg
//server info		so_in

$admin_site	= "default";
$user_msg = "";

$smarty = new dynamicPage;

//modul page loader
if(isset($_GET["modul"])) {
	$modul=basename($_GET["modul"]);
}else{
	$modul=basename("");
}

$modul_exists = false;
if(isset($_GET["modul"]) && file_exists("include/modules/modul_".$modul.".php")) {
	include("include/modules/modul_$modul.php");
	$modul_exists=true;
	
}
//admin page loader
if(isset($_GET["site"])) {
	$site=basename($_GET["site"]);
}else{
	$site=basename("");
}
if(!$modul_exists) {
	if(isset($_GET["site"]) && file_exists("include/admin/admin_".$site.".php"))
		include("include/admin/admin_$site.php");
	else
		include("include/admin/admin_$site_start.php");
}

//get module menu (only active)
$modules_menu_count=0;
$modules_menu=sql_get_modules(1,$modules_menu_count);

// Template generieren
$smarty->assign("meta","");
$smarty->assign("title",$title2);
$smarty->assign("version_web",$config->v_web);
$smarty->assign("banner",$config->banner);
$smarty->assign("banner_url",$config->banner_url);

// amxbans.css available in design? if not, take default one.
if(file_exists("templates/".$config->design."/amxbans.css")) {
	$smarty->assign("design",$config->design);
}
$smarty->assign("dir",$config->document_root);
$smarty->assign("current_lang",$config->default_lang);
$smarty->assign("this",$_SERVER['PHP_SELF']);
$smarty->assign("menu",$menu);
$smarty->assign("modules_menu",$modules_menu);
$smarty->assign("modules_menu_count",$modules_menu_count);
$smarty->assign("msg",$user_msg);
if($modul_exists) {
	$smarty->assign("site",$modul_site);
} else {
	$smarty->assign("site",$admin_site);
}

$smarty->display('main_header.tpl');
$smarty->display('admin_index.tpl');
if($modul_exists) {
	$smarty->display('modul_'.$modul_site.'.tpl');
} else {
	$smarty->display('admin_'.$admin_site.'.tpl');
}
$smarty->display('main_footer.tpl');


?>
