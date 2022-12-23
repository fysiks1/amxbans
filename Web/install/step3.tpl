<div>
	<div align="center" class="notice">{"_STEP3DESC"|lang}<br />{"_STEP3DESC2"|lang}</div>
	<br />
	<fieldset>
		<legend>{"_ROOTDIRS"|lang}</legend>
			<table width="100%" cellpadding="5">
				<tr class="settings_line">
					<td>{"_DIRROOT"|lang}:</td>
					<td width="1%"><input type="text" name="path_root" value="{$dirs.path_root}" size="50" /></td>
				</tr>
				<tr class="settings_line">
					<td>{"_DIRDOCUMENT"|lang}:</td>
					<td><input type="text" name="document_root" value="{$dirs.document_root}" size="50" /></td>
				</tr>
			</table>
	</fieldset>
<br />
	<fieldset>
		<legend>{"_DIRCHECK"|lang}</legend>
			<table width="100%" cellpadding="5">
				<tr>
					<td>include/</td>
					<td width="1%"><img src="images/{if $dirs.include == true}success.gif{else}cross.png{/if}" /></td>
				</tr>
				<tr>
					<td>temp/</td>
					<td><img src="images/{if $dirs.temp == true}success.gif{else}cross.png{/if}" /></td>
				</tr>
				<tr>
					<td>include/smarty/templates_c</td>
					<td valign="center"><img src="images/{if $dirs.templates_c == true}success.gif{else}cross.png{/if}" /></td>
				</tr>
				<tr>
					<td>include/files/</td>
					<td><img src="images/{if $dirs.files == true}success.gif{else}cross.png{/if}" /></td>
				</tr>
				<tr>
					<td>include/backup/</td>
					<td><img src="images/{if $dirs.backup == true}success.gif{else}cross.png{/if}" /></td>
				</tr>
				<tr>
					<td>/</td>
					<td><img src="images/{if $dirs.setupphp == true}success.gif{else}warning.gif{/if}" /></td>
				</tr>
			</table>
	</fieldset>
	<br />
	<div class="notice">
		<img src="images/success.gif" /> - {"_OK"|lang}<br />
		<img src="images/warning.gif" /> - {"_SETNOTRECOMMENDED"|lang}<br />
		<img src="images/cross.png" /> - {"_NOTWRITABLE"|lang}
	</div>
	{if $dirs.setupphp == false}
		<div class="welcome"><img src="images/warning.gif" /> {"_SETUPNOTDELETABLE"|lang}</div>
	{/if}