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

		<div id="menu_1" style="display: block;">

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

		<div id="menu_5" style="display: none;">

			<ul class="tabbed">

				<li><a href="admin.php?modul=iexport">{"_MENUIMPORTEXPORT"|lang}</a></li>

			</ul>

		</div>

		<div class="clearer">&nbsp;</div>

	</div>

</div>

<div class="main" id="main-two-columns">

	<div class="left" id="main-left">

		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr>

					<th colspan="2">{"_SERVERSETUP"|lang}</th> 

				</tr> 

			</thead> 

			<tbody> 

				<tr class="settings_line">

					<td class="fat" style="width:200px;">AMXBans {"_WEB_VERSION"|lang}</td> 

					<td>{$php_settings.version_amxbans_web}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">{"_WEBSERVER"|lang}</td> 

					<td>{$php_settings.server_software}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">PHP {"_VERSION"|lang}</td> 

					<td>{$php_settings.version_php}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">MySQL {"_VERSION"|lang}</td> 

					<td>{$php_settings.mysql_version} <img alt="" src="templates/{$design}_gfx/generic/{if $php_settings.mysql_version >=4.1}accept{else}exclamation{/if}.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">safe_mode</td> 

					<td>{$php_settings.safe_mode|lang} <img alt="" src="templates/{$design}_gfx/generic/accept.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">register_globals</td> 

					<td>{$php_settings.register_globals|lang} <img src="templates/{$design}_gfx/generic/{if $php_settings.register_globals=="_OFF"}accept{else}exclamation{/if}.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">magic_quotes_gpc</td> 

					<td>{$php_settings.magic_quotes_gpc|lang} <img src="templates/{$design}_gfx/generic/{if $php_settings.magic_quotes_gpc=="_OFF"}accept{else}exclamation{/if}.png" /></td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">display_errors</td> 

					<td>{$php_settings.display_errors}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">post_max_size</td> 

					<td>{$php_settings.post_max_size}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">upload_max_filesize</td> 

					<td>{$php_settings.upload_max_filesize}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">max_execution_time</td> 

					<td>{$php_settings.max_execution_time}</td>

				</tr>

			</tbody> 

		</table>



		<div class="spacer">&nbsp;</div>



		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr class="settings_line">

					<th colspan="3">{"_PHPMODULES"|lang}</th> 

				</tr> 

			</thead> 

			<tbody> 

				<tr>

					<td class="fat" style="width:200px;">bcmath</td> 

					<td style="width:15px;">{$php_settings.bcmath|lang}</td>

					<td rowspan="2"><img alt="" src="templates/{$design}_gfx/generic/{if $php_settings.gmp=="_YES" || $php_settings.bcmath=="_YES"}accept{else}exclamation{/if}.png"/></td>

				</tr>

				<tr>

					<td class="fat" style="width:200px;">gmp</td> 

					<td>{$php_settings.gmp|lang}</td>

				</tr>

				<tr class="settings_line">

					<td class="fat" style="width:200px;">GD</td> 

					<td colspan="2"> {$php_settings.gd|lang}{if $php_settings.version_gd} ({$php_settings.version_gd}){/if} <img alt="" src="templates/{$design}_gfx/generic/accept.png"/></td>

				</tr>

			</tbody> 

		</table> 

		<div class="clearer">&nbsp;</div>

	</div>



	<div class="right sidebar" id="sidebar">

		<div class="section">

			<div class="section-title">

				<div class="left">{"_STATS"|lang}</div>

				<div class="right"><span title="{"_STATS"|lang}" class="icons-stats icon-stats"></span></div>

				

				<div class="clearer">&nbsp;</div>



			</div>

			<div class="section-content">

				<ul class="nice-list">

					<li>

						<div class="left">{"_DBSIZE"|lang}</div>

						<div class="right">{if $db_size=="_NOTAVAILABLE"}{"_NOTAVAILABLE"|lang}{else}{$db_size}{/if}</div>

						<div class="clearer">&nbsp;</div>

					</li>



					<li>

						<div class="left">{"_BANSINDB"|lang}</div>

						<div class="right">{$bans.count}</div>

						<div class="clearer">&nbsp;</div>

					</li>



					<li>

						<div class="left">{"_ACTIVEBANS"|lang}</div>

						<div class="right">{$bans.activ}</div>

						<div class="clearer">&nbsp;</div>

					</li>

					

					<li>

						<div class="left">{"_COMMENTS"|lang}</div>

						<div class="right">

							{$comment_count.count}

							{if $comment_count.fail != 0} ({$comment_count.fail} {"_ERROR"|lang})

								<img src="templates/{$design}_gfx/generic/exclamation.png" />

								&nbsp;<input type="submit" name="comment_repair" value="{"_REPAIR"|lang}" />

							{/if}</div>

						<div class="clearer">&nbsp;</div>

					</li>

					

					<li>

						<div class="left">{"_BL_FILES"|lang}</div>

						<div class="right">

							{$file_count.count}

							{if $file_count.fail != 0} ({$file_count.fail} {"_ERROR"|lang})

								<img src="templates/{$design}_gfx/generic/exclamation.png" />

								&nbsp;<input type="submit" name="file_repair" value="{"_REPAIR"|lang}" />

							{/if}

						</div>

					</li>

				</ul>

			</div>

		</div>



		<div class="section">

			<div class="section-title">

				{"_OTHERFUNCTIONS"|lang}

			</div>

			<div class="section-content">

				<form method="post">

					<ul class="nice-list">

						<li>

							<div class="left">{"_CLEARCACHE"|lang}</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<input type="submit" class="button" name="clear" value="{"_DELETE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}/>

									<!--<input type="submit" name="clear" value="{"_DELETE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}>-->

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

	

						<li>

							<div class="left">{"_DBOPTIMIZE"|lang}</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<!--<input type="submit" name="optimize" value="{"_OPTIMIZE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}>-->

									<input type="submit" class="button" name="optimize" value="{"_OPTIMIZE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}/>

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

						<li>

							<div class="left">{"_DBPRUNE"|lang}</div>

							<div class="right">

								<!--<form method="post" style="display:inline;">-->

									<!--<input type="submit" name="optimize" value="{"_PRUNE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}>-->

									<input type="submit" class="button" name="prunedb" value="{"_PRUNE"|lang}" {if $smarty.session.websettings_edit != "yes"}disabled{/if}/>

								<!--</form>-->

							</div>

							<div class="clearer">&nbsp;</div>

						</li>

						{if $msg}<li>

							<br /><div class="notice" style="text-align:center;">

								{$msg|lang}

							</div>

							<div class="clearer">&nbsp;</div>

						</li>{/if}

					</ul>

				</form>

			</div>

		</div>

	</div>

	<div class="clearer">&nbsp;</div>

</div>

