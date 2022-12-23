<table width="50%" border="1" cellpadding="2">
	<tr class="table_head">
		<td>&nbsp;</td>
	</tr>
	<tr class="table_list">
		<td>
			<form name="loginform" action="login.php" method="post">
				<fieldset><legend><span class='title'>{"_LOGIN"|lang}</span></legend>
			<table width='20%'>
				<tr><td class="enter">{"_USERNAME"|lang}:</td> <td class='enter'><input type="text" name="user" /></td><td><input type='checkbox' checked="checked" name='remember'></input> {"_REMEMBERME"|lang}</td></tr>
				<tr><td class="enter">{"_PASSWORD"|lang}:</td> <td class='enter'><input type="password" name="pass" /></td><td><button type="submit" name="action" id="action2" value="Login">{"_LOGIN"|lang}</button></td></tr>
				{if $msg}<span class='errored'>{$msg|lang}</span><br />{/if}
				{if $try}<span class='errored'>{"_LOGINTRY"|lang} {$try}/3</span><br />{/if}
				{if $block_left}<span class='errored'>{$block_left|date2word:true} {"_REMAINING"|lang}</span><br />{/if}
			</table>
				</fieldset>
			</form>
		</td>
	</tr>
</table>