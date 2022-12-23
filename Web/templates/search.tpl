<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:150px;">{"_SEARCH"|lang}</th> 
					<th>&nbsp;</th>
					<th style="width:50px;">&nbsp;</th>
				</tr>
			</thead> 
			<tbody> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat">{"_NICKNAME"|lang}</td> 
						<td><input type="text" size="40" name="nick" style="width:200px;" /></td> 
						<td><input type="submit" name="submit" class="button" value="{"_SEARCH"|lang}" /></td>
					</form>
				</tr> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat">{"_STEAMID"|lang}</td> 
						<td><input type="text" name="steamid" size="40" style="width:200px;"/></td> 
						<td><input type="submit" class="button" name="submit" value="{"_SEARCH"|lang}" /></td> 
					</form>
				</tr> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat">{"_IP"|lang}</td> 
						<td><input type="text" name="ip" size="40" style="width:200px;"/></td> 
						<td><input type="submit" class="button" name="submit" value="{"_SEARCH"|lang}"/></td>
					</form>
				</tr> 
				<tr> 
					<form method="post" style="display:inline;">
						<td class="fat">{"_REASON"|lang}</td> 
						<td><input type="text" name="reason" size="40" style="width:200px;"/></td> 
						<td><input type="submit" name="submit" class="button" value="{"_SEARCH"|lang}"/></td>
					</form>
				</tr> 
				<tr> 
					<form method="post" name="searchdate" style="display:inline;">
						<td class="fat">{"_DATE"|lang}</td> 
						<td>
							<input type="text" name="date" value="{$smarty.now|date_format:"%d-%m-%Y"}" style="width:200px;" />
							&nbsp;<script language="javascript" src="calendar1.js"></script>
							<a href="javascript:cal1.popup();">
								<img src="templates/{$design}_gfx/calendar.png" width="16" height="16" border="0" alt="{"_PICK_DATE"|lang}" title="{"_PICK_DATE"|lang}"/>
							</a>
						</td> 
						<td><input type="submit" class="button" value="{"_SEARCH"|lang}"/></td> 
					</form>
					<script language="javascript" type="text/javascript">
					<!--
						var cal1 = new calendar1(document.forms['searchdate'].elements['date']);
						cal1.year_scroll = true;
						cal1.time_comp = false;
					-->
					</script>
				</tr> 
				<tr> 
					<form method="post" style="display:inline;">
						<td class="fat">{"_PLAYERSWITH"|lang}</td> 
						<td>
							<select name='timesbanned'> 
								<option value='2'>2</option> 
								<option value='3'>3</option> 
								<option value='4'>4</option> 
								<option value='5'>5</option> 
								<option value='6'>6</option> 
								<option value='7'>7</option> 
								<option value='8'>8</option> 
								<option value='9'>9</option> 
								<option value='10'>10</option> 
							</select>
							{"_MOREBANSHIS"|lang}
						</td> 
						<td><input type="submit" class="button" name="submit" value="{"_SEARCH"|lang}"/></td> 
					</form>
				</tr> 
				<tr> 
					<td class="fat">{"_ADMIN"|lang}</td> 
					<td>
						<form method="post" name="form_admin" style="display:inline;">
							<select name="admin" size="1">
								<optgroup label="{"_AMXADMINS"|lang}">
									{foreach from=$amxadmins item=amxadmins}
										<option value="{$amxadmins.steam}">{$amxadmins.nick}</option>
									{/foreach}
								</optgroup>
								<optgroup label="{"_OTHER"|lang} {"_ADMINS"|lang}">
									{foreach from=$admins item=admins}
										<option value="{$admins.steam}">{$admins.nick}</option>
									{/foreach}
								</optgroup>
							</select>
						</form>
					</td> 
					<td><form method="post"><input type="button" class="button" onclick="form_admin.submit();" value="{"_SEARCH"|lang}"/></form></td> 
				</tr> 
				<tr> 
					<td class="fat">{"_SERVER"|lang}</td> 
					<td>
						<form method="post" name="form_server" style="display:inline;">
							{html_options name=server options=$servers|lang}
						</form> 
					</td> 
					<td><form method="post"><input type="button" class="button" onclick="form_server.submit();" value="{"_SEARCH"|lang}"/></form></td> 
				</tr> 
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>

	<div class="clearer">&nbsp;</div>
</div>


