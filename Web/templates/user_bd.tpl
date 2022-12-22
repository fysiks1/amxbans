<div class="main">

	<div class="post">

		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr>

					<th style="width:150px;">{"_BANDETAILS"|lang}</th> 

					<th class="_right">
						{if $ban_detail.bid != "62175"}
						<form method="POST" style="display:inline;">

						{if $smarty.session.bans_edit=="yes" || ($smarty.session.bans_edit=="own" && $smarty.session.uname == $ban_detail.username)}

							<img src="templates/{$design}_gfx/page_edit.png" border="0" onclick="NewToggleLayer('banedit_{$ban_detail.bid}')" title="{"_TIP_EDIT"|lang}" style="cursor:pointer;border:0;" />

						{/if}

						{if $smarty.session.bans_delete=="yes" || ($smarty.session.bans_delete=="own" && $smarty.session.uname == $ban_detail.username)}

							<input name="del_ban" type="image" src="templates/{$design}_gfx/page_delete.png" onclick="return confirm('{"_DELBAN"|lang}{"_DATALOSS"|lang}');" border="0" title="{"_TIP_DEL"|lang}" />

							<input type="hidden" name="site" value="{$site}" />

							<input type="hidden" name="bid" value="{$ban_detail.bid}" />

							<input type="hidden" name="details_x" value="1" />

						{/if}

						</form>
						{/if}
					</th> 

				</tr>

			</thead> 

			<tbody> 

				<tr>

					<td class="fat">{"_NICKNAME"|lang}</td><td>{$ban_detail.player_nick}</td>

				</tr>

				<tr>

					<td class="fat">{"_STEAMID"|lang}</td><td>{$ban_detail.player_id}</td>

				</tr>

				<tr>

					<td class="fat">{"_STEAMCOMID"|lang}</td>

					<td>

					{if $ban_detail.player_id <> ""}

						<a target="_blank" href="http://steamcommunity.com/profiles/{$ban_detail.player_comid}">{$ban_detail.player_comid}</a>

					{else}

						{"_NOTAVAILABLE"|lang}

					{/if}

				</tr>

				<tr>

					<td class="fat">{"_IP"|lang}</td>

					<td>

					{if $smarty.session.ip_view=="yes"}

						{if $ban_detail.player_ip}

							{$ban_detail.player_ip}

						{else}

							<i>{"_NOTAVAILABLE"|lang}</i>

						{/if}

					{else}

						<span style='font-style:italic;font-weight:bold'>{"_HIDDEN"|lang}</span>

					{/if}

					</td> 

				</tr>

				<tr>

					<td class="fat">{"_BANTYPE"|lang}</td>

					<td>

						{if $ban_detail.ban_type=="S"}

							{"_STEAMID"|lang}

						{elseif $ban_detail.ban_type=="SI"}

							{"_STEAMID&IP"|lang}

						{else}

							{"_NOTAVAILABLE"|lang}

						{/if}

					</td>

				</tr>

				<tr>

					<td class="fat">{"_REASON"|lang}</td><td>{$ban_detail.ban_reason}</td>

				</tr>

				<tr>

					<td class="fat">{"_INVOKED"|lang}</td><td>{$ban_detail.ban_created|date_format:"%d. %b %Y - %T"}</td>

				</tr>

				<tr>

					<td class="fat">{"_BANLENGHT"|lang}</td>

					<td>

						{if $ban_detail.ban_length==0}

							{"_PERMANENT"|lang}

						{elseif $ban_detail.ban_length==-1}

							{"_UNBANNED"|lang}

						{else}

							{$ban_detail.ban_length*60|date2word:true} ({$ban_detail.ban_length} {"_MINS"|lang})

						{/if}

					</td>

				</tr>

				<tr>

					<td class="fat">{"_EXPIRES"|lang}</td>

					<td>

						{if $ban_detail.ban_length <= 0}

							<i>{"_NOTAPPLICABLE"|lang}</i>

						{else}

							{$ban_detail.ban_end|date_format:"%d. %b %Y - %T"}

							{if $ban_detail.ban_end < $smarty.now}

								({"_ALREADYEXP"|lang})

							{else}

								<i>({$ban_detail.ban_end-$smarty.now|date2word} {"_REMAINING"|lang})</i>

							{/if}

						{/if}

					</td>

				</tr>

				<tr>

					<td class="fat">{"_BANBY"|lang}</td><td>{$ban_detail.admin_nick}{if $ban_detail.nickname} <i>({$ban_detail.nickname})</i>{/if}</td>

				</tr>

				<tr>

					<td class="fat">{"_ADMINID"|lang}</td>

					<td>

					{if $smarty.session.ip_view=="yes"}

						{if $ban_detail.admin_id}

							{$ban_detail.admin_id}

						{else}

							<i>{"_NOTAVAILABLE"|lang}</i>

						{/if}

					{else}

						<span style='font-style:italic;font-weight:bold'>{"_HIDDEN"|lang}</span>

					{/if}

					</td> 

				</tr>

				<tr>

					<td class="fat">{"_BANON"|lang}</td><td>{if $ban_detail.server_name == "website"}{"_WEB"|lang}{else}{$ban_detail.server_name}{/if}</td>

				</tr>

				<tr>

					<td class="fat">{"_TRACKBACK"|lang}</td><td><a href="http://{$smarty.server.HTTP_HOST}{$smarty.server.PHP_SELF}?bid={$ban_detail.bid}">http://{$smarty.server.HTTP_HOST}{$smarty.server.PHP_SELF}?bid={$ban_detail.bid}</a></td>

				</tr>

				<tr id="banedit_{$ban_detail.bid}" style="display:none;">

					{include file="layer_banedit.tpl"}

				</tr>

				{if $banedit_error!=""}<br /><div class="_center"><span class="error">{"_ERROR"|lang}: {foreach from=$banedit_error item=banedit_error}{$banedit_error|lang}{/foreach}</span></div><br />{/if}

			</tbody> 

		</table> 

		<div class="clearer">&nbsp;</div>

	</div>



	{if $activ_count>0 || $exp_count>0}

	<div class="post">

		<div class="clearer">&nbsp;</div>

		<table width="90%" cellspacing="0">

			<tr class="htable" style="cursor:pointer;" onClick="NewToggleLayer('layer_banhistory');" class="list">

				<td class="table_details_head" colspan="3"><b>{"_BANHISTORY"|lang} ({$activ_count+$exp_count})</b></td>

			</tr>

			<tr id="layer_banhistory" style="display: none">

				{include file="layer_banhistory.tpl"}

			</tr>

		</table>

	</div>

	{/if}

	

