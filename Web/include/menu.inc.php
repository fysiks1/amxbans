<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by SeToY & |PJ|ShOrTy

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

//get usermenu from db
$menu=array();
$query = mysql_query("SELECT * FROM `".$config->db_prefix."_usermenu` WHERE `activ`=1 ORDER BY `pos` ASC") or die (mysql_error());
while($result = mysql_fetch_object($query)) {
	$men=array(
		"id"=>$result->id,
		"pos"=>$result->pos,
		"activ"=>$result->activ,
		"lang_key"=>$result->lang_key,
		"url"=>$result->url,
		"lang_key2"=>$result->lang_key2,
		"url2"=>$result->url2
	);
	$menu[]=$men;
}
	
?>