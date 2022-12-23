<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:18px;">&nbsp;</th>
					<th>{"_NICKNAME"|lang}</th> 
					<th style="width:150px;">{"_STEAMID"|lang}</th>
					<th style="width:150px;">{"_ACCESS"|lang}</th>
					<th style="width:150px;">{"_ADMINSINCE"|lang}</th>
					<th style="width:150px;">{"_ADMINTO"|lang}</th>
				</tr> 
			</thead> 
			<tbody> 
				<!-- Start Loop -->
				{foreach from=$admins item=admins}
					<tr class="list"> 
						<td><a href="http://steamcommunity.com/profiles/{$admins.comid}" target="_blank"><img src="templates/{$design}_gfx/Steam.png" alt="{"_OPENSTEAMCOMSITE"|lang}"/></a>&nbsp;</td>
						<td>{$admins.nickname}</td> 
						<td>{$admins.steamid}</td> 
						<td>{$admins.access}</td> 
						<td>{$admins.created|date_format:"%d. %b %Y - %T"}</td> 
						<td><em>
							{if $admins.expired=="0"}
								<i>{"_UNLIMITED"|lang}</i>
							{else}
								{$admins.expired|date_format:"%d. %b %Y - %T"}
							{/if}
						</em></td> 
					</tr> 
				{/foreach}
				<!-- Stop Loop -->
			</tbody> 
		</table> 
	</div>

	<div class="post _center">
		<form method="post" action="">
			<input type="button" class="button" name="showflags" value="{"_INFO_ACCESS"|lang}" onclick="$('#info_access').slideToggle('slow');"/><br/><br/>
		</form>
		<!--<a href="javascript:void(0);" class="button" onclick="ToggleLayer('info_access');">{"_INFO_ACCESS"|lang}</a>-->
	</div>

	<div id="info_access" class="post" style="display:none;">
		<table frame="box" rules="groups"> 
			<thead> 
				<tr> 
					<th>{"_ACCESSPERMS"|lang}</th> 
					<th style="width:350px;">{"_ACCESSFLAGS"|lang}</th>
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
					<td>
						{"_ACCESS_FLAGS"|lang}
					</td> 
					<td class="vtop">
						{"_FLAG_FLAGS"|lang}
					</td> 
				</tr>
			</tbody> 
		</table> 
	</div>
	<div class="clearer">&nbsp;</div>
</div>