{if  $vars.use_demo == 1}

		{if $upload_error!=""}<div class="_center"><span class="error">{"_ERROR"|lang}: {foreach from=$upload_error item=upload_error}{$upload_error|lang}{/foreach}</span></div><br />{/if}

		{if $msg_demo}<div class="_center"><span class="success">{$msg_demo|lang}</span></div><br />{/if}

	<div class="spacer">&nbsp;</div>

	<div class="post">

		<table frame="box" rules="groups" summary=""> 

			<thead> 

				<tr>

					<th colspan="8">{"_BL_FILES"|lang}</th> 

				</tr>

				<tr>

					<th style="width:130px;">{"_DATE"|lang}</th> 

					<th style="width:100px;">{"_FILE"|lang}</th> 

					<th style="width:50px;">{"_SIZE"|lang}</th> 

					<th>{"_COMMENT"|lang}</th> 

					<th style="width:100px;">{"_BY"|lang}</th> 

					<th style="width:150px;">{"_IP"|lang}</th> 

					<th style="width:20px;">{"_DOWNLOADS"|lang}</th> 

					<th style="width:80px;">&nbsp;</th> 

				</tr>

			</thead> 

			<tbody> 

				{foreach from=$demos item=demos}

					<form method="post">

						<input type="hidden" name="bid" value="{$ban_detail.bid}" />

						<input type="hidden" name="site" value="{$site}" />

						<input type="hidden" name="did" value="{$demos.id}" />

						<input type="hidden" name="details_x" value="1" />

						<tr>

							<td>{$demos.upload_time|date_format:"%d. %b %Y - %T"}</td> 

							<td>{$demos.demo_real}</td> 

							<td>{$demos.file_size|file_size}</td> 

							<td>{if $demos.comment}{$demos.comment|bbcode2html}{else}{"_NOCOMMENT"|lang}{/if}</td> 

							<td>{$demos.name}</td> 

							<td>{if $smarty.session.ip_view=="yes"}{$demos.addr}{/if}</td> 

							<td class="_center">{$demos.down_count}</td> 

							<td class="_right">

									<form method="POST" style="display:inline;">

										<a href="mailto:{$demos.email}"><img src="images/email_go.png" border="0" title="{"_TIP_SENDMAIL"|lang}" /></a>

										<input name="down_demo" type="image" src="images/disk.png" border="0" title="{"_TIP_DOWNLOAD"|lang}" />

										{if $smarty.session.bans_edit=="yes" || ($smarty.session.bans_edit=="own" && $smarty.session.uname == $demos.name)}

											<img src="images/page_edit.png" border="0" onClick="NewToggleLayer('demedit_{$demos.id}');" title="{"_TIP_EDIT"|lang}" style="cursor:pointer;"/>

										{/if}

										{if $smarty.session.bans_delete=="yes" || ($smarty.session.bans_delete=="own" && $smarty.session.uname == $demos.name)}

											<input name="del_demo" type="image" src="templates/{$design}_gfx/page_delete.png" border="0" onclick="return confirm('{"_DELDEMO"|lang}{"_DATALOSS"|lang}');" title="{"_TIP_DEL"|lang}" />

										{/if}

										<input type="hidden" name="site" value="{$site}" />

										<input type="hidden" name="bid" value="{$ban_detail.bid}" />

										<input type="hidden" name="details_x" value="1" />

									</form>

							</td> 

						</tr>

						<tr id="demedit_{$demos.id}" style="display: none">

							{include file="layer_demedit.tpl"}

						</tr>

					</form>

				{foreachelse}

					<td class="_center" colspan="8">{"_NOFILES"|lang}</td> 

				{/foreach}

			</tbody> 

		</table> 

		<div class="clearer">&nbsp;</div>

	</div>

	{if $vars.comment_all=="1" || $smarty.session.loggedin == "true"}

		<div class="post _center">

			<form method="post" action="">

				<input type="button" class="button" name="newfile" value="{"_NEWFILE"|lang}" onclick="$('#add_file').slideToggle('slow');"/><br/><br/>

			</form>

		</div>



		<div id="add_file" class="post" style="display:none;">

			{include file="layer_demadd.tpl"}

		</div>

	{/if}

