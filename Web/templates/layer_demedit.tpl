	<td class="table_list" colspan=10>
		<div style="display: none">
			<table width="90%">
				<tr class="htable">
					<td class="fat">{"_ENTRYEDIT"|lang}</td>
				</tr>
				<tr><td colspan="2">
				<form method="post">
					<table width="100%" border="1">
							<input type="hidden" name="bid" value="{$ban_detail.bid}" />
							<input type="hidden" name="site" value="{$site}" />
							<input type="hidden" name="did" value="{$demos.id}" />
							<input type="hidden" name="details_x" value="1" />
							<tr>
								<td width="30%" class="vtop fat">{"_NAME"|lang}:</td>
								<td class="vtop"><input type="test" size="30" name="name" value="{$demos.name}" /></td>
								
							</tr>
							<tr>
								<td width="30%" class="vtop fat">{"_EMAIL"|lang}:</td>
								<td class="vtop"><input type="test" size="30" name="email" value={$demos.email} /></td>
							</tr>
							
							<tr>
								<td class="vtop fat">{"_COMMENT"|lang}:</td>
								<td>
									{foreach from=$bbcodes item=bbcodes}
									<a href="javascript:insertAtCaret('commentde{$demos.id}', '{$bbcodes.0} {$bbcodes.1}');"><img border="0" src="images/icons/bbcode/{$bbcodes.2}" title="{$bbcodes.3}" /></a>
									{/foreach}
								<br />
									<textarea name="comment" id="commentde{$demos.id}" cols="50" rows="3" wrap="soft">{$demos.comment}</textarea>
									<br />
									{foreach from=$smilies item=smilies}
									<a href="javascript:insertAtCaret('commentde{$demos.id}', ' {$smilies.0} ');"><img border="0" src="images/icons/{$smilies.1}" title="{$smilies.2}" /></a>
									{/foreach}
								</td>
							</tr>
						</table>
						<div class="_center">
							<input type="submit" class="button" name="edit_demo" onclick="return confirm('{"_SAVEEDIT"|lang}');" value="{"_SAVE"|lang}" />
						</div>
					</form>
				</td></tr>
			</table>
		</div>
	</td>