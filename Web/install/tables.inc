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

// AMXBans DB structure v6.0

//_admins_servers
$table_create[$_SESSION["dbprefix"]."_admins_servers"]="admin_id int(11) NULL,server_id int(11) NULL,
				 custom_flags varchar(32) NOT NULL,use_static_bantime enum('yes','no') NOT NULL DEFAULT 'yes'";
//_amxadmins
$table_create[$_SESSION["dbprefix"]."_amxadmins"]="id int(12) NULL auto_increment,username varchar(32) NULL,password varchar(32) NULL,
				 access varchar(32) NULL,flags varchar(32) NULL,steamid varchar(32) NULL,nickname varchar(32) NULL,ashow int(11) NULL,
				 created int(11) NULL,expired int(11) NULL,days int(11) NULL,PRIMARY KEY (id),KEY steamid (steamid)";		 
//_bans
$table_create[$_SESSION["dbprefix"]."_bans"]="bid int(11) NULL auto_increment,player_ip varchar(32) NULL,
				player_id varchar(35) NULL,player_nick varchar(100) NULL DEFAULT 'Unknown',admin_ip varchar(32) NULL,admin_id varchar(35) NULL,
				admin_nick varchar(100) NULL DEFAULT 'Unknown',ban_type varchar(10) NULL DEFAULT 'S',ban_reason varchar(100) NULL,
				ban_created int(11) NULL,ban_length int(11) NULL,server_ip varchar(32) NULL,server_name varchar(100) NULL DEFAULT 'Unknown',
				ban_kicks int(11) NOT NULL DEFAULT '0',expired int(1) NOT NULL DEFAULT '0',imported int(1) NOT NULL DEFAULT '0',PRIMARY KEY (bid),KEY player_id (player_id)";
//_bans_edits
$table_create[$_SESSION["dbprefix"]."_bans_edit"]="`id` int(11) NOT NULL auto_increment,`bid` int(11) NOT NULL,`edit_time` int(11) NOT NULL,
			  `admin_nick` varchar(32) NOT NULL DEFAULT 'unknown',`edit_reason` varchar(255) NOT NULL,PRIMARY KEY (`id`)";
//_bbcode
$table_create[$_SESSION["dbprefix"]."_bbcode"]="id int(11) NULL auto_increment,open_tag varchar(32) NULL,close_tag varchar(32) NULL,
				url varchar(32) NULL,name varchar(32) NULL,PRIMARY KEY (id)";

//_comments
$table_create[$_SESSION["dbprefix"]."_comments"]="id int(11) NULL auto_increment,name varchar(35) NULL,comment text NULL,email varchar(100) NULL,
				addr varchar(32) NULL,date int(11) NULL,bid int(11) NULL,PRIMARY KEY (id)";

//_files
$table_create[$_SESSION["dbprefix"]."_files"]="id int(11) NULL auto_increment,upload_time int(11) NULL,down_count int(11) NULL,bid int(11) NULL,
				demo_file varchar(100) NULL,demo_real varchar(100) NULL,file_size int(11) NULL,comment text NULL,name varchar(64) NULL,
				email varchar(64) NULL,addr varchar(32) NULL,PRIMARY KEY (id)";

//_levels
$table_create[$_SESSION["dbprefix"]."_levels"]="level int(12) NULL,bans_add enum('yes','no') NULL DEFAULT 'no',bans_edit enum('yes','no','own') NULL DEFAULT 'no',
				bans_delete enum('yes','no','own') NULL DEFAULT 'no',bans_unban enum('yes','no','own') NULL DEFAULT 'no',bans_import enum('yes','no') NULL DEFAULT 'no',
				bans_export enum('yes','no') NULL DEFAULT 'no',amxadmins_view enum('yes','no') NULL DEFAULT 'no',amxadmins_edit enum('yes','no') NULL DEFAULT 'no',
				webadmins_view enum('yes','no') NULL DEFAULT 'no',webadmins_edit enum('yes','no') NULL DEFAULT 'no',websettings_view enum('yes','no') NULL DEFAULT 'no',
				websettings_edit enum('yes','no') NULL DEFAULT 'no',permissions_edit enum('yes','no') NULL DEFAULT 'no',prune_db enum('yes','no') NULL DEFAULT 'no',
				servers_edit enum('yes','no') NULL DEFAULT 'no',ip_view enum('yes','no') NULL DEFAULT 'no',PRIMARY KEY (level)";

//_logs
$table_create[$_SESSION["dbprefix"]."_logs"]="id int(11) NULL auto_increment,timestamp int(11) NULL,ip varchar(32) NULL,username varchar(32) NULL,
				action varchar(64) NULL,remarks varchar(256) NULL,PRIMARY KEY (id)";

