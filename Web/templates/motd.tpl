<html>
<head>
<title>AMXBans - {$title}</title>
<meta http-equiv="Content-Type" content="text/html; charset={"_ENCODING"|lang}" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<link rel="stylesheet" type="text/css" href="templates/{$design}/amxbans.css" />
</head>
<body>
	
	{if $ban_detail}
	<table align="center" border="1" width="99%" class="table_list" cellpadding="3">
		<tr class="table_head">
			<td colspan="2"><b>{"_YOUAREBANNED"|lang}</b></td>
		</tr>
		<tr><td width="15%"><b>{"_NICKNAME"|lang}:</b></td><td>{$ban_detail.player_nick}</td></tr>
		<tr><td><b>{"_STEAMID"|lang}:</b></td><td>{if $ban_detail.player_id <> ""}{$ban_detail.player_id}{else}{"_NOSTEAMID"|lang}{/if}</td></tr>
		<tr><td><b>{"_IP"|lang}:</b></td><td>{if $smarty.session.ip_view=="yes"}{$ban_detail.player_ip}{else}<i>{"_HIDDEN"|lang}</i>{/if}</td></tr>
		<tr><td><b>{"_BANTYPE"|lang}:</b></td><td>{if $ban_detail.ban_type=="S"}{"_STEAMID"|lang}
			{elseif $ban_detail.ban_type=="SI"}{"_STEAMID&IP"|lang}
			{else}{"_NOTAVAILABLE"|lang}{/if}
		</td></tr>
		<tr><td><b>{"_REASON"|lang}:</b></td><td>{$ban_detail.ban_reason}</td></tr>
		<tr><td><b>{"_INVOKED"|lang}:</b></td><td>{$ban_detail.ban_created|date_format:"%d. %b %Y - %T"}</td></tr>
		<tr><td><b>{"_BANLENGHT"|lang}:</b></td><td>{if $ban_detail.ban_length==0}{"_PERMANENT"|lang}{elseif $ban_detail.ban_length==-1}{"_UNBANNED"|lang}{else}{$ban_detail.ban_length*60|date2word:true} ({$ban_detail.ban_length} {"_MINS"|lang}){/if}</td></tr>
		<tr><td><b>{"_EXPIRES"|lang}:</b></td><td>
			{if $ban_detail.ban_length <= 0}<i>{"_NOTAPPLICABLE"|lang}</i>{else}{$ban_detail.ban_end|date_format:"%d. %b %Y - %T"}
				{if $ban_detail.ban_end < $smarty.now} ({"_ALREADYEXP"|lang}){else} <i>({$ban_detail.ban_end-$smarty.now|date2word} {"_REMAINING"|lang})</i>{/if}
			{/if}
		</td></tr>
		<tr><td><b>{"_BANBY"|lang}:</b></td><td>{if $show_admin==1}{$ban_detail.admin_nick}{if $ban_detail.nickname} <i>({$ban_detail.nickname})</i>{/if}{else}<i>{"_HIDDEN"|lang}</i>{/if}</td></tr>
		<tr><td><b>{"_BANON"|lang}:</b></td><td>{$ban_detail.server_name}</td></tr>
	</table>
	<br />
	{/if}
	{if $history==1}
	<table align="center" border="1" width="99%" class="table_list" cellpadding="3">
		<tr class="table_head"><td colspan="5">{"_EXPIREDBANS"|lang}{if $exp_count} ({$exp_count}){/if}</td></tr>
		{if $exp_count}
			<tr class="admin_head1">
				<td width="1%" nowrap><b>{"_DATE"|lang}</b></td>
				<td width="1%" nowrap><b>{"_BANLENGHT"|lang}</b></td>
				<td nowrap><b>{"_REASON"|lang}</b></td>
				{if $show_admin==1}<td width="1%" nowrap><b>{"_BANBY"|lang}</b></td>{/if}
			</tr>
			{foreach from=$exp_bans item=exp_bans}
				<tr>
					<td align="center" nowrap><b>{$exp_bans.ban_created|date_format:"%d.%m.%Y"}</b></td>
					<td align="center" nowrap>{if $exp_bans.ban_length==0}{"_PERMANENT"|lang}{elseif $exp_bans.ban_length==-1}{"_UNBANNED"|lang}{else} {$exp_bans.ban_length*60|date2word:true}{/if}</td>
					<td nowrap>{$exp_bans.ban_reason}</td>
					{if $show_admin==1}<td align="center" nowrap>{$exp_bans.admin_nick}</td>{/if}
				</tr>
			{/foreach}
		{else}
			<tr>
				<td>{"_NOEXPIREDBANS"|lang}</td>
			</tr>
		{/if}
	</table>
	{/if}
</body>
</html>