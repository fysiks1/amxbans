<?php
	include('./include/config.inc.php');
	$scrmsg = array();
	
	/* http://www.amxbans.de/project.php?issueid=98 */
	$scrmsg['smiley'] = "";
	$query = mysql_query("
					UPDATE 
					`".$config->db_prefix."_smilies` 
					SET 
					`code` = ':S' 
					WHERE `code` = ':/';
					")or $scrmsg['smiley']=mysql_error();

	/* http://www.amxbans.de/project.php?issueid=147 */
	$scrmsg['primkey'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_admins_servers` 
					ADD COLUMN `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 
					AFTER `use_static_bantime`, 
					ADD PRIMARY KEY (`id`);
					")or $scrmsg['primkey']=mysql_error();

	/* Change from latin1 to utf-8 */
	$scrmsg['bans'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_bans` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['bans']=mysql_error();
	$scrmsg['comments'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_comments` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['comments']=mysql_error();
	$scrmsg['files'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_files` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['files']=mysql_error();
	$scrmsg['reasons'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_reasons` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['reasons']=mysql_error();
	$scrmsg['reasons_set'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_reasons_set` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['reasons_set']=mysql_error();
	$scrmsg['serverinfo'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_serverinfo` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['serverinfo']=mysql_error();
	$scrmsg['usermenu'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_usermenu` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['usermenu']=mysql_error();
	$scrmsg['webadmins'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_webadmins` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['webadmins']=mysql_error();
	$scrmsg['amxadmins'] = "";
	$query = mysql_query("
					ALTER TABLE 
					`".$config->db_prefix."_amxadmins` 
					CONVERT TO CHARACTER SET utf8 
					COLLATE utf8_general_ci;
					")or $scrmsg['amxadmins']=mysql_error();

	if($scrmsg != "") {
		print '<pre>';
			print_r($scrmsg);
		print '</pre>';
	} else {
		print 'Success!!';
	}
?>