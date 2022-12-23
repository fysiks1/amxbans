<td class="table_list" colspan=10><div style="display: none">
	{if $activ_count>0}	
			<table width="90%" cellspacing="0">
				<form method="POST">
					<tr>
						<td class="htable" colspan="6"><span style="font-weight:bold;color:red">{"_ACTIVEBANS"|lang}  ({$activ_count})</span></td>
					</tr>
					<tr class="htable">
						<td class="fat" width="2%">{"_DATE"|lang}</td>
						<td class="fat" width="24%">{"_PLAYER"|lang}</td>
						<td class="fat" width="24%">{"_ADMIN"|lang}</td>
						<td class="fat" width="24%">{"_REASON"|lang}</td>
						<td class="fat" width="24%">{"_LENGHT"|lang}</td>
						<td>&nbsp;</td>
					</tr>
				</form>
				{foreach from=$ban_details_activ item=ban_details_activ}
					<tr style="cursor:pointer;" onClick="NewToggleLayer('layer_{$ban_details_activ.bid}');" class="list">
						<td align="center">{$ban_details_activ.ban_created|date_format:"%d.%m.%Y"}</td>
						<td align="center">{$ban_details_activ.player_nick}</td>
						<td align="center">{$ban_details_activ.admin_nick}</td>
						<td align="center">{$ban_details_activ.ban_reason}</td>
						<td align="center">{if $ban_details_activ.ban_length>0}{$ban_details_activ.ban_length} {"_MINS"|lang}{else}{"_PERMANENT"|lang}{/if}</td>
						<td>&nbsp;</td>
					</tr>
					<tr id="layer_{$ban_details_activ.bid}" style="display: none">
						<td class="table_list" colspan=10>
							<center>
								<form method="POST">
								<input type="hidden" name="site" value="{$site}" />
								<input type="hidden" name="bid" value="{$ban_details_activ.bid}" />
								<table width="90%" class="table_details" cellspacing="0">
									<tr class="htable">
										<td class="fat" width="20%"><b>{"_BANDETAILS"|lang}</b></td>
										<td align="right">
											<input name="details" type="image" src="images/page.png" border="0" title="{"_DETAILS"|lang}"/>
										</td>
									</tr>
									<tr><td><b>{"_IP"|lang}:</b></td><td>{if $smarty.session.ip_view=="yes"}{$ban_details_activ.player_ip}{else}<i>{"_HIDDEN"|lang}</i>{/if}</td></tr>
									<tr><td><b>{"_BANTYPE"|lang}:</b></td><td>{if $ban_details_activ.ban_type=="S"}{"_STEAMID"|lang}
										{elseif $ban_details_activ.ban_type=="SI"}{"_STEAMID&IP"|lang}
										{else}{"_NOTAVAILABLE"|lang}{/if}
									</td></tr>
									<tr><td><b>{"_REASON"|lang}:</b></td><td>{$ban_details_activ.ban_reason}</td></tr>
									<tr><td><b>{"_INVOKED"|lang}:</b></td><td>{$ban_details_activ.ban_created|date_format:"%d. %b %Y - %T"}</td></tr>
									<tr><td><b>{"_BANLENGHT"|lang}:</b></td><td>{if $ban_details_activ.ban_length==0}{"_PERMANENT"|lang}{else}{$ban_details_activ.ban_length} {"_MINS"|lang}{/if}</td></tr>
									<tr><td><b>{"_BANBY"|lang}:</b></td><td>{$ban_details_activ.admin_nick}</td></tr>
									<tr><td><b>{"_BANON"|lang}:</b></td><td>{if $ban_details_activ.server_name == "website"}{"_WEB"|lang}{else}{$ban_details_activ.server_name}{/if}</td></tr>
								</table>
								<br />
								</form>
							</center>
						</td>
					</tr>
				{/foreach}
			</table>
	{/if}	
	{if $exp_count>0}	
			<table width="90%" cellspacing="0">
				<form method="POST">
					<tr>
						<td colspan="6"><span style="font-weight:bold;color:green">{"_EXPIREDBANS"|lang}  ({$exp_count})</span></td>
					</tr>
					<tr class="htable">
						<td class="fat" width="2%">{"_DATE"|lang}</td>
						<td class="fat" width="24%">{"_PLAYER"|lang}</td>
						<td class="fat" width="24%">{"_ADMIN"|lang}</td>
						<td class="fat" width="24%">{"_REASON"|lang}</td>
						<td class="fat" width="24%">{"_LENGHT"|lang}</td>
						<td>&nbsp;</td>
					</tr>
				</form>
				{foreach from=$ban_details_exp item=ban_details_exp}
					<tr class="list"  style="cursor:pointer;" onClick="NewToggleLayer('layer_{$ban_details_exp.bid}');" >
						<td align="center">{$ban_details_exp.ban_created|date_format:"%d.%m.%Y"}</td>
						<td align="center">{$ban_details_exp.player_nick}</td>
						<td align="center">{$ban_details_exp.admin_nick}</td>
						<td align="center">{$ban_details_exp.ban_reason}</td>
						<td align="center">{if $ban_details_exp.ban_length>0}{$ban_details_exp.ban_length} {"_MINS"|lang}{else}{"_PERMANENT"|lang}{/if}</td>
						<td>&nbsp;</td>
					</tr>
					<tr id="layer_{$ban_details_exp.bid}" style="display: none">
						<td colspan=10>
							<div style="display: none">
								<form method="POST">
								<input type="hidden" name="site" value="{$site}" />
								<input type="hidden" name="bid" value="{$ban_details_exp.bid}" />
								<table width="90%" class="table_details" cellspacing="0">
									<tr class="htable">
										<td class="fat" width="20%">{"_BANDETAILS"|lang}</td>
										<td align="right">
											<input name="details" type="image" src="images/page.png" border="0" title="{"_DETAILS"|lang}"/>
										</td>
									</tr>
									<tr><td><b>{"_IP"|lang}:</b></td><td>{if $smarty.session.ip_view=="yes"}{$ban_details_exp.player_ip}{else}<i>{"_HIDDEN"|lang}</i>{/if}</td></tr>
									<tr><td><b>{"_BANTYPE"|lang}:</b></td><td>{if $ban_details_exp.ban_type=="S"}{"_STEAMID"|lang}
										{elseif $ban_details_exp.ban_type=="SI"}{"_STEAMID&IP"|lang}
										{else}{"_NOTAVAILABLE"|lang}{/if}
									</td></tr>
									<tr><td><b>{"_REASON"|lang}:</b></td><td>{$ban_details_exp.ban_reason}</td></tr>
									<tr><td><b>{"_INVOKED"|lang}:</b></td><td>{$ban_details_exp.ban_created|date_format:"%d. %b %Y - %T"}</td></tr>
									<tr><td><b>{"_BANLENGHT"|lang}:</b></td><td>{if $ban_details_exp.ban_length==0}{"_PERMANENT"|lang}{else}{$ban_details_exp.ban_length} {"_MINS"|lang}{/if}</td></tr>
									<tr><td><b>{"_BANBY"|lang}:</b></td><td>{$ban_details_exp.admin_nick}</td></tr>
									<tr><td><b>{"_BANON"|lang}:</b></td><td>{if $ban_details_exp.server_name == "website"}{"_WEB"|lang}{else}{$ban_details_exp.server_name}{/if}</td></tr>
								</table>
								<br />
								</form>
							</div>
						</td>
					</tr>
				{/foreach}
			</table>
	{/if}
</td>