<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty language modifer plugin
 *
 * Type:     modifer<br>
 * Name:     getlanguage<br>
 * Purpose:  returns an language name.
 * @version  1.0
 * @param array
 * @param Smarty
 */
function smarty_modifier_getlanguage()
{
	global $config;
	$langs = array();
	if ($handle = opendir($config->langfilesdir)) {
		if ($handle) {
			#if( $file != "." && $file != "..") {
			while ($file = readdir($handle)) {
				if ($file != "." && $file != ".."  && substr($file,0,4) == "lang") {
					$show_lang = explode(".", $file);
					if(!in_array($show_lang[1],$langs)) $langs[] = $show_lang[1];
				}
			}
			#}
		}
	}
    sort($langs);
    return $langs;
}

?>