{if $msg}<center class="admin_msg">{$msg|lang}</center><br />{/if}
{if $search_done==1}
<fieldset><legend><span class="title">{"_SEARCHRESULT"|lang}</span></legend>
<table width="95%" cellpadding="2">
	<tr><td>
		<table width="80%" cellpadding="2">
			<tr>
				<td width="100%" colspan="6"><span style="font-weight:bold;color:red">{"_ACTIVEBANS"|lang} ({$ban_list_aktiv_count})</span></td>
			</tr>
			<tr class="htable">
				<td class="fat" width="1%">{"_DATE"|lang}</td>
				<td class="fat" width="24%">{"_PLAYER"|lang}</td>
				<td class="fat" width="1%">{"_STEAMID"|lang}</td>
				<td class="fat" width="24%">{"_ADMIN"|lang}</td>
				<td class="fat" width="24%">{"_REASON"|lang}</td>
				<td class="fat" width="1%">{"_LENGHT"|lang}</td>
			</tr>
			{foreach from=$ban_list_aktiv item=ban_list_aktiv}
				<form name="details" method="POST" action="ban_list.php">
				<tr class="list" style="cursor:pointer;" onClick="NewToggleLayer('layer_{$ban_list_aktiv.bid}');">
					<td>{$ban_list_aktiv.ban_created|date_format:"%d.%m.%Y"}</td>
					<td>{$ban_list_aktiv.player_nick}</td>
					<td>{$ban_list_aktiv.player_id}</td>
					<td>{$ban_list_aktiv.admin_nick}</td>
					<td>{$ban_list_aktiv.ban_reason}</td>
					<td nowrap>{if $ban_list_aktiv.ban_length>0}{$ban_list_aktiv.ban_length*60|date2word:true}{else}{"_PERMANENT"|lang}{/if}</td>
				</tr>
				<tr id="layer_{$ban_list_aktiv.bid}" style="display: none">
					<td colspan=10><div style="display: none">
							<input type="hidden" name="bid" value="{$ban_list_aktiv.bid}" />
							<table width="90%" class="table_details" cellspacing="0">
								<tr>
									<td class="table_details_head" width="20%"><b>{"_BANDETAILS"|lang}</b></td>
									<td align="right" class="table_details_head">
										<input name="details" type="image" src="images/page.png" border="0" title="{"_DETAILS"|lang}"/>
									</td>
								</tr>
								<tr><td width="15%"><b>{"_NICKNAME"|lang}:</b></td><td>{$ban_list_aktiv.player_nick}</td></tr>
								<tr><td><b>{"_STEAMID"|lang}:</b></td><td>{if $ban_list_aktiv.player_id <> ""}{$ban_list_aktiv.player_id}{else}{"_NOSTEAMID"|lang}{/if}</td></tr>
								<tr><td><b>{"_STEAMCOMID"|lang}:</b></td><td>
									{if $ban_list_aktiv.player_id <> ""}
										<a href="http://steamcommunity.com/profiles/{$ban_list_aktiv.player_comid}" target="_blank">{$ban_list_aktiv.player_comid}</a>
									{else}
										{"_NOTAVAILABLE"|lang}
									{/if}</td></tr>
								<tr><td><b>{"_IP"|lang}:</b></td><td>
									{if $smarty.session.ip_view=="yes"}
										{if $ban_list_aktiv.player_ip}{$ban_list_aktiv.player_ip}{else}<i>{"_NOTAVAILABLE"|lang}</i>{/if}
									{else}<i>{"_HIDDEN"|lang}</i>
									{/if}</td></tr>
								<tr><td><b>{"_BANTYPE"|lang}:</b></td><td>{if $ban_list_aktiv.ban_type=="S"}{"_STEAMID"|lang}
									{elseif $ban_list_aktiv.ban_type=="SI"}{"_STEAMID&IP"|lang}
									{else}{"_NOTAVAILABLE"|lang}{/if}
								</td></tr>
								<tr><td><b>{"_REASON"|lang}:</b></td><td>{$ban_list_aktiv.ban_reason}</td></tr>
								<tr><td><b>{"_INVOKED"|lang}:</b></td><td>{$ban_list_aktiv.ban_created|date_format:"%d. %b %Y - %T"}</td></tr>
								<tr><td><b>{"_BANLENGHT"|lang}:</b></td><td>{if $ban_list_aktiv.ban_length==0}{"_PERMANENT"|lang}{else}{$ban_list_aktiv.ban_length} {"_MINS"|lang}{/if}</td></tr>
								<tr><td><b>{"_EXPIRES"|lang}:</b></td><td>
									{if $ban_list_aktiv.ban_length==0}<i>{"_NOTAPPLICABLE"|lang}</i>{else}{$ban_list_aktiv.ban_end|date_format:"%d. %b %Y - %T"}
										{if $ban_list_aktiv.ban_end < $smarty.now} ({"_ALREADYEXP"|lang}){/if}
									{/if}
								</td></tr>
								<tr><td><b>{"_BANBY"|lang}:</b></td><td>{$ban_list_aktiv.admin_nick}</td></tr>
								<tr><td><b>{"_BANON"|lang}:</b></td><td>{if $ban_list_aktiv.server_name == "website"}{"_WEB"|lang}{else}{$ban_list_aktiv.server_name}{/if}</td></tr>
								<tr><td><b>{"_TOTALEXPBANS"|lang}:</b></td><td>{$ban_list_aktiv.bancount}</td></tr>
							</table>
					</div></td>
					
				</tr></form>
			{/foreach}
		</table>
		<br />
		<table width="80%" align="center" border="1" cellpadding="2">
			<tr class="search_head2">
				<td width="100%" colspan="6"><span style="font-weight:bold;color:green">{"_EXPIREDBANS"|lang}  ({$ban_list_exp_count})</span></td>
			</tr>
			<tr class="htable">
				<td class="fat" width="1%" nowrap>{"_DATE"|lang}</td>
				<td class="fat" width="24%">{"_PLAYER"|lang}</td>
				<td class="fat" width="1%" nowrap>{"_STEAMID"|lang}</td>
				<td class="fat" width="24%">{"_ADMIN"|lang}</td>
				<td class="fat" width="24%">{"_REASON"|lang}</td>
				<td class="fat" width="1%" nowrap>{"_LENGHT"|lang}</td>
			</tr>
			{foreach from=$ban_list_exp item=ban_list_exp}
				<form name="details" method="POST" action="ban_list.php">
				<tr class="list"  style="cursor:pointer;" onClick="NewToggleLayer('layer_{$ban_list_exp.bid}');">
					<td>{$ban_list_exp.ban_created|date_format:"%d.%m.%Y"}</td>
					<td>{$ban_list_exp.player_nick}</td>
					<td>{$ban_list_exp.player_id}</td>
					<td>{$ban_list_exp.admin_nick}</td>
					<td>{$ban_list_exp.ban_reason}</td>
					<td nowrap>{if $ban_list_exp.ban_length>0}{$ban_list_exp.ban_length*60|date2word:true}{else}{"_PERMANENT"|lang}{/if}</td>
				</tr>
				<tr id="layer_{$ban_list_exp.bid}" style="display: none">
					<td class="table_list" colspan=10><div style="display: none">
							<input type="hidden" name="bid" value="{$ban_list_exp.bid}" />
							<table width="90%" class="table_details" cellspacing="0">
								<tr>
									<td class="table_details_head" width="20%"><b>{"_BANDETAILS"|lang}</b></td>
									<td align="right" class="table_details_head">
										<input name="details" type="image" src="images/page.png" border="0" title="{"_DETAILS"|lang}"/>
									</td>
								</tr>
								<tr><td width="15%"><b>{"_NICKNAME"|lang}:</b></td><td>{$ban_list_exp.player_nick}</td></tr>
								<tr><td><b>{"_STEAMID"|lang}:</b></td><td>{if $ban_list_exp.player_id <> ""}{$ban_list_exp.player_id}{else}{"_NOSTEAMID"|lang}{/if}</td></tr>
								<tr><td><b>{"_STEAMCOMID"|lang}:</b></td><td>
									{if $ban_list_exp.player_id <> ""}
										<a href="http://steamcommunity.com/profiles/{$ban_list_exp.player_comid}" target="_blank">{$ban_list_exp.player_comid}</a>
									{else}
										{"_NOTAVAILABLE"|lang};
									{/if}</td></tr>
								
								<tr><td><b>{"_IP"|lang}:</b></td><td>{if $smarty.session.ip_view=="yes"}{$ban_list_exp.player_ip}{else}<i>{"_HIDDEN"|lang}</i>{/if}</td></tr>
								<tr><td><b>{"_BANTYPE"|lang}:</b></td><td>{if $ban_list_exp.ban_type=="S"}{"_STEAMID"|lang}
									{elseif $ban_list_exp.ban_type=="SI"}{"_STEAMID&IP"|lang}
									{else}{"_NOTAVAILABLE"|lang}{/if}
								</td></tr>
								<tr><td><b>{"_REASON"|lang}:</b></td><td>{$ban_list_exp.ban_reason}</td></tr>
								<tr><td><b>{"_INVOKED"|lang}:</b></td><td>{$ban_list_exp.ban_created|date_format:"%d. %b %Y - %T"}</td></tr>
								<tr><td><b>{"_BANLENGHT"|lang}:</b></td><td>{if $ban_list_exp.ban_length==0}{"_PERMANENT"|lang}{else}{$ban_list_exp.ban_length} {"_MINS"|lang}{/if}</td></tr>
								<tr><td><b>{"_EXPIRES"|lang}:</b></td><td>
									{if $ban_list_exp.ban_length==0}<i>{"_NOTAPPLICABLE"|lang}</i>{else}{$ban_list_exp.ban_end|date_format:"%d. %b %Y - %T"}
										{if $ban_list_exp.ban_end < $smarty.now} ({"_ALREADYEXP"|lang}){/if}
									{/if}
								</td></tr>
								<tr><td><b>{"_BANBY"|lang}:</b></td><td>{$ban_list_exp.admin_nick}</td></tr>
								<tr><td><b>{"_BANON"|lang}:</b></td><td>{if $ban_list_exp.server_name == "website"}{"_WEB"|lang}{else}{$ban_list_exp.server_name}{/if}</td></tr>
								<tr><td><b>{"_TOTALEXPBANS"|lang}:</b></td><td>{$ban_list_exp.bancount}</td></tr>
							</table>
					</div></td>
				</tr></form>
			{/foreach}
		</table>
		{/if}
	</td></tr>
</table></fieldset>