<div>
	<div align="center" class="notice">{"_STEP6DESC"|lang}<br />{"_STEP6DESC2"|lang}</div>
	<br />
	<fieldset>
		<legend>{"_ROOTDIRS"|lang}</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%">{"_DIRROOT"|lang}:</td>
				<td>{$smarty.session.path_root}</td>
			</tr>
			<tr class="settings_line">
				<td>{"_DIRDOCUMENT"|lang}:</td>
				<td>{$smarty.session.document_root}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend>{"_DBSETTINGS"|lang}</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%">{"_HOST"|lang}:</td>
				<td>{$smarty.session.dbhost}</td>
			</tr>
			<tr class="settings_line">
				<td>{"_USER"|lang}:</td>
				<td>{$smarty.session.dbuser}</td>
			</tr>
			<tr class="settings_line">
				<td>{"_DATABASE"|lang}:</td>
				<td>{$smarty.session.dbdb}</td>
			</tr>
			<tr class="settings_line">
				<td>{"_TBLPREFIX"|lang}:</td>
				<td>{$smarty.session.dbprefix}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend>{"_ADMINSETTINGS"|lang}</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%">{"_USER"|lang}:</td>
				<td>{$smarty.session.adminuser}</td>
			</tr>
			<tr class="settings_line">
				<td>{"_EMAILADR"|lang}:</td>
				<td>{$smarty.session.adminemail}</td>
			</tr>
		</table>
	</fieldset>