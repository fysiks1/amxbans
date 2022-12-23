<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

 /**
 * Smarty date2word modifier plugin
 *
 * Input:<br>
 *         - string: input time difference as timestamp
 * @param string
 * @uses smarty_modifier_lang()
 */
 
function smarty_modifier_date2word($dif,$short=false)
{
    if($dif) {
		$s = "";
        $years=intval($dif/(60*60*24*365));
		 $dif=$dif-($years*(60*60*24*365));
		if($years) {
			$s.= $years."&nbsp;".smarty_modifier_lang("_YEAR".(($years>1)?"S":""))."&nbsp;";
		} 
		if($years && $short) return $s;
		
		$months=intval($dif/(60*60*24*30));
		 $dif=$dif-($months*(60*60*24*30));
		if($months) {
			$s.= $months."&nbsp;".smarty_modifier_lang("_MONTH".(($months>1)?"S":""))."&nbsp;";
		}
		if($months && $short) return $s;
		
		$weeks=intval($dif/(60*60*24*7));
		 $dif=$dif-($weeks*(60*60*24*7));
		
		if($weeks) {
			$s.= $weeks."&nbsp;".smarty_modifier_lang("_WEEK".(($weeks>1)?"S":""))."&nbsp;";
		}
		
		if($weeks && $short) return $s;
		
		$days=intval($dif/(60*60*24));
		 $dif=$dif-($days*(60*60*24));
		if($days) {
			$s.= $days."&nbsp;".smarty_modifier_lang("_DAY".(($days>1)?"S":""))."&nbsp;";
		}
		if($days && $short) return $s;
		
		$hours=intval($dif/(60*60));
		 $dif=$dif-($hours*(60*60));
		if($hours) {
			$s.= $hours."&nbsp;".smarty_modifier_lang("_HOUR".(($hours>1)?"S":""))."&nbsp;";
		}
		if($hours && $short) return $s;
		
		  $minutes=intval($dif/(60));
		$seconds=$dif-($minutes*60);
		if($minutes) {
			$s.= $minutes."&nbsp;".smarty_modifier_lang("_MIN".(($minutes>1)?"S":""));
		}
		if($minutes && $short) return $s;
		
		if($short) return $seconds."&nbsp;".smarty_modifier_lang("_SEC".(($seconds>1)?"S":""));
		
		return $s;
    } else {
        return;
    }
}

?>