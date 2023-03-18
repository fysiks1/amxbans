<td class="table_list" colspan=10>
		<table width="100%">
			<tr class="htable">
				<td class="fat">{"_FILEUPLOAD"|lang}</td>
			</tr>
			<tr><td colspan="2">
				<form name="demoupload" method="post" enctype="multipart/form-data">
					<table width="100%" class="table_details" border="1">
						<input type="hidden" name="bid" value="{$ban_detail.bid}" />
						<input type="hidden" name="site" value="{$site}" />
						<input type="hidden" name="details_x" value="1" />
						<tr>
							<td width="30%" class="vtop fat">{"_NAME"|lang}:</td>
							<td class="vtop"><input type="test" size="30" name="name" value="{if $smarty.session.loggedin=="true"}{$smarty.session.uname}" disabled{else}"{/if}/></td>
							{if $smarty.session.loggedin=="true"}<input type="hidden" name="name" value="{$smarty.session.uname}" />{/if}
						</tr>
						<tr>
							<td width="30%" class="vtop fat">{"_EMAIL"|lang}:</td>
							<td class="vtop"><input type="test" size="30" name="email" value="{if $smarty.session.loggedin=="true" && $smarty.session.email!=""}{$smarty.session.email}" disabled{else}"{/if}/></td>
							{if $smarty.session.loggedin=="true" && $smarty.session.email!=""}<input type="hidden" name="email" value="{$smarty.session.email}" />{/if}
						</tr>
						<tr>
							<td class="vtop fat">{"_FILE"|lang}:</td>
							<td class="vtop"><input class="input_file" type="file" size="30" name="filename"> ({$vars.file_type}, max. {$vars.max_file_size} MB)</td>
						</tr>
						<tr>
							<td class="vtop fat">{"_COMMENT"|lang}:</td>
							<td>
								{foreach from=$bbcodes item=bbcode}
									<a href="javascript:insertAtCaret('commentd', '{$bbcode.0} {$bbcode.1}');"><img border="0" src="images/icons/bbcode/{$bbcode.2}" title="{$bbcode.3}" /></a>
								{/foreach}
								<br />
									<textarea name="comment" id="commentd" cols="50" rows="3" wrap="soft"></textarea>
								<br />
								{foreach from=$smilies item=smilie}
									<a href="javascript:insertAtCaret('commentd', ' {$smilie.0} ');"><img border="0" src="images/icons/{$smilie.1}" title="{$smilie.2}" /></a>
								{/foreach}
							</td>
						</tr>
						{if $smarty.session.loggedin!=true}
						<tr> 
							<td class="vtop fat">{"_SCODE"|lang}</td> 
							<td>{"_SCODEENTER"|lang}<br />
								<img src="include/captcha.php" alt="{"_SCODE"|lang}" style="border: 1px #000000 solid;"><br />
								<input type='text' size="30" name='verify' id="verify_code">
							</td> 
						</tr>
						{/if}
					</table>
					<div class="_center">
						<input type="submit" class="button" name="add_demo" value="{"_UPLOAD"|lang}" />
					</div>
				</form>
			</td></tr>
		</table>
</td>