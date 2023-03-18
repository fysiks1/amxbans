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
		<div id="menu_2" style="display: block;">
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
		<div id="menu_5" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport">{"_MENUIMPORTEXPORT"|lang}</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

		<td id="main" valign="top" >
		{if $smarty.session.amxadmins_view == "yes"}
			<span class="title">{"_SERVERADMINSETTINGS"|lang}</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr align="center" class="htabletop"><td colspan="4"><b>{"_SERVER"|lang}</b></td></tr>
					<tr align="center" class="htablebottom">
						<td width="1%">{"_MOD"|lang}</td>
						<td width="1%">{"_IP"|lang}</td>
						<td>{"_HOSTNAME"|lang}</td>
						<td width="1%">&nbsp;</td>
					</tr>
					{foreach from=$servers item=server}
						<form method="POST">
							<input type="hidden" name="sid" value="{$server.sid}" />
							<input type="hidden" name="sidname" value="{$server.hostname}" />
							<tr class="list">
								<td><img src="images/mods/{$server.gametype}.gif"></td>
								<td>{$server.address}</td>
								<td>{$server.hostname}</td>
								<td><input type="submit" class="button" name="admins_edit" value="{"_EDITADMINS"|lang}" /></td>
							</tr>
						</form>
					{/foreach}
				</table>
				<br />
				{if $msg}<div class="notice" align="center">{$msg|lang}</div>{/if}
				{if $editadmins.sidname}
				<hr />
				<br />
				<form method="POST" name="frm">
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="9"><b>{"_ADMINS"|lang}: {$editadmins.sidname}</b></td></tr>
					<tr class="htablebottom">
						<td align="center">{"_NAME"|lang}</td>
						<td align="center">{"_NICKNAME"|lang}</td>
						<td width="1%" align="center">{"_STEAMID"|lang}</td>
						<td width="1%" align="center">{"_ACCESS"|lang}</td>
						<td width="1%" align="center">{"_FLAGS"|lang}</td>
						<td width="20%" align="center">{"_CUSTOMFLAGS"|lang}</td>
						<td width="1%" align="center"><nobr>{"_STATICBANTIME"|lang}</nobr></td>
						<td width="1%">{"_ACTIV"|lang}</td>
					</tr>
					{foreach from=$admins item=admin}
					<tr class="settings_line">
						<td align="center">{$admin.username}</td>
						<td align="center">{$admin.nickname}</td>
						<td align="center">{$admin.steamid}</td>
						<td align="center">{$admin.access}</td>
						<td align="center">{$admin.flags}</td>
						<td align="center">
							<div id="cf{$admin.aid}" {if $admin.aktiv!=1}style="visibility:hidden"{/if} nowrap>
								<input type="text" name="custom_flags[]" id="cftxt{$admin.aid}" size="22" value="{$admin.custom_flags}"/>
								<img src="images/server_key.png" alt="{"_ACCESSFLAGS"|lang}" style="cursor:pointer;" 
									onClick="window.open('include/amxxhelper.php?id=cftxt'+{$admin.aid},'Link','width=510,height=670,dependent=yes,resizable=yes');return false;" />
							</div>
						</td>
						<td align="center">
							<div id="usb{$admin.aid}" {if $admin.aktiv!=1}style="visibility:hidden"{/if}>
								<select name="use_static_bantime[]">{html_options values=$yesno_choose output=$yesno_output|lang selected=$admin.use_static_bantime}</select>
							</div>
						</td>
						<td align="center">
							<input type="hidden" name="sid" value="{$editadmins.sid}" />
							<input type="hidden" name="sidname" value="{$editadmins.sidname}" />
							<input type="hidden" name="hid_uid[]" value="{$admin.aid}" />
							<select name="aktiv_new[]" onchange="document.getElementById('cf{$admin.aid}').style.visibility=(this.value == 1)?'visible':'hidden';
									document.getElementById('usb{$admin.aid}').style.visibility=(this.value == 1)?'visible':'hidden';">{html_options values=$onetwo_choose output=$yesno_output|lang selected=$admin.aktiv}
							</select>
						</td>
					</tr>
					{/foreach}
						<tr align="right">
							<td align="right"><input type="submit" class="button" name="save" value="{"_SAVE"|lang}"  {if $smarty.session.amxadmins_edit != "yes"}disabled{/if} /></td>
						</tr>
					</td>
					</tr>
				</table>
				</form>
				<br />
					{include file="info_amxaccess.tpl"}
				{/if}
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>