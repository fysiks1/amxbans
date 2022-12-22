<?php
/**
 * Smarty plugin
 
 */
function smarty_modifier_strinstr($source, $splitwith, $search, $return)
{
	$array=split($splitwith,$source);
	if( in_array($search,$array)) {
		return $return;
		exit;
	}
	return "";
}


?>
