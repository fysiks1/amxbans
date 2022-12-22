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

		<td id="main" valign="top">
		{if $smarty.session.amxadmins_view == "yes"}
			<span class="title">{"_VERSION"|lang}</span>
			<table width="95%"><tr><td>
				<table border="1" width="100%">
				<form method="POST">
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="3"><b>{"_WEBVERSIONINFO"|lang}</b></td>
					</tr>
					<tr class="htablebottom">
						<td>{"_WEB"|lang}</td>
						<td width="30%">{"_VERSION_CURRENT"|lang}</td>
						<td width="30%">{"_VERSION_RELEASE"|lang}</td>
					</tr>
					<tr class="settings_line">
						<td><b>{"_YOURWEB"|lang}</b></td>
						<td>
							{if $latest_version>$version_web}
								<span style="color:orange;font-weight:bold">{$version_web}</span>
								{assign var="web" value=true}
								<img src="images/warning.gif" title="{"_UPDATE_RECOMMENDED"|lang}" />
							{else}
								<span style="color:green;font-weight:bold">{$version_web}</span>
								<img src="images/success.gif" title="{"_UPDATE_NOTNEEDED"|lang}" />
							{/if}
						</td>
						<td>{$version_latest}</td>
					</tr>
				</table>
				<br />
			</table>
			<table width="95%"><tr><td width="49%" valign="top">
				<form method="POST">
				<table border="1" width="100%">
					<tr class="htabletop">
						<td colspan="4"><b>{"_PLUGINVERSIONINFO"|lang}</b></td>
					</tr>
					<tr class="htablebottom">
						<td>{"_SERVER"|lang}</td>
						<td width="30%">{"_VERSION_CURRENT"|lang}</td>
						<td width="30%">{"_VERSION_RELEASE"|lang}</td>
					</tr>
					{if $server_count == 0}
						<tr>
							<td align="center" colspan="2">&nbsp;</td>
							<td>{$version_latest}</td>
						</tr>
					{else}
						{foreach from=$version_server item=version_server}
						<tr>
							<td>{$version_server.address}</td>
							<td>
								{if $version_latest>$version_server.version}
									<span style="color:orange;font-weight:bold">{$version_server.version}</span>
									{assign var="plugin" value=true}
									<img src="images/warning.gif" title="{"_UPDATE_RECOMMENDED"|lang}" />
								{else}
									<span style="color:green;font-weight:bold">{$version_server.version}</span>
									<img src="images/success.gif" title="{"_UPDATE_NOTNEEDED"|lang}" />
								{/if}
							</td>
							<td>{$version_latest}</td>
						</tr>
						{/foreach}
					{/if}
				</table>
				<br />
			</table>
			{if $web==true}<center><div class="notice"><img src="images/warning.gif" alt="" border="0" /> <a href="http://www.amxbans.net/dl.php?f={$version_latest}" target="_blank">{"_WEBUPDATE_RECOMMENDED"|lang}</a></div></center>{/if}
			{if $plugin==true}<center><div class="notice"><img src="images/warning.gif" alt="" border="0" /> <a href="http://www.amxbans.net/dl.phpf={$version_latest}" target="_blank">{"_PLUGINUPDATE_RECOMMENDED"|lang}</a></div></center>{/if}
			{foreach from=$error item=error}
				<div class="error">{$error|lang}</div>
			{/foreach}
			<br />
		{else}
			<center><div class="admin_msg">{"_NOACCESS"|lang}</div></center>
		{/if}
		</td>
	</tr>
</table>