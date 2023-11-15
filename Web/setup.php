<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by AMXBans.de

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

require_once("include/init_session.php");

//check for existing config file
// if(file_exists("include/db.config.inc.php")) {
	// header("Location: index.php");
// }

require_once("install/functions.inc");
require_once("include/functions.inc.php");

$config = (object)array();
$config->v_web = "6.14.4fy";


//installation are 6 sites
$sitenrall=6;
$sitenr = isset($_POST['site']) ? (int)$_POST["site"] : 0;

if($sitenr==7 && isset($_POST["check7"])) {
	$sitenrall=7;
}
//if all setup data is ok, unlock and open site 7
if(isset($_POST["check6"])) {
	$sitenrall=7;
	$sitenr++;
}
if(isset($_POST["back"])) $sitenr--;
if(isset($_POST["next"])) $sitenr++;


if($sitenr < 1 || $sitenr > $sitenrall) $sitenr=1;


/////////////// basic functions /////////////////

//$config->path_root=str_replace("/".basename($_SERVER["SCRIPT_FILENAME"]),"",$_SERVER["SCRIPT_FILENAME"]);
$config->path_root=str_replace(DIRECTORY_SEPARATOR . basename(__FILE__), '', __FILE__);
$config->document_root=str_replace("/". basename($_SERVER["PHP_SELF"]),"",$_SERVER["PHP_SELF"]);
$config->templatedir = $config->path_root."/install";
$config->langfilesdir = $config->path_root."/install/language/";
$config->default_lang = "english";
if(empty($_SESSION["lang"])) $_SESSION["lang"]="english";
//debug
if(!is__writable($config->path_root."/include/smarty/templates_c/")) {
	echo '<div style="text-align: center; margin-top: 10%; color: #c04040;font-width=bold;font-size=18px;"><img src="images/warning.gif" /> <u>Directory include/smarty/templates_c is not writable or doesn\'t exist!!  Create and/or set the permissions appropriately.</u></div>';
	exit;
}

/* Smarty settings */
define("SMARTY_DIR", $config->path_root."/include/smarty/");

require_once(SMARTY_DIR."Smarty.class.php");

class dynamicPage extends Smarty {
	function __construct() {

		global $config;

		parent::__construct();

		$this->template_dir = $config->templatedir;
		$this->compile_dir	= SMARTY_DIR."templates_c/";
		$this->config_dir	= SMARTY_DIR."configs/";
		$this->cache_dir	= SMARTY_DIR."cache/";
		$this->caching		= false;
		
		//for changing templates it�s better "true", but slow down site load
		$this->force_compile = true;
		$this->caching = false;
		
		$this->assign("app_name","dynamicPage");
	}
}
$smarty = new dynamicPage;

$msg = "";
$validate = "";

$smarty->assign("db", array("","","","",""));
$smarty->assign("next",false);
$smarty->assign("true", true);
$smarty->assign("checkvalue","_REFRESH");
$smarty->assign("prevs", "");
$smarty->assign("admin",array("", ""));
$smarty->assign("validate", array());
$smarty->assign("adminpass", "");

if( !isset($_SESSION["dbhost"]) ) $_SESSION["dbhost"] = "";
if( !isset($_SESSION["dbuser"]) ) $_SESSION["dbuser"] = "";
if( !isset($_SESSION["dbpass"]) ) $_SESSION["dbpass"] = "";
if( !isset($_SESSION["dbdb"]) ) $_SESSION["dbdb"] = "";
if( !isset($_SESSION["dbprefix"]) ) $_SESSION["dbprefix"] = "";
if( !isset($_SESSION["adminuser"]) ) $_SESSION["adminuser"] = "";
if( !isset($_SESSION["adminemail"]) ) $_SESSION["adminemail"] = "";
if( !isset($_SESSION["adminpass"]) ) $_SESSION["adminpass"]="";
if( !isset($_SESSION["adminpass2"]) ) $_SESSION["adminpass2"]="";

if($sitenr==1) {
	$smarty->assign("next",true);
}

