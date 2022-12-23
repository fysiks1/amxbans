{assign var="lang" value=$true|getlanguage}
{assign var="select_lang" value=$true|selectlang:"session"}
{assign var="default_lang" value=$true|selectlang:"config"}
<html>
<head>
	<title>AMXBans - {"_INSTALLATION"|lang} - {"_STEP"|lang} {$sitenr}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={"_ENCODING"|lang}" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="install/setup.css" />
	<script type="text/javascript" language="javascript" src="install/func.js"></script>
</head>
<body>
<div class="center-wrapper">
	<div id="header">
		<div id="site-title" style="text-align: center;">
			<a href="http://www.amxbans.de" target="_blank"><img src="templates/_gfx/amxbans.png" title="AMXBans" alt="AMXBans" border="0" /></a>
		</div>
	</div>
	<div id="site-title" style="text-align: left;">
		<form method="POST" style="display:inline;">
			<input type="hidden" name="site" value="{$sitenr}" />
			<select name="newlang" onchange="this.form.submit()">
				{foreach from=$lang item="lang"}
					<option value="{$lang|escape}" {if empty($select_lang) && $default_lang == $lang}selected{/if}{if $select_lang == $lang}selected{/if}>{$lang|escape}</option>
				{/foreach}
			</select>
		</form>
	</div>
	<fieldset>
		<legend><span class='title'>AMXBans v{$v_web}: {"_INSTALLATION"|lang}</span></legend>
		<table width="100%" cellpadding="0" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td rowspan="2" width="40%" valign="top">
					<div align="left" class="block">
						<span class="navi">1. {"_STEP"|lang}:</span> {if $sitenr==1}<span class="navi_select">{/if}{"_STEP1"|lang}</span><br /><br />
						<span class="navi">2. {"_STEP"|lang}:</span> {if $sitenr==2}<span class="navi_select">{/if}{"_STEP2"|lang}</span><br /><br />
						<span class="navi">3. {"_STEP"|lang}:</span> {if $sitenr==3}<span class="navi_select">{/if}{"_STEP3"|lang}</span><br /><br />
						<span class="navi">4. {"_STEP"|lang}:</span> {if $sitenr==4}<span class="navi_select">{/if}{"_STEP4"|lang}</span><br /><br />
						<span class="navi">5. {"_STEP"|lang}:</span> {if $sitenr==5}<span class="navi_select">{/if}{"_STEP5"|lang}</span><br /><br />
						<span class="navi">6. {"_STEP"|lang}:</span> {if $sitenr==6}<span class="navi_select">{/if}{"_STEP6"|lang}</span><br /><br />
						<span class="navi">7. {"_STEP"|lang}:</span> {if $sitenr==7}<span class="navi_select">{/if}{"_STEP7"|lang}</span>
					</div>
				</td>
				<td valign="top" height="400">
					<form method="POST" name="form" style="display:inline;">
						{include file="step$sitenr.tpl"}
				</td>
			</tr>
		</table>
	<div align="right">
		<input type="hidden" name="site" value="{$sitenr}" />
			{if $sitenr!=1 && $sitenr!=7}<input type="submit" class="button" name="back" value="{"_BACK"|lang}" />{/if}
			{if $checkvalue}<input type="submit" class="button" name="check{$sitenr}" value="{$checkvalue|lang}" />{/if}
			{if $sitenr<6}<input type="submit" class="button" name="next" value="{"_NEXT"|lang}" {if !$next || $sitenr==1}disabled{/if}/>{/if}
		</form>
	</div>
	</fieldset>
</div>