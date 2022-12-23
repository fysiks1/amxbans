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
		<div id="menu_3" style="display: block;">
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
		{if $smarty.session.websettings_view == "yes"}
			<span class="title">{"_USERMENUSETTINGS"|lang}</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr align="center" class="htabletop"><td colspan="7"><b>{"_USERMENU"|lang}</b></td></tr>
					<tr class="htablebottom">
						<td width="1%" colspan="2">&nbsp;</td>
						<td align="center" colspan="2">{"_MENULOGGEDOUT"|lang}</td>
						<td align="center" colspan="2">{"_MENULOGGEDIN"|lang}</td>
						<td width="1%">&nbsp;</td>
					</tr>
					<tr align="center">
						<td width="1%">{"_POSITION"|lang}</td>
						<td width="1%">{"_ACTIV"|lang}</td>
						<td align="center">{"_LANGKEY1"|lang}</td>
						<td width="1%"align="center">{"_URL1"|lang}</td>
						<td align="center">{"_LANGKEY2"|lang}</td>
						<td width="1%" align="center">{"_URL2"|lang}</td>
						<td width="1%">&nbsp;</td>
					</tr>
					{section name=menu loop=$menu2 start=0 step=1}
						<form name="form" method="POST">
							<input type="hidden" name="mid" value="{$menu2[menu].id}" />
							<input type="hidden" name="pos" value="{$smarty.section.menu.index}" />
							<tr>
								<td class="settings_line">
									<nobr>
										{if $menu2[menu].pos >= 1}
										<input type="image" src="images/pfeilo.gif" name="pos_up" border="0" width="9px" height="8px" />
										{/if}
										{if $smarty.section.menu.index_next !== $menu_count}
										<input type="image" src="images/pfeilu.gif" name="pos_dn" border="0" width="9px" height="8px" 
											{if $menu2[menu].pos == 1}style="margin-left:11px;"{/if} />
										{/if}
									</nobr>
								</td>
								<td><input type="checkbox" name="activ" value="{$menu2[menu].id}" {if $menu2[menu].activ==1}checked{/if} />
								<td><nobr><input size="8" type="text" name="lang_key" value="{$menu2[menu].lang_key}" />{if $menu2[menu].lang_key} ("{$menu2[menu].lang_key|lang}"){/if}</nobr></td>
								<td><input size="15" type="text" name="url" value="{$menu2[menu].url}" /></td>
								<td><nobr><input size="8" type="text" name="lang_key2" value="{$menu2[menu].lang_key2}" />{if $menu2[menu].lang_key2} ("{$menu2[menu].lang_key2|lang}"){/if}</nobr></td>
								<td><input size="15" type="text" name="url2" value="{$menu2[menu].url2}" /></td>
								<td><nobr>
									<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if $smarty.session.websettings_edit !== "yes"}disabled{/if} />
									<input type="submit" class="button" name="del" value="{"_DELETE"|lang}" {if $smarty.session.websettings_edit !== "yes"}disabled{/if} /></nobr>
								</td>
							</tr>
							
						</form>
					{/section}
					
				</table>
				{if $smarty.session.websettings_edit == "yes"}
					<form method="POST">
						<input type="hidden" name="pos" value="{$menu_count}" />
						<table width="50%" align="center">
							<tr class="htable">
								<td colspan="3"><b>{"_USERMENUADD"|lang}</b></td>
							</tr>
							<tr>
								<tr class="settings_line"><td><b>{"_LANGKEY1"|lang}:</b></td><td><input type="text" name="lang_key" /></td></tr>
								<tr class="settings_line"><td><b>{"_URL1"|lang}:</b></td><td><input type="text" name="url" /></td></tr>
								<tr class="settings_line"><td><b>{"_LANGKEY2"|lang}:</b></td><td><input type="text" name="lang_key2" /></td></tr>
								<tr class="settings_line"><td><b>{"_URL2"|lang}:</b></td><td><input type="text" name="url2" /></td>
								<td>
										<input type="submit" class="button" name="new" value="{"_ADD"|lang}" {if $smarty.session.websettings_edit !== "yes"}disabled{/if} >
									</td>
								</tr>
							</tr>
						</table>
					</form>
				{/if}
				{if $msg}<div class="notice">{$msg|lang}</div>{/if}
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>