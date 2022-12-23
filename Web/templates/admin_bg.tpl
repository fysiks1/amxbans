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
		{if $smarty.session.servers_edit == "yes"}
			<span class="title">{"_REASONSSETTINGS"|lang}</span>
			<table width="60%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htable">
						<td colspan="3"><b>{"_REASONSSETS"|lang}</b></td>
					</tr>
					{foreach from=$reasons_set item=reasons_set}
						<form method="POST">
							<input type="hidden" name="rsid" value="{$reasons_set.id}" />
							<tr class="list">
								<td>
									{if $reasons_set.setname == ""}&nbsp;{else}{$reasons_set.setname}{/if}
								</td>
								<td align="center">
									<input type="button" class="button" onclick="NewToggleLayer('layer_{$reasons_set.id}');" value="{"_EDIT"|lang}" />
									<input type="submit" class="button" name="delset" value="{"_DEL"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} />
								</td>
							</tr>
							<tr id="layer_{$reasons_set.id}" style="display: none">
								<td colspan="3"><div style="display: none">
									<table class="table_details" width="95%">
										<form method="POST">
											<tr class="htable">
												<td colspan="4">{"_EDITSET"|lang}</td>
											</tr>
											<tr class="settings_line">
												<td>{"_NAME"|lang}:</td>
												<td><input type="text" name="setname" value="{$reasons_set.setname}" /></td>
												<td><input type="submit" class="button" name="saveset" value="{"_SAVESET"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} /></td>
											</tr>
											<tr class="htable">
												<td width="33%">{"_REASON"|lang}</td><td width="33%">{"_STATICBANTIME"|lang}</td><td>{"_ACTIV"|lang}</td>
											</tr>
											{section name=reasons loop=$reasons}
												<tr class="settings_line">
													<td>{$reasons[reasons].reason}</td>
													<td>{$reasons[reasons].static_bantime}</td>
													<td><input type="checkbox" name="aktiv[]" value="{$reasons[reasons].id}" {$reasons_set.reasonids|strinstr:",":$reasons[reasons].id:"checked"} /></td>
												</tr>
											{/section}
										</form>
									</table></div>
								</td>
							</tr>
	
						</form>
					{/foreach}
					<div class="clearer"></div>
					<tr class="settings_line">
						<form method="POST">
							<td align="center"><input type="text" name="setname" value="" /></td>
							<td align="center"><input type="submit" class="button" name="newset" value="{"_NEWSET"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} /></td>
						</form>
					</tr>
				</table>
				
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="3"><b>{"_REASONS"|lang}</b></td>
					</tr>
					<tr align="center" class="htablebottom">
						<td width="30%" align="center">{"_REASON"|lang}</td>
						<td align="center">{"_STATICBANTIME"|lang}</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						{section name=reasons loop=$reasons}
							<form method="POST">
							<input type="hidden" name="rid" value="{$reasons[reasons].id}" />
							<tr class="settings_line">
								<td align="center"><input type="text" name="reason" value="{$reasons[reasons].reason}" /></td>
								<td align="center"><input type="text" name="static_bantime" value="{$reasons[reasons].static_bantime}" /></td>
								<td align="center">
									<input type="submit" class="button" name="reasonsave" value="{"_SAVE"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} />
									<input type="submit" class="button" name="reasondel" value="{"_DEL"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} />
								</td>
							</tr>
							</form>
						{/section}
					</tr>
					<tr><td colspan="3">&nbsp</td></tr>
					<tr class="settings_line">
						<form method="POST">
							<td align="center"><input type="text" name="reason" value="" /></td>
							<td align="center"><input type="text" name="static_bantime" value="" /></td>
							<td align="center"><input type="submit" class="button" name="newreason" value="{"_NEWREASON"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} /></td>
						</form>
					</tr>
				</table>
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			{if $msg<>""}
			<br />
			<div class="notice">{$msg|lang}</div>
			<br />
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>