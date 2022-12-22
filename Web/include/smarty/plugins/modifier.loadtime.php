<?php

function smarty_modifier_loadtime($smarty) {
	global $page_starttime;
	
	$starttime=$page_starttime[0]+$page_starttime[1];
	$page_endtime=explode(" ",microtime());
	$endtime=$page_endtime[0]+$page_endtime[1];
	
	return round($endtime-$starttime,5);
}
?>