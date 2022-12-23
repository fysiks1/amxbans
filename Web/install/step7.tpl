<div style="font-size:12px;">
	<div align="center" class="notice">{"_STEP7DESC"|lang}</div>
	<br />
	<table width="100%" cellspacing="10">
		<tr>
			<td width="50%" valign="top">
				<fieldset>
					<legend>{"_TABLECREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
							{foreach from=$tables item=tables}
								<tr>
									<td width="40%">{$tables.table}</td><td>{$tables.success|lang}</td>
								</tr>
							{/foreach}
					</table>
				</fieldset>
			</td>
			<td valign="top">
				<fieldset>
					<legend>{"_DEFAULTDATACREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
						{foreach from=$datas item=datas}
							<tr>
								<td width="40%">{$datas.data}</td><td>{$datas.success|lang}</td>
							</tr>
						{/foreach}
					</table>
				</fieldset>
				<br />
				<fieldset>
					<legend>{"_DEFAULTWEBSETTINGSCREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
						<tr>
							<td width="40%">{$websettings_create.data|lang}</td><td>{$websettings_create.success|lang}</td>
						</tr>
					</table>
				</fieldset>
				<br />
				<fieldset>
					<legend>{"_DEFAULTUSERMENUCREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
						<tr>
							<td width="40%">{$usermenu_create.data|lang}</td><td>{$usermenu_create.success|lang}</td>
						</tr>
					</table>
				</fieldset>
				<br />
				<fieldset>
					<legend>{"_DEFAULTMODULESCREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
						{foreach from=$modules item=modules}
						<tr>
							<td width="40%">{$modules.name}</td><td>{$modules.success|lang}</td>
						</tr>
						{/foreach}
					</table>
				</fieldset>
				<br />
				<fieldset>
					<legend>{"_WEBADMINCREATE"|lang}</legend>
					<table width="100%" cellpadding="1" style="font-size:10px;">
						{foreach from=$webadmin_create item=webadmin_create}
							<tr>
								<td width="40%">{$webadmin_create.data|lang}</td><td>{$webadmin_create.success|lang}</td>
							</tr>
						{/foreach}
					</table>
				</fieldset>
			</td>
		</tr>
	</table>
	{if $msg}
		<div class="{if $msg=="_FILESUCCESS"}success{else}error{/if}">{$msg|lang}</div>
	{/if}
	{if $msg!="_FILESUCCESS"}
	<br />
	<div align="center">
		{"_MANUALEDIT"|lang}<br />
		<textarea cols="70" rows="15">{$content}</textarea>
		<div class="notice">{"_SETUPENDDESC"|lang}</div>
	</div>
	{/if}