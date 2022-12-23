<?php
/*

modifier file_size($size, $praefix=false, $short=true) 
   @param   integer   $size 
   @param   bool       $praefix 
   @param   bool       $short 
   @return   float       $size

*/
function smarty_modifier_file_size($smarty)
{
	
	$format="%.2f MB";
	return sprintf($format, ((floor($smarty/(1024*1024)*100))/100) );
	return $value;
}
?>