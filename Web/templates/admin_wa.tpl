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
		{if $smarty.session.webadmins_view == "yes"}
			<span class="title">{"_WEBADMINSSETTINGS"|lang}</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="5"><b>{"_WEBADMINS"|lang}</b></td></tr>
					<tr class="htablebottom">
						<td>{"_NAME"|lang}</td>
						<td align="center" width="1%">{"_LEVEL"|lang}</td>
						<td width="1%">{"_EMAIL"|lang}<td align="center" width="1%">{"_LASTLOGIN"|lang}</td>
						<td width="1%"><b>&nbsp;</b></td>
					</tr>
					{foreach from=$users item=users}
						<form method="POST" name="{$users.uid}">
							<input type="hidden" name="uid" value="{$users.uid}" />
							<input type="hidden" name="newpw" id="newpw{$users.uid}" value="" />
							<tr class="settings_line">
								<td align="center">
									{if $smarty.session.webadmins_edit == "yes"}
										<input type="text" name="name" value="{$users.name}"/>
									{else}
										<input type="hidden" name="name" value="{$users.name}"/>
										<b>{$users.name}</b>
									{/if}
								</td>
								<td align="center" width="1%">
									{if $smarty.session.webadmins_edit == "yes"}
										{html_options name=level values=$levels output=$levels selected=$users.level}
									{else}
										<input type="hidden" name="level" value="{$users.level}"/>
										{$users.level}
									{/if}
								</td>
								<td align="center"><input type="text" size="40" name="email" value="{$users.email}" {if !($smarty.session.uname == $users.name || $smarty.session.webadmins_edit == "yes")}disabled{/if}/></td>
								<td align="center"><nobr>
									{if $users.last_action}
										{$users.last_action|date_format:"%d. %b %Y - %T"}
									{else}
										<i>{"_NEVER"|lang}</i>
									{/if}
								</nobr></td>
								<td align="center"><nobr>
											<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if !($smarty.session.uname == $users.name || $smarty.session.webadmins_edit == "yes")}disabled{/if} />
											&nbsp;
											<input type="submit" class="button" name="del" value="{"_DELETE"|lang}" onclick="return confirm('{"_DELADMIN"|lang}');" {if $smarty.session.webadmins_edit !== "yes"}disabled{/if} />
											&nbsp;
											<input type="submit" class="button" name="setnewpw" value="{"_NEWPASSWORD"|lang}" 
												onclick="{if $smarty.session.uname == $users.name}alert('{"_YOURPASSWORD"|lang}');{/if}return SetNewPassword('newpw{$users.uid}','{"_ENTERPASSWORD"|lang}','{"_PASSWORD2"|lang}','{"_PASSWORDNOTMATCH"|lang}');" 
													{if !($smarty.session.uname == $users.name || $smarty.session.webadmins_edit == "yes")}disabled{/if} />
								
								</nobr></td>
							</tr>
						</form>
					{/foreach}
				</table>
				{if $smarty.session.webadmins_edit == "yes"}
					<form method="POST">
						<table border="1" width="50%">
							<tr class="htable">
								<td colspan="4"><b>{"_WEBADMINADD"|lang}</b></td>
							</tr>
							<tr class="settings_line"><td>{"_NAME"|lang}:</td><td align="left"><input type="text" name="name" value="{$input.name}" /></td></tr>
							<tr class="settings_line"><td>{"_EMAIL"|lang}:</td><td align="left"><input type="text" size="40" name="email" value="{$input.email}" /></td></tr>
							<tr class="settings_line"><td>{"_PASSWORD"|lang}:</td><td align="left"><input type="password" name="pw" /></td></tr>
							<tr class="settings_line"><td>{"_PASSWORD2"|lang}:</td><td align="left"><input type="password" name="pw2" /></td></tr>
							<tr class="settings_line">
								<td>{"_LEVEL"|lang}:</td>
								<td>{html_options name=level values=$levels output=$levels selected=$input.level}</td>
								<td>
									<input type="submit" class="button" name="new" value="{"_ADD"|lang}" {if $smarty.session.webadmins_edit !== "yes"}disabled{/if} />&nbsp;
									<input type="reset" class="button" value="{"_CLEAR"|lang}">
								</td>
							</tr>
						</table>
					</form>
				{/if}
			{else}
				<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
			{/if}
			{if $msg}{foreach from=$msg item=msg}<br /><div class="notice">{$msg|lang}</div>{/foreach}{/if}
			</td></tr></table>
		</td>
	</tr>
</table>