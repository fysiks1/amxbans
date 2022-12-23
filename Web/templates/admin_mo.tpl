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
		<div id="menu_4" style="display: block;">
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
			<span class="title">{"_MODULSETTINGS"|lang}</span>
			<table width="95%"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="8"><b>{"_MODULSETTINGS2"|lang}</b></td></tr>
					<tr class="htablebottom">
						<td width="1%">{"_ACTIV"|lang}</td>
						<td>{"_NAMELANGKEY"|lang}</td>
						<td width="1%">{"_INDEXSITE"|lang}</td>
						<td width="1%">{"_NAME"|lang}</td>
						<td width="1%"><nobr>{"_ADMINSITE"|lang}</nobr></td>
						<td width="1%">{"_TEMPLATE"|lang}</td>
						<td width="1%"><nobr>{"_INDEXSITE"|lang}</nobr></td>
						<td width="1%">&nbsp;</td>
					</tr>
					{section name=modules loop=$modules2 start=0 step=1}
						<form name="form" method="POST">
							<input type="hidden" name="mid" value="{$modules2[modules].id}" />
							<input type="hidden" name="mname" value="{$modules2[modules].menuname}" />
							<tr class="settings_line">
								
								<td><input type="checkbox" name="activ" value="{$modules2[modules].id}" {if $modules2[modules].activ==1}checked{/if} />
								<td><nobr><input type="text" name="menuname" value="{$modules2[modules].menuname}" /> ("{$modules2[modules].menuname|lang:"hlm"}")</nobr></td>
								<td><input type="text" name="index" value="{$modules2[modules].index}" /></td>
								<td><input type="text" size="12" name="name" value="{$modules2[modules].name}" /></td>
								<td><img src="images/{if $modules2[modules].admin_page_exists==0}warning{else}success{/if}.gif" /></td>
								<td><img src="images/{if $modules2[modules].tpl_exists==0}warning{else}success{/if}.gif" /></td>
								<td>
									{if $modules2[modules].index == ""}{"_NO"|lang}{else}
									<img src="images/{if $modules2[modules].index_exists==0}warning{else}success{/if}.gif" />{/if}
								</td>
								<td>
									<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if $smarty.session.websettings_edit !== "yes"}disabled{/if} />
								</td>
							</tr>
						</form>
					{/section}
				</table>
				<br />
				{if $msg}<div class="notice">{$msg|lang}</div>{/if}
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>