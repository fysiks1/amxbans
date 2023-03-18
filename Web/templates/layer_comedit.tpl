<td colspan=10>
	<div id="comedit_{$comment.id}" style="display: none">
		<table width="90%" class="table_details">
			<tr class="htable">
				<td><nobr><b>{"_EDITCOMMENT"|lang}</b></nobr></td>
			</tr>
			<tr><td colspan="2">
					<table width="100%" class="table_details" border="1">
						<form method="post">
						<input type="hidden" name="bid" value="{$ban_detail.bid}" />
						<input type="hidden" name="site" value="{$site}" />
						<input type="hidden" name="cid" value="{$comment.id}" />
						<input type="hidden" name="details_x" value="1" />
						<tr>
							<td align="right" width="30%"><i><b>{"_NAME"|lang}:</b></i></td>
							<td><input type="test" size="30" name="name" value="{$comment.name}" /></td>
						</tr>
						<tr>
							<td align="right" width="30%"><i><b>{"_EMAIL"|lang}:</b></i></td>
							<td><input type="test" size="30" name="email" value="{$comment.email}" /></td>
						</tr>
						<tr>
							<td align="right"><i><b>{"_COMMENT"|lang}:</b></i></td>
							<td>
								{foreach from=$bbcodes item=bbcode}
								<a href="javascript:insertAtCaret('commentce{$comment.id}', '{$bbcode.0} {$bbcode.1}');"><img border="0" src="images/icons/bbcode/{$bbcode.2}" title="{$bbcode.3}" /></a>
								{/foreach}
								<br />
								<textarea name="comment" id="commentce{$comment.id}" cols="50" rows="3" wrap="soft">{$comment.comment}</textarea>
								<br />
								{foreach from=$smilies item=smilie}
								<a href="javascript:insertAtCaret('commentce{$comment.id}', ' {$smilie.0} ');"><img border="0" src="images/icons/{$smilie.1}" title="{$smilie.2}" /></a>
								{/foreach}
							</td>
						</tr>
						<tr>
							<td class="table_details" align="center" colspan="2">
								<input type="submit" name="edit_comment" onclick="return confirm('{"_SAVEEDIT"|lang}');" value="{"_SAVE"|lang}" />
							</td>
						</tr>
						</form>
					</table>
			</td></tr>
		</table>
	</div>
</td>