/////////////// site 2 server settings /////////////////
if($sitenr==2) {
	$php_settings=array(
			"display_errors"=>(ini_get('display_errors')=="")?"off":ini_get('display_errors'),
			"register_globals"=>(ini_get('register_globals')==1 || ini_get('register_globals')=="on")?"_ON":"_OFF",
			"magic_quotes_gpc"=>"_OFF",
			"safe_mode"=>(ini_get('safe_mode')==1 || ini_get('safe_mode')=="on")?"_ON":"_OFF",
			"post_max_size"=>ini_get('post_max_size')." (".return_bytes(ini_get('post_max_size'))." bytes)",
			"upload_max_filesize"=>ini_get('upload_max_filesize')." (".return_bytes(ini_get('upload_max_filesize'))." bytes)",
			"max_execution_time"=>ini_get('max_execution_time'),
			"version_php"=>phpversion(),
			"version_amxbans_web"=>$config->v_web,
			"server_software"=>$_SERVER["SERVER_SOFTWARE"],
			"mysql_version"=>mysqli_get_client_info(),
			"bcmath"=>(extension_loaded('bcmath')=="1")?"_YES":"_NO",
			"gmp"=>(extension_loaded('gmp')=="1")?"_YES":"_NO"
		);
	$smarty->assign("next",true);
	$smarty->assign("checkvalue","_REFRESH");
	$smarty->assign("php_settings",$php_settings);
}

/////////////// site 3 dirs /////////////////
if($sitenr==3) {
	if(isset($_POST["path_root"]) && $_POST["path_root"] != $config->path_root) $config->path_root = stripcslashes($_POST["path_root"]);
	if(isset($_POST["document_root"]) && $_POST["document_root"] != $config->document_root) $config->document_root = stripcslashes($_POST["document_root"]);
	$include_dir=is__writable($config->path_root."/include/");
	$backup_dir=is__writable($config->path_root."/include/backup/");
	$files_dir=is__writable($config->path_root."/include/files/");
	$temp_dir=is__writable($config->path_root."/temp/");
	$templates_c_dir=is__writable($config->path_root."/include/smarty/templates_c/");
	$setupphp=is__writable($config->path_root."/");
	
	$dirs=array(
		"document_root" => $config->document_root,
		"path_root"		=> $config->path_root,
		"include" 		=> $include_dir,
		"files" 		=> $files_dir,
		"backup"		=> $backup_dir,
		"temp" 			=> $temp_dir,
		"templates_c" 	=> $templates_c_dir,
		"setupphp"		=> $setupphp
		);
	if($include_dir && $files_dir && $temp_dir && $templates_c_dir && $backup_dir) $smarty->assign("next",true);
	$smarty->assign("checkvalue","_RECHECK");
	$smarty->assign("dirs",$dirs);
}

