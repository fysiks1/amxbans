<div>
	<div align="center" class="notice">{"_STEP5DESC"|lang}</div>
	<br />
	<fieldset>
		<legend>{"_ADMINSETTINGS"|lang}</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td>{"_USER"|lang}:</td>
				<td width="1%"><input type="text" name="adminuser" value="{if $admin.0 || $smarty.session.adminuser}{$admin.0|default:$smarty.session.adminuser}{else}admin{/if}" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td>{"_PASSWORD"|lang}:</td>
				<td width="1%"><input type="password" name="adminpass" value="{if $adminpass || $smarty.session.adminpass}{$adminpass|default:$smarty.session.adminpass}{/if}" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td>{"_PASSWORD2"|lang}:</td>
				<td width="1%"><input type="password" name="adminpass2" value="{if $adminpass || $smarty.session.adminpass2}{$adminpass|default:$smarty.session.adminpass}{/if}" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td>{"_EMAILADR"|lang}:</td>
				<td width="1%"><input type="text" name="adminemail" value="{if $admin.1 || $smarty.session.adminemail}{$admin.1|default:$smarty.session.adminemail}{else}admin@domain.com{/if}" size="20" /></td>
			</tr>
		</table>
	<br />
	{if $validate}
		{foreach from=$validate item=validate}
			<div class="error">{$validate|lang}</div>
		{/foreach}
	{/if}
	{if $msg}
		<div class="{if $msg=="_ADMINOK"}success{else}error{/if}">{$msg|lang}</div>
	{/if}
