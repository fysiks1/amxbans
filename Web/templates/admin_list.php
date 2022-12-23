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
$title = "_TITLEADMINLIST";
$smarty = new dynamicPage;

//get all amxadmins
$admins=sql_get_amxadmins_list();

$smarty->assign("admins",$admins);
$smarty->assign("meta","");
$smarty->assign("title",$title);
$smarty->assign("version_web",$config->v_web);
// amxbans.css im design enthalten, wenn nicht default nehmen
if(file_exists("templates/".$config->design."/amxbans.css")) {
	$smarty->assign("design",$config->design);
}
$smarty->assign("dir",$config->document_root);
$smarty->assign("this",$_SERVER['PHP_SELF']);
$smarty->assign("menu",$menu);
$smarty->assign("banner",$config->banner);

$smarty->display('main_header.tpl');
$smarty->display('admin_list.tpl');
$smarty->display('main_footer.tpl');
?>