/////////////// site 4 db /////////////////
if($sitenr==4 && isset($_POST["check4"])) {
	$_SESSION["dbcheck"]=false;
	$dbhost=trim($_POST["dbhost"]);
	$dbuser=trim($_POST["dbuser"]);
	$dbpass=trim($_POST["dbpass"]);
	$dbdb=trim($_POST["dbdb"]);
	$dbprefix=trim($_POST["dbprefix"]);
	
	$_SESSION["dbhost"]=$dbhost;
	$_SESSION["dbuser"]=$dbuser;
	$_SESSION["dbpass"]=$dbpass;
	$_SESSION["dbdb"]=$dbdb;
	$_SESSION["dbprefix"]=$dbprefix;
	
	$smarty->assign("db",array($dbhost,$dbuser,$dbpass,$dbdb,$dbprefix));
	
	if($dbhost=="" || $dbuser=="" || $dbdb=="" || $dbprefix=="") {
		$msg="_NOREQUIREDFIELDS";
	}
	
	$mysql= new mysqli($dbhost,$dbuser,$dbpass, $dbdb);
	if (mysqli_connect_errno()) $msg="_CANTCONNECT";
	if(!$msg) {
		$enc = @$mysql->set_charset('utf8');
	}
	
	//get user privileges
	if(!$msg) {
		$previleges=sql_get_privilege($mysql);
		$prev[]=array("name"=>"SELECT","value"=>in_array("SELECT",$previleges));
		$prev[]=array("name"=>"INSERT","value"=>in_array("INSERT",$previleges));
		$prev[]=array("name"=>"UPDATE","value"=>in_array("UPDATE",$previleges));
		$prev[]=array("name"=>"DELETE","value"=>in_array("DELETE",$previleges));
		$prev[]=array("name"=>"CREATE","value"=>in_array("CREATE",$previleges));
		//search for all needed previleges
		foreach($prev as $k => $v) {
			if(in_array(false,$v)) {$msg="_NOTALLPREVILEGES";break;}
		}
	}
	//check for existing tables
	if(!$msg) {
		//search for existing dbprefix
		if($mysql->query("SHOW TABLES FROM `".$dbdb."` LIKE '".$dbprefix."\_%'")->num_rows) {
			$prefix_exists=true;
			//search for field "imported" in bans table, added since 6.0
			if( @$mysql->query("SHOW COLUMNS FROM `".$dbprefix."_bans` WHERE Field LIKE 'imported'")->num_rows) {
				$prefix_isnew=true;
			}
		}
	}
	
	$smarty->assign("prevs",$prev);
	
	if(!$msg) {
		if($prefix_exists) {
			if($prefix_isnew) {
				$msg="_PREFIXEXISTSV6";
				$_SESSION["dbcheck"]=true;
				$smarty->assign("next",true);
			} else {
				$msg="_PREFIXEXISTSV5";
			}
		} else {
			$msg="_DBOK";
			$_SESSION["dbcheck"]=true;
			$smarty->assign("next",true);
		}
	}
}
if($sitenr==4) $smarty->assign("checkvalue","_DBCHECK");

/////////////// site 5 admin /////////////////
if($sitenr==5 && isset($_POST["check5"])) {
	$_SESSION["admincheck"]=false;
	$adminuser=trim($_POST["adminuser"]);
	$adminpass=trim($_POST["adminpass"]);
	$adminpass2=trim($_POST["adminpass2"]);
	$adminemail=trim($_POST["adminemail"]);
	
	$_SESSION["adminuser"]=$adminuser;
	$_SESSION["adminemail"]=$adminemail;
	$_SESSION["adminpass"]="";
	$_SESSION["adminpass2"]="";
	
	$smarty->assign("admin",array($adminuser,$adminemail));
	
	if(strlen($adminuser) < 4) $validate[]="_USERTOSHORT";
	if(strlen($adminpass) < 4) $validate[]="_PWTOSHORT";
	if($adminpass != $adminpass2) $validate[]="_PWNOCONFIRM";
	#if(!ereg(".+@.+\..{2,}",$adminemail)) $validate[]="_NOVALIDEMAIL";
	if(!preg_match("/^[a-zA-Z0-9-_.]{2,}@[a-zA-Z0-9-_.]{2,}.[a-zA-Z]{2,6}$/",$adminemail)) $validate[]="_NOVALIDEMAIL";
	
	if(!$adminuser || !$adminpass || !$adminpass2 || !$adminemail) {
		$validate[]="_NOREQUIREDFIELDS";
	}
	if(!$validate) {
		$_SESSION["adminpass"]=$adminpass;
		$_SESSION["adminpass2"]=$adminpass2;
		$_SESSION["admincheck"]=true;
		$msg="_ADMINOK";
		$smarty->assign("adminpass",$adminpass);
		$smarty->assign("next",true);
		
	}
}
if($sitenr==5) $smarty->assign("checkvalue","_ADMINCHECK");
#if($sitenr==5 && $_SESSION["admincheck"]==true) $smarty->assign("next",true);

/////////////// site 6 show data /////////////////
if($sitenr==6) $smarty->assign("checkvalue","_STEP7");

