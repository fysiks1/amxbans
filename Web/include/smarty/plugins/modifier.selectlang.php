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
 * Name:     selectlanguage<br>
 * Purpose:  returns an selected language name.
 * @version  1.0
 * @param array
 * @param Smarty
 */
function smarty_modifier_selectlang($true,$type)
{
	global $config;
  // If a user selected a new language from a pulldown box on any page, process it here
  $newlang = $_REQUEST['newlang'];
  if (!empty($newlang)) {
	$_SESSION['lang'] = $newlang;
	#echo"<meta http-equiv=\"refresh\" content=\"0;url='http://".$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF']."'\">";
  }else{
	$newlang = $_SESSION['lang'];
  }

    switch ($type) {
        case 'session':
            return $newlang;

        case 'config':
            return $config->default_lang;

        default:
            return $session;
    }
}



?>