//_modulconfig
$table_create[$_SESSION["dbprefix"]."_modulconfig"]="id int(11) NULL auto_increment,menuname varchar(32) NULL,name varchar(32) NULL,
				`index` varchar(32) NULL,activ int(1) NOT NULL DEFAULT '1',PRIMARY KEY (id)";

//_reasons
$table_create[$_SESSION["dbprefix"]."_reasons"]="id int(11) NULL auto_increment,reason varchar(100) NULL,static_bantime int(11) NOT NULL DEFAULT '0',PRIMARY KEY (id)";

//_reasons_set
$table_create[$_SESSION["dbprefix"]."_reasons_set"]="id int(11) NULL auto_increment,setname varchar(32) NULL,PRIMARY KEY (id)";

//_reasons_to_set
$table_create[$_SESSION["dbprefix"]."_reasons_to_set"]="id int(11) NULL auto_increment,setid int(11) NOT NULL,reasonid int(11) NOT NULL,PRIMARY KEY (id)";

//_serverinfo
$table_create[$_SESSION["dbprefix"]."_serverinfo"]="id int(11) NULL auto_increment,timestamp int(11) NULL,hostname varchar(100) NULL DEFAULT 'Unknown',
				address varchar(100) NULL,gametype varchar(32) NULL,rcon varchar(32) NULL,amxban_version varchar(32) NULL,amxban_motd varchar(250) NULL,
				motd_delay int(10) NULL DEFAULT '10',amxban_menu int(10) NOT NULL DEFAULT '1',reasons int(10) NULL,timezone_fixx int(11) NOT NULL DEFAULT '0',PRIMARY KEY (id)";

//_smilies
$table_create[$_SESSION["dbprefix"]."_smilies"]="id int(5) NULL auto_increment,code varchar(32) NULL,url varchar(32) NULL,name varchar(32) NULL,PRIMARY KEY (id)";

//_usermenu
$table_create[$_SESSION["dbprefix"]."_usermenu"]="id int(11) NULL auto_increment,pos int(11) NULL,activ tinyint(1) NOT NULL DEFAULT '1',lang_key varchar(64) NULL,
				url varchar(64) NULL,lang_key2 varchar(64) NULL,url2 varchar(64) NULL,PRIMARY KEY (id)";

//_webadmins
$table_create[$_SESSION["dbprefix"]."_webadmins"]="id int(12) NULL auto_increment,username varchar(32) NULL,password varchar(32) NULL,level int(11) NULL DEFAULT '99',
				logcode varchar(64) NULL,email varchar(64) NULL,last_action int(11) NULL,try int(1) NOT NULL default '0',PRIMARY KEY (id),UNIQUE (username,email)";

//_webconfig
$table_create[$_SESSION["dbprefix"]."_webconfig"]="id int(11) NULL auto_increment,cookie varchar(32) NULL,bans_per_page int(11) NULL,design varchar(32) NULL,
				banner varchar(64) NULL,banner_url varchar(128) NOT NULL,default_lang varchar(32) NULL,start_page varchar(64) NULL,show_comment_count int(1) NULL DEFAULT '1',
				show_demo_count int(1) NULL DEFAULT '1',show_kick_count int(1) NULL DEFAULT '1',demo_all int(1) NOT NULL DEFAULT '0',comment_all int(1) NOT NULL DEFAULT '0',
				use_capture int(1) NULL DEFAULT '1',max_file_size int(11) NULL DEFAULT '2',file_type varchar(64) NULL DEFAULT 'dem,zip,rar,jpg,gif',
				auto_prune int(1) NOT NULL DEFAULT '0',`max_offences` SMALLINT NOT NULL DEFAULT '10',`max_offences_reason` VARCHAR( 128 ) NOT NULL DEFAULT 'max offences reached',
				use_demo int(1) NULL DEFAULT '1',use_comment int(1) NULL DEFAULT '1',PRIMARY KEY (id)";
	
//_flagged
$table_create[$_SESSION["dbprefix"]."_flagged"]="`fid` int(11) NOT NULL auto_increment,`player_ip` varchar(32) default NULL,`player_id` varchar(35) default NULL,
				`player_nick` varchar(100) default 'Unknown',`admin_ip` varchar(32) default NULL,`admin_id` varchar(35) default NULL,`admin_nick` varchar(100) default 'Unknown',
				`reason` varchar(100) default NULL,`created` int(11) default NULL,`length` int(11) default NULL,`server_ip` varchar(100) default NULL,
				PRIMARY KEY  (`fid`),KEY `player_id` (`player_id`)";
?>