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

//check for existing config file
if(!file_exists("include/db.config.inc.php")) {
	header("Location: setup.php");
}

require_once("include/config.inc.php");
require_once("include/access.inc.php");

//start page loader
if(	$config->start_page == "" || $config->start_page == "index.php" || (!file_exists("$config->start_page"))) {
	header("Location:ban_list.php");
} else {
	header("Location:$config->start_page");
}
?>