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

//_bbcodes
$data_create[$_SESSION["dbprefix"]."_bbcode"]="(`id`, `open_tag`, `close_tag`, `url`, `name`) VALUES
					(1, '[b]', '[/b]', 'bold.png', 'bold'),
					(2, '[i]', '[/i]', 'italic.png', 'italic'),
					(3, '[u]', '[/u]', 'underline.png', 'underline'),
					(4, '[center]', '[/center]', 'center.png', 'center')";
//_smilies
$data_create[$_SESSION["dbprefix"]."_smilies"]="(`id`, `code`, `url`, `name`) VALUES
					(1, ':D', 'big_smile.png', 'Big Grin'),
					(2, '8)', 'cool.png', 'Cool'),
					(3, ':S', 'hmm.png', 'Hmm'),
					(4, 'lol', 'lol.png', 'lol'),
					(5, ':(', 'mad.png', 'Mad'),
					(6, ':|', 'neutral.png', 'Neutral'),
					(7, ':roll:', 'roll.png', 'RollEyes'),
					(8, ':*(', 'sad.png', 'Sad'),
					(9, ':)', 'smile.png', 'Smilie'),
					(10, ':P', 'tongue.png', 'Tongue'),
					(11, ';)', 'wink.png', 'Wink'),
					(12, ':O', 'yikes.png', 'Yikes')";
//_usermenu
$usermenu_query="INSERT INTO `".$_SESSION["dbprefix"]."_usermenu` (`id`, `pos`, `activ`, `lang_key`, `url`, `lang_key2`, `url2`) VALUES
					(1, 0, 1, '_HOME', 'index.php', '_HOME', 'index.php'),
					(2, 1, 1, '_BANLIST', 'ban_list.php', '_BANLIST', 'ban_list.php'),
					(3, 2, 1, '_ADMLIST', 'admin_list.php', '_ADMLIST', 'admin_list.php'),
					(4, 3, 1, '_SEARCH', 'search.php', '_SEARCH', 'search.php'),
					(5, 4, 1, '_SERVER', 'view.php', '_SERVER', 'view.php'),
					(6, 5, 1, '_LOGIN', 'login.php', '_LOGOUT', 'logout.php')";
//_webconfig
$websettings_query="INSERT INTO `".$_SESSION["dbprefix"]."_webconfig` (`id`, `cookie`, `bans_per_page`, `design`, `banner`, `banner_url`, `default_lang`, `start_page`,
					`show_comment_count`, `show_demo_count`, `show_kick_count`, `demo_all`, `comment_all`, `use_capture`, `max_file_size`,
					`file_type`, `auto_prune`, `use_demo`, `use_comment`) VALUES
					(1, 'amxbans', 50, 'default', 'amxbans.png', 'http://www.amxbans.net', 'english', 'view.php', 1, 1, 1, 0, 0, 1, 2, 'dem,zip,rar,jpg,gif,png', 0, 1, 1)";
//_userlevel
$userlevel_query="INSERT INTO `".$_SESSION["dbprefix"]."_levels` (`level`, `bans_add`, `bans_edit`, `bans_delete`, `bans_unban`, `bans_import`, `bans_export`,
					`amxadmins_view`, `amxadmins_edit`, `webadmins_view`, `webadmins_edit`, `websettings_view`, `websettings_edit`, `permissions_edit`, `prune_db`,
					`servers_edit`, `ip_view`) VALUES
					(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes')";
//_webadmins
$webadmin_query="INSERT INTO `".$_SESSION["dbprefix"]."_webadmins` (`id`, `username`, `password`, `level`, `email`) VALUES
					(1, '".$mysql->escape_string($_SESSION["adminuser"])."', 
					MD5('".$_SESSION["adminpass"]."'), 
					1, 
					'".$mysql->escape_string($_SESSION["adminemail"])."')";
//_logs
$log_query="INSERT INTO `".$_SESSION["dbprefix"]."_logs` (`timestamp`, `ip`, `username`, `action`, `remarks`) VALUES
					(UNIX_TIMESTAMP(NOW()), '".$_SERVER["REMOTE_ADDR"]."', '".$mysql->escape_string($_SESSION["adminuser"])."', 
					'Install', 'Installation AMXBans v".$config->v_web."')";
//module iexport
$modules_install["iexport"]="INSERT INTO `".$_SESSION["dbprefix"]."_modulconfig` (`id`, `menuname`, `name`, `index`, `activ`) VALUES
					(1, '_MENUIMPORTEXPORT', 'iexport', '', 1)";

?>