/////////////// site 7 end /////////////////
if($sitenr==7 && $_SESSION["dbcheck"]==true && $_SESSION["admincheck"]==true && !isset($_POST["check7"])) {
	// Open connection to database again
	$mysql = new mysqli($_SESSION["dbhost"], $_SESSION["dbuser"], $_SESSION["dbpass"], $_SESSION["dbdb"]);
	if (mysqli_connect_errno()) $msg="_CANTCONNECT";
	include("install/tables.inc");
	//create db structure
	foreach($table_create as $k => $v) {
		$table=array("table"=>$k,"success"=>($mysql->query("CREATE TABLE ".$k." (".$v.") DEFAULT CHARSET=utf8")? "_CREATED" : "_ALREADYEXISTS"));
		$tables[]=$table;
	}
	//get default data
	include("install/datas.inc");
	//create default data
	foreach($data_create as $k => $v) {
		$data=array("data"=>$k,"success"=>($mysql->query("INSERT INTO ".$k." ".$v)? "_INSERTED" : "_FAILED"));
		$datas[]=$data;
	}
	//create default websettings
	$websettings_create=array("data"=>"_CREATEWEBSETTINGS","success"=>($mysql->query($websettings_query)? "_INSERTED" : "_FAILED"));
	//create default usermenu
	$usermenu_create=array("data"=>"_CREATEUSERMENU","success"=>($mysql->query($usermenu_query)? "_INSERTED" : "_FAILED"));
	//create webadmin userlevel
	$webadmin_create[]=array("data"=>"_CREATEUSERLEVEL","success"=>($mysql->query($userlevel_query)? "_INSERTED" : "_FAILED"));
	//create webadmin
	$webadmin_create[]=array("data"=>"_CREATEWEBADMIN","success"=>($mysql->query($webadmin_query)? "_INSERTED" : "_FAILED"));
	//install default modules
	foreach($modules_install as $k => $v) {
		$modul=array("name"=>$k,"success"=>($mysql->query($v)? "_INSERTED" : "_FAILED"));
		$modules[]=$modul;
	}

	//write db.config.inc.php
$content="<?php

	\$config->document_root = \"" . addslashes($_SESSION["document_root"]) . "\";
	\$config->path_root = \"" . addslashes($_SESSION["path_root"]) . "\";

	\$config->db_host = \"" . addslashes($_SESSION["dbhost"]) . "\";
	\$config->db_user = \"" . addslashes($_SESSION["dbuser"]) . "\";
	\$config->db_pass = \"" . addslashes($_SESSION["dbpass"]) . "\";
	\$config->db_db = \"" . addslashes($_SESSION["dbdb"]) . "\";
	\$config->db_prefix = \"" . addslashes($_SESSION["dbprefix"]) . "\";
	
?>";
	$msg=write_cfg_file($config->path_root."/include/db.config.inc.php",$content);
	$smarty->assign("content",$content);
	//create first log ;-)
	$mysql->query($log_query);

	$smarty->assign("tables",$tables);
	$smarty->assign("datas",$datas);
	$smarty->assign("modules",$modules);
	$smarty->assign("usermenu_create",$usermenu_create);
	$smarty->assign("websettings_create",$websettings_create);
	$smarty->assign("webadmin_create",$webadmin_create);
	$smarty->assign("checkvalue","_SETUPEND");
}
if($sitenr==7 && isset($_POST["check7"])) {
	//clear smarty cache
	$smarty->clearAllCache();
	//delete setup info
	//@unlink("setup.php");
	//@rmdir("install");
	header("Location: index.php");
	exit;
}

$smarty->assign("validate",$validate);

$_SESSION["path_root"] = $config->path_root;
$_SESSION["document_root"] = $config->document_root;

// Generate template
$smarty->assign("msg",$msg);
$smarty->assign("sitenr",$sitenr);
$smarty->assign("sitenrall",$sitenrall);
$smarty->assign("current_lang",$config->default_lang);
$smarty->assign("v_web",$config->v_web);

$smarty->display('setup.tpl');
