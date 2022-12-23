<script type="text/javascript" src="calendar1.js"></script>
<div id="navigation">
	<div id="main-nav">
		<ul class="tabbed">
			<li id="header_1" onclick="ToggleMenu_open('1');"><a href="#">{"_ADMINAREA"|lang}</a></li>
			<li id="header_2" onclick="ToggleMenu_open('2');"><a href="#">{"_SERVER"|lang}</a></li>
			<li id="header_3" onclick="ToggleMenu_open('3');"><a href="#">{"_WEB"|lang}</a></li>
			<li id="header_4" onclick="ToggleMenu_open('4');"><a href="#">{"_OTHER"|lang}</a></li>
			<li id="header_5" onclick="ToggleMenu_open('5');"><a href="#">{"_MODULES"|lang}</a></li>
		</ul>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="sub-nav">
		<div id="menu_1" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php">{"_MENUINFO"|lang}</a></li>
				<li><a href="admin.php?site=ban_add">{"_ADDBAN"|lang}</a></li>
				<li><a href="admin.php?site=ban_add_online">{"_ADDBANONLINE"|lang}</a></li>
			</ul>
		</div>
		<div id="menu_2" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=sm_sv">{"_SERVER"|lang}</a></li>
				<li><a href="admin.php?site=sm_bg">{"_MENUREASONS"|lang}</a></li>
				<li><a href="admin.php?site=sm_av">{"_ADMINS"|lang}</a></li>
				<li><a href="admin.php?site=sm_sa">{"_TITLEADMIN"|lang}</a></li>
			</ul>
		</div>
		<div id="menu_3" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=wm_wa">{"_ADMINS"|lang}</a></li>
				<li><a href="admin.php?site=wm_ul">{"_PERM"|lang}</a></li>
				<li><a href="admin.php?site=wm_um">{"_MENUUSERMENU"|lang}</a></li>
				<li><a href="admin.php?site=wm_ms">{"_SETTINGS"|lang}</a></li>
			</ul>
		</div>
		<div id="menu_4" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=so_mo">{"_MODULES"|lang}</a></li>
				<li><a href="admin.php?site=so_up">{"_MENUUPDATE"|lang}</a></li>
				<li><a href="admin.php?site=so_lg">{"_MENULOGS"|lang}</a></li>
			</ul>
		</div>
		<div id="menu_5" style="display: block;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport">{"_MENUIMPORTEXPORT"|lang}</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

		<td id="main" valign="top" >
		{if $smarty.session.bans_import == "yes" || $smarty.session.bans_export == "yes"}
			<span class="title">{"_DATAIMPORTEXPORT"|lang}</span>
			<table width="50%"><tr><td>
				{if $smarty.session.bans_import == "yes" && $smarty.session.bans_export == "yes"}
				<table border="1" width="100%">
					<tr class="htable"><td colspan="2"><b>{"_DATABASE"|lang}</b></td></tr>
					<form method="POST">
					<tr class="settings_line">
						<td valign="top">&nbsp;<b>{"_LOCALBACKUPS"|lang}:</b><br /> &nbsp;<select name="localfile" style="width: 200px;">{html_options values=$backups output=$backups}</select></td>
						<td width="1%">
							<input type="submit" class="button" class="button" name="dbdownfile" value="{"_DOWNLOAD"|lang}" {if $count==0}disabled="disabled"{/if} /><br />
							<input type="submit" class="button" class="button" name="delfile" value="{"_DELETE"|lang}" onclick="return confirm('{"_DELBACKUP"|lang}{"_DATALOSS"|lang}');" {if $count==0}disabled="disabled"{/if} />
						</td>
					</tr>
					</form>
					<tr class="htable">
						<td colspan="2"><b>{"_BACKUPALL"|lang}</b></td>
					</tr>
					<form method="POST">
					<tr class="settings_line">
						<td>
							<input type="checkbox" name="structur" /> {"_ONLYSTRUCTUR"|lang}<br />
							<input type="checkbox" name="droptable" /> {"_INCLUDEDROP"|lang}<br />
							<input type="checkbox" name="deleteall" /> {"_INCLUDEDELETE"|lang}<br />
							<input type="checkbox" name="download" /> {"_DOWNLOADAFTER"|lang}
						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="dbexp" value="{"_BACKUP"|lang}" /></td>
					</tr>
					</form>
					<tr class="htable">
						<td colspan="2"><b>{"_BACKUPBANS"|lang}</b></td>
					</tr>
					<form method="POST">
					<tr class="settings_line">
						<td>
							<input type="checkbox" name="download" /> {"_DOWNLOADAFTER"|lang}
						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="dbbansexp" value="{"_BACKUP"|lang}" /></td>
					</tr>
					</form>
					
				</table>
				<br />
				{/if}
				
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="7"><b>{"_BANSIEXPORT"|lang}</b></td></tr>
					{if $smarty.session.bans_import == "yes"}
						<tr class="htablebottom">
							<td colspan="2">{"_IMP_FILE"|lang}</td>
						</tr>
						<form name="bannedcfg" method="POST" enctype="multipart/form-data">
						<tr class="settings_line">
							<td>
								&nbsp;<input size="32" type="text" name="reason" value="{"_IMPORT"|lang}" /> {"_REASON"|lang}<br />
								&nbsp;<input size="32" type="text" name="player_nick" value="{"_UNKNOWN"|lang}" /> {"_NICKNAME"|lang}<br />
								&nbsp;<input size="32" type="text" name="server_name" value="{"_WEB"|lang}" /> {"_SERVER"|lang}<br />
								&nbsp;<input size="28" type="text" name="ban_created" value="{$smarty.now|date_format:"%d-%m-%Y"}" />
								&nbsp;<a alt="" href="javascript:cal1.popup();"><img alt="" src="images/date.png" width="16" height="16" border="0" title="{"_PICK_DATE"|lang}" /></a> {"_DATE"|lang}<br />
								&nbsp;<input class="input_file" type="file" size="30" name="filename" />
							</td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="bancfgupl" onclick="return confirm('{"_DATAIMPORT"|lang}');" value="{"_IMPORT"|lang}" /></td>
							<script language="JavaScript">
							<!--
								var cal1 = new calendar1(document.forms['bannedcfg'].elements['ban_created']);
								cal1.year_scroll = true;
								cal1.time_comp = false;
							-->
							</script>
						</tr>
						<tr class="htable">
							<td colspan="2">{"_IMP_DB"|lang}</td>
						</tr>
						<tr class="settings_line">
							<td>{if $dbcheck == "OK"}
								<input type="hidden" name="impdbhost" value="{$dbdata.host}" />
								<input type="hidden" name="impdbuser" value="{$dbdata.user}" />
								<input type="hidden" name="impdbpw" value="{$dbdata.pass}" />
								<input type="hidden" name="impdbdb" value="{$dbdata.database}" />
								<input type="hidden" name="impdbtable" value="{$dbdata.table}" />
								{/if}
								&nbsp;<input size="32" type="text" name="impdbhost" value="{if $dbdata}{$dbdata.host}{else}localhost{/if}" {if $dbcheck == "OK"}disabled="disabled"{/if} /> {"_DBHOST"|lang}<br />
								&nbsp;<input size="32" type="text" name="impdbuser" value="{if $dbdata}{$dbdata.user}{else}user{/if}"  {if $dbcheck == "OK"}disabled="disabled"{/if} /> {"_DBUSER"|lang}<br />
								&nbsp;<input size="32" type="password" name="impdbpw" value="{if $dbdata}{$dbdata.pass}{/if}"  {if $dbcheck == "OK"}disabled="disabled"{/if} /> {"_DBPASSWORD"|lang}<br />
								&nbsp;<input size="32" type="text" name="impdbdb" value="{if $dbdata}{$dbdata.database}{else}amxbans{/if}"  {if $dbcheck == "OK"}disabled="disabled"{/if} /> {"_DBDATABASE"|lang}<br />
								&nbsp;<input size="32" type="text" name="impdbtable" value="{if $dbdata}{$dbdata.table}{else}amx_bans{/if}"  {if $dbcheck == "OK"}disabled="disabled"{/if} /> {"_DBTABLE"|lang}<br />
								<input type="checkbox" name="onlyperm" {if $dbdata.onlyperm}checked{/if} /> {"_ONLYPERMANENT"|lang}<br />
								<input type="checkbox" name="dellocal" {if $dbdata.dellocal}checked{/if} /> {"_DELETELOCALTABLE"|lang}<br />
							</td>
							<td width="1%" valign="bottom">
								{if $dbcheck == "OK"}<img src="images/success.gif" />{/if}
								<input type="submit" class="button" name="bandbcheck" value="{"_CONCHECK"|lang}" {if $dbcheck == "OK"}disabled="disabled"{/if} />
								<input type="submit" class="button" name="bandbimp" value="{"_IMPORT"|lang}" onclick="return confirm('{"_DATAIMPORT"|lang}');" {if $dbcheck != "OK"}disabled="disabled"{/if} />
							</td>
							
						</tr>
						<tr class="settings_line">
							<td>&nbsp;{"_DELALLIMPORTED"|lang} {if $importcount >= 0}<b>({$importcount})</b>{/if}</td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="delimport" onclick="return confirm('{"_DELIMPORT"|lang}{"_DATALOSS"|lang}');" value="{"_DELETE"|lang}" {if $importcount == 0}disabled="disabled"{/if}/></td>
						</tr>
						<tr class="settings_line">
							<td>&nbsp;{"_SETALLNOTIMPORTED"|lang}</td>
							<td width="1%" valign="bottom"><input type="submit" class="button" name="setnotimported" onclick="return confirm('{"_SETIMPORT"|lang}');" value="{"_SET"|lang}" /></td>
						</tr>
						</form>
					{/if}
					{if $smarty.session.bans_export == "yes"}
					<form method="POST">
					<tr class="htable">
						<td colspan="2">{"_EXP_FILE"|lang}</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="onlyperm" /> {"_ONLYPERMANENT"|lang}<br />
							<input type="checkbox" name="increason" /> {"_INCLUDEREASON"|lang}<br />
							<input type="checkbox" name="download" /> {"_DOWNLOADAFTER"|lang}
						</td>
						<td valign="bottom" width="1%"><input type="submit" class="button" name="bancfgexp" value="{"_EXPORT"|lang}" /></td>
					</tr>
					</form>
					{/if}
				</table>
				<br />
				<center>
					{if $msg}<div class="notice">{$msg|lang}<br /></div>{/if}
					{if $statusexport.exported || $statusexport.exported===0}<div class="success">{"_EXPORTED"|lang}: {$statusexport.exported}<br /></div>{/if}
					{if $status}<div class="notice">{"_IMPORTED"|lang}: <b>{$status.imported}</b> / {"_FAILED"|lang}: <b>{$status.failed}</b><br /></div>{/if}
					{if $delcount || $delcount===0}<div class="success">{"_DELETEDBANS"|lang}: {$delcount}<br /></div>{/if}
					{if $updatecount || $updatecount===0}<div class="success">{"_UPDATEDBANSNOTIMPORTED"|lang}: {$updatecount}<br /></div>{/if}
				</center>
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>