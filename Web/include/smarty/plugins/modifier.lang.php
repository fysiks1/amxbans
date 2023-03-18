<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty language modifier plugin
 *
 * Type:     modifier<br>
 * Name:     language<br>
 * Purpose:  Show player country info
 * @param string
 * @return string
 */

function smarty_modifier_lang($lang) {
	//langkeys must start with "_", if not return unformated
	//added for beta6
	
	if( is_array($lang) )
	{
		$retVal = array();
		foreach( $lang as $langKey )
		{
			$retVal[] = smarty_modifier_lang($langKey);
		}
		return $retVal;
	}
	
	
	if(substr($lang,0,1)!="_") return $lang;
	
	global $config;
	global $langkeys;
	
	$lang_files_dir=$config->langfilesdir;
	$language = $_SESSION['lang'];
	
	//load lang keys to array if language changed
	if(!isset($langkeys["current_language"]) || $langkeys["current_language"]!=$language) {
		//get all current langfiles
		$all_lang_files=array();
		chdir($lang_files_dir);
		if ($handle = opendir('.')) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$lang_files=explode(".",$file);
					if($lang_files[1]==$language) { 
						$all_lang_files[]=$lang_files_dir.$file;
					}
				}
			}
			closedir($handle);
		}
		sort($all_lang_files);
	
		$langkeys=array(); 							//delete array
		$langkeys["current_language"]=$language;	//set language to current array
		
			array_walk($all_lang_files,'load_keys');	//load keys
		
	}
	//get translation from array
	$ret=$langkeys[$lang];
	
	
	if ($ret=="") {
		$ret="_KEY:".$lang; //if not found set default
	}
	return $ret;
}
function load_keys($item,$key) {
	global $langkeys;
	$lp = fopen($item,"r");
	$temp = fread($lp, filesize($item));
	fclose($lp); 
	if ($lp)
	{
		$s_lang = explode("\n",$temp);
		$int=sizeof($s_lang); 
		for ($i=0;$i<$int;$i++) {
			$s_lang[$i] = str_replace ("\n","",$s_lang[$i]);
			$test = explode("\"",$s_lang[$i]);
			if( isset($test[0]) && $test[0] == "define(" )
			{
				$langkeys[$test[1]]=$test[3];
			}
		}
	}
	@setlocale(LC_ALL, $langkeys["_LOCALE"]);
}
?>