{/if}



	{if  $vars.use_comment == 1}

		{if $comment_error!=""}<div class="_center"><span class="error">{"_ERROR"|lang}: {foreach from=$comment_error item=comment_error}{$comment_error|lang}{/foreach}</span></div><br />{/if}

		{if $msg_comment}<div class="_center"><span class="success">{$msg_comment|lang}</span></div><br />{/if}

		<div class="spacer">&nbsp;</div>

	<div class="post">

		<table frame="box" rules="groups">

			<thead>

				<tr>

					<th colspan="5">{"_BL_COMMENTS"|lang}</th> 

				</tr>

				<tr>

					<th style="width:130px;">{"_DATE"|lang}</th> 

					<th>{"_COMMENT"|lang}</th> 

					<th style="width:100px;">{"_BY"|lang}</th> 

					<th style="width:150px;">{"_IP"|lang}</th> 

					<th style="width:80px;">&nbsp;</th> 

				</tr>

			</thead>

		</table>

		{foreach from=$comments item=comments}

			<form method="POST">

				<input type="hidden" name="bid" value="{$ban_detail.bid}" />

				<input type="hidden" name="site" value="{$site}" />

				<input type="hidden" name="cid" value="{$comments.id}" />

				<input type="hidden" name="details_x" value="1" />

					<table frame="box" rules="groups" summary=""> 

						<tbody> 

							<!-- Comment List -->

							<tr> 

								<td style="width:130px;">{$comments.date|date_format:"%d. %b %Y - %T"}</td> 

								<td>{$comments.comment|bbcode2html}</td> 

								<td style="width:100px;">{$comments.name}</td> 

								<td style="width:150px;">{if $smarty.session.ip_view=="yes"}{$comments.addr}{else}<span style='font-style:italic;font-weight:bold'>{"_HIDDEN"|lang}</span>{/if}</td> 

								<td class="_right" style="width:80px;">

									{if $smarty.session.bans_edit=="yes"}

										<img src="images/page_edit.png" title="{"_EDIT"|lang}" border="0" style="cursor:pointer;" onClick="NewToggleLayer('comedit_{$comments.id}');" />

										<input name="del_comment" type="image" src="templates/{$design}_gfx/page_delete.png" border="0" onclick="return confirm('{"_DELCOMMENT"|lang}{"_DATALOSS"|lang}');" title="{"_DELETE"|lang}" />

									{/if}

								</td>

							<!-- Comment List -->

			</form>

		{foreachelse}

								<div class="_center">{"_NOCOMMENTS"|lang}</div> 

							</tr>

		{/foreach}

						</tbody> 

					</table> 

				<div class="clearer">&nbsp;</div>

	</div>

		{if $vars.comment_all=="1" || $smarty.session.loggedin == "true"}

			<div class="post _center">

				<form method="post" action="">

					<input type="button" class="button" name="newcomment" value="{"_NEWCOMMENT"|lang}" onclick="$('#add_comment').slideToggle('slow');"/><br/><br/>

				</form>

			</div>

			<div id="add_comment" class="post" style="display:none;">

				<tr id="comadd_{$ban_detail.bid}" {if $comment_layer!="1"}style="display: none"{/if}>

					{include file="layer_comadd.tpl"}

				</tr>

			</div>

			<tr id="comedit_{$comments.id}" style="display: none">

				{include file="layer_comedit.tpl"}

			</tr>

		{/if}

{/if}

	<div class="clearer">&nbsp;</div>

</div>